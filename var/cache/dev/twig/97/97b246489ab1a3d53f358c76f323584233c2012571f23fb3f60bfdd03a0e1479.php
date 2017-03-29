<?php

/* EloboostedFrontofficeBundle:Compte:addCompte.html.twig */
class __TwigTemplate_9c62c7dd30a7cd87f3aac2c863376ecdaba26d6837efcd9eb8c43a3d2937d92f extends Twig_Template
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
        $__internal_8f59db00af846436daba5fd9c82b74aa274f0b29d5b5b5c7d06ff16eda6c56f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f59db00af846436daba5fd9c82b74aa274f0b29d5b5b5c7d06ff16eda6c56f3->enter($__internal_8f59db00af846436daba5fd9c82b74aa274f0b29d5b5b5c7d06ff16eda6c56f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig"));

        $__internal_e1ad2644b5bb45f6b1526d5b535cd1a8800b1c54bd12be73e1bfa7f3f5d6a74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ad2644b5bb45f6b1526d5b535cd1a8800b1c54bd12be73e1bfa7f3f5d6a74f->enter($__internal_e1ad2644b5bb45f6b1526d5b535cd1a8800b1c54bd12be73e1bfa7f3f5d6a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f59db00af846436daba5fd9c82b74aa274f0b29d5b5b5c7d06ff16eda6c56f3->leave($__internal_8f59db00af846436daba5fd9c82b74aa274f0b29d5b5b5c7d06ff16eda6c56f3_prof);

        
        $__internal_e1ad2644b5bb45f6b1526d5b535cd1a8800b1c54bd12be73e1bfa7f3f5d6a74f->leave($__internal_e1ad2644b5bb45f6b1526d5b535cd1a8800b1c54bd12be73e1bfa7f3f5d6a74f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_741d48a7dd6b66d4f82b955fde8160e00791070cdc350ba204924dd18dab3f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741d48a7dd6b66d4f82b955fde8160e00791070cdc350ba204924dd18dab3f0e->enter($__internal_741d48a7dd6b66d4f82b955fde8160e00791070cdc350ba204924dd18dab3f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fe509b05d4c7b2ddcd4c6b01950ea2680674b8228291fca8c387e760533e96ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe509b05d4c7b2ddcd4c6b01950ea2680674b8228291fca8c387e760533e96ee->enter($__internal_fe509b05d4c7b2ddcd4c6b01950ea2680674b8228291fca8c387e760533e96ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        // line 34
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
        // line 71
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
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_logins");
        echo "\">Sign up</a></li>
                        <li class=\"active\">Create new account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accountcreation");
        echo "\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
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
                </form>


                <div class=\"col-lg-5 height-300\">
                    <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/content/contact.jpg"), "html", null, true);
        echo "\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
            </div>

        </div>
    </section>


";
        
        $__internal_fe509b05d4c7b2ddcd4c6b01950ea2680674b8228291fca8c387e760533e96ee->leave($__internal_fe509b05d4c7b2ddcd4c6b01950ea2680674b8228291fca8c387e760533e96ee_prof);

        
        $__internal_741d48a7dd6b66d4f82b955fde8160e00791070cdc350ba204924dd18dab3f0e->leave($__internal_741d48a7dd6b66d4f82b955fde8160e00791070cdc350ba204924dd18dab3f0e_prof);

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
        return array (  234 => 173,  152 => 94,  139 => 84,  123 => 71,  83 => 34,  49 => 4,  40 => 3,  11 => 2,);
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
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"{{ path('accountcreation') }}\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
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
                </form>


                <div class=\"col-lg-5 height-300\">
                    <img src=\"{{ asset('img/content/contact.jpg') }}\"  width=\"120%\" height=\"150%\"  class=\"image-right padding-top-50\" alt=\"\">
                </div>
            </div>

        </div>
    </section>


{% endblock %}
", "EloboostedFrontofficeBundle:Compte:addCompte.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Compte/addCompte.html.twig");
    }
}
