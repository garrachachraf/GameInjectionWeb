<?php

/* EloboostedBackofficeBundle:tcategorie:index.html.twig */
class __TwigTemplate_67bee3ffdeff3708f7480884ae6659ab3b752b9c63c966d9a971be29d5361800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:tcategorie:index.html.twig", 1);
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
        $__internal_6ecf25afaaaeae9ca368ce3396c7131e5e2e00dd05bb5b2a64c9c48488a04ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecf25afaaaeae9ca368ce3396c7131e5e2e00dd05bb5b2a64c9c48488a04ee8->enter($__internal_6ecf25afaaaeae9ca368ce3396c7131e5e2e00dd05bb5b2a64c9c48488a04ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:index.html.twig"));

        $__internal_397bb4d420c0f440f6691f6236fdfea1f93fbe29182e4ce8a80ca11a97095040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397bb4d420c0f440f6691f6236fdfea1f93fbe29182e4ce8a80ca11a97095040->enter($__internal_397bb4d420c0f440f6691f6236fdfea1f93fbe29182e4ce8a80ca11a97095040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecf25afaaaeae9ca368ce3396c7131e5e2e00dd05bb5b2a64c9c48488a04ee8->leave($__internal_6ecf25afaaaeae9ca368ce3396c7131e5e2e00dd05bb5b2a64c9c48488a04ee8_prof);

        
        $__internal_397bb4d420c0f440f6691f6236fdfea1f93fbe29182e4ce8a80ca11a97095040->leave($__internal_397bb4d420c0f440f6691f6236fdfea1f93fbe29182e4ce8a80ca11a97095040_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_a3ce5487492e8450ba95071db45d747bcd39e2b56275deb120ec78991f28dc2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ce5487492e8450ba95071db45d747bcd39e2b56275deb120ec78991f28dc2f->enter($__internal_a3ce5487492e8450ba95071db45d747bcd39e2b56275deb120ec78991f28dc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_1ef31f8b4a0c8674191361c29f05bce1ec8301c76df01440f6fd2b6a81ab1710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef31f8b4a0c8674191361c29f05bce1ec8301c76df01440f6fd2b6a81ab1710->enter($__internal_1ef31f8b4a0c8674191361c29f05bce1ec8301c76df01440f6fd2b6a81ab1710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_1ef31f8b4a0c8674191361c29f05bce1ec8301c76df01440f6fd2b6a81ab1710->leave($__internal_1ef31f8b4a0c8674191361c29f05bce1ec8301c76df01440f6fd2b6a81ab1710_prof);

        
        $__internal_a3ce5487492e8450ba95071db45d747bcd39e2b56275deb120ec78991f28dc2f->leave($__internal_a3ce5487492e8450ba95071db45d747bcd39e2b56275deb120ec78991f28dc2f_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_97e1820b67a88d1d7fbf0324ed2d37e12e80587fd155b58c2095b98a240189c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e1820b67a88d1d7fbf0324ed2d37e12e80587fd155b58c2095b98a240189c1->enter($__internal_97e1820b67a88d1d7fbf0324ed2d37e12e80587fd155b58c2095b98a240189c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_fd70d4ed49be47ebecb6f3a599c9909f3b05552ca3022f801daa5d32dd5855fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd70d4ed49be47ebecb6f3a599c9909f3b05552ca3022f801daa5d32dd5855fa->enter($__internal_fd70d4ed49be47ebecb6f3a599c9909f3b05552ca3022f801daa5d32dd5855fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_fd70d4ed49be47ebecb6f3a599c9909f3b05552ca3022f801daa5d32dd5855fa->leave($__internal_fd70d4ed49be47ebecb6f3a599c9909f3b05552ca3022f801daa5d32dd5855fa_prof);

        
        $__internal_97e1820b67a88d1d7fbf0324ed2d37e12e80587fd155b58c2095b98a240189c1->leave($__internal_97e1820b67a88d1d7fbf0324ed2d37e12e80587fd155b58c2095b98a240189c1_prof);

    }

    // line 31
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_b321cfe18e2699a6ebe501120b0f848769dd02037b6e3ffdcbb4c7436a0ac8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b321cfe18e2699a6ebe501120b0f848769dd02037b6e3ffdcbb4c7436a0ac8f3->enter($__internal_b321cfe18e2699a6ebe501120b0f848769dd02037b6e3ffdcbb4c7436a0ac8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_a3672703149e27b1f8cf44707474ee177847aa82ef15798af9bd38811a1c43e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3672703149e27b1f8cf44707474ee177847aa82ef15798af9bd38811a1c43e7->enter($__internal_a3672703149e27b1f8cf44707474ee177847aa82ef15798af9bd38811a1c43e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 32
        echo "

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2> All Categories
                </h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <p class=\"text-muted font-13 m-b-30\">
                    Numbre Of Categories.
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
                                        colspan=\"1\" style=\"width: 79px;\"
                                        aria-label=\"Last name: activate to sort column ascending\">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tCategories"]) ? $context["tCategories"] : $this->getContext($context, "tCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 82
            echo "                                    <tr role=\"row\" class=\"odd\">
                                        <td tabindex=\"0\" class=\"sorting_1\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idCategorie", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "nomCategorie", array()), "html", null, true);
            echo "</td>
                                        <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_edit", array("id" => $this->getAttribute($context["t"], "idCategorie", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-info\">Edit</button> </a></td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row\">

                    </div>
                    <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_new");
        echo "\"><button class=\"btn btn-info\">Add new Category</button> </a>

                </div>


            </div>
        </div>
    </div>
";
        
        $__internal_a3672703149e27b1f8cf44707474ee177847aa82ef15798af9bd38811a1c43e7->leave($__internal_a3672703149e27b1f8cf44707474ee177847aa82ef15798af9bd38811a1c43e7_prof);

        
        $__internal_b321cfe18e2699a6ebe501120b0f848769dd02037b6e3ffdcbb4c7436a0ac8f3->leave($__internal_b321cfe18e2699a6ebe501120b0f848769dd02037b6e3ffdcbb4c7436a0ac8f3_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:tcategorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 97,  248 => 90,  238 => 86,  234 => 85,  229 => 83,  226 => 82,  222 => 81,  171 => 32,  162 => 31,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  93 => 14,  84 => 13,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                <h2> All Categories
                </h2>
                <ul class=\"nav navbar-right panel_toolbox\">
                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                    </li>
                    <li class=\"dropdown\">
                    </li>
                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                    </li>
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <p class=\"text-muted font-13 m-b-30\">
                    Numbre Of Categories.
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
                                        colspan=\"1\" style=\"width: 79px;\"
                                        aria-label=\"Last name: activate to sort column ascending\">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for t in tCategories %}
                                    <tr role=\"row\" class=\"odd\">
                                        <td tabindex=\"0\" class=\"sorting_1\">{{ t.idCategorie }}</td>

                                        <td>{{ t.nomCategorie }}</td>
                                        <td><a href=\"{{ path('tcategorie_edit',{ 'id':t.idCategorie }) }}\"><button class=\"btn btn-info\">Edit</button> </a></td>

                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"row\">

                    </div>
                    <a href=\"{{ path('tcategorie_new') }}\"><button class=\"btn btn-info\">Add new Category</button> </a>

                </div>


            </div>
        </div>
    </div>
{% endblock %}", "EloboostedBackofficeBundle:tcategorie:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/tcategorie/index.html.twig");
    }
}
