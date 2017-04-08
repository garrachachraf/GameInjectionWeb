<?php

/* EloboostedFrontofficeBundle:tproduit:calender.html.twig */
class __TwigTemplate_270008b42de1e725c062e2fe5489d2facf6744b080158c3977270ac9da237a73 extends Twig_Template
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
        $__internal_d94723a82f56063473585a6eb60b8284466a2d8242f6dd6c6af9ac0d17708298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94723a82f56063473585a6eb60b8284466a2d8242f6dd6c6af9ac0d17708298->enter($__internal_d94723a82f56063473585a6eb60b8284466a2d8242f6dd6c6af9ac0d17708298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $__internal_842ca374d2a3602aad45ee9560a10d4fbd029a107df60d48547e68b20bc23fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842ca374d2a3602aad45ee9560a10d4fbd029a107df60d48547e68b20bc23fea->enter($__internal_842ca374d2a3602aad45ee9560a10d4fbd029a107df60d48547e68b20bc23fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94723a82f56063473585a6eb60b8284466a2d8242f6dd6c6af9ac0d17708298->leave($__internal_d94723a82f56063473585a6eb60b8284466a2d8242f6dd6c6af9ac0d17708298_prof);

        
        $__internal_842ca374d2a3602aad45ee9560a10d4fbd029a107df60d48547e68b20bc23fea->leave($__internal_842ca374d2a3602aad45ee9560a10d4fbd029a107df60d48547e68b20bc23fea_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_f1c836de691f9af9c71bdecdc736e87f3e891c7f13476c325b0f930f88a02732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c836de691f9af9c71bdecdc736e87f3e891c7f13476c325b0f930f88a02732->enter($__internal_f1c836de691f9af9c71bdecdc736e87f3e891c7f13476c325b0f930f88a02732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_40a283a90e088112a3e6e3d6ecec451397cb5f47109d085f357e20cd429991a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a283a90e088112a3e6e3d6ecec451397cb5f47109d085f357e20cd429991a7->enter($__internal_40a283a90e088112a3e6e3d6ecec451397cb5f47109d085f357e20cd429991a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_40a283a90e088112a3e6e3d6ecec451397cb5f47109d085f357e20cd429991a7->leave($__internal_40a283a90e088112a3e6e3d6ecec451397cb5f47109d085f357e20cd429991a7_prof);

        
        $__internal_f1c836de691f9af9c71bdecdc736e87f3e891c7f13476c325b0f930f88a02732->leave($__internal_f1c836de691f9af9c71bdecdc736e87f3e891c7f13476c325b0f930f88a02732_prof);

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

{% endblock %}", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tproduit\\calender.html.twig");
    }
}
