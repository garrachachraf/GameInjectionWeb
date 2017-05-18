<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_856a903b071af52e2a64aba22a16280b5254444e4560f2869c38d3452ea7ad3c extends Twig_Template
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
        $__internal_1ed9f3838b09a531b06b9424f52141f8e77cb8e28cc897f660fe1a83834112c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed9f3838b09a531b06b9424f52141f8e77cb8e28cc897f660fe1a83834112c3->enter($__internal_1ed9f3838b09a531b06b9424f52141f8e77cb8e28cc897f660fe1a83834112c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dc29b92c13d84a27be5e1c8f8e2eb3f2154d5bfe7842796b6ee5810f75e43246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc29b92c13d84a27be5e1c8f8e2eb3f2154d5bfe7842796b6ee5810f75e43246->enter($__internal_dc29b92c13d84a27be5e1c8f8e2eb3f2154d5bfe7842796b6ee5810f75e43246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1ed9f3838b09a531b06b9424f52141f8e77cb8e28cc897f660fe1a83834112c3->leave($__internal_1ed9f3838b09a531b06b9424f52141f8e77cb8e28cc897f660fe1a83834112c3_prof);

        
        $__internal_dc29b92c13d84a27be5e1c8f8e2eb3f2154d5bfe7842796b6ee5810f75e43246->leave($__internal_dc29b92c13d84a27be5e1c8f8e2eb3f2154d5bfe7842796b6ee5810f75e43246_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c4722a386bdd6b24ea0d7137c738136dcda62793aeee29cb5ee0017360b5969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4722a386bdd6b24ea0d7137c738136dcda62793aeee29cb5ee0017360b5969->enter($__internal_6c4722a386bdd6b24ea0d7137c738136dcda62793aeee29cb5ee0017360b5969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b26f169c8f9f07c9b0b18a756cbd293b628d4d19527dc14d4f8ad43a7af728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b26f169c8f9f07c9b0b18a756cbd293b628d4d19527dc14d4f8ad43a7af728f->enter($__internal_8b26f169c8f9f07c9b0b18a756cbd293b628d4d19527dc14d4f8ad43a7af728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8b26f169c8f9f07c9b0b18a756cbd293b628d4d19527dc14d4f8ad43a7af728f->leave($__internal_8b26f169c8f9f07c9b0b18a756cbd293b628d4d19527dc14d4f8ad43a7af728f_prof);

        
        $__internal_6c4722a386bdd6b24ea0d7137c738136dcda62793aeee29cb5ee0017360b5969->leave($__internal_6c4722a386bdd6b24ea0d7137c738136dcda62793aeee29cb5ee0017360b5969_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
