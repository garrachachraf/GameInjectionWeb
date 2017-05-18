<?php

/* EloboostedFrontofficeBundle:Compte:userProfile.html.twig */
class __TwigTemplate_e4496d1148bd79bfc9e49e29d9cd5d12790a9a1b6eb809788e842a7d8fb397ee extends Twig_Template
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
        $__internal_c3e8e29f84cf6f6354c25401996976915796e484ff6a350024ba14fa97069b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e8e29f84cf6f6354c25401996976915796e484ff6a350024ba14fa97069b6d->enter($__internal_c3e8e29f84cf6f6354c25401996976915796e484ff6a350024ba14fa97069b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:userProfile.html.twig"));

        $__internal_7658985953a314d821aefbd0c519181980552c6763075936bfd1928a6eb6d431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7658985953a314d821aefbd0c519181980552c6763075936bfd1928a6eb6d431->enter($__internal_7658985953a314d821aefbd0c519181980552c6763075936bfd1928a6eb6d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Compte:userProfile.html.twig"));

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
    <title>GameInjection - ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "'s Profile</title>

    <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            \$('#SendMessageBtn').click( function (e) {

                var msg =\$('#MessageContent').val();
                var idEnv = ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
        echo " ;
                if(msg != '')
                {

                \$.ajax({
                    url: '";
        // line 47
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

            }
            else
                {
                    alert(\"Please insert the text to send \");
                }

                \$('#MessageContent').val('');

            })


            \$('#sendInvite').click(
                function () {

                    \$.ajax({
                        url: \"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SendInvite");
        echo "\",
                        method: \"post\",
                        data : {idCompte : ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
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
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <!-- PLUGINS -->
    <link href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- THEME CSS -->
    <link href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/chat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/css/SideNav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"fixed-header\">
<header>
    <div class=\"container\">
        <span class=\"bar hide\"></span>
        <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        <nav>
            <div class=\"nav-control\">
                <ul>
                    <li class=\"\">
                        <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\" class=\"\">Forum</a>
                        <!--<ul class=\"dropdown-menu default\">
                                    <li><a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">View All Tournaments</a></li>
                                </ul>-->
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Tournaments</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => 1));
        echo "\">View All Tournaments</a></li>
                            ";
        // line 132
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 133
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
            echo "\">Create Tournament</a> </li>
                            ";
        }
        // line 135
        echo "                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Events</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\"><i class=\"fa fa-newspaper-o\"></i> Check Our Events</a></li>
                            <li><a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calender");
        echo "\"><i class=\"fa fa-calendar\"></i> Calender</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\">Shop</a>
                        <ul class=\"dropdown-menu default\">
                            <li><a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\"><i class=\"fa fa-shopping-bag\"></i>View All Products</a></li>
                            <li><a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_new");
        echo "\"><i class=\"fa fa-plus\"></i>Post You Product</a></li>
                        </ul>
                    </li>
                    <li class=\"custom\"><a href=\"";
        // line 152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("streaming_all");
        echo "\"><i class=\"fa fa-eye\" ></i>Streaming</a></li>
                    <!-- <li><a href=\"\">Contact</a></li>-->
                </ul>
            </div>
        </nav>
        <div class=\"nav-right\">
            ";
        // line 158
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) == null)) {
            // line 159
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/img/login.png"), "html", null, true);
            echo "\" alt=\"\"> <span>Connect to you account</span></a>

                </div>

            ";
        } else {
            // line 165
            echo "                ";
            $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
            // line 166
            echo "                <div class=\"nav-profile dropdown\">
                    <a href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddProduct_page");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
            echo "\" alt=\"\"> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "pseudo", array()), "html", null, true);
            echo "</span></a>

                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 170
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myProfile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a></li>
                        <li><a href=\"";
            // line 171
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editAccount");
            echo "\"><i class=\"fa fa-gear\"></i> Settings</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 173
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SignOut");
            echo "\"><i class=\"fa fa-power-off\"></i> Sign Out</a></li>
                    </ul>

                </div>
                <div id=\"nots2\" class=\"nav-dropdown dropdown\">

                    ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Notification:NotificationlistRender"));
            echo "
                    ";
            // line 187
            echo "                    </ul>
                </div>

            ";
        }
        // line 191
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
        // line 224
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
        // line 261
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) != null)) {
            // line 262
            echo "                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 14px;padding: 5px\">
                        <form id=\"msg\" action=\"";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postmsg");
            echo "\" method=\"post\">
                            <label for=\"chatMessage\" style=\"color: ghostwhite;\">Type message</label>
                            <input type=\"text\" autocomplete=\"off\" name=\"message\" id=\"chatMessage\" />
                            <input type=\"submit\" value=\"submit\" class=\"btn-primary\" />
                        </form>
                    </div>
                </div>

                ";
            // line 277
            echo "

            ";
        } else {
            // line 280
            echo "                <div style=\"max-width: 380px; overflow-wrap: break-word;background-color: #1e347b;z-index: 99999\">
                    <div style=\"margin: 3px;font-size: 15px;padding: 5px\">
                        <h5 style=\"display: inline;color: #9fbfdf\">If you want to contribute to the chat and help interract with our members please login <a  href=\"";
            // line 282
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_login_homepage");
            echo "\" style=\"display: inline-block;font-size: 15px\"> here </a></h5>
                    </div>
                </div>

            ";
        }
        // line 287
        echo "        </div>
        <div id=\"renderedChat\" style=\"position: relative;width: 350px;z-index: -1\" >
            ";
        // line 289
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Compte:listRender"));
        echo "
        </div>


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
        // line 304
        if ((($context["attenteInvite"] ?? $this->getContext($context, "attenteInvite")) == 1)) {
            // line 305
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Invite is being treated\">
                    ";
        } elseif ((        // line 306
($context["dejaAmi"] ?? $this->getContext($context, "dejaAmi")) == false)) {
            // line 307
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" id=\"sendInvite\" value=\"Send friend request\">
                    ";
        } else {
            // line 309
            echo "                        <input type=\"button\" class=\"btn btn-info btn-sm\" disabled value=\"Already friends\">
                    ";
        }
        // line 311
        echo "                    <br>
                    ";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "
                </div>
                <div class=\"profile-avatar\">
                    <div class=\"thumbnail\" data-toggle=\"tooltip\" title=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "\">
                        <a href=\"profile.html#\">
                            <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "image", array()), "html", null, true);
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
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
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
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-calendar\"></i> Born ";
        // line 344
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "DateDeNaissance", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Points ";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "points", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    ";
        // line 352
        $context["x"] = 0;
        // line 353
        echo "
                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ProfileCompteFriends"] ?? $this->getContext($context, "ProfileCompteFriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["amiProfile"]) {
            // line 355
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["CurrentCompteFriends"] ?? $this->getContext($context, "CurrentCompteFriends")));
            foreach ($context['_seq'] as $context["_key"] => $context["amiCurrent"]) {
                // line 356
                echo "                            ";
                if (($context["amiProfile"] == $context["amiCurrent"])) {
                    // line 357
                    echo "                                ";
                    $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                    // line 358
                    echo "                            ";
                }
                // line 359
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiCurrent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiProfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends in commun (";
        // line 363
        echo twig_escape_filter($this->env, ($context["x"] ?? $this->getContext($context, "x")), "html", null, true);
        echo ")</div>
                            <div class=\"panel-body\">
                                <ul>
                                    ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ProfileCompteFriends"] ?? $this->getContext($context, "ProfileCompteFriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["amiProfile"]) {
            // line 367
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["CurrentCompteFriends"] ?? $this->getContext($context, "CurrentCompteFriends")));
            foreach ($context['_seq'] as $context["_key"] => $context["amiCurrent"]) {
                // line 368
                echo "                                            ";
                if (($context["amiProfile"] == $context["amiCurrent"])) {
                    // line 369
                    echo "                                                ";
                    $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                    // line 370
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($context["amiProfile"], "idCompte", array()))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "pseudo", array()), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "image", array()), "html", null, true);
                    echo "\" alt=\"\"></a></li>
                                                ";
                    // line 371
                    echo twig_escape_filter($this->env, $this->getAttribute($context["amiProfile"], "pseudo", array()), "html", null, true);
                    echo " <br>
                                            ";
                }
                // line 373
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiCurrent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amiProfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
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
                                    ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 388
            echo "                                        <li>
                                            <a href=\"";
            // line 389
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                                            <div class=\"widget-list-meta\">
                                                <h4 class=\"widget-list-title\"><a href=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>
                                                <p><i class=\"fa fa-clock-o\"></i> ";
            // line 392
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["post"], "date", array()));
            echo "</p>
                                            </div>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-9 col-sm-8\">
                    <div class=\"panel panel-default margin-bottom-40\">

                        <div class=\"panel-body\">
                            <input type=\"text\" name=\"id\" value=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "idCompte", array()), "html", null, true);
        echo "\" hidden>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" id=\"MessageContent\" rows=\"4\" placeholder=\"Wanna get to know the user more ??? send him a mssage 😛...\"></textarea>
                            </div>
                            <div class=\"btn-group pull-left\">
                                <a class=\"btn btn-link btn-icon-left no-padding-left\"><i class=\"fa fa-smile-o\"></i> Send a message to ";
        // line 411
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? $this->getContext($context, "userInfo")), "pseudo", array()), "html", null, true);
        echo "</a>

                            </div>
                            <button type=\"button\" id=\"SendMessageBtn\" class=\"btn btn-primary btn-icon-left pull-right\"><i class=\"fa fa-edit\"></i> Submit</button>
                        </div>

                    </div>

                    ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter(($context["activitiesTotal"] ?? $this->getContext($context, "activitiesTotal")), "date")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 420
            echo "                        ";
            if (($this->getAttribute($context["item"], "idCommentaire", array(), "any", true, true) && array_key_exists("item", $context))) {
                // line 421
                echo "                            <div class=\"post\">
                                <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Commented ";
                // line 422
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
                                <div class=\"panel panel-default panel-post\">
                                    <div class=\"panel-body\">
                                        <div class=\"post\">
                                            <div class=\"post-header post-author\">
                                                <a href=\"";
                // line 427
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "idCompte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
                                                <div class=\"post-title\">
                                                    <h3><a href=\"";
                // line 429
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "titre", array()), "html", null, true);
                echo "</a></h3>
                                                    <ul class=\"post-meta\">
                                                        <li><i class=\"fa fa-calendar-o\"></i> ";
                // line 431
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "date", array())), "html", null, true);
                echo "</li>
                                                        <li> Category : ";
                // line 432
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        ";
                // line 436
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idPostCp", array()), "sujet", array()), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                    <div class=\"panel-footer\">
                                        <ul class=\"post-action\">
                                            ";
                // line 441
                $context["x"] = 0;
                // line 442
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
                foreach ($context['_seq'] as $context["_key"] => $context["nbrCommentaire"]) {
                    // line 443
                    echo "                                                ";
                    if (($this->getAttribute($context["nbrCommentaire"], "idPostCp", array()) == $this->getAttribute($context["item"], "idPostCp", array()))) {
                        // line 444
                        echo "                                                    ";
                        $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                        // line 445
                        echo "                                                ";
                    }
                    // line 446
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrCommentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 447
                echo "                                            <li><i class=\"fa fa-comments\"></i> Comments (";
                echo twig_escape_filter($this->env, ($context["x"] ?? $this->getContext($context, "x")), "html", null, true);
                echo ") </li>
                                            ";
                // line 448
                $context["x"] = 0;
                // line 449
                echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
            } else {
                // line 454
                echo "                            <div class=\"post\">
                                    <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Created a post ";
                // line 455
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["item"], "date", array()));
                echo " </h4>
                                    <div class=\"panel panel-default panel-post\">
                                        <div class=\"panel-body\">
                                            <div class=\"post\">
                                                <div class=\"post-header post-author\">
                                                    <a href=\"";
                // line 460
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "idCOmpte", array()))), "html", null, true);
                echo "\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "idComptePost", array()), "image", array()), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    <div class=\"post-title\">
                                                        <h3><a href=\"";
                // line 462
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["item"], "idPost", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
                echo "</a></h3>
                                                        <ul class=\"post-meta\">
                                                            <li><i class=\"fa fa-calendar-o\"></i> ";
                // line 464
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array())), "html", null, true);
                echo "</li>
                                                            <li> Category : ";
                // line 465
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "cathegorieSpecifique", array()), "nom", array()), "html", null, true);
                echo "</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                ";
                // line 469
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sujet", array()), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                        <div class=\"panel-footer\">
                                            <ul class=\"post-action\">
                                                ";
                // line 474
                $context["x"] = 0;
                // line 475
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
                foreach ($context['_seq'] as $context["_key"] => $context["nbrCommentaire"]) {
                    // line 476
                    echo "                                                    ";
                    if (($this->getAttribute($context["nbrCommentaire"], "idPostCp", array()) == $context["item"])) {
                        // line 477
                        echo "                                                        ";
                        $context["x"] = (($context["x"] ?? $this->getContext($context, "x")) + 1);
                        // line 478
                        echo "                                                    ";
                    }
                    // line 479
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrCommentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 480
                echo "                                                <li><i class=\"fa fa-comments\"></i> Comments (";
                echo twig_escape_filter($this->env, ($context["x"] ?? $this->getContext($context, "x")), "html", null, true);
                echo ") </li>
                                                ";
                // line 481
                $context["x"] = 0;
                // line 482
                echo "                                            </ul>
                                        </div>
                                    </div>
                            <div class=\"post\">
                        ";
            }
            // line 487
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "



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
<script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("FOassets/js/core.min.js"), "html", null, true);
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
        
        $__internal_c3e8e29f84cf6f6354c25401996976915796e484ff6a350024ba14fa97069b6d->leave($__internal_c3e8e29f84cf6f6354c25401996976915796e484ff6a350024ba14fa97069b6d_prof);

        
        $__internal_7658985953a314d821aefbd0c519181980552c6763075936bfd1928a6eb6d431->leave($__internal_7658985953a314d821aefbd0c519181980552c6763075936bfd1928a6eb6d431_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Compte:userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  940 => 561,  936 => 560,  932 => 559,  859 => 488,  853 => 487,  846 => 482,  844 => 481,  839 => 480,  833 => 479,  830 => 478,  827 => 477,  824 => 476,  819 => 475,  817 => 474,  809 => 469,  802 => 465,  798 => 464,  791 => 462,  784 => 460,  776 => 455,  773 => 454,  766 => 449,  764 => 448,  759 => 447,  753 => 446,  750 => 445,  747 => 444,  744 => 443,  739 => 442,  737 => 441,  729 => 436,  722 => 432,  718 => 431,  711 => 429,  704 => 427,  696 => 422,  693 => 421,  690 => 420,  686 => 419,  675 => 411,  667 => 406,  655 => 396,  645 => 392,  639 => 391,  632 => 389,  629 => 388,  625 => 387,  611 => 375,  605 => 374,  599 => 373,  594 => 371,  585 => 370,  582 => 369,  579 => 368,  574 => 367,  570 => 366,  564 => 363,  560 => 361,  554 => 360,  548 => 359,  545 => 358,  542 => 357,  539 => 356,  534 => 355,  530 => 354,  527 => 353,  525 => 352,  515 => 345,  511 => 344,  493 => 329,  478 => 317,  473 => 315,  467 => 312,  464 => 311,  460 => 309,  456 => 307,  454 => 306,  451 => 305,  449 => 304,  431 => 289,  427 => 287,  419 => 282,  415 => 280,  410 => 277,  399 => 264,  395 => 262,  393 => 261,  353 => 224,  318 => 191,  312 => 187,  308 => 179,  299 => 173,  294 => 171,  290 => 170,  280 => 167,  277 => 166,  274 => 165,  264 => 160,  261 => 159,  259 => 158,  250 => 152,  244 => 149,  240 => 148,  230 => 141,  226 => 140,  219 => 135,  213 => 133,  211 => 132,  207 => 131,  198 => 125,  193 => 123,  183 => 118,  173 => 111,  169 => 110,  165 => 109,  161 => 108,  155 => 105,  148 => 101,  144 => 100,  118 => 77,  113 => 75,  82 => 47,  74 => 42,  64 => 35,  59 => 33,  25 => 1,);
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
    <title>GameInjection - {{ userInfo.pseudo }}'s Profile</title>

    <script type=\"text/javascript\" src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <script>
        \$(document).ready(function () {

            \$('#SendMessageBtn').click( function (e) {

                var msg =\$('#MessageContent').val();
                var idEnv = {{ userInfo.idCompte }} ;
                if(msg != '')
                {

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

            }
            else
                {
                    alert(\"Please insert the text to send \");
                }

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
    <link href=\"{{ asset('FOassets/css/theme.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('FOassets/css/custom.css') }}\" rel=\"stylesheet\">
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
                                <ul class=\"panel-list margin-top-25\">
                                    <li><i class=\"fa fa-calendar\"></i> Born {{ userInfo.DateDeNaissance | date }}</li>
                                    <li><i class=\"fa fa-chain-broken\"></i> Points {{ userInfo.points }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    {% set x=0 %}

                    {% for amiProfile in ProfileCompteFriends %}
                        {% for amiCurrent in CurrentCompteFriends  %}
                            {% if amiProfile == amiCurrent %}
                                {% set x=x+1 %}
                            {% endif %}
                        {% endfor %}
                    {% endfor %}
                    <div class=\"widget widget-friends\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Friends in commun ({{ x }})</div>
                            <div class=\"panel-body\">
                                <ul>
                                    {% for amiProfile in ProfileCompteFriends %}
                                        {% for amiCurrent in CurrentCompteFriends  %}
                                            {% if amiProfile == amiCurrent %}
                                                {% set x=x+1 %}
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
                                    {% for post in posts | reverse | slice(0,5) %}
                                        <li>
                                            <a href=\"{{ path('userProfile',{ id : post.idComptePost.idCompte}) }}\" class=\"thumb\"><img src=\"{{ post.idComptePost.image }}\" alt=\"\"></a>
                                            <div class=\"widget-list-meta\">
                                                <h4 class=\"widget-list-title\"><a href=\"{{ path('readPost',{ idPost : post.idPost}) }}\">{{ post.titre }}</a></h4>
                                                <p><i class=\"fa fa-clock-o\"></i> {{ post.date | ago }}</p>
                                            </div>
                                        </li>
                                    {% endfor %}
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
                        {% if item.idCommentaire is defined and item is defined %}
                            <div class=\"post\">
                                <h4 class=\"page-header text-center no-padding\"><i class=\"fa fa-clock-o\"></i>Commented {{ item.date|ago }} </h4>
                                <div class=\"panel panel-default panel-post\">
                                    <div class=\"panel-body\">
                                        <div class=\"post\">
                                            <div class=\"post-header post-author\">
                                                <a href=\"{{ path('userProfile',{id : item.idPostCp.idComptePost.idCompte}) }}\" class=\"author\" data-toggle=\"tooltip\" title=\"YAKUZI\"><img src=\"{{ item.idPostCp.idComptePost.image }}\" alt=\"\"></a>
                                                <div class=\"post-title\">
                                                    <h3><a href=\"{{ path('readPost', { idPost : item.idPostCp.idPost}) }}\">{{ item.idPostCp.titre }}</a></h3>
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
                                            {% set x=0 %}
                                            {% for nbrCommentaire in comments %}
                                                {% if nbrCommentaire.idPostCp == item.idPostCp %}
                                                    {% set x=x+1 %}
                                                {% endif %}
                                            {% endfor %}
                                            <li><i class=\"fa fa-comments\"></i> Comments ({{ x }}) </li>
                                            {% set x=0 %}
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
                                                        <h3><a href=\"{{ path('readPost', { idPost : item.idPost}) }}\">{{ item.titre }}</a></h3>
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
                                                {% set x=0 %}
                                                {% for nbrCommentaire in comments %}
                                                    {% if nbrCommentaire.idPostCp == item %}
                                                        {% set x=x+1 %}
                                                    {% endif %}
                                                {% endfor %}
                                                <li><i class=\"fa fa-comments\"></i> Comments ({{ x }}) </li>
                                                {% set x=0 %}
                                            </ul>
                                        </div>
                                    </div>
                            <div class=\"post\">
                        {% endif %}
                    {% endfor %}




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
<script src=\"{{ asset('FOassets/plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
<script src=\"{{ asset('FOassets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('FOassets/js/core.min.js') }}\"></script>
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
</html>", "EloboostedFrontofficeBundle:Compte:userProfile.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Compte/userProfile.html.twig");
    }
}
