<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_78c87368cf4f25ca11d534e7c9bb6f324e42b1e2655f7d3d8498eb89e1660616 extends Twig_Template
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
        $__internal_46e399994da64b3a25a4115986767358d1ef19f33b9d725a52e58bbe7b2deeef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e399994da64b3a25a4115986767358d1ef19f33b9d725a52e58bbe7b2deeef->enter($__internal_46e399994da64b3a25a4115986767358d1ef19f33b9d725a52e58bbe7b2deeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d96315bd6b7cd7d86e71d30485c652a98ce65bc195a7e3b95e519fc2c932dea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96315bd6b7cd7d86e71d30485c652a98ce65bc195a7e3b95e519fc2c932dea8->enter($__internal_d96315bd6b7cd7d86e71d30485c652a98ce65bc195a7e3b95e519fc2c932dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_46e399994da64b3a25a4115986767358d1ef19f33b9d725a52e58bbe7b2deeef->leave($__internal_46e399994da64b3a25a4115986767358d1ef19f33b9d725a52e58bbe7b2deeef_prof);

        
        $__internal_d96315bd6b7cd7d86e71d30485c652a98ce65bc195a7e3b95e519fc2c932dea8->leave($__internal_d96315bd6b7cd7d86e71d30485c652a98ce65bc195a7e3b95e519fc2c932dea8_prof);

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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
