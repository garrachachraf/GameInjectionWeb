<?php

/* @EloboostedBackoffice/Tournoi/index.html.twig */
class __TwigTemplate_ee29fd24d6c7b2d5b1153b32250bdaf1c29b258e083f3edbb01227fc92b56304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Tournoi/index.html.twig", 1);
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
        $__internal_c8f5337ed6366a6048dc09e2fba8373ec5daea545239ca34a763446ce9a1f861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f5337ed6366a6048dc09e2fba8373ec5daea545239ca34a763446ce9a1f861->enter($__internal_c8f5337ed6366a6048dc09e2fba8373ec5daea545239ca34a763446ce9a1f861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/index.html.twig"));

        $__internal_c1970aaee9472749d5cd41391808166a8cd11d4e082ab1f55a851ca706b202b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1970aaee9472749d5cd41391808166a8cd11d4e082ab1f55a851ca706b202b7->enter($__internal_c1970aaee9472749d5cd41391808166a8cd11d4e082ab1f55a851ca706b202b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f5337ed6366a6048dc09e2fba8373ec5daea545239ca34a763446ce9a1f861->leave($__internal_c8f5337ed6366a6048dc09e2fba8373ec5daea545239ca34a763446ce9a1f861_prof);

        
        $__internal_c1970aaee9472749d5cd41391808166a8cd11d4e082ab1f55a851ca706b202b7->leave($__internal_c1970aaee9472749d5cd41391808166a8cd11d4e082ab1f55a851ca706b202b7_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_a0ed9113d338fd69b46b63d574e20d119df87498f5df4067adee14e32ca1b8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ed9113d338fd69b46b63d574e20d119df87498f5df4067adee14e32ca1b8de->enter($__internal_a0ed9113d338fd69b46b63d574e20d119df87498f5df4067adee14e32ca1b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_6b18f20c11a8fb65c4ee33ae50be44479386f21e9a8164baf21b2f29dc6bdfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b18f20c11a8fb65c4ee33ae50be44479386f21e9a8164baf21b2f29dc6bdfde->enter($__internal_6b18f20c11a8fb65c4ee33ae50be44479386f21e9a8164baf21b2f29dc6bdfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_6b18f20c11a8fb65c4ee33ae50be44479386f21e9a8164baf21b2f29dc6bdfde->leave($__internal_6b18f20c11a8fb65c4ee33ae50be44479386f21e9a8164baf21b2f29dc6bdfde_prof);

        
        $__internal_a0ed9113d338fd69b46b63d574e20d119df87498f5df4067adee14e32ca1b8de->leave($__internal_a0ed9113d338fd69b46b63d574e20d119df87498f5df4067adee14e32ca1b8de_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_8b44039b333b0a40ceeb02949b685316d8d6667d7f624391ee1862f7522c8b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b44039b333b0a40ceeb02949b685316d8d6667d7f624391ee1862f7522c8b7d->enter($__internal_8b44039b333b0a40ceeb02949b685316d8d6667d7f624391ee1862f7522c8b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_45cc5cd8f460acfc7dad3a659b64948ec14bfbab608b217a48c3763f201f15ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cc5cd8f460acfc7dad3a659b64948ec14bfbab608b217a48c3763f201f15ab->enter($__internal_45cc5cd8f460acfc7dad3a659b64948ec14bfbab608b217a48c3763f201f15ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_45cc5cd8f460acfc7dad3a659b64948ec14bfbab608b217a48c3763f201f15ab->leave($__internal_45cc5cd8f460acfc7dad3a659b64948ec14bfbab608b217a48c3763f201f15ab_prof);

        
        $__internal_8b44039b333b0a40ceeb02949b685316d8d6667d7f624391ee1862f7522c8b7d->leave($__internal_8b44039b333b0a40ceeb02949b685316d8d6667d7f624391ee1862f7522c8b7d_prof);

    }

    // line 31
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_426956402caf6fdb3c62a8c28b4248eb7b109a970f27c86a675a875a5dd50971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426956402caf6fdb3c62a8c28b4248eb7b109a970f27c86a675a875a5dd50971->enter($__internal_426956402caf6fdb3c62a8c28b4248eb7b109a970f27c86a675a875a5dd50971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_e44d774af73f49edcaec71ecef27a027a1fc014c19a67246bb3718d8a3c0cc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44d774af73f49edcaec71ecef27a027a1fc014c19a67246bb3718d8a3c0cc8e->enter($__internal_e44d774af73f49edcaec71ecef27a027a1fc014c19a67246bb3718d8a3c0cc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_e44d774af73f49edcaec71ecef27a027a1fc014c19a67246bb3718d8a3c0cc8e->leave($__internal_e44d774af73f49edcaec71ecef27a027a1fc014c19a67246bb3718d8a3c0cc8e_prof);

        
        $__internal_426956402caf6fdb3c62a8c28b4248eb7b109a970f27c86a675a875a5dd50971->leave($__internal_426956402caf6fdb3c62a8c28b4248eb7b109a970f27c86a675a875a5dd50971_prof);

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
{% endblock %}", "@EloboostedBackoffice/Tournoi/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Tournoi\\index.html.twig");
    }
}
