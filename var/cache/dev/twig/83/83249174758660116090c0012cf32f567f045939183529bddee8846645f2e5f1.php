<?php

/* @EloboostedFrontoffice/Default/index.html.twig */
class __TwigTemplate_bc1089a49a623a0d79ed4c5c45a124890fb333dcc4ffbbfb5528621b468017ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6943afce3ad62aff6614822543f113ad572295bd7be8fb2a0bf9789d7c96f808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6943afce3ad62aff6614822543f113ad572295bd7be8fb2a0bf9789d7c96f808->enter($__internal_6943afce3ad62aff6614822543f113ad572295bd7be8fb2a0bf9789d7c96f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/index.html.twig"));

        $__internal_111048e490bf4f61e3d6b881610af532bfc96ce070e8415acfe848bf8bdb9af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111048e490bf4f61e3d6b881610af532bfc96ce070e8415acfe848bf8bdb9af1->enter($__internal_111048e490bf4f61e3d6b881610af532bfc96ce070e8415acfe848bf8bdb9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/index.html.twig"));

        // line 2
        echo "<html>
<head>
    <style>
        body {
            font-family: \"Lato\", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            bottom: 50px;
            right: 25px;
            font-size: 25px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
    <script>
        function openNav() {
            document.getElementById(\"mySidenav\").style.width = \"285px\";
        }

        function closeNav() {
            document.getElementById(\"mySidenav\").style.width = \"0\";
        }
    </script>
    ";
        // line 57
        $this->displayBlock('head', $context, $blocks);
        // line 82
        echo "
</head>
<body class=\"fixed-header\">



<header>

    <div class=\"container\">

        <div id=\"mySidenav\" class=\"sidenav\">

            <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">Close</a>
            <a href=\"#\">About</a>
            <a href=\"#\">Services</a>
            <a href=\"#\">Clients</a>
            <a href=\"#\">Contact</a>
        </div>
        <span class=\"bar hide\"></span>
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"dropdown\">
                        <a href=\"index.html#\" class=\"dropdown-toggle\">Home</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"home-magazine.html\">Home - Magazine</a></li>
                            <li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
                            <li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
                            <li><a href=\"index.html\">Home - Games</a></li>
                            <li><a href=\"home-videos.html\">Home - Videos</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"games.html\">Games</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu category\">
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/game/menu-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-warning\">PC</span>
                                        <h3>Assassin's Creed Syndicate</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/game/menu-2.jpg"), "html", null, true);
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
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/game/menu-3.jpg"), "html", null, true);
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
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/game/menu-4.jpg"), "html", null, true);
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
                        <a href=\"index.html#\" class=\"dropdown-toggle\">Blog</a>
                        <ul class=\"dropdown-menu default\">
                            <li class=\"dropdown-submenu\">
                                <a href=\"blog-large.html\"><i class=\"fa fa-align-justify\"></i> Blog Large</a>
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
                        <a href=\"index.html#\">Pages</a>
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
                                    <li><a href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">Forums</a></li>
                                    <li><a href=\"fullwidth.html\">Full Width</a></li>
                                    <li><a href=\"blank-page.html\">Blank Page</a></li>
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"index.html#\">Elements</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url(";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/content/menu.png"), "html", null, true);
        echo ");\">
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Typography</li>
                                    <li><a href=\"elements-typography.html\"><i class=\"fa fa-text-height\"></i> General Typography</a></li>
                                    <li><a href=\"elements-blockquote.html\"><i class=\"fa fa-quote-left\"></i> Blockquote</a></li>
                                    <li><a href=\"elements-helpers.html\"><i class=\"fa fa-square-o\"></i> Helper Classes</a></li>
                                    <li><a href=\"elements-testimonials.html\"><i class=\"fa fa-bullhorn\"></i> Testimonials</a></li>
                                    <li><a href=\"elements-grids.html\"><i class=\"fa fa-th-large\"></i> Grid Layouts</a></li>
                                    <li><a href=\"elements-alerts.html\"><i class=\"fa fa-bell-o\"></i> Alert & Messages</a></li>
                                    <li><a href=\"elements-labels.html\"><i class=\"fa fa-bookmark-o\"></i> Labels & Badges</a></li>
                                    <li><a href=\"elements-media.html\"><i class=\"fa fa-image\"></i> Audio, Videos & Images</a></li>
                                    <li><a href=\"elements-pagers.html\"><i class=\"fa fa-ellipsis-h\"></i> Pagination & Pagers</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Button & Icons</li>
                                    <li><a href=\"elements-buttons.html\"><i class=\"fa fa-flash\"></i> General Buttons</a></li>
                                    <li><a href=\"elements-social-buttons.html\"><i class=\"fa fa-thumbs-o-up\"></i> Social Buttons</a></li>
                                    <li><a href=\"elements-glyphicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> Glyphicons</a></li>
                                    <li><a href=\"elements-fontawesome.html\"><i class=\"fa fa-chevron-circle-right\"></i> FontAwesome</a></li>
                                    <li><a href=\"elements-ionicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> IonIcons</a></li>
                                    <li class=\"dropdown-header\">Components</li>
                                    <li><a href=\"elements-media-objects.html\"><i class=\"fa fa-align-justify\"></i> Media Objects</a></li>
                                    <li><a href=\"elements-page-headers.html\"><i class=\"fa fa-align-justify\"></i> Page headers</a></li>
                                    <li><a href=\"elements-wells.html\"><i class=\"fa fa-align-justify\"></i> Wells</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Default Elements</li>
                                    <li><a href=\"elements-widgets.html\"><i class=\"fa fa-th\"></i> Widgets</a></li>
                                    <li><a href=\"elements-sections.html\"><i class=\"fa fa-th\"></i> Sections</a></li>
                                    <li><a href=\"elements-thumbnails.html\"><i class=\"fa fa-file-o\"></i> Thumbnails</a></li>
                                    <li><a href=\"elements-cards.html\"><i class=\"fa fa-sticky-note-o\"></i> Cards</a></li>
                                    <li><a href=\"elements-tabs.html\"><i class=\"fa fa-external-link\"></i> Accordion & Tabs</a></li>
                                    <li><a href=\"elements-timeline.html\"><i class=\"fa fa-th-large\"></i> Timeline</a></li>
                                    <li><a href=\"elements-tables.html\"><i class=\"fa fa-th\"></i> Tables</a></li>
                                    <li><a href=\"elements-progress.html\"><i class=\"fa fa-arrows-h\"></i> Progress Bars</a></li>
                                    <li><a href=\"elements-panels.html\"><i class=\"fa fa-th\"></i> Panels</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Forms & Info</li>
                                    <li><a href=\"elements-forms.html\"><i class=\"fa fa-align-justify\"></i> Form Elements</a></li>
                                    <li><a href=\"elements-form-layouts.html\"><i class=\"fa fa-align-justify\"></i> Form Layouts</a></li>
                                    <li><a href=\"elements-modals.html\"><i class=\"fa fa-external-link\"></i> Modals</a></li>
                                    <li><a href=\"elements-carousel.html\"><i class=\"fa fa-arrows\"></i> Carousel Examples</a></li>
                                    <li><a href=\"elements-charts.html\"><i class=\"fa fa-bar-chart-o\"></i> Charts & Countdowns</a></li>
                                    <li><a href=\"elements-google-maps.html\"><i class=\"fa fa-map-marker\"></i> Google Maps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"videos.html\">Videos</a></li>
                    <li><a href=\"gallery.html\">Gallery</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class=\"nav-right\">

            ";
        // line 290
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 291
            echo "            <div class=\"nav-profile dropdown\">
                <a href=\"";
            // line 292
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

            </div>

            ";
        } else {
            // line 297
            echo "            <div class=\"nav-profile dropdown\">
                <a href=\"";
            // line 298
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 300
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                    <li><a href=\"";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                    <li><a href=\"";
            // line 302
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                    <li><a href=\"";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
            // line 305
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
        // line 323
        echo "        <span style=\"font-size:15px;color:White;cursor:pointer\" onclick=\"openNav()\">&#9776; Open Chat</span>
        </div>
    </div>
</header>
<!-- /header -->

<div class=\"modal-search\">
    <div class=\"container\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
        <i class=\"fa fa-times close\"></i>
    </div>
</div><!-- /.modal-search -->

<!-- wrapper -->
<div id=\"wrapper\">
    <div id=\"full-carousel\" class=\"ken-burns carousel slide full-carousel carousel-fade\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#full-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#full-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#full-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item active inactiveUntilOnLoad\">
                <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/slideshow/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 bounceInDown\">The Witcher 3: Wild Hunt</h1>
                        <p data-animation=\"animated animate7 fadeInUp\">The world is in chaos. The air is thick with tension and the smoke of burnt villages.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/slideshow/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 fadeInDown\">The Last of Us: Remastered</h1>
                        <p data-animation=\"animated animate7 fadeIn\">Survive an apocalypse on Earth in The Last of Us, a PlayStation 4-exclusive title by Naughty Dog.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/slideshow/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 fadeIn\">Star Wars: Battlefront 3</h1>
                        <p data-animation=\"animated animate7 fadeIn\">Galactic forces clash in this reboot of Star Wars Battlefront, the blockbuster shooter.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <a class=\"left carousel-control\" href=\"index.html#full-carousel\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"index.html#full-carousel\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            </a>
        </div>
    </div>

    <section class=\"bg-grey-50 border-bottom-1 border-grey-200 relative\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"title outline\">
                        <h4><i class=\"fa fa-heart\"></i> Recent Games</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-warning\">PC</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Assassin's Creed Syndicate</a></h3>
                            <ul>
                                <li>March 11, 2016</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras felis mauris, accumsan.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-success\">Xbox One</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>8</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Guardians of the Galaxy 2</a></h3>
                            <ul>
                                <li>March 15, 2016</li>
                            </ul>
                            <p>Donec maximus sodales tellus a molestie. In eu orci vitae ligula iaculis sollicitudin.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-primary\">PS4</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>12</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></h3>
                            <ul>
                                <li>Febr 21, 2016</li>
                            </ul>
                            <p>Proin at efficitur purus. Suspendisse eu erat ante. Ut lectus arcu, mollis id eleifend et.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-danger\">Steam</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>10</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Grand Theft Auto 5</a></h3>
                            <ul>
                                <li>Apr 21, 2016</li>
                            </ul>
                            <p>Suspendisse potenti. Ut pretium, erat a cursus bibendum, nisi lectus egestas.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-primary\">PS4</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>4</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Deadpool The Game</a></h3>
                            <ul>
                                <li>Unknown Release Date</li>
                            </ul>
                            <p>Nullam eu tellus feugiat, lobortis ante a, pulvinar magna.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/blog/md/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-success\">Xbox One</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>16</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Grand Theft Auto One</a></h3>
                            <ul>
                                <li>May 30, 2016</li>
                            </ul>
                            <p> Pellentesque id justo molestie, sodales leo nec, molestie nulla.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"text-center\"><a href=\"games.html\" class=\"btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20\">Show More <i class=\"fa fa-angle-right\"></i></a></div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"title outline\">
                        <h4><i class=\"fa fa-star\"></i> Recent Reviews</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
                    </div>
                </div>
            </div>
            <div class=\"row slider\">
                <div class=\"owl-carousel\">
                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-success\">7.2</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Uncharted 4</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-warning\">5.4</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Hitman: Absolution</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-danger\">2.1</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Last of Us 2</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-success\">6.9</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Bioshock: Infinite</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-success\">7.2</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Grand Theft Auto 5</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-warning\">5.4</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">DayZ</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/review/7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <span class=\"label label-danger\">2.1</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Liberty City</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <a href=\"index.html#\" class=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a href=\"index.html#\" class=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </section>

    <div class=\"background-image margin-top-40\" style=\"background-image: url(http://img.youtube.com/vi/IsDX_LiJT7E/maxresdefault.jpg);\">
        <span class=\"background-overlay\"></span>
        <div class=\"container\">
            <div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <section class=\"bg-primary promo\">
        <div class=\"container\">
            <h2>Create your own epic gaming site with gameforest template</h2>
            <a href=\"http://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730\" target=\"_blank\" class=\"btn btn-white btn-outline\">Purchase Now<i class=\"fa fa-shopping-cart margin-left-10\"></i></a>
        </div>
    </section>
</div>
<!-- /#wrapper -->

<!-- footer -->
<footer>
    <div class=\"container\">
        <div class=\"widget row\">
            <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
                <h4 class=\"title\">About GameForest</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
            </div>

            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <h4 class=\"title\">Categories</h4>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"index.html#\">Playstation 4</a></li>
                            <li><a href=\"index.html#\">XBOX ONE</a></li>
                            <li><a href=\"index.html#\">PC</a></li>
                            <li><a href=\"index.html#\">PS3</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"index.html#\">Gaming</a></li>
                            <li><a href=\"index.html#\">Portfolio</a></li>
                            <li><a href=\"index.html#\">Videos</a></li>
                            <li><a href=\"index.html#\">Reviews</a></li>
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

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <ul class=\"list-inline\">
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
            </ul>
            &copy; 2016 Gameforest. All rights reserved.
        </div>
    </div>
</footer>
<!-- /.footer -->

<div id=\"signin\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h3 class=\"modal-title\"><i class=\"fa fa-user\"></i> Sign In to Gameforest</h3>
            </div>
            <div class=\"modal-body\">
                <a class=\"btn btn-block btn-social btn-facebook\"><i class=\"fa fa-facebook\"></i> Connect with Facebook</a>
                <div class=\"separator\"><span>or</span></div>
                <form>
                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-user\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\">
                    </div>
                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-lock\"></i>
                        <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-block\">Sign In</button>

                    <div class=\"form-actions\">
                        <div class=\"checkbox\">
                            <input type=\"checkbox\" id=\"checkbox\">
                            <label for=\"checkbox\">Remember me</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer text-left\">
                Don't have Gameforest account? <a href=\"register.html\">Sign Up Now</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Javascript -->
<script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/js/core.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script>
    (function(\$) {
        \"use strict\";
        var owl = \$(\".owl-carousel\");

        owl.owlCarousel({
            items : 4, //4 items above 1000px browser width
            itemsDesktop : [1000,3], //3 items between 1000px and 0
            itemsTablet: [600,1], //1 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });

        \$(\".next\").click(function(){
            owl.trigger('owl.next');
            return false;
        })
        \$(\".prev\").click(function(){
            owl.trigger('owl.prev');
            return false;
        })
    })(jQuery);
</script>
</body>
</html>";
        
        $__internal_6943afce3ad62aff6614822543f113ad572295bd7be8fb2a0bf9789d7c96f808->leave($__internal_6943afce3ad62aff6614822543f113ad572295bd7be8fb2a0bf9789d7c96f808_prof);

        
        $__internal_111048e490bf4f61e3d6b881610af532bfc96ce070e8415acfe848bf8bdb9af1->leave($__internal_111048e490bf4f61e3d6b881610af532bfc96ce070e8415acfe848bf8bdb9af1_prof);

    }

    // line 57
    public function block_head($context, array $blocks = array())
    {
        $__internal_a184c3480e58ec534886dfd1ac673391ab80b65e351dad27fa025cc06cc69b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a184c3480e58ec534886dfd1ac673391ab80b65e351dad27fa025cc06cc69b53->enter($__internal_a184c3480e58ec534886dfd1ac673391ab80b65e351dad27fa025cc06cc69b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eaf11d4c589f20b54bdb3f38d5754b22477e71c1a8ff462b9fd78fb0002e90a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf11d4c589f20b54bdb3f38d5754b22477e71c1a8ff462b9fd78fb0002e90a1->enter($__internal_eaf11d4c589f20b54bdb3f38d5754b22477e71c1a8ff462b9fd78fb0002e90a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 58
        echo "        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 63
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 64
        $this->displayBlock('style', $context, $blocks);
        // line 80
        echo "
    ";
        
        $__internal_eaf11d4c589f20b54bdb3f38d5754b22477e71c1a8ff462b9fd78fb0002e90a1->leave($__internal_eaf11d4c589f20b54bdb3f38d5754b22477e71c1a8ff462b9fd78fb0002e90a1_prof);

        
        $__internal_a184c3480e58ec534886dfd1ac673391ab80b65e351dad27fa025cc06cc69b53->leave($__internal_a184c3480e58ec534886dfd1ac673391ab80b65e351dad27fa025cc06cc69b53_prof);

    }

    // line 63
    public function block_title($context, array $blocks = array())
    {
        $__internal_7de5b96158d69aa18313a5d775c13cdfa5ad04548cacc1502065b1c86d02f3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de5b96158d69aa18313a5d775c13cdfa5ad04548cacc1502065b1c86d02f3b2->enter($__internal_7de5b96158d69aa18313a5d775c13cdfa5ad04548cacc1502065b1c86d02f3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_246087be8151a5e709ffded77590d9b4320d81498edb5588ecdb0e369e1abe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246087be8151a5e709ffded77590d9b4320d81498edb5588ecdb0e369e1abe0d->enter($__internal_246087be8151a5e709ffded77590d9b4320d81498edb5588ecdb0e369e1abe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "game injection ";
        
        $__internal_246087be8151a5e709ffded77590d9b4320d81498edb5588ecdb0e369e1abe0d->leave($__internal_246087be8151a5e709ffded77590d9b4320d81498edb5588ecdb0e369e1abe0d_prof);

        
        $__internal_7de5b96158d69aa18313a5d775c13cdfa5ad04548cacc1502065b1c86d02f3b2->leave($__internal_7de5b96158d69aa18313a5d775c13cdfa5ad04548cacc1502065b1c86d02f3b2_prof);

    }

    // line 64
    public function block_style($context, array $blocks = array())
    {
        $__internal_b3ecc46a9ef87edff972e41d95066c622f12f094c406222032d8bb63fa0bd152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ecc46a9ef87edff972e41d95066c622f12f094c406222032d8bb63fa0bd152->enter($__internal_b3ecc46a9ef87edff972e41d95066c622f12f094c406222032d8bb63fa0bd152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_e7932e803905fa1322d83db28d0f0582902ea2fc38a80466d9c0e709ac965230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7932e803905fa1322d83db28d0f0582902ea2fc38a80466d9c0e709ac965230->enter($__internal_e7932e803905fa1322d83db28d0f0582902ea2fc38a80466d9c0e709ac965230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 65
        echo "            <!-- THEME CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" />
            <!-- CORE CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <link rel='stylesheet' type='text/css'  href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900\" />
            <!-- PLUGINS -->

            <link rel=\"stylesheet\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" />
            <!-- ICON -->
            <link rel=\"shortcut icon\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e7932e803905fa1322d83db28d0f0582902ea2fc38a80466d9c0e709ac965230->leave($__internal_e7932e803905fa1322d83db28d0f0582902ea2fc38a80466d9c0e709ac965230_prof);

        
        $__internal_b3ecc46a9ef87edff972e41d95066c622f12f094c406222032d8bb63fa0bd152->leave($__internal_b3ecc46a9ef87edff972e41d95066c622f12f094c406222032d8bb63fa0bd152_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  964 => 78,  959 => 76,  955 => 75,  951 => 74,  944 => 70,  940 => 69,  935 => 67,  931 => 66,  928 => 65,  919 => 64,  901 => 63,  890 => 80,  888 => 64,  884 => 63,  877 => 58,  868 => 57,  833 => 714,  829 => 713,  825 => 712,  821 => 711,  692 => 585,  678 => 574,  664 => 563,  650 => 552,  636 => 541,  622 => 530,  608 => 519,  572 => 486,  552 => 469,  532 => 452,  512 => 435,  492 => 418,  472 => 401,  436 => 368,  422 => 357,  408 => 346,  383 => 323,  362 => 305,  357 => 303,  353 => 302,  349 => 301,  345 => 300,  336 => 298,  333 => 297,  323 => 292,  320 => 291,  318 => 290,  251 => 226,  238 => 216,  169 => 150,  156 => 140,  143 => 130,  130 => 120,  108 => 101,  87 => 82,  85 => 57,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/EloBoosted/GameInjection/Resources/views/layout.html.twig #}
<html>
<head>
    <style>
        body {
            font-family: \"Lato\", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s
        }

        .sidenav a:hover, .offcanvas a:focus{
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            bottom: 50px;
            right: 25px;
            font-size: 25px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
    <script>
        function openNav() {
            document.getElementById(\"mySidenav\").style.width = \"285px\";
        }

        function closeNav() {
            document.getElementById(\"mySidenav\").style.width = \"0\";
        }
    </script>
    {% block head %}
        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}game injection {% endblock %}</title>
        {% block style %}
            <!-- THEME CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/css/custom.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/css/theme.min.css') }}\" />
            <!-- CORE CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/plugins/bootstrap/css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/plugins/font-awesome/css/font-awesome.min.css') }}\" />
            <link rel='stylesheet' type='text/css'  href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900\" />
            <!-- PLUGINS -->

            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/plugins/summernote/summernote.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/plugins/animate/animate.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('FOassets/plugins/owl-carousel/owl.carousel.css') }}\" />
            <!-- ICON -->
            <link rel=\"shortcut icon\" href=\"{{ asset('FOassets/img/favicon.ico') }}\" />
        {% endblock %}

    {% endblock %}

</head>
<body class=\"fixed-header\">



<header>

    <div class=\"container\">

        <div id=\"mySidenav\" class=\"sidenav\">

            <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">Close</a>
            <a href=\"#\">About</a>
            <a href=\"#\">Services</a>
            <a href=\"#\">Clients</a>
            <a href=\"#\">Contact</a>
        </div>
        <span class=\"bar hide\"></span>
        <a href=\"index.html\" class=\"logo\"><img src=\"{{ asset('FOassets/img/logo.png') }}\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"dropdown\">
                        <a href=\"index.html#\" class=\"dropdown-toggle\">Home</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"home-magazine.html\">Home - Magazine</a></li>
                            <li><a href=\"home-magazine-2.html\">Home - Magazine 2</a></li>
                            <li><a href=\"home-magazine-3.html\">Home - Magazine 3</a></li>
                            <li><a href=\"index.html\">Home - Games</a></li>
                            <li><a href=\"home-videos.html\">Home - Videos</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"games.html\">Games</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu category\">
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"{{ asset('FOassets/img/game/menu-1.jpg') }}\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-warning\">PC</span>
                                        <h3>Assassin's Creed Syndicate</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"{{ asset('FOassets/img/game/menu-2.jpg') }}\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-primary\">PS4</span>
                                        <h3>Last of Us Remastered</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"{{ asset('FOassets/img/game/menu-3.jpg') }}\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-success\">Xbox</span>
                                        <h3>Max Payne 3</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"{{ asset('FOassets/img/game/menu-4.jpg') }}\" alt=\"\">
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
                        <a href=\"index.html#\" class=\"dropdown-toggle\">Blog</a>
                        <ul class=\"dropdown-menu default\">
                            <li class=\"dropdown-submenu\">
                                <a href=\"blog-large.html\"><i class=\"fa fa-align-justify\"></i> Blog Large</a>
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
                        <a href=\"index.html#\">Pages</a>
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
                                    <li><a href=\"{{ path('showAllPosts') }}\">Forums</a></li>
                                    <li><a href=\"fullwidth.html\">Full Width</a></li>
                                    <li><a href=\"blank-page.html\">Blank Page</a></li>
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"index.html#\">Elements</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url({{ asset('FOassets/img/content/menu.png') }});\">
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Typography</li>
                                    <li><a href=\"elements-typography.html\"><i class=\"fa fa-text-height\"></i> General Typography</a></li>
                                    <li><a href=\"elements-blockquote.html\"><i class=\"fa fa-quote-left\"></i> Blockquote</a></li>
                                    <li><a href=\"elements-helpers.html\"><i class=\"fa fa-square-o\"></i> Helper Classes</a></li>
                                    <li><a href=\"elements-testimonials.html\"><i class=\"fa fa-bullhorn\"></i> Testimonials</a></li>
                                    <li><a href=\"elements-grids.html\"><i class=\"fa fa-th-large\"></i> Grid Layouts</a></li>
                                    <li><a href=\"elements-alerts.html\"><i class=\"fa fa-bell-o\"></i> Alert & Messages</a></li>
                                    <li><a href=\"elements-labels.html\"><i class=\"fa fa-bookmark-o\"></i> Labels & Badges</a></li>
                                    <li><a href=\"elements-media.html\"><i class=\"fa fa-image\"></i> Audio, Videos & Images</a></li>
                                    <li><a href=\"elements-pagers.html\"><i class=\"fa fa-ellipsis-h\"></i> Pagination & Pagers</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Button & Icons</li>
                                    <li><a href=\"elements-buttons.html\"><i class=\"fa fa-flash\"></i> General Buttons</a></li>
                                    <li><a href=\"elements-social-buttons.html\"><i class=\"fa fa-thumbs-o-up\"></i> Social Buttons</a></li>
                                    <li><a href=\"elements-glyphicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> Glyphicons</a></li>
                                    <li><a href=\"elements-fontawesome.html\"><i class=\"fa fa-chevron-circle-right\"></i> FontAwesome</a></li>
                                    <li><a href=\"elements-ionicons.html\"><i class=\"fa fa-chevron-circle-right\"></i> IonIcons</a></li>
                                    <li class=\"dropdown-header\">Components</li>
                                    <li><a href=\"elements-media-objects.html\"><i class=\"fa fa-align-justify\"></i> Media Objects</a></li>
                                    <li><a href=\"elements-page-headers.html\"><i class=\"fa fa-align-justify\"></i> Page headers</a></li>
                                    <li><a href=\"elements-wells.html\"><i class=\"fa fa-align-justify\"></i> Wells</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Default Elements</li>
                                    <li><a href=\"elements-widgets.html\"><i class=\"fa fa-th\"></i> Widgets</a></li>
                                    <li><a href=\"elements-sections.html\"><i class=\"fa fa-th\"></i> Sections</a></li>
                                    <li><a href=\"elements-thumbnails.html\"><i class=\"fa fa-file-o\"></i> Thumbnails</a></li>
                                    <li><a href=\"elements-cards.html\"><i class=\"fa fa-sticky-note-o\"></i> Cards</a></li>
                                    <li><a href=\"elements-tabs.html\"><i class=\"fa fa-external-link\"></i> Accordion & Tabs</a></li>
                                    <li><a href=\"elements-timeline.html\"><i class=\"fa fa-th-large\"></i> Timeline</a></li>
                                    <li><a href=\"elements-tables.html\"><i class=\"fa fa-th\"></i> Tables</a></li>
                                    <li><a href=\"elements-progress.html\"><i class=\"fa fa-arrows-h\"></i> Progress Bars</a></li>
                                    <li><a href=\"elements-panels.html\"><i class=\"fa fa-th\"></i> Panels</a></li>
                                </ul>
                            </li>
                            <li class=\"col-md-3\">
                                <ul>
                                    <li class=\"dropdown-header\">Forms & Info</li>
                                    <li><a href=\"elements-forms.html\"><i class=\"fa fa-align-justify\"></i> Form Elements</a></li>
                                    <li><a href=\"elements-form-layouts.html\"><i class=\"fa fa-align-justify\"></i> Form Layouts</a></li>
                                    <li><a href=\"elements-modals.html\"><i class=\"fa fa-external-link\"></i> Modals</a></li>
                                    <li><a href=\"elements-carousel.html\"><i class=\"fa fa-arrows\"></i> Carousel Examples</a></li>
                                    <li><a href=\"elements-charts.html\"><i class=\"fa fa-bar-chart-o\"></i> Charts & Countdowns</a></li>
                                    <li><a href=\"elements-google-maps.html\"><i class=\"fa fa-map-marker\"></i> Google Maps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=\"videos.html\">Videos</a></li>
                    <li><a href=\"gallery.html\">Gallery</a></li>
                    <li><a href=\"contact.html\">Contact</a></li>
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
        <span style=\"font-size:15px;color:White;cursor:pointer\" onclick=\"openNav()\">&#9776; Open Chat</span>
        </div>
    </div>
</header>
<!-- /header -->

<div class=\"modal-search\">
    <div class=\"container\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
        <i class=\"fa fa-times close\"></i>
    </div>
</div><!-- /.modal-search -->

<!-- wrapper -->
<div id=\"wrapper\">
    <div id=\"full-carousel\" class=\"ken-burns carousel slide full-carousel carousel-fade\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#full-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#full-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#full-carousel\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item active inactiveUntilOnLoad\">
                <img src=\"{{ asset('FOassets/img/slideshow/1.jpg') }}\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 bounceInDown\">The Witcher 3: Wild Hunt</h1>
                        <p data-animation=\"animated animate7 fadeInUp\">The world is in chaos. The air is thick with tension and the smoke of burnt villages.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"{{ asset('FOassets/img/slideshow/2.jpg') }}\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 fadeInDown\">The Last of Us: Remastered</h1>
                        <p data-animation=\"animated animate7 fadeIn\">Survive an apocalypse on Earth in The Last of Us, a PlayStation 4-exclusive title by Naughty Dog.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <div class=\"item\">
                <img src=\"{{ asset('FOassets/img/slideshow/3.jpg') }}\" alt=\"\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1 data-animation=\"animated animate1 fadeIn\">Star Wars: Battlefront 3</h1>
                        <p data-animation=\"animated animate7 fadeIn\">Galactic forces clash in this reboot of Star Wars Battlefront, the blockbuster shooter.</p>
                        <a href=\"index.html#signin\" data-toggle=\"modal\" class=\"btn btn-primary btn-lg btn-rounded\" data-animation=\"animated animate10 fadeIn\">Became a member now</a>
                    </div>
                </div>
            </div>

            <a class=\"left carousel-control\" href=\"index.html#full-carousel\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"index.html#full-carousel\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            </a>
        </div>
    </div>

    <section class=\"bg-grey-50 border-bottom-1 border-grey-200 relative\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"title outline\">
                        <h4><i class=\"fa fa-heart\"></i> Recent Games</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/1.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-warning\">PC</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Assassin's Creed Syndicate</a></h3>
                            <ul>
                                <li>March 11, 2016</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras felis mauris, accumsan.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/2.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-success\">Xbox One</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>8</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Guardians of the Galaxy 2</a></h3>
                            <ul>
                                <li>March 15, 2016</li>
                            </ul>
                            <p>Donec maximus sodales tellus a molestie. In eu orci vitae ligula iaculis sollicitudin.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/3.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-primary\">PS4</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>12</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></h3>
                            <ul>
                                <li>Febr 21, 2016</li>
                            </ul>
                            <p>Proin at efficitur purus. Suspendisse eu erat ante. Ut lectus arcu, mollis id eleifend et.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/4.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-danger\">Steam</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>10</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Grand Theft Auto 5</a></h3>
                            <ul>
                                <li>Apr 21, 2016</li>
                            </ul>
                            <p>Suspendisse potenti. Ut pretium, erat a cursus bibendum, nisi lectus egestas.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/5.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-primary\">PS4</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>4</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Deadpool The Game</a></h3>
                            <ul>
                                <li>Unknown Release Date</li>
                            </ul>
                            <p>Nullam eu tellus feugiat, lobortis ante a, pulvinar magna.</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"card card-hover\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/blog/md/6.jpg') }}\" alt=\"\">
                            <div class=\"category\"><span class=\"label label-success\">Xbox One</span></div>
                            <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-heart-o\"></i> <span>16</span></a></div>
                        </div>
                        <div class=\"caption\">
                            <h3 class=\"card-title\"><a href=\"games-single.html\">Grand Theft Auto One</a></h3>
                            <ul>
                                <li>May 30, 2016</li>
                            </ul>
                            <p> Pellentesque id justo molestie, sodales leo nec, molestie nulla.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"text-center\"><a href=\"games.html\" class=\"btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20\">Show More <i class=\"fa fa-angle-right\"></i></a></div>
        </div>
    </section>

    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2\">
                    <div class=\"title outline\">
                        <h4><i class=\"fa fa-star\"></i> Recent Reviews</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu leo lobortis, aliquam dui.</p>
                    </div>
                </div>
            </div>
            <div class=\"row slider\">
                <div class=\"owl-carousel\">
                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/1.jpg') }}\" alt=\"\">
                            <span class=\"label label-success\">7.2</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Uncharted 4</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/2.jpg') }}\" alt=\"\">
                            <span class=\"label label-warning\">5.4</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Hitman: Absolution</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/3.jpg') }}\" alt=\"\">
                            <span class=\"label label-danger\">2.1</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Last of Us 2</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/4.jpg') }}\" alt=\"\">
                            <span class=\"label label-success\">6.9</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Bioshock: Infinite</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/5.jpg') }}\" alt=\"\">
                            <span class=\"label label-success\">7.2</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Grand Theft Auto 5</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/6.jpg') }}\" alt=\"\">
                            <span class=\"label label-warning\">5.4</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">DayZ</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class=\"card card-list\">
                        <div class=\"card-img\">
                            <img src=\"{{ asset('FOassets/img/review/7.jpg') }}\" alt=\"\">
                            <span class=\"label label-danger\">2.1</span>
                        </div>
                        <div class=\"caption\">
                            <h4 class=\"card-title\"><a href=\"reviews-single.html\">Liberty City</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <a href=\"index.html#\" class=\"prev\"><i class=\"fa fa-angle-left\"></i></a>
                <a href=\"index.html#\" class=\"next\"><i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </section>

    <div class=\"background-image margin-top-40\" style=\"background-image: url(http://img.youtube.com/vi/IsDX_LiJT7E/maxresdefault.jpg);\">
        <span class=\"background-overlay\"></span>
        <div class=\"container\">
            <div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IsDX_LiJT7E?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <section class=\"bg-primary promo\">
        <div class=\"container\">
            <h2>Create your own epic gaming site with gameforest template</h2>
            <a href=\"http://themeforest.net/item/gameforest-responsive-gaming-html-theme/5007730\" target=\"_blank\" class=\"btn btn-white btn-outline\">Purchase Now<i class=\"fa fa-shopping-cart margin-left-10\"></i></a>
        </div>
    </section>
</div>
<!-- /#wrapper -->

<!-- footer -->
<footer>
    <div class=\"container\">
        <div class=\"widget row\">
            <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12\">
                <h4 class=\"title\">About GameForest</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
            </div>

            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <h4 class=\"title\">Categories</h4>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"index.html#\">Playstation 4</a></li>
                            <li><a href=\"index.html#\">XBOX ONE</a></li>
                            <li><a href=\"index.html#\">PC</a></li>
                            <li><a href=\"index.html#\">PS3</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"index.html#\">Gaming</a></li>
                            <li><a href=\"index.html#\">Portfolio</a></li>
                            <li><a href=\"index.html#\">Videos</a></li>
                            <li><a href=\"index.html#\">Reviews</a></li>
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

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <ul class=\"list-inline\">
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"index.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
            </ul>
            &copy; 2016 Gameforest. All rights reserved.
        </div>
    </div>
</footer>
<!-- /.footer -->

<div id=\"signin\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h3 class=\"modal-title\"><i class=\"fa fa-user\"></i> Sign In to Gameforest</h3>
            </div>
            <div class=\"modal-body\">
                <a class=\"btn btn-block btn-social btn-facebook\"><i class=\"fa fa-facebook\"></i> Connect with Facebook</a>
                <div class=\"separator\"><span>or</span></div>
                <form>
                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-user\"></i>
                        <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Username\">
                    </div>
                    <div class=\"form-group input-icon-left\">
                        <i class=\"fa fa-lock\"></i>
                        <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\">
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-block\">Sign In</button>

                    <div class=\"form-actions\">
                        <div class=\"checkbox\">
                            <input type=\"checkbox\" id=\"checkbox\">
                            <label for=\"checkbox\">Remember me</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer text-left\">
                Don't have Gameforest account? <a href=\"register.html\">Sign Up Now</a>
            </div>
        </div>
    </div>
</div><!-- /.modal -->

<!-- Javascript -->
<script src=\"{{ asset('FOassets/plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
<script src=\"{{ asset('FOassets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('FOassets/js/core.min.js') }}\"></script>
<script src=\"{{ asset('FOassets/plugins/owl-carousel/owl.carousel.min.js') }}\"></script>
<script>
    (function(\$) {
        \"use strict\";
        var owl = \$(\".owl-carousel\");

        owl.owlCarousel({
            items : 4, //4 items above 1000px browser width
            itemsDesktop : [1000,3], //3 items between 1000px and 0
            itemsTablet: [600,1], //1 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });

        \$(\".next\").click(function(){
            owl.trigger('owl.next');
            return false;
        })
        \$(\".prev\").click(function(){
            owl.trigger('owl.prev');
            return false;
        })
    })(jQuery);
</script>
</body>
</html>", "@EloboostedFrontoffice/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
