<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_cca7b2cb7f252fba38b05ecb6f921527ead9f6b47cc02371fa45e638a3d22d6f extends Twig_Template
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
        $__internal_0186b3f652bffe523a78afb160bdb2e059e321fb75aeb28ecf45183b6a51a5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0186b3f652bffe523a78afb160bdb2e059e321fb75aeb28ecf45183b6a51a5bd->enter($__internal_0186b3f652bffe523a78afb160bdb2e059e321fb75aeb28ecf45183b6a51a5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8fd4e2bedf08f52eab8c70ec497fd430f6cbc58de79fbb2205ddfe93bf4ed1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd4e2bedf08f52eab8c70ec497fd430f6cbc58de79fbb2205ddfe93bf4ed1e6->enter($__internal_8fd4e2bedf08f52eab8c70ec497fd430f6cbc58de79fbb2205ddfe93bf4ed1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0186b3f652bffe523a78afb160bdb2e059e321fb75aeb28ecf45183b6a51a5bd->leave($__internal_0186b3f652bffe523a78afb160bdb2e059e321fb75aeb28ecf45183b6a51a5bd_prof);

        
        $__internal_8fd4e2bedf08f52eab8c70ec497fd430f6cbc58de79fbb2205ddfe93bf4ed1e6->leave($__internal_8fd4e2bedf08f52eab8c70ec497fd430f6cbc58de79fbb2205ddfe93bf4ed1e6_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b625aa5de58987bbd8937a155fb25cd71b355762124d6ee9f81e88543a0431e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b625aa5de58987bbd8937a155fb25cd71b355762124d6ee9f81e88543a0431e3->enter($__internal_b625aa5de58987bbd8937a155fb25cd71b355762124d6ee9f81e88543a0431e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_14753b69a6777330002d730373ad00fa969fbde64d8ad5ddeb93dbccd2155958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14753b69a6777330002d730373ad00fa969fbde64d8ad5ddeb93dbccd2155958->enter($__internal_14753b69a6777330002d730373ad00fa969fbde64d8ad5ddeb93dbccd2155958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_14753b69a6777330002d730373ad00fa969fbde64d8ad5ddeb93dbccd2155958->leave($__internal_14753b69a6777330002d730373ad00fa969fbde64d8ad5ddeb93dbccd2155958_prof);

        
        $__internal_b625aa5de58987bbd8937a155fb25cd71b355762124d6ee9f81e88543a0431e3->leave($__internal_b625aa5de58987bbd8937a155fb25cd71b355762124d6ee9f81e88543a0431e3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f6e2aae4eb368d7f0e02d575f861a2c4ac216efae7c7b815a58a266618eb883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6e2aae4eb368d7f0e02d575f861a2c4ac216efae7c7b815a58a266618eb883->enter($__internal_6f6e2aae4eb368d7f0e02d575f861a2c4ac216efae7c7b815a58a266618eb883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b8a4bd7b82d8ee2acf87aa69ce7bc397f03cb15846e792a34fd6195af6b159a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8a4bd7b82d8ee2acf87aa69ce7bc397f03cb15846e792a34fd6195af6b159a->enter($__internal_5b8a4bd7b82d8ee2acf87aa69ce7bc397f03cb15846e792a34fd6195af6b159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5b8a4bd7b82d8ee2acf87aa69ce7bc397f03cb15846e792a34fd6195af6b159a->leave($__internal_5b8a4bd7b82d8ee2acf87aa69ce7bc397f03cb15846e792a34fd6195af6b159a_prof);

        
        $__internal_6f6e2aae4eb368d7f0e02d575f861a2c4ac216efae7c7b815a58a266618eb883->leave($__internal_6f6e2aae4eb368d7f0e02d575f861a2c4ac216efae7c7b815a58a266618eb883_prof);

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
