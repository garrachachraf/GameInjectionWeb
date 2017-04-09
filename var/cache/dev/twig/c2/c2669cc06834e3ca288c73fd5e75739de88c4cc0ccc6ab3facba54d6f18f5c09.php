<?php

/* @EloboostedFrontoffice/Default/Layout.html.twig */
class __TwigTemplate_739ae83e8ecb0d8308ae4b03ec6daaa2e9ea276b555c04ef8dcf9b3410a31ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'search' => array($this, 'block_search'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c232f26f4222701f830cffa15ec3ac4e4e69bdf45ccdcb430ad48d0653fe9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c232f26f4222701f830cffa15ec3ac4e4e69bdf45ccdcb430ad48d0653fe9a2->enter($__internal_9c232f26f4222701f830cffa15ec3ac4e4e69bdf45ccdcb430ad48d0653fe9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/Layout.html.twig"));

        $__internal_7ff7df4e4f4932be2fdcf9166d9d29517f17d614b17076120e010f10d8b0d4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff7df4e4f4932be2fdcf9166d9d29517f17d614b17076120e010f10d8b0d4a1->enter($__internal_7ff7df4e4f4932be2fdcf9166d9d29517f17d614b17076120e010f10d8b0d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/Layout.html.twig"));

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
        // line 65
        echo "</head>

<body class=\"fixed-header\">
";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 337
        echo "
</body>
</html>";
        
        $__internal_9c232f26f4222701f830cffa15ec3ac4e4e69bdf45ccdcb430ad48d0653fe9a2->leave($__internal_9c232f26f4222701f830cffa15ec3ac4e4e69bdf45ccdcb430ad48d0653fe9a2_prof);

        
        $__internal_7ff7df4e4f4932be2fdcf9166d9d29517f17d614b17076120e010f10d8b0d4a1->leave($__internal_7ff7df4e4f4932be2fdcf9166d9d29517f17d614b17076120e010f10d8b0d4a1_prof);

    }

    // line 41
    public function block_head($context, array $blocks = array())
    {
        $__internal_61dcd3d2a9c1d8f1d61f82c2be06f45bef5685c66f7647ce9af80b8f7a853431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dcd3d2a9c1d8f1d61f82c2be06f45bef5685c66f7647ce9af80b8f7a853431->enter($__internal_61dcd3d2a9c1d8f1d61f82c2be06f45bef5685c66f7647ce9af80b8f7a853431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_589b670ff768a9fb31bd5f194dbd61543b458a4fad68c967cb312e8555accaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589b670ff768a9fb31bd5f194dbd61543b458a4fad68c967cb312e8555accaa0->enter($__internal_589b670ff768a9fb31bd5f194dbd61543b458a4fad68c967cb312e8555accaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_589b670ff768a9fb31bd5f194dbd61543b458a4fad68c967cb312e8555accaa0->leave($__internal_589b670ff768a9fb31bd5f194dbd61543b458a4fad68c967cb312e8555accaa0_prof);

        
        $__internal_61dcd3d2a9c1d8f1d61f82c2be06f45bef5685c66f7647ce9af80b8f7a853431->leave($__internal_61dcd3d2a9c1d8f1d61f82c2be06f45bef5685c66f7647ce9af80b8f7a853431_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cd05ab8ef02a6b5e637a03887c7c2668bcf883662d48bccb41f2043d5b04670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd05ab8ef02a6b5e637a03887c7c2668bcf883662d48bccb41f2043d5b04670->enter($__internal_3cd05ab8ef02a6b5e637a03887c7c2668bcf883662d48bccb41f2043d5b04670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c61f5473333c5d3500bacea4b3eecdee0d9884bcc03e4251e49d4c1517f84c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61f5473333c5d3500bacea4b3eecdee0d9884bcc03e4251e49d4c1517f84c52->enter($__internal_c61f5473333c5d3500bacea4b3eecdee0d9884bcc03e4251e49d4c1517f84c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "    <header>
        ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 259
        echo "    </header>
    <!-- /header -->

    <div class=\"modal-search\">
        ";
        // line 263
        $this->displayBlock('search', $context, $blocks);
        // line 269
        echo "    </div><!-- /.modal-search -->

          <!-- wrapper -->
    <div id=\"wrapper\">
        ";
        // line 273
        $this->displayBlock('main', $context, $blocks);
        // line 283
        echo "    </div>
    <!-- /#wrapper -->

    <!-- footer -->
";
        // line 287
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_c61f5473333c5d3500bacea4b3eecdee0d9884bcc03e4251e49d4c1517f84c52->leave($__internal_c61f5473333c5d3500bacea4b3eecdee0d9884bcc03e4251e49d4c1517f84c52_prof);

        
        $__internal_3cd05ab8ef02a6b5e637a03887c7c2668bcf883662d48bccb41f2043d5b04670->leave($__internal_3cd05ab8ef02a6b5e637a03887c7c2668bcf883662d48bccb41f2043d5b04670_prof);

    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f0b13d163207b81c1cea863d494b71abdd7ff09a50705f019d58ed1be9c4627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0b13d163207b81c1cea863d494b71abdd7ff09a50705f019d58ed1be9c4627->enter($__internal_7f0b13d163207b81c1cea863d494b71abdd7ff09a50705f019d58ed1be9c4627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_eaaf2d319c4e9207a8f70b5446612dd63ee6068302d71846915ea49d1822656e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaf2d319c4e9207a8f70b5446612dd63ee6068302d71846915ea49d1822656e->enter($__internal_eaaf2d319c4e9207a8f70b5446612dd63ee6068302d71846915ea49d1822656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "
            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"\" class=\"logo\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                <nav>
                    <div class=\"nav-control\">
                        <ul>
                            <li class=\"dropdown\">
                                <a href=\"blank-page.html#\" class=\"dropdown-toggle\">Home</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"home-magazine.html\">Home - Magazine</a></li>
                                    <li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
                                    <li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
                                    <li><a href=\"index.html\">Home - Games</a></li>
                                    <li><a href=\"home-videos.html\">Home - Videos</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown mega-dropdown\">
                                <a href=\"#\">games</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu category\">
                                    <li class=\"col-md-3\">
                                        <a href=\"\">
                                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/menu-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-warning\">PC</span>
                                                <h3>Assassin's Creedsss Syndicate</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/menu-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-primary\">PS4</span>
                                                <h3>Last of Us Remastered</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/menu-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-success\">Xbox</span>
                                                <h3>Max Payne 3</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/menu-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-danger\">Steam</span>
                                                <h3>Hitman Absolution</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Blog</a>
                                <ul class=\"dropdown-menu default\">
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"\"><i class=\"fa fa-align-justify\"></i> blogs</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-large.html\">Archive</a></li>
                                            <li><a href=\"blog-large-sidebar.html\">Sidebar</a></li>
                                            <li><a href=\"blog-large-post.html\">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"blog-medium.html\"><i class=\"fa fa-list-ul\"></i> Blog Medium</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-medium.html\">Archive</a></li>
                                            <li><a href=\"blog-medium-sidebar.html\">Sidebar</a></li>
                                            <li><a href=\"blog-medium-post.html\">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"blog-post.html\"><i class=\"fa fa-file-o\"></i> Single Post</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-post.html\">Blog Image Post</a></li>
                                            <li><a href=\"blog-post-slideshow.html\">Blog Slideshow Post</a></li>
                                            <li><a href=\"blog-post-video.html\">Blog Video Post</a></li>
                                            <li><a href=\"blog-post-music.html\">Blog Music Post</a></li>
                                            <li><a href=\"blog-post-disqus.html\">Blog Disqus Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"blog-masonry.html\"><i class=\"fa fa-th-large\"></i>Blog Masonry</a></li>
                                    <li><a href=\"blog-thumbnail.html\"><i class=\"fa fa-clone\"></i>Blog Thumbnail</a></li>
                                    <li><a href=\"blog-timeline.html\"><i class=\"fa fa-clock-o\"></i>Blog Timeline</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown mega-dropdown mega-dropdown-sm\">
                                <a href=\"blank-page.html#\">Pages</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\">
                                    <li class=\"col-md-6\">
                                        <ul>
                                            <li class=\"dropdown-header\">Default Examples</li>
                                            <li><a href=\"games.html\">Games</a></li>
                                            <li><a href=\"games-single.html\">Game Post</a></li>
                                            <li><a href=\"reviews.html\">Reviews</a></li>
                                            <li><a href=\"reviews-single.html\">Review Post</a></li>
                                            <li><a href=\"videos.html\">Videos</a></li>
                                            <li><a href=\"videos-single.html\">Videos Post</a></li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-6\">
                                        <ul>
                                            <li class=\"dropdown-header\">Initial Examples</li>
                                            <li><a href=\"login.html\">Login</a></li>
                                            <li><a href=\"register.html\">Register</a></li>
                                            <li><a href=\"profile.html\">Profile Page</a></li>
                                            <li><a href=\"forum.html\">Forums</a></li>
                                            <li><a href=\"fullwidth.html\">Full Width</a></li>
                                            <li><a href=\"blank-page.html\">Blank Page</a></li>
                                            <li><a href=\"\">404 Error</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Events</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
                                    <li><a href=\"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                                    <li><a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
        echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                                </ul>
                            </li>
                            <li class=\"custom\"><a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                            <li><a href=\"\">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class=\"nav-right\">
                    ";
        // line 223
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 224
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 225
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                        </div>

                    ";
        } else {
            // line 230
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"";
            // line 234
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                                <li><a href=\"";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                                <li><a href=\"";
            // line 236
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                            </ul>
                        </div>
                        <div class=\"nav-dropdown dropdown\">
                            <a href=\"index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                                <li><a href=\"index.html#\">Alien Isolation</a></li>
                                <li><a href=\"index.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                                <li><a href=\"index.html#\">Last of Us</a></li>
                                <li><a href=\"index.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                                <li><a href=\"index.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                                <li class=\"dropdown-footer\"><a href=\"index.html#\">View all games</a></li>
                            </ul>
                        </div>
                        <a href=\"index.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>

                    ";
        }
        // line 256
        echo "                </div>
            </div>
        ";
        
        $__internal_eaaf2d319c4e9207a8f70b5446612dd63ee6068302d71846915ea49d1822656e->leave($__internal_eaaf2d319c4e9207a8f70b5446612dd63ee6068302d71846915ea49d1822656e_prof);

        
        $__internal_7f0b13d163207b81c1cea863d494b71abdd7ff09a50705f019d58ed1be9c4627->leave($__internal_7f0b13d163207b81c1cea863d494b71abdd7ff09a50705f019d58ed1be9c4627_prof);

    }

    // line 263
    public function block_search($context, array $blocks = array())
    {
        $__internal_81b52e359d3cae187630e7a17db838b1ec04505ecb9171b3c407a82c2b84adc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b52e359d3cae187630e7a17db838b1ec04505ecb9171b3c407a82c2b84adc2->enter($__internal_81b52e359d3cae187630e7a17db838b1ec04505ecb9171b3c407a82c2b84adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_11433607c9b56cd9478aad91498bb9f266bd5ae57b8927502bca57b5a3ef81b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11433607c9b56cd9478aad91498bb9f266bd5ae57b8927502bca57b5a3ef81b7->enter($__internal_11433607c9b56cd9478aad91498bb9f266bd5ae57b8927502bca57b5a3ef81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 264
        echo "            <div class=\"container\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
                <i class=\"fa fa-times close\"></i>
            </div>
        ";
        
        $__internal_11433607c9b56cd9478aad91498bb9f266bd5ae57b8927502bca57b5a3ef81b7->leave($__internal_11433607c9b56cd9478aad91498bb9f266bd5ae57b8927502bca57b5a3ef81b7_prof);

        
        $__internal_81b52e359d3cae187630e7a17db838b1ec04505ecb9171b3c407a82c2b84adc2->leave($__internal_81b52e359d3cae187630e7a17db838b1ec04505ecb9171b3c407a82c2b84adc2_prof);

    }

    // line 273
    public function block_main($context, array $blocks = array())
    {
        $__internal_da9fae80c6b5535986935778b49da213c9d0ca91218695c48a09a4378b115686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9fae80c6b5535986935778b49da213c9d0ca91218695c48a09a4378b115686->enter($__internal_da9fae80c6b5535986935778b49da213c9d0ca91218695c48a09a4378b115686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5a24c62f6f71c069ad30ee930c6849799a8d5c51fd01a59555831f97ea2a425a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a24c62f6f71c069ad30ee930c6849799a8d5c51fd01a59555831f97ea2a425a->enter($__internal_5a24c62f6f71c069ad30ee930c6849799a8d5c51fd01a59555831f97ea2a425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 274
        echo "            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_5a24c62f6f71c069ad30ee930c6849799a8d5c51fd01a59555831f97ea2a425a->leave($__internal_5a24c62f6f71c069ad30ee930c6849799a8d5c51fd01a59555831f97ea2a425a_prof);

        
        $__internal_da9fae80c6b5535986935778b49da213c9d0ca91218695c48a09a4378b115686->leave($__internal_da9fae80c6b5535986935778b49da213c9d0ca91218695c48a09a4378b115686_prof);

    }

    // line 287
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4540ef3ae93d8987e33ec63bac3d37c39cb5872b1729f90243e775cfb43c707f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4540ef3ae93d8987e33ec63bac3d37c39cb5872b1729f90243e775cfb43c707f->enter($__internal_4540ef3ae93d8987e33ec63bac3d37c39cb5872b1729f90243e775cfb43c707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_63fef1eafc07ef12430747585340c50f485aabf0c88180f37c0e799dae6b9710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fef1eafc07ef12430747585340c50f485aabf0c88180f37c0e799dae6b9710->enter($__internal_63fef1eafc07ef12430747585340c50f485aabf0c88180f37c0e799dae6b9710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 288
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
        // line 304
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\">Shop</a></li>
                                    <li><a href=\"";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\">Events</a></li>
                                    <li><a href=\"";
        // line 306
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
        // line 323
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
        
        $__internal_63fef1eafc07ef12430747585340c50f485aabf0c88180f37c0e799dae6b9710->leave($__internal_63fef1eafc07ef12430747585340c50f485aabf0c88180f37c0e799dae6b9710_prof);

        
        $__internal_4540ef3ae93d8987e33ec63bac3d37c39cb5872b1729f90243e775cfb43c707f->leave($__internal_4540ef3ae93d8987e33ec63bac3d37c39cb5872b1729f90243e775cfb43c707f_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Default/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 323,  586 => 306,  582 => 305,  578 => 304,  560 => 288,  551 => 287,  533 => 274,  524 => 273,  510 => 264,  501 => 263,  489 => 256,  468 => 238,  463 => 236,  459 => 235,  455 => 234,  451 => 233,  442 => 231,  439 => 230,  429 => 225,  426 => 224,  424 => 223,  415 => 217,  409 => 214,  405 => 213,  395 => 206,  391 => 205,  382 => 199,  303 => 123,  290 => 113,  277 => 103,  264 => 93,  242 => 74,  237 => 71,  228 => 70,  218 => 287,  212 => 283,  210 => 273,  204 => 269,  202 => 263,  196 => 259,  194 => 70,  191 => 69,  182 => 68,  170 => 63,  164 => 60,  157 => 56,  153 => 55,  147 => 52,  135 => 42,  126 => 41,  114 => 337,  112 => 68,  107 => 65,  105 => 41,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 2,);
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
                            <li class=\"dropdown\">
                                <a href=\"blank-page.html#\" class=\"dropdown-toggle\">Home</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"home-magazine.html\">Home - Magazine</a></li>
                                    <li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
                                    <li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
                                    <li><a href=\"index.html\">Home - Games</a></li>
                                    <li><a href=\"home-videos.html\">Home - Videos</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown mega-dropdown\">
                                <a href=\"#\">games</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu category\">
                                    <li class=\"col-md-3\">
                                        <a href=\"\">
                                            <img src=\"{{ asset('img/game/menu-1.jpg') }}\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-warning\">PC</span>
                                                <h3>Assassin's Creedsss Syndicate</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"{{ asset('img/game/menu-2.jpg') }}\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-primary\">PS4</span>
                                                <h3>Last of Us Remastered</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"{{ asset('img/game/menu-3.jpg') }}\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-success\">Xbox</span>
                                                <h3>Max Payne 3</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"{{ asset('img/game/menu-4.jpg') }}\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-danger\">Steam</span>
                                                <h3>Hitman Absolution</h3>
                                                <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Blog</a>
                                <ul class=\"dropdown-menu default\">
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"\"><i class=\"fa fa-align-justify\"></i> blogs</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-large.html\">Archive</a></li>
                                            <li><a href=\"blog-large-sidebar.html\">Sidebar</a></li>
                                            <li><a href=\"blog-large-post.html\">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"blog-medium.html\"><i class=\"fa fa-list-ul\"></i> Blog Medium</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-medium.html\">Archive</a></li>
                                            <li><a href=\"blog-medium-sidebar.html\">Sidebar</a></li>
                                            <li><a href=\"blog-medium-post.html\">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown-submenu\">
                                        <a href=\"blog-post.html\"><i class=\"fa fa-file-o\"></i> Single Post</a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"blog-post.html\">Blog Image Post</a></li>
                                            <li><a href=\"blog-post-slideshow.html\">Blog Slideshow Post</a></li>
                                            <li><a href=\"blog-post-video.html\">Blog Video Post</a></li>
                                            <li><a href=\"blog-post-music.html\">Blog Music Post</a></li>
                                            <li><a href=\"blog-post-disqus.html\">Blog Disqus Post</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"blog-masonry.html\"><i class=\"fa fa-th-large\"></i>Blog Masonry</a></li>
                                    <li><a href=\"blog-thumbnail.html\"><i class=\"fa fa-clone\"></i>Blog Thumbnail</a></li>
                                    <li><a href=\"blog-timeline.html\"><i class=\"fa fa-clock-o\"></i>Blog Timeline</a></li>
                                </ul>
                            </li>
                            <li class=\"dropdown mega-dropdown mega-dropdown-sm\">
                                <a href=\"blank-page.html#\">Pages</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\">
                                    <li class=\"col-md-6\">
                                        <ul>
                                            <li class=\"dropdown-header\">Default Examples</li>
                                            <li><a href=\"games.html\">Games</a></li>
                                            <li><a href=\"games-single.html\">Game Post</a></li>
                                            <li><a href=\"reviews.html\">Reviews</a></li>
                                            <li><a href=\"reviews-single.html\">Review Post</a></li>
                                            <li><a href=\"videos.html\">Videos</a></li>
                                            <li><a href=\"videos-single.html\">Videos Post</a></li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"col-md-6\">
                                        <ul>
                                            <li class=\"dropdown-header\">Initial Examples</li>
                                            <li><a href=\"login.html\">Login</a></li>
                                            <li><a href=\"register.html\">Register</a></li>
                                            <li><a href=\"profile.html\">Profile Page</a></li>
                                            <li><a href=\"forum.html\">Forums</a></li>
                                            <li><a href=\"fullwidth.html\">Full Width</a></li>
                                            <li><a href=\"blank-page.html\">Blank Page</a></li>
                                            <li><a href=\"\">404 Error</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('tournoi_index', {'p': 1}) }}\">View All Tournaments</a></li>
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
                                <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                                <ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('tproduit_index', {'page': 1}) }}\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                                    <li><a href=\"{{ path('tproduit_new') }}\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                                </ul>
                            </li>
                            <li class=\"custom\"><a href=\"{{ path('streaming_all') }}\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                            <li><a href=\"\">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class=\"nav-right\">
                    {% if app.user  == null %}
                        <div class=\"nav-profile dropdown\">
                            <a href=\"{{ path('eloboosted_login_homepage') }}\" ><img src=\"{{ asset('FOassets/img/user/avatar2.jpg') }}\" alt=\"\"> <span>Connect to you account</span></a>

                        </div>

                    {% else %}
                        <div class=\"nav-profile dropdown\">
                            <a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ asset('FOassets/img/user/avatar.jpg') }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                                <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                                <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"{{ path('SignOut') }}\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                            </ul>
                        </div>
                        <div class=\"nav-dropdown dropdown\">
                            <a href=\"index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                                <li><a href=\"index.html#\">Alien Isolation</a></li>
                                <li><a href=\"index.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                                <li><a href=\"index.html#\">Last of Us</a></li>
                                <li><a href=\"index.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                                <li><a href=\"index.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                                <li class=\"dropdown-footer\"><a href=\"index.html#\">View all games</a></li>
                            </ul>
                        </div>
                        <a href=\"index.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>

                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </header>
    <!-- /header -->

    <div class=\"modal-search\">
        {% block search %}
            <div class=\"container\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
                <i class=\"fa fa-times close\"></i>
            </div>
        {% endblock %}
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
</html>", "@EloboostedFrontoffice/Default/Layout.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Default\\Layout.html.twig");
    }
}
