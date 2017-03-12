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
        $__internal_93276d55be1167ba6a3e66509ed8da58cc7452ac6ab82f4ed8363dec0285f13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93276d55be1167ba6a3e66509ed8da58cc7452ac6ab82f4ed8363dec0285f13b->enter($__internal_93276d55be1167ba6a3e66509ed8da58cc7452ac6ab82f4ed8363dec0285f13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d2c281008c589150cba8806c277afcaadd8b714ff91f5025af55626ca0a034e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c281008c589150cba8806c277afcaadd8b714ff91f5025af55626ca0a034e2->enter($__internal_d2c281008c589150cba8806c277afcaadd8b714ff91f5025af55626ca0a034e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93276d55be1167ba6a3e66509ed8da58cc7452ac6ab82f4ed8363dec0285f13b->leave($__internal_93276d55be1167ba6a3e66509ed8da58cc7452ac6ab82f4ed8363dec0285f13b_prof);

        
        $__internal_d2c281008c589150cba8806c277afcaadd8b714ff91f5025af55626ca0a034e2->leave($__internal_d2c281008c589150cba8806c277afcaadd8b714ff91f5025af55626ca0a034e2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f925a3d9624705f46fdea7244d6b63d37bf4f443a2d6f90ebe4b37adf5ee07ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f925a3d9624705f46fdea7244d6b63d37bf4f443a2d6f90ebe4b37adf5ee07ef->enter($__internal_f925a3d9624705f46fdea7244d6b63d37bf4f443a2d6f90ebe4b37adf5ee07ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_89e9a5f97db08dfad626bbe31607134d33b9e712857b3eda25d713d4cd561069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e9a5f97db08dfad626bbe31607134d33b9e712857b3eda25d713d4cd561069->enter($__internal_89e9a5f97db08dfad626bbe31607134d33b9e712857b3eda25d713d4cd561069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_89e9a5f97db08dfad626bbe31607134d33b9e712857b3eda25d713d4cd561069->leave($__internal_89e9a5f97db08dfad626bbe31607134d33b9e712857b3eda25d713d4cd561069_prof);

        
        $__internal_f925a3d9624705f46fdea7244d6b63d37bf4f443a2d6f90ebe4b37adf5ee07ef->leave($__internal_f925a3d9624705f46fdea7244d6b63d37bf4f443a2d6f90ebe4b37adf5ee07ef_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b177b8e0458d0bd64bb5154035584f16c9b56f4438c257278dedf17307896b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b177b8e0458d0bd64bb5154035584f16c9b56f4438c257278dedf17307896b60->enter($__internal_b177b8e0458d0bd64bb5154035584f16c9b56f4438c257278dedf17307896b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3423d3d59d5d9e3e1aef1b131082b983d8027ee896ada35d4575dd6dc523b6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3423d3d59d5d9e3e1aef1b131082b983d8027ee896ada35d4575dd6dc523b6b6->enter($__internal_3423d3d59d5d9e3e1aef1b131082b983d8027ee896ada35d4575dd6dc523b6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3423d3d59d5d9e3e1aef1b131082b983d8027ee896ada35d4575dd6dc523b6b6->leave($__internal_3423d3d59d5d9e3e1aef1b131082b983d8027ee896ada35d4575dd6dc523b6b6_prof);

        
        $__internal_b177b8e0458d0bd64bb5154035584f16c9b56f4438c257278dedf17307896b60->leave($__internal_b177b8e0458d0bd64bb5154035584f16c9b56f4438c257278dedf17307896b60_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
