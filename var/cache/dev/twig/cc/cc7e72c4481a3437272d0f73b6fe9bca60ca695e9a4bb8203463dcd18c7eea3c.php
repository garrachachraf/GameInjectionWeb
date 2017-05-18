<?php

/* EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig */
class __TwigTemplate_750cfeaf749c975ca23cbee62c7a0dc5c55ca1b184e8ad16a8cefcc82ac704e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig", 1);
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
        $__internal_b60e0f61efbc752f7c45d19cedff3eb7d49fe71e1abbdd3564ee6e714c41013c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60e0f61efbc752f7c45d19cedff3eb7d49fe71e1abbdd3564ee6e714c41013c->enter($__internal_b60e0f61efbc752f7c45d19cedff3eb7d49fe71e1abbdd3564ee6e714c41013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig"));

        $__internal_3fce220d51bfdcfe3fac60f5cfdd16cf053b260d0ff20a050f1bed972d6c5045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fce220d51bfdcfe3fac60f5cfdd16cf053b260d0ff20a050f1bed972d6c5045->enter($__internal_3fce220d51bfdcfe3fac60f5cfdd16cf053b260d0ff20a050f1bed972d6c5045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60e0f61efbc752f7c45d19cedff3eb7d49fe71e1abbdd3564ee6e714c41013c->leave($__internal_b60e0f61efbc752f7c45d19cedff3eb7d49fe71e1abbdd3564ee6e714c41013c_prof);

        
        $__internal_3fce220d51bfdcfe3fac60f5cfdd16cf053b260d0ff20a050f1bed972d6c5045->leave($__internal_3fce220d51bfdcfe3fac60f5cfdd16cf053b260d0ff20a050f1bed972d6c5045_prof);

    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_20e4895c40a0f19bd432b2754a5541121b13bb09a455fc395763da93cf8c2123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e4895c40a0f19bd432b2754a5541121b13bb09a455fc395763da93cf8c2123->enter($__internal_20e4895c40a0f19bd432b2754a5541121b13bb09a455fc395763da93cf8c2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_76ec203375990e2a3fe1844bee348218af703171f2eb8898436dda39ca8de5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ec203375990e2a3fe1844bee348218af703171f2eb8898436dda39ca8de5c0->enter($__internal_76ec203375990e2a3fe1844bee348218af703171f2eb8898436dda39ca8de5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_76ec203375990e2a3fe1844bee348218af703171f2eb8898436dda39ca8de5c0->leave($__internal_76ec203375990e2a3fe1844bee348218af703171f2eb8898436dda39ca8de5c0_prof);

        
        $__internal_20e4895c40a0f19bd432b2754a5541121b13bb09a455fc395763da93cf8c2123->leave($__internal_20e4895c40a0f19bd432b2754a5541121b13bb09a455fc395763da93cf8c2123_prof);

    }

    // line 11
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_6ddaafbd474284bebf5ef4fcca9c5437e9d8163bda70d69660f419a0f0f00484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddaafbd474284bebf5ef4fcca9c5437e9d8163bda70d69660f419a0f0f00484->enter($__internal_6ddaafbd474284bebf5ef4fcca9c5437e9d8163bda70d69660f419a0f0f00484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_31d038b887ad27e4210252405f14e4f809bfa661fbba24f2247cd179ca15d615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d038b887ad27e4210252405f14e4f809bfa661fbba24f2247cd179ca15d615->enter($__internal_31d038b887ad27e4210252405f14e4f809bfa661fbba24f2247cd179ca15d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 12
        echo "

    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_31d038b887ad27e4210252405f14e4f809bfa661fbba24f2247cd179ca15d615->leave($__internal_31d038b887ad27e4210252405f14e4f809bfa661fbba24f2247cd179ca15d615_prof);

        
        $__internal_6ddaafbd474284bebf5ef4fcca9c5437e9d8163bda70d69660f419a0f0f00484->leave($__internal_6ddaafbd474284bebf5ef4fcca9c5437e9d8163bda70d69660f419a0f0f00484_prof);

    }

    // line 30
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_b5672600abe6f3539bec6063a95601df690e5d450427b5bafaecf876abc6f800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5672600abe6f3539bec6063a95601df690e5d450427b5bafaecf876abc6f800->enter($__internal_b5672600abe6f3539bec6063a95601df690e5d450427b5bafaecf876abc6f800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_991f8336ceaf8a115ae4b2aee6ed45a45ff5c7498b0c2f95dbf317b42dd1f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991f8336ceaf8a115ae4b2aee6ed45a45ff5c7498b0c2f95dbf317b42dd1f199->enter($__internal_991f8336ceaf8a115ae4b2aee6ed45a45ff5c7498b0c2f95dbf317b42dd1f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 31
        echo "

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Edit Cathegory</h2>

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


                <div class=\"row\">

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_content\">


                                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                                <span class=\"section\">Cathegory </span>
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "

                                <div class=\"text-center margin-top-30\">
                                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                           value=\"Edit\"/>
                                </div>


                                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

                                <ul>
                                    <li>
                                        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
                                    </li>
                                    <li>
                                        ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "

                                        <input type=\"submit\" value=\"Delete\">
                                        ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







";
        
        $__internal_991f8336ceaf8a115ae4b2aee6ed45a45ff5c7498b0c2f95dbf317b42dd1f199->leave($__internal_991f8336ceaf8a115ae4b2aee6ed45a45ff5c7498b0c2f95dbf317b42dd1f199_prof);

        
        $__internal_b5672600abe6f3539bec6063a95601df690e5d450427b5bafaecf876abc6f800->leave($__internal_b5672600abe6f3539bec6063a95601df690e5d450427b5bafaecf876abc6f800_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 86,  236 => 83,  230 => 80,  223 => 76,  212 => 68,  207 => 66,  170 => 31,  161 => 30,  149 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  89 => 12,  80 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <link href=\"{{ asset('BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block extrascript %}


    <script src=\"{{ asset('BOassets/vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets/vendors/pdfmake/build/vfs_fonts.js') }}\"></script>
{% endblock %}
{% block insiderowbottom %}


    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Edit Cathegory</h2>

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


                <div class=\"row\">

                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"x_panel\">
                            <div class=\"x_content\">


                                {{ form_start(edit_form,{'attr':{'class':'form-horizontal form-label-left'}}) }}
                                <span class=\"section\">Cathegory </span>
                                {{ form_widget(edit_form) }}

                                <div class=\"text-center margin-top-30\">
                                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                           value=\"Edit\"/>
                                </div>


                                {{ form_end(edit_form) }}

                                <ul>
                                    <li>
                                        <a href=\"{{ path('yes_index') }}\">Back to the list</a>
                                    </li>
                                    <li>
                                        {{ form_start(delete_form) }}

                                        <input type=\"submit\" value=\"Delete\">
                                        {{ form_end(delete_form) }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







{% endblock %}
", "EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Cathegorie/EditCath.html.twig");
    }
}
