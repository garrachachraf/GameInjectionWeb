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
        $__internal_7c19a7946ecd02abee68d14b8df942488756e5a204a7e933c23e92ab62d90ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c19a7946ecd02abee68d14b8df942488756e5a204a7e933c23e92ab62d90ac2->enter($__internal_7c19a7946ecd02abee68d14b8df942488756e5a204a7e933c23e92ab62d90ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0a06dbd4888f99de5ff7d18ba5ba47db53f406d76e38e739d10773fcb98fc0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a06dbd4888f99de5ff7d18ba5ba47db53f406d76e38e739d10773fcb98fc0a1->enter($__internal_0a06dbd4888f99de5ff7d18ba5ba47db53f406d76e38e739d10773fcb98fc0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c19a7946ecd02abee68d14b8df942488756e5a204a7e933c23e92ab62d90ac2->leave($__internal_7c19a7946ecd02abee68d14b8df942488756e5a204a7e933c23e92ab62d90ac2_prof);

        
        $__internal_0a06dbd4888f99de5ff7d18ba5ba47db53f406d76e38e739d10773fcb98fc0a1->leave($__internal_0a06dbd4888f99de5ff7d18ba5ba47db53f406d76e38e739d10773fcb98fc0a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95587f5621f95a3e3aa8c4f518f8599e07d5b1055dc642bf3f9eb1f451c82d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95587f5621f95a3e3aa8c4f518f8599e07d5b1055dc642bf3f9eb1f451c82d0a->enter($__internal_95587f5621f95a3e3aa8c4f518f8599e07d5b1055dc642bf3f9eb1f451c82d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ed17a6a57f416424bf0e4f5d087548edc37c798663d5c17e4aad94bfe2c1616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed17a6a57f416424bf0e4f5d087548edc37c798663d5c17e4aad94bfe2c1616->enter($__internal_8ed17a6a57f416424bf0e4f5d087548edc37c798663d5c17e4aad94bfe2c1616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ed17a6a57f416424bf0e4f5d087548edc37c798663d5c17e4aad94bfe2c1616->leave($__internal_8ed17a6a57f416424bf0e4f5d087548edc37c798663d5c17e4aad94bfe2c1616_prof);

        
        $__internal_95587f5621f95a3e3aa8c4f518f8599e07d5b1055dc642bf3f9eb1f451c82d0a->leave($__internal_95587f5621f95a3e3aa8c4f518f8599e07d5b1055dc642bf3f9eb1f451c82d0a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_99182d62d58e597362b5873f629f538dea48ceee742a8bfbff547ddc7dd2b961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99182d62d58e597362b5873f629f538dea48ceee742a8bfbff547ddc7dd2b961->enter($__internal_99182d62d58e597362b5873f629f538dea48ceee742a8bfbff547ddc7dd2b961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_179318ca204e325b0fa9ffa9e4d6d4b2a843c26a49802f0fc963c5faf67c75fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179318ca204e325b0fa9ffa9e4d6d4b2a843c26a49802f0fc963c5faf67c75fe->enter($__internal_179318ca204e325b0fa9ffa9e4d6d4b2a843c26a49802f0fc963c5faf67c75fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_179318ca204e325b0fa9ffa9e4d6d4b2a843c26a49802f0fc963c5faf67c75fe->leave($__internal_179318ca204e325b0fa9ffa9e4d6d4b2a843c26a49802f0fc963c5faf67c75fe_prof);

        
        $__internal_99182d62d58e597362b5873f629f538dea48ceee742a8bfbff547ddc7dd2b961->leave($__internal_99182d62d58e597362b5873f629f538dea48ceee742a8bfbff547ddc7dd2b961_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17305e7645fea0994c1dc91bc235234ec507cbba06f3c79e88765875d89e217a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17305e7645fea0994c1dc91bc235234ec507cbba06f3c79e88765875d89e217a->enter($__internal_17305e7645fea0994c1dc91bc235234ec507cbba06f3c79e88765875d89e217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1590e04ea013d15ef58d348f23b3ca2ea1cf4d48d2ba5e6d0a184a6d5ceeb33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1590e04ea013d15ef58d348f23b3ca2ea1cf4d48d2ba5e6d0a184a6d5ceeb33d->enter($__internal_1590e04ea013d15ef58d348f23b3ca2ea1cf4d48d2ba5e6d0a184a6d5ceeb33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1590e04ea013d15ef58d348f23b3ca2ea1cf4d48d2ba5e6d0a184a6d5ceeb33d->leave($__internal_1590e04ea013d15ef58d348f23b3ca2ea1cf4d48d2ba5e6d0a184a6d5ceeb33d_prof);

        
        $__internal_17305e7645fea0994c1dc91bc235234ec507cbba06f3c79e88765875d89e217a->leave($__internal_17305e7645fea0994c1dc91bc235234ec507cbba06f3c79e88765875d89e217a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
