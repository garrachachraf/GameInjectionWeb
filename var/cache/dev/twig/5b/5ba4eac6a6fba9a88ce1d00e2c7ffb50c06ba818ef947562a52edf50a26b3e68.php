<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f6ef130bf28610d0c8bd5c6a40ba9241de6e7fb637e77da43dec3aec11232f8e extends Twig_Template
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
        $__internal_abe4a73eaed289c6cd9c707b6d8495add6f41b74ec1b173010e1a00d98341722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe4a73eaed289c6cd9c707b6d8495add6f41b74ec1b173010e1a00d98341722->enter($__internal_abe4a73eaed289c6cd9c707b6d8495add6f41b74ec1b173010e1a00d98341722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a84a0e49bf84e14f92c042eab3b032506aa6484be87a1818339a6fd3315c9bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84a0e49bf84e14f92c042eab3b032506aa6484be87a1818339a6fd3315c9bf0->enter($__internal_a84a0e49bf84e14f92c042eab3b032506aa6484be87a1818339a6fd3315c9bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_abe4a73eaed289c6cd9c707b6d8495add6f41b74ec1b173010e1a00d98341722->leave($__internal_abe4a73eaed289c6cd9c707b6d8495add6f41b74ec1b173010e1a00d98341722_prof);

        
        $__internal_a84a0e49bf84e14f92c042eab3b032506aa6484be87a1818339a6fd3315c9bf0->leave($__internal_a84a0e49bf84e14f92c042eab3b032506aa6484be87a1818339a6fd3315c9bf0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f59e61a769f1c0a0164ad9bf26645b8404512c8f07af354c5cfcb7cf2aca78c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59e61a769f1c0a0164ad9bf26645b8404512c8f07af354c5cfcb7cf2aca78c2->enter($__internal_f59e61a769f1c0a0164ad9bf26645b8404512c8f07af354c5cfcb7cf2aca78c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b8c5c3eed9448aff41b984e054be19175d1cb7413876215d990c3de25026caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8c5c3eed9448aff41b984e054be19175d1cb7413876215d990c3de25026caa->enter($__internal_5b8c5c3eed9448aff41b984e054be19175d1cb7413876215d990c3de25026caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b8c5c3eed9448aff41b984e054be19175d1cb7413876215d990c3de25026caa->leave($__internal_5b8c5c3eed9448aff41b984e054be19175d1cb7413876215d990c3de25026caa_prof);

        
        $__internal_f59e61a769f1c0a0164ad9bf26645b8404512c8f07af354c5cfcb7cf2aca78c2->leave($__internal_f59e61a769f1c0a0164ad9bf26645b8404512c8f07af354c5cfcb7cf2aca78c2_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
