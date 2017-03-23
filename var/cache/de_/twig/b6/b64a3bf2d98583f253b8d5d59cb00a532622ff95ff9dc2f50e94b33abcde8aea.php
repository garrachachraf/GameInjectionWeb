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
        $__internal_883950ca4995689dfab5fd14ac7ea6eff357026d751ea09984ece97cfbe9a3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883950ca4995689dfab5fd14ac7ea6eff357026d751ea09984ece97cfbe9a3e8->enter($__internal_883950ca4995689dfab5fd14ac7ea6eff357026d751ea09984ece97cfbe9a3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_80a835092b67ef1bea3eae45d8fcc6fc6ed628f959bc73d5b9f84559e92056d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a835092b67ef1bea3eae45d8fcc6fc6ed628f959bc73d5b9f84559e92056d9->enter($__internal_80a835092b67ef1bea3eae45d8fcc6fc6ed628f959bc73d5b9f84559e92056d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883950ca4995689dfab5fd14ac7ea6eff357026d751ea09984ece97cfbe9a3e8->leave($__internal_883950ca4995689dfab5fd14ac7ea6eff357026d751ea09984ece97cfbe9a3e8_prof);

        
        $__internal_80a835092b67ef1bea3eae45d8fcc6fc6ed628f959bc73d5b9f84559e92056d9->leave($__internal_80a835092b67ef1bea3eae45d8fcc6fc6ed628f959bc73d5b9f84559e92056d9_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bedd3ea1e77a4ca92ef0624ca4fee0339ec81d17dd0676f42b707a278338b6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedd3ea1e77a4ca92ef0624ca4fee0339ec81d17dd0676f42b707a278338b6f6->enter($__internal_bedd3ea1e77a4ca92ef0624ca4fee0339ec81d17dd0676f42b707a278338b6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eb6b9e017599486af39217bed946b7cd089e13c0e4b8ac4141e9391870ce1f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b9e017599486af39217bed946b7cd089e13c0e4b8ac4141e9391870ce1f9d->enter($__internal_eb6b9e017599486af39217bed946b7cd089e13c0e4b8ac4141e9391870ce1f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_eb6b9e017599486af39217bed946b7cd089e13c0e4b8ac4141e9391870ce1f9d->leave($__internal_eb6b9e017599486af39217bed946b7cd089e13c0e4b8ac4141e9391870ce1f9d_prof);

        
        $__internal_bedd3ea1e77a4ca92ef0624ca4fee0339ec81d17dd0676f42b707a278338b6f6->leave($__internal_bedd3ea1e77a4ca92ef0624ca4fee0339ec81d17dd0676f42b707a278338b6f6_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_303f381a5316ba6b46b02bef08e4be9d4563eeef9ab032d83f2cb635999ec67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303f381a5316ba6b46b02bef08e4be9d4563eeef9ab032d83f2cb635999ec67e->enter($__internal_303f381a5316ba6b46b02bef08e4be9d4563eeef9ab032d83f2cb635999ec67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22eae0c97bcb22a8ef32c9618896edd4157d0dd4506c67ff9718204b92db2531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eae0c97bcb22a8ef32c9618896edd4157d0dd4506c67ff9718204b92db2531->enter($__internal_22eae0c97bcb22a8ef32c9618896edd4157d0dd4506c67ff9718204b92db2531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_22eae0c97bcb22a8ef32c9618896edd4157d0dd4506c67ff9718204b92db2531->leave($__internal_22eae0c97bcb22a8ef32c9618896edd4157d0dd4506c67ff9718204b92db2531_prof);

        
        $__internal_303f381a5316ba6b46b02bef08e4be9d4563eeef9ab032d83f2cb635999ec67e->leave($__internal_303f381a5316ba6b46b02bef08e4be9d4563eeef9ab032d83f2cb635999ec67e_prof);

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
