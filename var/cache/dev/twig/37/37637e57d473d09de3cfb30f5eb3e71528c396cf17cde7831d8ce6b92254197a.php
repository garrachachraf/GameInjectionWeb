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
        $__internal_5b8639c8820c91335a98b7248924208d39345cae6675b0dc4979a73e8a28a593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8639c8820c91335a98b7248924208d39345cae6675b0dc4979a73e8a28a593->enter($__internal_5b8639c8820c91335a98b7248924208d39345cae6675b0dc4979a73e8a28a593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_03ec8f1f899fed7e0e250defedc5cfb20d88e3fb44bfe7cceb253877a8bfb96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ec8f1f899fed7e0e250defedc5cfb20d88e3fb44bfe7cceb253877a8bfb96e->enter($__internal_03ec8f1f899fed7e0e250defedc5cfb20d88e3fb44bfe7cceb253877a8bfb96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b8639c8820c91335a98b7248924208d39345cae6675b0dc4979a73e8a28a593->leave($__internal_5b8639c8820c91335a98b7248924208d39345cae6675b0dc4979a73e8a28a593_prof);

        
        $__internal_03ec8f1f899fed7e0e250defedc5cfb20d88e3fb44bfe7cceb253877a8bfb96e->leave($__internal_03ec8f1f899fed7e0e250defedc5cfb20d88e3fb44bfe7cceb253877a8bfb96e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_657c1de620b07c9d05a24308bb62a0235e72941cdca2c5045587c29ab00c77fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657c1de620b07c9d05a24308bb62a0235e72941cdca2c5045587c29ab00c77fc->enter($__internal_657c1de620b07c9d05a24308bb62a0235e72941cdca2c5045587c29ab00c77fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8c03b2a2dec92ba5810d60711b3d6aec7754539215c331b0c901e07cdfe9f8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c03b2a2dec92ba5810d60711b3d6aec7754539215c331b0c901e07cdfe9f8fd->enter($__internal_8c03b2a2dec92ba5810d60711b3d6aec7754539215c331b0c901e07cdfe9f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8c03b2a2dec92ba5810d60711b3d6aec7754539215c331b0c901e07cdfe9f8fd->leave($__internal_8c03b2a2dec92ba5810d60711b3d6aec7754539215c331b0c901e07cdfe9f8fd_prof);

        
        $__internal_657c1de620b07c9d05a24308bb62a0235e72941cdca2c5045587c29ab00c77fc->leave($__internal_657c1de620b07c9d05a24308bb62a0235e72941cdca2c5045587c29ab00c77fc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d91ac7310faebd705ce44bfeb8aa9a5b156d121bc48b7758d9d95c9b88d6874b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91ac7310faebd705ce44bfeb8aa9a5b156d121bc48b7758d9d95c9b88d6874b->enter($__internal_d91ac7310faebd705ce44bfeb8aa9a5b156d121bc48b7758d9d95c9b88d6874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b8125fc38cc436346005599b30e09b3dee2656f83a1c568f37435472485d04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8125fc38cc436346005599b30e09b3dee2656f83a1c568f37435472485d04d->enter($__internal_9b8125fc38cc436346005599b30e09b3dee2656f83a1c568f37435472485d04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9b8125fc38cc436346005599b30e09b3dee2656f83a1c568f37435472485d04d->leave($__internal_9b8125fc38cc436346005599b30e09b3dee2656f83a1c568f37435472485d04d_prof);

        
        $__internal_d91ac7310faebd705ce44bfeb8aa9a5b156d121bc48b7758d9d95c9b88d6874b->leave($__internal_d91ac7310faebd705ce44bfeb8aa9a5b156d121bc48b7758d9d95c9b88d6874b_prof);

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
