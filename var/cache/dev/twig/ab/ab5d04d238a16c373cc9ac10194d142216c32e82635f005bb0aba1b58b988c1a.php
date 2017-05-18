<?php

/* EloboostedBackofficeBundle:Games:NewGame.html.twig */
class __TwigTemplate_bb35897039641f5c88e195dbe5d8563041ebde6f6399071a90ac6735a4a108ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Games:NewGame.html.twig", 1);
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
        $__internal_a66d55a1222e52588ee67b0c161aed0bdc4164c98fe3df6edc81fd550f33e451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66d55a1222e52588ee67b0c161aed0bdc4164c98fe3df6edc81fd550f33e451->enter($__internal_a66d55a1222e52588ee67b0c161aed0bdc4164c98fe3df6edc81fd550f33e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:NewGame.html.twig"));

        $__internal_ce31e67423b8251a590d2b47d230dd90f4e9d4be9b9e0ea0a0f019b11508f3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce31e67423b8251a590d2b47d230dd90f4e9d4be9b9e0ea0a0f019b11508f3fc->enter($__internal_ce31e67423b8251a590d2b47d230dd90f4e9d4be9b9e0ea0a0f019b11508f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:NewGame.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66d55a1222e52588ee67b0c161aed0bdc4164c98fe3df6edc81fd550f33e451->leave($__internal_a66d55a1222e52588ee67b0c161aed0bdc4164c98fe3df6edc81fd550f33e451_prof);

        
        $__internal_ce31e67423b8251a590d2b47d230dd90f4e9d4be9b9e0ea0a0f019b11508f3fc->leave($__internal_ce31e67423b8251a590d2b47d230dd90f4e9d4be9b9e0ea0a0f019b11508f3fc_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_40140b998e496cca0d9a5c6a4f16664ea4c990006f79cdae00ff2b606de67ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40140b998e496cca0d9a5c6a4f16664ea4c990006f79cdae00ff2b606de67ae6->enter($__internal_40140b998e496cca0d9a5c6a4f16664ea4c990006f79cdae00ff2b606de67ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_0f25bd4632089485a63edb20883d8c74d2ce72c3e5fbc6c2bece3fa19487fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f25bd4632089485a63edb20883d8c74d2ce72c3e5fbc6c2bece3fa19487fb36->enter($__internal_0f25bd4632089485a63edb20883d8c74d2ce72c3e5fbc6c2bece3fa19487fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_0f25bd4632089485a63edb20883d8c74d2ce72c3e5fbc6c2bece3fa19487fb36->leave($__internal_0f25bd4632089485a63edb20883d8c74d2ce72c3e5fbc6c2bece3fa19487fb36_prof);

        
        $__internal_40140b998e496cca0d9a5c6a4f16664ea4c990006f79cdae00ff2b606de67ae6->leave($__internal_40140b998e496cca0d9a5c6a4f16664ea4c990006f79cdae00ff2b606de67ae6_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_93165764a94ebfd44a5fe9d666f062477c7b7b500de5368ccc7971c0be8b4684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93165764a94ebfd44a5fe9d666f062477c7b7b500de5368ccc7971c0be8b4684->enter($__internal_93165764a94ebfd44a5fe9d666f062477c7b7b500de5368ccc7971c0be8b4684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_69ee6ffe37fe5c817c36a71b7a09fc6e9170622fa3423ade80abf668ade4346f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ee6ffe37fe5c817c36a71b7a09fc6e9170622fa3423ade80abf668ade4346f->enter($__internal_69ee6ffe37fe5c817c36a71b7a09fc6e9170622fa3423ade80abf668ade4346f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 14
        echo "

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_69ee6ffe37fe5c817c36a71b7a09fc6e9170622fa3423ade80abf668ade4346f->leave($__internal_69ee6ffe37fe5c817c36a71b7a09fc6e9170622fa3423ade80abf668ade4346f_prof);

        
        $__internal_93165764a94ebfd44a5fe9d666f062477c7b7b500de5368ccc7971c0be8b4684->leave($__internal_93165764a94ebfd44a5fe9d666f062477c7b7b500de5368ccc7971c0be8b4684_prof);

    }

    // line 33
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_4b01749a2aead2ed548040b1d95d3ce34e201e68b57f11dbd32bbfaf8cfa849a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b01749a2aead2ed548040b1d95d3ce34e201e68b57f11dbd32bbfaf8cfa849a->enter($__internal_4b01749a2aead2ed548040b1d95d3ce34e201e68b57f11dbd32bbfaf8cfa849a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_6e21c02b56e0a5b6b795b29ce67dd8153c3f8a71f9d390ba3d20f9d21bcddf2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e21c02b56e0a5b6b795b29ce67dd8153c3f8a71f9d390ba3d20f9d21bcddf2b->enter($__internal_6e21c02b56e0a5b6b795b29ce67dd8153c3f8a71f9d390ba3d20f9d21bcddf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 34
        echo "

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">
                <h2>Add New Game</h2>

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
                    Add your new game here .
                </p>

                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"x_panel\">

                                <div class=\"x_content\">

                                        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                                        <span class=\"section\">Game Info</span>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomGames", array()), 'row');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"image\">Image <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                                                   title=\"Select Game image\"></i>
                                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imageGames", array()), 'row');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"price\">Price <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'row');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">Supported by <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "supported", array()), 'row');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"description\">Description <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cathegory\">Cathegory <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idCathegorieg", array()), 'row');
        echo "
                                            </div>
                                        </div>
                                    <div class=\"item form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">State <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etat", array()), 'row');
        echo "
                                        </div>
                                    </div>
                                        <div class=\"text-center margin-top-30\">
                                            <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                                   value=\"Add Game\"/>
                                        </div>
                                </div>

                                ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_6e21c02b56e0a5b6b795b29ce67dd8153c3f8a71f9d390ba3d20f9d21bcddf2b->leave($__internal_6e21c02b56e0a5b6b795b29ce67dd8153c3f8a71f9d390ba3d20f9d21bcddf2b_prof);

        
        $__internal_4b01749a2aead2ed548040b1d95d3ce34e201e68b57f11dbd32bbfaf8cfa849a->leave($__internal_4b01749a2aead2ed548040b1d95d3ce34e201e68b57f11dbd32bbfaf8cfa849a_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Games:NewGame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 136,  290 => 127,  280 => 120,  269 => 112,  258 => 104,  247 => 96,  236 => 88,  223 => 78,  213 => 71,  174 => 34,  165 => 33,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 14,  84 => 13,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
                <h2>Add New Game</h2>

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
                    Add your new game here .
                </p>

                    <div class=\"row\">

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"x_panel\">

                                <div class=\"x_content\">

                                        {{ form_start(form,{'attr':{'class':'form-horizontal form-label-left'}}) }}
                                        <span class=\"section\">Game Info</span>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_row(form.nomGames) }}
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"image\">Image <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                                                   title=\"Select Game image\"></i>
                                                {{ form_row(form.imageGames) }}
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"price\">Price <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_row(form.prix) }}
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">Supported by <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_row(form.supported) }}
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"description\">Description <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_row(form.description) }}
                                            </div>
                                        </div>

                                        <div class=\"item form-group\">
                                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cathegory\">Cathegory <span class=\"required\">*</span>
                                            </label>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                                {{ form_row(form.idCathegorieg) }}
                                            </div>
                                        </div>
                                    <div class=\"item form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">State <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            {{ form_row(form.etat) }}
                                        </div>
                                    </div>
                                        <div class=\"text-center margin-top-30\">
                                            <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                                   value=\"Add Game\"/>
                                        </div>
                                </div>

                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "EloboostedBackofficeBundle:Games:NewGame.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Games/NewGame.html.twig");
    }
}
