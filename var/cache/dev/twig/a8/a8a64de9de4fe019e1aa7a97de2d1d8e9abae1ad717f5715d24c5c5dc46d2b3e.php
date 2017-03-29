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
        $__internal_b70dde87285d9bd81ff16c78cde414e18c88bf7f63aecea0537959c43a9d1b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70dde87285d9bd81ff16c78cde414e18c88bf7f63aecea0537959c43a9d1b3e->enter($__internal_b70dde87285d9bd81ff16c78cde414e18c88bf7f63aecea0537959c43a9d1b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_23a85605351909fb2a5f0c5dcaef82ed768887e1e11e494658cc99916dd94897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a85605351909fb2a5f0c5dcaef82ed768887e1e11e494658cc99916dd94897->enter($__internal_23a85605351909fb2a5f0c5dcaef82ed768887e1e11e494658cc99916dd94897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b70dde87285d9bd81ff16c78cde414e18c88bf7f63aecea0537959c43a9d1b3e->leave($__internal_b70dde87285d9bd81ff16c78cde414e18c88bf7f63aecea0537959c43a9d1b3e_prof);

        
        $__internal_23a85605351909fb2a5f0c5dcaef82ed768887e1e11e494658cc99916dd94897->leave($__internal_23a85605351909fb2a5f0c5dcaef82ed768887e1e11e494658cc99916dd94897_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5eb7775795a8d2871633cdfa0a18e97e2cbbe12c7f9706bb8c0db69ee1747812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb7775795a8d2871633cdfa0a18e97e2cbbe12c7f9706bb8c0db69ee1747812->enter($__internal_5eb7775795a8d2871633cdfa0a18e97e2cbbe12c7f9706bb8c0db69ee1747812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3602ef043bb349daaf85e7ee29c0b8e576ee6c8de173e4cbfd3833269fc28ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3602ef043bb349daaf85e7ee29c0b8e576ee6c8de173e4cbfd3833269fc28ded->enter($__internal_3602ef043bb349daaf85e7ee29c0b8e576ee6c8de173e4cbfd3833269fc28ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3602ef043bb349daaf85e7ee29c0b8e576ee6c8de173e4cbfd3833269fc28ded->leave($__internal_3602ef043bb349daaf85e7ee29c0b8e576ee6c8de173e4cbfd3833269fc28ded_prof);

        
        $__internal_5eb7775795a8d2871633cdfa0a18e97e2cbbe12c7f9706bb8c0db69ee1747812->leave($__internal_5eb7775795a8d2871633cdfa0a18e97e2cbbe12c7f9706bb8c0db69ee1747812_prof);

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
