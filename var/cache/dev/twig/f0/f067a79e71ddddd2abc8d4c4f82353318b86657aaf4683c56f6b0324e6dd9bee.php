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
        $__internal_45477f7e32c8a60b9788dfb5995c996eea3252857f343f207517e42dd1e9974d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45477f7e32c8a60b9788dfb5995c996eea3252857f343f207517e42dd1e9974d->enter($__internal_45477f7e32c8a60b9788dfb5995c996eea3252857f343f207517e42dd1e9974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_983deb83d6b7e5c70ba0ec6555aadb32a159ad5b2908a88655d333c696eb526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983deb83d6b7e5c70ba0ec6555aadb32a159ad5b2908a88655d333c696eb526d->enter($__internal_983deb83d6b7e5c70ba0ec6555aadb32a159ad5b2908a88655d333c696eb526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_45477f7e32c8a60b9788dfb5995c996eea3252857f343f207517e42dd1e9974d->leave($__internal_45477f7e32c8a60b9788dfb5995c996eea3252857f343f207517e42dd1e9974d_prof);

        
        $__internal_983deb83d6b7e5c70ba0ec6555aadb32a159ad5b2908a88655d333c696eb526d->leave($__internal_983deb83d6b7e5c70ba0ec6555aadb32a159ad5b2908a88655d333c696eb526d_prof);

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
