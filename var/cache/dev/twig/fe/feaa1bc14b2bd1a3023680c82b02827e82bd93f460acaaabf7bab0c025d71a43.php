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
        $__internal_348d68df61d1d50fc640b53aef3deed7ee4077d835cfc181affa260d940455d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348d68df61d1d50fc640b53aef3deed7ee4077d835cfc181affa260d940455d3->enter($__internal_348d68df61d1d50fc640b53aef3deed7ee4077d835cfc181affa260d940455d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c571a61fffb27fdb3ff2030ed0563c34f907caa22fb520f0dd94dfd68ca4484b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c571a61fffb27fdb3ff2030ed0563c34f907caa22fb520f0dd94dfd68ca4484b->enter($__internal_c571a61fffb27fdb3ff2030ed0563c34f907caa22fb520f0dd94dfd68ca4484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_348d68df61d1d50fc640b53aef3deed7ee4077d835cfc181affa260d940455d3->leave($__internal_348d68df61d1d50fc640b53aef3deed7ee4077d835cfc181affa260d940455d3_prof);

        
        $__internal_c571a61fffb27fdb3ff2030ed0563c34f907caa22fb520f0dd94dfd68ca4484b->leave($__internal_c571a61fffb27fdb3ff2030ed0563c34f907caa22fb520f0dd94dfd68ca4484b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5a77f64e87551141b6a851abff3b4ac1c1a853469a7a0f5e206a49f2f20261af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a77f64e87551141b6a851abff3b4ac1c1a853469a7a0f5e206a49f2f20261af->enter($__internal_5a77f64e87551141b6a851abff3b4ac1c1a853469a7a0f5e206a49f2f20261af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e736116c40460aee40ab86b927d56f408b4f6dc162281f94bb566be54b7b4e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e736116c40460aee40ab86b927d56f408b4f6dc162281f94bb566be54b7b4e0c->enter($__internal_e736116c40460aee40ab86b927d56f408b4f6dc162281f94bb566be54b7b4e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e736116c40460aee40ab86b927d56f408b4f6dc162281f94bb566be54b7b4e0c->leave($__internal_e736116c40460aee40ab86b927d56f408b4f6dc162281f94bb566be54b7b4e0c_prof);

        
        $__internal_5a77f64e87551141b6a851abff3b4ac1c1a853469a7a0f5e206a49f2f20261af->leave($__internal_5a77f64e87551141b6a851abff3b4ac1c1a853469a7a0f5e206a49f2f20261af_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64e4ab5b8d64d7b4d57b7396cad71bfa7fbcf457b04f85852832ff97b4d3de2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e4ab5b8d64d7b4d57b7396cad71bfa7fbcf457b04f85852832ff97b4d3de2b->enter($__internal_64e4ab5b8d64d7b4d57b7396cad71bfa7fbcf457b04f85852832ff97b4d3de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f01555c7ec75da6ca8fa728e5bcc551bfd35bc9119936f8dd605df08e68f02ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01555c7ec75da6ca8fa728e5bcc551bfd35bc9119936f8dd605df08e68f02ea->enter($__internal_f01555c7ec75da6ca8fa728e5bcc551bfd35bc9119936f8dd605df08e68f02ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f01555c7ec75da6ca8fa728e5bcc551bfd35bc9119936f8dd605df08e68f02ea->leave($__internal_f01555c7ec75da6ca8fa728e5bcc551bfd35bc9119936f8dd605df08e68f02ea_prof);

        
        $__internal_64e4ab5b8d64d7b4d57b7396cad71bfa7fbcf457b04f85852832ff97b4d3de2b->leave($__internal_64e4ab5b8d64d7b4d57b7396cad71bfa7fbcf457b04f85852832ff97b4d3de2b_prof);

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
