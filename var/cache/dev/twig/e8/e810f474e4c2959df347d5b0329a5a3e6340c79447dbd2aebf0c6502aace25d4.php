<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fd6d14ff5e220601ed746c1804e092bece45c1a057520acdaa608aebb00dfe8e extends Twig_Template
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
        $__internal_ac485cc8f54c6df3373dc6563a0945b4fd2c784638c78527aa2e6146574809a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac485cc8f54c6df3373dc6563a0945b4fd2c784638c78527aa2e6146574809a9->enter($__internal_ac485cc8f54c6df3373dc6563a0945b4fd2c784638c78527aa2e6146574809a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_407c0b399024f6b0cc26ed8f810a2842017e5170ff1a940ab938d0df2dbf7e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407c0b399024f6b0cc26ed8f810a2842017e5170ff1a940ab938d0df2dbf7e76->enter($__internal_407c0b399024f6b0cc26ed8f810a2842017e5170ff1a940ab938d0df2dbf7e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac485cc8f54c6df3373dc6563a0945b4fd2c784638c78527aa2e6146574809a9->leave($__internal_ac485cc8f54c6df3373dc6563a0945b4fd2c784638c78527aa2e6146574809a9_prof);

        
        $__internal_407c0b399024f6b0cc26ed8f810a2842017e5170ff1a940ab938d0df2dbf7e76->leave($__internal_407c0b399024f6b0cc26ed8f810a2842017e5170ff1a940ab938d0df2dbf7e76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_358a3a8e716a99d46c788ab5b70fa95c6397867dfab2f7511990a819bf1bdfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358a3a8e716a99d46c788ab5b70fa95c6397867dfab2f7511990a819bf1bdfb6->enter($__internal_358a3a8e716a99d46c788ab5b70fa95c6397867dfab2f7511990a819bf1bdfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0b409228d65c7d9832dbb7bc3f046740d2c96bd777ba953f22c8ddf5260f942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b409228d65c7d9832dbb7bc3f046740d2c96bd777ba953f22c8ddf5260f942->enter($__internal_b0b409228d65c7d9832dbb7bc3f046740d2c96bd777ba953f22c8ddf5260f942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b0b409228d65c7d9832dbb7bc3f046740d2c96bd777ba953f22c8ddf5260f942->leave($__internal_b0b409228d65c7d9832dbb7bc3f046740d2c96bd777ba953f22c8ddf5260f942_prof);

        
        $__internal_358a3a8e716a99d46c788ab5b70fa95c6397867dfab2f7511990a819bf1bdfb6->leave($__internal_358a3a8e716a99d46c788ab5b70fa95c6397867dfab2f7511990a819bf1bdfb6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1ed72721615f93456a7f0203c86981757d3bb006e773d594f0a726cb3b1432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1ed72721615f93456a7f0203c86981757d3bb006e773d594f0a726cb3b1432->enter($__internal_8d1ed72721615f93456a7f0203c86981757d3bb006e773d594f0a726cb3b1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_467a7b3873aa61917c7449ea7a4f1f80e3e5e34376993a300456dd12f2374634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467a7b3873aa61917c7449ea7a4f1f80e3e5e34376993a300456dd12f2374634->enter($__internal_467a7b3873aa61917c7449ea7a4f1f80e3e5e34376993a300456dd12f2374634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_467a7b3873aa61917c7449ea7a4f1f80e3e5e34376993a300456dd12f2374634->leave($__internal_467a7b3873aa61917c7449ea7a4f1f80e3e5e34376993a300456dd12f2374634_prof);

        
        $__internal_8d1ed72721615f93456a7f0203c86981757d3bb006e773d594f0a726cb3b1432->leave($__internal_8d1ed72721615f93456a7f0203c86981757d3bb006e773d594f0a726cb3b1432_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f509c233cfab6ee5504f6073ab8e26c43100258da60610619e95c591eb16fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f509c233cfab6ee5504f6073ab8e26c43100258da60610619e95c591eb16fa->enter($__internal_95f509c233cfab6ee5504f6073ab8e26c43100258da60610619e95c591eb16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bcc8564dd202b698b5c39c43ad57175990ea8c7122c9f725f30eee7d6b724aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcc8564dd202b698b5c39c43ad57175990ea8c7122c9f725f30eee7d6b724aa->enter($__internal_9bcc8564dd202b698b5c39c43ad57175990ea8c7122c9f725f30eee7d6b724aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9bcc8564dd202b698b5c39c43ad57175990ea8c7122c9f725f30eee7d6b724aa->leave($__internal_9bcc8564dd202b698b5c39c43ad57175990ea8c7122c9f725f30eee7d6b724aa_prof);

        
        $__internal_95f509c233cfab6ee5504f6073ab8e26c43100258da60610619e95c591eb16fa->leave($__internal_95f509c233cfab6ee5504f6073ab8e26c43100258da60610619e95c591eb16fa_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
