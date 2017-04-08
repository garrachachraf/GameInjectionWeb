<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_65c946ff1a4b0b9ab169b6199b668b6419dd6013f432e262fcba18bd1cd17f65 extends Twig_Template
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
        $__internal_95922f4da1586960197842ae4d850b2e2baa7c03ed90817c0598584f99eb54e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95922f4da1586960197842ae4d850b2e2baa7c03ed90817c0598584f99eb54e1->enter($__internal_95922f4da1586960197842ae4d850b2e2baa7c03ed90817c0598584f99eb54e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_078b49c7e6ecd22bf77f1eafe0ef48d37fe3725e51299d631ebbf2969b224e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078b49c7e6ecd22bf77f1eafe0ef48d37fe3725e51299d631ebbf2969b224e90->enter($__internal_078b49c7e6ecd22bf77f1eafe0ef48d37fe3725e51299d631ebbf2969b224e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_95922f4da1586960197842ae4d850b2e2baa7c03ed90817c0598584f99eb54e1->leave($__internal_95922f4da1586960197842ae4d850b2e2baa7c03ed90817c0598584f99eb54e1_prof);

        
        $__internal_078b49c7e6ecd22bf77f1eafe0ef48d37fe3725e51299d631ebbf2969b224e90->leave($__internal_078b49c7e6ecd22bf77f1eafe0ef48d37fe3725e51299d631ebbf2969b224e90_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
