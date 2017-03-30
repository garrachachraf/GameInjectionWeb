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
        $__internal_f6374ad53eb47c954aab271e36d6948b49eba4255a6697e90488edc90344a39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6374ad53eb47c954aab271e36d6948b49eba4255a6697e90488edc90344a39f->enter($__internal_f6374ad53eb47c954aab271e36d6948b49eba4255a6697e90488edc90344a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

        $__internal_9f2b1238905b998e197fbc24c029098bce8a7bb88628cd8231860314f32ecd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2b1238905b998e197fbc24c029098bce8a7bb88628cd8231860314f32ecd86->enter($__internal_9f2b1238905b998e197fbc24c029098bce8a7bb88628cd8231860314f32ecd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

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
        
        $__internal_f6374ad53eb47c954aab271e36d6948b49eba4255a6697e90488edc90344a39f->leave($__internal_f6374ad53eb47c954aab271e36d6948b49eba4255a6697e90488edc90344a39f_prof);

        
        $__internal_9f2b1238905b998e197fbc24c029098bce8a7bb88628cd8231860314f32ecd86->leave($__internal_9f2b1238905b998e197fbc24c029098bce8a7bb88628cd8231860314f32ecd86_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1275b9b2ccfb54152f4defa2367c1c106ccd640865dc942de9eec451bdb0a0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1275b9b2ccfb54152f4defa2367c1c106ccd640865dc942de9eec451bdb0a0e9->enter($__internal_1275b9b2ccfb54152f4defa2367c1c106ccd640865dc942de9eec451bdb0a0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d139b9383e057caad957421f0f2afd3c8fbf4bb69ba94c1be2f6bfc57a83041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d139b9383e057caad957421f0f2afd3c8fbf4bb69ba94c1be2f6bfc57a83041->enter($__internal_4d139b9383e057caad957421f0f2afd3c8fbf4bb69ba94c1be2f6bfc57a83041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gentelella Alela! | ";
        
        $__internal_4d139b9383e057caad957421f0f2afd3c8fbf4bb69ba94c1be2f6bfc57a83041->leave($__internal_4d139b9383e057caad957421f0f2afd3c8fbf4bb69ba94c1be2f6bfc57a83041_prof);

        
        $__internal_1275b9b2ccfb54152f4defa2367c1c106ccd640865dc942de9eec451bdb0a0e9->leave($__internal_1275b9b2ccfb54152f4defa2367c1c106ccd640865dc942de9eec451bdb0a0e9_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_47c1d01dcb15ce7ee3f1b2a65cfe445e2262e1b864b2c0db7ee27dcc2f7c4301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c1d01dcb15ce7ee3f1b2a65cfe445e2262e1b864b2c0db7ee27dcc2f7c4301->enter($__internal_47c1d01dcb15ce7ee3f1b2a65cfe445e2262e1b864b2c0db7ee27dcc2f7c4301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_2576414715d8eabff67cb10e7c41c33bb923e4c040b93e5dba5987bec182fd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2576414715d8eabff67cb10e7c41c33bb923e4c040b93e5dba5987bec182fd27->enter($__internal_2576414715d8eabff67cb10e7c41c33bb923e4c040b93e5dba5987bec182fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_2576414715d8eabff67cb10e7c41c33bb923e4c040b93e5dba5987bec182fd27->leave($__internal_2576414715d8eabff67cb10e7c41c33bb923e4c040b93e5dba5987bec182fd27_prof);

        
        $__internal_47c1d01dcb15ce7ee3f1b2a65cfe445e2262e1b864b2c0db7ee27dcc2f7c4301->leave($__internal_47c1d01dcb15ce7ee3f1b2a65cfe445e2262e1b864b2c0db7ee27dcc2f7c4301_prof);

    }

    // line 247
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_e258279fe4f42b63969a0571d3a5fe317b659feab1e158428e557d75c1f3f673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e258279fe4f42b63969a0571d3a5fe317b659feab1e158428e557d75c1f3f673->enter($__internal_e258279fe4f42b63969a0571d3a5fe317b659feab1e158428e557d75c1f3f673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_1d8e16c8e85256d72a6427e14b3fcddd9b7d6e86032c447101896164965a8809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8e16c8e85256d72a6427e14b3fcddd9b7d6e86032c447101896164965a8809->enter($__internal_1d8e16c8e85256d72a6427e14b3fcddd9b7d6e86032c447101896164965a8809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 248
        echo "                    ";
        
        $__internal_1d8e16c8e85256d72a6427e14b3fcddd9b7d6e86032c447101896164965a8809->leave($__internal_1d8e16c8e85256d72a6427e14b3fcddd9b7d6e86032c447101896164965a8809_prof);

        
        $__internal_e258279fe4f42b63969a0571d3a5fe317b659feab1e158428e557d75c1f3f673->leave($__internal_e258279fe4f42b63969a0571d3a5fe317b659feab1e158428e557d75c1f3f673_prof);

    }

    // line 252
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_683fe115ec0fff42bb8880383f1a8cbd5fa979ff782a25a9b50eed507e56738c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683fe115ec0fff42bb8880383f1a8cbd5fa979ff782a25a9b50eed507e56738c->enter($__internal_683fe115ec0fff42bb8880383f1a8cbd5fa979ff782a25a9b50eed507e56738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_29ba3db54b9acc260e721a2ffe1a37f73044c64bf2fb914223f0937d15d874bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ba3db54b9acc260e721a2ffe1a37f73044c64bf2fb914223f0937d15d874bc->enter($__internal_29ba3db54b9acc260e721a2ffe1a37f73044c64bf2fb914223f0937d15d874bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 253
        echo "                    ";
        
        $__internal_29ba3db54b9acc260e721a2ffe1a37f73044c64bf2fb914223f0937d15d874bc->leave($__internal_29ba3db54b9acc260e721a2ffe1a37f73044c64bf2fb914223f0937d15d874bc_prof);

        
        $__internal_683fe115ec0fff42bb8880383f1a8cbd5fa979ff782a25a9b50eed507e56738c->leave($__internal_683fe115ec0fff42bb8880383f1a8cbd5fa979ff782a25a9b50eed507e56738c_prof);

    }

    // line 257
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_b6843662f2b566c21ed7a52754bb6f503be37a8d90963237ce5cf588dc936e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6843662f2b566c21ed7a52754bb6f503be37a8d90963237ce5cf588dc936e80->enter($__internal_b6843662f2b566c21ed7a52754bb6f503be37a8d90963237ce5cf588dc936e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_3d4663509c6bed12856ed35c40909dccae60fec6652a79d58bed48d5b18a9cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4663509c6bed12856ed35c40909dccae60fec6652a79d58bed48d5b18a9cd1->enter($__internal_3d4663509c6bed12856ed35c40909dccae60fec6652a79d58bed48d5b18a9cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 258
        echo "                    ";
        
        $__internal_3d4663509c6bed12856ed35c40909dccae60fec6652a79d58bed48d5b18a9cd1->leave($__internal_3d4663509c6bed12856ed35c40909dccae60fec6652a79d58bed48d5b18a9cd1_prof);

        
        $__internal_b6843662f2b566c21ed7a52754bb6f503be37a8d90963237ce5cf588dc936e80->leave($__internal_b6843662f2b566c21ed7a52754bb6f503be37a8d90963237ce5cf588dc936e80_prof);

    }

    // line 262
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_cccf946c22e140fdfec4825bd9793fae005fa8f8c0c32c134051e4f7dc5dc9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccf946c22e140fdfec4825bd9793fae005fa8f8c0c32c134051e4f7dc5dc9c6->enter($__internal_cccf946c22e140fdfec4825bd9793fae005fa8f8c0c32c134051e4f7dc5dc9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_7ab59e19b0b51b9b0289bb5f14c0de8a9abafa5f771ed3c953ab570ca6cf219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab59e19b0b51b9b0289bb5f14c0de8a9abafa5f771ed3c953ab570ca6cf219c->enter($__internal_7ab59e19b0b51b9b0289bb5f14c0de8a9abafa5f771ed3c953ab570ca6cf219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 263
        echo "                    ";
        
        $__internal_7ab59e19b0b51b9b0289bb5f14c0de8a9abafa5f771ed3c953ab570ca6cf219c->leave($__internal_7ab59e19b0b51b9b0289bb5f14c0de8a9abafa5f771ed3c953ab570ca6cf219c_prof);

        
        $__internal_cccf946c22e140fdfec4825bd9793fae005fa8f8c0c32c134051e4f7dc5dc9c6->leave($__internal_cccf946c22e140fdfec4825bd9793fae005fa8f8c0c32c134051e4f7dc5dc9c6_prof);

    }

    // line 267
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_4b841d41074cd177901a01cc49f8def340a4a4afaf9a88bf4c298b323a82ae31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b841d41074cd177901a01cc49f8def340a4a4afaf9a88bf4c298b323a82ae31->enter($__internal_4b841d41074cd177901a01cc49f8def340a4a4afaf9a88bf4c298b323a82ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_f0282caa826ff14d5978e558ce2978c77f43700cbead5ad21d72dd2352c9c2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0282caa826ff14d5978e558ce2978c77f43700cbead5ad21d72dd2352c9c2d2->enter($__internal_f0282caa826ff14d5978e558ce2978c77f43700cbead5ad21d72dd2352c9c2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 268
        echo "                    ";
        
        $__internal_f0282caa826ff14d5978e558ce2978c77f43700cbead5ad21d72dd2352c9c2d2->leave($__internal_f0282caa826ff14d5978e558ce2978c77f43700cbead5ad21d72dd2352c9c2d2_prof);

        
        $__internal_4b841d41074cd177901a01cc49f8def340a4a4afaf9a88bf4c298b323a82ae31->leave($__internal_4b841d41074cd177901a01cc49f8def340a4a4afaf9a88bf4c298b323a82ae31_prof);

    }

    // line 272
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_aa8575cd851f9f784156972dcf28a498047c68506b5941b4c4c758285789bd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8575cd851f9f784156972dcf28a498047c68506b5941b4c4c758285789bd61->enter($__internal_aa8575cd851f9f784156972dcf28a498047c68506b5941b4c4c758285789bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_d8bf0772aa2e79abe58bc16ac82ef3f0c39e74983d6f3a22e738f3c994b93b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bf0772aa2e79abe58bc16ac82ef3f0c39e74983d6f3a22e738f3c994b93b8e->enter($__internal_d8bf0772aa2e79abe58bc16ac82ef3f0c39e74983d6f3a22e738f3c994b93b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 273
        echo "                    ";
        
        $__internal_d8bf0772aa2e79abe58bc16ac82ef3f0c39e74983d6f3a22e738f3c994b93b8e->leave($__internal_d8bf0772aa2e79abe58bc16ac82ef3f0c39e74983d6f3a22e738f3c994b93b8e_prof);

        
        $__internal_aa8575cd851f9f784156972dcf28a498047c68506b5941b4c4c758285789bd61->leave($__internal_aa8575cd851f9f784156972dcf28a498047c68506b5941b4c4c758285789bd61_prof);

    }

    // line 280
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_fafc23a17cf961a535b34be560e198b479e53c2530a10372ee4a16ddd69588c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafc23a17cf961a535b34be560e198b479e53c2530a10372ee4a16ddd69588c8->enter($__internal_fafc23a17cf961a535b34be560e198b479e53c2530a10372ee4a16ddd69588c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_d218bc5b7224633f18c53d8197adfe462f1dcfddd87dc2270c0a41523489db59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d218bc5b7224633f18c53d8197adfe462f1dcfddd87dc2270c0a41523489db59->enter($__internal_d218bc5b7224633f18c53d8197adfe462f1dcfddd87dc2270c0a41523489db59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 281
        echo "                ";
        
        $__internal_d218bc5b7224633f18c53d8197adfe462f1dcfddd87dc2270c0a41523489db59->leave($__internal_d218bc5b7224633f18c53d8197adfe462f1dcfddd87dc2270c0a41523489db59_prof);

        
        $__internal_fafc23a17cf961a535b34be560e198b479e53c2530a10372ee4a16ddd69588c8->leave($__internal_fafc23a17cf961a535b34be560e198b479e53c2530a10372ee4a16ddd69588c8_prof);

    }

    // line 286
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_d22409654681a1aa73659f6fd8fcb8d84e75cd7a4cee25ce8f3323632d75037c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22409654681a1aa73659f6fd8fcb8d84e75cd7a4cee25ce8f3323632d75037c->enter($__internal_d22409654681a1aa73659f6fd8fcb8d84e75cd7a4cee25ce8f3323632d75037c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_771fe08ceaec152de9930378a08bd98ea27dfb6c15e6b353aff8d6efe8faca2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771fe08ceaec152de9930378a08bd98ea27dfb6c15e6b353aff8d6efe8faca2f->enter($__internal_771fe08ceaec152de9930378a08bd98ea27dfb6c15e6b353aff8d6efe8faca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 287
        echo "                ";
        
        $__internal_771fe08ceaec152de9930378a08bd98ea27dfb6c15e6b353aff8d6efe8faca2f->leave($__internal_771fe08ceaec152de9930378a08bd98ea27dfb6c15e6b353aff8d6efe8faca2f_prof);

        
        $__internal_d22409654681a1aa73659f6fd8fcb8d84e75cd7a4cee25ce8f3323632d75037c->leave($__internal_d22409654681a1aa73659f6fd8fcb8d84e75cd7a4cee25ce8f3323632d75037c_prof);

    }

    // line 349
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_f73389d839082f773d7c559a7d9c960f9d45086ab202a5c428b14c427727af1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73389d839082f773d7c559a7d9c960f9d45086ab202a5c428b14c427727af1b->enter($__internal_f73389d839082f773d7c559a7d9c960f9d45086ab202a5c428b14c427727af1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_82a369e6bb2c30780581e38c244ee0d2e985805abae7fc2255f0c5bcb0fc6760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a369e6bb2c30780581e38c244ee0d2e985805abae7fc2255f0c5bcb0fc6760->enter($__internal_82a369e6bb2c30780581e38c244ee0d2e985805abae7fc2255f0c5bcb0fc6760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 350
        echo "
";
        
        $__internal_82a369e6bb2c30780581e38c244ee0d2e985805abae7fc2255f0c5bcb0fc6760->leave($__internal_82a369e6bb2c30780581e38c244ee0d2e985805abae7fc2255f0c5bcb0fc6760_prof);

        
        $__internal_f73389d839082f773d7c559a7d9c960f9d45086ab202a5c428b14c427727af1b->leave($__internal_f73389d839082f773d7c559a7d9c960f9d45086ab202a5c428b14c427727af1b_prof);

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
