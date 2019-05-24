$(function()
{

    //jQuery Captcha Validation
    WEBAPP = {

        settings: {},
        cache: {},

        init: function() {

            //DOM cache
            this.cache.$form = $('#captcha-form');
            this.cache.$refreshCaptcha = $('#refresh-captcha');
            this.cache.$captchaImg = $('img#captcha');
            this.cache.$captchaInput = $(':input[name="captcha"]');

            this.eventHandlers();
            this.setupValidation();

        },

        eventHandlers: function() {

            //generate new captcha
            WEBAPP.cache.$refreshCaptcha.on('click', function(e)
            {
                WEBAPP.cache.$captchaImg.attr("src","/php/newCaptcha.php?rnd=" + Math.random());
            });
        },

        setupValidation: function()
        {

            WEBAPP.cache.$form.validate({
               onkeyup: false,
               rules: {
                    "login": {
                        "required": true
                    },
                    "haslo": {
                        "required": true
                    },
                    "captcha": {
                        "required": true,
                        "remote" :
                        {
                          url: '/php/checkCaptcha.php',
                          type: "post",
                          data:
                          {
                              code: function()
                              {
                                  return WEBAPP.cache.$captchaInput.val();
                              }
                          }
                        }
                    }
                },
                messages: {
                    "login": "Proszę podaj swoje login.",
                    "haslo": "Proszę podaj swoje haslo.",
                    "captcha": {
                        "required": "Proszę podaj weryfikacyjny kodu.",
                        "remote": "Niepoprawny kod weryfikacyjny, spróbuj ponownie."
                    }
                },
                submitHandler: function(form)
                {
                    /* -------- AJAX SUBMIT ----------------------------------------------------- */

                    var submitRequest = $.ajax({
                         type: "POST",
                         url: "/php/dummyScript.php",
                         data: {
                            "data": WEBAPP.cache.$form.serialize()
                        }
                    });

                    submitRequest.done(function(msg)
                    {
                        //success
                        console.log('success');
                        $('body').html('captcha poprawne, złożyć formularz sukcesu!');
                    });

                    submitRequest.fail(function(jqXHR, textStatus)
                    {
                        //fail
                        console.log( "nie powiodło się - wystąpił błąd: (" + textStatus + ")." );
                    });

                }

            });

        }

    }

    WEBAPP.init();

});
