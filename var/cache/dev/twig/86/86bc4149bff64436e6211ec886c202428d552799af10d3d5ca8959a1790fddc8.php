<?php

/* EloboostedBackofficeBundle:Games:EditGame.html.twig */
class __TwigTemplate_7b16e22983f0de5af08587d9ba739c62322b5c1631cb780cab080df599669042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Games:EditGame.html.twig", 1);
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
        $__internal_42e78f9f06b5b0ba25d201a0f3093ffe7898de0f5db42b4aa10708085b7e97d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e78f9f06b5b0ba25d201a0f3093ffe7898de0f5db42b4aa10708085b7e97d5->enter($__internal_42e78f9f06b5b0ba25d201a0f3093ffe7898de0f5db42b4aa10708085b7e97d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:EditGame.html.twig"));

        $__internal_1c12f23e64c5aca0ea43eb06809ea87208b671b0f6c78f857876c4f9204a8a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c12f23e64c5aca0ea43eb06809ea87208b671b0f6c78f857876c4f9204a8a42->enter($__internal_1c12f23e64c5aca0ea43eb06809ea87208b671b0f6c78f857876c4f9204a8a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Games:EditGame.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42e78f9f06b5b0ba25d201a0f3093ffe7898de0f5db42b4aa10708085b7e97d5->leave($__internal_42e78f9f06b5b0ba25d201a0f3093ffe7898de0f5db42b4aa10708085b7e97d5_prof);

        
        $__internal_1c12f23e64c5aca0ea43eb06809ea87208b671b0f6c78f857876c4f9204a8a42->leave($__internal_1c12f23e64c5aca0ea43eb06809ea87208b671b0f6c78f857876c4f9204a8a42_prof);

    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_6476201056a4522165a940218e0b56bb9d4bb2987744749f8c8591946c635f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6476201056a4522165a940218e0b56bb9d4bb2987744749f8c8591946c635f0d->enter($__internal_6476201056a4522165a940218e0b56bb9d4bb2987744749f8c8591946c635f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_81f06db0b7ddee93171dd9a23c020fab7066c95275ee1639484e1a2281f4f186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f06db0b7ddee93171dd9a23c020fab7066c95275ee1639484e1a2281f4f186->enter($__internal_81f06db0b7ddee93171dd9a23c020fab7066c95275ee1639484e1a2281f4f186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 4
        echo "    <link href=\"";
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
        
        $__internal_81f06db0b7ddee93171dd9a23c020fab7066c95275ee1639484e1a2281f4f186->leave($__internal_81f06db0b7ddee93171dd9a23c020fab7066c95275ee1639484e1a2281f4f186_prof);

        
        $__internal_6476201056a4522165a940218e0b56bb9d4bb2987744749f8c8591946c635f0d->leave($__internal_6476201056a4522165a940218e0b56bb9d4bb2987744749f8c8591946c635f0d_prof);

    }

    // line 11
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_0c1b9a8edc212e890331362cef7f136c304ceacf9b3315bca1f55f5f33a81034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1b9a8edc212e890331362cef7f136c304ceacf9b3315bca1f55f5f33a81034->enter($__internal_0c1b9a8edc212e890331362cef7f136c304ceacf9b3315bca1f55f5f33a81034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_3ffd7f8ee1f037b58e94e685de3b6a1b6ef345db219f9d588c96a79ba7825331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffd7f8ee1f037b58e94e685de3b6a1b6ef345db219f9d588c96a79ba7825331->enter($__internal_3ffd7f8ee1f037b58e94e685de3b6a1b6ef345db219f9d588c96a79ba7825331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 12
        echo "

    <script src=\"";
        // line 14
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
        
        $__internal_3ffd7f8ee1f037b58e94e685de3b6a1b6ef345db219f9d588c96a79ba7825331->leave($__internal_3ffd7f8ee1f037b58e94e685de3b6a1b6ef345db219f9d588c96a79ba7825331_prof);

        
        $__internal_0c1b9a8edc212e890331362cef7f136c304ceacf9b3315bca1f55f5f33a81034->leave($__internal_0c1b9a8edc212e890331362cef7f136c304ceacf9b3315bca1f55f5f33a81034_prof);

    }

    // line 30
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_465a30f35ef3a8182fa0e878b5007e4426c8005bc4f2d0252e86135bc5c336cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465a30f35ef3a8182fa0e878b5007e4426c8005bc4f2d0252e86135bc5c336cd->enter($__internal_465a30f35ef3a8182fa0e878b5007e4426c8005bc4f2d0252e86135bc5c336cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_1b84d6683e87e57a25529dd3be5dde3ab1b84efeab5fadc43f2c01f8be87a06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b84d6683e87e57a25529dd3be5dde3ab1b84efeab5fadc43f2c01f8be87a06b->enter($__internal_1b84d6683e87e57a25529dd3be5dde3ab1b84efeab5fadc43f2c01f8be87a06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 31
        echo "

<div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
        <div class=\"x_title\">
            <h2>Edit Game</h2>

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

                             <span class=\"section\">Game Info</span>
                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomGames", array()), 'row');
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
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageGames", array()), 'row');
        echo "
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"price\">Price <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prix", array()), 'row');
        echo "
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">Supported by <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "supported", array()), 'row');
        echo "
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"description\">Description <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "description", array()), 'row');
        echo "
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cathegory\">Cathegory <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idCathegorieg", array()), 'row');
        echo "
                                 </div>
                             </div>
                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">State <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'row');
        echo "
                                 </div>
                             </div>
                             <div class=\"text-center margin-top-30\">
                                 <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                        value=\"Edit\"/>
                             </div>

                         </div>

                         ";
        // line 132
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
                         <div>
                                 <div class=\"text-center margin-top-30  \">

                                     <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eloboosted_backoffice_games");
        echo "\" > <button class=\"btn btn-round btn-default\"> Back to the list</button>  </a>
                                 </div>


                                 ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                 <div class=\"text-center margin-top-30  \">
                                 <input type=\"submit\" value=\"Delete\" class=\"btn btn-round btn-default\">
                                 ";
        // line 143
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                 </div>


                         </div>
                     </div>

                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>







";
        
        $__internal_1b84d6683e87e57a25529dd3be5dde3ab1b84efeab5fadc43f2c01f8be87a06b->leave($__internal_1b84d6683e87e57a25529dd3be5dde3ab1b84efeab5fadc43f2c01f8be87a06b_prof);

        
        $__internal_465a30f35ef3a8182fa0e878b5007e4426c8005bc4f2d0252e86135bc5c336cd->leave($__internal_465a30f35ef3a8182fa0e878b5007e4426c8005bc4f2d0252e86135bc5c336cd_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Games:EditGame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 143,  311 => 140,  304 => 136,  297 => 132,  284 => 122,  274 => 115,  263 => 107,  252 => 99,  241 => 91,  230 => 83,  217 => 73,  207 => 66,  170 => 31,  161 => 30,  149 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  101 => 16,  97 => 15,  93 => 14,  89 => 12,  80 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h2>Edit Game</h2>

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

                             <span class=\"section\">Game Info</span>
                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"name\">Name <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.nomGames) }}
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"image\">Image <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Game image\"
                                        title=\"Select Game image\"></i>
                                     {{ form_row(edit_form.imageGames) }}
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"price\">Price <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.prix) }}
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">Supported by <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.supported) }}
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"description\">Description <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.description) }}
                                 </div>
                             </div>

                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cathegory\">Cathegory <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.idCathegorieg) }}
                                 </div>
                             </div>
                             <div class=\"item form-group\">
                                 <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"supportedby\">State <span class=\"required\">*</span>
                                 </label>
                                 <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                     {{ form_row(edit_form.etat) }}
                                 </div>
                             </div>
                             <div class=\"text-center margin-top-30\">
                                 <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-round btn-primary\"
                                        value=\"Edit\"/>
                             </div>

                         </div>

                         {{ form_end(edit_form) }}
                         <div>
                                 <div class=\"text-center margin-top-30  \">

                                     <a href=\"{{ path('eloboosted_backoffice_games') }}\" > <button class=\"btn btn-round btn-default\"> Back to the list</button>  </a>
                                 </div>


                                 {{ form_start(delete_form) }}
                                 <div class=\"text-center margin-top-30  \">
                                 <input type=\"submit\" value=\"Delete\" class=\"btn btn-round btn-default\">
                                 {{ form_end(delete_form) }}
                                 </div>


                         </div>
                     </div>

                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>







{% endblock %}
", "EloboostedBackofficeBundle:Games:EditGame.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Games/EditGame.html.twig");
    }
}
