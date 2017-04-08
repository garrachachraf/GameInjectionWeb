<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c330bcd92d7c197623e1f4b6b38c673b6444d6757250911f3bdd23f2090111ab extends Twig_Template
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
        $__internal_e0ba30561c01c468599c2b1f0934e74c19dcad421a6d84319940036143178602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ba30561c01c468599c2b1f0934e74c19dcad421a6d84319940036143178602->enter($__internal_e0ba30561c01c468599c2b1f0934e74c19dcad421a6d84319940036143178602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_92d89c34fc3136be2dea72258bd19182a457ac20275e6d931dfe639b2bcde63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d89c34fc3136be2dea72258bd19182a457ac20275e6d931dfe639b2bcde63d->enter($__internal_92d89c34fc3136be2dea72258bd19182a457ac20275e6d931dfe639b2bcde63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e0ba30561c01c468599c2b1f0934e74c19dcad421a6d84319940036143178602->leave($__internal_e0ba30561c01c468599c2b1f0934e74c19dcad421a6d84319940036143178602_prof);

        
        $__internal_92d89c34fc3136be2dea72258bd19182a457ac20275e6d931dfe639b2bcde63d->leave($__internal_92d89c34fc3136be2dea72258bd19182a457ac20275e6d931dfe639b2bcde63d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
