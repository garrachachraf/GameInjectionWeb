<?php

/* @EloboostedBackoffice/Default/Layout.html.twig */
class __TwigTemplate_3043300c52d7dafa9a80c9a85fc97eb27fd7e2b3d19547e087bfa4d564491bbd extends Twig_Template
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
        $__internal_378b2422bba65aea69fb7abefa7f645d6be96c4332f99b36e3778530e1a16cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378b2422bba65aea69fb7abefa7f645d6be96c4332f99b36e3778530e1a16cab->enter($__internal_378b2422bba65aea69fb7abefa7f645d6be96c4332f99b36e3778530e1a16cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

        $__internal_7ed6730ec15f77a5d2f94e41607eb5bf0e328010b8951069a79271dcde365822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed6730ec15f77a5d2f94e41607eb5bf0e328010b8951069a79271dcde365822->enter($__internal_7ed6730ec15f77a5d2f94e41607eb5bf0e328010b8951069a79271dcde365822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

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
                    <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>GameInjection !</span></a>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">
                        ";
        // line 51
        $context["foo"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array());
        // line 52
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
                                    <li><a href=\"#\">Advanced Components</a></li>
                                    <li><a href=\"#\">Form Validation</a></li>
                                    <li><a href=\"#\">Form Wizard</a></li>
                                    <li><a href=\"#\">Form Upload</a></li>
                                    <li><a href=\"#\">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">General Elements</a></li>
                                    <li><a href=\"#\">Media Gallery</a></li>
                                    <li><a href=\"#\">Typography</a></li>
                                    <li><a href=\"#\">Icons</a></li>
                                    <li><a href=\"#\">Glyphicons</a></li>
                                    <li><a href=\"#\">Widgets</a></li>
                                    <li><a href=\"#\">Invoice</a></li>
                                    <li><a href=\"#\">Inbox</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Tables</a></li>
                                    <li><a href=\"#\">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Chart JS</a></li>
                                    <li><a href=\"#\">Chart JS2</a></li>
                                    <li><a href=\"#\">Moris JS</a></li>
                                    <li><a href=\"#\">ECharts</a></li>
                                    <li><a href=\"#\">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Fixed Sidebar</a></li>
                                    <li><a href=\"#\">Fixed Footer</a></li>
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
        // line 154
        echo twig_escape_filter($this->env, (isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        // line 178
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
        // line 190
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
        // line 202
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
        // line 214
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
        // line 247
        $this->displayBlock('sousmenu1', $context, $blocks);
        // line 249
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 252
        $this->displayBlock('sousmenu2', $context, $blocks);
        // line 254
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 257
        $this->displayBlock('sousmenu3', $context, $blocks);
        // line 259
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 262
        $this->displayBlock('sousmenu4', $context, $blocks);
        // line 264
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 267
        $this->displayBlock('sousmenu5', $context, $blocks);
        // line 269
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 272
        $this->displayBlock('sousmenu6', $context, $blocks);
        // line 274
        echo "                </div>

            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                ";
        // line 280
        $this->displayBlock('insiderowcenter', $context, $blocks);
        // line 282
        echo "            </div>
            <br />

            <div class=\"row\">
                ";
        // line 286
        $this->displayBlock('insiderowbottom', $context, $blocks);
        // line 288
        echo "
            </div>


            <div class=\"row\">

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=\"pull-right\">
                Gentelella - Bootstrap Admin Template by <a href=\"#\">Colorlib</a>
            </div>
            <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- NProgress -->
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<!-- Chart.js -->
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- gauge.js -->
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-progressbar -->
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<!-- Skycons -->
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
<!-- Flot -->
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<!-- Flot plugins -->
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
<!-- DateJS -->
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme Scripts -->
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 349
        $this->displayBlock('extrascript', $context, $blocks);
        // line 352
        echo "</body>
</html>
";
        
        $__internal_378b2422bba65aea69fb7abefa7f645d6be96c4332f99b36e3778530e1a16cab->leave($__internal_378b2422bba65aea69fb7abefa7f645d6be96c4332f99b36e3778530e1a16cab_prof);

        
        $__internal_7ed6730ec15f77a5d2f94e41607eb5bf0e328010b8951069a79271dcde365822->leave($__internal_7ed6730ec15f77a5d2f94e41607eb5bf0e328010b8951069a79271dcde365822_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_089152ce8d9c66846d9ab014715f0830406a9d5f35f98b2b4f70ad1e588f167f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089152ce8d9c66846d9ab014715f0830406a9d5f35f98b2b4f70ad1e588f167f->enter($__internal_089152ce8d9c66846d9ab014715f0830406a9d5f35f98b2b4f70ad1e588f167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a79101b5e2129e9af14d395a59f7b57fddbab7bb8d252cf77b35c043807770c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79101b5e2129e9af14d395a59f7b57fddbab7bb8d252cf77b35c043807770c7->enter($__internal_a79101b5e2129e9af14d395a59f7b57fddbab7bb8d252cf77b35c043807770c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gentelella Alela! | ";
        
        $__internal_a79101b5e2129e9af14d395a59f7b57fddbab7bb8d252cf77b35c043807770c7->leave($__internal_a79101b5e2129e9af14d395a59f7b57fddbab7bb8d252cf77b35c043807770c7_prof);

        
        $__internal_089152ce8d9c66846d9ab014715f0830406a9d5f35f98b2b4f70ad1e588f167f->leave($__internal_089152ce8d9c66846d9ab014715f0830406a9d5f35f98b2b4f70ad1e588f167f_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_9062eca201f35a3d77fb6e560dbf9406d7e1b8940db9924f6d1e447ca1b354d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9062eca201f35a3d77fb6e560dbf9406d7e1b8940db9924f6d1e447ca1b354d7->enter($__internal_9062eca201f35a3d77fb6e560dbf9406d7e1b8940db9924f6d1e447ca1b354d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_3861fffc33e8200ad592b6ca70bb8ed3577a595255b2ded3c26c8d2b2ff6fc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3861fffc33e8200ad592b6ca70bb8ed3577a595255b2ded3c26c8d2b2ff6fc2c->enter($__internal_3861fffc33e8200ad592b6ca70bb8ed3577a595255b2ded3c26c8d2b2ff6fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_3861fffc33e8200ad592b6ca70bb8ed3577a595255b2ded3c26c8d2b2ff6fc2c->leave($__internal_3861fffc33e8200ad592b6ca70bb8ed3577a595255b2ded3c26c8d2b2ff6fc2c_prof);

        
        $__internal_9062eca201f35a3d77fb6e560dbf9406d7e1b8940db9924f6d1e447ca1b354d7->leave($__internal_9062eca201f35a3d77fb6e560dbf9406d7e1b8940db9924f6d1e447ca1b354d7_prof);

    }

    // line 247
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_0f18c7d6247fe5c868416b86f1ad5a4621247d8615d362641acf9a70f1c5d828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f18c7d6247fe5c868416b86f1ad5a4621247d8615d362641acf9a70f1c5d828->enter($__internal_0f18c7d6247fe5c868416b86f1ad5a4621247d8615d362641acf9a70f1c5d828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_31a09adfb35b3e860eaedd0b6acffbae5dd2d0a0e22aaeb4c3eba1ba35718a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a09adfb35b3e860eaedd0b6acffbae5dd2d0a0e22aaeb4c3eba1ba35718a31->enter($__internal_31a09adfb35b3e860eaedd0b6acffbae5dd2d0a0e22aaeb4c3eba1ba35718a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 248
        echo "                    ";
        
        $__internal_31a09adfb35b3e860eaedd0b6acffbae5dd2d0a0e22aaeb4c3eba1ba35718a31->leave($__internal_31a09adfb35b3e860eaedd0b6acffbae5dd2d0a0e22aaeb4c3eba1ba35718a31_prof);

        
        $__internal_0f18c7d6247fe5c868416b86f1ad5a4621247d8615d362641acf9a70f1c5d828->leave($__internal_0f18c7d6247fe5c868416b86f1ad5a4621247d8615d362641acf9a70f1c5d828_prof);

    }

    // line 252
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_9c7ea8718fadc767291c5e9b1da9d1fac2eeae2f3123bcb0a6df11e7367ce851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7ea8718fadc767291c5e9b1da9d1fac2eeae2f3123bcb0a6df11e7367ce851->enter($__internal_9c7ea8718fadc767291c5e9b1da9d1fac2eeae2f3123bcb0a6df11e7367ce851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_c8121587d20674e698dffbcb8b128e562e1f3913440c888762fbcb4cc9833ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8121587d20674e698dffbcb8b128e562e1f3913440c888762fbcb4cc9833ab0->enter($__internal_c8121587d20674e698dffbcb8b128e562e1f3913440c888762fbcb4cc9833ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 253
        echo "                    ";
        
        $__internal_c8121587d20674e698dffbcb8b128e562e1f3913440c888762fbcb4cc9833ab0->leave($__internal_c8121587d20674e698dffbcb8b128e562e1f3913440c888762fbcb4cc9833ab0_prof);

        
        $__internal_9c7ea8718fadc767291c5e9b1da9d1fac2eeae2f3123bcb0a6df11e7367ce851->leave($__internal_9c7ea8718fadc767291c5e9b1da9d1fac2eeae2f3123bcb0a6df11e7367ce851_prof);

    }

    // line 257
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_5c2af596d266d3626e41e9d2639afe74090e2c3d075fda3c37450181a3460c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2af596d266d3626e41e9d2639afe74090e2c3d075fda3c37450181a3460c2d->enter($__internal_5c2af596d266d3626e41e9d2639afe74090e2c3d075fda3c37450181a3460c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_d3d8afca0d8712eae88066b9e4565c07375946ae8e615a2e2f1ccc5f4a8c69bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d8afca0d8712eae88066b9e4565c07375946ae8e615a2e2f1ccc5f4a8c69bb->enter($__internal_d3d8afca0d8712eae88066b9e4565c07375946ae8e615a2e2f1ccc5f4a8c69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 258
        echo "                    ";
        
        $__internal_d3d8afca0d8712eae88066b9e4565c07375946ae8e615a2e2f1ccc5f4a8c69bb->leave($__internal_d3d8afca0d8712eae88066b9e4565c07375946ae8e615a2e2f1ccc5f4a8c69bb_prof);

        
        $__internal_5c2af596d266d3626e41e9d2639afe74090e2c3d075fda3c37450181a3460c2d->leave($__internal_5c2af596d266d3626e41e9d2639afe74090e2c3d075fda3c37450181a3460c2d_prof);

    }

    // line 262
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_5a457a126eee522ef31b82379ecacf33dc4124e2f2c5861244680fa9fb735ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a457a126eee522ef31b82379ecacf33dc4124e2f2c5861244680fa9fb735ecc->enter($__internal_5a457a126eee522ef31b82379ecacf33dc4124e2f2c5861244680fa9fb735ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_8c23c83b868a78072698e626ee8a2c261961d309f115b9675e05ef93ef195993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c23c83b868a78072698e626ee8a2c261961d309f115b9675e05ef93ef195993->enter($__internal_8c23c83b868a78072698e626ee8a2c261961d309f115b9675e05ef93ef195993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 263
        echo "                    ";
        
        $__internal_8c23c83b868a78072698e626ee8a2c261961d309f115b9675e05ef93ef195993->leave($__internal_8c23c83b868a78072698e626ee8a2c261961d309f115b9675e05ef93ef195993_prof);

        
        $__internal_5a457a126eee522ef31b82379ecacf33dc4124e2f2c5861244680fa9fb735ecc->leave($__internal_5a457a126eee522ef31b82379ecacf33dc4124e2f2c5861244680fa9fb735ecc_prof);

    }

    // line 267
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_047e9217793a7860eb41d598f2d6fa04f3995b31635d6762c1081c399a4d0b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047e9217793a7860eb41d598f2d6fa04f3995b31635d6762c1081c399a4d0b5a->enter($__internal_047e9217793a7860eb41d598f2d6fa04f3995b31635d6762c1081c399a4d0b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_e94c8fdb563c45e1f22e7c5ae22264a30a62e5de92a0268303834dd96f0334ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94c8fdb563c45e1f22e7c5ae22264a30a62e5de92a0268303834dd96f0334ef->enter($__internal_e94c8fdb563c45e1f22e7c5ae22264a30a62e5de92a0268303834dd96f0334ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 268
        echo "                    ";
        
        $__internal_e94c8fdb563c45e1f22e7c5ae22264a30a62e5de92a0268303834dd96f0334ef->leave($__internal_e94c8fdb563c45e1f22e7c5ae22264a30a62e5de92a0268303834dd96f0334ef_prof);

        
        $__internal_047e9217793a7860eb41d598f2d6fa04f3995b31635d6762c1081c399a4d0b5a->leave($__internal_047e9217793a7860eb41d598f2d6fa04f3995b31635d6762c1081c399a4d0b5a_prof);

    }

    // line 272
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_2cb73fad693f1f715e238aa3229edf520760837073e0c2ffda550c11034cd85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb73fad693f1f715e238aa3229edf520760837073e0c2ffda550c11034cd85c->enter($__internal_2cb73fad693f1f715e238aa3229edf520760837073e0c2ffda550c11034cd85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_e5ce3d339f9fe3e427e167abf509fff4c4f3adc709e77044733418209c4c8a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ce3d339f9fe3e427e167abf509fff4c4f3adc709e77044733418209c4c8a6b->enter($__internal_e5ce3d339f9fe3e427e167abf509fff4c4f3adc709e77044733418209c4c8a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 273
        echo "                    ";
        
        $__internal_e5ce3d339f9fe3e427e167abf509fff4c4f3adc709e77044733418209c4c8a6b->leave($__internal_e5ce3d339f9fe3e427e167abf509fff4c4f3adc709e77044733418209c4c8a6b_prof);

        
        $__internal_2cb73fad693f1f715e238aa3229edf520760837073e0c2ffda550c11034cd85c->leave($__internal_2cb73fad693f1f715e238aa3229edf520760837073e0c2ffda550c11034cd85c_prof);

    }

    // line 280
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_2bc50832da965bfeccf4467d0b96e43ff487f44f147a3cbe1d73c06f375c6cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc50832da965bfeccf4467d0b96e43ff487f44f147a3cbe1d73c06f375c6cf6->enter($__internal_2bc50832da965bfeccf4467d0b96e43ff487f44f147a3cbe1d73c06f375c6cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_3af420c89129ae4eb6b7d7883e0e0d52752a504b584243fb18235031b5667dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af420c89129ae4eb6b7d7883e0e0d52752a504b584243fb18235031b5667dbe->enter($__internal_3af420c89129ae4eb6b7d7883e0e0d52752a504b584243fb18235031b5667dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 281
        echo "                ";
        
        $__internal_3af420c89129ae4eb6b7d7883e0e0d52752a504b584243fb18235031b5667dbe->leave($__internal_3af420c89129ae4eb6b7d7883e0e0d52752a504b584243fb18235031b5667dbe_prof);

        
        $__internal_2bc50832da965bfeccf4467d0b96e43ff487f44f147a3cbe1d73c06f375c6cf6->leave($__internal_2bc50832da965bfeccf4467d0b96e43ff487f44f147a3cbe1d73c06f375c6cf6_prof);

    }

    // line 286
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_0f34c57fe9481b163a4ee3c2fbef8bd52f23c62e097359878b1aa87f013d0d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f34c57fe9481b163a4ee3c2fbef8bd52f23c62e097359878b1aa87f013d0d39->enter($__internal_0f34c57fe9481b163a4ee3c2fbef8bd52f23c62e097359878b1aa87f013d0d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_f457d4777094e6fb50a77141f96e9f3e664d1d100792532aec16fa74bc02f426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f457d4777094e6fb50a77141f96e9f3e664d1d100792532aec16fa74bc02f426->enter($__internal_f457d4777094e6fb50a77141f96e9f3e664d1d100792532aec16fa74bc02f426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 287
        echo "                ";
        
        $__internal_f457d4777094e6fb50a77141f96e9f3e664d1d100792532aec16fa74bc02f426->leave($__internal_f457d4777094e6fb50a77141f96e9f3e664d1d100792532aec16fa74bc02f426_prof);

        
        $__internal_0f34c57fe9481b163a4ee3c2fbef8bd52f23c62e097359878b1aa87f013d0d39->leave($__internal_0f34c57fe9481b163a4ee3c2fbef8bd52f23c62e097359878b1aa87f013d0d39_prof);

    }

    // line 349
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_1f726731ceeb2584b832cb80a5c5fe243f920417268b15dbc3c0a0a7e4525278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f726731ceeb2584b832cb80a5c5fe243f920417268b15dbc3c0a0a7e4525278->enter($__internal_1f726731ceeb2584b832cb80a5c5fe243f920417268b15dbc3c0a0a7e4525278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_5bbc2988e2f1c6eeaaaf441ad22b2d58e1f334d29befad022e9bef73c723662f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc2988e2f1c6eeaaaf441ad22b2d58e1f334d29befad022e9bef73c723662f->enter($__internal_5bbc2988e2f1c6eeaaaf441ad22b2d58e1f334d29befad022e9bef73c723662f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 350
        echo "
";
        
        $__internal_5bbc2988e2f1c6eeaaaf441ad22b2d58e1f334d29befad022e9bef73c723662f->leave($__internal_5bbc2988e2f1c6eeaaaf441ad22b2d58e1f334d29befad022e9bef73c723662f_prof);

        
        $__internal_1f726731ceeb2584b832cb80a5c5fe243f920417268b15dbc3c0a0a7e4525278->leave($__internal_1f726731ceeb2584b832cb80a5c5fe243f920417268b15dbc3c0a0a7e4525278_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Default/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 350,  736 => 349,  726 => 287,  717 => 286,  707 => 281,  698 => 280,  688 => 273,  679 => 272,  669 => 268,  660 => 267,  650 => 263,  641 => 262,  631 => 258,  622 => 257,  612 => 253,  603 => 252,  593 => 248,  584 => 247,  573 => 33,  564 => 32,  546 => 11,  534 => 352,  532 => 349,  528 => 348,  522 => 345,  518 => 344,  513 => 342,  509 => 341,  505 => 340,  500 => 338,  495 => 336,  491 => 335,  487 => 334,  482 => 332,  478 => 331,  474 => 330,  470 => 329,  466 => 328,  461 => 326,  456 => 324,  451 => 322,  446 => 320,  441 => 318,  436 => 316,  431 => 314,  426 => 312,  421 => 310,  397 => 288,  395 => 286,  389 => 282,  387 => 280,  379 => 274,  377 => 272,  372 => 269,  370 => 267,  365 => 264,  363 => 262,  358 => 259,  356 => 257,  351 => 254,  349 => 252,  344 => 249,  342 => 247,  306 => 214,  291 => 202,  276 => 190,  261 => 178,  232 => 154,  150 => 75,  142 => 70,  125 => 56,  117 => 52,  115 => 51,  97 => 35,  95 => 32,  90 => 30,  84 => 27,  79 => 25,  74 => 23,  68 => 20,  63 => 18,  58 => 16,  53 => 14,  47 => 11,  36 => 2,);
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

    <title>{% block title %} Gentelella Alela! | {% endblock %}</title>

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
                    <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>GameInjection !</span></a>
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
                                    <li><a href=\"#\">Advanced Components</a></li>
                                    <li><a href=\"#\">Form Validation</a></li>
                                    <li><a href=\"#\">Form Wizard</a></li>
                                    <li><a href=\"#\">Form Upload</a></li>
                                    <li><a href=\"#\">Form Buttons</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">General Elements</a></li>
                                    <li><a href=\"#\">Media Gallery</a></li>
                                    <li><a href=\"#\">Typography</a></li>
                                    <li><a href=\"#\">Icons</a></li>
                                    <li><a href=\"#\">Glyphicons</a></li>
                                    <li><a href=\"#\">Widgets</a></li>
                                    <li><a href=\"#\">Invoice</a></li>
                                    <li><a href=\"#\">Inbox</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Tables</a></li>
                                    <li><a href=\"#\">Table Dynamic</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Chart JS</a></li>
                                    <li><a href=\"#\">Chart JS2</a></li>
                                    <li><a href=\"#\">Moris JS</a></li>
                                    <li><a href=\"#\">ECharts</a></li>
                                    <li><a href=\"#\">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Fixed Sidebar</a></li>
                                    <li><a href=\"#\">Fixed Footer</a></li>
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
                Gentelella - Bootstrap Admin Template by <a href=\"#\">Colorlib</a>
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
", "@EloboostedBackoffice/Default/Layout.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Default\\Layout.html.twig");
    }
}