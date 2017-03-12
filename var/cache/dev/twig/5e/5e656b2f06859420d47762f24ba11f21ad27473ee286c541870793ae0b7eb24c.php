<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
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
        $__internal_ce517206b487d0870a7a8b559d927ed44fbdf85bfdbe5abb47d1588a80703b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce517206b487d0870a7a8b559d927ed44fbdf85bfdbe5abb47d1588a80703b3d->enter($__internal_ce517206b487d0870a7a8b559d927ed44fbdf85bfdbe5abb47d1588a80703b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_77832c9a369d99a109c88d86f3ad1689117f20db7e2cf1695c6f9507700d22a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77832c9a369d99a109c88d86f3ad1689117f20db7e2cf1695c6f9507700d22a7->enter($__internal_77832c9a369d99a109c88d86f3ad1689117f20db7e2cf1695c6f9507700d22a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce517206b487d0870a7a8b559d927ed44fbdf85bfdbe5abb47d1588a80703b3d->leave($__internal_ce517206b487d0870a7a8b559d927ed44fbdf85bfdbe5abb47d1588a80703b3d_prof);

        
        $__internal_77832c9a369d99a109c88d86f3ad1689117f20db7e2cf1695c6f9507700d22a7->leave($__internal_77832c9a369d99a109c88d86f3ad1689117f20db7e2cf1695c6f9507700d22a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3fe8efaad0fb9d5e15a28ef945e55f742210135270aa2dcdfb1fde44b57d8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fe8efaad0fb9d5e15a28ef945e55f742210135270aa2dcdfb1fde44b57d8ba->enter($__internal_f3fe8efaad0fb9d5e15a28ef945e55f742210135270aa2dcdfb1fde44b57d8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc74d8ac83b6e78fc2f43a15482ad34d72f66da8a791fdf0f4692ddcae1809a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc74d8ac83b6e78fc2f43a15482ad34d72f66da8a791fdf0f4692ddcae1809a5->enter($__internal_fc74d8ac83b6e78fc2f43a15482ad34d72f66da8a791fdf0f4692ddcae1809a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_fc74d8ac83b6e78fc2f43a15482ad34d72f66da8a791fdf0f4692ddcae1809a5->leave($__internal_fc74d8ac83b6e78fc2f43a15482ad34d72f66da8a791fdf0f4692ddcae1809a5_prof);

        
        $__internal_f3fe8efaad0fb9d5e15a28ef945e55f742210135270aa2dcdfb1fde44b57d8ba->leave($__internal_f3fe8efaad0fb9d5e15a28ef945e55f742210135270aa2dcdfb1fde44b57d8ba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_12d57a0fb991cbda581ff89871a7db99ada1b94a92c4f8a1cacd0ddf5209ae8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d57a0fb991cbda581ff89871a7db99ada1b94a92c4f8a1cacd0ddf5209ae8a->enter($__internal_12d57a0fb991cbda581ff89871a7db99ada1b94a92c4f8a1cacd0ddf5209ae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffa12fe3232ce579394108ffcf86ff36985f2d451f4ab57740fc1016c437fd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa12fe3232ce579394108ffcf86ff36985f2d451f4ab57740fc1016c437fd49->enter($__internal_ffa12fe3232ce579394108ffcf86ff36985f2d451f4ab57740fc1016c437fd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffa12fe3232ce579394108ffcf86ff36985f2d451f4ab57740fc1016c437fd49->leave($__internal_ffa12fe3232ce579394108ffcf86ff36985f2d451f4ab57740fc1016c437fd49_prof);

        
        $__internal_12d57a0fb991cbda581ff89871a7db99ada1b94a92c4f8a1cacd0ddf5209ae8a->leave($__internal_12d57a0fb991cbda581ff89871a7db99ada1b94a92c4f8a1cacd0ddf5209ae8a_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
