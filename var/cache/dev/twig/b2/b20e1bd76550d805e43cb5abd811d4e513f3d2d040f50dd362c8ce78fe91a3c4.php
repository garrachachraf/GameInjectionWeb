<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_799436a3d313219aef4c0cfafae5f81d8f6f8779ab32cf15a40eba460d777c72 extends Twig_Template
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
        $__internal_09c0bca95a944a364fb1c50f7d8993ca881402e1ad6920fabd02579c0321d440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c0bca95a944a364fb1c50f7d8993ca881402e1ad6920fabd02579c0321d440->enter($__internal_09c0bca95a944a364fb1c50f7d8993ca881402e1ad6920fabd02579c0321d440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_773ba813b4e8b3fe97688f41cd9d0504ed68b1998a9190e8db20614587fb4698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773ba813b4e8b3fe97688f41cd9d0504ed68b1998a9190e8db20614587fb4698->enter($__internal_773ba813b4e8b3fe97688f41cd9d0504ed68b1998a9190e8db20614587fb4698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_09c0bca95a944a364fb1c50f7d8993ca881402e1ad6920fabd02579c0321d440->leave($__internal_09c0bca95a944a364fb1c50f7d8993ca881402e1ad6920fabd02579c0321d440_prof);

        
        $__internal_773ba813b4e8b3fe97688f41cd9d0504ed68b1998a9190e8db20614587fb4698->leave($__internal_773ba813b4e8b3fe97688f41cd9d0504ed68b1998a9190e8db20614587fb4698_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
