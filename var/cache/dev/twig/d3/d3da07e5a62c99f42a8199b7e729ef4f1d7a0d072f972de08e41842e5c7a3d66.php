<?php

/* @EloboostedFrontoffice/Compte/addCompte.html.twig */
class __TwigTemplate_d0a21fd8fbdc8853e2ff4facb8897457defe43898488530804f05d9e99292164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Compte/addCompte.html.twig", 2);
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
        $__internal_fa9bc018f24f45a89261e8b2b9717046159d647fc3ff7d99ec961ef080ff1d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9bc018f24f45a89261e8b2b9717046159d647fc3ff7d99ec961ef080ff1d27->enter($__internal_fa9bc018f24f45a89261e8b2b9717046159d647fc3ff7d99ec961ef080ff1d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/addCompte.html.twig"));

        $__internal_755333f07c8db6c6d61c8340dd84b9a72ff719c0c52459342a0b7e5ad6f64900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755333f07c8db6c6d61c8340dd84b9a72ff719c0c52459342a0b7e5ad6f64900->enter($__internal_755333f07c8db6c6d61c8340dd84b9a72ff719c0c52459342a0b7e5ad6f64900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/addCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9bc018f24f45a89261e8b2b9717046159d647fc3ff7d99ec961ef080ff1d27->leave($__internal_fa9bc018f24f45a89261e8b2b9717046159d647fc3ff7d99ec961ef080ff1d27_prof);

        
        $__internal_755333f07c8db6c6d61c8340dd84b9a72ff719c0c52459342a0b7e5ad6f64900->leave($__internal_755333f07c8db6c6d61c8340dd84b9a72ff719c0c52459342a0b7e5ad6f64900_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_d412fc496535b970a221995186f357f8e3ab611f3b9691e96ec077e03cdee508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d412fc496535b970a221995186f357f8e3ab611f3b9691e96ec077e03cdee508->enter($__internal_d412fc496535b970a221995186f357f8e3ab611f3b9691e96ec077e03cdee508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6118ca7bace7fc701ac2fa3e742a1a712a3a637fd99f86ff4dcab197f9fe2b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6118ca7bace7fc701ac2fa3e742a1a712a3a637fd99f86ff4dcab197f9fe2b99->enter($__internal_6118ca7bace7fc701ac2fa3e742a1a712a3a637fd99f86ff4dcab197f9fe2b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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

            //////////////////////
            //////////////////////
           // \$('.class1').add('.class2').on('click', some_function);

            //////////////////////
            //////////////////////

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

                    \$.ajax({
                        url: \"";
        // line 39
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
        // line 76
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
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_logins");
        echo "\">Sign up</a></li>
                        <li class=\"active\">Create new account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"hero hero-panel\" style=\"background-image: url(";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/cover/cover-register.jpg"), "html", null, true);
        echo ");\"  >
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"";
        // line 99
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
                            <input type=\"email\" class=\"form-control\" id=\"Email\" required name=\"Email\" placeholder=\"E-mail\">
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
        
        $__internal_6118ca7bace7fc701ac2fa3e742a1a712a3a637fd99f86ff4dcab197f9fe2b99->leave($__internal_6118ca7bace7fc701ac2fa3e742a1a712a3a637fd99f86ff4dcab197f9fe2b99_prof);

        
        $__internal_d412fc496535b970a221995186f357f8e3ab611f3b9691e96ec077e03cdee508->leave($__internal_d412fc496535b970a221995186f357f8e3ab611f3b9691e96ec077e03cdee508_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Compte/addCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 99,  154 => 96,  144 => 89,  128 => 76,  88 => 39,  49 => 4,  40 => 3,  11 => 2,);
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

            //////////////////////
            //////////////////////
           // \$('.class1').add('.class2').on('click', some_function);

            //////////////////////
            //////////////////////

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
                        <li><a href=\"{{ path('check_logins') }}\">Sign up</a></li>
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
                            <input type=\"email\" class=\"form-control\" id=\"Email\" required name=\"Email\" placeholder=\"E-mail\">
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
", "@EloboostedFrontoffice/Compte/addCompte.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Compte\\addCompte.html.twig");
    }
}
