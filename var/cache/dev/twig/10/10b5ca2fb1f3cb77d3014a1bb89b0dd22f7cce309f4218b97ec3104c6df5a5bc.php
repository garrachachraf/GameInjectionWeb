<?php

/* EloboostedFrontofficeBundle:Compte:myFriends.html.twig */
class __TwigTemplate_29a6fbd34abca5f0b660f7507e49af078f3698ffcbc23377b7a89830f8a1a081 extends Twig_Template
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
        $__internal_32a0b601e8f0edad7f557b044c3c7d48980655ad9ee127538b5289ac6bdbb24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a0b601e8f0edad7f557b044c3c7d48980655ad9ee127538b5289ac6bdbb24e->enter($__internal_32a0b601e8f0edad7f557b044c3c7d48980655ad9ee127538b5289ac6bdbb24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myFriends.html.twig"));

        $__internal_360d63969d9ef7b89ab151fc6299b1ec68ba51225ffa69d4b0475d0fbc666e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360d63969d9ef7b89ab151fc6299b1ec68ba51225ffa69d4b0475d0fbc666e13->enter($__internal_360d63969d9ef7b89ab151fc6299b1ec68ba51225ffa69d4b0475d0fbc666e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myFriends.html.twig"));

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


\t<script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(

                function()
                {
                    \$.post('";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lstnots");
        echo "', function(data) {
                        \$('#nots2').html(data);
                        console.log(data);
                    });

                }

                , 5000);

        })
\t</script>
\t<title>GameInjection - My friends list</title>
\t
\t<!-- FAVICON -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t
\t<!-- CORE CSS -->
\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/SideNav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
\t<!-- PLUGINS -->
\t<link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- THEME CSS -->
\t<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">

\t<header>
\t\t<div class=\"container\">
\t\t\t<span class=\"bar hide\"></span>
\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t<nav>
\t\t\t\t<div class=\"nav-control\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\" class=\"\">Forum</a>
\t\t\t\t\t\t\t<!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">View All Tournaments</a></li>
                                </ul>-->
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                                ";
        // line 72
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
            echo "\">Create Tournament</a> </li>
                                ";
        }
        // line 75
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Events</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"\" class=\"dropdown-toggle\">Shop</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
        echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"custom\"><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
\t\t\t\t\t\t<!-- <li><a href=\"\">Contact</a></li>-->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"nav-right\">
                ";
        // line 98
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 99
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/login.png"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

\t\t\t\t\t</div>

                ";
        } else {
            // line 105
            echo "                    ";
            $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
            // line 106
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAccount");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"nots2\" class=\"nav-dropdown dropdown\">

                        ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                        ";
            // line 127
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

                ";
        }
        // line 131
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
        // line 165
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
        // line 202
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 203
            echo "\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 14px;padding: 5px\">
\t\t\t\t\t\t\t<form id=\"msg\" action=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postmsg");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
\t\t\t\t\t\t\t\t<input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
            // line 218
            echo "

                ";
        } else {
            // line 221
            echo "\t\t\t\t\t<div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
\t\t\t\t\t\t<div style=\"margin: 3px;font-size: 15px;padding: 5px\">
\t\t\t\t\t\t\t<h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                ";
        }
        // line 228
        echo "\t\t\t</div>
\t\t\t<div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Compte:listRender"));
        echo "
\t\t\t</div>


\t\t</div>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
\t\t\t<i class=\"fa fa-times close\"></i>

\t</div><!-- /.modal-search -->
\t
\t<!-- wrapper -->
\t<div id=\"wrapper\">\t
\t\t<section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
\t\t\t<div class=\"hero-bg\"></div>
\t\t\t<div class=\"container relative\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"page-title\">";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo " </div>
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t<div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<a href=\"";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 250
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
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">Recent activities</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myFriends");
        echo "\">Friends list</a></li>
\t\t\t\t\t\t<li class=\"\"><a href=\"";
        // line 265
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
        // line 280
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "DateDeNaissance", array())), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-bookmark\"></i> Posts ";
        // line 281
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["myposts"] ?? $this->getContext($context, "myposts"))), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-comment\"></i> Comments ";
        // line 282
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["mycomments"] ?? $this->getContext($context, "mycomments"))), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Rank ";
        // line 283
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
        // line 293
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lstAmi"] ?? $this->getContext($context, "lstAmi"))), "html", null, true);
        echo ")</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["lstAmi"] ?? $this->getContext($context, "lstAmi")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["ami"]) {
            // line 298
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["ami"], "idCompte", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "idCompte", array()), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ami'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
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
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter(($context["posts"] ?? $this->getContext($context, "posts")), "date")), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 312
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> ";
            // line 316
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["post"], "date", array()));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">

\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-smile-o\"></i>This is your friends list </h4>

                        ";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lstAmi"] ?? $this->getContext($context, "lstAmi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 331
            echo "
\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["item"], "idCompte", array()))), "html", null, true);
            echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a>";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pseudo", array()), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        Last name : ";
            // line 342
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "<br>
                                        First name : ";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "<br>
                                        Bithday : ";
            // line 344
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "DateDeNaissance", array())), "html", null, true);
            echo "<br>
                                        Points : ";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "points", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
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
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 425
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
        
        $__internal_32a0b601e8f0edad7f557b044c3c7d48980655ad9ee127538b5289ac6bdbb24e->leave($__internal_32a0b601e8f0edad7f557b044c3c7d48980655ad9ee127538b5289ac6bdbb24e_prof);

        
        $__internal_360d63969d9ef7b89ab151fc6299b1ec68ba51225ffa69d4b0475d0fbc666e13->leave($__internal_360d63969d9ef7b89ab151fc6299b1ec68ba51225ffa69d4b0475d0fbc666e13_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:myFriends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 425,  670 => 424,  666 => 423,  593 => 352,  580 => 345,  576 => 344,  572 => 343,  568 => 342,  562 => 339,  555 => 337,  547 => 331,  543 => 330,  531 => 320,  521 => 316,  515 => 315,  508 => 313,  505 => 312,  501 => 311,  489 => 301,  479 => 299,  470 => 298,  466 => 297,  459 => 293,  446 => 283,  442 => 282,  438 => 281,  434 => 280,  416 => 265,  412 => 264,  408 => 263,  392 => 250,  388 => 249,  384 => 248,  379 => 246,  360 => 230,  356 => 228,  348 => 223,  344 => 221,  339 => 218,  328 => 205,  324 => 203,  322 => 202,  282 => 165,  246 => 131,  240 => 127,  236 => 119,  227 => 113,  222 => 111,  218 => 110,  208 => 107,  205 => 106,  202 => 105,  192 => 100,  189 => 99,  187 => 98,  178 => 92,  172 => 89,  168 => 88,  158 => 81,  154 => 80,  147 => 75,  141 => 73,  139 => 72,  135 => 71,  126 => 65,  121 => 63,  111 => 58,  100 => 50,  96 => 49,  90 => 46,  83 => 42,  79 => 41,  75 => 40,  71 => 39,  51 => 22,  36 => 10,  25 => 1,);
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
\t<title>GameInjection - My friends list</title>
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
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
\t\t\t<i class=\"fa fa-times close\"></i>

\t</div><!-- /.modal-search -->
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
\t\t\t\t\t\t<li class=\"\"><a href=\"{{ path('myProfile') }}\">Recent activities</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"{{ path('myFriends') }}\">Friends list</a></li>
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
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Rank {{ app.user.points }}</li>
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
\t\t\t\t\t\t\t\t\t\t\t\t{{ ami.pseudo }} , {{ ami.idCompte }} <br>
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

\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-smile-o\"></i>This is your friends list </h4>

                        {% for item in lstAmi %}

\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('userProfile',{id : item.idCompte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.image }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3><a>{{ item.pseudo }}</a></h3>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                        Last name : {{ item.nom }}<br>
                                        First name : {{ item.prenom }}<br>
                                        Bithday : {{ item.DateDeNaissance | date }}<br>
                                        Points : {{ item.points }}<br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

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
</html>", "EloboostedFrontofficeBundle:Compte:myFriends.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/myFriends.html.twig");
    }
}
