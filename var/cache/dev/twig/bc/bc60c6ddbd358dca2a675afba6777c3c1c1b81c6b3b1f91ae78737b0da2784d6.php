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
        $__internal_4e07f91b1b1f2ee34f237c05a3831201de285a4f475c48e694c62b24030effa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e07f91b1b1f2ee34f237c05a3831201de285a4f475c48e694c62b24030effa8->enter($__internal_4e07f91b1b1f2ee34f237c05a3831201de285a4f475c48e694c62b24030effa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:index.html.twig"));

        $__internal_06cf3dc18c2e59d84834bf6b59b68c974d4ff8e3c0b23cc019b800507359e63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cf3dc18c2e59d84834bf6b59b68c974d4ff8e3c0b23cc019b800507359e63b->enter($__internal_06cf3dc18c2e59d84834bf6b59b68c974d4ff8e3c0b23cc019b800507359e63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e07f91b1b1f2ee34f237c05a3831201de285a4f475c48e694c62b24030effa8->leave($__internal_4e07f91b1b1f2ee34f237c05a3831201de285a4f475c48e694c62b24030effa8_prof);

        
        $__internal_06cf3dc18c2e59d84834bf6b59b68c974d4ff8e3c0b23cc019b800507359e63b->leave($__internal_06cf3dc18c2e59d84834bf6b59b68c974d4ff8e3c0b23cc019b800507359e63b_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_20fa63ea6d9ea61406a009861eae73e2287cd2c4c1c4b515d435ae7171363190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fa63ea6d9ea61406a009861eae73e2287cd2c4c1c4b515d435ae7171363190->enter($__internal_20fa63ea6d9ea61406a009861eae73e2287cd2c4c1c4b515d435ae7171363190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_d007262348a4c9ad445e01a373655d9933839be7ce00600efb116748775cc7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d007262348a4c9ad445e01a373655d9933839be7ce00600efb116748775cc7ea->enter($__internal_d007262348a4c9ad445e01a373655d9933839be7ce00600efb116748775cc7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_d007262348a4c9ad445e01a373655d9933839be7ce00600efb116748775cc7ea->leave($__internal_d007262348a4c9ad445e01a373655d9933839be7ce00600efb116748775cc7ea_prof);

        
        $__internal_20fa63ea6d9ea61406a009861eae73e2287cd2c4c1c4b515d435ae7171363190->leave($__internal_20fa63ea6d9ea61406a009861eae73e2287cd2c4c1c4b515d435ae7171363190_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_b18437bbb6424fe8c2b8640244af686cd26ef30a2b77e1d12a88a2698ddf1132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18437bbb6424fe8c2b8640244af686cd26ef30a2b77e1d12a88a2698ddf1132->enter($__internal_b18437bbb6424fe8c2b8640244af686cd26ef30a2b77e1d12a88a2698ddf1132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_afa1a89d090cad602d64a3bbaccae51c86c5e34a16283ef712bc4dfed0f7005a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa1a89d090cad602d64a3bbaccae51c86c5e34a16283ef712bc4dfed0f7005a->enter($__internal_afa1a89d090cad602d64a3bbaccae51c86c5e34a16283ef712bc4dfed0f7005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_afa1a89d090cad602d64a3bbaccae51c86c5e34a16283ef712bc4dfed0f7005a->leave($__internal_afa1a89d090cad602d64a3bbaccae51c86c5e34a16283ef712bc4dfed0f7005a_prof);

        
        $__internal_b18437bbb6424fe8c2b8640244af686cd26ef30a2b77e1d12a88a2698ddf1132->leave($__internal_b18437bbb6424fe8c2b8640244af686cd26ef30a2b77e1d12a88a2698ddf1132_prof);

    }

    // line 32
    public function block_topnav($context, array $blocks = array())
    {
        $__internal_4a2c86b4600a5480c9c220d6e8e82e8a09ed2f6c25790b013bb1b0e698ac38c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2c86b4600a5480c9c220d6e8e82e8a09ed2f6c25790b013bb1b0e698ac38c6->enter($__internal_4a2c86b4600a5480c9c220d6e8e82e8a09ed2f6c25790b013bb1b0e698ac38c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

        $__internal_e2d76745e2dd41fba4aad7a5eab9f0ab0786f5b28619811293dbd5935ed23c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d76745e2dd41fba4aad7a5eab9f0ab0786f5b28619811293dbd5935ed23c5c->enter($__internal_e2d76745e2dd41fba4aad7a5eab9f0ab0786f5b28619811293dbd5935ed23c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topnav"));

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
        
        $__internal_e2d76745e2dd41fba4aad7a5eab9f0ab0786f5b28619811293dbd5935ed23c5c->leave($__internal_e2d76745e2dd41fba4aad7a5eab9f0ab0786f5b28619811293dbd5935ed23c5c_prof);

        
        $__internal_4a2c86b4600a5480c9c220d6e8e82e8a09ed2f6c25790b013bb1b0e698ac38c6->leave($__internal_4a2c86b4600a5480c9c220d6e8e82e8a09ed2f6c25790b013bb1b0e698ac38c6_prof);

    }

    // line 48
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_79de1a4a66368a68fce4da9d36262d2397697e7a3b50ce4dfb12069373a9a132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79de1a4a66368a68fce4da9d36262d2397697e7a3b50ce4dfb12069373a9a132->enter($__internal_79de1a4a66368a68fce4da9d36262d2397697e7a3b50ce4dfb12069373a9a132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_82cb91a74e0434ab6fd3af912a27e1fb00cfc8e84c7e4b38dd6f879a6b92fc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb91a74e0434ab6fd3af912a27e1fb00cfc8e84c7e4b38dd6f879a6b92fc87->enter($__internal_82cb91a74e0434ab6fd3af912a27e1fb00cfc8e84c7e4b38dd6f879a6b92fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

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
        
        $__internal_82cb91a74e0434ab6fd3af912a27e1fb00cfc8e84c7e4b38dd6f879a6b92fc87->leave($__internal_82cb91a74e0434ab6fd3af912a27e1fb00cfc8e84c7e4b38dd6f879a6b92fc87_prof);

        
        $__internal_79de1a4a66368a68fce4da9d36262d2397697e7a3b50ce4dfb12069373a9a132->leave($__internal_79de1a4a66368a68fce4da9d36262d2397697e7a3b50ce4dfb12069373a9a132_prof);

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
{% endblock %}", "EloboostedBackofficeBundle:Tournoi:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Tournoi/index.html.twig");
    }
}
