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
        $__internal_f29a60252f445ea751afb42f287f8b57180cbd1bb27cbb280f5b14e96302208a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29a60252f445ea751afb42f287f8b57180cbd1bb27cbb280f5b14e96302208a->enter($__internal_f29a60252f445ea751afb42f287f8b57180cbd1bb27cbb280f5b14e96302208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8aab370969193523c43a2125c8aad901fe8d57a4b5f5f2aafd7652582a9befcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aab370969193523c43a2125c8aad901fe8d57a4b5f5f2aafd7652582a9befcb->enter($__internal_8aab370969193523c43a2125c8aad901fe8d57a4b5f5f2aafd7652582a9befcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29a60252f445ea751afb42f287f8b57180cbd1bb27cbb280f5b14e96302208a->leave($__internal_f29a60252f445ea751afb42f287f8b57180cbd1bb27cbb280f5b14e96302208a_prof);

        
        $__internal_8aab370969193523c43a2125c8aad901fe8d57a4b5f5f2aafd7652582a9befcb->leave($__internal_8aab370969193523c43a2125c8aad901fe8d57a4b5f5f2aafd7652582a9befcb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b03116c6225254aa6442e1ff9b10d555128d5fe8845fd6d47e7e3fce1da821ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03116c6225254aa6442e1ff9b10d555128d5fe8845fd6d47e7e3fce1da821ee->enter($__internal_b03116c6225254aa6442e1ff9b10d555128d5fe8845fd6d47e7e3fce1da821ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_db4c0e948dc222d58d0d4655e32d3fe3a730eb4fdf733d26786f59761e92e5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4c0e948dc222d58d0d4655e32d3fe3a730eb4fdf733d26786f59761e92e5e8->enter($__internal_db4c0e948dc222d58d0d4655e32d3fe3a730eb4fdf733d26786f59761e92e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_db4c0e948dc222d58d0d4655e32d3fe3a730eb4fdf733d26786f59761e92e5e8->leave($__internal_db4c0e948dc222d58d0d4655e32d3fe3a730eb4fdf733d26786f59761e92e5e8_prof);

        
        $__internal_b03116c6225254aa6442e1ff9b10d555128d5fe8845fd6d47e7e3fce1da821ee->leave($__internal_b03116c6225254aa6442e1ff9b10d555128d5fe8845fd6d47e7e3fce1da821ee_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fea812451a9ca0bd55da4fc0568e7a2f704dca633559b085f3e304aa70e98ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea812451a9ca0bd55da4fc0568e7a2f704dca633559b085f3e304aa70e98ce9->enter($__internal_fea812451a9ca0bd55da4fc0568e7a2f704dca633559b085f3e304aa70e98ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cebe2544520b9112ad9cfeb2c809afabfad0bd41aac0b15787d096e97c8cd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cebe2544520b9112ad9cfeb2c809afabfad0bd41aac0b15787d096e97c8cd2d->enter($__internal_4cebe2544520b9112ad9cfeb2c809afabfad0bd41aac0b15787d096e97c8cd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4cebe2544520b9112ad9cfeb2c809afabfad0bd41aac0b15787d096e97c8cd2d->leave($__internal_4cebe2544520b9112ad9cfeb2c809afabfad0bd41aac0b15787d096e97c8cd2d_prof);

        
        $__internal_fea812451a9ca0bd55da4fc0568e7a2f704dca633559b085f3e304aa70e98ce9->leave($__internal_fea812451a9ca0bd55da4fc0568e7a2f704dca633559b085f3e304aa70e98ce9_prof);

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
