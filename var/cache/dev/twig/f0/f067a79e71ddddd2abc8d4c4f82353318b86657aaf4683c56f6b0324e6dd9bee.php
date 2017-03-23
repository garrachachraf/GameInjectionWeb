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
        $__internal_902624086c17afcc06f0175acf37e4103b696d9e547a67dd777bb7163e83d92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902624086c17afcc06f0175acf37e4103b696d9e547a67dd777bb7163e83d92d->enter($__internal_902624086c17afcc06f0175acf37e4103b696d9e547a67dd777bb7163e83d92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5bcb39900fca068a21498edb055b685aeddecc5cb1758ae6c6b6719aa5cc41bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcb39900fca068a21498edb055b685aeddecc5cb1758ae6c6b6719aa5cc41bb->enter($__internal_5bcb39900fca068a21498edb055b685aeddecc5cb1758ae6c6b6719aa5cc41bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_902624086c17afcc06f0175acf37e4103b696d9e547a67dd777bb7163e83d92d->leave($__internal_902624086c17afcc06f0175acf37e4103b696d9e547a67dd777bb7163e83d92d_prof);

        
        $__internal_5bcb39900fca068a21498edb055b685aeddecc5cb1758ae6c6b6719aa5cc41bb->leave($__internal_5bcb39900fca068a21498edb055b685aeddecc5cb1758ae6c6b6719aa5cc41bb_prof);

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
