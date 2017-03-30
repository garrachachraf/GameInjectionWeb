<?php

/* EloboostedBackofficeBundle:Default:Layout.html.twig */
class __TwigTemplate_7bcc11e6ddad8b9192760d3afb2b46892aec2be7165d6bbb368dccbd89f76e66 extends Twig_Template
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
        $__internal_f96207567f76c8a77613bf720f2337e663c3e6add175ca9b7335ab42ccedac72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96207567f76c8a77613bf720f2337e663c3e6add175ca9b7335ab42ccedac72->enter($__internal_f96207567f76c8a77613bf720f2337e663c3e6add175ca9b7335ab42ccedac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

        $__internal_45d74b8dbaab6964d1c9938edcc7b828a81471dd135670478ad9d6721b479603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d74b8dbaab6964d1c9938edcc7b828a81471dd135670478ad9d6721b479603->enter($__internal_45d74b8dbaab6964d1c9938edcc7b828a81471dd135670478ad9d6721b479603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

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
        
        $__internal_f96207567f76c8a77613bf720f2337e663c3e6add175ca9b7335ab42ccedac72->leave($__internal_f96207567f76c8a77613bf720f2337e663c3e6add175ca9b7335ab42ccedac72_prof);

        
        $__internal_45d74b8dbaab6964d1c9938edcc7b828a81471dd135670478ad9d6721b479603->leave($__internal_45d74b8dbaab6964d1c9938edcc7b828a81471dd135670478ad9d6721b479603_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_81a81dceb1a7fcd5f2396c1f3a9d668d8c6548ce829943987f81171005b89823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a81dceb1a7fcd5f2396c1f3a9d668d8c6548ce829943987f81171005b89823->enter($__internal_81a81dceb1a7fcd5f2396c1f3a9d668d8c6548ce829943987f81171005b89823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c9af793c52444c41917fda8261ac3f7d71b2511ea7947236c9d5f3398568879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9af793c52444c41917fda8261ac3f7d71b2511ea7947236c9d5f3398568879->enter($__internal_0c9af793c52444c41917fda8261ac3f7d71b2511ea7947236c9d5f3398568879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gentelella Alela! | ";
        
        $__internal_0c9af793c52444c41917fda8261ac3f7d71b2511ea7947236c9d5f3398568879->leave($__internal_0c9af793c52444c41917fda8261ac3f7d71b2511ea7947236c9d5f3398568879_prof);

        
        $__internal_81a81dceb1a7fcd5f2396c1f3a9d668d8c6548ce829943987f81171005b89823->leave($__internal_81a81dceb1a7fcd5f2396c1f3a9d668d8c6548ce829943987f81171005b89823_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_eea90b99c2bd192b7f0dc58f534b6112f2d619da5a9f9ecd6b129133ece18ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea90b99c2bd192b7f0dc58f534b6112f2d619da5a9f9ecd6b129133ece18ce0->enter($__internal_eea90b99c2bd192b7f0dc58f534b6112f2d619da5a9f9ecd6b129133ece18ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_8f25d6c5e21ce3c42fb3d6e8586a607edc41df00f035300cce6445acdfe50f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f25d6c5e21ce3c42fb3d6e8586a607edc41df00f035300cce6445acdfe50f55->enter($__internal_8f25d6c5e21ce3c42fb3d6e8586a607edc41df00f035300cce6445acdfe50f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_8f25d6c5e21ce3c42fb3d6e8586a607edc41df00f035300cce6445acdfe50f55->leave($__internal_8f25d6c5e21ce3c42fb3d6e8586a607edc41df00f035300cce6445acdfe50f55_prof);

        
        $__internal_eea90b99c2bd192b7f0dc58f534b6112f2d619da5a9f9ecd6b129133ece18ce0->leave($__internal_eea90b99c2bd192b7f0dc58f534b6112f2d619da5a9f9ecd6b129133ece18ce0_prof);

    }

    // line 247
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_9769b5144a5f49b2918e21b6e531598fddd7f5b66adc8faeb660e3b328c19329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9769b5144a5f49b2918e21b6e531598fddd7f5b66adc8faeb660e3b328c19329->enter($__internal_9769b5144a5f49b2918e21b6e531598fddd7f5b66adc8faeb660e3b328c19329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_899a9e1171f0f59d6de413509c7cc6c53979a2147f6b93cddd73bc94131e1016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899a9e1171f0f59d6de413509c7cc6c53979a2147f6b93cddd73bc94131e1016->enter($__internal_899a9e1171f0f59d6de413509c7cc6c53979a2147f6b93cddd73bc94131e1016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 248
        echo "                    ";
        
        $__internal_899a9e1171f0f59d6de413509c7cc6c53979a2147f6b93cddd73bc94131e1016->leave($__internal_899a9e1171f0f59d6de413509c7cc6c53979a2147f6b93cddd73bc94131e1016_prof);

        
        $__internal_9769b5144a5f49b2918e21b6e531598fddd7f5b66adc8faeb660e3b328c19329->leave($__internal_9769b5144a5f49b2918e21b6e531598fddd7f5b66adc8faeb660e3b328c19329_prof);

    }

    // line 252
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_d5bab7d1a979f79a01cadda8371842c38e281defa7c308ba6804420783b84cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bab7d1a979f79a01cadda8371842c38e281defa7c308ba6804420783b84cd6->enter($__internal_d5bab7d1a979f79a01cadda8371842c38e281defa7c308ba6804420783b84cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_d42321ccb96c3188bf91c1e68f1ffaf8bed7b859a450f9db7db8b716ca433e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42321ccb96c3188bf91c1e68f1ffaf8bed7b859a450f9db7db8b716ca433e84->enter($__internal_d42321ccb96c3188bf91c1e68f1ffaf8bed7b859a450f9db7db8b716ca433e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 253
        echo "                    ";
        
        $__internal_d42321ccb96c3188bf91c1e68f1ffaf8bed7b859a450f9db7db8b716ca433e84->leave($__internal_d42321ccb96c3188bf91c1e68f1ffaf8bed7b859a450f9db7db8b716ca433e84_prof);

        
        $__internal_d5bab7d1a979f79a01cadda8371842c38e281defa7c308ba6804420783b84cd6->leave($__internal_d5bab7d1a979f79a01cadda8371842c38e281defa7c308ba6804420783b84cd6_prof);

    }

    // line 257
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_62591ca03818d4b44aaa3f4afbc19d716ace7b0310ad335e8ea5e337dd982a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62591ca03818d4b44aaa3f4afbc19d716ace7b0310ad335e8ea5e337dd982a9d->enter($__internal_62591ca03818d4b44aaa3f4afbc19d716ace7b0310ad335e8ea5e337dd982a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_9e16d9cfa705b4945d649531a0e2101db905cce0807d0e5389efc08e95d82ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e16d9cfa705b4945d649531a0e2101db905cce0807d0e5389efc08e95d82ecf->enter($__internal_9e16d9cfa705b4945d649531a0e2101db905cce0807d0e5389efc08e95d82ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 258
        echo "                    ";
        
        $__internal_9e16d9cfa705b4945d649531a0e2101db905cce0807d0e5389efc08e95d82ecf->leave($__internal_9e16d9cfa705b4945d649531a0e2101db905cce0807d0e5389efc08e95d82ecf_prof);

        
        $__internal_62591ca03818d4b44aaa3f4afbc19d716ace7b0310ad335e8ea5e337dd982a9d->leave($__internal_62591ca03818d4b44aaa3f4afbc19d716ace7b0310ad335e8ea5e337dd982a9d_prof);

    }

    // line 262
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_b77d65e75328002f12e06a659745ebbdf55bc9c4e2924392109bfd5ef6e78bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77d65e75328002f12e06a659745ebbdf55bc9c4e2924392109bfd5ef6e78bbb->enter($__internal_b77d65e75328002f12e06a659745ebbdf55bc9c4e2924392109bfd5ef6e78bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_c0c006996eaa79620267b7f4f5193eca3e8c64fd5aa8682d3135bb0d1dbb8434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c006996eaa79620267b7f4f5193eca3e8c64fd5aa8682d3135bb0d1dbb8434->enter($__internal_c0c006996eaa79620267b7f4f5193eca3e8c64fd5aa8682d3135bb0d1dbb8434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 263
        echo "                    ";
        
        $__internal_c0c006996eaa79620267b7f4f5193eca3e8c64fd5aa8682d3135bb0d1dbb8434->leave($__internal_c0c006996eaa79620267b7f4f5193eca3e8c64fd5aa8682d3135bb0d1dbb8434_prof);

        
        $__internal_b77d65e75328002f12e06a659745ebbdf55bc9c4e2924392109bfd5ef6e78bbb->leave($__internal_b77d65e75328002f12e06a659745ebbdf55bc9c4e2924392109bfd5ef6e78bbb_prof);

    }

    // line 267
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_b6939e13c821f528e057b6b3f48d812d73a0b38f8c435d39b49450140ef83f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6939e13c821f528e057b6b3f48d812d73a0b38f8c435d39b49450140ef83f0c->enter($__internal_b6939e13c821f528e057b6b3f48d812d73a0b38f8c435d39b49450140ef83f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_85c29f78758e83aea3bb6e02c625c5d6c25605cbff3d1548d69f0ba9a3566f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c29f78758e83aea3bb6e02c625c5d6c25605cbff3d1548d69f0ba9a3566f6a->enter($__internal_85c29f78758e83aea3bb6e02c625c5d6c25605cbff3d1548d69f0ba9a3566f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 268
        echo "                    ";
        
        $__internal_85c29f78758e83aea3bb6e02c625c5d6c25605cbff3d1548d69f0ba9a3566f6a->leave($__internal_85c29f78758e83aea3bb6e02c625c5d6c25605cbff3d1548d69f0ba9a3566f6a_prof);

        
        $__internal_b6939e13c821f528e057b6b3f48d812d73a0b38f8c435d39b49450140ef83f0c->leave($__internal_b6939e13c821f528e057b6b3f48d812d73a0b38f8c435d39b49450140ef83f0c_prof);

    }

    // line 272
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_8c02c79520f3c6a6d888b8988d4384897eb3c6a7dbf4dadb322983683bf65bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c02c79520f3c6a6d888b8988d4384897eb3c6a7dbf4dadb322983683bf65bf7->enter($__internal_8c02c79520f3c6a6d888b8988d4384897eb3c6a7dbf4dadb322983683bf65bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_8de3aa4e8d404cddb3dddd46b1fdc04355bd3f5b69b0e38367c7766b19e1f248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de3aa4e8d404cddb3dddd46b1fdc04355bd3f5b69b0e38367c7766b19e1f248->enter($__internal_8de3aa4e8d404cddb3dddd46b1fdc04355bd3f5b69b0e38367c7766b19e1f248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 273
        echo "                    ";
        
        $__internal_8de3aa4e8d404cddb3dddd46b1fdc04355bd3f5b69b0e38367c7766b19e1f248->leave($__internal_8de3aa4e8d404cddb3dddd46b1fdc04355bd3f5b69b0e38367c7766b19e1f248_prof);

        
        $__internal_8c02c79520f3c6a6d888b8988d4384897eb3c6a7dbf4dadb322983683bf65bf7->leave($__internal_8c02c79520f3c6a6d888b8988d4384897eb3c6a7dbf4dadb322983683bf65bf7_prof);

    }

    // line 280
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_e7de2239523373f0e464f483be4db29df47ab0200afe92e2f81dc468819f92df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7de2239523373f0e464f483be4db29df47ab0200afe92e2f81dc468819f92df->enter($__internal_e7de2239523373f0e464f483be4db29df47ab0200afe92e2f81dc468819f92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_710464a0a0852ddc928754e3564d3622bca3e73399dbb68982719efa9b0b52a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710464a0a0852ddc928754e3564d3622bca3e73399dbb68982719efa9b0b52a6->enter($__internal_710464a0a0852ddc928754e3564d3622bca3e73399dbb68982719efa9b0b52a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 281
        echo "                ";
        
        $__internal_710464a0a0852ddc928754e3564d3622bca3e73399dbb68982719efa9b0b52a6->leave($__internal_710464a0a0852ddc928754e3564d3622bca3e73399dbb68982719efa9b0b52a6_prof);

        
        $__internal_e7de2239523373f0e464f483be4db29df47ab0200afe92e2f81dc468819f92df->leave($__internal_e7de2239523373f0e464f483be4db29df47ab0200afe92e2f81dc468819f92df_prof);

    }

    // line 286
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_e8764f6d41cdf3f3110cc23842b40c63bbd9ce36a153ccb0768c541d889157c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8764f6d41cdf3f3110cc23842b40c63bbd9ce36a153ccb0768c541d889157c8->enter($__internal_e8764f6d41cdf3f3110cc23842b40c63bbd9ce36a153ccb0768c541d889157c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_e1d945f9a8b7d187d45bba1c13b1d342574f021bc9ab6d90ead5653d24a34606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d945f9a8b7d187d45bba1c13b1d342574f021bc9ab6d90ead5653d24a34606->enter($__internal_e1d945f9a8b7d187d45bba1c13b1d342574f021bc9ab6d90ead5653d24a34606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 287
        echo "                ";
        
        $__internal_e1d945f9a8b7d187d45bba1c13b1d342574f021bc9ab6d90ead5653d24a34606->leave($__internal_e1d945f9a8b7d187d45bba1c13b1d342574f021bc9ab6d90ead5653d24a34606_prof);

        
        $__internal_e8764f6d41cdf3f3110cc23842b40c63bbd9ce36a153ccb0768c541d889157c8->leave($__internal_e8764f6d41cdf3f3110cc23842b40c63bbd9ce36a153ccb0768c541d889157c8_prof);

    }

    // line 349
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_1b179ef7be1c9cbbaf88402bced12e0e11af7bfe7c261f1dd43f3f4a1d299b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b179ef7be1c9cbbaf88402bced12e0e11af7bfe7c261f1dd43f3f4a1d299b59->enter($__internal_1b179ef7be1c9cbbaf88402bced12e0e11af7bfe7c261f1dd43f3f4a1d299b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_02de138bbfc3d0e9c1248268fb02ad16d987b46967a1f8e2675d582bf42ba62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02de138bbfc3d0e9c1248268fb02ad16d987b46967a1f8e2675d582bf42ba62a->enter($__internal_02de138bbfc3d0e9c1248268fb02ad16d987b46967a1f8e2675d582bf42ba62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 350
        echo "
";
        
        $__internal_02de138bbfc3d0e9c1248268fb02ad16d987b46967a1f8e2675d582bf42ba62a->leave($__internal_02de138bbfc3d0e9c1248268fb02ad16d987b46967a1f8e2675d582bf42ba62a_prof);

        
        $__internal_1b179ef7be1c9cbbaf88402bced12e0e11af7bfe7c261f1dd43f3f4a1d299b59->leave($__internal_1b179ef7be1c9cbbaf88402bced12e0e11af7bfe7c261f1dd43f3f4a1d299b59_prof);

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
", "EloboostedBackofficeBundle:Default:Layout.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Default/Layout.html.twig");
    }
}
