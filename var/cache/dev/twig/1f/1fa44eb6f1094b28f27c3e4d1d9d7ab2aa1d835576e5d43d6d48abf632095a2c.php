<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_21675df96647b956abb26b58e11b78ed0ff7d04912e1e42a67445cf030589a44 extends Twig_Template
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
        $__internal_ec2f9b7535aad20f99db493fbef2bdc630d1db3040bf5ee4b0a71915a976eeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2f9b7535aad20f99db493fbef2bdc630d1db3040bf5ee4b0a71915a976eeae->enter($__internal_ec2f9b7535aad20f99db493fbef2bdc630d1db3040bf5ee4b0a71915a976eeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ff7d8b61347a69ccf6918f62455b346f6fb3b902b223cdfb730f2e7d95e53c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7d8b61347a69ccf6918f62455b346f6fb3b902b223cdfb730f2e7d95e53c38->enter($__internal_ff7d8b61347a69ccf6918f62455b346f6fb3b902b223cdfb730f2e7d95e53c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec2f9b7535aad20f99db493fbef2bdc630d1db3040bf5ee4b0a71915a976eeae->leave($__internal_ec2f9b7535aad20f99db493fbef2bdc630d1db3040bf5ee4b0a71915a976eeae_prof);

        
        $__internal_ff7d8b61347a69ccf6918f62455b346f6fb3b902b223cdfb730f2e7d95e53c38->leave($__internal_ff7d8b61347a69ccf6918f62455b346f6fb3b902b223cdfb730f2e7d95e53c38_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d01d525c6b16876427fe297608b0c0eb23027692db5ba3aa9714344f17885a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01d525c6b16876427fe297608b0c0eb23027692db5ba3aa9714344f17885a1e->enter($__internal_d01d525c6b16876427fe297608b0c0eb23027692db5ba3aa9714344f17885a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dd154a44f7c5879ba5adcc2623aef8b5e4b4d7e28f7aeec374fdbcb15459743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd154a44f7c5879ba5adcc2623aef8b5e4b4d7e28f7aeec374fdbcb15459743->enter($__internal_5dd154a44f7c5879ba5adcc2623aef8b5e4b4d7e28f7aeec374fdbcb15459743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5dd154a44f7c5879ba5adcc2623aef8b5e4b4d7e28f7aeec374fdbcb15459743->leave($__internal_5dd154a44f7c5879ba5adcc2623aef8b5e4b4d7e28f7aeec374fdbcb15459743_prof);

        
        $__internal_d01d525c6b16876427fe297608b0c0eb23027692db5ba3aa9714344f17885a1e->leave($__internal_d01d525c6b16876427fe297608b0c0eb23027692db5ba3aa9714344f17885a1e_prof);

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
