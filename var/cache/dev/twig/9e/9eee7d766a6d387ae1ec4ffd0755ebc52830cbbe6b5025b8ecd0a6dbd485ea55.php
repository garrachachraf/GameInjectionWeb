<?php

/* EloboostedFrontofficeBundle:Compte:editCompte.html.twig */
class __TwigTemplate_363530b2e3969c54b694514cf24b5aac1912fdaf75254e5be40ce6bd146d942e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig", 2);
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
        $__internal_37c02544e25f819e9777962d5c91a498f0befe498c795c4b6e0d5c45e4046ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c02544e25f819e9777962d5c91a498f0befe498c795c4b6e0d5c45e4046ef5->enter($__internal_37c02544e25f819e9777962d5c91a498f0befe498c795c4b6e0d5c45e4046ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig"));

        $__internal_5fe735991d0bb1876ad9674b6fccfe0279df0ddd5172c981962a0008ca1e0159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe735991d0bb1876ad9674b6fccfe0279df0ddd5172c981962a0008ca1e0159->enter($__internal_5fe735991d0bb1876ad9674b6fccfe0279df0ddd5172c981962a0008ca1e0159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c02544e25f819e9777962d5c91a498f0befe498c795c4b6e0d5c45e4046ef5->leave($__internal_37c02544e25f819e9777962d5c91a498f0befe498c795c4b6e0d5c45e4046ef5_prof);

        
        $__internal_5fe735991d0bb1876ad9674b6fccfe0279df0ddd5172c981962a0008ca1e0159->leave($__internal_5fe735991d0bb1876ad9674b6fccfe0279df0ddd5172c981962a0008ca1e0159_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_fa77ccad469ecb0c3d7d247fc78d6d41f1cc4cf364bb4116e070af93f8bf91b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa77ccad469ecb0c3d7d247fc78d6d41f1cc4cf364bb4116e070af93f8bf91b8->enter($__internal_fa77ccad469ecb0c3d7d247fc78d6d41f1cc4cf364bb4116e070af93f8bf91b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7264ef223e88566f81b5d8a37f81b9588c6b12aa8f889d2623de89a08b8cf48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7264ef223e88566f81b5d8a37f81b9588c6b12aa8f889d2623de89a08b8cf48d->enter($__internal_7264ef223e88566f81b5d8a37f81b9588c6b12aa8f889d2623de89a08b8cf48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accountEdit");
        echo "\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                        <div class=\"panel panel-default panel-login\">
                            <div class=\"panel-body\">
                                <div class=\"title\">
                                    <h3> Edit your account</h3>
                                </div>
                                <div id=\"Part1\">

                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "nom", array()), "html", null, true);
        echo "\" name=\"Nom\" id=\"Nom\" placeholder=\"Fist Name\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "prenom", array()), "html", null, true);
        echo "\" name=\"Prenom\" id=\"Prenom\" placeholder=\"Last Name\">
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"Pseudo\" placeholder=\"Nickname\">
                                    </div>

                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-user-secret\" data-original-title=\"\" title=\"\"></i>
                                        <input type=\"password\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "motDePasse", array()), "html", null, true);
        echo "\" name=\"MotDePasse\" id=\"MotDePasse\" placeholder=\"Password\">
                                    </div>

                                    <div class=\"form-group\">

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-at\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"email\" class=\"form-control\" id=\"Email\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "email", array()), "html", null, true);
        echo "\" required name=\"Email\" placeholder=\"E-mail\">
                                        </div>

                                        <div class=\"form-group \">
                                            <input type=\"date\" id=\"dateInput\" required name=\"DateDeNaissance\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo "\"  class=\"form-control bootstrap-datetimepicker-widget\">

                                        </div>

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-phone\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"number\" class=\"form-control\" required name=\"TelNum\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "telNum", array()), "html", null, true);
        echo "\" placeholder=\"Phone number\">
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"image\"  class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
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
        
        $__internal_7264ef223e88566f81b5d8a37f81b9588c6b12aa8f889d2623de89a08b8cf48d->leave($__internal_7264ef223e88566f81b5d8a37f81b9588c6b12aa8f889d2623de89a08b8cf48d_prof);

        
        $__internal_fa77ccad469ecb0c3d7d247fc78d6d41f1cc4cf364bb4116e070af93f8bf91b8->leave($__internal_fa77ccad469ecb0c3d7d247fc78d6d41f1cc4cf364bb4116e070af93f8bf91b8_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:editCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 139,  212 => 133,  205 => 129,  195 => 122,  187 => 117,  180 => 113,  174 => 110,  160 => 99,  154 => 96,  144 => 89,  128 => 76,  88 => 39,  49 => 4,  40 => 3,  11 => 2,);
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
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"{{ path('accountEdit') }}\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                        <div class=\"panel panel-default panel-login\">
                            <div class=\"panel-body\">
                                <div class=\"title\">
                                    <h3> Edit your account</h3>
                                </div>
                                <div id=\"Part1\">

                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"{{ userInfo.nom }}\" name=\"Nom\" id=\"Nom\" placeholder=\"Fist Name\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"{{ userInfo.prenom }}\" name=\"Prenom\" id=\"Prenom\" placeholder=\"Last Name\">
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"{{ userInfo.pseudo }}\" name=\"Pseudo\" id=\"Pseudo\" placeholder=\"Nickname\">
                                    </div>

                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-user-secret\" data-original-title=\"\" title=\"\"></i>
                                        <input type=\"password\" autocomplete=\"false\" required class=\"form-control\" value=\"{{ userInfo.motDePasse }}\" name=\"MotDePasse\" id=\"MotDePasse\" placeholder=\"Password\">
                                    </div>

                                    <div class=\"form-group\">

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-at\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"email\" class=\"form-control\" id=\"Email\" value=\"{{ userInfo.email }}\" required name=\"Email\" placeholder=\"E-mail\">
                                        </div>

                                        <div class=\"form-group \">
                                            <input type=\"date\" id=\"dateInput\" required name=\"DateDeNaissance\" value=\"{{ userInfo.dateDeNaissance|date(\"Y-m-d\") }}\"  class=\"form-control bootstrap-datetimepicker-widget\">

                                        </div>

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-phone\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"number\" class=\"form-control\" required name=\"TelNum\" value=\"{{ userInfo.telNum }}\" placeholder=\"Phone number\">
                                        </div>

                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                                            <input type=\"file\" id=\"BSbtnsuccess\" name=\"image\"  class=\"BSbtnsuccess\" placeholder=\"Select Tournament image\">
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
", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Compte/editCompte.html.twig");
    }
}
