<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfd9720e62bd091ca8f82c8606aa0bfe64c34bbb9f5e5511f54880dbce989a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd9720e62bd091ca8f82c8606aa0bfe64c34bbb9f5e5511f54880dbce989a24->enter($__internal_dfd9720e62bd091ca8f82c8606aa0bfe64c34bbb9f5e5511f54880dbce989a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f53a2206f6e35c8340e63d830e55628eb34df69bd7569ea4912ba0dafcc5b225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53a2206f6e35c8340e63d830e55628eb34df69bd7569ea4912ba0dafcc5b225->enter($__internal_f53a2206f6e35c8340e63d830e55628eb34df69bd7569ea4912ba0dafcc5b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd9720e62bd091ca8f82c8606aa0bfe64c34bbb9f5e5511f54880dbce989a24->leave($__internal_dfd9720e62bd091ca8f82c8606aa0bfe64c34bbb9f5e5511f54880dbce989a24_prof);

        
        $__internal_f53a2206f6e35c8340e63d830e55628eb34df69bd7569ea4912ba0dafcc5b225->leave($__internal_f53a2206f6e35c8340e63d830e55628eb34df69bd7569ea4912ba0dafcc5b225_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1ad65112735744c4b127dd0dad61315a93f51defd54e58fbc2125f156973cb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad65112735744c4b127dd0dad61315a93f51defd54e58fbc2125f156973cb0e->enter($__internal_1ad65112735744c4b127dd0dad61315a93f51defd54e58fbc2125f156973cb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0bdf3a174e648f2c2cf6c87e5f47e9f0a88d8853b7b1dd77287b64a9dcd1750b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdf3a174e648f2c2cf6c87e5f47e9f0a88d8853b7b1dd77287b64a9dcd1750b->enter($__internal_0bdf3a174e648f2c2cf6c87e5f47e9f0a88d8853b7b1dd77287b64a9dcd1750b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0bdf3a174e648f2c2cf6c87e5f47e9f0a88d8853b7b1dd77287b64a9dcd1750b->leave($__internal_0bdf3a174e648f2c2cf6c87e5f47e9f0a88d8853b7b1dd77287b64a9dcd1750b_prof);

        
        $__internal_1ad65112735744c4b127dd0dad61315a93f51defd54e58fbc2125f156973cb0e->leave($__internal_1ad65112735744c4b127dd0dad61315a93f51defd54e58fbc2125f156973cb0e_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bb061150f38bd4f1453b3f2dd127572dff0c287738a7b2aa0ad3bb118acc9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb061150f38bd4f1453b3f2dd127572dff0c287738a7b2aa0ad3bb118acc9ff->enter($__internal_2bb061150f38bd4f1453b3f2dd127572dff0c287738a7b2aa0ad3bb118acc9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b64834b0719b4fd4bd8c37ee1bc9a179ab014b9ca49fb6a793d0207b6cad95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b64834b0719b4fd4bd8c37ee1bc9a179ab014b9ca49fb6a793d0207b6cad95a->enter($__internal_6b64834b0719b4fd4bd8c37ee1bc9a179ab014b9ca49fb6a793d0207b6cad95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6b64834b0719b4fd4bd8c37ee1bc9a179ab014b9ca49fb6a793d0207b6cad95a->leave($__internal_6b64834b0719b4fd4bd8c37ee1bc9a179ab014b9ca49fb6a793d0207b6cad95a_prof);

        
        $__internal_2bb061150f38bd4f1453b3f2dd127572dff0c287738a7b2aa0ad3bb118acc9ff->leave($__internal_2bb061150f38bd4f1453b3f2dd127572dff0c287738a7b2aa0ad3bb118acc9ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
