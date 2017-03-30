<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9b96034e61192be3c028ffd6dc4e151923e5c123d82c97d29ab9a8f5810c9f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cbaa729e8e575821a8fb5b371ed34c2bd0643670afbf7ceaabe75f99d7eabf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbaa729e8e575821a8fb5b371ed34c2bd0643670afbf7ceaabe75f99d7eabf3->enter($__internal_8cbaa729e8e575821a8fb5b371ed34c2bd0643670afbf7ceaabe75f99d7eabf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ee834c352f508f14524be60bd648df2e3ab6fadeb573874ef9e1658de42966f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee834c352f508f14524be60bd648df2e3ab6fadeb573874ef9e1658de42966f5->enter($__internal_ee834c352f508f14524be60bd648df2e3ab6fadeb573874ef9e1658de42966f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8cbaa729e8e575821a8fb5b371ed34c2bd0643670afbf7ceaabe75f99d7eabf3->leave($__internal_8cbaa729e8e575821a8fb5b371ed34c2bd0643670afbf7ceaabe75f99d7eabf3_prof);

        
        $__internal_ee834c352f508f14524be60bd648df2e3ab6fadeb573874ef9e1658de42966f5->leave($__internal_ee834c352f508f14524be60bd648df2e3ab6fadeb573874ef9e1658de42966f5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_671f9076c3252af62da217af870019d3c8bc931011d8ac2ea251958317514a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671f9076c3252af62da217af870019d3c8bc931011d8ac2ea251958317514a1f->enter($__internal_671f9076c3252af62da217af870019d3c8bc931011d8ac2ea251958317514a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d25174faf3395da5f5c04a851cf4b6bf60d8d6970809cf5f36d2e299fc1a012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d25174faf3395da5f5c04a851cf4b6bf60d8d6970809cf5f36d2e299fc1a012->enter($__internal_7d25174faf3395da5f5c04a851cf4b6bf60d8d6970809cf5f36d2e299fc1a012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d25174faf3395da5f5c04a851cf4b6bf60d8d6970809cf5f36d2e299fc1a012->leave($__internal_7d25174faf3395da5f5c04a851cf4b6bf60d8d6970809cf5f36d2e299fc1a012_prof);

        
        $__internal_671f9076c3252af62da217af870019d3c8bc931011d8ac2ea251958317514a1f->leave($__internal_671f9076c3252af62da217af870019d3c8bc931011d8ac2ea251958317514a1f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
