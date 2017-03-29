<?php

/* EloboostedBackofficeBundle:Tournoi:index.html.twig */
class __TwigTemplate_8d25e5489fd8b18c25d28ecc93489d02a3fc7f48619614f010462f870fb8d288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Tournoi:index.html.twig", 1);
        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascript' => array($this, 'block_extrascript'),
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d447fc4bb8b678cf1d3d0219f5f59fdf9fe2d0c90dd30407ee078e15cfa0a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d447fc4bb8b678cf1d3d0219f5f59fdf9fe2d0c90dd30407ee078e15cfa0a42->enter($__internal_0d447fc4bb8b678cf1d3d0219f5f59fdf9fe2d0c90dd30407ee078e15cfa0a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:index.html.twig"));

        $__internal_833b3cd13e4a070cba7d4f4d0e3647a2ab7d2a7bc2d04a16c9f970c465e74cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833b3cd13e4a070cba7d4f4d0e3647a2ab7d2a7bc2d04a16c9f970c465e74cf6->enter($__internal_833b3cd13e4a070cba7d4f4d0e3647a2ab7d2a7bc2d04a16c9f970c465e74cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d447fc4bb8b678cf1d3d0219f5f59fdf9fe2d0c90dd30407ee078e15cfa0a42->leave($__internal_0d447fc4bb8b678cf1d3d0219f5f59fdf9fe2d0c90dd30407ee078e15cfa0a42_prof);

        
        $__internal_833b3cd13e4a070cba7d4f4d0e3647a2ab7d2a7bc2d04a16c9f970c465e74cf6->leave($__internal_833b3cd13e4a070cba7d4f4d0e3647a2ab7d2a7bc2d04a16c9f970c465e74cf6_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_74696cd978829159c7004a0888b36b2ea5e054a6e796e7e9f7f5eb3ccb568c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74696cd978829159c7004a0888b36b2ea5e054a6e796e7e9f7f5eb3ccb568c7f->enter($__internal_74696cd978829159c7004a0888b36b2ea5e054a6e796e7e9f7f5eb3ccb568c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_cbf4eab385c73817a28a4dcdc663143fa708807b23ef5243263fe83f71a86869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf4eab385c73817a28a4dcdc663143fa708807b23ef5243263fe83f71a86869->enter($__internal_cbf4eab385c73817a28a4dcdc663143fa708807b23ef5243263fe83f71a86869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_cbf4eab385c73817a28a4dcdc663143fa708807b23ef5243263fe83f71a86869->leave($__internal_cbf4eab385c73817a28a4dcdc663143fa708807b23ef5243263fe83f71a86869_prof);

        
        $__internal_74696cd978829159c7004a0888b36b2ea5e054a6e796e7e9f7f5eb3ccb568c7f->leave($__internal_74696cd978829159c7004a0888b36b2ea5e054a6e796e7e9f7f5eb3ccb568c7f_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_89a2212241c5d2acd9cb9c7e38c6c97fd973b31f117c9e6a39466a07fc6b3691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a2212241c5d2acd9cb9c7e38c6c97fd973b31f117c9e6a39466a07fc6b3691->enter($__internal_89a2212241c5d2acd9cb9c7e38c6c97fd973b31f117c9e6a39466a07fc6b3691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_3353b168434ca41da7079a709bfa5a6562f87215566a6345b1902a63312dd674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3353b168434ca41da7079a709bfa5a6562f87215566a6345b1902a63312dd674->enter($__internal_3353b168434ca41da7079a709bfa5a6562f87215566a6345b1902a63312dd674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_3353b168434ca41da7079a709bfa5a6562f87215566a6345b1902a63312dd674->leave($__internal_3353b168434ca41da7079a709bfa5a6562f87215566a6345b1902a63312dd674_prof);

        
        $__internal_89a2212241c5d2acd9cb9c7e38c6c97fd973b31f117c9e6a39466a07fc6b3691->leave($__internal_89a2212241c5d2acd9cb9c7e38c6c97fd973b31f117c9e6a39466a07fc6b3691_prof);

    }

    // line 31
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_76bfef5de48b427117660ed9603dd696db2283c6ad03a1f77eeefa9566f9ed3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bfef5de48b427117660ed9603dd696db2283c6ad03a1f77eeefa9566f9ed3f->enter($__internal_76bfef5de48b427117660ed9603dd696db2283c6ad03a1f77eeefa9566f9ed3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_2ad6e703d65c9bc0c527e97a9d0cfb3277e9681e628aae32e613a766def069ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad6e703d65c9bc0c527e97a9d0cfb3277e9681e628aae32e613a766def069ea->enter($__internal_2ad6e703d65c9bc0c527e97a9d0cfb3277e9681e628aae32e613a766def069ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 32
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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournaments"]) ? $context["tournaments"] : $this->getContext($context, "tournaments")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 115
            echo "                                <tr role=\"row\" class=\"odd\">
                                    <td tabindex=\"0\" class=\"sorting_1\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idTournoi", array()), "html", null, true);
            echo "</td>

                                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "startDate", array())), "html", null, true);
            echo "</td>
                                    <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "endDate", array())), "html", null, true);
            echo "</td>
                                    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward1", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward2", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "reward3", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nbrJoueur", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 126
            if (($this->getAttribute($context["t"], "etat", array()) == 1)) {
                // line 127
                echo "                                        <span class=\"label label-upper label-primary\">Open</span>
                                        ";
            } elseif (($this->getAttribute(            // line 128
$context["t"], "etat", array()) == 2)) {
                // line 129
                echo "                                        <span class=\"label label-upper label-success\">Running</span>
                                        ";
            } elseif (($this->getAttribute(            // line 130
$context["t"], "etat", array()) == 3)) {
                // line 131
                echo "                                        <span class=\"label label-upper label-default\">Finished</span>
                                        ";
            }
            // line 133
            echo "                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
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
        
        $__internal_2ad6e703d65c9bc0c527e97a9d0cfb3277e9681e628aae32e613a766def069ea->leave($__internal_2ad6e703d65c9bc0c527e97a9d0cfb3277e9681e628aae32e613a766def069ea_prof);

        
        $__internal_76bfef5de48b427117660ed9603dd696db2283c6ad03a1f77eeefa9566f9ed3f->leave($__internal_76bfef5de48b427117660ed9603dd696db2283c6ad03a1f77eeefa9566f9ed3f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Tournoi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 136,  312 => 133,  308 => 131,  306 => 130,  303 => 129,  301 => 128,  298 => 127,  296 => 126,  291 => 124,  287 => 123,  283 => 122,  279 => 121,  275 => 120,  271 => 119,  267 => 118,  262 => 116,  259 => 115,  255 => 114,  171 => 32,  162 => 31,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  93 => 14,  84 => 13,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
{% endblock %}", "EloboostedBackofficeBundle:Tournoi:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Tournoi/index.html.twig");
    }
}
