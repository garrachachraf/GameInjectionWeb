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
        $__internal_55fbf2ba95ba5255eb8427e7bb53c9a34b78e9eb157ee5ba1e12c588d0046899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fbf2ba95ba5255eb8427e7bb53c9a34b78e9eb157ee5ba1e12c588d0046899->enter($__internal_55fbf2ba95ba5255eb8427e7bb53c9a34b78e9eb157ee5ba1e12c588d0046899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b11cf10a345db09af89f9dbc3a41cd2d3259025bcb8d4d46624d8e4c478edaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11cf10a345db09af89f9dbc3a41cd2d3259025bcb8d4d46624d8e4c478edaa3->enter($__internal_b11cf10a345db09af89f9dbc3a41cd2d3259025bcb8d4d46624d8e4c478edaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fbf2ba95ba5255eb8427e7bb53c9a34b78e9eb157ee5ba1e12c588d0046899->leave($__internal_55fbf2ba95ba5255eb8427e7bb53c9a34b78e9eb157ee5ba1e12c588d0046899_prof);

        
        $__internal_b11cf10a345db09af89f9dbc3a41cd2d3259025bcb8d4d46624d8e4c478edaa3->leave($__internal_b11cf10a345db09af89f9dbc3a41cd2d3259025bcb8d4d46624d8e4c478edaa3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2a3214857719be279279d06287fc6bd8544f04f8e3f78abd0befcb1704d6783a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3214857719be279279d06287fc6bd8544f04f8e3f78abd0befcb1704d6783a->enter($__internal_2a3214857719be279279d06287fc6bd8544f04f8e3f78abd0befcb1704d6783a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_eccb181b8b20b012746ee8db3882dfe05c1f4a192c0ddc9cedb3849b94b3ce05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccb181b8b20b012746ee8db3882dfe05c1f4a192c0ddc9cedb3849b94b3ce05->enter($__internal_eccb181b8b20b012746ee8db3882dfe05c1f4a192c0ddc9cedb3849b94b3ce05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_eccb181b8b20b012746ee8db3882dfe05c1f4a192c0ddc9cedb3849b94b3ce05->leave($__internal_eccb181b8b20b012746ee8db3882dfe05c1f4a192c0ddc9cedb3849b94b3ce05_prof);

        
        $__internal_2a3214857719be279279d06287fc6bd8544f04f8e3f78abd0befcb1704d6783a->leave($__internal_2a3214857719be279279d06287fc6bd8544f04f8e3f78abd0befcb1704d6783a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69f95f87414ea5e2d59ed97f7df90c8a6fab98f6fa8a1df13763457a18f33d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f95f87414ea5e2d59ed97f7df90c8a6fab98f6fa8a1df13763457a18f33d7e->enter($__internal_69f95f87414ea5e2d59ed97f7df90c8a6fab98f6fa8a1df13763457a18f33d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7e64647fc74df5972351a1fe4722f60ea531cf3ea135c3331a7b8c7721f9c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e64647fc74df5972351a1fe4722f60ea531cf3ea135c3331a7b8c7721f9c97->enter($__internal_c7e64647fc74df5972351a1fe4722f60ea531cf3ea135c3331a7b8c7721f9c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c7e64647fc74df5972351a1fe4722f60ea531cf3ea135c3331a7b8c7721f9c97->leave($__internal_c7e64647fc74df5972351a1fe4722f60ea531cf3ea135c3331a7b8c7721f9c97_prof);

        
        $__internal_69f95f87414ea5e2d59ed97f7df90c8a6fab98f6fa8a1df13763457a18f33d7e->leave($__internal_69f95f87414ea5e2d59ed97f7df90c8a6fab98f6fa8a1df13763457a18f33d7e_prof);

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
