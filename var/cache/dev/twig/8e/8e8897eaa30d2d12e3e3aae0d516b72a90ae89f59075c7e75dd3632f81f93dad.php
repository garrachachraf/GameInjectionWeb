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
        $__internal_692c4f6710da94349da29ca7cabbc62a9d475440d15e59d0f6f4e8fd1c1dc649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692c4f6710da94349da29ca7cabbc62a9d475440d15e59d0f6f4e8fd1c1dc649->enter($__internal_692c4f6710da94349da29ca7cabbc62a9d475440d15e59d0f6f4e8fd1c1dc649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bdb6407d79fd9f4693369622629146f260c795ac02feee0c8729d46838ec2fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb6407d79fd9f4693369622629146f260c795ac02feee0c8729d46838ec2fc1->enter($__internal_bdb6407d79fd9f4693369622629146f260c795ac02feee0c8729d46838ec2fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692c4f6710da94349da29ca7cabbc62a9d475440d15e59d0f6f4e8fd1c1dc649->leave($__internal_692c4f6710da94349da29ca7cabbc62a9d475440d15e59d0f6f4e8fd1c1dc649_prof);

        
        $__internal_bdb6407d79fd9f4693369622629146f260c795ac02feee0c8729d46838ec2fc1->leave($__internal_bdb6407d79fd9f4693369622629146f260c795ac02feee0c8729d46838ec2fc1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f9f0f9e4e01f9f26325144118474b8990501284212ded8c9d5e3c1a020975279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f0f9e4e01f9f26325144118474b8990501284212ded8c9d5e3c1a020975279->enter($__internal_f9f0f9e4e01f9f26325144118474b8990501284212ded8c9d5e3c1a020975279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a165b66368a15f3494bee337e96eaa7003b6b8c9fe6364273ec6fba150ea0b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a165b66368a15f3494bee337e96eaa7003b6b8c9fe6364273ec6fba150ea0b81->enter($__internal_a165b66368a15f3494bee337e96eaa7003b6b8c9fe6364273ec6fba150ea0b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a165b66368a15f3494bee337e96eaa7003b6b8c9fe6364273ec6fba150ea0b81->leave($__internal_a165b66368a15f3494bee337e96eaa7003b6b8c9fe6364273ec6fba150ea0b81_prof);

        
        $__internal_f9f0f9e4e01f9f26325144118474b8990501284212ded8c9d5e3c1a020975279->leave($__internal_f9f0f9e4e01f9f26325144118474b8990501284212ded8c9d5e3c1a020975279_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5d59d187af72707a57d293d4b3f12d9e7b3b91f36e5558eea3bc5d3e61410e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d59d187af72707a57d293d4b3f12d9e7b3b91f36e5558eea3bc5d3e61410e5->enter($__internal_a5d59d187af72707a57d293d4b3f12d9e7b3b91f36e5558eea3bc5d3e61410e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1c4e2eb233e1f52f9175bee92466bf4468a54cf3bcc22bf5bec462fb59aafd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c4e2eb233e1f52f9175bee92466bf4468a54cf3bcc22bf5bec462fb59aafd0->enter($__internal_a1c4e2eb233e1f52f9175bee92466bf4468a54cf3bcc22bf5bec462fb59aafd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a1c4e2eb233e1f52f9175bee92466bf4468a54cf3bcc22bf5bec462fb59aafd0->leave($__internal_a1c4e2eb233e1f52f9175bee92466bf4468a54cf3bcc22bf5bec462fb59aafd0_prof);

        
        $__internal_a5d59d187af72707a57d293d4b3f12d9e7b3b91f36e5558eea3bc5d3e61410e5->leave($__internal_a5d59d187af72707a57d293d4b3f12d9e7b3b91f36e5558eea3bc5d3e61410e5_prof);

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
