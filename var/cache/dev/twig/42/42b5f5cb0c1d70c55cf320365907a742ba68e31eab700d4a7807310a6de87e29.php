<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e405a60c4a102f82a48a15bc33bb425e2c7c8f9d79abaa01578e9a36a4e1ef87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_5e77cabd2a7d380d3eb35c06b1b8e0551b98ce24c46f075d9abdb27ed6327370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e77cabd2a7d380d3eb35c06b1b8e0551b98ce24c46f075d9abdb27ed6327370->enter($__internal_5e77cabd2a7d380d3eb35c06b1b8e0551b98ce24c46f075d9abdb27ed6327370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ccb10d3c8dda1bc5396429525668093c3ba6e9e105b35996fab117549c34afff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb10d3c8dda1bc5396429525668093c3ba6e9e105b35996fab117549c34afff->enter($__internal_ccb10d3c8dda1bc5396429525668093c3ba6e9e105b35996fab117549c34afff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e77cabd2a7d380d3eb35c06b1b8e0551b98ce24c46f075d9abdb27ed6327370->leave($__internal_5e77cabd2a7d380d3eb35c06b1b8e0551b98ce24c46f075d9abdb27ed6327370_prof);

        
        $__internal_ccb10d3c8dda1bc5396429525668093c3ba6e9e105b35996fab117549c34afff->leave($__internal_ccb10d3c8dda1bc5396429525668093c3ba6e9e105b35996fab117549c34afff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5655cda0fcc5c068b7abc48a1791b933d5097be3a970edcb1e60dfa880281193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5655cda0fcc5c068b7abc48a1791b933d5097be3a970edcb1e60dfa880281193->enter($__internal_5655cda0fcc5c068b7abc48a1791b933d5097be3a970edcb1e60dfa880281193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86529653d1b71912e1a86bd0719bcd83eb562cbed4068a9ea775431814e1b566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86529653d1b71912e1a86bd0719bcd83eb562cbed4068a9ea775431814e1b566->enter($__internal_86529653d1b71912e1a86bd0719bcd83eb562cbed4068a9ea775431814e1b566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_86529653d1b71912e1a86bd0719bcd83eb562cbed4068a9ea775431814e1b566->leave($__internal_86529653d1b71912e1a86bd0719bcd83eb562cbed4068a9ea775431814e1b566_prof);

        
        $__internal_5655cda0fcc5c068b7abc48a1791b933d5097be3a970edcb1e60dfa880281193->leave($__internal_5655cda0fcc5c068b7abc48a1791b933d5097be3a970edcb1e60dfa880281193_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d6c23cef700a737809869429b4759669d79e587455ce1cbd924bd53a579cc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6c23cef700a737809869429b4759669d79e587455ce1cbd924bd53a579cc09->enter($__internal_1d6c23cef700a737809869429b4759669d79e587455ce1cbd924bd53a579cc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae6852addd5dcfed0269e942af6e39bb9c16a374885988f24b738ee467b273cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6852addd5dcfed0269e942af6e39bb9c16a374885988f24b738ee467b273cd->enter($__internal_ae6852addd5dcfed0269e942af6e39bb9c16a374885988f24b738ee467b273cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ae6852addd5dcfed0269e942af6e39bb9c16a374885988f24b738ee467b273cd->leave($__internal_ae6852addd5dcfed0269e942af6e39bb9c16a374885988f24b738ee467b273cd_prof);

        
        $__internal_1d6c23cef700a737809869429b4759669d79e587455ce1cbd924bd53a579cc09->leave($__internal_1d6c23cef700a737809869429b4759669d79e587455ce1cbd924bd53a579cc09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
