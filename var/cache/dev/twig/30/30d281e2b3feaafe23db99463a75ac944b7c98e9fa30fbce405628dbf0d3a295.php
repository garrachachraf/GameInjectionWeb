<?php

/* @EloboostedBackoffice/Post/Addcategory.html.twig */
class __TwigTemplate_d0505f1bd79b6c6321f93d486a40a348f37def871ea32e0054178a21e2c124f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Post/Addcategory.html.twig", 1);
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
        $__internal_d8790ec75b4171321adc145b16d9c6cd047aa26742022fe93a19237272a77819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8790ec75b4171321adc145b16d9c6cd047aa26742022fe93a19237272a77819->enter($__internal_d8790ec75b4171321adc145b16d9c6cd047aa26742022fe93a19237272a77819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Post/Addcategory.html.twig"));

        $__internal_b2927d07ecb7c535a0a0c9ed4b831ab003bae9660596decde0527534c9888005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2927d07ecb7c535a0a0c9ed4b831ab003bae9660596decde0527534c9888005->enter($__internal_b2927d07ecb7c535a0a0c9ed4b831ab003bae9660596decde0527534c9888005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Post/Addcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8790ec75b4171321adc145b16d9c6cd047aa26742022fe93a19237272a77819->leave($__internal_d8790ec75b4171321adc145b16d9c6cd047aa26742022fe93a19237272a77819_prof);

        
        $__internal_b2927d07ecb7c535a0a0c9ed4b831ab003bae9660596decde0527534c9888005->leave($__internal_b2927d07ecb7c535a0a0c9ed4b831ab003bae9660596decde0527534c9888005_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_b77838d51299da7fc7b22bb35391a05f53bc853ba7d4e87c69aac51eefa1edfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77838d51299da7fc7b22bb35391a05f53bc853ba7d4e87c69aac51eefa1edfb->enter($__internal_b77838d51299da7fc7b22bb35391a05f53bc853ba7d4e87c69aac51eefa1edfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_9d469b440229658a18ea7d96f93f896bbe3d936c4effaf2e1c4995ddb3fbd057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d469b440229658a18ea7d96f93f896bbe3d936c4effaf2e1c4995ddb3fbd057->enter($__internal_9d469b440229658a18ea7d96f93f896bbe3d936c4effaf2e1c4995ddb3fbd057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

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
        
        $__internal_9d469b440229658a18ea7d96f93f896bbe3d936c4effaf2e1c4995ddb3fbd057->leave($__internal_9d469b440229658a18ea7d96f93f896bbe3d936c4effaf2e1c4995ddb3fbd057_prof);

        
        $__internal_b77838d51299da7fc7b22bb35391a05f53bc853ba7d4e87c69aac51eefa1edfb->leave($__internal_b77838d51299da7fc7b22bb35391a05f53bc853ba7d4e87c69aac51eefa1edfb_prof);

    }

    // line 13
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_72c541ca712159babf1ba5c756bba464d6ad889c664f314486570d8ba653d5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c541ca712159babf1ba5c756bba464d6ad889c664f314486570d8ba653d5f6->enter($__internal_72c541ca712159babf1ba5c756bba464d6ad889c664f314486570d8ba653d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_d1eee8bcc055c011d065698a86dcfe38c75e9174d4802c62d89b7951c5e328cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1eee8bcc055c011d065698a86dcfe38c75e9174d4802c62d89b7951c5e328cb->enter($__internal_d1eee8bcc055c011d065698a86dcfe38c75e9174d4802c62d89b7951c5e328cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

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
        
        $__internal_d1eee8bcc055c011d065698a86dcfe38c75e9174d4802c62d89b7951c5e328cb->leave($__internal_d1eee8bcc055c011d065698a86dcfe38c75e9174d4802c62d89b7951c5e328cb_prof);

        
        $__internal_72c541ca712159babf1ba5c756bba464d6ad889c664f314486570d8ba653d5f6->leave($__internal_72c541ca712159babf1ba5c756bba464d6ad889c664f314486570d8ba653d5f6_prof);

    }

    // line 31
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_98fb06cc8d32f17601ec0e3cf28152cd348007b524e516e205fc67072a9fd28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fb06cc8d32f17601ec0e3cf28152cd348007b524e516e205fc67072a9fd28b->enter($__internal_98fb06cc8d32f17601ec0e3cf28152cd348007b524e516e205fc67072a9fd28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_4ceadbce5adefb014c1abbe68b434ece7b3fd103a3d3f738745ede6492ce2d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceadbce5adefb014c1abbe68b434ece7b3fd103a3d3f738745ede6492ce2d8b->enter($__internal_4ceadbce5adefb014c1abbe68b434ece7b3fd103a3d3f738745ede6492ce2d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 32
        echo "<h1> ADD A NEW CATEGORY</h1>
    <form class=\"form-label\" method=\"post\">
        <div class=\"form-group row\">
            <label for=\"thread\" class=\"col-md-2\">name</label>
            <div class=\"col-md-10\">
                <input type=\"text\"  required class=\"form-control\" name=\"name\" placeholder=\"Add the name \">
            </div>
        </div>

        <div class=\"text-center\"><input type=\"submit\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


    </form>

";
        
        $__internal_4ceadbce5adefb014c1abbe68b434ece7b3fd103a3d3f738745ede6492ce2d8b->leave($__internal_4ceadbce5adefb014c1abbe68b434ece7b3fd103a3d3f738745ede6492ce2d8b_prof);

        
        $__internal_98fb06cc8d32f17601ec0e3cf28152cd348007b524e516e205fc67072a9fd28b->leave($__internal_98fb06cc8d32f17601ec0e3cf28152cd348007b524e516e205fc67072a9fd28b_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Post/Addcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 32,  162 => 31,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  93 => 14,  84 => 13,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
<h1> ADD A NEW CATEGORY</h1>
    <form class=\"form-label\" method=\"post\">
        <div class=\"form-group row\">
            <label for=\"thread\" class=\"col-md-2\">name</label>
            <div class=\"col-md-10\">
                <input type=\"text\"  required class=\"form-control\" name=\"name\" placeholder=\"Add the name \">
            </div>
        </div>

        <div class=\"text-center\"><input type=\"submit\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


    </form>

{% endblock %}", "@EloboostedBackoffice/Post/Addcategory.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Post\\Addcategory.html.twig");
    }
}
