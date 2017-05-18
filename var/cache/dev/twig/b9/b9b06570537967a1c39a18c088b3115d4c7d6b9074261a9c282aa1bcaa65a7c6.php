<?php

/* EloboostedFrontofficeBundle:Compte:myProfile.html.twig */
class __TwigTemplate_3625b88cb6c0eb238e3f3238ccdbddebcb0c6c3e0a1b20a42f8bae5617e3c5b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61fc730675c13c7546800c76acc769b6836bc5f6aea829d479a1a4f438ac8934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fc730675c13c7546800c76acc769b6836bc5f6aea829d479a1a4f438ac8934->enter($__internal_61fc730675c13c7546800c76acc769b6836bc5f6aea829d479a1a4f438ac8934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig"));

        $__internal_ce6d097f8661db56d8dda240bce29123ffe96e9c8e085354da6b3889cdd71341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6d097f8661db56d8dda240bce29123ffe96e9c8e085354da6b3889cdd71341->enter($__internal_ce6d097f8661db56d8dda240bce29123ffe96e9c8e085354da6b3889cdd71341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<!-- META -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<style>

\t\t.custom {
\t\t\tbackground: #ff081b;
\t\t\tanimation: myfirst 5s;
\t\t\t-webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
\t\t}

\t\t@-webkit-keyframes myfirst /* Firefox */
\t\t{
\t\t\t0% {
\t\t\t\tbackground: red;
\t\t\t}
\t\t\t50% {
\t\t\t\tbackground: #e6023f;
\t\t\t}
\t\t\t100% {
\t\t\t\tbackground: #ff0079;
\t\t\t}
\t\t}


\t</style>
\t<script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(

                function()
                {
                    \$.post('";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lstnots");
        echo "', function(data) {
                        \$('#nots2').html(data);
                        console.log(data);
                    });

                }

                , 5000);

        })
\t</script>
\t<title>GameInjection - My profile </title>
\t
\t<!-- FAVICON -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t
\t<!-- CORE CSS -->
\t<link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/SideNav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
\t<!-- PLUGINS -->
\t<link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- THEME CSS -->
\t<link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">

\t<header>
\t\t<div class=\"container\">
\t\t\t<span class=\"bar hide\"></span>
\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t<nav>
\t\t\t\t<div class=\"nav-control\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\" class=\"\">Forum</a>
\t\t\t\t\t\t\t<!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">View All Tournaments</a></li>
                                </ul>-->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                                ";
        // line 93
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
            echo "\">Create Tournament</a> </li>
                                ";
        }
        // line 96
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Events</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Shop</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
        echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"custom\"><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
\t\t\t\t\t\t<!-- <li><a href=\"\">Contact</a></li>-->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"nav-right\">
                ";
        // line 119
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 120
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/login.png"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

\t\t\t\t\t</div>

                ";
        } else {
            // line 126
            echo "                    ";
            $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
            // line 127
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAccount");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"nots2\" class=\"nav-dropdown dropdown\">

                        ";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                        ";
            // line 148
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

                ";
        }
        // line 152
        echo "\t\t\t\t<span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /header -->
\t
\t<div class=\"modal-search\">

\t\t<div id=\"mySidenav\" class=\"sidenav\">
\t\t\t<script>
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
        // line 186
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

\t\t\t</script>

\t\t\t<div style=\"position: fixed;top: 56px;width: 368px\">
                ";
        // line 223
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 224
            echo "\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 14px;padding: 5px\">
\t\t\t\t\t\t\t<form id=\"msg\" action=\"";
            // line 226
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postmsg");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
            // line 239
            echo "

                ";
        } else {
            // line 242
            echo "\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 15px;padding: 5px\">
\t\t\t\t\t\t\t<h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"";
            // line 244
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                ";
        }
        // line 249
        echo "\t\t\t</div>
\t\t\t<div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
                ";
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Compte:listRender"));
        echo "
\t\t\t</div>


\t\t</div>

\t\t\t</div>


<!-- /.modal-search -->
\t
\t<!-- wrapper -->
\t<div id=\"wrapper\">\t
\t\t<section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
\t\t\t<div class=\"hero-bg\"></div>
\t\t\t<div class=\"container relative\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"page-title\">";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo " </div>
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t<div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<a href=\"";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 272
        echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
\t\t\t<div class=\"tab-select sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">Recent activities</a></li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myFriends");
        echo "\">Friends list</a></li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myInbox");
        echo "\">my inbox</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 hidden-xs\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">About me</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list margin-top-25\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar\"></i> Born ";
        // line 302
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "DateDeNaissance", array())), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-bookmark\"></i> Posts ";
        // line 303
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["myposts"] ?? $this->getContext($context, "myposts"))), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment\"></i> Comments ";
        // line 304
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["mycomments"] ?? $this->getContext($context, "mycomments"))), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Points ";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "points", array()), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-friends\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Friends (";
        // line 315
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lstAmi"] ?? $this->getContext($context, "lstAmi"))), "html", null, true);
        echo ")</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["lstAmi"] ?? $this->getContext($context, "lstAmi")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["ami"]) {
            // line 320
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["ami"], "idCompte", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 321
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ami'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-list\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading bold\">Recent Feeds</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter(($context["posts"] ?? $this->getContext($context, "posts")), "date")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 334
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 335
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> ";
            // line 338
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["post"], "date", array()));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">

\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-smile-o\"></i>Check what your firends are up to </h4>

                        ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter(($context["friendsActivities"] ?? $this->getContext($context, "friendsActivities")), "date")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 353
            echo "                        ";
            if (($this->getAttribute($context["item"], "idCommentaire", array(), "any", true, true) && twig_in_filter($this->getAttribute($context["item"], "idCompteCp", array()), ($context["lstAmi"] ?? $this->getContext($context, "lstAmi"))))) {
                // line 354
                echo "\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idCompteCp", array()), "pseudo", array()), "html", null, true);
                echo " Commented ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 360
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "idCompte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"";
                // line 362
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "titre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> ";
                // line 364
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "date", array())), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li> Category : ";
                // line 365
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                // line 369
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "sujet", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t<ul class=\"post-action\">
                                        ";
                // line 374
                $context["x"] = 0;
                // line 375
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
                foreach ($context['_seq'] as $context["_key"] => $context["nbrCommentaire"]) {
                    // line 376
                    echo "                                            ";
                    if (($this->getAttribute($context["nbrCommentaire"], "idPostCp", array()) == $this->getAttribute($context["item"], "idPostCp", array()))) {
                        // line 377
                        echo "                                                ";
                        $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                        // line 378
                        echo "                                            ";
                    }
                    // line 379
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrCommentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> Comments (";
                echo twig_escape_filter($this->env, ($context["x"] ?? $this->getContext($context, "x")), "html", null, true);
                echo ") </li>
                                        ";
                // line 381
                $context["x"] = 0;
                // line 382
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 387
            echo "                        ";
            if (($this->getAttribute($context["item"], "idPost", array(), "any", true, true) && twig_in_filter($this->getAttribute($context["item"], "idComptePost", array()), ($context["lstAmi"] ?? $this->getContext($context, "lstAmi"))))) {
                // line 388
                echo "\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i> ";
                // line 389
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "pseudo", array()), "html", null, true);
                echo " Created a post ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 394
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"";
                // line 396
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["item"], "idPost", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
                echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> ";
                // line 398
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array())), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li> Category : ";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                // line 403
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sujet", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t<ul class=\"post-action\">
                                        ";
                // line 408
                $context["x"] = 0;
                // line 409
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
                foreach ($context['_seq'] as $context["_key"] => $context["nbrCommentaire"]) {
                    // line 410
                    echo "                                            ";
                    if (($this->getAttribute($context["nbrCommentaire"], "idPostCp", array()) == $context["item"])) {
                        // line 411
                        echo "                                                ";
                        $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                        // line 412
                        echo "                                            ";
                    }
                    // line 413
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrCommentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 414
                echo "\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> Comments (";
                echo twig_escape_filter($this->env, ($context["x"] ?? $this->getContext($context, "x")), "html", null, true);
                echo ") </li>
                                        ";
                // line 415
                $context["x"] = 0;
                // line 416
                echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"post\">

                            ";
            }
            // line 422
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t<!-- /#wrapper -->
\t
\t<!-- footer -->
\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"widget row\">
\t\t\t\t<div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">About GameForest</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">Categories</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\t
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Playstation 4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">XBOX ONE</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">PC</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">PS3</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Gaming</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Portfolio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Videos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Reviews</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">Email Newsletters</h4>
\t\t\t\t\t<p>Subscribe to our newsletter and get notification when new games are available.</p>
\t\t\t\t\t<form method=\"post\" class=\"btn-inline form-inverse\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email...\" />
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-envelope\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">\t
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
\t\t\t\t</ul>
\t\t\t\t&copy; 2016 Gameforest. All rights reserved.
\t\t\t</div>
\t\t</div>
\t</footer>\t
\t<!-- /.footer -->
\t
\t<!-- Javascript -->
\t<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/js/core.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t(function(\$) {
\t\"use strict\";
\t\t\$(window).scroll(function(){
\t\t\tif (\$(this).scrollTop() > 300) {
\t\t\t\t\$('body').addClass('fixed-tab');
\t\t\t} else {
\t\t\t\t\$('body').removeClass('fixed-tab');
\t\t\t}
\t\t});
\t})(jQuery);
\t</script>
</body>
</html>";
        
        $__internal_61fc730675c13c7546800c76acc769b6836bc5f6aea829d479a1a4f438ac8934->leave($__internal_61fc730675c13c7546800c76acc769b6836bc5f6aea829d479a1a4f438ac8934_prof);

        
        $__internal_ce6d097f8661db56d8dda240bce29123ffe96e9c8e085354da6b3889cdd71341->leave($__internal_ce6d097f8661db56d8dda240bce29123ffe96e9c8e085354da6b3889cdd71341_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:myProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  825 => 496,  821 => 495,  817 => 494,  744 => 423,  738 => 422,  730 => 416,  728 => 415,  723 => 414,  717 => 413,  714 => 412,  711 => 411,  708 => 410,  703 => 409,  701 => 408,  693 => 403,  686 => 399,  682 => 398,  675 => 396,  668 => 394,  658 => 389,  655 => 388,  652 => 387,  645 => 382,  643 => 381,  638 => 380,  632 => 379,  629 => 378,  626 => 377,  623 => 376,  618 => 375,  616 => 374,  608 => 369,  601 => 365,  597 => 364,  590 => 362,  583 => 360,  573 => 355,  570 => 354,  567 => 353,  563 => 352,  551 => 342,  541 => 338,  535 => 337,  528 => 335,  525 => 334,  521 => 333,  509 => 323,  501 => 321,  492 => 320,  488 => 319,  481 => 315,  468 => 305,  464 => 304,  460 => 303,  456 => 302,  438 => 287,  434 => 286,  430 => 285,  414 => 272,  410 => 271,  406 => 270,  401 => 268,  381 => 251,  377 => 249,  369 => 244,  365 => 242,  360 => 239,  349 => 226,  345 => 224,  343 => 223,  303 => 186,  267 => 152,  261 => 148,  257 => 140,  248 => 134,  243 => 132,  239 => 131,  229 => 128,  226 => 127,  223 => 126,  213 => 121,  210 => 120,  208 => 119,  199 => 113,  193 => 110,  189 => 109,  179 => 102,  175 => 101,  168 => 96,  162 => 94,  160 => 93,  156 => 92,  147 => 86,  142 => 84,  132 => 79,  121 => 71,  117 => 70,  111 => 67,  104 => 63,  100 => 62,  96 => 61,  92 => 60,  72 => 43,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<!-- META -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t<script src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
\t<style>

\t\t.custom {
\t\t\tbackground: #ff081b;
\t\t\tanimation: myfirst 5s;
\t\t\t-webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
\t\t}

\t\t@-webkit-keyframes myfirst /* Firefox */
\t\t{
\t\t\t0% {
\t\t\t\tbackground: red;
\t\t\t}
\t\t\t50% {
\t\t\t\tbackground: #e6023f;
\t\t\t}
\t\t\t100% {
\t\t\t\tbackground: #ff0079;
\t\t\t}
\t\t}


\t</style>
\t<script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(

                function()
                {
                    \$.post('{{ path('lstnots') }}', function(data) {
                        \$('#nots2').html(data);
                        console.log(data);
                    });

                }

                , 5000);

        })
\t</script>
\t<title>GameInjection - My profile </title>
\t
\t<!-- FAVICON -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t
\t<!-- CORE CSS -->
\t<link href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('FOassets/css/chat.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('FOassets/css/SideNav.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
\t<!-- PLUGINS -->
\t<link href=\"{{ asset('FOassets/plugins/animate/animate.min.css') }}\" rel=\"stylesheet\">

\t<!-- THEME CSS -->
\t<link href=\"{{ asset('FOassets/css/theme.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('FOassets/css/custom.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">

\t<header>
\t\t<div class=\"container\">
\t\t\t<span class=\"bar hide\"></span>
\t\t\t<a href=\"{{ path('home') }}\" class=\"logo\"><img src=\"{{ asset('FOassets/img/logo.png') }}\" alt=\"\"></a>
\t\t\t<nav>
\t\t\t\t<div class=\"nav-control\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"{{ path('showAllPosts') }}\" class=\"\">Forum</a>
\t\t\t\t\t\t\t<!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('showAllPosts') }}\">View All Tournaments</a></li>
                                </ul>-->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('tournoi_index', {'p': 1}) }}\">View All Tournaments</a></li>
                                {% if is_granted('ROLE_USER') %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('tournoi_new') }}\">Create Tournament</a> </li>
                                {% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Events</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('tevenement_index_front', {'page': 1}) }}\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('calender')}}\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Shop</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('tproduit_index', {'page': 1}) }}\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('tproduit_new') }}\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"custom\"><a href=\"{{ path('streaming_all') }}\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
\t\t\t\t\t\t<!-- <li><a href=\"\">Contact</a></li>-->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"nav-right\">
                {% if app.user  == null %}
\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"{{ path('eloboosted_login_homepage') }}\" ><img src=\"{{ asset('FOassets/img/login.png') }}\" alt=\"\"> <span>Connect to you account</span></a>

\t\t\t\t\t</div>

                {% else %}
                    {% set foo = app.user.image  %}
\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ foo }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('myProfile') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('editAccount') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('SignOut') }}\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"nots2\" class=\"nav-dropdown dropdown\">

                        {{ render(controller('EloboostedFrontofficeBundle:Notification:NotificationlistRender')) }}
                        {#<li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                        <li><a href=\"index.html#\">Alien Isolation</a></li>
                        <li><a href=\"index.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                        <li><a href=\"index.html#\">Last of Us</a></li>
                        <li><a href=\"index.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                        <li><a href=\"index.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                        <li class=\"dropdown-footer\"><a href=\"index.html#\">View all games</a></li>#}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

                {% endif %}
\t\t\t\t<span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /header -->
\t
\t<div class=\"modal-search\">

\t\t<div id=\"mySidenav\" class=\"sidenav\">
\t\t\t<script>
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

\t\t\t</script>

\t\t\t<div style=\"position: fixed;top: 56px;width: 368px\">
                {% if app.user != null %}
\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 14px;padding: 5px\">
\t\t\t\t\t\t\t<form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
\t\t\t\t\t\t\t\t<label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    {#<form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
                        <label for=\"chatMessage\">Type messaga </label>
                        <input type=\"text\" name=\"message\" id=\"chatMessage\" />
                        <input type=\"submit\" value=\"submit\" />
                    </form>#}


                {% else %}
\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 15px;padding: 5px\">
\t\t\t\t\t\t\t<h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"{{ path('eloboosted_login_homepage') }}\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                {% endif %}
\t\t\t</div>
\t\t\t<div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
                {{ render(controller('EloboostedFrontofficeBundle:Compte:listRender')) }}
\t\t\t</div>


\t\t</div>

\t\t\t</div>


<!-- /.modal-search -->
\t
\t<!-- wrapper -->
\t<div id=\"wrapper\">\t
\t\t<section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
\t\t\t<div class=\"hero-bg\"></div>
\t\t\t<div class=\"container relative\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"page-title\">{{ app.user.pseudo }} </div>
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t<div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"{{ app.user.pseudo }}\">
\t\t\t\t\t\t\t<a href=\"{{ path('myProfile') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ foo }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
\t\t\t<div class=\"tab-select sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('myProfile') }}\">Recent activities</a></li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('myFriends') }}\">Friends list</a></li>
\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('myInbox') }}\">my inbox</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 hidden-xs\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">About me</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list margin-top-25\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar\"></i> Born {{ app.user.DateDeNaissance | date }}</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-bookmark\"></i> Posts {{ myposts | length }}</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment\"></i> Comments {{ mycomments | length }}</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Points {{ app.user.points }}</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-friends\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Friends ({{ lstAmi|length }})</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t{% for ami in lstAmi | slice(0,5) %}
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('userProfile',{id : ami.idCompte}) }}\" data-toggle=\"tooltip\" title=\"{{ ami.pseudo }}\"><img src=\"{{ ami.image }}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t{{ ami.pseudo }} <br>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-list\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading bold\">Recent Feeds</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t{% for post in posts | sortbyfield('date') | reverse | slice(0,5) %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('userProfile',{ id : post.idComptePost.idCompte}) }}\" class=\"thumb\"><img src=\"{{ post.idComptePost.image }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"{{ path('readPost',{ idPost : post.idPost}) }}\">{{ post.titre }}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> {{ post.date | ago }}</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">

\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-smile-o\"></i>Check what your firends are up to </h4>

                        {% for item in friendsActivities | sortbyfield(\"date\") | reverse %}
                        {% if item.idCommentaire is defined and item.idCompteCp in lstAmi %}
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>{{ item.idCompteCp.pseudo }} Commented {{ item.date|ago }} </h4>
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('userProfile',{id : item.idPostCp.idComptePost.idCompte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.idPostCp.idComptePost.image }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"{{ path('readPost', { idPost : item.idPostCp.idPost}) }}\" >{{ item.idPostCp.titre }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> {{ item.idPostCp.date|date }}</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li> Category : {{ item.idPostCp.cathegorieSpecifique.nom }}</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        {{ item.idPostCp.sujet }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t<ul class=\"post-action\">
                                        {% set x=0 %}
                                        {% for nbrCommentaire in comments %}
                                            {% if nbrCommentaire.idPostCp == item.idPostCp %}
                                                {% set x=x+1 %}
                                            {% endif %}
                                        {% endfor %}
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> Comments ({{ x }}) </li>
                                        {% set x=0 %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
                        {% if item.idPost is defined and item.idComptePost in lstAmi%}
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i> {{ item.idComptePost.pseudo }} Created a post {{ item.date|ago }} </h4>
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('userProfile',{id : item.idComptePost.idCompte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.idComptePost.image }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"{{ path('readPost', { idPost : item.idPost}) }}\" >{{ item.titre }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> {{ item.date|date }}</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li> Category : {{ item.cathegorieSpecifique.nom }}</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        {{ item.sujet }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t\t<ul class=\"post-action\">
                                        {% set x=0 %}
                                        {% for nbrCommentaire in comments %}
                                            {% if nbrCommentaire.idPostCp == item %}
                                                {% set x=x+1 %}
                                            {% endif %}
                                        {% endfor %}
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comments\"></i> Comments ({{ x }}) </li>
                                        {% set x=0 %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"post\">

                            {% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
\t<!-- /#wrapper -->
\t
\t<!-- footer -->
\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"widget row\">
\t\t\t\t<div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">About GameForest</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">Categories</h4>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">\t
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Playstation 4</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">XBOX ONE</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">PC</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">PS3</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Gaming</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Portfolio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Videos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">Reviews</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t<h4 class=\"title\">Email Newsletters</h4>
\t\t\t\t\t<p>Subscribe to our newsletter and get notification when new games are available.</p>
\t\t\t\t\t<form method=\"post\" class=\"btn-inline form-inverse\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Email...\" />
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\"><i class=\"fa fa-envelope\"></i></button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-bottom\">
\t\t\t<div class=\"container\">\t
\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t<li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
\t\t\t\t</ul>
\t\t\t\t&copy; 2016 Gameforest. All rights reserved.
\t\t\t</div>
\t\t</div>
\t</footer>\t
\t<!-- /.footer -->
\t
\t<!-- Javascript -->
\t<script src=\"{{ asset('FOassets/plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
\t<script src=\"{{ asset('FOassets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('FOassets/js/core.min.js') }}\"></script>
\t<script>
\t(function(\$) {
\t\"use strict\";
\t\t\$(window).scroll(function(){
\t\t\tif (\$(this).scrollTop() > 300) {
\t\t\t\t\$('body').addClass('fixed-tab');
\t\t\t} else {
\t\t\t\t\$('body').removeClass('fixed-tab');
\t\t\t}
\t\t});
\t})(jQuery);
\t</script>
</body>
</html>", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/myProfile.html.twig");
    }
}
