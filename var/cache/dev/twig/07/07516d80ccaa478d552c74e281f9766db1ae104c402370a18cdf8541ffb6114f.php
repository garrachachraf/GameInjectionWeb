<?php

/* EloboostedFrontofficeBundle:Compte:myInbox.html.twig */
class __TwigTemplate_e595405b40999eb7d0e50bb979c9970bbf9753d892138b3cffa78807c7db944b extends Twig_Template
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
        $__internal_20057d58a3844c05e6720b7969a6db322d3c6aa95b6cd39d2cfa73fbaf764a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20057d58a3844c05e6720b7969a6db322d3c6aa95b6cd39d2cfa73fbaf764a37->enter($__internal_20057d58a3844c05e6720b7969a6db322d3c6aa95b6cd39d2cfa73fbaf764a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig"));

        $__internal_d34db7ca2cec281ae9c03f5d70de9e92e38f12448329f6aae387a6a78ab4858b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34db7ca2cec281ae9c03f5d70de9e92e38f12448329f6aae387a6a78ab4858b->enter($__internal_d34db7ca2cec281ae9c03f5d70de9e92e38f12448329f6aae387a6a78ab4858b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- META -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(

                function()
                {
                    \$.post('";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lstnots");
        echo "', function(data) {
                        \$('#nots2').html(data);
                        console.log(data);
                    });

                }

                , 5000);

        })
    </script>
    <title>Gameforest - Responsive Gaming HTML Theme</title>

    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

    <!-- CORE CSS -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- THEME CSS -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"index.html\" class=\"logo\"><img src=\"img/logo.png\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"dropdown\">
                        <a href=\"profile.html#\" class=\"dropdown-toggle\">Home</a>
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
                                    <img src=\"img/game/menu-1.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-warning\">PC</span>
                                        <h3>Assassin's Creed Syndicate</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-2.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-primary\">PS4</span>
                                        <h3>Last of Us Remastered</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-3.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-success\">Xbox</span>
                                        <h3>Max Payne 3</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-4.jpg\" alt=\"\">
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
                        <a href=\"profile.html#\" class=\"dropdown-toggle\">Blog</a>
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
                        <a href=\"profile.html#\">Pages</a>
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
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"profile.html#\">Elements</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url(img/content/menu.png);\">
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
        // line 241
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 242
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 243
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/user/avatar2.jpg"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                </div>

            ";
        } else {
            // line 248
            echo "                ";
            $context["foo"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array());
            // line 249
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 250
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                        <li><a href=\"";
            // line 254
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                        <li><a href=\"";
            // line 255
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                        <li><a href=\"";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                    </ul>

                </div>
                <div id=\"nots2\" class=\"nav-dropdown dropdown\">

                    ";
            // line 264
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                    ";
            // line 272
            echo "                    </ul>
                </div>
                <a href=\"index.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>

            ";
        }
        // line 277
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
    <section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <div class=\"page-header\">
                <div class=\"page-title\">YAKUZI <a href=\"profile.html#\" class=\"btn btn-primary btn-sm btn-rounded\" data-toggle=\"tooltip\" title=\"Add friend\"><i class=\"fa fa-user-plus\"></i></a></div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"YAKUZI\">
                        <a href=\"profile.html#\">
                            <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
        echo "\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
        <div class=\"tab-select sticky\">
            <div class=\"container\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"profile.html#\">Timeline</a></li>
                    <li><a href=\"profile.html#\">About</a></li>
                    <li><a href=\"profile.html#\">Friends <span>(34)</span></a></li>
                    <li><a href=\"profile.html#\">Images <span>(8)</span></a></li>
                    <li><a href=\"profile.html#\">Videos <span>(2)</span></a></li>
                    <li><a href=\"profile.html#\">Groups</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 hidden-xs\">
                    <div class=\"widget\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">About me</div>
                            <div class=\"panel-body\">
                                I am a frontend developer & designer. Love to create awesome designs and unique websites.
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-clock-o\"></i> Joined December 2009</li>
                                    <li><i class=\"fa fa-map-marker\"></i> United Kingdom</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Gameforest</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Navigation</div>
                            <div class=\"panel-body no-padding\">
                                <ul class=\"panel-list-bordered\">
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games (4)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-film\"></i> Videos (2)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-picture-o\"></i> Galleries (3)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-calendar-o\"></i> Events</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-users\"></i> Groups (1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends (";
        // line 357
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lstAmi"]) ? $context["lstAmi"] : $this->getContext($context, "lstAmi"))), "html", null, true);
        echo ")</div>
                            <div class=\"panel-body\">
                                <ul>

                                    ";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstAmi"]) ? $context["lstAmi"] : $this->getContext($context, "lstAmi")));
        foreach ($context['_seq'] as $context["_key"] => $context["ami"]) {
            // line 362
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["ami"], "idCompte", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></li>
                                        ";
            // line 363
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "idCompte", array()), "html", null, true);
            echo " <br>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ami'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading bold\">Recent Feeds</div>
                            <div class=\"panel-body\">
                                <ul>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/1.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Overwatch Closed Beta</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 15, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/2.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Blood and Gore</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 13, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/3.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Warner Bros. Interactive</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 12, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/4.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Sharks Don't Sleep</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 11, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/5.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">GTA 5 Reaches 5 Million</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 10, 2016</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-9 col-sm-8\">
                    ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myMsgs"]) ? $context["myMsgs"] : $this->getContext($context, "myMsgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 418
            echo "                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"";
            // line 422
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a >Message from : ";
            // line 424
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "pseudo", array()), "html", null, true);
            echo "</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i> ";
            // line 426
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array())), "html", null, true);
            echo " </li>
                                        </ul>
                                    </div>
                                </div>
                            ";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
            echo "
                                <br>
                                <br>
                                <p><i class=\"fa fa-send-o\"></i> You can click on ";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "pseudo", array()), "html", null, true);
            echo "'s profile to reply </p>

                            </div>
                        </div>

                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "                </div>
            </div>
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
                            <li><a href=\"profile.html#\">Playstation 4</a></li>
                            <li><a href=\"profile.html#\">XBOX ONE</a></li>
                            <li><a href=\"profile.html#\">PC</a></li>
                            <li><a href=\"profile.html#\">PS3</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"profile.html#\">Gaming</a></li>
                            <li><a href=\"profile.html#\">Portfolio</a></li>
                            <li><a href=\"profile.html#\">Videos</a></li>
                            <li><a href=\"profile.html#\">Reviews</a></li>
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
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
            </ul>
            &copy; 2016 Gameforest. All rights reserved.
        </div>
    </div>
</footer>
<!-- /.footer -->

<!-- Javascript -->
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
<script>
    (function(\$) {
        \"use strict\";
        \$(window).scroll(function(){
            if (\$(this).scrollTop() > 300) {
                \$('body').addClass('fixed-tab');
            } else {
                \$('body').removeClass('fixed-tab');
            }
        });
    })(jQuery);
</script>
</body>
</html>";
        
        $__internal_20057d58a3844c05e6720b7969a6db322d3c6aa95b6cd39d2cfa73fbaf764a37->leave($__internal_20057d58a3844c05e6720b7969a6db322d3c6aa95b6cd39d2cfa73fbaf764a37_prof);

        
        $__internal_d34db7ca2cec281ae9c03f5d70de9e92e38f12448329f6aae387a6a78ab4858b->leave($__internal_d34db7ca2cec281ae9c03f5d70de9e92e38f12448329f6aae387a6a78ab4858b_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:myInbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 506,  645 => 505,  641 => 504,  575 => 440,  562 => 433,  556 => 430,  549 => 426,  544 => 424,  535 => 422,  529 => 418,  525 => 417,  471 => 365,  461 => 363,  452 => 362,  448 => 361,  441 => 357,  380 => 299,  356 => 277,  349 => 272,  345 => 264,  336 => 258,  331 => 256,  327 => 255,  323 => 254,  319 => 253,  309 => 250,  306 => 249,  303 => 248,  293 => 243,  290 => 242,  288 => 241,  90 => 46,  86 => 45,  80 => 42,  73 => 38,  69 => 37,  49 => 20,  36 => 10,  25 => 1,);
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
    <!-- META -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <script src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <script>
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
    </script>
    <title>Gameforest - Responsive Gaming HTML Theme</title>

    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

    <!-- CORE CSS -->
    <link href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    <link href=\"{{ asset('plugins/animate/animate.min.css') }}\" rel=\"stylesheet\">

    <!-- THEME CSS -->
    <link href=\"{{ asset('css/theme.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"index.html\" class=\"logo\"><img src=\"img/logo.png\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"dropdown\">
                        <a href=\"profile.html#\" class=\"dropdown-toggle\">Home</a>
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
                                    <img src=\"img/game/menu-1.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-warning\">PC</span>
                                        <h3>Assassin's Creed Syndicate</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-2.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-primary\">PS4</span>
                                        <h3>Last of Us Remastered</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-3.jpg\" alt=\"\">
                                    <div class=\"caption\">
                                        <span class=\"label label-success\">Xbox</span>
                                        <h3>Max Payne 3</h3>
                                        <p>Lorem ipsum dolor sit amet, adipise elit.</p>
                                    </div>
                                </a>
                            </li>
                            <li class=\"col-md-3\">
                                <a href=\"games-single.html\">
                                    <img src=\"img/game/menu-4.jpg\" alt=\"\">
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
                        <a href=\"profile.html#\" class=\"dropdown-toggle\">Blog</a>
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
                        <a href=\"profile.html#\">Pages</a>
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
                                    <li><a href=\"404.html\">404 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown mega-dropdown\">
                        <a href=\"profile.html#\">Elements</a>
                        <ul class=\"dropdown-menu mega-dropdown-menu row\" style=\"background-image: url(img/content/menu.png);\">
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
                {% set foo = app.user.image  %}
                <div class=\"nav-profile dropdown\">
                    <a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ foo }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
                        <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                        <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                        <li><a href=\"{{ path('home') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
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
    <section class=\"hero cover hidden-xs\" style=\"background-image: url(img/cover/cover-profile.jpg);\">
        <div class=\"hero-bg\"></div>
        <div class=\"container relative\">
            <div class=\"page-header\">
                <div class=\"page-title\">YAKUZI <a href=\"profile.html#\" class=\"btn btn-primary btn-sm btn-rounded\" data-toggle=\"tooltip\" title=\"Add friend\"><i class=\"fa fa-user-plus\"></i></a></div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"YAKUZI\">
                        <a href=\"profile.html#\">
                            <img src=\"{{ foo }}\">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"profile-nav height-50 border-bottom-1 border-grey-300  hidden-xs\">
        <div class=\"tab-select sticky\">
            <div class=\"container\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"active\"><a href=\"profile.html#\">Timeline</a></li>
                    <li><a href=\"profile.html#\">About</a></li>
                    <li><a href=\"profile.html#\">Friends <span>(34)</span></a></li>
                    <li><a href=\"profile.html#\">Images <span>(8)</span></a></li>
                    <li><a href=\"profile.html#\">Videos <span>(2)</span></a></li>
                    <li><a href=\"profile.html#\">Groups</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-60 padding-top-sm-30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 hidden-xs\">
                    <div class=\"widget\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">About me</div>
                            <div class=\"panel-body\">
                                I am a frontend developer & designer. Love to create awesome designs and unique websites.
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-clock-o\"></i> Joined December 2009</li>
                                    <li><i class=\"fa fa-map-marker\"></i> United Kingdom</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Gameforest</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Navigation</div>
                            <div class=\"panel-body no-padding\">
                                <ul class=\"panel-list-bordered\">
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games (4)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-film\"></i> Videos (2)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-picture-o\"></i> Galleries (3)</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-calendar-o\"></i> Events</a></li>
                                    <li><a href=\"profile.html#\"><i class=\"fa fa-users\"></i> Groups (1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends ({{ lstAmi|length }})</div>
                            <div class=\"panel-body\">
                                <ul>

                                    {% for ami in lstAmi %}
                                        <li><a href=\"{{ path('userProfile',{id : ami.idCompte}) }}\" data-toggle=\"tooltip\" title=\"{{ ami.pseudo }}\"><img src=\"{{ ami.image }}\" alt=\"\"></a></li>
                                        {{ ami.pseudo }} , {{ ami.idCompte }} <br>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading bold\">Recent Feeds</div>
                            <div class=\"panel-body\">
                                <ul>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/1.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Overwatch Closed Beta</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 15, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/2.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Blood and Gore</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 13, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/3.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Warner Bros. Interactive</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 12, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/4.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">Sharks Don't Sleep</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 11, 2016</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"profile.html#\" class=\"thumb\"><img src=\"img/blog/xs/5.jpg\" alt=\"\"></a>
                                        <div class=\"widget-list-meta\">
                                            <h4 class=\"widget-list-title\"><a href=\"profile.html#\">GTA 5 Reaches 5 Million</a></h4>
                                            <p><i class=\"fa fa-clock-o\"></i> September 10, 2016</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-9 col-sm-8\">
                    {% for message in myMsgs %}
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"{{ path('userProfile',{id : message.emetteurMsg.idCompte  }) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"{{ message.emetteurMsg.pseudo }}\"><img src=\"{{ message.emetteurMsg.image }}\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a >Message from : {{ message.emetteurMsg.pseudo }}</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i> {{ message.date|date }} </li>
                                        </ul>
                                    </div>
                                </div>
                            {{ message.contenu }}
                                <br>
                                <br>
                                <p><i class=\"fa fa-send-o\"></i> You can click on {{ message.emetteurMsg.pseudo }}'s profile to reply </p>

                            </div>
                        </div>

                    </div>
                    {% endfor %}
                </div>
            </div>
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
                            <li><a href=\"profile.html#\">Playstation 4</a></li>
                            <li><a href=\"profile.html#\">XBOX ONE</a></li>
                            <li><a href=\"profile.html#\">PC</a></li>
                            <li><a href=\"profile.html#\">PS3</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <ul class=\"nav\">
                            <li><a href=\"profile.html#\">Gaming</a></li>
                            <li><a href=\"profile.html#\">Portfolio</a></li>
                            <li><a href=\"profile.html#\">Videos</a></li>
                            <li><a href=\"profile.html#\">Reviews</a></li>
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
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Google\"><i class=\"fa fa-google-plus\"></i></a></li>
                <li><a href=\"profile.html#\" class=\"btn btn-circle btn-social-icon\" data-toggle=\"tooltip\" title=\"Follow us on Steam\"><i class=\"fa fa-steam\"></i></a></li>
            </ul>
            &copy; 2016 Gameforest. All rights reserved.
        </div>
    </div>
</footer>
<!-- /.footer -->

<!-- Javascript -->
<script src=\"{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
<script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/core.min.js') }}\"></script>
<script>
    (function(\$) {
        \"use strict\";
        \$(window).scroll(function(){
            if (\$(this).scrollTop() > 300) {
                \$('body').addClass('fixed-tab');
            } else {
                \$('body').removeClass('fixed-tab');
            }
        });
    })(jQuery);
</script>
</body>
</html>", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Compte/myInbox.html.twig");
    }
}
