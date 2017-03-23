<?php

/* @EloboostedBackoffice/Default/Layout.html.twig */
class __TwigTemplate_9ee1d3259474363bdc538e5dd379e381596fd54f0be11026ea56fcc4845837e8 extends Twig_Template
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
        $__internal_a17e197a4bf31339945fecceb2c4e202e898e039141550388e6e66c33bc78a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17e197a4bf31339945fecceb2c4e202e898e039141550388e6e66c33bc78a62->enter($__internal_a17e197a4bf31339945fecceb2c4e202e898e039141550388e6e66c33bc78a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

        $__internal_69f8239e80b0a1bacab9bf51a1fa11d6e14a0e960d35ebc4a5ef6c21a1640dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f8239e80b0a1bacab9bf51a1fa11d6e14a0e960d35ebc4a5ef6c21a1640dce->enter($__internal_69f8239e80b0a1bacab9bf51a1fa11d6e14a0e960d35ebc4a5ef6c21a1640dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Default/Layout.html.twig"));

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
        
        $__internal_a17e197a4bf31339945fecceb2c4e202e898e039141550388e6e66c33bc78a62->leave($__internal_a17e197a4bf31339945fecceb2c4e202e898e039141550388e6e66c33bc78a62_prof);

        
        $__internal_69f8239e80b0a1bacab9bf51a1fa11d6e14a0e960d35ebc4a5ef6c21a1640dce->leave($__internal_69f8239e80b0a1bacab9bf51a1fa11d6e14a0e960d35ebc4a5ef6c21a1640dce_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4f86a060e4df53f30de998fdf1e544c93cb67678e099aadb1e42e59a3fbe655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f86a060e4df53f30de998fdf1e544c93cb67678e099aadb1e42e59a3fbe655->enter($__internal_d4f86a060e4df53f30de998fdf1e544c93cb67678e099aadb1e42e59a3fbe655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58c185f252b2c21cca8446d9fccd694c1ca2eca0dd4c086a89eba04328d81328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c185f252b2c21cca8446d9fccd694c1ca2eca0dd4c086a89eba04328d81328->enter($__internal_58c185f252b2c21cca8446d9fccd694c1ca2eca0dd4c086a89eba04328d81328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gentelella Alela! | ";
        
        $__internal_58c185f252b2c21cca8446d9fccd694c1ca2eca0dd4c086a89eba04328d81328->leave($__internal_58c185f252b2c21cca8446d9fccd694c1ca2eca0dd4c086a89eba04328d81328_prof);

        
        $__internal_d4f86a060e4df53f30de998fdf1e544c93cb67678e099aadb1e42e59a3fbe655->leave($__internal_d4f86a060e4df53f30de998fdf1e544c93cb67678e099aadb1e42e59a3fbe655_prof);

    }

    // line 32
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_b95b03234ca3c5099e25a379939c2f430f528a6443620514840ad0e7733cc669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95b03234ca3c5099e25a379939c2f430f528a6443620514840ad0e7733cc669->enter($__internal_b95b03234ca3c5099e25a379939c2f430f528a6443620514840ad0e7733cc669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_c4e10db37a56568e15e78d6d8e9925ff95236428bd48993533eb0594c95beb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e10db37a56568e15e78d6d8e9925ff95236428bd48993533eb0594c95beb65->enter($__internal_c4e10db37a56568e15e78d6d8e9925ff95236428bd48993533eb0594c95beb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 33
        echo "
    ";
        
        $__internal_c4e10db37a56568e15e78d6d8e9925ff95236428bd48993533eb0594c95beb65->leave($__internal_c4e10db37a56568e15e78d6d8e9925ff95236428bd48993533eb0594c95beb65_prof);

        
        $__internal_b95b03234ca3c5099e25a379939c2f430f528a6443620514840ad0e7733cc669->leave($__internal_b95b03234ca3c5099e25a379939c2f430f528a6443620514840ad0e7733cc669_prof);

    }

    // line 249
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_89c0b7854f87a00a63cf93b1f9ca081f31042c6ec96b71f4a9016cf16c6c0986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c0b7854f87a00a63cf93b1f9ca081f31042c6ec96b71f4a9016cf16c6c0986->enter($__internal_89c0b7854f87a00a63cf93b1f9ca081f31042c6ec96b71f4a9016cf16c6c0986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_e181ac6da075c4c33c5b15d5e9cdc0877bad6feedb4f3951e39b8c93502e3947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e181ac6da075c4c33c5b15d5e9cdc0877bad6feedb4f3951e39b8c93502e3947->enter($__internal_e181ac6da075c4c33c5b15d5e9cdc0877bad6feedb4f3951e39b8c93502e3947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 250
        echo "                    ";
        
        $__internal_e181ac6da075c4c33c5b15d5e9cdc0877bad6feedb4f3951e39b8c93502e3947->leave($__internal_e181ac6da075c4c33c5b15d5e9cdc0877bad6feedb4f3951e39b8c93502e3947_prof);

        
        $__internal_89c0b7854f87a00a63cf93b1f9ca081f31042c6ec96b71f4a9016cf16c6c0986->leave($__internal_89c0b7854f87a00a63cf93b1f9ca081f31042c6ec96b71f4a9016cf16c6c0986_prof);

    }

    // line 254
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_73c0c38aae96aaa220359a900795bba61f36c6d8d471caec6bdac0c93abab1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c0c38aae96aaa220359a900795bba61f36c6d8d471caec6bdac0c93abab1e0->enter($__internal_73c0c38aae96aaa220359a900795bba61f36c6d8d471caec6bdac0c93abab1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_3836984d32a77c28bfbbdb231f82851b961b63695d76115edf91a64b185d394d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3836984d32a77c28bfbbdb231f82851b961b63695d76115edf91a64b185d394d->enter($__internal_3836984d32a77c28bfbbdb231f82851b961b63695d76115edf91a64b185d394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 255
        echo "                    ";
        
        $__internal_3836984d32a77c28bfbbdb231f82851b961b63695d76115edf91a64b185d394d->leave($__internal_3836984d32a77c28bfbbdb231f82851b961b63695d76115edf91a64b185d394d_prof);

        
        $__internal_73c0c38aae96aaa220359a900795bba61f36c6d8d471caec6bdac0c93abab1e0->leave($__internal_73c0c38aae96aaa220359a900795bba61f36c6d8d471caec6bdac0c93abab1e0_prof);

    }

    // line 259
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_dcdda82a7ca5aa615897f1bb4856b280cc86be193ede461dae61c1b252992b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdda82a7ca5aa615897f1bb4856b280cc86be193ede461dae61c1b252992b6b->enter($__internal_dcdda82a7ca5aa615897f1bb4856b280cc86be193ede461dae61c1b252992b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_163cea97ed35250b44b7cb36d47bac5ea3e1fdcc800f18148b0118863d734100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163cea97ed35250b44b7cb36d47bac5ea3e1fdcc800f18148b0118863d734100->enter($__internal_163cea97ed35250b44b7cb36d47bac5ea3e1fdcc800f18148b0118863d734100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 260
        echo "                    ";
        
        $__internal_163cea97ed35250b44b7cb36d47bac5ea3e1fdcc800f18148b0118863d734100->leave($__internal_163cea97ed35250b44b7cb36d47bac5ea3e1fdcc800f18148b0118863d734100_prof);

        
        $__internal_dcdda82a7ca5aa615897f1bb4856b280cc86be193ede461dae61c1b252992b6b->leave($__internal_dcdda82a7ca5aa615897f1bb4856b280cc86be193ede461dae61c1b252992b6b_prof);

    }

    // line 264
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_4e38fb42cf1cb3d28db792981e22095e687c70239086620e0f5e7a48e3bc0766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e38fb42cf1cb3d28db792981e22095e687c70239086620e0f5e7a48e3bc0766->enter($__internal_4e38fb42cf1cb3d28db792981e22095e687c70239086620e0f5e7a48e3bc0766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_5f513b707fbb305e762dcdfcb3c62e2e0018d7e5ffd7aef62fc24a083c6e48dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f513b707fbb305e762dcdfcb3c62e2e0018d7e5ffd7aef62fc24a083c6e48dc->enter($__internal_5f513b707fbb305e762dcdfcb3c62e2e0018d7e5ffd7aef62fc24a083c6e48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 265
        echo "                    ";
        
        $__internal_5f513b707fbb305e762dcdfcb3c62e2e0018d7e5ffd7aef62fc24a083c6e48dc->leave($__internal_5f513b707fbb305e762dcdfcb3c62e2e0018d7e5ffd7aef62fc24a083c6e48dc_prof);

        
        $__internal_4e38fb42cf1cb3d28db792981e22095e687c70239086620e0f5e7a48e3bc0766->leave($__internal_4e38fb42cf1cb3d28db792981e22095e687c70239086620e0f5e7a48e3bc0766_prof);

    }

    // line 269
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_440c1c1477ea4f6ff1487dd037ab5d8b12ae4b5a9cb166badbc0ecb0f6ed6fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440c1c1477ea4f6ff1487dd037ab5d8b12ae4b5a9cb166badbc0ecb0f6ed6fb1->enter($__internal_440c1c1477ea4f6ff1487dd037ab5d8b12ae4b5a9cb166badbc0ecb0f6ed6fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_ee70cde6f46d63a375a093151d62516c3795617ae4f96aa0b6c9f43d0e800b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee70cde6f46d63a375a093151d62516c3795617ae4f96aa0b6c9f43d0e800b56->enter($__internal_ee70cde6f46d63a375a093151d62516c3795617ae4f96aa0b6c9f43d0e800b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 270
        echo "                    ";
        
        $__internal_ee70cde6f46d63a375a093151d62516c3795617ae4f96aa0b6c9f43d0e800b56->leave($__internal_ee70cde6f46d63a375a093151d62516c3795617ae4f96aa0b6c9f43d0e800b56_prof);

        
        $__internal_440c1c1477ea4f6ff1487dd037ab5d8b12ae4b5a9cb166badbc0ecb0f6ed6fb1->leave($__internal_440c1c1477ea4f6ff1487dd037ab5d8b12ae4b5a9cb166badbc0ecb0f6ed6fb1_prof);

    }

    // line 274
    public function block_sousmenu6($context, array $blocks = array())
    {
        $__internal_2bbe085c07c788f7f9f5b25313d0ffc11c9f3c5b39207c65e2ae4938f1602f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbe085c07c788f7f9f5b25313d0ffc11c9f3c5b39207c65e2ae4938f1602f25->enter($__internal_2bbe085c07c788f7f9f5b25313d0ffc11c9f3c5b39207c65e2ae4938f1602f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        $__internal_666549ca80cd931713f0f3670e3f33609905e9314abfe20ca38a06e5fa0101bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666549ca80cd931713f0f3670e3f33609905e9314abfe20ca38a06e5fa0101bb->enter($__internal_666549ca80cd931713f0f3670e3f33609905e9314abfe20ca38a06e5fa0101bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu6"));

        // line 275
        echo "                    ";
        
        $__internal_666549ca80cd931713f0f3670e3f33609905e9314abfe20ca38a06e5fa0101bb->leave($__internal_666549ca80cd931713f0f3670e3f33609905e9314abfe20ca38a06e5fa0101bb_prof);

        
        $__internal_2bbe085c07c788f7f9f5b25313d0ffc11c9f3c5b39207c65e2ae4938f1602f25->leave($__internal_2bbe085c07c788f7f9f5b25313d0ffc11c9f3c5b39207c65e2ae4938f1602f25_prof);

    }

    // line 282
    public function block_insiderowcenter($context, array $blocks = array())
    {
        $__internal_ae4b91bfdc39f44278d0bd5fe806347829f31adb5395037b0c9b781740367485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4b91bfdc39f44278d0bd5fe806347829f31adb5395037b0c9b781740367485->enter($__internal_ae4b91bfdc39f44278d0bd5fe806347829f31adb5395037b0c9b781740367485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        $__internal_9b6380108461b56568905bb6482860421f14450cac0363d51fa744c44eca8044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6380108461b56568905bb6482860421f14450cac0363d51fa744c44eca8044->enter($__internal_9b6380108461b56568905bb6482860421f14450cac0363d51fa744c44eca8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowcenter"));

        // line 283
        echo "                ";
        
        $__internal_9b6380108461b56568905bb6482860421f14450cac0363d51fa744c44eca8044->leave($__internal_9b6380108461b56568905bb6482860421f14450cac0363d51fa744c44eca8044_prof);

        
        $__internal_ae4b91bfdc39f44278d0bd5fe806347829f31adb5395037b0c9b781740367485->leave($__internal_ae4b91bfdc39f44278d0bd5fe806347829f31adb5395037b0c9b781740367485_prof);

    }

    // line 288
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_e060e5d5dea0394d298f5e58a88862ceb12b838f344010d77eda3d788bb1f87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e060e5d5dea0394d298f5e58a88862ceb12b838f344010d77eda3d788bb1f87e->enter($__internal_e060e5d5dea0394d298f5e58a88862ceb12b838f344010d77eda3d788bb1f87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_38a45177d862545be92cf403c92a382fb38d16f5176d706a2796effc5d06e73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a45177d862545be92cf403c92a382fb38d16f5176d706a2796effc5d06e73f->enter($__internal_38a45177d862545be92cf403c92a382fb38d16f5176d706a2796effc5d06e73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 289
        echo "                ";
        
        $__internal_38a45177d862545be92cf403c92a382fb38d16f5176d706a2796effc5d06e73f->leave($__internal_38a45177d862545be92cf403c92a382fb38d16f5176d706a2796effc5d06e73f_prof);

        
        $__internal_e060e5d5dea0394d298f5e58a88862ceb12b838f344010d77eda3d788bb1f87e->leave($__internal_e060e5d5dea0394d298f5e58a88862ceb12b838f344010d77eda3d788bb1f87e_prof);

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
", "@EloboostedBackoffice/Default/Layout.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Default\\Layout.html.twig");
    }
}
