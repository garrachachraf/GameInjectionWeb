<?php

/* EloboostedFrontofficeBundle:Compte:myInbox.html.twig */
class __TwigTemplate_569621ceef21c4749fc58dd9050661ba3f1f0b3771584f86ff52c26b579d2e50 extends Twig_Template
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
        $__internal_30f55f5bccd526cdc989e3865376cf9007ac0f9ded0cd567b6686176600c0ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f55f5bccd526cdc989e3865376cf9007ac0f9ded0cd567b6686176600c0ba6->enter($__internal_30f55f5bccd526cdc989e3865376cf9007ac0f9ded0cd567b6686176600c0ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig"));

        $__internal_77dd7ad0a9248e5eab8ddc151a61294ed03b26ff88f76f73034635380732e733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dd7ad0a9248e5eab8ddc151a61294ed03b26ff88f76f73034635380732e733->enter($__internal_77dd7ad0a9248e5eab8ddc151a61294ed03b26ff88f76f73034635380732e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig"));

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
    <title>GameInjection - My inbox </title>

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
    <!-- THEME CSS -->
    <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/SideNav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"\">
                        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\" class=\"\">Forum</a>
                        <!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">View All Tournaments</a></li>
                                </ul>-->
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                            ";
        // line 91
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 92
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
            echo "\">Create Tournament</a> </li>
                            ";
        }
        // line 94
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Events</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
                            <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                            <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
        echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                        </ul>
                    </li>
                    <li class=\"custom\"><a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                    <!-- <li><a href=\"\">Contact</a></li>-->
                </ul>
            </div>
        </nav>
        <div class=\"nav-right\">
            ";
        // line 117
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 118
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 119
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/login.png"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                </div>

            ";
        } else {
            // line 124
            echo "                ";
            $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
            // line 125
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                        <li><a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAccount");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                    </ul>

                </div>
                <div id=\"nots2\" class=\"nav-dropdown dropdown\">

                    ";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                    ";
            // line 146
            echo "                    </ul>
                </div>

            ";
        }
        // line 150
        echo "            <span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

        </div>
    </div>
</header>
<!-- /header -->

<div class=\"modal-search\">
    <div id=\"mySidenav\" class=\"sidenav\">
        <script>
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
        // line 183
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

        </script>

        <div style=\"position: fixed;top: 56px;width: 368px\">
            ";
        // line 220
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 221
            echo "                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 14px;padding: 5px\">
                        <form id=\"msg\" action=\"";
            // line 223
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postmsg");
            echo "\" method=\"post\">
                            <label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
                            <input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
                            <input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
                        </form>
                    </div>
                </div>

                ";
            // line 236
            echo "

            ";
        } else {
            // line 239
            echo "                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 15px;padding: 5px\">
                        <h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
                    </div>
                </div>

            ";
        }
        // line 246
        echo "        </div>
        <div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
            ";
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Compte:listRender"));
        echo "
        </div>


    </div>
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
                <div class=\"page-title\">";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo " </div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
        echo "\">
                        <a href=\"";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">
                            <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
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
                    <li class=\"\"><a href=\"";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
        echo "\">Recent activities</a></li>
                    <li class=\"\"><a href=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myFriends");
        echo "\">Friends list</a></li>
                    <li class=\"active\"><a href=\"";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myInbox");
        echo "\">my inbox</a></li>
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
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-calendar\"></i> Born ";
        // line 298
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "DateDeNaissance", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-bookmark\"></i> Posts ";
        // line 299
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["myposts"] ?? $this->getContext($context, "myposts"))), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-comment\"></i> Comments ";
        // line 300
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["mycomments"] ?? $this->getContext($context, "mycomments"))), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Rank ";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "points", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends (";
        // line 311
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lstAmi"] ?? $this->getContext($context, "lstAmi"))), "html", null, true);
        echo ")</div>
                            <div class=\"panel-body\">
                                <ul>

                                    ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lstAmi"] ?? $this->getContext($context, "lstAmi")));
        foreach ($context['_seq'] as $context["_key"] => $context["ami"]) {
            // line 316
            echo "                                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["ami"], "idCompte", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "image", array()), "html", null, true);
            echo "\" alt=\"\"></a></li>
                                        ";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "pseudo", array()), "html", null, true);
            echo " , ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ami"], "idCompte", array()), "html", null, true);
            echo " <br>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ami'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class=\"col-md-9 col-sm-8\">
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myMsgs"] ?? $this->getContext($context, "myMsgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 329
            echo "                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "pseudo", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a >Message from : ";
            // line 335
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "emetteurMsg", array()), "pseudo", array()), "html", null, true);
            echo "</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i> ";
            // line 337
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array())), "html", null, true);
            echo " </li>
                                        </ul>
                                    </div>
                                </div>
                            ";
            // line 341
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
            echo "
                                <br>
                                <br>
                                <p><i class=\"fa fa-send-o\"></i> You can click on ";
            // line 344
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
        // line 351
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
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
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
        
        $__internal_30f55f5bccd526cdc989e3865376cf9007ac0f9ded0cd567b6686176600c0ba6->leave($__internal_30f55f5bccd526cdc989e3865376cf9007ac0f9ded0cd567b6686176600c0ba6_prof);

        
        $__internal_77dd7ad0a9248e5eab8ddc151a61294ed03b26ff88f76f73034635380732e733->leave($__internal_77dd7ad0a9248e5eab8ddc151a61294ed03b26ff88f76f73034635380732e733_prof);

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
        return array (  642 => 417,  638 => 416,  634 => 415,  568 => 351,  555 => 344,  549 => 341,  542 => 337,  537 => 335,  528 => 333,  522 => 329,  518 => 328,  507 => 319,  497 => 317,  488 => 316,  484 => 315,  477 => 311,  464 => 301,  460 => 300,  456 => 299,  452 => 298,  434 => 283,  430 => 282,  426 => 281,  411 => 269,  407 => 268,  403 => 267,  398 => 265,  378 => 248,  374 => 246,  366 => 241,  362 => 239,  357 => 236,  346 => 223,  342 => 221,  340 => 220,  300 => 183,  265 => 150,  259 => 146,  255 => 138,  246 => 132,  241 => 130,  237 => 129,  227 => 126,  224 => 125,  221 => 124,  211 => 119,  208 => 118,  206 => 117,  197 => 111,  191 => 108,  187 => 107,  177 => 100,  173 => 99,  166 => 94,  160 => 92,  158 => 91,  154 => 90,  145 => 84,  140 => 82,  130 => 77,  120 => 70,  116 => 69,  112 => 68,  108 => 67,  80 => 42,  73 => 38,  69 => 37,  49 => 20,  36 => 10,  25 => 1,);
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
    <title>GameInjection - My inbox </title>

    <!-- FAVICON -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\">

    <!-- CORE CSS -->
    <link href=\"{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    <link href=\"{{ asset('plugins/animate/animate.min.css') }}\" rel=\"stylesheet\">
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
    <!-- THEME CSS -->
    <link href=\"{{ asset('css/theme.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/custom.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('FOassets/css/chat.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('FOassets/css/SideNav.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"{{ path('home') }}\" class=\"logo\"><img src=\"{{ asset('FOassets/img/logo.png') }}\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"\">
                        <a href=\"{{ path('showAllPosts') }}\" class=\"\">Forum</a>
                        <!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"{{ path('showAllPosts') }}\">View All Tournaments</a></li>
                                </ul>-->
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"{{ path('tournoi_index', {'p': 1}) }}\">View All Tournaments</a></li>
                            {% if is_granted('ROLE_USER') %}
                                <li><a href=\"{{ path('tournoi_new') }}\">Create Tournament</a> </li>
                            {% endif %}
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
                    <!-- <li><a href=\"\">Contact</a></li>-->
                </ul>
            </div>
        </nav>
        <div class=\"nav-right\">
            {% if app.user  == null %}
                <div class=\"nav-profile dropdown\">
                    <a href=\"{{ path('eloboosted_login_homepage') }}\" ><img src=\"{{ asset('FOassets/img/login.png') }}\" alt=\"\"> <span>Connect to you account</span></a>

                </div>

            {% else %}
                {% set foo = app.user.image  %}
                <div class=\"nav-profile dropdown\">
                    <a href=\"{{ path('AddProduct_page') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ foo }}\" alt=\"\"> <span>{{ app.user.pseudo }}</span></a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('myProfile') }}\"><i class=\"fa fa-user\"></i> Profile</a></li>
                        <li><a href=\"{{ path('editAccount') }}\"><i class=\"fa fa-gear\"></i> Settings</a></li>
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

            {% endif %}
            <span id=\"OpenNav\" style=\"font-size:15px;color:White;cursor:pointer\">&#9776; Open Chat</span>

        </div>
    </div>
</header>
<!-- /header -->

<div class=\"modal-search\">
    <div id=\"mySidenav\" class=\"sidenav\">
        <script>
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

        </script>

        <div style=\"position: fixed;top: 56px;width: 368px\">
            {% if app.user != null %}
                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 14px;padding: 5px\">
                        <form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
                            <label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
                            <input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
                            <input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
                        </form>
                    </div>
                </div>

                {#<form id=\"msg\" action=\"{{ path('postmsg') }}\" method=\"post\">
                    <label for=\"chatMessage\">Type messaga </label>
                    <input type=\"text\" name=\"message\" id=\"chatMessage\" />
                    <input type=\"submit\" value=\"submit\" />
                </form>#}


            {% else %}
                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 15px;padding: 5px\">
                        <h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"{{ path('eloboosted_login_homepage') }}\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
                    </div>
                </div>

            {% endif %}
        </div>
        <div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
            {{ render(controller('EloboostedFrontofficeBundle:Compte:listRender')) }}
        </div>


    </div>
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
                <div class=\"page-title\">{{ app.user.pseudo }} </div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"{{ app.user.pseudo }}\">
                        <a href=\"{{ path('myProfile') }}\">
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
                    <li class=\"\"><a href=\"{{ path('myProfile') }}\">Recent activities</a></li>
                    <li class=\"\"><a href=\"{{ path('myFriends') }}\">Friends list</a></li>
                    <li class=\"active\"><a href=\"{{ path('myInbox') }}\">my inbox</a></li>
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
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-calendar\"></i> Born {{ app.user.DateDeNaissance | date }}</li>
                                    <li><i class=\"fa fa-bookmark\"></i> Posts {{ myposts | length }}</li>
                                    <li><i class=\"fa fa-comment\"></i> Comments {{ mycomments | length }}</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Rank {{ app.user.points }}</li>
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
</html>", "EloboostedFrontofficeBundle:Compte:myInbox.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/myInbox.html.twig");
    }
}
