<?php

/* @EloboostedFrontoffice/Compte/editCompte.html.twig */
class __TwigTemplate_712b0779b2700ba6407429f1b192fd942c4883413e7a668c3efe07df035263b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Compte/editCompte.html.twig", 2);
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
        $__internal_dd9ccf9b0bf31e9bd53a45f506eb7e8867226185e5ab4c56734ba2bbd06b4ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9ccf9b0bf31e9bd53a45f506eb7e8867226185e5ab4c56734ba2bbd06b4ce0->enter($__internal_dd9ccf9b0bf31e9bd53a45f506eb7e8867226185e5ab4c56734ba2bbd06b4ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/editCompte.html.twig"));

        $__internal_7c34beaf0a9cbdbf8eeb00fbd50a64157b9cb0caf296f1787554065f74c0d1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c34beaf0a9cbdbf8eeb00fbd50a64157b9cb0caf296f1787554065f74c0d1d1->enter($__internal_7c34beaf0a9cbdbf8eeb00fbd50a64157b9cb0caf296f1787554065f74c0d1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/editCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9ccf9b0bf31e9bd53a45f506eb7e8867226185e5ab4c56734ba2bbd06b4ce0->leave($__internal_dd9ccf9b0bf31e9bd53a45f506eb7e8867226185e5ab4c56734ba2bbd06b4ce0_prof);

        
        $__internal_7c34beaf0a9cbdbf8eeb00fbd50a64157b9cb0caf296f1787554065f74c0d1d1->leave($__internal_7c34beaf0a9cbdbf8eeb00fbd50a64157b9cb0caf296f1787554065f74c0d1d1_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5f823aa222709c312bb414f4359b66c8fe23e447f39184ee4ae557b7033932c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f823aa222709c312bb414f4359b66c8fe23e447f39184ee4ae557b7033932c3->enter($__internal_5f823aa222709c312bb414f4359b66c8fe23e447f39184ee4ae557b7033932c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_609a89aefd6557b37021dfb2c1383809f03c417ab408eef7f527d334cbff6205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609a89aefd6557b37021dfb2c1383809f03c417ab408eef7f527d334cbff6205->enter($__internal_609a89aefd6557b37021dfb2c1383809f03c417ab408eef7f527d334cbff6205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_609a89aefd6557b37021dfb2c1383809f03c417ab408eef7f527d334cbff6205->leave($__internal_609a89aefd6557b37021dfb2c1383809f03c417ab408eef7f527d334cbff6205_prof);

        
        $__internal_5f823aa222709c312bb414f4359b66c8fe23e447f39184ee4ae557b7033932c3->leave($__internal_5f823aa222709c312bb414f4359b66c8fe23e447f39184ee4ae557b7033932c3_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Compte/editCompte.html.twig";
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
", "@EloboostedFrontoffice/Compte/editCompte.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Compte\\editCompte.html.twig");
    }
}
