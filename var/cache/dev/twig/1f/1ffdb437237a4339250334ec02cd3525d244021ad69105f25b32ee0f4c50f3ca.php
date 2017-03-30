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
        $__internal_c09cc7e6d6e69c54078b735aa89c9462a06398ea2de6efd6de2a85153c288ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09cc7e6d6e69c54078b735aa89c9462a06398ea2de6efd6de2a85153c288ff2->enter($__internal_c09cc7e6d6e69c54078b735aa89c9462a06398ea2de6efd6de2a85153c288ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_acfd7db61a3683b7854eee69758c64004759e6159573ce927ff21b7198ee0ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfd7db61a3683b7854eee69758c64004759e6159573ce927ff21b7198ee0ce1->enter($__internal_acfd7db61a3683b7854eee69758c64004759e6159573ce927ff21b7198ee0ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09cc7e6d6e69c54078b735aa89c9462a06398ea2de6efd6de2a85153c288ff2->leave($__internal_c09cc7e6d6e69c54078b735aa89c9462a06398ea2de6efd6de2a85153c288ff2_prof);

        
        $__internal_acfd7db61a3683b7854eee69758c64004759e6159573ce927ff21b7198ee0ce1->leave($__internal_acfd7db61a3683b7854eee69758c64004759e6159573ce927ff21b7198ee0ce1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_17afee27e1d2d4f36b7a776c673f26b9cee8dc32d16b91a56f7d1d3e1a005431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17afee27e1d2d4f36b7a776c673f26b9cee8dc32d16b91a56f7d1d3e1a005431->enter($__internal_17afee27e1d2d4f36b7a776c673f26b9cee8dc32d16b91a56f7d1d3e1a005431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e3976da93c030f5e574ecabf71d1621f18f2bde8f879ec2f928b36d8a0ab76ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3976da93c030f5e574ecabf71d1621f18f2bde8f879ec2f928b36d8a0ab76ca->enter($__internal_e3976da93c030f5e574ecabf71d1621f18f2bde8f879ec2f928b36d8a0ab76ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e3976da93c030f5e574ecabf71d1621f18f2bde8f879ec2f928b36d8a0ab76ca->leave($__internal_e3976da93c030f5e574ecabf71d1621f18f2bde8f879ec2f928b36d8a0ab76ca_prof);

        
        $__internal_17afee27e1d2d4f36b7a776c673f26b9cee8dc32d16b91a56f7d1d3e1a005431->leave($__internal_17afee27e1d2d4f36b7a776c673f26b9cee8dc32d16b91a56f7d1d3e1a005431_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60758fc1aa199a8c6a6163f562485ccf61faf9f670c97f40583313abdb13893c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60758fc1aa199a8c6a6163f562485ccf61faf9f670c97f40583313abdb13893c->enter($__internal_60758fc1aa199a8c6a6163f562485ccf61faf9f670c97f40583313abdb13893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fc9a0e049155b2ec961833c23813abe1abdfe6153c31cf9aa6c2c3ed72923fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc9a0e049155b2ec961833c23813abe1abdfe6153c31cf9aa6c2c3ed72923fa->enter($__internal_4fc9a0e049155b2ec961833c23813abe1abdfe6153c31cf9aa6c2c3ed72923fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4fc9a0e049155b2ec961833c23813abe1abdfe6153c31cf9aa6c2c3ed72923fa->leave($__internal_4fc9a0e049155b2ec961833c23813abe1abdfe6153c31cf9aa6c2c3ed72923fa_prof);

        
        $__internal_60758fc1aa199a8c6a6163f562485ccf61faf9f670c97f40583313abdb13893c->leave($__internal_60758fc1aa199a8c6a6163f562485ccf61faf9f670c97f40583313abdb13893c_prof);

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
