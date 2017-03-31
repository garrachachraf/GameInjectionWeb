<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_675f6aa81a125bbe3705921e2e5b69384e5f82d2ef2f32ed65ce64150c3ee110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e012e749141e628768e3fa89512ef3a4dad1677fa7c92c2b58fcb29a97058f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e012e749141e628768e3fa89512ef3a4dad1677fa7c92c2b58fcb29a97058f7->enter($__internal_0e012e749141e628768e3fa89512ef3a4dad1677fa7c92c2b58fcb29a97058f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_914ee73c1a11970893d5c99122e046f25c3c27f8f0a7220e87d713bd7d4eb9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914ee73c1a11970893d5c99122e046f25c3c27f8f0a7220e87d713bd7d4eb9c3->enter($__internal_914ee73c1a11970893d5c99122e046f25c3c27f8f0a7220e87d713bd7d4eb9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0e012e749141e628768e3fa89512ef3a4dad1677fa7c92c2b58fcb29a97058f7->leave($__internal_0e012e749141e628768e3fa89512ef3a4dad1677fa7c92c2b58fcb29a97058f7_prof);

        
        $__internal_914ee73c1a11970893d5c99122e046f25c3c27f8f0a7220e87d713bd7d4eb9c3->leave($__internal_914ee73c1a11970893d5c99122e046f25c3c27f8f0a7220e87d713bd7d4eb9c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
