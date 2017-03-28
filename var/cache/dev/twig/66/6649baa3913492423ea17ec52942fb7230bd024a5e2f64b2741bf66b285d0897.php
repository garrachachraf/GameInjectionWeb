<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4237c07fb4a89dbc7a358468d5926d47be315772a628eab6c4f260ddcb940525 extends Twig_Template
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
        $__internal_5bea575759b9fdbfda3b278f4c48782aea6e4d4cf0c6fa9eb9bf4eafb204811b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bea575759b9fdbfda3b278f4c48782aea6e4d4cf0c6fa9eb9bf4eafb204811b->enter($__internal_5bea575759b9fdbfda3b278f4c48782aea6e4d4cf0c6fa9eb9bf4eafb204811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_26b3677d19c7340042ab1e9f83aa726b198fa9cb3be1d891ed0fb92b383edb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b3677d19c7340042ab1e9f83aa726b198fa9cb3be1d891ed0fb92b383edb44->enter($__internal_26b3677d19c7340042ab1e9f83aa726b198fa9cb3be1d891ed0fb92b383edb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5bea575759b9fdbfda3b278f4c48782aea6e4d4cf0c6fa9eb9bf4eafb204811b->leave($__internal_5bea575759b9fdbfda3b278f4c48782aea6e4d4cf0c6fa9eb9bf4eafb204811b_prof);

        
        $__internal_26b3677d19c7340042ab1e9f83aa726b198fa9cb3be1d891ed0fb92b383edb44->leave($__internal_26b3677d19c7340042ab1e9f83aa726b198fa9cb3be1d891ed0fb92b383edb44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
