<?php

/* EloboostedBackofficeBundle:Games:index.html.twig */
class __TwigTemplate_2b050b7c24d8e5a96c9185feee3067ae0f5f70c3e3797ea5c82197f69267d318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Games:index.html.twig", 1);
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
        $__internal_8c7722b0deaa58c6cfc07e0a655b569ea49dd35569616e5540ff7632751d9d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7722b0deaa58c6cfc07e0a655b569ea49dd35569616e5540ff7632751d9d90->enter($__internal_8c7722b0deaa58c6cfc07e0a655b569ea49dd35569616e5540ff7632751d9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:index.html.twig"));

        $__internal_dce6679ec90c9d6dd167f032ed4c6d20b7125c7c7cefb1836bdf95fe65264361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce6679ec90c9d6dd167f032ed4c6d20b7125c7c7cefb1836bdf95fe65264361->enter($__internal_dce6679ec90c9d6dd167f032ed4c6d20b7125c7c7cefb1836bdf95fe65264361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7722b0deaa58c6cfc07e0a655b569ea49dd35569616e5540ff7632751d9d90->leave($__internal_8c7722b0deaa58c6cfc07e0a655b569ea49dd35569616e5540ff7632751d9d90_prof);

        
        $__internal_dce6679ec90c9d6dd167f032ed4c6d20b7125c7c7cefb1836bdf95fe65264361->leave($__internal_dce6679ec90c9d6dd167f032ed4c6d20b7125c7c7cefb1836bdf95fe65264361_prof);

    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_90c6782eb7122107a3d04a34f317a9e1ec241b2c414c6cd7a2c778e3380b31c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c6782eb7122107a3d04a34f317a9e1ec241b2c414c6cd7a2c778e3380b31c6->enter($__internal_90c6782eb7122107a3d04a34f317a9e1ec241b2c414c6cd7a2c778e3380b31c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_8a62a259a2150330012234a9bcd3b3bd91cc8ffd322e8eeb1d567755400be4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a62a259a2150330012234a9bcd3b3bd91cc8ffd322e8eeb1d567755400be4ae->enter($__internal_8a62a259a2150330012234a9bcd3b3bd91cc8ffd322e8eeb1d567755400be4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_8a62a259a2150330012234a9bcd3b3bd91cc8ffd322e8eeb1d567755400be4ae->leave($__internal_8a62a259a2150330012234a9bcd3b3bd91cc8ffd322e8eeb1d567755400be4ae_prof);

        
        $__internal_90c6782eb7122107a3d04a34f317a9e1ec241b2c414c6cd7a2c778e3380b31c6->leave($__internal_90c6782eb7122107a3d04a34f317a9e1ec241b2c414c6cd7a2c778e3380b31c6_prof);

    }

    // line 14
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_7d860864f817782a6b176696bbde52995f98348e2377d3fe4a99a9c5c24f895e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d860864f817782a6b176696bbde52995f98348e2377d3fe4a99a9c5c24f895e->enter($__internal_7d860864f817782a6b176696bbde52995f98348e2377d3fe4a99a9c5c24f895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_e8705be2aad5cf3ad2985b0d58834fcac5963f1704011ae84ba642f36c91c6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8705be2aad5cf3ad2985b0d58834fcac5963f1704011ae84ba642f36c91c6ae->enter($__internal_e8705be2aad5cf3ad2985b0d58834fcac5963f1704011ae84ba642f36c91c6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e8705be2aad5cf3ad2985b0d58834fcac5963f1704011ae84ba642f36c91c6ae->leave($__internal_e8705be2aad5cf3ad2985b0d58834fcac5963f1704011ae84ba642f36c91c6ae_prof);

        
        $__internal_7d860864f817782a6b176696bbde52995f98348e2377d3fe4a99a9c5c24f895e->leave($__internal_7d860864f817782a6b176696bbde52995f98348e2377d3fe4a99a9c5c24f895e_prof);

    }

    // line 32
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_c318b8b909dcb1f14221838e9bdbe1bf931d2dfa4ebe4487e864c8288be7528f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c318b8b909dcb1f14221838e9bdbe1bf931d2dfa4ebe4487e864c8288be7528f->enter($__internal_c318b8b909dcb1f14221838e9bdbe1bf931d2dfa4ebe4487e864c8288be7528f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_4fae6ed0b1114c409552a6fc746ee9aaa8aacb2356245236d39e86b135216870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fae6ed0b1114c409552a6fc746ee9aaa8aacb2356245236d39e86b135216870->enter($__internal_4fae6ed0b1114c409552a6fc746ee9aaa8aacb2356245236d39e86b135216870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 33
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
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Delete
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                              colspan=\"1\" style=\"width: 56px;\"
                                              aria-label=\"E-mail: activate to sort column ascending\">Update
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Acceptation
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 121
            echo "                                    <tr role=\"row\" class=\"odd\">
                                        <td tabindex=\"0\" class=\"sorting_1\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "idGames", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "nomGames", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "prix", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "supported", array()), "html", null, true);
            echo "</td>
                                        <td><img src=\"data:image/png;base64,";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "imageGames", array()), "html", null, true);
            echo "\" style=\"height: 50px; width: 100px\" alt=\"\"></td>
                                        <td><img src=\"";
            // line 128
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($context["gs"], "idCathegorieg", array()), "nom", array())) . ".png"), "html", null, true);
            echo "\" alt=\"\"></td>
                                        <td><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_DeleteGame", array("id" => $this->getAttribute($context["gs"], "idGames", array()))), "html", null, true);
            echo "\"> Delete </a> </td>
                                        <td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_EditGame", array("id" => $this->getAttribute($context["gs"], "idGames", array()))), "html", null, true);
            echo "\"> Edit </a> </td>

                                        <td>
                                            <div class=\"text-center margin-top-30\">
                                               <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_accepted", array("id" => $this->getAttribute($context["gs"], "idGames", array()))), "html", null, true);
            echo "\"> <input type=\"submit\" name=\"bttn\" id=\"bttn\" class=\"btn btn-round btn-primary\"
                                                       value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["gs"], "etat", array()), "html", null, true);
            echo "  \" /></a>
                                            </div>
                                        </td>


                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
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
        
        $__internal_4fae6ed0b1114c409552a6fc746ee9aaa8aacb2356245236d39e86b135216870->leave($__internal_4fae6ed0b1114c409552a6fc746ee9aaa8aacb2356245236d39e86b135216870_prof);

        
        $__internal_c318b8b909dcb1f14221838e9bdbe1bf931d2dfa4ebe4487e864c8288be7528f->leave($__internal_c318b8b909dcb1f14221838e9bdbe1bf931d2dfa4ebe4487e864c8288be7528f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Games:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 141,  310 => 135,  306 => 134,  299 => 130,  295 => 129,  291 => 128,  287 => 127,  283 => 126,  279 => 125,  275 => 124,  271 => 123,  267 => 122,  264 => 121,  260 => 120,  171 => 33,  162 => 32,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  93 => 15,  84 => 14,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Delete
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                              colspan=\"1\" style=\"width: 56px;\"
                                              aria-label=\"E-mail: activate to sort column ascending\">Update
                                    </th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"datatable-responsive\" rowspan=\"1\"
                                        colspan=\"1\" style=\"width: 56px;\"
                                        aria-label=\"E-mail: activate to sort column ascending\">Acceptation
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
                                        <td><img src=\"data:image/png;base64,{{ gs.imageGames  }}\" style=\"height: 50px; width: 100px\" alt=\"\"></td>
                                        <td><img src=\"{{ asset(\"img/\" ) ~ gs.idCathegorieg.nom  ~\".png\"}}\" alt=\"\"></td>
                                        <td><a href=\"{{ path(\"eloboosted_backoffice_DeleteGame\",{'id': gs.idGames}) }}\"> Delete </a> </td>
                                        <td><a href=\"{{ path(\"eloboosted_backoffice_EditGame\",{'id': gs.idGames}) }}\"> Edit </a> </td>

                                        <td>
                                            <div class=\"text-center margin-top-30\">
                                               <a href=\"{{ path('eloboosted_backoffice_accepted',{ 'id':gs.idGames }) }}\"> <input type=\"submit\" name=\"bttn\" id=\"bttn\" class=\"btn btn-round btn-primary\"
                                                       value=\"{{ gs.etat }}  \" /></a>
                                            </div>
                                        </td>


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
{% endblock %}", "EloboostedBackofficeBundle:Games:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Games/index.html.twig");
    }
}
