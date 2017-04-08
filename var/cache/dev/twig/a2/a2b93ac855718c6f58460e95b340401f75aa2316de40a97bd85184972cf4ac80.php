<?php

/* EloboostedFrontofficeBundle:tproduit:calender.html.twig */
class __TwigTemplate_5adc230a37e8c5b96c6b767cfd6e206e8d265e8562fbe7e9a6b1f78e97700c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae51167e7af6c9950f8e8ed50cccf5a689a35cee912daaf1142dedde7cb5a2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae51167e7af6c9950f8e8ed50cccf5a689a35cee912daaf1142dedde7cb5a2dd->enter($__internal_ae51167e7af6c9950f8e8ed50cccf5a689a35cee912daaf1142dedde7cb5a2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $__internal_8d0f446b91f25f5fd020f234164c45868d70b1de408ba98cc7c65fbfa3a91832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0f446b91f25f5fd020f234164c45868d70b1de408ba98cc7c65fbfa3a91832->enter($__internal_8d0f446b91f25f5fd020f234164c45868d70b1de408ba98cc7c65fbfa3a91832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae51167e7af6c9950f8e8ed50cccf5a689a35cee912daaf1142dedde7cb5a2dd->leave($__internal_ae51167e7af6c9950f8e8ed50cccf5a689a35cee912daaf1142dedde7cb5a2dd_prof);

        
        $__internal_8d0f446b91f25f5fd020f234164c45868d70b1de408ba98cc7c65fbfa3a91832->leave($__internal_8d0f446b91f25f5fd020f234164c45868d70b1de408ba98cc7c65fbfa3a91832_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_1f99aa4f73f5bbcfa060809758e9515c5dd570ad0e87cff21fb3a9bc608803ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f99aa4f73f5bbcfa060809758e9515c5dd570ad0e87cff21fb3a9bc608803ee->enter($__internal_1f99aa4f73f5bbcfa060809758e9515c5dd570ad0e87cff21fb3a9bc608803ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6828dccffded8f2a2816422958939e63c133085334ab71748b590ac8a7cf4525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6828dccffded8f2a2816422958939e63c133085334ab71748b590ac8a7cf4525->enter($__internal_6828dccffded8f2a2816422958939e63c133085334ab71748b590ac8a7cf4525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        // line 11
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_6828dccffded8f2a2816422958939e63c133085334ab71748b590ac8a7cf4525->leave($__internal_6828dccffded8f2a2816422958939e63c133085334ab71748b590ac8a7cf4525_prof);

        
        $__internal_1f99aa4f73f5bbcfa060809758e9515c5dd570ad0e87cff21fb3a9bc608803ee->leave($__internal_1f99aa4f73f5bbcfa060809758e9515c5dd570ad0e87cff21fb3a9bc608803ee_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:calender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
<link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}\" />
<script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}\"></script>
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
{% include 'ADesignsCalendarBundle::calendar.html.twig' %}

{% endblock %}", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tproduit/calender.html.twig");
    }
}
