<?php

/* @EloboostedBackoffice/Games/index.html.twig */
class __TwigTemplate_dccad6c0975d070f89cd4ff6eb85806c5158c7780599353a11cc3db666eff9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Games/index.html.twig", 1);
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
        $__internal_0e261106c39e0077d169d066006676e1a1a95700493d88a8d4c0b572679f403a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e261106c39e0077d169d066006676e1a1a95700493d88a8d4c0b572679f403a->enter($__internal_0e261106c39e0077d169d066006676e1a1a95700493d88a8d4c0b572679f403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Games/index.html.twig"));

        $__internal_947258f8bc43d2a2c558ef26b001b4923583991fe58eca1de5a205ecf141791e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947258f8bc43d2a2c558ef26b001b4923583991fe58eca1de5a205ecf141791e->enter($__internal_947258f8bc43d2a2c558ef26b001b4923583991fe58eca1de5a205ecf141791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Games/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e261106c39e0077d169d066006676e1a1a95700493d88a8d4c0b572679f403a->leave($__internal_0e261106c39e0077d169d066006676e1a1a95700493d88a8d4c0b572679f403a_prof);

        
        $__internal_947258f8bc43d2a2c558ef26b001b4923583991fe58eca1de5a205ecf141791e->leave($__internal_947258f8bc43d2a2c558ef26b001b4923583991fe58eca1de5a205ecf141791e_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_66b77b806db6f74f8196e8a81a1538b0bf0244d5907aae5a7aebf8b7ed6ae45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b77b806db6f74f8196e8a81a1538b0bf0244d5907aae5a7aebf8b7ed6ae45f->enter($__internal_66b77b806db6f74f8196e8a81a1538b0bf0244d5907aae5a7aebf8b7ed6ae45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_7936d2d23a1a451b1fe8c8e3910aa935449fc3d0b6102912dcaa15cff360b8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7936d2d23a1a451b1fe8c8e3910aa935449fc3d0b6102912dcaa15cff360b8b5->enter($__internal_7936d2d23a1a451b1fe8c8e3910aa935449fc3d0b6102912dcaa15cff360b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_7936d2d23a1a451b1fe8c8e3910aa935449fc3d0b6102912dcaa15cff360b8b5->leave($__internal_7936d2d23a1a451b1fe8c8e3910aa935449fc3d0b6102912dcaa15cff360b8b5_prof);

        
        $__internal_66b77b806db6f74f8196e8a81a1538b0bf0244d5907aae5a7aebf8b7ed6ae45f->leave($__internal_66b77b806db6f74f8196e8a81a1538b0bf0244d5907aae5a7aebf8b7ed6ae45f_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_e43899e2a879c1fdddff6c318ef63e7c820edf7616f4b46b62a259369c1c21f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43899e2a879c1fdddff6c318ef63e7c820edf7616f4b46b62a259369c1c21f0->enter($__internal_e43899e2a879c1fdddff6c318ef63e7c820edf7616f4b46b62a259369c1c21f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_ab6dc4cf68efee724388e4f7b0a2d5b2a7b2fdf378ab61feb85c68fd1bc88fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6dc4cf68efee724388e4f7b0a2d5b2a7b2fdf378ab61feb85c68fd1bc88fcf->enter($__internal_ab6dc4cf68efee724388e4f7b0a2d5b2a7b2fdf378ab61feb85c68fd1bc88fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_ab6dc4cf68efee724388e4f7b0a2d5b2a7b2fdf378ab61feb85c68fd1bc88fcf->leave($__internal_ab6dc4cf68efee724388e4f7b0a2d5b2a7b2fdf378ab61feb85c68fd1bc88fcf_prof);

        
        $__internal_e43899e2a879c1fdddff6c318ef63e7c820edf7616f4b46b62a259369c1c21f0->leave($__internal_e43899e2a879c1fdddff6c318ef63e7c820edf7616f4b46b62a259369c1c21f0_prof);

    }

    // line 31
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_fd02cd6364785bfbb5a8a8cf3768e988a6b2344b1c4d13237b1d7295b368acc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd02cd6364785bfbb5a8a8cf3768e988a6b2344b1c4d13237b1d7295b368acc5->enter($__internal_fd02cd6364785bfbb5a8a8cf3768e988a6b2344b1c4d13237b1d7295b368acc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_92407ef041cdcffb07cb5368c3cea69c12e5078db5a1a32d0ddf1bb28b2eaf39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92407ef041cdcffb07cb5368c3cea69c12e5078db5a1a32d0ddf1bb28b2eaf39->enter($__internal_92407ef041cdcffb07cb5368c3cea69c12e5078db5a1a32d0ddf1bb28b2eaf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 32
        echo "

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Games List
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
                    This is the list of all Games in the database .
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
                                        colspan=\"1\" style=\"width: 34px;\"
                                        aria-label=\"Age: activate to sort column ascending\">Description
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Start date: activate to sort column ascending\">Price
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"Salary: activate to sort column ascending\">Supported By
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 42px;\"
                                        aria-label=\"Extn.: activate to sort column ascending\">Image
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 162px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Categorie
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 108
            echo "                                    <tr role=\"row\" class=\"odd\">
                                        <td tabindex=\"0\" class=\"sorting_1\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "idGames", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "nomGames", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "prix", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "supported", array()), "html", null, true);
            echo "</td>
                                        <td><img src=\"data:image/png;base64,";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "imageGames", array()), "html", null, true);
            echo "\" style=\"height: 10px; width: 150px\" alt=\"\"></td>
                                        <td><img src=\"";
            // line 115
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($context["gs"], "idCathegorieg", array()), "nom", array())) . ".png"), "html", null, true);
            echo "\" alt=\"\"></td>



                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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
        
        $__internal_92407ef041cdcffb07cb5368c3cea69c12e5078db5a1a32d0ddf1bb28b2eaf39->leave($__internal_92407ef041cdcffb07cb5368c3cea69c12e5078db5a1a32d0ddf1bb28b2eaf39_prof);

        
        $__internal_fd02cd6364785bfbb5a8a8cf3768e988a6b2344b1c4d13237b1d7295b368acc5->leave($__internal_fd02cd6364785bfbb5a8a8cf3768e988a6b2344b1c4d13237b1d7295b368acc5_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Games/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 120,  279 => 115,  275 => 114,  271 => 113,  267 => 112,  263 => 111,  259 => 110,  255 => 109,  252 => 108,  248 => 107,  171 => 32,  162 => 31,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  93 => 14,  84 => 13,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                <h2>Games List
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
                    This is the list of all Games in the database .
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
                                        colspan=\"1\" style=\"width: 34px;\"
                                        aria-label=\"Age: activate to sort column ascending\">Description
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 76px;\"
                                        aria-label=\"Start date: activate to sort column ascending\">Price
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"Salary: activate to sort column ascending\">Supported By
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 42px;\"
                                        aria-label=\"Extn.: activate to sort column ascending\">Image
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 162px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Categorie
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for gs in games %}
                                    <tr role=\"row\" class=\"odd\">
                                        <td tabindex=\"0\" class=\"sorting_1\">{{ gs.idGames }}</td>
                                        <td>{{ gs.nomGames }}</td>
                                        <td>{{ gs.description }}</td>
                                        <td>{{ gs.prix }}</td>
                                        <td>{{ gs.supported }}</td>
                                        <td><img src=\"data:image/png;base64,{{ gs.imageGames  }}\" style=\"height: 10px; width: 150px\" alt=\"\"></td>
                                        <td><img src=\"{{ asset(\"img/\" ) ~ gs.idCathegorieg.nom  ~\".png\"}}\" alt=\"\"></td>



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
{% endblock %}", "@EloboostedBackoffice/Games/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Games\\index.html.twig");
    }
}
