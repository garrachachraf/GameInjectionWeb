<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_40a5c85dc387e3a7cd476b9f01469d397962f2c51a4ccd4a9a391c24732292de extends Twig_Template
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
        $__internal_0e188e42b48051b3ba0441df2cf1acc7ac7d579741305b8713e09500595ffcef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e188e42b48051b3ba0441df2cf1acc7ac7d579741305b8713e09500595ffcef->enter($__internal_0e188e42b48051b3ba0441df2cf1acc7ac7d579741305b8713e09500595ffcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_94530696df16b2ea96b39a311fe0d911be644927fb794d447fc21a0e1220e453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94530696df16b2ea96b39a311fe0d911be644927fb794d447fc21a0e1220e453->enter($__internal_94530696df16b2ea96b39a311fe0d911be644927fb794d447fc21a0e1220e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e188e42b48051b3ba0441df2cf1acc7ac7d579741305b8713e09500595ffcef->leave($__internal_0e188e42b48051b3ba0441df2cf1acc7ac7d579741305b8713e09500595ffcef_prof);

        
        $__internal_94530696df16b2ea96b39a311fe0d911be644927fb794d447fc21a0e1220e453->leave($__internal_94530696df16b2ea96b39a311fe0d911be644927fb794d447fc21a0e1220e453_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ecea805f9a75a1de62c4060ed4e9575fa0ed42be2463af024b24b479080f997a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea805f9a75a1de62c4060ed4e9575fa0ed42be2463af024b24b479080f997a->enter($__internal_ecea805f9a75a1de62c4060ed4e9575fa0ed42be2463af024b24b479080f997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_df28f26909a03b4b7a7a12077becf93278c2e52f629d0316c61a3964d33d0ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df28f26909a03b4b7a7a12077becf93278c2e52f629d0316c61a3964d33d0ce4->enter($__internal_df28f26909a03b4b7a7a12077becf93278c2e52f629d0316c61a3964d33d0ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_df28f26909a03b4b7a7a12077becf93278c2e52f629d0316c61a3964d33d0ce4->leave($__internal_df28f26909a03b4b7a7a12077becf93278c2e52f629d0316c61a3964d33d0ce4_prof);

        
        $__internal_ecea805f9a75a1de62c4060ed4e9575fa0ed42be2463af024b24b479080f997a->leave($__internal_ecea805f9a75a1de62c4060ed4e9575fa0ed42be2463af024b24b479080f997a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d83555041cfc25989b6dda6cca61a2e9552e3dc129a2acd593d6800e6550841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d83555041cfc25989b6dda6cca61a2e9552e3dc129a2acd593d6800e6550841->enter($__internal_9d83555041cfc25989b6dda6cca61a2e9552e3dc129a2acd593d6800e6550841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4da575c322d3401377d740fae59d3f6357f2893fdfa00631be747b780491f512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da575c322d3401377d740fae59d3f6357f2893fdfa00631be747b780491f512->enter($__internal_4da575c322d3401377d740fae59d3f6357f2893fdfa00631be747b780491f512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4da575c322d3401377d740fae59d3f6357f2893fdfa00631be747b780491f512->leave($__internal_4da575c322d3401377d740fae59d3f6357f2893fdfa00631be747b780491f512_prof);

        
        $__internal_9d83555041cfc25989b6dda6cca61a2e9552e3dc129a2acd593d6800e6550841->leave($__internal_9d83555041cfc25989b6dda6cca61a2e9552e3dc129a2acd593d6800e6550841_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
