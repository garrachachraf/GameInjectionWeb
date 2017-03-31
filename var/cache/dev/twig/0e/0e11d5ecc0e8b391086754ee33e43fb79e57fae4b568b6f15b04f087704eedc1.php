<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6efd28d63604f0692007964187d1bad7fabf0bb4175df97f4f7552bc7e012609 extends Twig_Template
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
        $__internal_494f822624ac1b37cd6025bf5a3c98fa2daebcf20f59300ae75774b8ccfd5d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494f822624ac1b37cd6025bf5a3c98fa2daebcf20f59300ae75774b8ccfd5d8c->enter($__internal_494f822624ac1b37cd6025bf5a3c98fa2daebcf20f59300ae75774b8ccfd5d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_27edd4ad2f1223b6570e6c62b8023fb75017ac2d63e530c5b6626a6797520432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27edd4ad2f1223b6570e6c62b8023fb75017ac2d63e530c5b6626a6797520432->enter($__internal_27edd4ad2f1223b6570e6c62b8023fb75017ac2d63e530c5b6626a6797520432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_494f822624ac1b37cd6025bf5a3c98fa2daebcf20f59300ae75774b8ccfd5d8c->leave($__internal_494f822624ac1b37cd6025bf5a3c98fa2daebcf20f59300ae75774b8ccfd5d8c_prof);

        
        $__internal_27edd4ad2f1223b6570e6c62b8023fb75017ac2d63e530c5b6626a6797520432->leave($__internal_27edd4ad2f1223b6570e6c62b8023fb75017ac2d63e530c5b6626a6797520432_prof);

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
