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
        $__internal_6d060eb8d5415bb67d1917691cf37b3c5a205c9e5d603fa41acf02cf1dfa88de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d060eb8d5415bb67d1917691cf37b3c5a205c9e5d603fa41acf02cf1dfa88de->enter($__internal_6d060eb8d5415bb67d1917691cf37b3c5a205c9e5d603fa41acf02cf1dfa88de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_feca695ddb23950b5dd9cec85893c2b156e2602dab95f4fe0622b2f251d8b350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feca695ddb23950b5dd9cec85893c2b156e2602dab95f4fe0622b2f251d8b350->enter($__internal_feca695ddb23950b5dd9cec85893c2b156e2602dab95f4fe0622b2f251d8b350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d060eb8d5415bb67d1917691cf37b3c5a205c9e5d603fa41acf02cf1dfa88de->leave($__internal_6d060eb8d5415bb67d1917691cf37b3c5a205c9e5d603fa41acf02cf1dfa88de_prof);

        
        $__internal_feca695ddb23950b5dd9cec85893c2b156e2602dab95f4fe0622b2f251d8b350->leave($__internal_feca695ddb23950b5dd9cec85893c2b156e2602dab95f4fe0622b2f251d8b350_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_19ab6a795b2d1115208e06578d4357eac368971aad78720086f409d871266b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ab6a795b2d1115208e06578d4357eac368971aad78720086f409d871266b72->enter($__internal_19ab6a795b2d1115208e06578d4357eac368971aad78720086f409d871266b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_130aa1ff80e096175fb063bb708215ce3920d9e99fdc6a251c7b54eebd484beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130aa1ff80e096175fb063bb708215ce3920d9e99fdc6a251c7b54eebd484beb->enter($__internal_130aa1ff80e096175fb063bb708215ce3920d9e99fdc6a251c7b54eebd484beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_130aa1ff80e096175fb063bb708215ce3920d9e99fdc6a251c7b54eebd484beb->leave($__internal_130aa1ff80e096175fb063bb708215ce3920d9e99fdc6a251c7b54eebd484beb_prof);

        
        $__internal_19ab6a795b2d1115208e06578d4357eac368971aad78720086f409d871266b72->leave($__internal_19ab6a795b2d1115208e06578d4357eac368971aad78720086f409d871266b72_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbd385b1d554391e1bfeaf20b00f892723e2dff4e97f5ff648acd19a44c2b13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd385b1d554391e1bfeaf20b00f892723e2dff4e97f5ff648acd19a44c2b13a->enter($__internal_cbd385b1d554391e1bfeaf20b00f892723e2dff4e97f5ff648acd19a44c2b13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31c244374f687c63c1caccf10cd9b91d02e77ac18ee0b0368bb78c02f6e70478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c244374f687c63c1caccf10cd9b91d02e77ac18ee0b0368bb78c02f6e70478->enter($__internal_31c244374f687c63c1caccf10cd9b91d02e77ac18ee0b0368bb78c02f6e70478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_31c244374f687c63c1caccf10cd9b91d02e77ac18ee0b0368bb78c02f6e70478->leave($__internal_31c244374f687c63c1caccf10cd9b91d02e77ac18ee0b0368bb78c02f6e70478_prof);

        
        $__internal_cbd385b1d554391e1bfeaf20b00f892723e2dff4e97f5ff648acd19a44c2b13a->leave($__internal_cbd385b1d554391e1bfeaf20b00f892723e2dff4e97f5ff648acd19a44c2b13a_prof);

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
