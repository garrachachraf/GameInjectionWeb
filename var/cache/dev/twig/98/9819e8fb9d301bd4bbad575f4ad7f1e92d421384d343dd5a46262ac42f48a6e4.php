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
        $__internal_b00d7a5af9c7c80ca728d73f98f71f92f9d07984a277f7a3c56435fee5644caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00d7a5af9c7c80ca728d73f98f71f92f9d07984a277f7a3c56435fee5644caf->enter($__internal_b00d7a5af9c7c80ca728d73f98f71f92f9d07984a277f7a3c56435fee5644caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_42f395e1078aff239408447db2ed365908852701cecaecd8f55fc8dd2a8e9798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f395e1078aff239408447db2ed365908852701cecaecd8f55fc8dd2a8e9798->enter($__internal_42f395e1078aff239408447db2ed365908852701cecaecd8f55fc8dd2a8e9798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b00d7a5af9c7c80ca728d73f98f71f92f9d07984a277f7a3c56435fee5644caf->leave($__internal_b00d7a5af9c7c80ca728d73f98f71f92f9d07984a277f7a3c56435fee5644caf_prof);

        
        $__internal_42f395e1078aff239408447db2ed365908852701cecaecd8f55fc8dd2a8e9798->leave($__internal_42f395e1078aff239408447db2ed365908852701cecaecd8f55fc8dd2a8e9798_prof);

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
