<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_10a8dd338432586dc9849f8f510309c38d80c04d7438ebeda4474e2563288915 extends Twig_Template
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
        $__internal_63ab7c91876dab237a581bceb3f86841eccb0dca7c4a48ebdd38457ea722be36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ab7c91876dab237a581bceb3f86841eccb0dca7c4a48ebdd38457ea722be36->enter($__internal_63ab7c91876dab237a581bceb3f86841eccb0dca7c4a48ebdd38457ea722be36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0c36d3fa7ad0422d30044b9d36482a377d5970172b8253b0fc46e9c8e96037ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c36d3fa7ad0422d30044b9d36482a377d5970172b8253b0fc46e9c8e96037ed->enter($__internal_0c36d3fa7ad0422d30044b9d36482a377d5970172b8253b0fc46e9c8e96037ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_63ab7c91876dab237a581bceb3f86841eccb0dca7c4a48ebdd38457ea722be36->leave($__internal_63ab7c91876dab237a581bceb3f86841eccb0dca7c4a48ebdd38457ea722be36_prof);

        
        $__internal_0c36d3fa7ad0422d30044b9d36482a377d5970172b8253b0fc46e9c8e96037ed->leave($__internal_0c36d3fa7ad0422d30044b9d36482a377d5970172b8253b0fc46e9c8e96037ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
