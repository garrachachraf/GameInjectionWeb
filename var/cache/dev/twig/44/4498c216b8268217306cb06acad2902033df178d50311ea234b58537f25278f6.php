<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_345e5968c98773c71cda1449dfa30a87bed26411ba262e28dded41a9e65eddee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4019b3aed5d09f7d9e607a8f2d7cfbc788eb06fc66593bd2075d409343c0d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4019b3aed5d09f7d9e607a8f2d7cfbc788eb06fc66593bd2075d409343c0d9d->enter($__internal_d4019b3aed5d09f7d9e607a8f2d7cfbc788eb06fc66593bd2075d409343c0d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5868fa8901d2fab3af2090f0b7a387c44956256de42a079efb73bbd5fde1c7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5868fa8901d2fab3af2090f0b7a387c44956256de42a079efb73bbd5fde1c7e2->enter($__internal_5868fa8901d2fab3af2090f0b7a387c44956256de42a079efb73bbd5fde1c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4019b3aed5d09f7d9e607a8f2d7cfbc788eb06fc66593bd2075d409343c0d9d->leave($__internal_d4019b3aed5d09f7d9e607a8f2d7cfbc788eb06fc66593bd2075d409343c0d9d_prof);

        
        $__internal_5868fa8901d2fab3af2090f0b7a387c44956256de42a079efb73bbd5fde1c7e2->leave($__internal_5868fa8901d2fab3af2090f0b7a387c44956256de42a079efb73bbd5fde1c7e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95091501afde659e072460ec7c560aec6b2cc9dca9fa5d6799df1b5f93bc4768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95091501afde659e072460ec7c560aec6b2cc9dca9fa5d6799df1b5f93bc4768->enter($__internal_95091501afde659e072460ec7c560aec6b2cc9dca9fa5d6799df1b5f93bc4768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e937223aa3fd06c1140fbf782767cf46b824dde40f5858f03148019eb51ecae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e937223aa3fd06c1140fbf782767cf46b824dde40f5858f03148019eb51ecae7->enter($__internal_e937223aa3fd06c1140fbf782767cf46b824dde40f5858f03148019eb51ecae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e937223aa3fd06c1140fbf782767cf46b824dde40f5858f03148019eb51ecae7->leave($__internal_e937223aa3fd06c1140fbf782767cf46b824dde40f5858f03148019eb51ecae7_prof);

        
        $__internal_95091501afde659e072460ec7c560aec6b2cc9dca9fa5d6799df1b5f93bc4768->leave($__internal_95091501afde659e072460ec7c560aec6b2cc9dca9fa5d6799df1b5f93bc4768_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_175221188c1ad791f7c6d89da3766ada94c7871591cc0aaa56f6f8586b5d3c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175221188c1ad791f7c6d89da3766ada94c7871591cc0aaa56f6f8586b5d3c34->enter($__internal_175221188c1ad791f7c6d89da3766ada94c7871591cc0aaa56f6f8586b5d3c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e5107bb338a2e55d11569887ce9f56d317a1654f6d563fb89bb4bd660662d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5107bb338a2e55d11569887ce9f56d317a1654f6d563fb89bb4bd660662d7a->enter($__internal_0e5107bb338a2e55d11569887ce9f56d317a1654f6d563fb89bb4bd660662d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0e5107bb338a2e55d11569887ce9f56d317a1654f6d563fb89bb4bd660662d7a->leave($__internal_0e5107bb338a2e55d11569887ce9f56d317a1654f6d563fb89bb4bd660662d7a_prof);

        
        $__internal_175221188c1ad791f7c6d89da3766ada94c7871591cc0aaa56f6f8586b5d3c34->leave($__internal_175221188c1ad791f7c6d89da3766ada94c7871591cc0aaa56f6f8586b5d3c34_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
