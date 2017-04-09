<?php

/* @EloboostedBackoffice/Tournoi/index.html.twig */
class __TwigTemplate_3839077bafe528a398fe505ac1d59434890ad3b9a7b3c7635ab1d46588205cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Tournoi/index.html.twig", 1);
        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascript' => array($this, 'block_extrascript'),
            'topnav' => array($this, 'block_topnav'),
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d59634d6e7d7ee75f063dba2f802e917fd4dd1cbde11d3e1be49ca1647b17ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59634d6e7d7ee75f063dba2f802e917fd4dd1cbde11d3e1be49ca1647b17ab3->enter($__internal_d59634d6e7d7ee75f063dba2f802e917fd4dd1cbde11d3e1be49ca1647b17ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/index.html.twig"));

        $__internal_d9dc3e946bc5db806359d3b85025ae1f385b645f5bf447bba587f4b062f21c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dc3e946bc5db806359d3b85025ae1f385b645f5bf447bba587f4b062f21c1b->enter($__internal_d9dc3e946bc5db806359d3b85025ae1f385b645f5bf447bba587f4b062f21c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59634d6e7d7ee75f063dba2f802e917fd4dd1cbde11d3e1be49ca1647b17ab3->leave($__internal_d59634d6e7d7ee75f063dba2f802e917fd4dd1cbde11d3e1be49ca1647b17ab3_prof);

        
        $__internal_d9dc3e946bc5db806359d3b85025ae1f385b645f5bf447bba587f4b062f21c1b->leave($__internal_d9dc3e946bc5db806359d3b85025ae1f385b645f5bf447bba587f4b062f21c1b_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_af145e286cb724d2b5ba58830b3379efc85cee7e18001cb263f54096dacac15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af145e286cb724d2b5ba58830b3379efc85cee7e18001cb263f54096dacac15d->enter($__internal_af145e286cb724d2b5ba58830b3379efc85cee7e18001cb263f54096dacac15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_28d39b9b136a4fa8b4958c0420f251fba3712b20998ef0da2d35487d02e6d511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d39b9b136a4fa8b4958c0420f251fba3712b20998ef0da2d35487d02e6d511->enter($__internal_28d39b9b136a4fa8b4958c0420f251fba3712b20998ef0da2d35487d02e6d511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 3
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_28d39b9b136a4fa8b4958c0420f251fba3712b20998ef0da2d35487d02e6d511->leave($__internal_28d39b9b136a4fa8b4958c0420f251fba3712b20998ef0da2d35487d02e6d511_prof);

        
        $__internal_af145e286cb724d2b5ba58830b3379efc85cee7e18001cb263f54096dacac15d->leave($__internal_af145e286cb724d2b5ba58830b3379efc85cee7e18001cb263f54096dacac15d_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_7ada3292a7636741ab95fd48b88a5dafe7ff157a3649b054df3bdac8d0cc5733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ada3292a7636741ab95fd48b88a5dafe7ff157a3649b054df3bdac8d0cc5733->enter($__internal_7ada3292a7636741ab95fd48b88a5dafe7ff157a3649b054df3bdac8d0cc5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_db067fca2fdf56e2172808640d63f016cddada67ee8db823200371e6ee6449a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db067fca2fdf56e2172808640d63f016cddada67ee8db823200371e6ee6449a6->enter($__internal_db067fca2fdf56e2172808640d63f016cddada67ee8db823200371e6ee6449a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 14
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_db067fca2fdf56e2172808640d63f016cddada67ee8db823200371e6ee6449a6->leave($__internal_db067fca2fdf56e2172808640d63f016cddada67ee8db823200371e6ee6449a6_prof);

        
        $__internal_7ada3292a7636741ab95fd48b88a5dafe7ff157a3649b054df3bdac8d0cc5733->leave($__internal_7ada3292a7636741ab95fd48b88a5dafe7ff157a3649b054df3bdac8d0cc5733_prof);

    }

    // line 32
    public function block_topnav($context, array $blocks = array())
    {
        $__internal_9cd9ec4356e47975ab7a03fff35ead05ce41c68ef677a0eb4e1919ed26164659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd9ec4356e47975ab7a03fff35ead05ce41c68ef677a0eb4e1919ed26164659->enter($__internal_9cd9ec4356e47975ab7a03fff35ead05ce41c68ef677a0eb4e1919ed26164659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        $__internal_e0adcd3ddc2e763fea0fe552ec5881bfc9fceba102ccfa9e7f1dd86a513d10c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0adcd3ddc2e763fea0fe552ec5881bfc9fceba102ccfa9e7f1dd86a513d10c1->enter($__internal_e0adcd3ddc2e763fea0fe552ec5881bfc9fceba102ccfa9e7f1dd86a513d10c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        // line 33
        echo "    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Tournaments</h3>
        </div>

        <div class=\"title_right\">
            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"\"> <button type=\"button\" class=\"btn btn-success\">ADD New Tournament</button></a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e0adcd3ddc2e763fea0fe552ec5881bfc9fceba102ccfa9e7f1dd86a513d10c1->leave($__internal_e0adcd3ddc2e763fea0fe552ec5881bfc9fceba102ccfa9e7f1dd86a513d10c1_prof);

        
        $__internal_9cd9ec4356e47975ab7a03fff35ead05ce41c68ef677a0eb4e1919ed26164659->leave($__internal_9cd9ec4356e47975ab7a03fff35ead05ce41c68ef677a0eb4e1919ed26164659_prof);

    }

    // line 48
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_11762553652ddf9019e7317a9c9c215a7fac967be3974ede041e7e4b6b0f95e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11762553652ddf9019e7317a9c9c215a7fac967be3974ede041e7e4b6b0f95e5->enter($__internal_11762553652ddf9019e7317a9c9c215a7fac967be3974ede041e7e4b6b0f95e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_dc1d5cc4627e1780340c0e125fcc075225fbc4626c8a6cca356e0f7d63828d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1d5cc4627e1780340c0e125fcc075225fbc4626c8a6cca356e0f7d63828d59->enter($__internal_dc1d5cc4627e1780340c0e125fcc075225fbc4626c8a6cca356e0f7d63828d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 49
        echo "

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Tournaments List
                    <small> ( ALL )</small>
                </h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                           aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a>
                            </li>
                            <li><a href=\"#\">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <p class=\"text-muted font-13 m-b-30\">
                    This is the list of all tournaments in the database .
                </p>

                <div id=\"datatable-responsive_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap no-footer\">
                    <div class=\"row\">

                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"datatable-responsive\"
                                   class=\"table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline\"
                                   cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"datatable-responsive_info\"
                                   style=\"width: 100%;\">
                                <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"datatable-responsive\"
                                        rowspan=\"1\" colspan=\"1\" style=\"width: 80px;\" aria-sort=\"ascending\"
                                        aria-label=\"First name: activate to sort column descending\">ID
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 79px;\"
                                        aria-label=\"Last name: activate to sort column ascending\">Name
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 169px;\"
                                        aria-label=\"Position: activate to sort column ascending\">Start Date
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Office: activate to sort column ascending\">End Date
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 34px;\"
                                        aria-label=\"Age: activate to sort column ascending\">Reward 1
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Start date: activate to sort column ascending\">Reward 2
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"Salary: activate to sort column ascending\">Reward 3
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 42px;\"
                                        aria-label=\"Extn.: activate to sort column ascending\">Players Number
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 162px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">State
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournaments"]) ? $context["tournaments"] : $this->getContext($context, "tournaments")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 132
            echo "                                <tr role=\"row\" class=\"odd\">
                                    <td tabindex=\"0\" class=\"sorting_1\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idTournoi", array()), "html", null, true);
            echo "</td>

                                    <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "startDate", array())), "html", null, true);
            echo "</td>
                                    <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "endDate", array())), "html", null, true);
            echo "</td>
                                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward1", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward2", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward3", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nbrJoueur", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 143
            if (($this->getAttribute($context["t"], "etat", array()) == 1)) {
                // line 144
                echo "                                        <span class=\"label label-upper label-primary\">Open</span>
                                        ";
            } elseif (($this->getAttribute(            // line 145
$context["t"], "etat", array()) == 2)) {
                // line 146
                echo "                                        <span class=\"label label-upper label-success\">Running</span>
                                        ";
            } elseif (($this->getAttribute(            // line 147
$context["t"], "etat", array()) == 3)) {
                // line 148
                echo "                                        <span class=\"label label-upper label-default\">Finished</span>
                                        ";
            }
            // line 150
            echo "                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row\">

                    </div>
                </div>


            </div>
        </div>
    </div>
";
        
        $__internal_dc1d5cc4627e1780340c0e125fcc075225fbc4626c8a6cca356e0f7d63828d59->leave($__internal_dc1d5cc4627e1780340c0e125fcc075225fbc4626c8a6cca356e0f7d63828d59_prof);

        
        $__internal_11762553652ddf9019e7317a9c9c215a7fac967be3974ede041e7e4b6b0f95e5->leave($__internal_11762553652ddf9019e7317a9c9c215a7fac967be3974ede041e7e4b6b0f95e5_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Tournoi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 153,  345 => 150,  341 => 148,  339 => 147,  336 => 146,  334 => 145,  331 => 144,  329 => 143,  324 => 141,  320 => 140,  316 => 139,  312 => 138,  308 => 137,  304 => 136,  300 => 135,  295 => 133,  292 => 132,  288 => 131,  204 => 49,  195 => 48,  172 => 33,  163 => 32,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  94 => 14,  85 => 13,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EloboostedBackofficeBundle:Default:Layout.html.twig\" %}
{% block extrastyles %}

    <link href=\"{{ asset('/BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">


{% endblock %}

{% block extrascript %}
    <script src=\"{{ asset('/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
{% endblock %}


{% block topnav %}
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Tournaments</h3>
        </div>

        <div class=\"title_right\">
            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                <div class=\"input-group\">
                    <a href=\"\"> <button type=\"button\" class=\"btn btn-success\">ADD New Tournament</button></a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block insiderowbottom %}


    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Tournaments List
                    <small> ( ALL )</small>
                </h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                           aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Settings 1</a>
                            </li>
                            <li><a href=\"#\">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <p class=\"text-muted font-13 m-b-30\">
                    This is the list of all tournaments in the database .
                </p>

                <div id=\"datatable-responsive_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap no-footer\">
                    <div class=\"row\">

                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <table id=\"datatable-responsive\"
                                   class=\"table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline\"
                                   cellspacing=\"0\" width=\"100%\" role=\"grid\" aria-describedby=\"datatable-responsive_info\"
                                   style=\"width: 100%;\">
                                <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"datatable-responsive\"
                                        rowspan=\"1\" colspan=\"1\" style=\"width: 80px;\" aria-sort=\"ascending\"
                                        aria-label=\"First name: activate to sort column descending\">ID
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 79px;\"
                                        aria-label=\"Last name: activate to sort column ascending\">Name
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 169px;\"
                                        aria-label=\"Position: activate to sort column ascending\">Start Date
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Office: activate to sort column ascending\">End Date
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 34px;\"
                                        aria-label=\"Age: activate to sort column ascending\">Reward 1
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Start date: activate to sort column ascending\">Reward 2
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"Salary: activate to sort column ascending\">Reward 3
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 42px;\"
                                        aria-label=\"Extn.: activate to sort column ascending\">Players Number
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 162px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">State
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for t in tournaments %}
                                <tr role=\"row\" class=\"odd\">
                                    <td tabindex=\"0\" class=\"sorting_1\">{{ t.idTournoi }}</td>

                                    <td>{{ t.nom }}</td>
                                    <td>{{ t.startDate | date }}</td>
                                    <td>{{ t.endDate | date }}</td>
                                    <td>{{ t.reward1 }}</td>
                                    <td>{{ t.reward2 }}</td>
                                    <td>{{ t.reward3 }}</td>
                                    <td>{{ t.nbrJoueur }}</td>
                                    <td>
                                        {% if t.etat == 1 %}
                                        <span class=\"label label-upper label-primary\">Open</span>
                                        {% elseif t.etat == 2 %}
                                        <span class=\"label label-upper label-success\">Running</span>
                                        {% elseif t.etat == 3 %}
                                        <span class=\"label label-upper label-default\">Finished</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row\">

                    </div>
                </div>


            </div>
        </div>
    </div>
{% endblock %}", "@EloboostedBackoffice/Tournoi/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Tournoi\\index.html.twig");
    }
}
