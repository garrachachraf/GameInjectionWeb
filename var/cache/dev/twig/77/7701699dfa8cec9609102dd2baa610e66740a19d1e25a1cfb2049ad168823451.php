<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_18ff029ca8dc921d141d071e8695f7a7bc02792a9078a313a5f97880c5f6a34e extends Twig_Template
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
        $__internal_201cabaa8151cbbad61f3c21eabe258a94d623ed5ad2f681d265565d24f56317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201cabaa8151cbbad61f3c21eabe258a94d623ed5ad2f681d265565d24f56317->enter($__internal_201cabaa8151cbbad61f3c21eabe258a94d623ed5ad2f681d265565d24f56317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_92d7918cfea1a622b56a85cf4173e2e04dfa2bed35e9525cb72bfffee16a375e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d7918cfea1a622b56a85cf4173e2e04dfa2bed35e9525cb72bfffee16a375e->enter($__internal_92d7918cfea1a622b56a85cf4173e2e04dfa2bed35e9525cb72bfffee16a375e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_201cabaa8151cbbad61f3c21eabe258a94d623ed5ad2f681d265565d24f56317->leave($__internal_201cabaa8151cbbad61f3c21eabe258a94d623ed5ad2f681d265565d24f56317_prof);

        
        $__internal_92d7918cfea1a622b56a85cf4173e2e04dfa2bed35e9525cb72bfffee16a375e->leave($__internal_92d7918cfea1a622b56a85cf4173e2e04dfa2bed35e9525cb72bfffee16a375e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
