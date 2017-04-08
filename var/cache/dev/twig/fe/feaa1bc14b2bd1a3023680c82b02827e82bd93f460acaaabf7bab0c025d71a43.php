<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a18b803845fdd6601007d388202f730cc64d5972ac8eecd43f4ad1d79b03bc9b extends Twig_Template
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
        $__internal_17e95bb174a39b6df6d433ef6614410980c8d4bb1c4b2ae13f71bb73072871c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e95bb174a39b6df6d433ef6614410980c8d4bb1c4b2ae13f71bb73072871c1->enter($__internal_17e95bb174a39b6df6d433ef6614410980c8d4bb1c4b2ae13f71bb73072871c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_547d380e56a9757ff8fa7e230c581d44c5f3645b037b9f8266ab38d293bd4be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547d380e56a9757ff8fa7e230c581d44c5f3645b037b9f8266ab38d293bd4be0->enter($__internal_547d380e56a9757ff8fa7e230c581d44c5f3645b037b9f8266ab38d293bd4be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e95bb174a39b6df6d433ef6614410980c8d4bb1c4b2ae13f71bb73072871c1->leave($__internal_17e95bb174a39b6df6d433ef6614410980c8d4bb1c4b2ae13f71bb73072871c1_prof);

        
        $__internal_547d380e56a9757ff8fa7e230c581d44c5f3645b037b9f8266ab38d293bd4be0->leave($__internal_547d380e56a9757ff8fa7e230c581d44c5f3645b037b9f8266ab38d293bd4be0_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1edddb90821ea2af10a66b97aa47d553f78c7cd400c515139d4128928345413c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edddb90821ea2af10a66b97aa47d553f78c7cd400c515139d4128928345413c->enter($__internal_1edddb90821ea2af10a66b97aa47d553f78c7cd400c515139d4128928345413c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4b01d7e805bc169a7afc64a0eb8bae018c83534ab8b45bebbc6e3b49dc1630e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b01d7e805bc169a7afc64a0eb8bae018c83534ab8b45bebbc6e3b49dc1630e4->enter($__internal_4b01d7e805bc169a7afc64a0eb8bae018c83534ab8b45bebbc6e3b49dc1630e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4b01d7e805bc169a7afc64a0eb8bae018c83534ab8b45bebbc6e3b49dc1630e4->leave($__internal_4b01d7e805bc169a7afc64a0eb8bae018c83534ab8b45bebbc6e3b49dc1630e4_prof);

        
        $__internal_1edddb90821ea2af10a66b97aa47d553f78c7cd400c515139d4128928345413c->leave($__internal_1edddb90821ea2af10a66b97aa47d553f78c7cd400c515139d4128928345413c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e4770047ef3f531894eb2e4bacfa4cb2b3690d7b6bbfcb8191322007ab674ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4770047ef3f531894eb2e4bacfa4cb2b3690d7b6bbfcb8191322007ab674ef->enter($__internal_8e4770047ef3f531894eb2e4bacfa4cb2b3690d7b6bbfcb8191322007ab674ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e35a016e4f8ec7c28085a122fd927e6fc48bc87d93acc36835eb5a3d209295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e35a016e4f8ec7c28085a122fd927e6fc48bc87d93acc36835eb5a3d209295e->enter($__internal_7e35a016e4f8ec7c28085a122fd927e6fc48bc87d93acc36835eb5a3d209295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7e35a016e4f8ec7c28085a122fd927e6fc48bc87d93acc36835eb5a3d209295e->leave($__internal_7e35a016e4f8ec7c28085a122fd927e6fc48bc87d93acc36835eb5a3d209295e_prof);

        
        $__internal_8e4770047ef3f531894eb2e4bacfa4cb2b3690d7b6bbfcb8191322007ab674ef->leave($__internal_8e4770047ef3f531894eb2e4bacfa4cb2b3690d7b6bbfcb8191322007ab674ef_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
