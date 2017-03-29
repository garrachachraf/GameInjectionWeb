<?php

/* @EloboostedFrontoffice/Default/Layout.html.twig */
class __TwigTemplate_53689635ece094870687415c3e130976d3c080787d90e53392e3d0b559298bf4 extends Twig_Template
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
        $__internal_4a495562a87ddfe8a9760446fe97ae81f48879e7dbfcf61152b4fc9b2614988a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a495562a87ddfe8a9760446fe97ae81f48879e7dbfcf61152b4fc9b2614988a->enter($__internal_4a495562a87ddfe8a9760446fe97ae81f48879e7dbfcf61152b4fc9b2614988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/Layout.html.twig"));

        $__internal_2fa70273b99c30ea598b5ee2cff099316384209ab17202ffb96b24a6fe98e27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa70273b99c30ea598b5ee2cff099316384209ab17202ffb96b24a6fe98e27d->enter($__internal_2fa70273b99c30ea598b5ee2cff099316384209ab17202ffb96b24a6fe98e27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Default/Layout.html.twig"));

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

    ";
        // line 18
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>

<body class=\"fixed-header\">
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 364
        echo "
</body>
</html>";
        
        $__internal_4a495562a87ddfe8a9760446fe97ae81f48879e7dbfcf61152b4fc9b2614988a->leave($__internal_4a495562a87ddfe8a9760446fe97ae81f48879e7dbfcf61152b4fc9b2614988a_prof);

        
        $__internal_2fa70273b99c30ea598b5ee2cff099316384209ab17202ffb96b24a6fe98e27d->leave($__internal_2fa70273b99c30ea598b5ee2cff099316384209ab17202ffb96b24a6fe98e27d_prof);

    }

    // line 18
    public function block_head($context, array $blocks = array())
    {
        $__internal_c885dcef50e5f7ca458f2ca84a344e35f41d6a10d95b393a692b61ca30b263aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c885dcef50e5f7ca458f2ca84a344e35f41d6a10d95b393a692b61ca30b263aa->enter($__internal_c885dcef50e5f7ca458f2ca84a344e35f41d6a10d95b393a692b61ca30b263aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c4fe877a41cffa6993a397292f5e9c44d210598d2c05993b0cd36f78af7d3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4fe877a41cffa6993a397292f5e9c44d210598d2c05993b0cd36f78af7d3d0->enter($__internal_5c4fe877a41cffa6993a397292f5e9c44d210598d2c05993b0cd36f78af7d3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 19
        echo "        <!-- META -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title> EloBoosted-GameHub </title>

        <!-- FAVICON -->
        <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">

        <!-- CORE CSS -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

        <!-- PLUGINS -->
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- THEME CSS -->
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
    ";
        
        $__internal_5c4fe877a41cffa6993a397292f5e9c44d210598d2c05993b0cd36f78af7d3d0->leave($__internal_5c4fe877a41cffa6993a397292f5e9c44d210598d2c05993b0cd36f78af7d3d0_prof);

        
        $__internal_c885dcef50e5f7ca458f2ca84a344e35f41d6a10d95b393a692b61ca30b263aa->leave($__internal_c885dcef50e5f7ca458f2ca84a344e35f41d6a10d95b393a692b61ca30b263aa_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_83179ce8496b7db008438d4724973d087b621ddbe99038899d565428617304bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83179ce8496b7db008438d4724973d087b621ddbe99038899d565428617304bc->enter($__internal_83179ce8496b7db008438d4724973d087b621ddbe99038899d565428617304bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87504c53cf6157b387d0214d3f3055db9c9f608875071fde98c4ffce68e4155a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87504c53cf6157b387d0214d3f3055db9c9f608875071fde98c4ffce68e4155a->enter($__internal_87504c53cf6157b387d0214d3f3055db9c9f608875071fde98c4ffce68e4155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    <header>
        ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 275
        echo "    </header>
    <!-- /header -->

    <div class=\"modal-search\">
        ";
        // line 279
        $this->displayBlock('search', $context, $blocks);
        // line 285
        echo "    </div><!-- /.modal-search -->

          <!-- wrapper -->
    <div id=\"wrapper\">
        ";
        // line 289
        $this->displayBlock('main', $context, $blocks);
        // line 299
        echo "    </div>
    <!-- /#wrapper -->

    <!-- footer -->
";
        // line 303
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_87504c53cf6157b387d0214d3f3055db9c9f608875071fde98c4ffce68e4155a->leave($__internal_87504c53cf6157b387d0214d3f3055db9c9f608875071fde98c4ffce68e4155a_prof);

        
        $__internal_83179ce8496b7db008438d4724973d087b621ddbe99038899d565428617304bc->leave($__internal_83179ce8496b7db008438d4724973d087b621ddbe99038899d565428617304bc_prof);

    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ff82af002db7b445ea127ae667c7fc39cfa811a1f2760527f7266d28a04d52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff82af002db7b445ea127ae667c7fc39cfa811a1f2760527f7266d28a04d52d->enter($__internal_0ff82af002db7b445ea127ae667c7fc39cfa811a1f2760527f7266d28a04d52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c4e5d048efaa1c3b727234112487528856c7309701af5688025a21f86d8cde3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e5d048efaa1c3b727234112487528856c7309701af5688025a21f86d8cde3a->enter($__internal_c4e5d048efaa1c3b727234112487528856c7309701af5688025a21f86d8cde3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 49
        echo "            <div class=\"container\">
                <span class=\"bar hide\"></span>
                <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 51
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
        // line 70
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
        // line 80
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
        // line 90
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
        // line 100
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
        // line 176
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
                    ";
        // line 239
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 240
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                        </div>

                    ";
        } else {
            // line 246
            echo "                        <div class=\"nav-profile dropdown\">
                            <a href=\"";
            // line 247
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 249
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                                <li><a href=\"";
            // line 250
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                                <li><a href=\"";
            // line 251
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                                <li><a href=\"";
            // line 252
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 254
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
        // line 272
        echo "                </div>
            </div>
        ";
        
        $__internal_c4e5d048efaa1c3b727234112487528856c7309701af5688025a21f86d8cde3a->leave($__internal_c4e5d048efaa1c3b727234112487528856c7309701af5688025a21f86d8cde3a_prof);

        
        $__internal_0ff82af002db7b445ea127ae667c7fc39cfa811a1f2760527f7266d28a04d52d->leave($__internal_0ff82af002db7b445ea127ae667c7fc39cfa811a1f2760527f7266d28a04d52d_prof);

    }

    // line 279
    public function block_search($context, array $blocks = array())
    {
        $__internal_7c856be7f84f6d5bf00177680c39f8f4225b58ca6e03a0cbdd19647bacc5ad14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c856be7f84f6d5bf00177680c39f8f4225b58ca6e03a0cbdd19647bacc5ad14->enter($__internal_7c856be7f84f6d5bf00177680c39f8f4225b58ca6e03a0cbdd19647bacc5ad14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        $__internal_3b633a2b0e03d0c034eeff516c0a188e08d7c83f6ff195013fd68e51c5a60d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b633a2b0e03d0c034eeff516c0a188e08d7c83f6ff195013fd68e51c5a60d07->enter($__internal_3b633a2b0e03d0c034eeff516c0a188e08d7c83f6ff195013fd68e51c5a60d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 280
        echo "            <div class=\"container\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Type to search...\">
                <i class=\"fa fa-times close\"></i>
            </div>
        ";
        
        $__internal_3b633a2b0e03d0c034eeff516c0a188e08d7c83f6ff195013fd68e51c5a60d07->leave($__internal_3b633a2b0e03d0c034eeff516c0a188e08d7c83f6ff195013fd68e51c5a60d07_prof);

        
        $__internal_7c856be7f84f6d5bf00177680c39f8f4225b58ca6e03a0cbdd19647bacc5ad14->leave($__internal_7c856be7f84f6d5bf00177680c39f8f4225b58ca6e03a0cbdd19647bacc5ad14_prof);

    }

    // line 289
    public function block_main($context, array $blocks = array())
    {
        $__internal_58b74489c724ce07af630b55ec8c6b87255b3f4d9c6ed81f2b5da9b1583926aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b74489c724ce07af630b55ec8c6b87255b3f4d9c6ed81f2b5da9b1583926aa->enter($__internal_58b74489c724ce07af630b55ec8c6b87255b3f4d9c6ed81f2b5da9b1583926aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_901ea85b053474c894886923c2d2f748479ebb30d6a4c4fba37257cfbc4c5b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901ea85b053474c894886923c2d2f748479ebb30d6a4c4fba37257cfbc4c5b26->enter($__internal_901ea85b053474c894886923c2d2f748479ebb30d6a4c4fba37257cfbc4c5b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 290
        echo "            <section>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_901ea85b053474c894886923c2d2f748479ebb30d6a4c4fba37257cfbc4c5b26->leave($__internal_901ea85b053474c894886923c2d2f748479ebb30d6a4c4fba37257cfbc4c5b26_prof);

        
        $__internal_58b74489c724ce07af630b55ec8c6b87255b3f4d9c6ed81f2b5da9b1583926aa->leave($__internal_58b74489c724ce07af630b55ec8c6b87255b3f4d9c6ed81f2b5da9b1583926aa_prof);

    }

    // line 303
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cfc34c82951ab2c084cd27d822be0484754245b0e1165afdef17f19a676171cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc34c82951ab2c084cd27d822be0484754245b0e1165afdef17f19a676171cf->enter($__internal_cfc34c82951ab2c084cd27d822be0484754245b0e1165afdef17f19a676171cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b2043d5b9c5271927270715bda8ea3b553fe8e70c24adf7790ace705a498f9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2043d5b9c5271927270715bda8ea3b553fe8e70c24adf7790ace705a498f9cb->enter($__internal_b2043d5b9c5271927270715bda8ea3b553fe8e70c24adf7790ace705a498f9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 304
        echo "    <footer>

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
        \"";
        // line 344
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getSocialButtons();
        echo "\"
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

    </footer>
    <!-- /.footer -->

    <!-- Javascript -->

";
        
        $__internal_b2043d5b9c5271927270715bda8ea3b553fe8e70c24adf7790ace705a498f9cb->leave($__internal_b2043d5b9c5271927270715bda8ea3b553fe8e70c24adf7790ace705a498f9cb_prof);

        
        $__internal_cfc34c82951ab2c084cd27d822be0484754245b0e1165afdef17f19a676171cf->leave($__internal_cfc34c82951ab2c084cd27d822be0484754245b0e1165afdef17f19a676171cf_prof);

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
        return array (  606 => 344,  564 => 304,  555 => 303,  537 => 290,  528 => 289,  514 => 280,  505 => 279,  493 => 272,  472 => 254,  467 => 252,  463 => 251,  459 => 250,  455 => 249,  446 => 247,  443 => 246,  433 => 241,  430 => 240,  428 => 239,  362 => 176,  283 => 100,  270 => 90,  257 => 80,  244 => 70,  222 => 51,  218 => 49,  209 => 48,  199 => 303,  193 => 299,  191 => 289,  185 => 285,  183 => 279,  177 => 275,  175 => 48,  172 => 47,  163 => 46,  151 => 41,  147 => 40,  141 => 37,  134 => 33,  130 => 32,  124 => 29,  112 => 19,  103 => 18,  91 => 364,  89 => 46,  84 => 43,  82 => 18,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 2,);
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
    <!-- <link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\"> -->
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
        \"{{ socialButtons() }}\"
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

    </footer>
    <!-- /.footer -->

    <!-- Javascript -->

{% endblock %}
{% endblock %}

</body>
</html>", "@EloboostedFrontoffice/Default/Layout.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Default\\Layout.html.twig");
    }
}