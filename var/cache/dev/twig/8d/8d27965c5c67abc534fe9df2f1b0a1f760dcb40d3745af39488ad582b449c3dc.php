<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_977441df525c94c21b637aed69d94954a2c4c6fe8b40c9798e3df785ddbe1fc3 extends Twig_Template
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
        $__internal_1c2117e0396179c5787a68a2e9656834a53354d0c488de107eb2f3bf2ad37eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2117e0396179c5787a68a2e9656834a53354d0c488de107eb2f3bf2ad37eb5->enter($__internal_1c2117e0396179c5787a68a2e9656834a53354d0c488de107eb2f3bf2ad37eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_61be4b70d686ebd68ba17d91e9186f2bda8a17a959e7c964294b195a8fd61e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61be4b70d686ebd68ba17d91e9186f2bda8a17a959e7c964294b195a8fd61e70->enter($__internal_61be4b70d686ebd68ba17d91e9186f2bda8a17a959e7c964294b195a8fd61e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c2117e0396179c5787a68a2e9656834a53354d0c488de107eb2f3bf2ad37eb5->leave($__internal_1c2117e0396179c5787a68a2e9656834a53354d0c488de107eb2f3bf2ad37eb5_prof);

        
        $__internal_61be4b70d686ebd68ba17d91e9186f2bda8a17a959e7c964294b195a8fd61e70->leave($__internal_61be4b70d686ebd68ba17d91e9186f2bda8a17a959e7c964294b195a8fd61e70_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
