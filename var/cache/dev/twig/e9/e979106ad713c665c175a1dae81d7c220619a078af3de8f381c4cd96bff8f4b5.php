<?php

/* EloboostedFrontofficeBundle:Compte:editCompte.html.twig */
class __TwigTemplate_956358aad95d6568ea299702ebc1e92aa39784fd2e512dd46887a092ce069694 extends Twig_Template
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
        $__internal_c50b6a3dc252118737ca9ecf77a13fdfcef15c977a656bf5fe5f4ce8e5ccc4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50b6a3dc252118737ca9ecf77a13fdfcef15c977a656bf5fe5f4ce8e5ccc4f3->enter($__internal_c50b6a3dc252118737ca9ecf77a13fdfcef15c977a656bf5fe5f4ce8e5ccc4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig"));

        $__internal_b3a810857cb453ca2040d11fef00b7913974543800519f7032a2e0232db4c165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a810857cb453ca2040d11fef00b7913974543800519f7032a2e0232db4c165->enter($__internal_b3a810857cb453ca2040d11fef00b7913974543800519f7032a2e0232db4c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c50b6a3dc252118737ca9ecf77a13fdfcef15c977a656bf5fe5f4ce8e5ccc4f3->leave($__internal_c50b6a3dc252118737ca9ecf77a13fdfcef15c977a656bf5fe5f4ce8e5ccc4f3_prof);

        
        $__internal_b3a810857cb453ca2040d11fef00b7913974543800519f7032a2e0232db4c165->leave($__internal_b3a810857cb453ca2040d11fef00b7913974543800519f7032a2e0232db4c165_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c8ab08ad0588f2ec939d6248af7f9fe2c08648986e459c8a1d2e3582ea51d3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ab08ad0588f2ec939d6248af7f9fe2c08648986e459c8a1d2e3582ea51d3d1->enter($__internal_c8ab08ad0588f2ec939d6248af7f9fe2c08648986e459c8a1d2e3582ea51d3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f6441bcd5323eaf2ee7cb92420bd556ac25ec591eb22b5065cf54e6f5967b5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6441bcd5323eaf2ee7cb92420bd556ac25ec591eb22b5065cf54e6f5967b5ee->enter($__internal_f6441bcd5323eaf2ee7cb92420bd556ac25ec591eb22b5065cf54e6f5967b5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emailVerif");
        echo "\",
                        method: \"post\",
                        data : { email : Addressmail },
                        type : 'json',
                        success: function (data) {

                            console.log(data);
                            if(Addressmail == \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "email", array()), "html", null, true);
        echo "\")
                            {
                                \$('#emailError').css('color', 'green');
                                \$('#emailError').html('This email is available');
                            }
                            else if(data['data']==\"noexist\")
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
                    var oldAddress=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "email", array()), "html", null, true);
        echo "\";
                    \$('#code').html(RandomCode);
                    console.log(oldAddress+\" \"+RandomCode);

                    var nom=\$('#Nom').val();
                    var prenom=\$('#Prenom').val();
                    var telnum=\$('#TelNum').val();
                    var datedenaissance=\$('#dateInput').val();
                    var pseudo=\$('#Pseudo').val();
                    var motdepasse=\$('#MotDePasse').val();
                    var email=\$('#Email').val();
                    var image=\$('#BSbtnsuccess').val().length;
                    var emailError=\$('#emailError').html();

                    if(nom == '' || prenom == '' || telnum == '' || !Date.parse(datedenaissance) ||  pseudo == '' || motdepasse == '' || validateEmail(email)==false ||  emailError=='This email is aleady in use' )
                    {
                        alert(\"Please input valid information\");
                    }
                    else {



                        \$.ajax({
                            url: \"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SendMail");
        echo "\",
                            method: \"post\",
                            data : { code : RandomCode, mail : oldAddress },
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
        // line 144
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
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
        echo "\">Sign up</a></li>
                        <li class=\"active\">Create new account</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"hero hero-panel\" style=\"background-image: url(";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/cover/cover-register.jpg"), "html", null, true);
        echo ");\"  >
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <form method=\"POST\"  enctype=\"multipart/form-data\"  action=\"";
        // line 167
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
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "nom", array()), "html", null, true);
        echo "\" name=\"Nom\" id=\"Nom\" placeholder=\"Fist Name\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "prenom", array()), "html", null, true);
        echo "\" name=\"Prenom\" id=\"Prenom\" placeholder=\"Last Name\">
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"text\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "\" name=\"Pseudo\" id=\"Pseudo\" placeholder=\"Nickname\">
                                    </div>

                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-user-secret\" data-original-title=\"\" title=\"\"></i>
                                        <input type=\"password\" autocomplete=\"false\" required class=\"form-control\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "motDePasse", array()), "html", null, true);
        echo "\" name=\"MotDePasse\" id=\"MotDePasse\" placeholder=\"Password\">
                                    </div>

                                    <div class=\"form-group\">

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-at\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"email\" class=\"form-control\" autocomplete=\"off\" id=\"Email\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "email", array()), "html", null, true);
        echo "\" required name=\"Email\" placeholder=\"E-mail\">
                                            <p id=\"emailError\" style=\"color: red\"></p>
                                        </div>

                                        <div class=\"form-group \">
                                            <input type=\"date\" id=\"dateInput\" required name=\"DateDeNaissance\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "dateDeNaissance", array()), "Y-m-d"), "html", null, true);
        echo "\"  class=\"form-control bootstrap-datetimepicker-widget\">

                                        </div>

                                        <div class=\"form-group input-icon-left\">
                                            <i class=\"fa fa-phone\" data-original-title=\"\" title=\"\"></i>
                                            <input type=\"number\" class=\"form-control\" required name=\"TelNum\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "telNum", array()), "html", null, true);
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
        
        $__internal_f6441bcd5323eaf2ee7cb92420bd556ac25ec591eb22b5065cf54e6f5967b5ee->leave($__internal_f6441bcd5323eaf2ee7cb92420bd556ac25ec591eb22b5065cf54e6f5967b5ee_prof);

        
        $__internal_c8ab08ad0588f2ec939d6248af7f9fe2c08648986e459c8a1d2e3582ea51d3d1->leave($__internal_c8ab08ad0588f2ec939d6248af7f9fe2c08648986e459c8a1d2e3582ea51d3d1_prof);

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
        return array (  299 => 208,  290 => 202,  282 => 197,  272 => 190,  264 => 185,  257 => 181,  251 => 178,  237 => 167,  231 => 164,  221 => 157,  205 => 144,  164 => 106,  138 => 83,  90 => 38,  80 => 31,  49 => 4,  40 => 3,  11 => 2,);
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
                            if(Addressmail == \"{{ userInfo.email }}\")
                            {
                                \$('#emailError').css('color', 'green');
                                \$('#emailError').html('This email is available');
                            }
                            else if(data['data']==\"noexist\")
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
                    var oldAddress=\"{{ userInfo.email }}\";
                    \$('#code').html(RandomCode);
                    console.log(oldAddress+\" \"+RandomCode);

                    var nom=\$('#Nom').val();
                    var prenom=\$('#Prenom').val();
                    var telnum=\$('#TelNum').val();
                    var datedenaissance=\$('#dateInput').val();
                    var pseudo=\$('#Pseudo').val();
                    var motdepasse=\$('#MotDePasse').val();
                    var email=\$('#Email').val();
                    var image=\$('#BSbtnsuccess').val().length;
                    var emailError=\$('#emailError').html();

                    if(nom == '' || prenom == '' || telnum == '' || !Date.parse(datedenaissance) ||  pseudo == '' || motdepasse == '' || validateEmail(email)==false ||  emailError=='This email is aleady in use' )
                    {
                        alert(\"Please input valid information\");
                    }
                    else {



                        \$.ajax({
                            url: \"{{ path('SendMail') }}\",
                            method: \"post\",
                            data : { code : RandomCode, mail : oldAddress },
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
                                            <input type=\"email\" class=\"form-control\" autocomplete=\"off\" id=\"Email\" value=\"{{ userInfo.email }}\" required name=\"Email\" placeholder=\"E-mail\">
                                            <p id=\"emailError\" style=\"color: red\"></p>
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
", "EloboostedFrontofficeBundle:Compte:editCompte.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/editCompte.html.twig");
    }
}
