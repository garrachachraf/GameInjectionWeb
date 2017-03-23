<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d7cab430feb2ee58cdb1da9d00d772816662ed31ef94a3f8f21f7f5e222967bf extends Twig_Template
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
        $__internal_12430a5407d7a638499fd1a9e5637a669c12b5b5e384e39a0dae831650072b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12430a5407d7a638499fd1a9e5637a669c12b5b5e384e39a0dae831650072b49->enter($__internal_12430a5407d7a638499fd1a9e5637a669c12b5b5e384e39a0dae831650072b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7ea68b61f63df3dc6455a75e9dc602de5d02ba880c380d61f54a9974112df2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea68b61f63df3dc6455a75e9dc602de5d02ba880c380d61f54a9974112df2fd->enter($__internal_7ea68b61f63df3dc6455a75e9dc602de5d02ba880c380d61f54a9974112df2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_12430a5407d7a638499fd1a9e5637a669c12b5b5e384e39a0dae831650072b49->leave($__internal_12430a5407d7a638499fd1a9e5637a669c12b5b5e384e39a0dae831650072b49_prof);

        
        $__internal_7ea68b61f63df3dc6455a75e9dc602de5d02ba880c380d61f54a9974112df2fd->leave($__internal_7ea68b61f63df3dc6455a75e9dc602de5d02ba880c380d61f54a9974112df2fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
