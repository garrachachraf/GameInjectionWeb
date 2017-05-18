<?php

/* EloboostedFrontofficeBundle:Compte:addCompte.html.twig */
class __TwigTemplate_3552b894c54b83196de38af69e24b9aa403c7838d32f0121a647b258fb5e0d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig", 2);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b240ccdd0b112c1703ab34288189f40fbc527f4cd76472a1da54d8bbdd7090a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b240ccdd0b112c1703ab34288189f40fbc527f4cd76472a1da54d8bbdd7090a7->enter($__internal_b240ccdd0b112c1703ab34288189f40fbc527f4cd76472a1da54d8bbdd7090a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig"));

        $__internal_520c0cfb442383b131a51a955748d3e2bed2798a71c1b08262fabc7b87954944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520c0cfb442383b131a51a955748d3e2bed2798a71c1b08262fabc7b87954944->enter($__internal_520c0cfb442383b131a51a955748d3e2bed2798a71c1b08262fabc7b87954944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b240ccdd0b112c1703ab34288189f40fbc527f4cd76472a1da54d8bbdd7090a7->leave($__internal_b240ccdd0b112c1703ab34288189f40fbc527f4cd76472a1da54d8bbdd7090a7_prof);

        
        $__internal_520c0cfb442383b131a51a955748d3e2bed2798a71c1b08262fabc7b87954944->leave($__internal_520c0cfb442383b131a51a955748d3e2bed2798a71c1b08262fabc7b87954944_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0e604de866dc2e9c0177e4a6446839a44d1e330f1aef13284a5639e4c079894a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e604de866dc2e9c0177e4a6446839a44d1e330f1aef13284a5639e4c079894a->enter($__internal_0e604de866dc2e9c0177e4a6446839a44d1e330f1aef13284a5639e4c079894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1a10e9fc8189cc9e62c6361217d606d832f75006e4a18c91b7caa00f72dc141a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a10e9fc8189cc9e62c6361217d606d832f75006e4a18c91b7caa00f72dc141a->enter($__internal_1a10e9fc8189cc9e62c6361217d606d832f75006e4a18c91b7caa00f72dc141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"> </script>

    <script>
        \$(document).ready(function () {
            var RandomCode=  Math.floor(Math.random()*(9999999-1000000+1)+1000000);
            \$('#SubmitBtn').hide();
            \$('#SubmitBtn').prop('disabled', true);

            function validateEmail(email)
            {
                var re = /\\S+@\\S+\\.\\S+/;
                return re.test(email);
            }

            //////////////////////
            //////////////////////
           // \$('.class1').add('.class2').on('click', some_function);

            //////////////////////
            //////////////////////

            \$('#Email').keyup(function() {
                var Addressmail=\$('#Email').val();

                if(Addressmail != '' && validateEmail(Addressmail))
                {
                    \$.ajax({
                        url: \"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emailVerif");
        echo "\",
                        method: \"post\",
                        data : { email : Addressmail },
                        type : 'json',
                        success: function (data) {

                            console.log(data);
                            if(data['data']==\"noexist\")
                            {
                                console.log(1);
                                \$('#emailError').css('color', 'green');
                                \$('#emailError').html('This email is available');
                            }
                            else
                            {
                                console.log(2);
                                \$('#emailError').css('color', 'red');
                                \$('#emailError').html('This email is aleady in use');
                            }



                        }

                    })
                }
                else
                {
                    \$('#emailError').html('');
                }
            });

            \$('#dateInput').change(function() {
                var today =new Date();
                var inputDate = new Date(\$('#dateInput').val());
                if (inputDate > today) {
                    \$('#dateInput').val('');
                    alert(\"Please select a valid date\");
                }
            });



            \$('#firstCheck').click(
                function () {
                    RandomCode=  Math.floor(Math.random()*(9999999-1000000+1)+1000000);
                    var Addressmail = \$('#Email').val();
                    \$('#code').html(RandomCode);
                    console.log(Addressmail+\" \"+RandomCode);

                    var nom=\$('#Nom').val();
                    var prenom=\$('#Prenom').val();
                    var telnum=\$('#TelNum').val();
                    var datedenaissance=\$('#dateInput').val();
                    var pseudo=\$('#Pseudo').val();
                    var motdepasse=\$('#MotDePasse').val();
                    var email=\$('#Email').val();
                    var image=\$('#BSbtnsuccess').val().length;
                    var emailError=\$('#emailError').html();

                    if(nom == '' || prenom == '' || telnum == '' || !Date.parse(datedenaissance) ||  pseudo == '' || motdepasse == '' || validateEmail(email)==false || image==0 || emailError=='This email is aleady in use' )
                    {
                        alert(\"Please input valid information\");
                    }
                    else {



                        \$.ajax({
                            url: \"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SendMail");
        echo "\",
                            method: \"post\",
                            data : { code : RandomCode, mail : Addressmail },
                            type : 'json',
                            success: function (data) {

                                console.log(data['data']);
                                \$('#Part1').fadeOut();
                                \$('#Part2').fadeIn();
                                \$('#SubmitBtn').show();
                                \$('#firstCheck').hide();


                            }

                        })
                    }


                });

            \$(\"#CodeInput\").keyup(function () {

                if(\$(\"#CodeInput\").val()==RandomCode)
                {
                    \$('#SubmitBtn').prop('disabled', false);
                }
               else
                {
                    \$('#SubmitBtn').prop('disabled', true);
                }
            })


        })

    </script>
    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

            </div>

    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
        echo "\">Sign up</a></li>
                        <li class=\"active\">Create new account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"hero hero-panel\" style=\"background-image: url(";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/cover/cover-register.jpg"), "html", null, true);
        echo ");\"  >
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accountcreation");
        echo "\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                    <div class=\"panel panel-default panel-login\">
                        <div class=\"panel-body\">
                    <div class=\"title\">
                        <h3> Registed new account</h3>
                    </div>
                    <div id=\"Part1\">
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Nom\" id=\"Nom\" placeholder=\"Fist Name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Prenom\" id=\"Prenom\" placeholder=\"Last Name\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Pseudo\" id=\"Pseudo\" placeholder=\"Nickname\">
                    </div>

                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-user-secret\" data-original-title=\"\" title=\"\"></i>
                        <input type=\"password\" autocomplete=\"false\" required class=\"form-control\" name=\"MotDePasse\" id=\"MotDePasse\" placeholder=\"Password\">
                    </div>

                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-at\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"email\" class=\"form-control\" autocomplete=\"off\" id=\"Email\" required name=\"Email\" placeholder=\"E-mail\">
                            <p id=\"emailError\" style=\"color: red\"></p>
                        </div>

                        <div class=\"form-group \">
                            <input type=\"date\" id=\"dateInput\" required name=\"DateDeNaissance\" class=\"form-control bootstrap-datetimepicker-widget\">

                        </div>

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-phone\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" required name=\"TelNum\" placeholder=\"Phone number\">
                        </div>

                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"image\" required class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>

                </div>
                    <div id=\"Part2\" hidden>
                        <div class=\"form-group input-icon-left\">
                            <div class=\"form-group -arrow-circle-left\">We have just sent a verifcation code to your e-mail <br>
                                Please write it below
                            </div>
                        </div>
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-code\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" id=\"CodeInput\" class=\"form-control\" required placeholder=\"Verification code\">
                        </div>
                        <div class=\"text-center margin-top-30\">
                            <button type=\"submit\" id=\"SubmitBtn\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Submit</button>
                        </div>
                    </div>


                    <div class=\"text-center margin-top-30\">
                        <button type=\"button\" id=\"firstCheck\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Comfirm</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
                </form>



            </div>

        </div>
    </section>


";
        
        $__internal_1a10e9fc8189cc9e62c6361217d606d832f75006e4a18c91b7caa00f72dc141a->leave($__internal_1a10e9fc8189cc9e62c6361217d606d832f75006e4a18c91b7caa00f72dc141a_prof);

        
        $__internal_0e604de866dc2e9c0177e4a6446839a44d1e330f1aef13284a5639e4c079894a->leave($__internal_0e604de866dc2e9c0177e4a6446839a44d1e330f1aef13284a5639e4c079894a_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:addCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 162,  220 => 159,  210 => 152,  194 => 139,  153 => 101,  81 => 32,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/FrontofficeBundle/Resources/views/Products/addProduct.html.twig #}
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <script type=\"text/javascript\" src=\"http://www.jquery-az.com/boots/js/bootstrap-filestyle.min.js\"> </script>

    <script>
        \$(document).ready(function () {
            var RandomCode=  Math.floor(Math.random()*(9999999-1000000+1)+1000000);
            \$('#SubmitBtn').hide();
            \$('#SubmitBtn').prop('disabled', true);

            function validateEmail(email)
            {
                var re = /\\S+@\\S+\\.\\S+/;
                return re.test(email);
            }

            //////////////////////
            //////////////////////
           // \$('.class1').add('.class2').on('click', some_function);

            //////////////////////
            //////////////////////

            \$('#Email').keyup(function() {
                var Addressmail=\$('#Email').val();

                if(Addressmail != '' && validateEmail(Addressmail))
                {
                    \$.ajax({
                        url: \"{{ path('emailVerif') }}\",
                        method: \"post\",
                        data : { email : Addressmail },
                        type : 'json',
                        success: function (data) {

                            console.log(data);
                            if(data['data']==\"noexist\")
                            {
                                console.log(1);
                                \$('#emailError').css('color', 'green');
                                \$('#emailError').html('This email is available');
                            }
                            else
                            {
                                console.log(2);
                                \$('#emailError').css('color', 'red');
                                \$('#emailError').html('This email is aleady in use');
                            }



                        }

                    })
                }
                else
                {
                    \$('#emailError').html('');
                }
            });

            \$('#dateInput').change(function() {
                var today =new Date();
                var inputDate = new Date(\$('#dateInput').val());
                if (inputDate > today) {
                    \$('#dateInput').val('');
                    alert(\"Please select a valid date\");
                }
            });



            \$('#firstCheck').click(
                function () {
                    RandomCode=  Math.floor(Math.random()*(9999999-1000000+1)+1000000);
                    var Addressmail = \$('#Email').val();
                    \$('#code').html(RandomCode);
                    console.log(Addressmail+\" \"+RandomCode);

                    var nom=\$('#Nom').val();
                    var prenom=\$('#Prenom').val();
                    var telnum=\$('#TelNum').val();
                    var datedenaissance=\$('#dateInput').val();
                    var pseudo=\$('#Pseudo').val();
                    var motdepasse=\$('#MotDePasse').val();
                    var email=\$('#Email').val();
                    var image=\$('#BSbtnsuccess').val().length;
                    var emailError=\$('#emailError').html();

                    if(nom == '' || prenom == '' || telnum == '' || !Date.parse(datedenaissance) ||  pseudo == '' || motdepasse == '' || validateEmail(email)==false || image==0 || emailError=='This email is aleady in use' )
                    {
                        alert(\"Please input valid information\");
                    }
                    else {



                        \$.ajax({
                            url: \"{{ path('SendMail') }}\",
                            method: \"post\",
                            data : { code : RandomCode, mail : Addressmail },
                            type : 'json',
                            success: function (data) {

                                console.log(data['data']);
                                \$('#Part1').fadeOut();
                                \$('#Part2').fadeIn();
                                \$('#SubmitBtn').show();
                                \$('#firstCheck').hide();


                            }

                        })
                    }


                });

            \$(\"#CodeInput\").keyup(function () {

                if(\$(\"#CodeInput\").val()==RandomCode)
                {
                    \$('#SubmitBtn').prop('disabled', false);
                }
               else
                {
                    \$('#SubmitBtn').prop('disabled', true);
                }
            })


        })

    </script>
    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">

            </div>

    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"{{ path('eloboosted_login_homepage') }}\">Sign up</a></li>
                        <li class=\"active\">Create new account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"hero hero-panel\" style=\"background-image: url({{ asset('FOassets/img/cover/cover-register.jpg') }});\"  >
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"{{ path('accountcreation') }}\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                    <div class=\"panel panel-default panel-login\">
                        <div class=\"panel-body\">
                    <div class=\"title\">
                        <h3> Registed new account</h3>
                    </div>
                    <div id=\"Part1\">
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Nom\" id=\"Nom\" placeholder=\"Fist Name\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Prenom\" id=\"Prenom\" placeholder=\"Last Name\">
                    </div>

                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" name=\"Pseudo\" id=\"Pseudo\" placeholder=\"Nickname\">
                    </div>

                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-user-secret\" data-original-title=\"\" title=\"\"></i>
                        <input type=\"password\" autocomplete=\"false\" required class=\"form-control\" name=\"MotDePasse\" id=\"MotDePasse\" placeholder=\"Password\">
                    </div>

                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-at\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"email\" class=\"form-control\" autocomplete=\"off\" id=\"Email\" required name=\"Email\" placeholder=\"E-mail\">
                            <p id=\"emailError\" style=\"color: red\"></p>
                        </div>

                        <div class=\"form-group \">
                            <input type=\"date\" id=\"dateInput\" required name=\"DateDeNaissance\" class=\"form-control bootstrap-datetimepicker-widget\">

                        </div>

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-phone\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" required name=\"TelNum\" placeholder=\"Phone number\">
                        </div>

                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"image\" required class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
                            <script>\$('#BSbtnsuccess').filestyle({
                                    buttonName : 'btn-success',
                                    buttonText : ' Choose an image'
                                });</script>
                        </div>
                    </div>

                </div>
                    <div id=\"Part2\" hidden>
                        <div class=\"form-group input-icon-left\">
                            <div class=\"form-group -arrow-circle-left\">We have just sent a verifcation code to your e-mail <br>
                                Please write it below
                            </div>
                        </div>
                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-code\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" id=\"CodeInput\" class=\"form-control\" required placeholder=\"Verification code\">
                        </div>
                        <div class=\"text-center margin-top-30\">
                            <button type=\"submit\" id=\"SubmitBtn\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Submit</button>
                        </div>
                    </div>


                    <div class=\"text-center margin-top-30\">
                        <button type=\"button\" id=\"firstCheck\" class=\"btn btn-success btn-lg btn-rounded btn-shadow\">Comfirm</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
                </form>



            </div>

        </div>
    </section>


{% endblock %}
", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/addCompte.html.twig");
    }
}
