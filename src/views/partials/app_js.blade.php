//<script>
    $(function () {
        var url = window.location.search.match(/url=([^&]+)/);
        if (url && url.length > 1) {
            url = decodeURIComponent(url[1]);
        } else {
            url =  url = "{!! $urlToDocs !!}";
        }
        if(window.SwaggerTranslator) {
            window.SwaggerTranslator.translate();
        }

        window.swaggerUi = new SwaggerUi({
            validatorUrl: false,
            url: url,
            dom_id: "swagger-ui-container",
            supportedSubmitMethods: ['get', 'post', 'put', 'delete', 'patch'],
            onComplete: function(swaggerApi, swaggerUi){
                if(typeof initOAuth == "function") {
                    initOAuth({
                        clientId: "your-client-id",
                        clientSecret: "your-client-secret",
                        realm: "your-realms",
                        appName: "your-app-name",
                        scopeSeparator: ","
                    });
                }

                if(window.SwaggerTranslator) {
                    window.SwaggerTranslator.translate();
                }

                $('pre code').each(function(i, e) {
                    hljs.highlightBlock(e)
                });

                addApiKeyAuthorization();
            },
            onFailure: function(data) {
                log("Unable to Load SwaggerUI");
            },
            docExpansion: "none",
            apisSorter: "alpha",
            showRequestHeaders: false
        });

        function addApiKeyAuthorization(){
            var key = encodeURIComponent($('#input_apiKey')[0].value);
            if(key && key.trim() != "") {
                var apiKeyAuth = new SwaggerClient.ApiKeyAuthorization("{!! $api_key !!}", key, "query");
                window.swaggerUi.api.clientAuthorizations.add("api_key", apiKeyAuth);
                log("added key " + key);
            }
        }

        $('#input_apiKey').change(addApiKeyAuthorization);

        window.swaggerUi.load();

        function log() {
            if ('console' in window) {
                console.log.apply(console, arguments);
            }
        }
    });
//</script>