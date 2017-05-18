<?php

/* EloboostedFrontofficeBundle:Default:Layout.html.twig */
class __TwigTemplate_ed4daf3f67e45116ee43c6656f92897e0aac53535fb414781ef98556808e2bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075701ee862e4e66df736d9c5f5fe84754bf710e96a4927106d8cc48ed3fa74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075701ee862e4e66df736d9c5f5fe84754bf710e96a4927106d8cc48ed3fa74e->enter($__internal_075701ee862e4e66df736d9c5f5fe84754bf710e96a4927106d8cc48ed3fa74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Default:Layout.html.twig"));

        $__internal_073a3096ec684f3ea8a5c2809acf163b03c0493a3c49019c66ee8ab0ca198879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073a3096ec684f3ea8a5c2809acf163b03c0493a3c49019c66ee8ab0ca198879->enter($__internal_073a3096ec684f3ea8a5c2809acf163b03c0493a3c49019c66ee8ab0ca198879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Default:Layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/prettify-1.0.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/prettify-1.0.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>

        .custom {
            background: #ff081b;
            animation: myfirst 5s;
            -webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
        }

        @-webkit-keyframes myfirst /* Firefox */
        {
            0% {
                background: red;
            }
            50% {
                background: #e6023f;
            }
            100% {
                background: #ff0079;
            }
        }


    </style>

    ";
        // line 41
        $this->displayBlock('head', $context, $blocks);
        // line 67
        echo "</head>

<body class=\"fixed-header\">
";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 339
        echo "
</body>
</html>";
        
        $__internal_075701ee862e4e66df736d9c5f5fe84754bf710e96a4927106d8cc48ed3fa74e->leave($__internal_075701ee862e4e66df736d9c5f5fe84754bf710e96a4927106d8cc48ed3fa74e_prof);

        
        $__internal_073a3096ec684f3ea8a5c2809acf163b03c0493a3c49019c66ee8ab0ca198879->leave($__internal_073a3096ec684f3ea8a5c2809acf163b03c0493a3c49019c66ee8ab0ca198879_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_3afd2cf7821c7835ca505f6a1b162d4a530bc42a1d34320a2afff4f4f00b4b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3afd2cf7821c7835ca505f6a1b162d4a530bc42a1d34320a2afff4f4f00b4b8b->enter($__internal_3afd2cf7821c7835ca505f6a1b162d4a530bc42a1d34320a2afff4f4f00b4b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf1975625585d6bbd0c3bc62cbc0ad1f8a0749a037faf7f14c4e2a2c2697c156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1975625585d6bbd0c3bc62cbc0ad1f8a0749a037faf7f14c4e2a2c2697c156->enter($__internal_bf1975625585d6bbd0c3bc62cbc0ad1f8a0749a037faf7f14c4e2a2c2697c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 42
        echo "        <!-- META -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title> EloBoosted-GameHub </title>

        <!-- FAVICON -->
        <link rel=\"shortcut icon\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">

        <!-- CORE CSS -->
        <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/SideNav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_bf1975625585d6bbd0c3bc62cbc0ad1f8a0749a037faf7f14c4e2a2c2697c156->leave($__internal_bf1975625585d6bbd0c3bc62cbc0ad1f8a0749a037faf7f14c4e2a2c2697c156_prof);

        
        $__internal_3afd2cf7821c7835ca505f6a1b162d4a530bc42a1d34320a2afff4f4f00b4b8b->leave($__internal_3afd2cf7821c7835ca505f6a1b162d4a530bc42a1d34320a2afff4f4f00b4b8b_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f8b0512894ea51235de246d3b2074f82866c797700bd7ccca6932e7c32c89d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8b0512894ea51235de246d3b2074f82866c797700bd7ccca6932e7c32c89d4->enter($__internal_7f8b0512894ea51235de246d3b2074f82866c797700bd7ccca6932e7c32c89d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae89b5ca5cdf51fc7b0d8ce9a67d886dfc06ae89a3379306badc77cae24fb080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae89b5ca5cdf51fc7b0d8ce9a67d886dfc06ae89a3379306badc77cae24fb080->enter($__internal_ae89b5ca5cdf51fc7b0d8ce9a67d886dfc06ae89a3379306badc77cae24fb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "    <header>
        ";
        // line 72
        $this->displayBlock('header', $context, $blocks);
        // line 165
        echo "    </header>
    <!-- /header -->

    <div class=\"modal-search\">

        <div id=\"mySidenav\" class=\"sidenav\">
            <script>
                \$(document).ready(function() {

                    \$('#OpenNav').on('click',function () {

                        if(\$('#mySidenav').width()==0)
                        {
                            \$('#mySidenav').width(380);
                        }
                        else
                        {
                            \$('#mySidenav').width(0);
                        }
                    });





                    // Update messages section
                    window.setInterval(

                        function()
                        {
                            \$.post('";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lstmsg");
        echo "', function(data) {
                                \$('#renderedChat').html(data);
                            });

                        }

                        , 500);

                    \$('#msg').on('submit', function(e) {
                        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

                        var \$this = \$(this);

                        \$.ajax({
                            url: \$this.attr('action'),
                            type: 'post',
                            data: \$this.serialize(),
                            dataType: 'json', // JSON
                            success: function(json) {
                                console.log(json);
                            }

                        });
                        \$('#chatMessage').val('');



                        \$(\"#chatMessage\").focus();



                    });
                });

            </script>

            <div style=\"position: fixed;top: 56px;width: 368px\">
                ";
        // line 232
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 233
            echo "                    <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                        <div style=\"margin: 3px;font-size: 14px;padding: 5px\">
                            <form id=\"msg\" action=\"";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postmsg");
            echo "\" method=\"post\">
                                <label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
                                <input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
                                <input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
                            </form>
                        </div>
                    </div>

                    ";
            // line 248
            echo "

                ";
        } else {
            // line 251
            echo "                    <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                        <div style=\"margin: 3px;font-size: 15px;padding: 5px\">
                            <h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
                        </div>
                    </div>

                ";
        }
        // line 258
        echo "            </div>
            <div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
                ";
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Compte:listRender"));
        echo "
            </div>


        </div>

    </div><!-- /.modal-search -->

          <!-- wrapper -->
    <div id=\"wrapper\">

    ";
        // line 271
        $this->displayBlock('main', $context, $blocks);
        // line 281
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>

</div>
    <!-- /#wrapper -->

    <!-- footer -->
";
        // line 289
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_ae89b5ca5cdf51fc7b0d8ce9a67d886dfc06ae89a3379306badc77cae24fb080->leave($__internal_ae89b5ca5cdf51fc7b0d8ce9a67d886dfc06ae89a3379306badc77cae24fb080_prof);

        
        $__internal_7f8b0512894ea51235de246d3b2074f82866c797700bd7ccca6932e7c32c89d4->leave($__internal_7f8b0512894ea51235de246d3b2074f82866c797700bd7ccca6932e7c32c89d4_prof);

    }

    // line 72
    public function block_header($context, array $blocks = array())
    {
        $__internal_8c6e4b9934839538a0750947d1b1175685b20eca27de64f64e606187a3877f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6e4b9934839538a0750947d1b1175685b20eca27de64f64e606187a3877f44->enter($__internal_8c6e4b9934839538a0750947d1b1175685b20eca27de64f64e606187a3877f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f12d8b72713442b05f94a6a39ce9d8c35badcd7a6562d87dff516ef4967da90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12d8b72713442b05f94a6a39ce9d8c35badcd7a6562d87dff516ef4967da90e->enter($__internal_f12d8b72713442b05f94a6a39ce9d8c35badcd7a6562d87dff516ef4967da90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 73
        echo "
            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"\" class=\"logo\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                <nav>
                    <div class=\"nav-control\">
                        <ul>
                            <li class=\"\">
                                <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\" class=\"\">Forum</a>
                                <!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">View All Tournaments</a></li>
                                </ul>-->
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                                    ";
        // line 90
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 91
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
            echo "\">Create Tournament</a> </li>
                                    ";
        }
        // line 93
        echo "                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Events</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
                                    <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Games</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Games</a></li>
                                    ";
        // line 107
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 108
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_new");
            echo "\"><i class=\"fa fa-plus\"></i>Add New Game</a></li>
                                    ";
        }
        // line 110
        echo "                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                                    ";
        // line 116
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 117
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
            echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                                    ";
        }
        // line 119
        echo "                                </ul>
                            </li>
                            <li class=\"custom\"><a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                            <!-- <li><a href=\"\">Contact</a></li>-->
                        </ul>
                    </div>
                </nav>
                <div class=\"nav-right\">
                    ";
        // line 127
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 128
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/login.png"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                        </div>

                    ";
        } else {
            // line 134
            echo "                        ";
            $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
            // line 135
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAccount");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 142
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                            </ul>

                        </div>
                        <div id=\"nots2\" class=\"nav-dropdown dropdown\">

                            ";
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                            ";
            // line 156
            echo "                            </ul>
                        </div>

                    ";
        }
        // line 160
        echo "                    <span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

                </div>
            </div>
        ";
        
        $__internal_f12d8b72713442b05f94a6a39ce9d8c35badcd7a6562d87dff516ef4967da90e->leave($__internal_f12d8b72713442b05f94a6a39ce9d8c35badcd7a6562d87dff516ef4967da90e_prof);

        
        $__internal_8c6e4b9934839538a0750947d1b1175685b20eca27de64f64e606187a3877f44->leave($__internal_8c6e4b9934839538a0750947d1b1175685b20eca27de64f64e606187a3877f44_prof);

    }

    // line 271
    public function block_main($context, array $blocks = array())
    {
        $__internal_1379a76b00e575ff575485f5d71a97fdcaf27835107bba3b4dafd88ffef17e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1379a76b00e575ff575485f5d71a97fdcaf27835107bba3b4dafd88ffef17e61->enter($__internal_1379a76b00e575ff575485f5d71a97fdcaf27835107bba3b4dafd88ffef17e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0bfacbba11e5f040a70eb205b0cb410510b96ec0a345891d2ed6c250e40da704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfacbba11e5f040a70eb205b0cb410510b96ec0a345891d2ed6c250e40da704->enter($__internal_0bfacbba11e5f040a70eb205b0cb410510b96ec0a345891d2ed6c250e40da704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 272
        echo "            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_0bfacbba11e5f040a70eb205b0cb410510b96ec0a345891d2ed6c250e40da704->leave($__internal_0bfacbba11e5f040a70eb205b0cb410510b96ec0a345891d2ed6c250e40da704_prof);

        
        $__internal_1379a76b00e575ff575485f5d71a97fdcaf27835107bba3b4dafd88ffef17e61->leave($__internal_1379a76b00e575ff575485f5d71a97fdcaf27835107bba3b4dafd88ffef17e61_prof);

    }

    // line 289
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6597a241e9a0659dfb6f32a7f1fdea7190a8d457c8674a86b90aa75e2a554e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6597a241e9a0659dfb6f32a7f1fdea7190a8d457c8674a86b90aa75e2a554e53->enter($__internal_6597a241e9a0659dfb6f32a7f1fdea7190a8d457c8674a86b90aa75e2a554e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f1d44825ee2aa845cf28b9b446b0bf3f6747d2ae740de2cd5df48be4111cb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1d44825ee2aa845cf28b9b446b0bf3f6747d2ae740de2cd5df48be4111cb7f->enter($__internal_6f1d44825ee2aa845cf28b9b446b0bf3f6747d2ae740de2cd5df48be4111cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 290
        echo "    <footer>

            <div class=\"container\">
                <div class=\"widget row\">
                    <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
                        <h4 class=\"title\">About GameInjection</h4>
                        <p>This Website is for gamers in which they can sell or exchange products,
                        help others and share experience through the forum
                        also check our last games and participate in our tournaments or others created by their own
                        </p>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                        <h4 class=\"title\">Our website Provide</h4>
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <ul class=\"nav\">
                                    <li><a href=\"";
        // line 306
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\">Shop</a></li>
                                    <li><a href=\"";
        // line 307
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\">Events</a></li>
                                    <li><a href=\"";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\">PC</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <h4 class=\"title\">Email Newsletters</h4>
                        <p>Subscribe to our newsletter and get notification when new games are available.</p>
                        <form method=\"post\" class=\"btn-inline form-inverse\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email...\" />
                            <button type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-envelope\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        \"";
        // line 325
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getSocialButtons();
        echo "\"
            <div class=\"footer-bottom\">
                <div class=\"container\">
                    &copy; 2017 GameInjection. All rights reserved.
                </div>
            </div>

    </footer>
    <!-- /.footer -->

    <!-- Javascript -->

";
        
        $__internal_6f1d44825ee2aa845cf28b9b446b0bf3f6747d2ae740de2cd5df48be4111cb7f->leave($__internal_6f1d44825ee2aa845cf28b9b446b0bf3f6747d2ae740de2cd5df48be4111cb7f_prof);

        
        $__internal_6597a241e9a0659dfb6f32a7f1fdea7190a8d457c8674a86b90aa75e2a554e53->leave($__internal_6597a241e9a0659dfb6f32a7f1fdea7190a8d457c8674a86b90aa75e2a554e53_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 325,  602 => 308,  598 => 307,  594 => 306,  576 => 290,  567 => 289,  549 => 272,  540 => 271,  526 => 160,  520 => 156,  516 => 148,  507 => 142,  502 => 140,  498 => 139,  488 => 136,  485 => 135,  482 => 134,  472 => 129,  469 => 128,  467 => 127,  458 => 121,  454 => 119,  448 => 117,  446 => 116,  442 => 115,  435 => 110,  429 => 108,  427 => 107,  423 => 106,  413 => 99,  409 => 98,  402 => 93,  396 => 91,  394 => 90,  390 => 89,  381 => 83,  376 => 81,  368 => 76,  363 => 73,  354 => 72,  344 => 289,  335 => 283,  329 => 281,  327 => 271,  313 => 260,  309 => 258,  301 => 253,  297 => 251,  292 => 248,  281 => 235,  277 => 233,  275 => 232,  235 => 195,  203 => 165,  201 => 72,  198 => 71,  189 => 70,  177 => 65,  171 => 62,  164 => 58,  160 => 57,  156 => 56,  152 => 55,  146 => 52,  134 => 42,  125 => 41,  113 => 339,  111 => 70,  106 => 67,  104 => 41,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EloBoosted/FrontofficeBundle/Resources/views/Layout.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <script src=\"{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/jquery-2.1.1.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/moment-with-locales.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/bootstrap-datetimepicker.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/prettify-1.0.min.js') }}\"></script>

    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <link href=\"{{ asset('plugins/bootstrap/css/base.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/bootstrap/css/bootstrap-datetimepicker.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/bootstrap/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/bootstrap/css/prettify-1.0.css') }}\" rel=\"stylesheet\">
    <style>

        .custom {
            background: #ff081b;
            animation: myfirst 5s;
            -webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
        }

        @-webkit-keyframes myfirst /* Firefox */
        {
            0% {
                background: red;
            }
            50% {
                background: #e6023f;
            }
            100% {
                background: #ff0079;
            }
        }


    </style>

    {% block head %}
        <!-- META -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title> EloBoosted-GameHub </title>

        <!-- FAVICON -->
        <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon.ico') }}\">

        <!-- CORE CSS -->
        <link href=\"{{ asset('FOassets/css/chat.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('FOassets/css/SideNav.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"{{ asset('plugins/animate/animate.min.css') }}\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"{{ asset('css/theme.min.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body class=\"fixed-header\">
{% block body %}
    <header>
        {% block header %}

            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"\" class=\"logo\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"\"></a>
                <nav>
                    <div class=\"nav-control\">
                        <ul>
                            <li class=\"\">
                                <a href=\"{{ path('showAllPosts') }}\" class=\"\">Forum</a>
                                <!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('showAllPosts') }}\">View All Tournaments</a></li>
                                </ul>-->
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('tournoi_index', {'p': 1}) }}\">View All Tournaments</a></li>
                                    {% if is_granted('ROLE_USER') %}
                                        <li><a href=\"{{ path('tournoi_new') }}\">Create Tournament</a> </li>
                                    {% endif %}
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Events</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('tevenement_index_front', {'page': 1}) }}\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
                                    <li><a href=\"{{ path('calender')}}\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Games</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('yes_index') }}\"><i class=\"fa fa-shopping-bag\"></i>View All Games</a></li>
                                    {% if is_granted('ROLE_USER') %}
                                    <li><a href=\"{{ path('yes_new') }}\"><i class=\"fa fa-plus\"></i>Add New Game</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('tproduit_index', {'page': 1}) }}\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                                    {% if is_granted('ROLE_USER') %}
                                    <li><a href=\"{{ path('tproduit_new') }}\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                            <li class=\"custom\"><a href=\"{{ path('streaming_all') }}\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                            <!-- <li><a href=\"\">Contact</a></li>-->
                        </ul>
                    </div>
                </nav>
                <div class=\"nav-right\">
                    {% if app.user  == null %}
                        <div class=\"nav-profile dropdown\">
                            <a href=\"{{ path('eloboosted_login_homepage') }}\" ><img src=\"{{ asset('FOassets/img/login.png') }}\" alt=\"\"> <span>Connect to you account</span></a>

                        </div>

                    {% else %}
                        {% set foo = app.user.image  %}
                        <div class=\"nav-profile dropdown\">
                            <a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ foo }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>

                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('myProfile') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"{{ path('editAccount') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"{{ path('SignOut') }}\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                            </ul>

                        </div>
                        <div id=\"nots2\" class=\"nav-dropdown dropdown\">

                            {{ render(controller('EloboostedFrontofficeBundle:Notification:NotificationlistRender')) }}
                            {#<li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                            <li><a href=\"index.html#\">Alien Isolation</a></li>
                            <li><a href=\"index.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                            <li><a href=\"index.html#\">Last of Us</a></li>
                            <li><a href=\"index.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                            <li><a href=\"index.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                            <li class=\"dropdown-footer\"><a href=\"index.html#\">View all games</a></li>#}
                            </ul>
                        </div>

                    {% endif %}
                    <span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

                </div>
            </div>
        {% endblock %}
    </header>
    <!-- /header -->

    <div class=\"modal-search\">

        <div id=\"mySidenav\" class=\"sidenav\">
            <script>
                \$(document).ready(function() {

                    \$('#OpenNav').on('click',function () {

                        if(\$('#mySidenav').width()==0)
                        {
                            \$('#mySidenav').width(380);
                        }
                        else
                        {
                            \$('#mySidenav').width(0);
                        }
                    });





                    // Update messages section
                    window.setInterval(

                        function()
                        {
                            \$.post('{{ path('lstmsg') }}', function(data) {
                                \$('#renderedChat').html(data);
                            });

                        }

                        , 500);

                    \$('#msg').on('submit', function(e) {
                        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

                        var \$this = \$(this);

                        \$.ajax({
                            url: \$this.attr('action'),
                            type: 'post',
                            data: \$this.serialize(),
                            dataType: 'json', // JSON
                            success: function(json) {
                                console.log(json);
                            }

                        });
                        \$('#chatMessage').val('');



                        \$(\"#chatMessage\").focus();



                    });
                });

            </script>

            <div style=\"position: fixed;top: 56px;width: 368px\">
                {% if app.user != null %}
                    <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                        <div style=\"margin: 3px;font-size: 14px;padding: 5px\">
                            <form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
                                <label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
                                <input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
                                <input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
                            </form>
                        </div>
                    </div>

                    {#<form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
                        <label for=\"chatMessage\">Type messaga </label>
                        <input type=\"text\" name=\"message\" id=\"chatMessage\" />
                        <input type=\"submit\" value=\"submit\" />
                    </form>#}


                {% else %}
                    <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                        <div style=\"margin: 3px;font-size: 15px;padding: 5px\">
                            <h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"{{ path('eloboosted_login_homepage') }}\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
                        </div>
                    </div>

                {% endif %}
            </div>
            <div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
                {{ render(controller('EloboostedFrontofficeBundle:Compte:listRender')) }}
            </div>


        </div>

    </div><!-- /.modal-search -->

          <!-- wrapper -->
    <div id=\"wrapper\">

    {% block main %}
            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>

</div>
    <!-- /#wrapper -->

    <!-- footer -->
{% block footer %}
    <footer>

            <div class=\"container\">
                <div class=\"widget row\">
                    <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
                        <h4 class=\"title\">About GameInjection</h4>
                        <p>This Website is for gamers in which they can sell or exchange products,
                        help others and share experience through the forum
                        also check our last games and participate in our tournaments or others created by their own
                        </p>
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                        <h4 class=\"title\">Our website Provide</h4>
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <ul class=\"nav\">
                                    <li><a href=\"{{ path('tproduit_index', {'page': 1}) }}\">Shop</a></li>
                                    <li><a href=\"{{ path('tevenement_index_front', {'page': 1}) }}\">Events</a></li>
                                    <li><a href=\"{{ path('streaming_all') }}\">PC</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <h4 class=\"title\">Email Newsletters</h4>
                        <p>Subscribe to our newsletter and get notification when new games are available.</p>
                        <form method=\"post\" class=\"btn-inline form-inverse\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Email...\" />
                            <button type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-envelope\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        \"{{ socialButtons() }}\"
            <div class=\"footer-bottom\">
                <div class=\"container\">
                    &copy; 2017 GameInjection. All rights reserved.
                </div>
            </div>

    </footer>
    <!-- /.footer -->

    <!-- Javascript -->

{% endblock %}
{% endblock %}

</body>
</html>", "EloboostedFrontofficeBundle:Default:Layout.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Default/Layout.html.twig");
    }
}
