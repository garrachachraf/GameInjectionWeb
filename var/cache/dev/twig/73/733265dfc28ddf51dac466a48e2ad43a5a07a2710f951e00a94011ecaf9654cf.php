<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9216f1815d805085095507dda585ceab553f47b631fbbaa79b87378fdec0e9b7 extends Twig_Template
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
        $__internal_5118c834793e6934fab6c26474cf8b93e4888d89e34022c1f5c3f6ae3d3f790f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5118c834793e6934fab6c26474cf8b93e4888d89e34022c1f5c3f6ae3d3f790f->enter($__internal_5118c834793e6934fab6c26474cf8b93e4888d89e34022c1f5c3f6ae3d3f790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_07ea21d78070c69002557dd00c21d4c5d6fd0d78082b995912ecafe2280251f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ea21d78070c69002557dd00c21d4c5d6fd0d78082b995912ecafe2280251f2->enter($__internal_07ea21d78070c69002557dd00c21d4c5d6fd0d78082b995912ecafe2280251f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5118c834793e6934fab6c26474cf8b93e4888d89e34022c1f5c3f6ae3d3f790f->leave($__internal_5118c834793e6934fab6c26474cf8b93e4888d89e34022c1f5c3f6ae3d3f790f_prof);

        
        $__internal_07ea21d78070c69002557dd00c21d4c5d6fd0d78082b995912ecafe2280251f2->leave($__internal_07ea21d78070c69002557dd00c21d4c5d6fd0d78082b995912ecafe2280251f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
