<?php

/* EloboostedBackofficeBundle:Default:Layout.html.twig */
class __TwigTemplate_a1ae2fcabc19a4ac0ef7d0a134e186f66587ca6df7a766c6d1aec7171e1ea0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extrastyles' => array($this, 'block_extrastyles'),
            'sousmenu1' => array($this, 'block_sousmenu1'),
            'sousmenu2' => array($this, 'block_sousmenu2'),
            'sousmenu3' => array($this, 'block_sousmenu3'),
            'sousmenu4' => array($this, 'block_sousmenu4'),
            'sousmenu5' => array($this, 'block_sousmenu5'),
            'sousmenu6' => array($this, 'block_sousmenu6'),
            'insiderowcenter' => array($this, 'block_insiderowcenter'),
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
            'extrascript' => array($this, 'block_extrascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67471b4102042fac00d2d39a3c317cc2466e83a3a12b761f9d45edad04606bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67471b4102042fac00d2d39a3c317cc2466e83a3a12b761f9d45edad04606bba->enter($__internal_67471b4102042fac00d2d39a3c317cc2466e83a3a12b761f9d45edad04606bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

        $__internal_a8f88d5a737fcb21bba402dc4db2d4d8581fbfdf38db6970c94a94cc7cf278c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f88d5a737fcb21bba402dc4db2d4d8581fbfdf38db6970c94a94cc7cf278c7->enter($__internal_a8f88d5a737fcb21bba402dc4db2d4d8581fbfdf38db6970c94a94cc7cf278c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/build/css/custom.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">

    ";
        // line 32
        $this->displayBlock('extrastyles', $context, $blocks);
        // line 35
        echo "</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_homepage");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>GameInjection !</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        ";
        // line 51
        $context["foo"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "image", array());
        // line 52
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Account & reports <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AccountReports");
        echo "\">Manage accounts and reports</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-edit\"></i> Tournaments <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_tournoi");
        echo "\">Tournaments List</a></li>
                                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_tournoi_new");
        echo "\">New Tournament</a></li>
                                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_gamelist_index");
        echo "\">Supported Game List</a></li>
                                    <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_gamelist_new");
        echo "\">Add Supported Game </a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> Forum <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addcategorypost");
        echo "\">Add new category</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Product Categories <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_index");
        echo "\">All Categories</a></li>
                                    <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_new");
        echo "\">Add a new Category</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-empire\"></i> Events <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_new");
        echo "\">Add a new Event</a></li>
                                    <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index");
        echo "\">View all Events</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-gamepad\"></i> Games <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_NewGame");
        echo "\">Add New Game</a></li>
                                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_games");
        echo "\">Games List</a></li>
                                    <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_addCathegorie");
        echo "\">Add Cathegory</a></li>
                                    <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_cathegorieList");
        echo "\">Cathegory List</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"#\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <nav>
                    <div class=\"nav toggle\">
                        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                    </div>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\">
                            <a href=\"#\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["foo"] ?? $this->getContext($context, "foo")), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role=\"presentation\" class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"text-center\">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <!-- top tiles -->
            <div class=\"row tile_count\">

                <!-- Sous Menu -->
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 239
        $this->displayBlock('sousmenu1', $context, $blocks);
        // line 241
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 244
        $this->displayBlock('sousmenu2', $context, $blocks);
        // line 246
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 249
        $this->displayBlock('sousmenu3', $context, $blocks);
        // line 251
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 254
        $this->displayBlock('sousmenu4', $context, $blocks);
        // line 256
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 259
        $this->displayBlock('sousmenu5', $context, $blocks);
        // line 261
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 264
        $this->displayBlock('sousmenu6', $context, $blocks);
        // line 266
        echo "                </div>

            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                ";
        // line 272
        $this->displayBlock('insiderowcenter', $context, $blocks);
        // line 274
        echo "            </div>
            <br />

            <div class=\"row\">
                ";
        // line 278
        $this->displayBlock('insiderowbottom', $context, $blocks);
        // line 280
        echo "
            </div>


            <div class=\"row\">

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                Website Realised By EloBoosted Group :)
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- NProgress -->
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<!-- Chart.js -->
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- gauge.js -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-progressbar -->
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<!-- Skycons -->
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
<!-- Flot -->
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<!-- Flot plugins -->
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
<!-- DateJS -->
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme Scripts -->
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 341
        $this->displayBlock('extrascript', $context, $blocks);
        // line 344
        echo "</body>
</html>
";
        
        $__internal_67471b4102042fac00d2d39a3c317cc2466e83a3a12b761f9d45edad04606bba->leave($__internal_67471b4102042fac00d2d39a3c317cc2466e83a3a12b761f9d45edad04606bba_prof);

        
        $__internal_a8f88d5a737fcb21bba402dc4db2d4d8581fbfdf38db6970c94a94cc7cf278c7->leave($__internal_a8f88d5a737fcb21bba402dc4db2d4d8581fbfdf38db6970c94a94cc7cf278c7_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_19b3d3d9dda3ad57d7a8845f468f6a83a8e7f7f6ea6c8ac1a28787abf01db06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b3d3d9dda3ad57d7a8845f468f6a83a8e7f7f6ea6c8ac1a28787abf01db06f->enter($__internal_19b3d3d9dda3ad57d7a8845f468f6a83a8e7f7f6ea6c8ac1a28787abf01db06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee37dba1ef8f2a4401d70f7ceeb7f82a41279440c64228647b1d442bf67e99dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee37dba1ef8f2a4401d70f7ceeb7f82a41279440c64228647b1d442bf67e99dc->enter($__internal_ee37dba1ef8f2a4401d70f7ceeb7f82a41279440c64228647b1d442bf67e99dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " GameInjection Administration | ";
        
        $__internal_ee37dba1ef8f2a4401d70f7ceeb7f82a41279440c64228647b1d442bf67e99dc->leave($__internal_ee37dba1ef8f2a4401d70f7ceeb7f82a41279440c64228647b1d442bf67e99dc_prof);

        
        $__internal_19b3d3d9dda3ad57d7a8845f468f6a83a8e7f7f6ea6c8ac1a28787abf01db06f->leave($__internal_19b3d3d9dda3ad57d7a8845f468f6a83a8e7f7f6ea6c8ac1a28787abf01db06f_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_49361dc4ed25cdc867d232c061568572d146d8869efea8afff44ab741957244c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49361dc4ed25cdc867d232c061568572d146d8869efea8afff44ab741957244c->enter($__internal_49361dc4ed25cdc867d232c061568572d146d8869efea8afff44ab741957244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_583ed64322f10198dc571bb5d27aa375c990686812a68eb389404f38200dcf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583ed64322f10198dc571bb5d27aa375c990686812a68eb389404f38200dcf0b->enter($__internal_583ed64322f10198dc571bb5d27aa375c990686812a68eb389404f38200dcf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_583ed64322f10198dc571bb5d27aa375c990686812a68eb389404f38200dcf0b->leave($__internal_583ed64322f10198dc571bb5d27aa375c990686812a68eb389404f38200dcf0b_prof);

        
        $__internal_49361dc4ed25cdc867d232c061568572d146d8869efea8afff44ab741957244c->leave($__internal_49361dc4ed25cdc867d232c061568572d146d8869efea8afff44ab741957244c_prof);

    }

    // line 239
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_840b43f61c98ccf7386c96be6ca24b86badb6f92a09a43f08aae8eab627db104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840b43f61c98ccf7386c96be6ca24b86badb6f92a09a43f08aae8eab627db104->enter($__internal_840b43f61c98ccf7386c96be6ca24b86badb6f92a09a43f08aae8eab627db104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_627b69e913247e98bcdc41b25e515e374d8778e6fcbc7a1b3f7a1116e105c6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627b69e913247e98bcdc41b25e515e374d8778e6fcbc7a1b3f7a1116e105c6f1->enter($__internal_627b69e913247e98bcdc41b25e515e374d8778e6fcbc7a1b3f7a1116e105c6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 240
        echo "                    ";
        
        $__internal_627b69e913247e98bcdc41b25e515e374d8778e6fcbc7a1b3f7a1116e105c6f1->leave($__internal_627b69e913247e98bcdc41b25e515e374d8778e6fcbc7a1b3f7a1116e105c6f1_prof);

        
        $__internal_840b43f61c98ccf7386c96be6ca24b86badb6f92a09a43f08aae8eab627db104->leave($__internal_840b43f61c98ccf7386c96be6ca24b86badb6f92a09a43f08aae8eab627db104_prof);

    }

    // line 244
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_8bcef9f0c861a9e512ac561bfe841953edce6c8ef7b7f6a81e9c3dde984eb9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcef9f0c861a9e512ac561bfe841953edce6c8ef7b7f6a81e9c3dde984eb9d3->enter($__internal_8bcef9f0c861a9e512ac561bfe841953edce6c8ef7b7f6a81e9c3dde984eb9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_042671d7ff43ff46bcd9df10112c78db83ccfe520e741ca0ad024cd8bb6c7cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042671d7ff43ff46bcd9df10112c78db83ccfe520e741ca0ad024cd8bb6c7cbe->enter($__internal_042671d7ff43ff46bcd9df10112c78db83ccfe520e741ca0ad024cd8bb6c7cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 245
        echo "                    ";
        
        $__internal_042671d7ff43ff46bcd9df10112c78db83ccfe520e741ca0ad024cd8bb6c7cbe->leave($__internal_042671d7ff43ff46bcd9df10112c78db83ccfe520e741ca0ad024cd8bb6c7cbe_prof);

        
        $__internal_8bcef9f0c861a9e512ac561bfe841953edce6c8ef7b7f6a81e9c3dde984eb9d3->leave($__internal_8bcef9f0c861a9e512ac561bfe841953edce6c8ef7b7f6a81e9c3dde984eb9d3_prof);

    }

    // line 249
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_417bed392b378f7b64781f59bbe5adf4a28e28f7afcbeccb9c28a735e015fed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417bed392b378f7b64781f59bbe5adf4a28e28f7afcbeccb9c28a735e015fed5->enter($__internal_417bed392b378f7b64781f59bbe5adf4a28e28f7afcbeccb9c28a735e015fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_d009fec94309d66098f3656fe4857d2f60a32cec61eb8599353a7183afa63683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d009fec94309d66098f3656fe4857d2f60a32cec61eb8599353a7183afa63683->enter($__internal_d009fec94309d66098f3656fe4857d2f60a32cec61eb8599353a7183afa63683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 250
        echo "                    ";
        
        $__internal_d009fec94309d66098f3656fe4857d2f60a32cec61eb8599353a7183afa63683->leave($__internal_d009fec94309d66098f3656fe4857d2f60a32cec61eb8599353a7183afa63683_prof);

        
        $__internal_417bed392b378f7b64781f59bbe5adf4a28e28f7afcbeccb9c28a735e015fed5->leave($__internal_417bed392b378f7b64781f59bbe5adf4a28e28f7afcbeccb9c28a735e015fed5_prof);

    }

    // line 254
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_7ac3bdd564e5a8eb61d5987eb23ddff7219fdb25af0e50c6e593b755f456f95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac3bdd564e5a8eb61d5987eb23ddff7219fdb25af0e50c6e593b755f456f95f->enter($__internal_7ac3bdd564e5a8eb61d5987eb23ddff7219fdb25af0e50c6e593b755f456f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_1bb5fa398a5c2f37c59c2d9377eb1db4c4a97a7f56c79a48bd9f92a7b2507dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb5fa398a5c2f37c59c2d9377eb1db4c4a97a7f56c79a48bd9f92a7b2507dc7->enter($__internal_1bb5fa398a5c2f37c59c2d9377eb1db4c4a97a7f56c79a48bd9f92a7b2507dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 255
        echo "                    ";
        
        $__internal_1bb5fa398a5c2f37c59c2d9377eb1db4c4a97a7f56c79a48bd9f92a7b2507dc7->leave($__internal_1bb5fa398a5c2f37c59c2d9377eb1db4c4a97a7f56c79a48bd9f92a7b2507dc7_prof);

        
        $__internal_7ac3bdd564e5a8eb61d5987eb23ddff7219fdb25af0e50c6e593b755f456f95f->leave($__internal_7ac3bdd564e5a8eb61d5987eb23ddff7219fdb25af0e50c6e593b755f456f95f_prof);

    }

    // line 259
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_0bdbd22295651cc25ad561cf457bbe6eeb9465b87abfc0c135cabc4a4ca299b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdbd22295651cc25ad561cf457bbe6eeb9465b87abfc0c135cabc4a4ca299b7->enter($__internal_0bdbd22295651cc25ad561cf457bbe6eeb9465b87abfc0c135cabc4a4ca299b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_fcb8f0cd6716fbddeaf9590416c206cd0b10df6e782ad71aad27b173f9eec06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb8f0cd6716fbddeaf9590416c206cd0b10df6e782ad71aad27b173f9eec06c->enter($__internal_fcb8f0cd6716fbddeaf9590416c206cd0b10df6e782ad71aad27b173f9eec06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 260
        echo "                    ";
        
        $__internal_fcb8f0cd6716fbddeaf9590416c206cd0b10df6e782ad71aad27b173f9eec06c->leave($__internal_fcb8f0cd6716fbddeaf9590416c206cd0b10df6e782ad71aad27b173f9eec06c_prof);

        
        $__internal_0bdbd22295651cc25ad561cf457bbe6eeb9465b87abfc0c135cabc4a4ca299b7->leave($__internal_0bdbd22295651cc25ad561cf457bbe6eeb9465b87abfc0c135cabc4a4ca299b7_prof);

    }

    // line 264
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_80bcc01490bd0233a9c3c7a3201c43b92f4f37750c42262de862a1094ae1872b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bcc01490bd0233a9c3c7a3201c43b92f4f37750c42262de862a1094ae1872b->enter($__internal_80bcc01490bd0233a9c3c7a3201c43b92f4f37750c42262de862a1094ae1872b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_75b21e9fa7c3c0f90504ea0d8c1e6fd61bae5b87ed4cf0d7fd9db6f0c0d83c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b21e9fa7c3c0f90504ea0d8c1e6fd61bae5b87ed4cf0d7fd9db6f0c0d83c05->enter($__internal_75b21e9fa7c3c0f90504ea0d8c1e6fd61bae5b87ed4cf0d7fd9db6f0c0d83c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 265
        echo "                    ";
        
        $__internal_75b21e9fa7c3c0f90504ea0d8c1e6fd61bae5b87ed4cf0d7fd9db6f0c0d83c05->leave($__internal_75b21e9fa7c3c0f90504ea0d8c1e6fd61bae5b87ed4cf0d7fd9db6f0c0d83c05_prof);

        
        $__internal_80bcc01490bd0233a9c3c7a3201c43b92f4f37750c42262de862a1094ae1872b->leave($__internal_80bcc01490bd0233a9c3c7a3201c43b92f4f37750c42262de862a1094ae1872b_prof);

    }

    // line 272
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_3e334478ad9cb849c77d036cf2ade5c177ea1c28193219fffe563d8cfa4f169a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e334478ad9cb849c77d036cf2ade5c177ea1c28193219fffe563d8cfa4f169a->enter($__internal_3e334478ad9cb849c77d036cf2ade5c177ea1c28193219fffe563d8cfa4f169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_27b0493a82338e7b20a6c02c1da5a9b24aff15f476fafe8e828d23f49a143ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0493a82338e7b20a6c02c1da5a9b24aff15f476fafe8e828d23f49a143ea8->enter($__internal_27b0493a82338e7b20a6c02c1da5a9b24aff15f476fafe8e828d23f49a143ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 273
        echo "                ";
        
        $__internal_27b0493a82338e7b20a6c02c1da5a9b24aff15f476fafe8e828d23f49a143ea8->leave($__internal_27b0493a82338e7b20a6c02c1da5a9b24aff15f476fafe8e828d23f49a143ea8_prof);

        
        $__internal_3e334478ad9cb849c77d036cf2ade5c177ea1c28193219fffe563d8cfa4f169a->leave($__internal_3e334478ad9cb849c77d036cf2ade5c177ea1c28193219fffe563d8cfa4f169a_prof);

    }

    // line 278
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_7bf8def1b496f7f4b9a34fd136ec64477d6e3d9ca63dd5cd734d2bbcd485c08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf8def1b496f7f4b9a34fd136ec64477d6e3d9ca63dd5cd734d2bbcd485c08c->enter($__internal_7bf8def1b496f7f4b9a34fd136ec64477d6e3d9ca63dd5cd734d2bbcd485c08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_61d058aff995740c505e761feafada0e141f99bb5866e40dd68b085d1adb7f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d058aff995740c505e761feafada0e141f99bb5866e40dd68b085d1adb7f5f->enter($__internal_61d058aff995740c505e761feafada0e141f99bb5866e40dd68b085d1adb7f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 279
        echo "                ";
        
        $__internal_61d058aff995740c505e761feafada0e141f99bb5866e40dd68b085d1adb7f5f->leave($__internal_61d058aff995740c505e761feafada0e141f99bb5866e40dd68b085d1adb7f5f_prof);

        
        $__internal_7bf8def1b496f7f4b9a34fd136ec64477d6e3d9ca63dd5cd734d2bbcd485c08c->leave($__internal_7bf8def1b496f7f4b9a34fd136ec64477d6e3d9ca63dd5cd734d2bbcd485c08c_prof);

    }

    // line 341
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_4cdfd767c3839b6b9d8183d82e8fa87da32507fbc0bfa7af3d66360d33e7109f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdfd767c3839b6b9d8183d82e8fa87da32507fbc0bfa7af3d66360d33e7109f->enter($__internal_4cdfd767c3839b6b9d8183d82e8fa87da32507fbc0bfa7af3d66360d33e7109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_2848fb5a697208b5e8021922920aede90b70de6f245875e858a8a08c23af52e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2848fb5a697208b5e8021922920aede90b70de6f245875e858a8a08c23af52e6->enter($__internal_2848fb5a697208b5e8021922920aede90b70de6f245875e858a8a08c23af52e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 342
        echo "
";
        
        $__internal_2848fb5a697208b5e8021922920aede90b70de6f245875e858a8a08c23af52e6->leave($__internal_2848fb5a697208b5e8021922920aede90b70de6f245875e858a8a08c23af52e6_prof);

        
        $__internal_4cdfd767c3839b6b9d8183d82e8fa87da32507fbc0bfa7af3d66360d33e7109f->leave($__internal_4cdfd767c3839b6b9d8183d82e8fa87da32507fbc0bfa7af3d66360d33e7109f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 342,  767 => 341,  757 => 279,  748 => 278,  738 => 273,  729 => 272,  719 => 265,  710 => 264,  700 => 260,  691 => 259,  681 => 255,  672 => 254,  662 => 250,  653 => 249,  643 => 245,  634 => 244,  624 => 240,  615 => 239,  604 => 33,  595 => 32,  577 => 11,  565 => 344,  563 => 341,  559 => 340,  553 => 337,  549 => 336,  544 => 334,  540 => 333,  536 => 332,  531 => 330,  526 => 328,  522 => 327,  518 => 326,  513 => 324,  509 => 323,  505 => 322,  501 => 321,  497 => 320,  492 => 318,  487 => 316,  482 => 314,  477 => 312,  472 => 310,  467 => 308,  462 => 306,  457 => 304,  452 => 302,  428 => 280,  426 => 278,  420 => 274,  418 => 272,  410 => 266,  408 => 264,  403 => 261,  401 => 259,  396 => 256,  394 => 254,  389 => 251,  387 => 249,  382 => 246,  380 => 244,  375 => 241,  373 => 239,  337 => 206,  322 => 194,  307 => 182,  292 => 170,  263 => 146,  219 => 105,  215 => 104,  211 => 103,  207 => 102,  199 => 97,  195 => 96,  187 => 91,  183 => 90,  174 => 84,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  145 => 70,  128 => 56,  120 => 52,  118 => 51,  107 => 43,  97 => 35,  95 => 32,  90 => 30,  84 => 27,  79 => 25,  74 => 23,  68 => 20,  63 => 18,  58 => 16,  53 => 14,  47 => 11,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Eloboosted/BackofficeBundle/views/Default/Layout.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %} GameInjection Administration | {% endblock %}</title>

    <!-- Bootstrap -->
    <link href=\"{{ asset('BOassets/vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('BOassets/vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{ asset('BOassets/vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"{{ asset('BOassets/vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">

    <!-- bootstrap-progressbar -->
    <link href=\"{{ asset('BOassets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"{{ asset('BOassets/vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>
    <!-- bootstrap-daterangepicker -->
    <link href=\"{{ asset('BOassets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('BOassets/build/css/custom.min.css') }}\"  rel=\"stylesheet\">

    {% block extrastyles %}

    {% endblock %}
</head>

<body class=\"nav-md\">
<div class=\"container body\">
    <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <a href=\"{{ path('eloboosted_backoffice_homepage') }}\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>GameInjection !</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        {% set foo = app.user.image %}
                        <img src=\"{{ foo }}\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>{{ app.user.username }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">
                            <li><a><i class=\"fa fa-home\"></i> Account & reports <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('AccountReports') }}\">Manage accounts and reports</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-edit\"></i> Tournaments <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('eloboosted_backoffice_tournoi') }}\">Tournaments List</a></li>
                                    <li><a href=\"{{ path('eloboosted_backoffice_tournoi_new') }}\">New Tournament</a></li>
                                    <li><a href=\"{{ path('eloboosted_gamelist_index') }}\">Supported Game List</a></li>
                                    <li><a href=\"{{ path('eloboosted_gamelist_new') }}\">Add Supported Game </a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> Forum <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('addcategorypost') }}\">Add new category</a></li>

                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Product Categories <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('tcategorie_index') }}\">All Categories</a></li>
                                    <li><a href=\"{{ path('tcategorie_new') }}\">Add a new Category</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-empire\"></i> Events <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('tevenement_new') }}\">Add a new Event</a></li>
                                    <li><a href=\"{{ path('tevenement_index') }}\">View all Events</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-gamepad\"></i> Games <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('eloboosted_backoffice_NewGame') }}\">Add New Game</a></li>
                                    <li><a href=\"{{ path('eloboosted_backoffice_games') }}\">Games List</a></li>
                                    <li><a href=\"{{ path('eloboosted_backoffice_addCathegorie') }}\">Add Cathegory</a></li>
                                    <li><a href=\"{{ path('eloboosted_backoffice_cathegorieList') }}\">Cathegory List</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class=\"sidebar-footer hidden-small\">
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                        <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                        <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
                    </a>
                    <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"#\">
                        <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <nav>
                    <div class=\"nav toggle\">
                        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                    </div>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\">
                            <a href=\"#\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"{{ foo }}\" alt=\"\">{{ app.user.username }}
                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                <li><a href=\"javascript:;\"> Profile</a></li>
                                <li>
                                    <a href=\"javascript:;\">
                                        <span class=\"badge bg-red pull-right\">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href=\"javascript:;\">Help</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role=\"presentation\" class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"badge bg-green\">6</span>
                            </a>
                            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"{{ asset('BOassets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"{{ asset('BOassets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"{{ asset('BOassets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class=\"image\"><img src=\"{{ asset('BOassets/images/img.jpg') }}\" alt=\"Profile Image\" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"text-center\">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class=\"fa fa-angle-right\"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <!-- top tiles -->
            <div class=\"row tile_count\">

                <!-- Sous Menu -->
                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu1 %}
                    {% endblock %}
                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu2 %}
                    {% endblock %}
                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu3 %}
                    {% endblock %}
                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu4 %}
                    {% endblock %}
                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu5 %}
                    {% endblock %}
                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    {% block sousmenu6 %}
                    {% endblock %}
                </div>

            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                {% block insiderowcenter %}
                {% endblock %}
            </div>
            <br />

            <div class=\"row\">
                {% block insiderowbottom %}
                {% endblock %}

            </div>


            <div class=\"row\">

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                Website Realised By EloBoosted Group :)
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src=\"{{ asset('BOassets/vendors/jquery/dist/jquery.min.js') }}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('BOassets/vendors/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- FastClick -->
<script src=\"{{ asset('BOassets/vendors/fastclick/lib/fastclick.js') }}\"></script>
<!-- NProgress -->
<script src=\"{{ asset('BOassets/vendors/nprogress/nprogress.js') }}\"></script>
<!-- Chart.js -->
<script src=\"{{ asset('BOassets/vendors/Chart.js/dist/Chart.min.js') }}\"></script>
<!-- gauge.js -->
<script src=\"{{ asset('BOassets/vendors/gauge.js/dist/gauge.min.js') }}\"></script>
<!-- bootstrap-progressbar -->
<script src=\"{{ asset('BOassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('BOassets/vendors/iCheck/icheck.min.js') }}\"></script>
<!-- Skycons -->
<script src=\"{{ asset('BOassets/vendors/skycons/skycons.js') }}\"></script>
<!-- Flot -->
<script src=\"{{ asset('BOassets/vendors/Flot/jquery.flot.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/Flot/jquery.flot.pie.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/Flot/jquery.flot.time.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/Flot/jquery.flot.stack.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/Flot/jquery.flot.resize.js') }}\"></script>
<!-- Flot plugins -->
<script src=\"{{ asset('BOassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/flot.curvedlines/curvedLines.js') }}\"></script>
<!-- DateJS -->
<script src=\"{{ asset('BOassets/vendors/DateJS/build/date.js') }}\"></script>
<!-- JQVMap -->
<script src=\"{{ asset('BOassets/vendors/jqvmap/dist/jquery.vmap.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"{{ asset('BOassets/vendors/moment/min/moment.min.js') }}\"></script>
<script src=\"{{ asset('BOassets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

<!-- Custom Theme Scripts -->
<script src=\"{{ asset('BOassets/build/js/custom.min.js') }}\"></script>
{% block extrascript %}

{% endblock %}
</body>
</html>
", "EloboostedBackofficeBundle:Default:Layout.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Default/Layout.html.twig");
    }
}
