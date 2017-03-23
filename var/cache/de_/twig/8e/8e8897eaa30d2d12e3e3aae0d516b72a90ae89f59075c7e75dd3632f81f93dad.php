<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b96c10ece4889633a58d485427ecb876f4c5d2cdc3a84155562a466017ecefbc extends Twig_Template
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
        $__internal_250c4b3119980b5d57979d5024ecb36ec63e94e07a300f5c72da8a904c4239c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250c4b3119980b5d57979d5024ecb36ec63e94e07a300f5c72da8a904c4239c0->enter($__internal_250c4b3119980b5d57979d5024ecb36ec63e94e07a300f5c72da8a904c4239c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a3cbac943c79f70ca1e6c90525a6524407c1dd7b852b6940f4b1aaa8d232018f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cbac943c79f70ca1e6c90525a6524407c1dd7b852b6940f4b1aaa8d232018f->enter($__internal_a3cbac943c79f70ca1e6c90525a6524407c1dd7b852b6940f4b1aaa8d232018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250c4b3119980b5d57979d5024ecb36ec63e94e07a300f5c72da8a904c4239c0->leave($__internal_250c4b3119980b5d57979d5024ecb36ec63e94e07a300f5c72da8a904c4239c0_prof);

        
        $__internal_a3cbac943c79f70ca1e6c90525a6524407c1dd7b852b6940f4b1aaa8d232018f->leave($__internal_a3cbac943c79f70ca1e6c90525a6524407c1dd7b852b6940f4b1aaa8d232018f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_120211ec775ba446cc645ea2170d6f670dbb8bf5cbee736c9181b3de5f3e99a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120211ec775ba446cc645ea2170d6f670dbb8bf5cbee736c9181b3de5f3e99a0->enter($__internal_120211ec775ba446cc645ea2170d6f670dbb8bf5cbee736c9181b3de5f3e99a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_35852b919f67544e4f9babf976b99340dc8a59a2f76d40e3be78432d2bb2d339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35852b919f67544e4f9babf976b99340dc8a59a2f76d40e3be78432d2bb2d339->enter($__internal_35852b919f67544e4f9babf976b99340dc8a59a2f76d40e3be78432d2bb2d339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_35852b919f67544e4f9babf976b99340dc8a59a2f76d40e3be78432d2bb2d339->leave($__internal_35852b919f67544e4f9babf976b99340dc8a59a2f76d40e3be78432d2bb2d339_prof);

        
        $__internal_120211ec775ba446cc645ea2170d6f670dbb8bf5cbee736c9181b3de5f3e99a0->leave($__internal_120211ec775ba446cc645ea2170d6f670dbb8bf5cbee736c9181b3de5f3e99a0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63c5a92f1b6a001fb5d8c1d44ace335144b94c2432bc60575fc25ab97daffdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c5a92f1b6a001fb5d8c1d44ace335144b94c2432bc60575fc25ab97daffdd5->enter($__internal_63c5a92f1b6a001fb5d8c1d44ace335144b94c2432bc60575fc25ab97daffdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11a2116495b58572b9a2a8d6e7d01599bff39340b5121fa2c8d359c1cb3a536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a2116495b58572b9a2a8d6e7d01599bff39340b5121fa2c8d359c1cb3a536f->enter($__internal_11a2116495b58572b9a2a8d6e7d01599bff39340b5121fa2c8d359c1cb3a536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_11a2116495b58572b9a2a8d6e7d01599bff39340b5121fa2c8d359c1cb3a536f->leave($__internal_11a2116495b58572b9a2a8d6e7d01599bff39340b5121fa2c8d359c1cb3a536f_prof);

        
        $__internal_63c5a92f1b6a001fb5d8c1d44ace335144b94c2432bc60575fc25ab97daffdd5->leave($__internal_63c5a92f1b6a001fb5d8c1d44ace335144b94c2432bc60575fc25ab97daffdd5_prof);

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
