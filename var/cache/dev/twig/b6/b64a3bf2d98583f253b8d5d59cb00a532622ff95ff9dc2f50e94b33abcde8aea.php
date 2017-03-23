<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_321e2a6c910939b1c6161c640eb103931bf471ccaad3d0f73d95815530289248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_d443fefaa864d3d65e4962c3321f9959f021df4c9c51d3442c431f4e21ccde08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d443fefaa864d3d65e4962c3321f9959f021df4c9c51d3442c431f4e21ccde08->enter($__internal_d443fefaa864d3d65e4962c3321f9959f021df4c9c51d3442c431f4e21ccde08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f5c454178108ef30da118423ef717a697929b70b034d3f1fffc863fc91cf8a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c454178108ef30da118423ef717a697929b70b034d3f1fffc863fc91cf8a58->enter($__internal_f5c454178108ef30da118423ef717a697929b70b034d3f1fffc863fc91cf8a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d443fefaa864d3d65e4962c3321f9959f021df4c9c51d3442c431f4e21ccde08->leave($__internal_d443fefaa864d3d65e4962c3321f9959f021df4c9c51d3442c431f4e21ccde08_prof);

        
        $__internal_f5c454178108ef30da118423ef717a697929b70b034d3f1fffc863fc91cf8a58->leave($__internal_f5c454178108ef30da118423ef717a697929b70b034d3f1fffc863fc91cf8a58_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_514be7f53a5cb4c6d7cfc1038a5342481b9272f5a7c204931bb36ae953d6aadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514be7f53a5cb4c6d7cfc1038a5342481b9272f5a7c204931bb36ae953d6aadf->enter($__internal_514be7f53a5cb4c6d7cfc1038a5342481b9272f5a7c204931bb36ae953d6aadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6d62e5e23c2cae5b8c862b0a43311e40151507d5dadaf5e39bc30b27dce815ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d62e5e23c2cae5b8c862b0a43311e40151507d5dadaf5e39bc30b27dce815ba->enter($__internal_6d62e5e23c2cae5b8c862b0a43311e40151507d5dadaf5e39bc30b27dce815ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6d62e5e23c2cae5b8c862b0a43311e40151507d5dadaf5e39bc30b27dce815ba->leave($__internal_6d62e5e23c2cae5b8c862b0a43311e40151507d5dadaf5e39bc30b27dce815ba_prof);

        
        $__internal_514be7f53a5cb4c6d7cfc1038a5342481b9272f5a7c204931bb36ae953d6aadf->leave($__internal_514be7f53a5cb4c6d7cfc1038a5342481b9272f5a7c204931bb36ae953d6aadf_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ae1d405d3f13c0678dd7aeada0f0f8f9e44c80bf7c55c26bd624f5813d1cb28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae1d405d3f13c0678dd7aeada0f0f8f9e44c80bf7c55c26bd624f5813d1cb28->enter($__internal_7ae1d405d3f13c0678dd7aeada0f0f8f9e44c80bf7c55c26bd624f5813d1cb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea7e4db160ddbb83d6fc4819c16dc0f987ecfe4574e30541741d3cc44d1a8225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7e4db160ddbb83d6fc4819c16dc0f987ecfe4574e30541741d3cc44d1a8225->enter($__internal_ea7e4db160ddbb83d6fc4819c16dc0f987ecfe4574e30541741d3cc44d1a8225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ea7e4db160ddbb83d6fc4819c16dc0f987ecfe4574e30541741d3cc44d1a8225->leave($__internal_ea7e4db160ddbb83d6fc4819c16dc0f987ecfe4574e30541741d3cc44d1a8225_prof);

        
        $__internal_7ae1d405d3f13c0678dd7aeada0f0f8f9e44c80bf7c55c26bd624f5813d1cb28->leave($__internal_7ae1d405d3f13c0678dd7aeada0f0f8f9e44c80bf7c55c26bd624f5813d1cb28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
