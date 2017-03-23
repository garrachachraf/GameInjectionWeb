<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c6927f13cf698dba1be9f18dee74ea105358bb1adc56414b95e4c82b78f2cd81 extends Twig_Template
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
        $__internal_8c9feee852bc5af0620eaca529bd010080821865b146d461dfc9341c6cdd9638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9feee852bc5af0620eaca529bd010080821865b146d461dfc9341c6cdd9638->enter($__internal_8c9feee852bc5af0620eaca529bd010080821865b146d461dfc9341c6cdd9638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a043e9f22f0eb9b0a0a1ce62f37c318d084f18cc6fe33ccc1df34bbe7849bc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a043e9f22f0eb9b0a0a1ce62f37c318d084f18cc6fe33ccc1df34bbe7849bc13->enter($__internal_a043e9f22f0eb9b0a0a1ce62f37c318d084f18cc6fe33ccc1df34bbe7849bc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c9feee852bc5af0620eaca529bd010080821865b146d461dfc9341c6cdd9638->leave($__internal_8c9feee852bc5af0620eaca529bd010080821865b146d461dfc9341c6cdd9638_prof);

        
        $__internal_a043e9f22f0eb9b0a0a1ce62f37c318d084f18cc6fe33ccc1df34bbe7849bc13->leave($__internal_a043e9f22f0eb9b0a0a1ce62f37c318d084f18cc6fe33ccc1df34bbe7849bc13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
