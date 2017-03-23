<?php

/* EloboostedBackofficeBundle:Default:Layout.html.twig */
class __TwigTemplate_0b40da57960ec7c0e86dfd777c115ee4c8fcf4a1df997ea594038d0285b17f27 extends Twig_Template
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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e091c3388f74cc239efa433d6a4a1d657d71b81d13189ed5557877abb36cd776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e091c3388f74cc239efa433d6a4a1d657d71b81d13189ed5557877abb36cd776->enter($__internal_e091c3388f74cc239efa433d6a4a1d657d71b81d13189ed5557877abb36cd776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

        $__internal_196e997e9570d640ae4aa6d2e4bd072c407c4c8f2b7485c3bcbe4f1b3ba61b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196e997e9570d640ae4aa6d2e4bd072c407c4c8f2b7485c3bcbe4f1b3ba61b65->enter($__internal_196e997e9570d640ae4aa6d2e4bd072c407c4c8f2b7485c3bcbe4f1b3ba61b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:Layout.html.twig"));

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
                    <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
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
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Dashboard</a></li>
                                    <li><a href=\"#\">Dashboard2</a></li>
                                    <li><a href=\"#\">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">General Form</a></li>
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
        // line 156
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
        // line 180
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
        // line 192
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
        // line 204
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
        // line 216
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
        // line 249
        $this->displayBlock('sousmenu1', $context, $blocks);
        // line 251
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 254
        $this->displayBlock('sousmenu2', $context, $blocks);
        // line 256
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 259
        $this->displayBlock('sousmenu3', $context, $blocks);
        // line 261
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 264
        $this->displayBlock('sousmenu4', $context, $blocks);
        // line 266
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 269
        $this->displayBlock('sousmenu5', $context, $blocks);
        // line 271
        echo "                </div>

                <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                    ";
        // line 274
        $this->displayBlock('sousmenu6', $context, $blocks);
        // line 276
        echo "                </div>

            </div>
            <!-- /top tiles -->

            <div class=\"row\">
                ";
        // line 282
        $this->displayBlock('insiderowcenter', $context, $blocks);
        // line 284
        echo "            </div>
            <br />

            <div class=\"row\">
                ";
        // line 288
        $this->displayBlock('insiderowbottom', $context, $blocks);
        // line 290
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
";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "
<!-- jQuery -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- NProgress -->
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
<!-- Chart.js -->
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- gauge.js -->
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-progressbar -->
<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<!-- Skycons -->
<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
<!-- Flot -->
<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<!-- Flot plugins -->
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
<!-- DateJS -->
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap-daterangepicker -->
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme Scripts -->
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
        
        $__internal_e091c3388f74cc239efa433d6a4a1d657d71b81d13189ed5557877abb36cd776->leave($__internal_e091c3388f74cc239efa433d6a4a1d657d71b81d13189ed5557877abb36cd776_prof);

        
        $__internal_196e997e9570d640ae4aa6d2e4bd072c407c4c8f2b7485c3bcbe4f1b3ba61b65->leave($__internal_196e997e9570d640ae4aa6d2e4bd072c407c4c8f2b7485c3bcbe4f1b3ba61b65_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_176fc161c0386f468342050023fbd5048f841cec376b2d8ceb4a4b2bc20ec645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176fc161c0386f468342050023fbd5048f841cec376b2d8ceb4a4b2bc20ec645->enter($__internal_176fc161c0386f468342050023fbd5048f841cec376b2d8ceb4a4b2bc20ec645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ac620dbc9f4c4ad50605c8963079d69ad274fe61e2d28b935ec273c82595bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac620dbc9f4c4ad50605c8963079d69ad274fe61e2d28b935ec273c82595bbf->enter($__internal_8ac620dbc9f4c4ad50605c8963079d69ad274fe61e2d28b935ec273c82595bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gentelella Alela! | ";
        
        $__internal_8ac620dbc9f4c4ad50605c8963079d69ad274fe61e2d28b935ec273c82595bbf->leave($__internal_8ac620dbc9f4c4ad50605c8963079d69ad274fe61e2d28b935ec273c82595bbf_prof);

        
        $__internal_176fc161c0386f468342050023fbd5048f841cec376b2d8ceb4a4b2bc20ec645->leave($__internal_176fc161c0386f468342050023fbd5048f841cec376b2d8ceb4a4b2bc20ec645_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_129931ac0bb2bfd8cb20b0c6525cd5178ff755795d6bb49f403c4fd89c07a6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129931ac0bb2bfd8cb20b0c6525cd5178ff755795d6bb49f403c4fd89c07a6e3->enter($__internal_129931ac0bb2bfd8cb20b0c6525cd5178ff755795d6bb49f403c4fd89c07a6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_15ebccebe51dcdc13218c429fef04e44119f75c0da012ff4d6894e0df3efe028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ebccebe51dcdc13218c429fef04e44119f75c0da012ff4d6894e0df3efe028->enter($__internal_15ebccebe51dcdc13218c429fef04e44119f75c0da012ff4d6894e0df3efe028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_15ebccebe51dcdc13218c429fef04e44119f75c0da012ff4d6894e0df3efe028->leave($__internal_15ebccebe51dcdc13218c429fef04e44119f75c0da012ff4d6894e0df3efe028_prof);

        
        $__internal_129931ac0bb2bfd8cb20b0c6525cd5178ff755795d6bb49f403c4fd89c07a6e3->leave($__internal_129931ac0bb2bfd8cb20b0c6525cd5178ff755795d6bb49f403c4fd89c07a6e3_prof);

    }

    // line 249
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_22710fcab4719c14bd3b082eacc894ed9b62452943e3de58f67136c4b2318b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22710fcab4719c14bd3b082eacc894ed9b62452943e3de58f67136c4b2318b49->enter($__internal_22710fcab4719c14bd3b082eacc894ed9b62452943e3de58f67136c4b2318b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_fcd29a58bf049cfd01ece1a02ea718880b12ac198de1923381df53e9f79cfab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd29a58bf049cfd01ece1a02ea718880b12ac198de1923381df53e9f79cfab5->enter($__internal_fcd29a58bf049cfd01ece1a02ea718880b12ac198de1923381df53e9f79cfab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 250
        echo "                    ";
        
        $__internal_fcd29a58bf049cfd01ece1a02ea718880b12ac198de1923381df53e9f79cfab5->leave($__internal_fcd29a58bf049cfd01ece1a02ea718880b12ac198de1923381df53e9f79cfab5_prof);

        
        $__internal_22710fcab4719c14bd3b082eacc894ed9b62452943e3de58f67136c4b2318b49->leave($__internal_22710fcab4719c14bd3b082eacc894ed9b62452943e3de58f67136c4b2318b49_prof);

    }

    // line 254
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_73dacc2dc578ec204322ac7aaa2329e0958fa97b71d94691d9ea0a036e1dd5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dacc2dc578ec204322ac7aaa2329e0958fa97b71d94691d9ea0a036e1dd5d7->enter($__internal_73dacc2dc578ec204322ac7aaa2329e0958fa97b71d94691d9ea0a036e1dd5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_0a25c9ce6eab1b60bc57f821cb0ea9f1a9aca43ddcac59782ed73948b8228d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a25c9ce6eab1b60bc57f821cb0ea9f1a9aca43ddcac59782ed73948b8228d9c->enter($__internal_0a25c9ce6eab1b60bc57f821cb0ea9f1a9aca43ddcac59782ed73948b8228d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 255
        echo "                    ";
        
        $__internal_0a25c9ce6eab1b60bc57f821cb0ea9f1a9aca43ddcac59782ed73948b8228d9c->leave($__internal_0a25c9ce6eab1b60bc57f821cb0ea9f1a9aca43ddcac59782ed73948b8228d9c_prof);

        
        $__internal_73dacc2dc578ec204322ac7aaa2329e0958fa97b71d94691d9ea0a036e1dd5d7->leave($__internal_73dacc2dc578ec204322ac7aaa2329e0958fa97b71d94691d9ea0a036e1dd5d7_prof);

    }

    // line 259
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_26ba26ba74bcabd7edd1c65e1640016a40393c98a501f453bd2cbc280ece488c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ba26ba74bcabd7edd1c65e1640016a40393c98a501f453bd2cbc280ece488c->enter($__internal_26ba26ba74bcabd7edd1c65e1640016a40393c98a501f453bd2cbc280ece488c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_5f03e5260c42ae7b5f61c2104acb0bbfd6aeb59be005a3cbdcb367ef7b0a85a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f03e5260c42ae7b5f61c2104acb0bbfd6aeb59be005a3cbdcb367ef7b0a85a7->enter($__internal_5f03e5260c42ae7b5f61c2104acb0bbfd6aeb59be005a3cbdcb367ef7b0a85a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 260
        echo "                    ";
        
        $__internal_5f03e5260c42ae7b5f61c2104acb0bbfd6aeb59be005a3cbdcb367ef7b0a85a7->leave($__internal_5f03e5260c42ae7b5f61c2104acb0bbfd6aeb59be005a3cbdcb367ef7b0a85a7_prof);

        
        $__internal_26ba26ba74bcabd7edd1c65e1640016a40393c98a501f453bd2cbc280ece488c->leave($__internal_26ba26ba74bcabd7edd1c65e1640016a40393c98a501f453bd2cbc280ece488c_prof);

    }

    // line 264
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_895176feba05389a0ebfd61562e874a30e1d34a7a6ba136d731f107c90d23b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895176feba05389a0ebfd61562e874a30e1d34a7a6ba136d731f107c90d23b4f->enter($__internal_895176feba05389a0ebfd61562e874a30e1d34a7a6ba136d731f107c90d23b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_05bb1f154254123365704b30b2db3a2e86b93420fc7ab757decaa66da600c1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bb1f154254123365704b30b2db3a2e86b93420fc7ab757decaa66da600c1ed->enter($__internal_05bb1f154254123365704b30b2db3a2e86b93420fc7ab757decaa66da600c1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 265
        echo "                    ";
        
        $__internal_05bb1f154254123365704b30b2db3a2e86b93420fc7ab757decaa66da600c1ed->leave($__internal_05bb1f154254123365704b30b2db3a2e86b93420fc7ab757decaa66da600c1ed_prof);

        
        $__internal_895176feba05389a0ebfd61562e874a30e1d34a7a6ba136d731f107c90d23b4f->leave($__internal_895176feba05389a0ebfd61562e874a30e1d34a7a6ba136d731f107c90d23b4f_prof);

    }

    // line 269
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_17e43b05dbb301fe5d8b477e59a296e506120d42b9e6ebf9f4f6d24335df1a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e43b05dbb301fe5d8b477e59a296e506120d42b9e6ebf9f4f6d24335df1a84->enter($__internal_17e43b05dbb301fe5d8b477e59a296e506120d42b9e6ebf9f4f6d24335df1a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_0c690776658f186447065dd085c4a6e6016f06e4723c6e23110dc324dd74414a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c690776658f186447065dd085c4a6e6016f06e4723c6e23110dc324dd74414a->enter($__internal_0c690776658f186447065dd085c4a6e6016f06e4723c6e23110dc324dd74414a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 270
        echo "                    ";
        
        $__internal_0c690776658f186447065dd085c4a6e6016f06e4723c6e23110dc324dd74414a->leave($__internal_0c690776658f186447065dd085c4a6e6016f06e4723c6e23110dc324dd74414a_prof);

        
        $__internal_17e43b05dbb301fe5d8b477e59a296e506120d42b9e6ebf9f4f6d24335df1a84->leave($__internal_17e43b05dbb301fe5d8b477e59a296e506120d42b9e6ebf9f4f6d24335df1a84_prof);

    }

    // line 274
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_5710399287678ff40891f4b7afae27223f2adcf60804068ff5fdb4669c4473c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5710399287678ff40891f4b7afae27223f2adcf60804068ff5fdb4669c4473c3->enter($__internal_5710399287678ff40891f4b7afae27223f2adcf60804068ff5fdb4669c4473c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_21217ecf843966add72ee902bd46ed3dbe419b31c36a8bde885edc8050ec46f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21217ecf843966add72ee902bd46ed3dbe419b31c36a8bde885edc8050ec46f6->enter($__internal_21217ecf843966add72ee902bd46ed3dbe419b31c36a8bde885edc8050ec46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 275
        echo "                    ";
        
        $__internal_21217ecf843966add72ee902bd46ed3dbe419b31c36a8bde885edc8050ec46f6->leave($__internal_21217ecf843966add72ee902bd46ed3dbe419b31c36a8bde885edc8050ec46f6_prof);

        
        $__internal_5710399287678ff40891f4b7afae27223f2adcf60804068ff5fdb4669c4473c3->leave($__internal_5710399287678ff40891f4b7afae27223f2adcf60804068ff5fdb4669c4473c3_prof);

    }

    // line 282
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_37ee19fe4956d0295efe60bea29ad08353e7248f8091fa1341bcaa1c9ecf3b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ee19fe4956d0295efe60bea29ad08353e7248f8091fa1341bcaa1c9ecf3b07->enter($__internal_37ee19fe4956d0295efe60bea29ad08353e7248f8091fa1341bcaa1c9ecf3b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_15bcc10016ec79227b9f6de5a256ac510d740a37985330647d9f5a38aa3226d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bcc10016ec79227b9f6de5a256ac510d740a37985330647d9f5a38aa3226d5->enter($__internal_15bcc10016ec79227b9f6de5a256ac510d740a37985330647d9f5a38aa3226d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 283
        echo "                ";
        
        $__internal_15bcc10016ec79227b9f6de5a256ac510d740a37985330647d9f5a38aa3226d5->leave($__internal_15bcc10016ec79227b9f6de5a256ac510d740a37985330647d9f5a38aa3226d5_prof);

        
        $__internal_37ee19fe4956d0295efe60bea29ad08353e7248f8091fa1341bcaa1c9ecf3b07->leave($__internal_37ee19fe4956d0295efe60bea29ad08353e7248f8091fa1341bcaa1c9ecf3b07_prof);

    }

    // line 288
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_2b644f1507d82b8352954a8f3ac447ca590f2404c059e7436e0de93d2c27c01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b644f1507d82b8352954a8f3ac447ca590f2404c059e7436e0de93d2c27c01f->enter($__internal_2b644f1507d82b8352954a8f3ac447ca590f2404c059e7436e0de93d2c27c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_fae579b398913b975dd885900c2d2787f2bfbe494163ec15fecb70ca59524729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae579b398913b975dd885900c2d2787f2bfbe494163ec15fecb70ca59524729->enter($__internal_fae579b398913b975dd885900c2d2787f2bfbe494163ec15fecb70ca59524729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 289
        echo "                ";
        
        $__internal_fae579b398913b975dd885900c2d2787f2bfbe494163ec15fecb70ca59524729->leave($__internal_fae579b398913b975dd885900c2d2787f2bfbe494163ec15fecb70ca59524729_prof);

        
        $__internal_2b644f1507d82b8352954a8f3ac447ca590f2404c059e7436e0de93d2c27c01f->leave($__internal_2b644f1507d82b8352954a8f3ac447ca590f2404c059e7436e0de93d2c27c01f_prof);

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
        return array (  721 => 289,  712 => 288,  702 => 283,  693 => 282,  683 => 275,  674 => 274,  664 => 270,  655 => 269,  645 => 265,  636 => 264,  626 => 260,  617 => 259,  607 => 255,  598 => 254,  588 => 250,  579 => 249,  568 => 33,  559 => 32,  541 => 11,  526 => 350,  520 => 347,  516 => 346,  511 => 344,  507 => 343,  503 => 342,  498 => 340,  493 => 338,  489 => 337,  485 => 336,  480 => 334,  476 => 333,  472 => 332,  468 => 331,  464 => 330,  459 => 328,  454 => 326,  449 => 324,  444 => 322,  439 => 320,  434 => 318,  429 => 316,  424 => 314,  419 => 312,  414 => 310,  392 => 290,  390 => 288,  384 => 284,  382 => 282,  374 => 276,  372 => 274,  367 => 271,  365 => 269,  360 => 266,  358 => 264,  353 => 261,  351 => 259,  346 => 256,  344 => 254,  339 => 251,  337 => 249,  301 => 216,  286 => 204,  271 => 192,  256 => 180,  227 => 156,  124 => 56,  116 => 52,  114 => 51,  96 => 35,  94 => 32,  89 => 30,  83 => 27,  78 => 25,  73 => 23,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  46 => 11,  35 => 2,);
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
                    <a href=\"#\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentelella Alela!</span></a>
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
                            <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">Dashboard</a></li>
                                    <li><a href=\"#\">Dashboard2</a></li>
                                    <li><a href=\"#\">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"#\">General Form</a></li>
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
{{ asset('') }}
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

</body>
</html>
", "EloboostedBackofficeBundle:Default:Layout.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Default/Layout.html.twig");
    }
}
