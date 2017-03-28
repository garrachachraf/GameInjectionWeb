<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ce2ab8b7ebb1b2be46f36f1364982eb5f2c1b8a681a1284223533c5522eaf8ee extends Twig_Template
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
        $__internal_562696b2e5eebb714ea8ef01f97e8e3b79cce124a320d324de34bbbf3b54fe2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562696b2e5eebb714ea8ef01f97e8e3b79cce124a320d324de34bbbf3b54fe2f->enter($__internal_562696b2e5eebb714ea8ef01f97e8e3b79cce124a320d324de34bbbf3b54fe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5faf5c8f1224e2a379da595777ac3129c52822c19dae733797aa122888bede33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faf5c8f1224e2a379da595777ac3129c52822c19dae733797aa122888bede33->enter($__internal_5faf5c8f1224e2a379da595777ac3129c52822c19dae733797aa122888bede33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_562696b2e5eebb714ea8ef01f97e8e3b79cce124a320d324de34bbbf3b54fe2f->leave($__internal_562696b2e5eebb714ea8ef01f97e8e3b79cce124a320d324de34bbbf3b54fe2f_prof);

        
        $__internal_5faf5c8f1224e2a379da595777ac3129c52822c19dae733797aa122888bede33->leave($__internal_5faf5c8f1224e2a379da595777ac3129c52822c19dae733797aa122888bede33_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a681a1042e593dd3817337bae2d52ac059b951643e1e16b432cde7474a480b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a681a1042e593dd3817337bae2d52ac059b951643e1e16b432cde7474a480b1->enter($__internal_2a681a1042e593dd3817337bae2d52ac059b951643e1e16b432cde7474a480b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a6121171a17f73e5211a49b2d71fd596cc1206ad2dfc91a457956822c0eee3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6121171a17f73e5211a49b2d71fd596cc1206ad2dfc91a457956822c0eee3c->enter($__internal_0a6121171a17f73e5211a49b2d71fd596cc1206ad2dfc91a457956822c0eee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a6121171a17f73e5211a49b2d71fd596cc1206ad2dfc91a457956822c0eee3c->leave($__internal_0a6121171a17f73e5211a49b2d71fd596cc1206ad2dfc91a457956822c0eee3c_prof);

        
        $__internal_2a681a1042e593dd3817337bae2d52ac059b951643e1e16b432cde7474a480b1->leave($__internal_2a681a1042e593dd3817337bae2d52ac059b951643e1e16b432cde7474a480b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
