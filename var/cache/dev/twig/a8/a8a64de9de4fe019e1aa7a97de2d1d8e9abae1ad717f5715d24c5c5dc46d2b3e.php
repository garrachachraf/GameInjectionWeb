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
        $__internal_098484619bdab9961a76cbf1c82effe2e2a3437fabb4f297043f3a8470b8ae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098484619bdab9961a76cbf1c82effe2e2a3437fabb4f297043f3a8470b8ae6b->enter($__internal_098484619bdab9961a76cbf1c82effe2e2a3437fabb4f297043f3a8470b8ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2c62e6893071434cdecfb1024c306cb600523cb10285c224f3bfe68ea9588ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c62e6893071434cdecfb1024c306cb600523cb10285c224f3bfe68ea9588ae1->enter($__internal_2c62e6893071434cdecfb1024c306cb600523cb10285c224f3bfe68ea9588ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_098484619bdab9961a76cbf1c82effe2e2a3437fabb4f297043f3a8470b8ae6b->leave($__internal_098484619bdab9961a76cbf1c82effe2e2a3437fabb4f297043f3a8470b8ae6b_prof);

        
        $__internal_2c62e6893071434cdecfb1024c306cb600523cb10285c224f3bfe68ea9588ae1->leave($__internal_2c62e6893071434cdecfb1024c306cb600523cb10285c224f3bfe68ea9588ae1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d80476f4187ab4e1e5f42608cfbfb0332773147ea08d84b0a8022306437d597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d80476f4187ab4e1e5f42608cfbfb0332773147ea08d84b0a8022306437d597->enter($__internal_2d80476f4187ab4e1e5f42608cfbfb0332773147ea08d84b0a8022306437d597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2dd9af538909a14b4a854026483c21158b9f0001a3acd8b1df6443af16a9e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dd9af538909a14b4a854026483c21158b9f0001a3acd8b1df6443af16a9e8a->enter($__internal_c2dd9af538909a14b4a854026483c21158b9f0001a3acd8b1df6443af16a9e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2dd9af538909a14b4a854026483c21158b9f0001a3acd8b1df6443af16a9e8a->leave($__internal_c2dd9af538909a14b4a854026483c21158b9f0001a3acd8b1df6443af16a9e8a_prof);

        
        $__internal_2d80476f4187ab4e1e5f42608cfbfb0332773147ea08d84b0a8022306437d597->leave($__internal_2d80476f4187ab4e1e5f42608cfbfb0332773147ea08d84b0a8022306437d597_prof);

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
