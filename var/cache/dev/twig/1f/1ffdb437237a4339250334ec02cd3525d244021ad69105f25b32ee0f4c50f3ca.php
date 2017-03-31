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
        $__internal_4a1843065ce67bfd68722f6b951e8ddab8dc5c0eff0511224c1234d945b356b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1843065ce67bfd68722f6b951e8ddab8dc5c0eff0511224c1234d945b356b3->enter($__internal_4a1843065ce67bfd68722f6b951e8ddab8dc5c0eff0511224c1234d945b356b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_da85e675c077d561aeceab06d77b4db28c13ad4538ff916d91f0f0ff67c819fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da85e675c077d561aeceab06d77b4db28c13ad4538ff916d91f0f0ff67c819fe->enter($__internal_da85e675c077d561aeceab06d77b4db28c13ad4538ff916d91f0f0ff67c819fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1843065ce67bfd68722f6b951e8ddab8dc5c0eff0511224c1234d945b356b3->leave($__internal_4a1843065ce67bfd68722f6b951e8ddab8dc5c0eff0511224c1234d945b356b3_prof);

        
        $__internal_da85e675c077d561aeceab06d77b4db28c13ad4538ff916d91f0f0ff67c819fe->leave($__internal_da85e675c077d561aeceab06d77b4db28c13ad4538ff916d91f0f0ff67c819fe_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8c73ce0ece7ebefe92b2ae67c6113c9f5a4b67edd7ae4086eee0fb8a401659c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c73ce0ece7ebefe92b2ae67c6113c9f5a4b67edd7ae4086eee0fb8a401659c3->enter($__internal_8c73ce0ece7ebefe92b2ae67c6113c9f5a4b67edd7ae4086eee0fb8a401659c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_06e391fe4699c06e5c672f33a6e071687f26ecc85373c556db8edbe6f3212454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e391fe4699c06e5c672f33a6e071687f26ecc85373c556db8edbe6f3212454->enter($__internal_06e391fe4699c06e5c672f33a6e071687f26ecc85373c556db8edbe6f3212454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_06e391fe4699c06e5c672f33a6e071687f26ecc85373c556db8edbe6f3212454->leave($__internal_06e391fe4699c06e5c672f33a6e071687f26ecc85373c556db8edbe6f3212454_prof);

        
        $__internal_8c73ce0ece7ebefe92b2ae67c6113c9f5a4b67edd7ae4086eee0fb8a401659c3->leave($__internal_8c73ce0ece7ebefe92b2ae67c6113c9f5a4b67edd7ae4086eee0fb8a401659c3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fe62d1a64c6ff9719d7f732e199bf6364ea382e534a84817eaeb1a3120a96b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe62d1a64c6ff9719d7f732e199bf6364ea382e534a84817eaeb1a3120a96b6->enter($__internal_2fe62d1a64c6ff9719d7f732e199bf6364ea382e534a84817eaeb1a3120a96b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f50c93c4e5cea114928a2d043dcd255023d1cae559f5857741081b30e1c4afb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50c93c4e5cea114928a2d043dcd255023d1cae559f5857741081b30e1c4afb4->enter($__internal_f50c93c4e5cea114928a2d043dcd255023d1cae559f5857741081b30e1c4afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f50c93c4e5cea114928a2d043dcd255023d1cae559f5857741081b30e1c4afb4->leave($__internal_f50c93c4e5cea114928a2d043dcd255023d1cae559f5857741081b30e1c4afb4_prof);

        
        $__internal_2fe62d1a64c6ff9719d7f732e199bf6364ea382e534a84817eaeb1a3120a96b6->leave($__internal_2fe62d1a64c6ff9719d7f732e199bf6364ea382e534a84817eaeb1a3120a96b6_prof);

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
