<?php

/* @EloboostedFrontoffice/Default/index.html.twig */
class __TwigTemplate_3552ef3338cb190415eec3a3612bf1b578cc9cae390b84723b3e85357d7f889e extends Twig_Template
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
        $__internal_1230a6ef9b238cc8730d2db6cbd106a12514efed908487229389850024cfda8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1230a6ef9b238cc8730d2db6cbd106a12514efed908487229389850024cfda8a->enter($__internal_1230a6ef9b238cc8730d2db6cbd106a12514efed908487229389850024cfda8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/index.html.twig"));

        $__internal_a824ca36970ba35ea0755884f96b431af5da797a2168ad126b7714179ee1bbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a824ca36970ba35ea0755884f96b431af5da797a2168ad126b7714179ee1bbc3->enter($__internal_a824ca36970ba35ea0755884f96b431af5da797a2168ad126b7714179ee1bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/index.html.twig"));

        // line 2
        echo "<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "
</head>
<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 35
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
        // line 54
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
        // line 64
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
        // line 74
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
        // line 84
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
        // line 150
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
        // line 160
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
        // line 223
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 224
            echo "            <div class=\"nav-profile dropdown\">
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
            echo "            <div class=\"nav-profile dropdown\">
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
        echo "        </div>
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
        // line 278
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
        // line 289
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
        // line 300
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
        // line 333
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
        // line 350
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
        // line 367
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
        // line 384
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
        // line 401
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
        // line 418
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
        // line 451
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
        // line 462
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
        // line 473
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
        // line 484
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
        // line 495
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
        // line 506
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
        // line 517
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
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/js/core.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 646
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
        
        $__internal_1230a6ef9b238cc8730d2db6cbd106a12514efed908487229389850024cfda8a->leave($__internal_1230a6ef9b238cc8730d2db6cbd106a12514efed908487229389850024cfda8a_prof);

        
        $__internal_a824ca36970ba35ea0755884f96b431af5da797a2168ad126b7714179ee1bbc3->leave($__internal_a824ca36970ba35ea0755884f96b431af5da797a2168ad126b7714179ee1bbc3_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_90fd9a1b35f716d375e0db0d27f4a510cdc3151ddfa8b348fd6892cf8ea83335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fd9a1b35f716d375e0db0d27f4a510cdc3151ddfa8b348fd6892cf8ea83335->enter($__internal_90fd9a1b35f716d375e0db0d27f4a510cdc3151ddfa8b348fd6892cf8ea83335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3081854159d98257cf309e927d4079493242f02f949990f5a5ac9086fecd40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3081854159d98257cf309e927d4079493242f02f949990f5a5ac9086fecd40d->enter($__internal_c3081854159d98257cf309e927d4079493242f02f949990f5a5ac9086fecd40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('style', $context, $blocks);
        // line 27
        echo "
    ";
        
        $__internal_c3081854159d98257cf309e927d4079493242f02f949990f5a5ac9086fecd40d->leave($__internal_c3081854159d98257cf309e927d4079493242f02f949990f5a5ac9086fecd40d_prof);

        
        $__internal_90fd9a1b35f716d375e0db0d27f4a510cdc3151ddfa8b348fd6892cf8ea83335->leave($__internal_90fd9a1b35f716d375e0db0d27f4a510cdc3151ddfa8b348fd6892cf8ea83335_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_10f60e740a389f8ea148ff11c93e0945579b220623ba70ff8dd3895a49b2b109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f60e740a389f8ea148ff11c93e0945579b220623ba70ff8dd3895a49b2b109->enter($__internal_10f60e740a389f8ea148ff11c93e0945579b220623ba70ff8dd3895a49b2b109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c2e32ed69c244f7d4d7ac94fe97ed867749e01814810d95eda29c94bffba456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2e32ed69c244f7d4d7ac94fe97ed867749e01814810d95eda29c94bffba456->enter($__internal_1c2e32ed69c244f7d4d7ac94fe97ed867749e01814810d95eda29c94bffba456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "game injection ";
        
        $__internal_1c2e32ed69c244f7d4d7ac94fe97ed867749e01814810d95eda29c94bffba456->leave($__internal_1c2e32ed69c244f7d4d7ac94fe97ed867749e01814810d95eda29c94bffba456_prof);

        
        $__internal_10f60e740a389f8ea148ff11c93e0945579b220623ba70ff8dd3895a49b2b109->leave($__internal_10f60e740a389f8ea148ff11c93e0945579b220623ba70ff8dd3895a49b2b109_prof);

    }

    // line 11
    public function block_style($context, array $blocks = array())
    {
        $__internal_46bf6ab8b720e3c9c0ef09727375f8812ba7be10fc525eea9b7fdc498644d249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bf6ab8b720e3c9c0ef09727375f8812ba7be10fc525eea9b7fdc498644d249->enter($__internal_46bf6ab8b720e3c9c0ef09727375f8812ba7be10fc525eea9b7fdc498644d249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_dd13a954398f647aecff69572305de94b24e6dcf9346451c57a67cd346a8d9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13a954398f647aecff69572305de94b24e6dcf9346451c57a67cd346a8d9a0->enter($__internal_dd13a954398f647aecff69572305de94b24e6dcf9346451c57a67cd346a8d9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 12
        echo "            <!-- THEME CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" />
            <!-- CORE CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
            <link rel='stylesheet' type='text/css'  href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900\" />
            <!-- PLUGINS -->

            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/summernote/summernote.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" />
            <!-- ICON -->
            <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_dd13a954398f647aecff69572305de94b24e6dcf9346451c57a67cd346a8d9a0->leave($__internal_dd13a954398f647aecff69572305de94b24e6dcf9346451c57a67cd346a8d9a0_prof);

        
        $__internal_46bf6ab8b720e3c9c0ef09727375f8812ba7be10fc525eea9b7fdc498644d249->leave($__internal_46bf6ab8b720e3c9c0ef09727375f8812ba7be10fc525eea9b7fdc498644d249_prof);

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
        return array (  896 => 25,  891 => 23,  887 => 22,  883 => 21,  876 => 17,  872 => 16,  867 => 14,  863 => 13,  860 => 12,  851 => 11,  833 => 10,  822 => 27,  820 => 11,  816 => 10,  809 => 5,  800 => 4,  765 => 646,  761 => 645,  757 => 644,  753 => 643,  624 => 517,  610 => 506,  596 => 495,  582 => 484,  568 => 473,  554 => 462,  540 => 451,  504 => 418,  484 => 401,  464 => 384,  444 => 367,  424 => 350,  404 => 333,  368 => 300,  354 => 289,  340 => 278,  316 => 256,  295 => 238,  290 => 236,  286 => 235,  282 => 234,  278 => 233,  269 => 231,  266 => 230,  256 => 225,  253 => 224,  251 => 223,  185 => 160,  172 => 150,  103 => 84,  90 => 74,  77 => 64,  64 => 54,  42 => 35,  34 => 29,  32 => 4,  28 => 2,);
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
</html>", "@EloboostedFrontoffice/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
