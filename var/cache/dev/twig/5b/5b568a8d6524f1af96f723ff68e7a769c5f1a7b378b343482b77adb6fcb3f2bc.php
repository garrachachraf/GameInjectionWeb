<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_37b94ebc4a4336d1c76cc1b7d3219b5c3b5667d8675742de8eba69bc58803f7c extends Twig_Template
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
        $__internal_00bb36291e894183ab985a4978bc98c14019a24cc04e16bad6544a05f0a48dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00bb36291e894183ab985a4978bc98c14019a24cc04e16bad6544a05f0a48dae->enter($__internal_00bb36291e894183ab985a4978bc98c14019a24cc04e16bad6544a05f0a48dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0b56fef8217a105885b70582085cb94b7cd7c7620636c4229d6af9561efb7c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b56fef8217a105885b70582085cb94b7cd7c7620636c4229d6af9561efb7c53->enter($__internal_0b56fef8217a105885b70582085cb94b7cd7c7620636c4229d6af9561efb7c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_00bb36291e894183ab985a4978bc98c14019a24cc04e16bad6544a05f0a48dae->leave($__internal_00bb36291e894183ab985a4978bc98c14019a24cc04e16bad6544a05f0a48dae_prof);

        
        $__internal_0b56fef8217a105885b70582085cb94b7cd7c7620636c4229d6af9561efb7c53->leave($__internal_0b56fef8217a105885b70582085cb94b7cd7c7620636c4229d6af9561efb7c53_prof);

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
