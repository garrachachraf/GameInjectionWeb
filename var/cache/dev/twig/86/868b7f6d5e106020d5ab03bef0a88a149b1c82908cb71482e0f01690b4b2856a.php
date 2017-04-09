<?php

/* EloboostedFrontofficeBundle:Compte:myProfile.html.twig */
class __TwigTemplate_174e063d5e5059db55745abd6de8fc28ea9365ad43bbd1059600a025a65ac691 extends Twig_Template
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
        $__internal_b830203290cb8477549d5c7da151bb2c099b6ab5a2ca196e4472c9d8dde62cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b830203290cb8477549d5c7da151bb2c099b6ab5a2ca196e4472c9d8dde62cfc->enter($__internal_b830203290cb8477549d5c7da151bb2c099b6ab5a2ca196e4472c9d8dde62cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig"));

        $__internal_01035d0b723cc07c40cfcee10f585796d5995b76c7944d33c0636bba74dc2b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01035d0b723cc07c40cfcee10f585796d5995b76c7944d33c0636bba74dc2b6a->enter($__internal_01035d0b723cc07c40cfcee10f585796d5995b76c7944d33c0636bba74dc2b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig"));

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
\t\tbody {
\t\t\tfont-family: \"Lato\", sans-serif;
\t\t}

\t\t.sidenav {
\t\t\theight: 100%;
\t\t\twidth: 0;
\t\t\tposition: fixed;
\t\t\tz-index: 9999999;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\tbackground-color: #111;
\t\t\toverflow-x: hidden;
\t\t\ttransition: 0.5s;
\t\t\tpadding-top: 60px;
\t\t}

\t\t.sidenav a {
\t\t\tpadding: 8px 8px 8px 32px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 25px;
\t\t\tcolor: #818181;
\t\t\tdisplay: block;
\t\t\ttransition: 0.3s
\t\t}

\t\t.sidenav a:hover, .offcanvas a:focus{
\t\t\tcolor: #f1f1f1;
\t\t}

\t\t.sidenav .closebtn {
\t\t\tposition: absolute;
\t\t\tbottom: 0;
\t\t\tright: 25px;
\t\t\tfont-size: 25px;
\t\t\tcolor:white;
\t\t\tmargin-left: 50px;
\t\t}

\t\t@media screen and (max-height: 450px) {
\t\t\t.sidenav {padding-top: 15px;}
\t\t\t.sidenav a {font-size: 18px;}
\t\t}
\t</style>
\t<script>
        function openNav() {
\t\t\tdocument.getElementById(\"mySidenav\").style.width = \"285px\";

        }

        function closeNav() {
            document.getElementById(\"mySidenav\").style.width = \"0px\";

        }
\t</script>
\t<script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(

                function()
                {
                    \$.post('";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lstnots");
        echo "', function(data) {
                        \$('#nots2').html(data);
                        console.log(data);
                    });

                }

                , 5000);

        })
\t</script>
\t<title>Gameforest - Responsive Gaming HTML Theme</title>
\t
\t<!-- FAVICON -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t
\t<!-- CORE CSS -->
\t<link href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
\t<!-- PLUGINS -->
\t<link href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- THEME CSS -->
\t<link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">

\t<header>
\t\t<div class=\"container\">
\t\t\t<span class=\"bar hide\"></span>
\t\t\t<a href=\"index.html\" class=\"logo\"><img src=\"img/logo.png\" alt=\"\"></a>
\t\t\t<nav>
\t\t\t\t<div class=\"nav-control\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"dropdown-toggle\">Home</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine.html\">Home - Magazine</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home - Games</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-videos.html\">Home - Videos</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown\">
\t\t\t\t\t\t\t<a href=\"games.html\">Games</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu category\">
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">PC</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Assassin's Creed Syndicate</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">PS4</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Last of Us Remastered</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Xbox</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Max Payne 3</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">Steam</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Hitman Absolution</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"dropdown-toggle\">Blog</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-large.html\"><i class=\"fa fa-align-justify\"></i> Blog Large</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large.html\">Archive</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large-sidebar.html\">Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large-post.html\">Single Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-medium.html\"><i class=\"fa fa-list-ul\"></i> Blog Medium</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium.html\">Archive</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium-sidebar.html\">Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium-post.html\">Single Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-file-o\"></i> Single Post</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post.html\">Blog Image Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-slideshow.html\">Blog Slideshow Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-video.html\">Blog Video Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-music.html\">Blog Music Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-disqus.html\">Blog Disqus Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-masonry.html\"><i class=\"fa fa-th-large\"></i>Blog Masonry</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-thumbnail.html\"><i class=\"fa fa-clone\"></i>Blog Thumbnail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-timeline.html\"><i class=\"fa fa-clock-o\"></i>Blog Timeline</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown mega-dropdown-sm\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu row\">
\t\t\t\t\t\t\t\t<li class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Default Examples</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"games.html\">Games</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"games-single.html\">Game Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"reviews.html\">Reviews</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"reviews-single.html\">Review Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"videos.html\">Videos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"videos-single.html\">Videos Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Initial Examples</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"forum.html\">Forums</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"fullwidth.html\">Full Width</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blank-page.html\">Blank Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">Elements</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url(img/content/menu.png);\">
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Typography</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-typography.html\"><i class=\"fa fa-text-height\"></i> General Typography</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-blockquote.html\"><i class=\"fa fa-quote-left\"></i> Blockquote</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-helpers.html\"><i class=\"fa fa-square-o\"></i> Helper Classes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-testimonials.html\"><i class=\"fa fa-bullhorn\"></i> Testimonials</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-grids.html\"><i class=\"fa fa-th-large\"></i> Grid Layouts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-alerts.html\"><i class=\"fa fa-bell-o\"></i> Alert & Messages</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-labels.html\"><i class=\"fa fa-bookmark-o\"></i> Labels & Badges</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-media.html\"><i class=\"fa fa-image\"></i> Audio, Videos & Images</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-pagers.html\"><i class=\"fa fa-ellipsis-h\"></i> Pagination & Pagers</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Button & Icons</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-buttons.html\"><i class=\"fa fa-flash\"></i> General Buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-social-buttons.html\"><i class=\"fa fa-thumbs-o-up\"></i> Social Buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-glyphicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> Glyphicons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-fontawesome.html\"><i class=\"fa fa-chevron-circle-right\"></i> FontAwesome</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-ionicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> IonIcons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Components</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-media-objects.html\"><i class=\"fa fa-align-justify\"></i> Media Objects</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-page-headers.html\"><i class=\"fa fa-align-justify\"></i> Page headers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-wells.html\"><i class=\"fa fa-align-justify\"></i> Wells</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Default Elements</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-widgets.html\"><i class=\"fa fa-th\"></i> Widgets</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-sections.html\"><i class=\"fa fa-th\"></i> Sections</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-thumbnails.html\"><i class=\"fa fa-file-o\"></i> Thumbnails</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-cards.html\"><i class=\"fa fa-sticky-note-o\"></i> Cards</a></li>   
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-tabs.html\"><i class=\"fa fa-external-link\"></i> Accordion & Tabs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-timeline.html\"><i class=\"fa fa-th-large\"></i> Timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-tables.html\"><i class=\"fa fa-th\"></i> Tables</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-progress.html\"><i class=\"fa fa-arrows-h\"></i> Progress Bars</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-panels.html\"><i class=\"fa fa-th\"></i> Panels</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Forms & Info</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-forms.html\"><i class=\"fa fa-align-justify\"></i> Form Elements</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-form-layouts.html\"><i class=\"fa fa-align-justify\"></i> Form Layouts</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-modals.html\"><i class=\"fa fa-external-link\"></i> Modals</a></li>\t\t\t \t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-carousel.html\"><i class=\"fa fa-arrows\"></i> Carousel Examples</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-charts.html\"><i class=\"fa fa-bar-chart-o\"></i> Charts & Countdowns</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-google-maps.html\"><i class=\"fa fa-map-marker\"></i> Google Maps</a></li>\t\t                                             
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"videos.html\">Videos</a></li>
\t\t\t\t\t\t<li><a href=\"gallery.html\">Gallery</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"nav-right\">
                ";
        // line 298
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 299
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 300
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

\t\t\t\t\t</div>

                ";
        } else {
            // line 305
            echo "\t\t\t\t\t";
            $context["foo"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array());
            // line 306
            echo "\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"";
            // line 307
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 311
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 312
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 313
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"nots2\" class=\"nav-dropdown dropdown\">

                            ";
            // line 321
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                            ";
            // line 329
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"index.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>

                ";
        }
        // line 334
        echo "\t\t\t\t<span style=\"font-size:15px;color:White;cursor:pointer\" onclick=\"openNav()\">&#9776; Open Chat</span>

\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /header -->
\t
\t<div class=\"modal-search\">
\t\t<div class=\"container\">
\t\t\t<div id=\"mySidenav\" class=\"sidenav\">
\t\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">Close</a>
\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t</div>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
\t\t\t<i class=\"fa fa-times close\"></i>
\t\t</div>
\t</div><!-- /.modal-search -->
\t
\t<!-- wrapper -->
\t<div id=\"wrapper\">\t
\t\t<section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
\t\t\t<div class=\"hero-bg\"></div>
\t\t\t<div class=\"container relative\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"page-title\">YAKUZI <a href=\"profile.html#\" class=\"btn btn-primary btn-sm btn-rounded\" data-toggle=\"tooltip\" title=\"Add friend\"><i class=\"fa fa-user-plus\"></i></a></div>\t
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t<div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"YAKUZI\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
\t\t\t<div class=\"tab-select sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"profile.html#\">Timeline</a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Friends <span>(34)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Images <span>(8)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Videos <span>(2)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Groups</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 hidden-xs\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">About me</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tI am a frontend developer & designer. Love to create awesome designs and unique websites.
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list margin-top-25\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i> Joined December 2009</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i> United Kingdom</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Gameforest</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Navigation</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list-bordered\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games (4)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-film\"></i> Videos (2)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-picture-o\"></i> Galleries (3)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-calendar-o\"></i> Events</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-users\"></i> Groups (1)</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-friends\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Friends (";
        // line 423
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lstAmi"]) ? $context["lstAmi"] : $this->getContext($context, "lstAmi"))), "html", null, true);
        echo ")</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstAmi"]) ? $context["lstAmi"] : $this->getContext($context, "lstAmi")));
        foreach ($context['_seq'] as $context["_key"] => $context["ami"]) {
            // line 428
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["ami"], "idCompte", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "idCompte", array()), "html", null, true);
            echo " <br>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ami'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
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
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Overwatch Closed Beta</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 15, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Blood and Gore</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 13, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Warner Bros. Interactive</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 12, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Sharks Don't Sleep</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 11, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">GTA 5 Reaches 5 Million</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 10, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t\t\t<div class=\"panel panel-default margin-bottom-40\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"What's in your head?...\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left no-padding-left\"><i class=\"fa fa-image\"></i> Image</a>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left\"><i class=\"fa fa-film\"></i> Video</a>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left\"><i class=\"fa fa-map-marker\"></i> Location</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-icon-left pull-right\"><i class=\"fa fa-edit\"></i> Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">Deadpool Gets the Movie He Deserves</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">Official Mirror’s Edge Catalyst Trailer</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t\t\t\t\t\t<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\" class=\"active\"><i class=\"fa fa-heart\"></i> you like it (7)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i> February, 2016</h4>
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">The Witcher 3 is Game of the Year</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<center><a href=\"profile.html#\" class=\"btn btn-primary btn-lg btn-shadow btn-rounded\">Show More</a></center>
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
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 647
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
        
        $__internal_b830203290cb8477549d5c7da151bb2c099b6ab5a2ca196e4472c9d8dde62cfc->leave($__internal_b830203290cb8477549d5c7da151bb2c099b6ab5a2ca196e4472c9d8dde62cfc_prof);

        
        $__internal_01035d0b723cc07c40cfcee10f585796d5995b76c7944d33c0636bba74dc2b6a->leave($__internal_01035d0b723cc07c40cfcee10f585796d5995b76c7944d33c0636bba74dc2b6a_prof);

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
        return array (  761 => 647,  757 => 646,  753 => 645,  537 => 431,  527 => 429,  518 => 428,  514 => 427,  507 => 423,  446 => 365,  413 => 334,  406 => 329,  402 => 321,  393 => 315,  388 => 313,  384 => 312,  380 => 311,  376 => 310,  366 => 307,  363 => 306,  360 => 305,  350 => 300,  347 => 299,  345 => 298,  146 => 102,  142 => 101,  136 => 98,  129 => 94,  125 => 93,  105 => 76,  36 => 10,  25 => 1,);
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
\t\tbody {
\t\t\tfont-family: \"Lato\", sans-serif;
\t\t}

\t\t.sidenav {
\t\t\theight: 100%;
\t\t\twidth: 0;
\t\t\tposition: fixed;
\t\t\tz-index: 9999999;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\tbackground-color: #111;
\t\t\toverflow-x: hidden;
\t\t\ttransition: 0.5s;
\t\t\tpadding-top: 60px;
\t\t}

\t\t.sidenav a {
\t\t\tpadding: 8px 8px 8px 32px;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 25px;
\t\t\tcolor: #818181;
\t\t\tdisplay: block;
\t\t\ttransition: 0.3s
\t\t}

\t\t.sidenav a:hover, .offcanvas a:focus{
\t\t\tcolor: #f1f1f1;
\t\t}

\t\t.sidenav .closebtn {
\t\t\tposition: absolute;
\t\t\tbottom: 0;
\t\t\tright: 25px;
\t\t\tfont-size: 25px;
\t\t\tcolor:white;
\t\t\tmargin-left: 50px;
\t\t}

\t\t@media screen and (max-height: 450px) {
\t\t\t.sidenav {padding-top: 15px;}
\t\t\t.sidenav a {font-size: 18px;}
\t\t}
\t</style>
\t<script>
        function openNav() {
\t\t\tdocument.getElementById(\"mySidenav\").style.width = \"285px\";

        }

        function closeNav() {
            document.getElementById(\"mySidenav\").style.width = \"0px\";

        }
\t</script>
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
\t<title>Gameforest - Responsive Gaming HTML Theme</title>
\t
\t<!-- FAVICON -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t
\t<!-- CORE CSS -->
\t<link href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
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
\t\t\t<a href=\"index.html\" class=\"logo\"><img src=\"img/logo.png\" alt=\"\"></a>
\t\t\t<nav>
\t\t\t\t<div class=\"nav-control\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"dropdown-toggle\">Home</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine.html\">Home - Magazine</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home - Games</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-videos.html\">Home - Videos</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown\">
\t\t\t\t\t\t\t<a href=\"games.html\">Games</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu category\">
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">PC</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Assassin's Creed Syndicate</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">PS4</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Last of Us Remastered</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success\">Xbox</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Max Payne 3</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<a href=\"games-single.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/game/menu-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">Steam</span>
\t\t\t\t\t\t\t\t\t\t\t<h3>Hitman Absolution</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, adipise elit.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"dropdown-toggle\">Blog</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu default\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-large.html\"><i class=\"fa fa-align-justify\"></i> Blog Large</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large.html\">Archive</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large-sidebar.html\">Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-large-post.html\">Single Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-medium.html\"><i class=\"fa fa-list-ul\"></i> Blog Medium</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium.html\">Archive</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium-sidebar.html\">Sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-medium-post.html\">Single Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"blog-post.html\"><i class=\"fa fa-file-o\"></i> Single Post</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post.html\">Blog Image Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-slideshow.html\">Blog Slideshow Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-video.html\">Blog Video Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-music.html\">Blog Music Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-post-disqus.html\">Blog Disqus Post</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-masonry.html\"><i class=\"fa fa-th-large\"></i>Blog Masonry</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-thumbnail.html\"><i class=\"fa fa-clone\"></i>Blog Thumbnail</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog-timeline.html\"><i class=\"fa fa-clock-o\"></i>Blog Timeline</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown mega-dropdown-sm\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">Pages</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu row\">
\t\t\t\t\t\t\t\t<li class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Default Examples</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"games.html\">Games</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"games-single.html\">Game Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"reviews.html\">Reviews</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"reviews-single.html\">Review Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"videos.html\">Videos</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"videos-single.html\">Videos Post</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Initial Examples</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"register.html\">Register</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"forum.html\">Forums</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"fullwidth.html\">Full Width</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blank-page.html\">Blank Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"404.html\">404 Error</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">Elements</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url(img/content/menu.png);\">
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Typography</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-typography.html\"><i class=\"fa fa-text-height\"></i> General Typography</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-blockquote.html\"><i class=\"fa fa-quote-left\"></i> Blockquote</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-helpers.html\"><i class=\"fa fa-square-o\"></i> Helper Classes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-testimonials.html\"><i class=\"fa fa-bullhorn\"></i> Testimonials</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-grids.html\"><i class=\"fa fa-th-large\"></i> Grid Layouts</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-alerts.html\"><i class=\"fa fa-bell-o\"></i> Alert & Messages</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-labels.html\"><i class=\"fa fa-bookmark-o\"></i> Labels & Badges</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-media.html\"><i class=\"fa fa-image\"></i> Audio, Videos & Images</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-pagers.html\"><i class=\"fa fa-ellipsis-h\"></i> Pagination & Pagers</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Button & Icons</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-buttons.html\"><i class=\"fa fa-flash\"></i> General Buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-social-buttons.html\"><i class=\"fa fa-thumbs-o-up\"></i> Social Buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-glyphicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> Glyphicons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-fontawesome.html\"><i class=\"fa fa-chevron-circle-right\"></i> FontAwesome</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-ionicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> IonIcons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Components</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-media-objects.html\"><i class=\"fa fa-align-justify\"></i> Media Objects</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-page-headers.html\"><i class=\"fa fa-align-justify\"></i> Page headers</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-wells.html\"><i class=\"fa fa-align-justify\"></i> Wells</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Default Elements</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-widgets.html\"><i class=\"fa fa-th\"></i> Widgets</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-sections.html\"><i class=\"fa fa-th\"></i> Sections</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-thumbnails.html\"><i class=\"fa fa-file-o\"></i> Thumbnails</a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-cards.html\"><i class=\"fa fa-sticky-note-o\"></i> Cards</a></li>   
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-tabs.html\"><i class=\"fa fa-external-link\"></i> Accordion & Tabs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-timeline.html\"><i class=\"fa fa-th-large\"></i> Timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-tables.html\"><i class=\"fa fa-th\"></i> Tables</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-progress.html\"><i class=\"fa fa-arrows-h\"></i> Progress Bars</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-panels.html\"><i class=\"fa fa-th\"></i> Panels</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">Forms & Info</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-forms.html\"><i class=\"fa fa-align-justify\"></i> Form Elements</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-form-layouts.html\"><i class=\"fa fa-align-justify\"></i> Form Layouts</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-modals.html\"><i class=\"fa fa-external-link\"></i> Modals</a></li>\t\t\t \t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-carousel.html\"><i class=\"fa fa-arrows\"></i> Carousel Examples</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-charts.html\"><i class=\"fa fa-bar-chart-o\"></i> Charts & Countdowns</a></li>\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"elements-google-maps.html\"><i class=\"fa fa-map-marker\"></i> Google Maps</a></li>\t\t                                             
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"videos.html\">Videos</a></li>
\t\t\t\t\t\t<li><a href=\"gallery.html\">Gallery</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<div class=\"nav-right\">
                {% if app.user  == null %}
\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"{{ path('eloboosted_login_homepage') }}\" ><img src=\"{{ asset('FOassets/img/user/avatar2.jpg') }}\" alt=\"\"> <span>Connect to you account</span></a>

\t\t\t\t\t</div>

                {% else %}
\t\t\t\t\t{% set foo = app.user.image  %}
\t\t\t\t\t<div class=\"nav-profile dropdown\">
\t\t\t\t\t\t<a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ foo }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('home') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('home') }}\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
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
\t\t\t\t\t<a href=\"index.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>

                {% endif %}
\t\t\t\t<span style=\"font-size:15px;color:White;cursor:pointer\" onclick=\"openNav()\">&#9776; Open Chat</span>

\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /header -->
\t
\t<div class=\"modal-search\">
\t\t<div class=\"container\">
\t\t\t<div id=\"mySidenav\" class=\"sidenav\">
\t\t\t\t<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">Close</a>
\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t<a href=\"#\">Clients</a>
\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t</div>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
\t\t\t<i class=\"fa fa-times close\"></i>
\t\t</div>
\t</div><!-- /.modal-search -->
\t
\t<!-- wrapper -->
\t<div id=\"wrapper\">\t
\t\t<section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
\t\t\t<div class=\"hero-bg\"></div>
\t\t\t<div class=\"container relative\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"page-title\">YAKUZI <a href=\"profile.html#\" class=\"btn btn-primary btn-sm btn-rounded\" data-toggle=\"tooltip\" title=\"Add friend\"><i class=\"fa fa-user-plus\"></i></a></div>\t
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t<div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"YAKUZI\">
\t\t\t\t\t\t\t<a href=\"profile.html#\">
\t\t\t\t\t\t\t\t<img src=\"{{ foo }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
\t\t\t<div class=\"tab-select sticky\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"profile.html#\">Timeline</a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Friends <span>(34)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Images <span>(8)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Videos <span>(2)</span></a></li>
\t\t\t\t\t\t<li><a href=\"profile.html#\">Groups</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 hidden-xs\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">About me</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\tI am a frontend developer & designer. Love to create awesome designs and unique websites.
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list margin-top-25\">
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-clock-o\"></i> Joined December 2009</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i> United Kingdom</li>
\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-chain-broken\"></i> Gameforest</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Navigation</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t\t\t\t<ul class=\"panel-list-bordered\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games (4)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-film\"></i> Videos (2)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-picture-o\"></i> Galleries (3)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-calendar-o\"></i> Events</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-users\"></i> Groups (1)</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"widget widget-friends\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">Friends ({{ lstAmi|length }})</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t{% for ami in lstAmi %}
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
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Overwatch Closed Beta</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 15, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Blood and Gore</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 13, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Warner Bros. Interactive</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 12, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">Sharks Don't Sleep</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 11, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-list-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"widget-list-title\"><a href=\"profile.html#\">GTA 5 Reaches 5 Million</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-clock-o\"></i> September 10, 2016</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t\t\t<div class=\"panel panel-default margin-bottom-40\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"4\" placeholder=\"What's in your head?...\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left no-padding-left\"><i class=\"fa fa-image\"></i> Image</a>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left\"><i class=\"fa fa-film\"></i> Video</a>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"btn btn-link btn-icon-left\"><i class=\"fa fa-map-marker\"></i> Location</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-icon-left pull-right\"><i class=\"fa fa-edit\"></i> Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">Deadpool Gets the Movie He Deserves</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">Official Mirror’s Edge Catalyst Trailer</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"post-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t\t\t\t\t\t<iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\" class=\"active\"><i class=\"fa fa-heart\"></i> you like it (7)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i> February, 2016</h4>
\t\t\t\t\t\t<div class=\"panel panel-default panel-post\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t<div class=\"post-header post-author\">
\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"img/user/avatar.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"profile.html#\">The Witcher 3 is Game of the Year</a></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"post-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\">#hashtag</a>, <a href=\"profile.html#\">#witcher 3</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tEtiam et sollicitudin elit. Sed ultrices aliquet dui, eu aliquet metus sodales sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor varius pulvinar. Vivamus efficitur vulputate imperdiet.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t\t<ul class=\"post-action\">
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<center><a href=\"profile.html#\" class=\"btn btn-primary btn-lg btn-shadow btn-rounded\">Show More</a></center>
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
</html>", "EloboostedFrontofficeBundle:Compte:myProfile.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Compte/myProfile.html.twig");
    }
}
