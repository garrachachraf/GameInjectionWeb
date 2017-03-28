<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ea47bc21fc8785c3a8bc8b56b98d3f061877817a040730b47acb48bac18c598 extends Twig_Template
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
        $__internal_b91ef16168f76b2cb0fbb38d45b941a02a79d41748de3b6b3d568c875236bc79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91ef16168f76b2cb0fbb38d45b941a02a79d41748de3b6b3d568c875236bc79->enter($__internal_b91ef16168f76b2cb0fbb38d45b941a02a79d41748de3b6b3d568c875236bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ec0700e080197f488ec60f6f183c6ea31ea32151331645dff8fa4ac87c8da5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0700e080197f488ec60f6f183c6ea31ea32151331645dff8fa4ac87c8da5c9->enter($__internal_ec0700e080197f488ec60f6f183c6ea31ea32151331645dff8fa4ac87c8da5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b91ef16168f76b2cb0fbb38d45b941a02a79d41748de3b6b3d568c875236bc79->leave($__internal_b91ef16168f76b2cb0fbb38d45b941a02a79d41748de3b6b3d568c875236bc79_prof);

        
        $__internal_ec0700e080197f488ec60f6f183c6ea31ea32151331645dff8fa4ac87c8da5c9->leave($__internal_ec0700e080197f488ec60f6f183c6ea31ea32151331645dff8fa4ac87c8da5c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
