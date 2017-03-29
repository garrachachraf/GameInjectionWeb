<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e24396d7234a3e6b18bc1dfc5d3c5862199f7ea12a9924841c7efe98ba6d4a6a extends Twig_Template
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
        $__internal_4e25829e5547b66f847a13dd8ed1b95012c18b9b43c142e28490b9ffd275b9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e25829e5547b66f847a13dd8ed1b95012c18b9b43c142e28490b9ffd275b9ac->enter($__internal_4e25829e5547b66f847a13dd8ed1b95012c18b9b43c142e28490b9ffd275b9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_20592ebcd3b3aa248805bc1011d8376b993f92bf71ed5dca37d45d7716613342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20592ebcd3b3aa248805bc1011d8376b993f92bf71ed5dca37d45d7716613342->enter($__internal_20592ebcd3b3aa248805bc1011d8376b993f92bf71ed5dca37d45d7716613342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e25829e5547b66f847a13dd8ed1b95012c18b9b43c142e28490b9ffd275b9ac->leave($__internal_4e25829e5547b66f847a13dd8ed1b95012c18b9b43c142e28490b9ffd275b9ac_prof);

        
        $__internal_20592ebcd3b3aa248805bc1011d8376b993f92bf71ed5dca37d45d7716613342->leave($__internal_20592ebcd3b3aa248805bc1011d8376b993f92bf71ed5dca37d45d7716613342_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5d3d486beb078beb77bce2cb71f48b1aa52daa88a3e3ded3f05e132e97d88c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3d486beb078beb77bce2cb71f48b1aa52daa88a3e3ded3f05e132e97d88c8a->enter($__internal_5d3d486beb078beb77bce2cb71f48b1aa52daa88a3e3ded3f05e132e97d88c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1cd9604557aeb843fb9e628cf625221b1f4072cdbb575452fb249705581a542c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd9604557aeb843fb9e628cf625221b1f4072cdbb575452fb249705581a542c->enter($__internal_1cd9604557aeb843fb9e628cf625221b1f4072cdbb575452fb249705581a542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1cd9604557aeb843fb9e628cf625221b1f4072cdbb575452fb249705581a542c->leave($__internal_1cd9604557aeb843fb9e628cf625221b1f4072cdbb575452fb249705581a542c_prof);

        
        $__internal_5d3d486beb078beb77bce2cb71f48b1aa52daa88a3e3ded3f05e132e97d88c8a->leave($__internal_5d3d486beb078beb77bce2cb71f48b1aa52daa88a3e3ded3f05e132e97d88c8a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e44c65521b4388049cea7104c769b039e56c1ed5a636f7a4ed524eddf09c550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e44c65521b4388049cea7104c769b039e56c1ed5a636f7a4ed524eddf09c550->enter($__internal_7e44c65521b4388049cea7104c769b039e56c1ed5a636f7a4ed524eddf09c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05253d602d9d45941024c1af073724f130566a879c04603cd0e9d1cb0f6b7943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05253d602d9d45941024c1af073724f130566a879c04603cd0e9d1cb0f6b7943->enter($__internal_05253d602d9d45941024c1af073724f130566a879c04603cd0e9d1cb0f6b7943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_05253d602d9d45941024c1af073724f130566a879c04603cd0e9d1cb0f6b7943->leave($__internal_05253d602d9d45941024c1af073724f130566a879c04603cd0e9d1cb0f6b7943_prof);

        
        $__internal_7e44c65521b4388049cea7104c769b039e56c1ed5a636f7a4ed524eddf09c550->leave($__internal_7e44c65521b4388049cea7104c769b039e56c1ed5a636f7a4ed524eddf09c550_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
