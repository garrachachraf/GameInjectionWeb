<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_175d52110da02d936e8a51d3f8c49b9a6f6c09a09575d3ff73c170ecec9896e7 extends Twig_Template
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
        $__internal_8c07eac88143b6af0e1f2aba9c17b56b92878effe35fdb329ca400604e1c70a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c07eac88143b6af0e1f2aba9c17b56b92878effe35fdb329ca400604e1c70a5->enter($__internal_8c07eac88143b6af0e1f2aba9c17b56b92878effe35fdb329ca400604e1c70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0362e1c2252b862ccdab6b5c6aac654bc7452b07af69cb386763446aebc47c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0362e1c2252b862ccdab6b5c6aac654bc7452b07af69cb386763446aebc47c80->enter($__internal_0362e1c2252b862ccdab6b5c6aac654bc7452b07af69cb386763446aebc47c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8c07eac88143b6af0e1f2aba9c17b56b92878effe35fdb329ca400604e1c70a5->leave($__internal_8c07eac88143b6af0e1f2aba9c17b56b92878effe35fdb329ca400604e1c70a5_prof);

        
        $__internal_0362e1c2252b862ccdab6b5c6aac654bc7452b07af69cb386763446aebc47c80->leave($__internal_0362e1c2252b862ccdab6b5c6aac654bc7452b07af69cb386763446aebc47c80_prof);

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
