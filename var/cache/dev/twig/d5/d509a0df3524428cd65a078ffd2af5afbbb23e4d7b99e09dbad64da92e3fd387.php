<?php

/* EloboostedFrontofficeBundle:Default:Layout.html.twig */
class __TwigTemplate_9089ac893da58a32d638881209f4b8227b9c3eabf8172a77dcb6bb62e38e8b96 extends Twig_Template
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
        $__internal_cabc72e525ec5d4966de3c4e0f5719f32447f3befd117bab69100ba36d24d743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabc72e525ec5d4966de3c4e0f5719f32447f3befd117bab69100ba36d24d743->enter($__internal_cabc72e525ec5d4966de3c4e0f5719f32447f3befd117bab69100ba36d24d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Default:Layout.html.twig"));

        $__internal_d36edad658c0cbd096e435835ee292707324b9ed08f0b13d94eadf14b80e8435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36edad658c0cbd096e435835ee292707324b9ed08f0b13d94eadf14b80e8435->enter($__internal_d36edad658c0cbd096e435835ee292707324b9ed08f0b13d94eadf14b80e8435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Default:Layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>

<body class=\"fixed-header\">
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 344
        echo "</body>
</html>";
        
        $__internal_cabc72e525ec5d4966de3c4e0f5719f32447f3befd117bab69100ba36d24d743->leave($__internal_cabc72e525ec5d4966de3c4e0f5719f32447f3befd117bab69100ba36d24d743_prof);

        
        $__internal_d36edad658c0cbd096e435835ee292707324b9ed08f0b13d94eadf14b80e8435->leave($__internal_d36edad658c0cbd096e435835ee292707324b9ed08f0b13d94eadf14b80e8435_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_9934fc85322f088605ed21e72f7cef7354e674d7b2f2d4567db879e5c6556953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9934fc85322f088605ed21e72f7cef7354e674d7b2f2d4567db879e5c6556953->enter($__internal_9934fc85322f088605ed21e72f7cef7354e674d7b2f2d4567db879e5c6556953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e400ae34d551bb2c92e1ba3b7943a6965b022a50a6d6e2a80b5b07b5f9f7d328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e400ae34d551bb2c92e1ba3b7943a6965b022a50a6d6e2a80b5b07b5f9f7d328->enter($__internal_e400ae34d551bb2c92e1ba3b7943a6965b022a50a6d6e2a80b5b07b5f9f7d328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        <!-- META -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title> EloBoosted-GameHub </title>

        <!-- FAVICON -->
        <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">

        <!-- CORE CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_e400ae34d551bb2c92e1ba3b7943a6965b022a50a6d6e2a80b5b07b5f9f7d328->leave($__internal_e400ae34d551bb2c92e1ba3b7943a6965b022a50a6d6e2a80b5b07b5f9f7d328_prof);

        
        $__internal_9934fc85322f088605ed21e72f7cef7354e674d7b2f2d4567db879e5c6556953->leave($__internal_9934fc85322f088605ed21e72f7cef7354e674d7b2f2d4567db879e5c6556953_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5900fc9c80c1e668a0b86fe5d66509c9803029b49d21d34fb8cedeb242c85df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5900fc9c80c1e668a0b86fe5d66509c9803029b49d21d34fb8cedeb242c85df9->enter($__internal_5900fc9c80c1e668a0b86fe5d66509c9803029b49d21d34fb8cedeb242c85df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_804331382f3fbcb8f83b1a763f7d2e8ca6e518492a4290e68ecb69d8cdfc446b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804331382f3fbcb8f83b1a763f7d2e8ca6e518492a4290e68ecb69d8cdfc446b->enter($__internal_804331382f3fbcb8f83b1a763f7d2e8ca6e518492a4290e68ecb69d8cdfc446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    <header>
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 253
        echo "    </header>
    <!-- /header -->

    <div class=\"modal-search\">
        ";
        // line 257
        $this->displayBlock('search', $context, $blocks);
        // line 263
        echo "    </div><!-- /.modal-search -->

          <!-- wrapper -->
    <div id=\"wrapper\">
        ";
        // line 267
        $this->displayBlock('main', $context, $blocks);
        // line 277
        echo "    </div>
    <!-- /#wrapper -->

    <!-- footer -->

    <footer>
        ";
        // line 283
        $this->displayBlock('footer', $context, $blocks);
        // line 336
        echo "    </footer>
    <!-- /.footer -->

    <!-- Javascript -->
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_804331382f3fbcb8f83b1a763f7d2e8ca6e518492a4290e68ecb69d8cdfc446b->leave($__internal_804331382f3fbcb8f83b1a763f7d2e8ca6e518492a4290e68ecb69d8cdfc446b_prof);

        
        $__internal_5900fc9c80c1e668a0b86fe5d66509c9803029b49d21d34fb8cedeb242c85df9->leave($__internal_5900fc9c80c1e668a0b86fe5d66509c9803029b49d21d34fb8cedeb242c85df9_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_264c239f907300541dc51ffb377ce19b5f993cda713ea200736ed34409791ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_264c239f907300541dc51ffb377ce19b5f993cda713ea200736ed34409791ec6->enter($__internal_264c239f907300541dc51ffb377ce19b5f993cda713ea200736ed34409791ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_00fbe68b0867bb1952dc570651f73a04ed6234d9867ace60c908d28b2350bbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fbe68b0867bb1952dc570651f73a04ed6234d9867ace60c908d28b2350bbe4->enter($__internal_00fbe68b0867bb1952dc570651f73a04ed6234d9867ace60c908d28b2350bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 38
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
                                <a href=\"#\">Games</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu category\">
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/menu-1.jpg"), "html", null, true);
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
        // line 67
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
        // line 77
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
        // line 87
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
                                <a href=\"blank-page.html#\" class=\"dropdown-toggle\">Blog</a>
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
                            </li>
                            <li class=\"dropdown mega-dropdown\">
                                <a href=\"blank-page.html#\">Elements</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image:url('";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/content/menu.png"), "html", null, true);
        echo "')\">
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
                    <div class=\"nav-profile dropdown\">
                        <a href=\"blank-page.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user/avatar.jpg"), "html", null, true);
        echo "\" alt=\"\"> <span>Nathan Drake</span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                        </ul>
                    </div>
                    <div class=\"nav-dropdown dropdown\">
                        <a href=\"blank-page.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                            <li><a href=\"blank-page.html#\">Alien Isolation</a></li>
                            <li><a href=\"blank-page.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                            <li><a href=\"blank-page.html#\">Last of Us</a></li>
                            <li><a href=\"blank-page.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                            <li><a href=\"blank-page.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                            <li class=\"dropdown-footer\"><a href=\"blank-page.html#\">View all games</a></li>
                        </ul>
                    </div>
                    <a href=\"blank-page.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>
                </div>
            </div>
        ";
        
        $__internal_00fbe68b0867bb1952dc570651f73a04ed6234d9867ace60c908d28b2350bbe4->leave($__internal_00fbe68b0867bb1952dc570651f73a04ed6234d9867ace60c908d28b2350bbe4_prof);

        
        $__internal_264c239f907300541dc51ffb377ce19b5f993cda713ea200736ed34409791ec6->leave($__internal_264c239f907300541dc51ffb377ce19b5f993cda713ea200736ed34409791ec6_prof);

    }

    // line 257
    public function block_search($context, array $blocks = array())
    {
        $__internal_00cfc90ad77567afeeb819f4acef5c127f9ca4dfce7a6ff888242857bc6fd7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cfc90ad77567afeeb819f4acef5c127f9ca4dfce7a6ff888242857bc6fd7aa->enter($__internal_00cfc90ad77567afeeb819f4acef5c127f9ca4dfce7a6ff888242857bc6fd7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_de6bd0d541e630dba58322b92255fb8ce82ec3ab8b212e67ad7fc28355d8a038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6bd0d541e630dba58322b92255fb8ce82ec3ab8b212e67ad7fc28355d8a038->enter($__internal_de6bd0d541e630dba58322b92255fb8ce82ec3ab8b212e67ad7fc28355d8a038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 258
        echo "            <div class=\"container\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
                <i class=\"fa fa-times close\"></i>
            </div>
        ";
        
        $__internal_de6bd0d541e630dba58322b92255fb8ce82ec3ab8b212e67ad7fc28355d8a038->leave($__internal_de6bd0d541e630dba58322b92255fb8ce82ec3ab8b212e67ad7fc28355d8a038_prof);

        
        $__internal_00cfc90ad77567afeeb819f4acef5c127f9ca4dfce7a6ff888242857bc6fd7aa->leave($__internal_00cfc90ad77567afeeb819f4acef5c127f9ca4dfce7a6ff888242857bc6fd7aa_prof);

    }

    // line 267
    public function block_main($context, array $blocks = array())
    {
        $__internal_756cd1e9e820a9b60c2a75c2ce60f2423678136e5b28fab1351e99f0f8deb583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756cd1e9e820a9b60c2a75c2ce60f2423678136e5b28fab1351e99f0f8deb583->enter($__internal_756cd1e9e820a9b60c2a75c2ce60f2423678136e5b28fab1351e99f0f8deb583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_916d867014bdb62f64ca3c5f1712826fe4c68c5e1adcc9532b88a1db9aa781eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916d867014bdb62f64ca3c5f1712826fe4c68c5e1adcc9532b88a1db9aa781eb->enter($__internal_916d867014bdb62f64ca3c5f1712826fe4c68c5e1adcc9532b88a1db9aa781eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 268
        echo "            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_916d867014bdb62f64ca3c5f1712826fe4c68c5e1adcc9532b88a1db9aa781eb->leave($__internal_916d867014bdb62f64ca3c5f1712826fe4c68c5e1adcc9532b88a1db9aa781eb_prof);

        
        $__internal_756cd1e9e820a9b60c2a75c2ce60f2423678136e5b28fab1351e99f0f8deb583->leave($__internal_756cd1e9e820a9b60c2a75c2ce60f2423678136e5b28fab1351e99f0f8deb583_prof);

    }

    // line 283
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2b8d5065c5ed0676a3cfb1c596ed388f12c192078deed949a38a5b8c8226f471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8d5065c5ed0676a3cfb1c596ed388f12c192078deed949a38a5b8c8226f471->enter($__internal_2b8d5065c5ed0676a3cfb1c596ed388f12c192078deed949a38a5b8c8226f471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8f9cfe157da86cb1b21969e3debcb125eab68542d74b32f91d248816e1440fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9cfe157da86cb1b21969e3debcb125eab68542d74b32f91d248816e1440fef->enter($__internal_8f9cfe157da86cb1b21969e3debcb125eab68542d74b32f91d248816e1440fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 284
        echo "            <div class=\"container\">
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
                                    <li><a href=\"blank-page.html#\">Playstation 4</a></li>
                                    <li><a href=\"blank-page.html#\">XBOX ONE</a></li>
                                    <li><a href=\"blank-page.html#\">PC</a></li>
                                    <li><a href=\"blank-page.html#\">PS3</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <ul class=\"nav\">
                                    <li><a href=\"blank-page.html#\">Gaming</a></li>
                                    <li><a href=\"blank-page.html#\">Portfolio</a></li>
                                    <li><a href=\"blank-page.html#\">Videos</a></li>
                                    <li><a href=\"blank-page.html#\">Reviews</a></li>
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
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
                    </ul>
                    &copy; 2016 Gameforest. All rights reserved.
                </div>
            </div>
        ";
        
        $__internal_8f9cfe157da86cb1b21969e3debcb125eab68542d74b32f91d248816e1440fef->leave($__internal_8f9cfe157da86cb1b21969e3debcb125eab68542d74b32f91d248816e1440fef_prof);

        
        $__internal_2b8d5065c5ed0676a3cfb1c596ed388f12c192078deed949a38a5b8c8226f471->leave($__internal_2b8d5065c5ed0676a3cfb1c596ed388f12c192078deed949a38a5b8c8226f471_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  500 => 284,  491 => 283,  473 => 268,  464 => 267,  450 => 258,  441 => 257,  405 => 227,  338 => 163,  259 => 87,  246 => 77,  233 => 67,  220 => 57,  198 => 38,  194 => 36,  185 => 35,  173 => 342,  169 => 341,  165 => 340,  159 => 336,  157 => 283,  149 => 277,  147 => 267,  141 => 263,  139 => 257,  133 => 253,  131 => 35,  128 => 34,  119 => 33,  107 => 28,  103 => 27,  97 => 24,  91 => 21,  87 => 20,  83 => 19,  77 => 16,  65 => 6,  56 => 5,  45 => 344,  43 => 33,  38 => 30,  36 => 5,  31 => 2,);
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
        <link href='{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700') }}' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"{{ asset('plugins/animate/animate.min.css') }}\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"{{ asset('css/theme.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body class=\"fixed-header\">
{% block body %}
    <header>
        {% block header %}
            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"index.html\" class=\"logo\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"\"></a>
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
                                <a href=\"#\">Games</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu category\">
                                    <li class=\"col-md-3\">
                                        <a href=\"games-single.html\">
                                            <img src=\"{{ asset('img/game/menu-1.jpg') }}\" alt=\"\">
                                            <div class=\"caption\">
                                                <span class=\"label label-warning\">PC</span>
                                                <h3>Assassin's Creed Syndicate</h3>
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
                                <a href=\"blank-page.html#\" class=\"dropdown-toggle\">Blog</a>
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
                            </li>
                            <li class=\"dropdown mega-dropdown\">
                                <a href=\"blank-page.html#\">Elements</a>
                                <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image:url('{{ asset('img/content/menu.png') }}')\">
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
                    <div class=\"nav-profile dropdown\">
                        <a href=\"blank-page.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ asset('img/user/avatar.jpg') }}\" alt=\"\"> <span>Nathan Drake</span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                            <li><a href=\"blank-page.html#\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                        </ul>
                    </div>
                    <div class=\"nav-dropdown dropdown\">
                        <a href=\"blank-page.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                            <li><a href=\"blank-page.html#\">Alien Isolation</a></li>
                            <li><a href=\"blank-page.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                            <li><a href=\"blank-page.html#\">Last of Us</a></li>
                            <li><a href=\"blank-page.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                            <li><a href=\"blank-page.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                            <li class=\"dropdown-footer\"><a href=\"blank-page.html#\">View all games</a></li>
                        </ul>
                    </div>
                    <a href=\"blank-page.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>
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

    <footer>
        {% block footer %}
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
                                    <li><a href=\"blank-page.html#\">Playstation 4</a></li>
                                    <li><a href=\"blank-page.html#\">XBOX ONE</a></li>
                                    <li><a href=\"blank-page.html#\">PC</a></li>
                                    <li><a href=\"blank-page.html#\">PS3</a></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <ul class=\"nav\">
                                    <li><a href=\"blank-page.html#\">Gaming</a></li>
                                    <li><a href=\"blank-page.html#\">Portfolio</a></li>
                                    <li><a href=\"blank-page.html#\">Videos</a></li>
                                    <li><a href=\"blank-page.html#\">Reviews</a></li>
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
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"blank-page.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
                    </ul>
                    &copy; 2016 Gameforest. All rights reserved.
                </div>
            </div>
        {% endblock %}
    </footer>
    <!-- /.footer -->

    <!-- Javascript -->
    <script src=\"{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
{% endblock %}
</body>
</html>", "EloboostedFrontofficeBundle:Default:Layout.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/FrontofficeBundle/Resources/views/Default/Layout.html.twig");
    }
}
