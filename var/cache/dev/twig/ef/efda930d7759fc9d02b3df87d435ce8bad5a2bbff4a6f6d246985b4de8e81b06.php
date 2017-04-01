<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8fc6d0f1b3c0beebfd765eb5cdb94c8fa00feb31aafd8bf8f30daae3ab609a20 extends Twig_Template
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
        $__internal_6a4dfa26b667a87472c0f1ef8cea01d51041844dcd45aef36462178c6940f3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4dfa26b667a87472c0f1ef8cea01d51041844dcd45aef36462178c6940f3bd->enter($__internal_6a4dfa26b667a87472c0f1ef8cea01d51041844dcd45aef36462178c6940f3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_83f49f6bbd5c468c0e08c6b5f2ab55114b6aca03d7c722d7a90eaba9c016e06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f49f6bbd5c468c0e08c6b5f2ab55114b6aca03d7c722d7a90eaba9c016e06c->enter($__internal_83f49f6bbd5c468c0e08c6b5f2ab55114b6aca03d7c722d7a90eaba9c016e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6a4dfa26b667a87472c0f1ef8cea01d51041844dcd45aef36462178c6940f3bd->leave($__internal_6a4dfa26b667a87472c0f1ef8cea01d51041844dcd45aef36462178c6940f3bd_prof);

        
        $__internal_83f49f6bbd5c468c0e08c6b5f2ab55114b6aca03d7c722d7a90eaba9c016e06c->leave($__internal_83f49f6bbd5c468c0e08c6b5f2ab55114b6aca03d7c722d7a90eaba9c016e06c_prof);

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
