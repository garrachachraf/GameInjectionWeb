<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e96dfd5d6f0211406e9ef2905726edc3aabfd4ef8394b7614038dd1c71c41df7 extends Twig_Template
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
        $__internal_47aac35adaf399d1ef739e25f545318b58dadd42543b7349746f3f75142437ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47aac35adaf399d1ef739e25f545318b58dadd42543b7349746f3f75142437ee->enter($__internal_47aac35adaf399d1ef739e25f545318b58dadd42543b7349746f3f75142437ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a7bffadc3e7baae8d09000b9aa668a41c2a4c741473e4af6c1ff48a5a55fa4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bffadc3e7baae8d09000b9aa668a41c2a4c741473e4af6c1ff48a5a55fa4ea->enter($__internal_a7bffadc3e7baae8d09000b9aa668a41c2a4c741473e4af6c1ff48a5a55fa4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_47aac35adaf399d1ef739e25f545318b58dadd42543b7349746f3f75142437ee->leave($__internal_47aac35adaf399d1ef739e25f545318b58dadd42543b7349746f3f75142437ee_prof);

        
        $__internal_a7bffadc3e7baae8d09000b9aa668a41c2a4c741473e4af6c1ff48a5a55fa4ea->leave($__internal_a7bffadc3e7baae8d09000b9aa668a41c2a4c741473e4af6c1ff48a5a55fa4ea_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
