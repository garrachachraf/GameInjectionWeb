<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0062bd0045d89ccf65395510faef3c35e531ec96874af805230d84d3b9c44a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0062bd0045d89ccf65395510faef3c35e531ec96874af805230d84d3b9c44a78->enter($__internal_0062bd0045d89ccf65395510faef3c35e531ec96874af805230d84d3b9c44a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4aaab57e5d8f998d60968a379ec933c810429eebcd070c263c93dfd5fcfebe2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaab57e5d8f998d60968a379ec933c810429eebcd070c263c93dfd5fcfebe2a->enter($__internal_4aaab57e5d8f998d60968a379ec933c810429eebcd070c263c93dfd5fcfebe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0062bd0045d89ccf65395510faef3c35e531ec96874af805230d84d3b9c44a78->leave($__internal_0062bd0045d89ccf65395510faef3c35e531ec96874af805230d84d3b9c44a78_prof);

        
        $__internal_4aaab57e5d8f998d60968a379ec933c810429eebcd070c263c93dfd5fcfebe2a->leave($__internal_4aaab57e5d8f998d60968a379ec933c810429eebcd070c263c93dfd5fcfebe2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecf5da17bfd853ff0b21bdd4b132d0c38537e9673b535fc692a411b6e93e1022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf5da17bfd853ff0b21bdd4b132d0c38537e9673b535fc692a411b6e93e1022->enter($__internal_ecf5da17bfd853ff0b21bdd4b132d0c38537e9673b535fc692a411b6e93e1022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a32aef79e799c723b69984e82cfd6bad072de75d57c553d1ba5a58c0f8591a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32aef79e799c723b69984e82cfd6bad072de75d57c553d1ba5a58c0f8591a4c->enter($__internal_a32aef79e799c723b69984e82cfd6bad072de75d57c553d1ba5a58c0f8591a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a32aef79e799c723b69984e82cfd6bad072de75d57c553d1ba5a58c0f8591a4c->leave($__internal_a32aef79e799c723b69984e82cfd6bad072de75d57c553d1ba5a58c0f8591a4c_prof);

        
        $__internal_ecf5da17bfd853ff0b21bdd4b132d0c38537e9673b535fc692a411b6e93e1022->leave($__internal_ecf5da17bfd853ff0b21bdd4b132d0c38537e9673b535fc692a411b6e93e1022_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5365ff2b6b7754fcefcc4d99472d0403c8062ad9e043fc6a15b56bda2f6b3496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5365ff2b6b7754fcefcc4d99472d0403c8062ad9e043fc6a15b56bda2f6b3496->enter($__internal_5365ff2b6b7754fcefcc4d99472d0403c8062ad9e043fc6a15b56bda2f6b3496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12ef6825768f21bed6c3760275260b8203a3f0cc6d69022e44f11fda9754421b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ef6825768f21bed6c3760275260b8203a3f0cc6d69022e44f11fda9754421b->enter($__internal_12ef6825768f21bed6c3760275260b8203a3f0cc6d69022e44f11fda9754421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12ef6825768f21bed6c3760275260b8203a3f0cc6d69022e44f11fda9754421b->leave($__internal_12ef6825768f21bed6c3760275260b8203a3f0cc6d69022e44f11fda9754421b_prof);

        
        $__internal_5365ff2b6b7754fcefcc4d99472d0403c8062ad9e043fc6a15b56bda2f6b3496->leave($__internal_5365ff2b6b7754fcefcc4d99472d0403c8062ad9e043fc6a15b56bda2f6b3496_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e83b8a95298f98c9c91b5286a75a08fb6b94faf3b15e3ecda79a7e878745056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e83b8a95298f98c9c91b5286a75a08fb6b94faf3b15e3ecda79a7e878745056->enter($__internal_9e83b8a95298f98c9c91b5286a75a08fb6b94faf3b15e3ecda79a7e878745056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_436fafb6afca445799cc51b5d0f2d1caff94af7553543f73b2effb1112b67889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436fafb6afca445799cc51b5d0f2d1caff94af7553543f73b2effb1112b67889->enter($__internal_436fafb6afca445799cc51b5d0f2d1caff94af7553543f73b2effb1112b67889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_436fafb6afca445799cc51b5d0f2d1caff94af7553543f73b2effb1112b67889->leave($__internal_436fafb6afca445799cc51b5d0f2d1caff94af7553543f73b2effb1112b67889_prof);

        
        $__internal_9e83b8a95298f98c9c91b5286a75a08fb6b94faf3b15e3ecda79a7e878745056->leave($__internal_9e83b8a95298f98c9c91b5286a75a08fb6b94faf3b15e3ecda79a7e878745056_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
