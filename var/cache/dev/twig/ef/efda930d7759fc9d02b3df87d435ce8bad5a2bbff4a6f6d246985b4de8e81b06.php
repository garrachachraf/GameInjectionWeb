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
        $__internal_8045d0ccc3d41c2dee79f17a34988b6803a3be361b6166f958770e648caa73cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8045d0ccc3d41c2dee79f17a34988b6803a3be361b6166f958770e648caa73cd->enter($__internal_8045d0ccc3d41c2dee79f17a34988b6803a3be361b6166f958770e648caa73cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_70ce2eaca26dab5fbc816b48eb7508102b83f55422a9c6e477b80c63dd9b4b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ce2eaca26dab5fbc816b48eb7508102b83f55422a9c6e477b80c63dd9b4b5c->enter($__internal_70ce2eaca26dab5fbc816b48eb7508102b83f55422a9c6e477b80c63dd9b4b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8045d0ccc3d41c2dee79f17a34988b6803a3be361b6166f958770e648caa73cd->leave($__internal_8045d0ccc3d41c2dee79f17a34988b6803a3be361b6166f958770e648caa73cd_prof);

        
        $__internal_70ce2eaca26dab5fbc816b48eb7508102b83f55422a9c6e477b80c63dd9b4b5c->leave($__internal_70ce2eaca26dab5fbc816b48eb7508102b83f55422a9c6e477b80c63dd9b4b5c_prof);

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
