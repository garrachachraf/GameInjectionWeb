<?php

/* @EloboostedFrontoffice/Compte/userProfile.html.twig */
class __TwigTemplate_e40c77dc2856b0397b7bb869b09ca1355b1946776a93dc195d61a1ac80987d20 extends Twig_Template
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
        $__internal_dcabd9b603b2bda802f84ec0ed75f43e03b432d2f66f76927c8a11cd7ea1e42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcabd9b603b2bda802f84ec0ed75f43e03b432d2f66f76927c8a11cd7ea1e42d->enter($__internal_dcabd9b603b2bda802f84ec0ed75f43e03b432d2f66f76927c8a11cd7ea1e42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/userProfile.html.twig"));

        $__internal_382d7cc7e4f469a1efd0c6c3edbf5c012b40f9ff67e5a732077e0aaecb3e805e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382d7cc7e4f469a1efd0c6c3edbf5c012b40f9ff67e5a732077e0aaecb3e805e->enter($__internal_382d7cc7e4f469a1efd0c6c3edbf5c012b40f9ff67e5a732077e0aaecb3e805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Compte/userProfile.html.twig"));

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

    <title>Gameforest - Responsive Gaming HTML Theme</title>

    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            \$('#SendMessageBtn').click( function (e) {

                var msg =\$('#MessageContent').val();
                var idEnv = ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
        echo " ;


                \$.ajax({
                    url: '";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sendMessage");
        echo "',
                    type: 'post',
                    data: { MessageContent : msg , id : idEnv},
                    dataType: 'json', // JSON
                    success: function (data) {
                        alert(\"Message successfully sent !\");
                    },
                    error: function (data) {

                        console.log('error');
                    }
                });

                \$('#MessageContent').val('');

            })


            \$('#sendInvite').click(
                function () {

                    \$.ajax({
                        url: \"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SendInvite");
        echo "\",
                        method: \"post\",
                        data : {idCompte : ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
        echo "},
                        type : 'json',
                        success: function (data) {

                            console.log(data['data']);
                            \$('#sendInvite').prop('disabled', true);
                            \$('#sendInvite').val('Invite is being treated');


                        }

                    })


                });

        })
    </script>

    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

    <!-- CORE CSS -->
    <link href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    <link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- THEME CSS -->
    <link href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 80
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
            <div class=\"nav-profile dropdown\">
                <a href=\"profile.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"img/user/avatar.jpg\" alt=\"\"> <span>Nathan Drake</span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"profile.html#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                </ul>
            </div>
            <div class=\"nav-dropdown dropdown\">
                <a href=\"profile.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                    <li><a href=\"profile.html#\">Alien Isolation</a></li>
                    <li><a href=\"profile.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                    <li><a href=\"profile.html#\">Last of Us</a></li>
                    <li><a href=\"profile.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                    <li><a href=\"profile.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                    <li class=\"dropdown-footer\"><a href=\"profile.html#\">View all games</a></li>
                </ul>
            </div>
            <a href=\"profile.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>
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
                <div class=\"page-title\">
                    ";
        // line 318
        if (((isset($context["attenteInvite"]) ? $context["attenteInvite"] : $this->getContext($context, "attenteInvite")) == 1)) {
            // line 319
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Invite is being treated\">
                    ";
        } elseif ((        // line 320
(isset($context["dejaAmi"]) ? $context["dejaAmi"] : $this->getContext($context, "dejaAmi")) == false)) {
            // line 321
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" id=\"sendInvite\" value=\"Send friend request\">
                    ";
        } else {
            // line 323
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Already friends\">
                    ";
        }
        // line 325
        echo "                    <br>
                    ";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "
                </div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "\">
                        <a href=\"profile.html#\">
                            <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "image", array()), "html", null, true);
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
                    <li class=\"active\"><a href=\"profile.html#\">";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "'s timeline</a></li>
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



                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends in commun (3)</div>
                            <div class=\"panel-body\">
                                <ul>
                                    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProfileCompteFriends"]) ? $context["ProfileCompteFriends"] : $this->getContext($context, "ProfileCompteFriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["amiProfile"]) {
            // line 375
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["CurrentCompteFriends"]) ? $context["CurrentCompteFriends"] : $this->getContext($context, "CurrentCompteFriends")));
            foreach ($context['_seq'] as $context["_key"] => $context["amiCurrent"]) {
                // line 376
                echo "                                            ";
                if (($context["amiProfile"] == $context["amiCurrent"])) {
                    // line 377
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["amiProfile"], "idCompte", array()))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "pseudo", array()), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "image", array()), "html", null, true);
                    echo "\" alt=\"\"></a></li>
                                                ";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "pseudo", array()), "html", null, true);
                    echo " <br>
                                            ";
                }
                // line 380
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiCurrent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiProfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "

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
                    <div class=\"panel panel-default margin-bottom-40\">

                        <div class=\"panel-body\">
                            <input type=\"text\" name=\"id\" value=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
        echo "\" hidden>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" id=\"MessageContent\" rows=\"4\" placeholder=\"Wanna get to know the user more ??? send him a mssage 😛...\"></textarea>
                            </div>
                            <div class=\"btn-group pull-left\">
                                <a class=\"btn btn-link btn-icon-left no-padding-left\"><i class=\"fa fa-smile-o\"></i> Send a message to ";
        // line 444
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "</a>

                            </div>
                            <button type=\"button\" id=\"SendMessageBtn\" class=\"btn btn-primary btn-icon-left pull-right\"><i class=\"fa fa-edit\"></i> Submit</button>
                        </div>

                    </div>

                    ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter((isset($context["activitiesTotal"]) ? $context["activitiesTotal"] : $this->getContext($context, "activitiesTotal")), "date")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 453
            echo "                        ";
            if ($this->getAttribute($context["item"], "idCommentaire", array(), "any", true, true)) {
                // line 454
                echo "                            <div class=\"post\">
                                <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Commented ";
                // line 455
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
                                <div class=\"panel panel-default panel-post\">
                                    <div class=\"panel-body\">
                                        <div class=\"post\">
                                            <div class=\"post-header post-author\">
                                                <a href=\"";
                // line 460
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "idCompte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
                                                <div class=\"post-title\">
                                                    <h3><a>";
                // line 462
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "titre", array()), "html", null, true);
                echo "</a></h3>
                                                    <ul class=\"post-meta\">
                                                        <li><i class=\"fa fa-calendar-o\"></i> ";
                // line 464
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "date", array())), "html", null, true);
                echo "</li>
                                                        <li> Category : ";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                // line 469
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "sujet", array()), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <ul class=\"post-action\">
                                            <li><i class=\"fa fa-comments\"></i> Comments (insert value here) </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 480
                echo "                            <div class=\"post\">
                                    <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Created a post ";
                // line 481
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
                                    <div class=\"panel panel-default panel-post\">
                                        <div class=\"panel-body\">
                                            <div class=\"post\">
                                                <div class=\"post-header post-author\">
                                                    <a href=\"";
                // line 486
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "idCOmpte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    <div class=\"post-title\">
                                                        <h3><a>";
                // line 488
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
                echo "</a></h3>
                                                        <ul class=\"post-meta\">
                                                            <li><i class=\"fa fa-calendar-o\"></i> ";
                // line 490
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array())), "html", null, true);
                echo "</li>
                                                            <li> Category : ";
                // line 491
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                ";
                // line 495
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sujet", array()), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                        <div class=\"panel-footer\">
                                            <ul class=\"post-action\">
                                                <li><i class=\"fa fa-comments\"></i> Comments (insert value here) </li>
                                            </ul>
                                        </div>
                                    </div>
                            <div class=\"post\">
                        ";
            }
            // line 506
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        echo "


                    <center><input type=\"button\" id=\"showMore\" class=\"btn btn-primary\" value=\"Show More\"></center>
                </div>
            </div>
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
<script src=\"plugins/jquery/jquery-3.1.0.min.js\"></script>
<script src=\"plugins/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"js/core.min.js\"></script>
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
        
        $__internal_dcabd9b603b2bda802f84ec0ed75f43e03b432d2f66f76927c8a11cd7ea1e42d->leave($__internal_dcabd9b603b2bda802f84ec0ed75f43e03b432d2f66f76927c8a11cd7ea1e42d_prof);

        
        $__internal_382d7cc7e4f469a1efd0c6c3edbf5c012b40f9ff67e5a732077e0aaecb3e805e->leave($__internal_382d7cc7e4f469a1efd0c6c3edbf5c012b40f9ff67e5a732077e0aaecb3e805e_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Compte/userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 507,  671 => 506,  657 => 495,  650 => 491,  646 => 490,  641 => 488,  634 => 486,  626 => 481,  623 => 480,  609 => 469,  602 => 465,  598 => 464,  593 => 462,  586 => 460,  578 => 455,  575 => 454,  572 => 453,  568 => 452,  557 => 444,  549 => 439,  490 => 382,  484 => 381,  478 => 380,  473 => 378,  464 => 377,  461 => 376,  456 => 375,  452 => 374,  418 => 343,  403 => 331,  398 => 329,  392 => 326,  389 => 325,  385 => 323,  381 => 321,  379 => 320,  376 => 319,  374 => 318,  133 => 80,  129 => 79,  123 => 76,  116 => 72,  112 => 71,  86 => 48,  81 => 46,  56 => 24,  49 => 20,  39 => 13,  25 => 1,);
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

    <title>Gameforest - Responsive Gaming HTML Theme</title>

    <script type=\"text/javascript\" src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <script>
        \$(document).ready(function () {

            \$('#SendMessageBtn').click( function (e) {

                var msg =\$('#MessageContent').val();
                var idEnv = {{ userInfo.idCompte }} ;


                \$.ajax({
                    url: '{{ path('sendMessage') }}',
                    type: 'post',
                    data: { MessageContent : msg , id : idEnv},
                    dataType: 'json', // JSON
                    success: function (data) {
                        alert(\"Message successfully sent !\");
                    },
                    error: function (data) {

                        console.log('error');
                    }
                });

                \$('#MessageContent').val('');

            })


            \$('#sendInvite').click(
                function () {

                    \$.ajax({
                        url: \"{{ path('SendInvite') }}\",
                        method: \"post\",
                        data : {idCompte : {{ userInfo.idCompte }}},
                        type : 'json',
                        success: function (data) {

                            console.log(data['data']);
                            \$('#sendInvite').prop('disabled', true);
                            \$('#sendInvite').val('Invite is being treated');


                        }

                    })


                });

        })
    </script>

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
            <div class=\"nav-profile dropdown\">
                <a href=\"profile.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"img/user/avatar.jpg\" alt=\"\"> <span>Nathan Drake</span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"profile.html#\"><i class=\"fa fa-user\"></i> Profile</a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-heart\"></i> Likes <span class=\"label label-info\">32</span></a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-gamepad\"></i> Games</a></li>
                    <li><a href=\"profile.html#\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                </ul>
            </div>
            <div class=\"nav-dropdown dropdown\">
                <a href=\"profile.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\">3</span></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"dropdown-header\"><i class=\"fa fa-bell\"></i> You have 5 new games</li>
                    <li><a href=\"profile.html#\">Alien Isolation</a></li>
                    <li><a href=\"profile.html#\">Witcher 3 <span class=\"label label-success\">XBOX</span></a></li>
                    <li><a href=\"profile.html#\">Last of Us</a></li>
                    <li><a href=\"profile.html#\">Uncharted 4 <span class=\"label label-primary\">PS4</span></a></li>
                    <li><a href=\"profile.html#\">GTA 5 <span class=\"label label-warning\">PC</span></a></li>
                    <li class=\"dropdown-footer\"><a href=\"profile.html#\">View all games</a></li>
                </ul>
            </div>
            <a href=\"profile.html#\" data-toggle=\"modal-search\"><i class=\"fa fa-search\"></i></a>
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
                <div class=\"page-title\">
                    {% if attenteInvite == 1 %}
                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Invite is being treated\">
                    {% elseif dejaAmi == false %}
                        <input type=\"button\" class=\"btn btn-info btn-sm\" id=\"sendInvite\" value=\"Send friend request\">
                    {% else %}
                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Already friends\">
                    {% endif %}
                    <br>
                    {{ userInfo.pseudo }}
                </div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"{{ userInfo.pseudo }}\">
                        <a href=\"profile.html#\">
                            <img src=\"{{ userInfo.image }}\">
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
                    <li class=\"active\"><a href=\"profile.html#\">{{ userInfo.pseudo }}'s timeline</a></li>
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



                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends in commun (3)</div>
                            <div class=\"panel-body\">
                                <ul>
                                    {% for amiProfile in ProfileCompteFriends %}
                                        {% for amiCurrent in CurrentCompteFriends  %}
                                            {% if amiProfile == amiCurrent %}
                                                <li><a href=\"{{ path('userProfile',{id : amiProfile.idCompte}) }}\" data-toggle=\"tooltip\" title=\"{{ amiProfile.pseudo }}\"><img src=\"{{ amiProfile.image }}\" alt=\"\"></a></li>
                                                {{ amiProfile.pseudo }} <br>
                                            {% endif %}
                                        {% endfor %}
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
                    <div class=\"panel panel-default margin-bottom-40\">

                        <div class=\"panel-body\">
                            <input type=\"text\" name=\"id\" value=\"{{ userInfo.idCompte }}\" hidden>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" id=\"MessageContent\" rows=\"4\" placeholder=\"Wanna get to know the user more ??? send him a mssage 😛...\"></textarea>
                            </div>
                            <div class=\"btn-group pull-left\">
                                <a class=\"btn btn-link btn-icon-left no-padding-left\"><i class=\"fa fa-smile-o\"></i> Send a message to {{ userInfo.pseudo }}</a>

                            </div>
                            <button type=\"button\" id=\"SendMessageBtn\" class=\"btn btn-primary btn-icon-left pull-right\"><i class=\"fa fa-edit\"></i> Submit</button>
                        </div>

                    </div>

                    {% for item in activitiesTotal | sortbyfield('date') | reverse %}
                        {% if item.idCommentaire is defined %}
                            <div class=\"post\">
                                <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Commented {{ item.date|ago }} </h4>
                                <div class=\"panel panel-default panel-post\">
                                    <div class=\"panel-body\">
                                        <div class=\"post\">
                                            <div class=\"post-header post-author\">
                                                <a href=\"{{ path('userProfile',{id : item.idPostCp.idComptePost.idCompte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.idPostCp.idComptePost.image }}\" alt=\"\"></a>
                                                <div class=\"post-title\">
                                                    <h3><a>{{ item.idPostCp.titre }}</a></h3>
                                                    <ul class=\"post-meta\">
                                                        <li><i class=\"fa fa-calendar-o\"></i> {{ item.idPostCp.date|date }}</li>
                                                        <li> Category : {{ item.idPostCp.cathegorieSpecifique.nom }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        {{ item.idPostCp.sujet }}
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <ul class=\"post-action\">
                                            <li><i class=\"fa fa-comments\"></i> Comments (insert value here) </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"post\">
                                    <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Created a post {{ item.date|ago }} </h4>
                                    <div class=\"panel panel-default panel-post\">
                                        <div class=\"panel-body\">
                                            <div class=\"post\">
                                                <div class=\"post-header post-author\">
                                                    <a href=\"{{ path('userProfile',{id : item.idComptePost.idCOmpte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.idComptePost.image }}\" alt=\"\"></a>
                                                    <div class=\"post-title\">
                                                        <h3><a>{{ item.titre }}</a></h3>
                                                        <ul class=\"post-meta\">
                                                            <li><i class=\"fa fa-calendar-o\"></i> {{ item.date|date }}</li>
                                                            <li> Category : {{ item.cathegorieSpecifique.nom }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                {{ item.sujet }}
                                            </div>
                                        </div>
                                        <div class=\"panel-footer\">
                                            <ul class=\"post-action\">
                                                <li><i class=\"fa fa-comments\"></i> Comments (insert value here) </li>
                                            </ul>
                                        </div>
                                    </div>
                            <div class=\"post\">
                        {% endif %}
                    {% endfor %}



                    <center><input type=\"button\" id=\"showMore\" class=\"btn btn-primary\" value=\"Show More\"></center>
                </div>
            </div>
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
<script src=\"plugins/jquery/jquery-3.1.0.min.js\"></script>
<script src=\"plugins/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"js/core.min.js\"></script>
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
</html>", "@EloboostedFrontoffice/Compte/userProfile.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Compte\\userProfile.html.twig");
    }
}
