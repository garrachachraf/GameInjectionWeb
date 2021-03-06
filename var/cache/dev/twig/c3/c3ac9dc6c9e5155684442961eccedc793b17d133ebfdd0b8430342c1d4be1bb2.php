<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_48de6d8b390606b4e28a72d438d5ae908fbdd4cef8cad453ee73cadd4e218527 extends Twig_Template
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
        $__internal_97c905d1e1d4629ab10e64c2e1f9ae20c0afd0c2ec66ffc877e6cccc7334b79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c905d1e1d4629ab10e64c2e1f9ae20c0afd0c2ec66ffc877e6cccc7334b79d->enter($__internal_97c905d1e1d4629ab10e64c2e1f9ae20c0afd0c2ec66ffc877e6cccc7334b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_44facad13c3709e178a637423efc95a0a26b6e442acb19c869db136fbcaa56ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44facad13c3709e178a637423efc95a0a26b6e442acb19c869db136fbcaa56ef->enter($__internal_44facad13c3709e178a637423efc95a0a26b6e442acb19c869db136fbcaa56ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c905d1e1d4629ab10e64c2e1f9ae20c0afd0c2ec66ffc877e6cccc7334b79d->leave($__internal_97c905d1e1d4629ab10e64c2e1f9ae20c0afd0c2ec66ffc877e6cccc7334b79d_prof);

        
        $__internal_44facad13c3709e178a637423efc95a0a26b6e442acb19c869db136fbcaa56ef->leave($__internal_44facad13c3709e178a637423efc95a0a26b6e442acb19c869db136fbcaa56ef_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_907c6f78df4cc6667939eb3440777ad7034a6ae44041569bd822686e90770891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907c6f78df4cc6667939eb3440777ad7034a6ae44041569bd822686e90770891->enter($__internal_907c6f78df4cc6667939eb3440777ad7034a6ae44041569bd822686e90770891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a2db9f3e81a70b6858c27ed50e171a84b0fd61ad5c7e8d8534f71eafa293506a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2db9f3e81a70b6858c27ed50e171a84b0fd61ad5c7e8d8534f71eafa293506a->enter($__internal_a2db9f3e81a70b6858c27ed50e171a84b0fd61ad5c7e8d8534f71eafa293506a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a2db9f3e81a70b6858c27ed50e171a84b0fd61ad5c7e8d8534f71eafa293506a->leave($__internal_a2db9f3e81a70b6858c27ed50e171a84b0fd61ad5c7e8d8534f71eafa293506a_prof);

        
        $__internal_907c6f78df4cc6667939eb3440777ad7034a6ae44041569bd822686e90770891->leave($__internal_907c6f78df4cc6667939eb3440777ad7034a6ae44041569bd822686e90770891_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9100d74210d96a8f7e130b4bfc2adbd77800c8ee919796868a44bfb253ea527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9100d74210d96a8f7e130b4bfc2adbd77800c8ee919796868a44bfb253ea527->enter($__internal_e9100d74210d96a8f7e130b4bfc2adbd77800c8ee919796868a44bfb253ea527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d81c507f3fb5cc0ce82fd71b34d45f1bdfba69fbd1a31fd41d236901dcc4658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d81c507f3fb5cc0ce82fd71b34d45f1bdfba69fbd1a31fd41d236901dcc4658->enter($__internal_4d81c507f3fb5cc0ce82fd71b34d45f1bdfba69fbd1a31fd41d236901dcc4658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4d81c507f3fb5cc0ce82fd71b34d45f1bdfba69fbd1a31fd41d236901dcc4658->leave($__internal_4d81c507f3fb5cc0ce82fd71b34d45f1bdfba69fbd1a31fd41d236901dcc4658_prof);

        
        $__internal_e9100d74210d96a8f7e130b4bfc2adbd77800c8ee919796868a44bfb253ea527->leave($__internal_e9100d74210d96a8f7e130b4bfc2adbd77800c8ee919796868a44bfb253ea527_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
