<?php

/* EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig */
class __TwigTemplate_9a45601f2fdf39416d2f4bb4549793493cd9855d82bf29cfaac0b5907cbdf345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig", 1);
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
        $__internal_7c6ee4eab4e4fb47410ce435b12366cb82bb36a96390d9087d7e8fa1991f5832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6ee4eab4e4fb47410ce435b12366cb82bb36a96390d9087d7e8fa1991f5832->enter($__internal_7c6ee4eab4e4fb47410ce435b12366cb82bb36a96390d9087d7e8fa1991f5832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig"));

        $__internal_02f2dfc1f63e35f3cc585fd999f653e52ef5e7fc2ef646073b93ce841bd14df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f2dfc1f63e35f3cc585fd999f653e52ef5e7fc2ef646073b93ce841bd14df1->enter($__internal_02f2dfc1f63e35f3cc585fd999f653e52ef5e7fc2ef646073b93ce841bd14df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6ee4eab4e4fb47410ce435b12366cb82bb36a96390d9087d7e8fa1991f5832->leave($__internal_7c6ee4eab4e4fb47410ce435b12366cb82bb36a96390d9087d7e8fa1991f5832_prof);

        
        $__internal_02f2dfc1f63e35f3cc585fd999f653e52ef5e7fc2ef646073b93ce841bd14df1->leave($__internal_02f2dfc1f63e35f3cc585fd999f653e52ef5e7fc2ef646073b93ce841bd14df1_prof);

    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_a7d4024e4dfc7a2a210f0878c19024ed480b8c4c2b5c3ad1d1ac6eebfda55079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d4024e4dfc7a2a210f0878c19024ed480b8c4c2b5c3ad1d1ac6eebfda55079->enter($__internal_a7d4024e4dfc7a2a210f0878c19024ed480b8c4c2b5c3ad1d1ac6eebfda55079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_6c4dc4e0368e01bc7ab1891062023d37f959cc4dcce906bbcfb524319ed0941c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4dc4e0368e01bc7ab1891062023d37f959cc4dcce906bbcfb524319ed0941c->enter($__internal_6c4dc4e0368e01bc7ab1891062023d37f959cc4dcce906bbcfb524319ed0941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_6c4dc4e0368e01bc7ab1891062023d37f959cc4dcce906bbcfb524319ed0941c->leave($__internal_6c4dc4e0368e01bc7ab1891062023d37f959cc4dcce906bbcfb524319ed0941c_prof);

        
        $__internal_a7d4024e4dfc7a2a210f0878c19024ed480b8c4c2b5c3ad1d1ac6eebfda55079->leave($__internal_a7d4024e4dfc7a2a210f0878c19024ed480b8c4c2b5c3ad1d1ac6eebfda55079_prof);

    }

    // line 14
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_736818f74d43ff09af3b40d1f7ee9eb469063c810b3e29c36cbd9cb3ae115225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736818f74d43ff09af3b40d1f7ee9eb469063c810b3e29c36cbd9cb3ae115225->enter($__internal_736818f74d43ff09af3b40d1f7ee9eb469063c810b3e29c36cbd9cb3ae115225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_2fd007030e6958af91d4bc0380adf33bf0f810261001ed02835863081bcd2931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd007030e6958af91d4bc0380adf33bf0f810261001ed02835863081bcd2931->enter($__internal_2fd007030e6958af91d4bc0380adf33bf0f810261001ed02835863081bcd2931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2fd007030e6958af91d4bc0380adf33bf0f810261001ed02835863081bcd2931->leave($__internal_2fd007030e6958af91d4bc0380adf33bf0f810261001ed02835863081bcd2931_prof);

        
        $__internal_736818f74d43ff09af3b40d1f7ee9eb469063c810b3e29c36cbd9cb3ae115225->leave($__internal_736818f74d43ff09af3b40d1f7ee9eb469063c810b3e29c36cbd9cb3ae115225_prof);

    }

    // line 32
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_0353d42d4a2dac82a6cc1078ff2db02c4dc5c0590028e4292afd52a97ecb544d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0353d42d4a2dac82a6cc1078ff2db02c4dc5c0590028e4292afd52a97ecb544d->enter($__internal_0353d42d4a2dac82a6cc1078ff2db02c4dc5c0590028e4292afd52a97ecb544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_f95ce23a869ab0e223d1dc3cc441e795f5344af0c9709599956fc3317465b518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95ce23a869ab0e223d1dc3cc441e795f5344af0c9709599956fc3317465b518->enter($__internal_f95ce23a869ab0e223d1dc3cc441e795f5344af0c9709599956fc3317465b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 33
        echo "
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Cathegory
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
                    Add your new cathegory here .
                </p>
            </div>
            <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">

                        <div class=\"x_content\">

                            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                            <span class=\"section\">New Cathegory</span>

                            <div class=\"item form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Cathegory name <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                                </div>

                                <div class=\"text-center margin-top-30\">
                                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                           value=\"Add Cathegory\"/>
                                </div>

                            </div>
                            ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


";
        
        $__internal_f95ce23a869ab0e223d1dc3cc441e795f5344af0c9709599956fc3317465b518->leave($__internal_f95ce23a869ab0e223d1dc3cc441e795f5344af0c9709599956fc3317465b518_prof);

        
        $__internal_0353d42d4a2dac82a6cc1078ff2db02c4dc5c0590028e4292afd52a97ecb544d->leave($__internal_0353d42d4a2dac82a6cc1078ff2db02c4dc5c0590028e4292afd52a97ecb544d_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 86,  220 => 77,  210 => 70,  171 => 33,  162 => 32,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  93 => 15,  84 => 14,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
                <h2>Cathegory
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
                    Add your new cathegory here .
                </p>
            </div>
            <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">

                        <div class=\"x_content\">

                            {{ form_start(form,{'attr':{'class':'form-horizontal form-label-left'}}) }}
                            <span class=\"section\">New Cathegory</span>

                            <div class=\"item form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Cathegory name <span class=\"required\">*</span>
                                </label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    {{ form_row(form.nom) }}
                                </div>

                                <div class=\"text-center margin-top-30\">
                                    <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                           value=\"Add Cathegory\"/>
                                </div>

                            </div>
                            {{ form_end(form) }}


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


{% endblock %}", "EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Cathegorie/addCathegorie.html.twig");
    }
}
