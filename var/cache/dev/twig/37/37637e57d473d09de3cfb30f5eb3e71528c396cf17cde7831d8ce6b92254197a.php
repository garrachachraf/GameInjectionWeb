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
        $__internal_ecc129bca82fb13fb2943842111119a2eb0078d275963626454bf679bdc0522c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc129bca82fb13fb2943842111119a2eb0078d275963626454bf679bdc0522c->enter($__internal_ecc129bca82fb13fb2943842111119a2eb0078d275963626454bf679bdc0522c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c7b7ae9e3fa1236fa41913671a215a7fe839c694c22d4c480ee2b4f1c1913f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b7ae9e3fa1236fa41913671a215a7fe839c694c22d4c480ee2b4f1c1913f20->enter($__internal_c7b7ae9e3fa1236fa41913671a215a7fe839c694c22d4c480ee2b4f1c1913f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc129bca82fb13fb2943842111119a2eb0078d275963626454bf679bdc0522c->leave($__internal_ecc129bca82fb13fb2943842111119a2eb0078d275963626454bf679bdc0522c_prof);

        
        $__internal_c7b7ae9e3fa1236fa41913671a215a7fe839c694c22d4c480ee2b4f1c1913f20->leave($__internal_c7b7ae9e3fa1236fa41913671a215a7fe839c694c22d4c480ee2b4f1c1913f20_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7296616c1b30b2ebadbc32fc7f96307a76b80f2c9a9c28c6f500abc8ade05ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7296616c1b30b2ebadbc32fc7f96307a76b80f2c9a9c28c6f500abc8ade05ddd->enter($__internal_7296616c1b30b2ebadbc32fc7f96307a76b80f2c9a9c28c6f500abc8ade05ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_557022b981c6897e337866aedc39507b833aad6dca8fe192fcdb806481fc5446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557022b981c6897e337866aedc39507b833aad6dca8fe192fcdb806481fc5446->enter($__internal_557022b981c6897e337866aedc39507b833aad6dca8fe192fcdb806481fc5446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_557022b981c6897e337866aedc39507b833aad6dca8fe192fcdb806481fc5446->leave($__internal_557022b981c6897e337866aedc39507b833aad6dca8fe192fcdb806481fc5446_prof);

        
        $__internal_7296616c1b30b2ebadbc32fc7f96307a76b80f2c9a9c28c6f500abc8ade05ddd->leave($__internal_7296616c1b30b2ebadbc32fc7f96307a76b80f2c9a9c28c6f500abc8ade05ddd_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bee070d263a31276c67f056b8158ed399a4bb0cf953bac45a5b1da58120efed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bee070d263a31276c67f056b8158ed399a4bb0cf953bac45a5b1da58120efed->enter($__internal_0bee070d263a31276c67f056b8158ed399a4bb0cf953bac45a5b1da58120efed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85ea22a35c0b628e94d7b7a490e8c75b80d8692069353fba30e1dc5d1c75f3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ea22a35c0b628e94d7b7a490e8c75b80d8692069353fba30e1dc5d1c75f3ff->enter($__internal_85ea22a35c0b628e94d7b7a490e8c75b80d8692069353fba30e1dc5d1c75f3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_85ea22a35c0b628e94d7b7a490e8c75b80d8692069353fba30e1dc5d1c75f3ff->leave($__internal_85ea22a35c0b628e94d7b7a490e8c75b80d8692069353fba30e1dc5d1c75f3ff_prof);

        
        $__internal_0bee070d263a31276c67f056b8158ed399a4bb0cf953bac45a5b1da58120efed->leave($__internal_0bee070d263a31276c67f056b8158ed399a4bb0cf953bac45a5b1da58120efed_prof);

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
