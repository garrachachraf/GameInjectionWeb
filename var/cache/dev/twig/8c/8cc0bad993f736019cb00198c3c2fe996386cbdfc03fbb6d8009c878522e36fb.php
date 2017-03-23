<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_615d719559b3092e15c427fbb0af594feb805ca9ebfb9e188a672a5ce7b7dfb4 extends Twig_Template
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
        $__internal_585112415a715c79c14c0a5b30831b01295c656b981f52e99db45b3aa0e5c6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585112415a715c79c14c0a5b30831b01295c656b981f52e99db45b3aa0e5c6d6->enter($__internal_585112415a715c79c14c0a5b30831b01295c656b981f52e99db45b3aa0e5c6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a3dd42d33928568d5d521c64b47091a46a18863924eb9df38d98b4bcf209ab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dd42d33928568d5d521c64b47091a46a18863924eb9df38d98b4bcf209ab05->enter($__internal_a3dd42d33928568d5d521c64b47091a46a18863924eb9df38d98b4bcf209ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_585112415a715c79c14c0a5b30831b01295c656b981f52e99db45b3aa0e5c6d6->leave($__internal_585112415a715c79c14c0a5b30831b01295c656b981f52e99db45b3aa0e5c6d6_prof);

        
        $__internal_a3dd42d33928568d5d521c64b47091a46a18863924eb9df38d98b4bcf209ab05->leave($__internal_a3dd42d33928568d5d521c64b47091a46a18863924eb9df38d98b4bcf209ab05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3925934053f86dc75effc2f20c07ba917aff90764bb99623d4b1d11a01dcee79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3925934053f86dc75effc2f20c07ba917aff90764bb99623d4b1d11a01dcee79->enter($__internal_3925934053f86dc75effc2f20c07ba917aff90764bb99623d4b1d11a01dcee79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75d98f7b1cfde63f269307b7a9597d71a05a89fa205ce2fe5e0746ede56bcba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d98f7b1cfde63f269307b7a9597d71a05a89fa205ce2fe5e0746ede56bcba4->enter($__internal_75d98f7b1cfde63f269307b7a9597d71a05a89fa205ce2fe5e0746ede56bcba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_75d98f7b1cfde63f269307b7a9597d71a05a89fa205ce2fe5e0746ede56bcba4->leave($__internal_75d98f7b1cfde63f269307b7a9597d71a05a89fa205ce2fe5e0746ede56bcba4_prof);

        
        $__internal_3925934053f86dc75effc2f20c07ba917aff90764bb99623d4b1d11a01dcee79->leave($__internal_3925934053f86dc75effc2f20c07ba917aff90764bb99623d4b1d11a01dcee79_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_163b3893c75c8cdc7de37694154cabc83a34a219d7cebe2fb5e92e8608e7804e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163b3893c75c8cdc7de37694154cabc83a34a219d7cebe2fb5e92e8608e7804e->enter($__internal_163b3893c75c8cdc7de37694154cabc83a34a219d7cebe2fb5e92e8608e7804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed0b7de5101177045fccacbe4f1f080caed226ace9e8fae475039b437dd01001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0b7de5101177045fccacbe4f1f080caed226ace9e8fae475039b437dd01001->enter($__internal_ed0b7de5101177045fccacbe4f1f080caed226ace9e8fae475039b437dd01001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed0b7de5101177045fccacbe4f1f080caed226ace9e8fae475039b437dd01001->leave($__internal_ed0b7de5101177045fccacbe4f1f080caed226ace9e8fae475039b437dd01001_prof);

        
        $__internal_163b3893c75c8cdc7de37694154cabc83a34a219d7cebe2fb5e92e8608e7804e->leave($__internal_163b3893c75c8cdc7de37694154cabc83a34a219d7cebe2fb5e92e8608e7804e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_130714897a73093048406f33abd1c7fa87ef445007984742297d4eff023f1b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130714897a73093048406f33abd1c7fa87ef445007984742297d4eff023f1b67->enter($__internal_130714897a73093048406f33abd1c7fa87ef445007984742297d4eff023f1b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a8891b4a30fe864d16f53c4030cff798071f1ec4a9f1906c2dee798928457a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8891b4a30fe864d16f53c4030cff798071f1ec4a9f1906c2dee798928457a3->enter($__internal_0a8891b4a30fe864d16f53c4030cff798071f1ec4a9f1906c2dee798928457a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0a8891b4a30fe864d16f53c4030cff798071f1ec4a9f1906c2dee798928457a3->leave($__internal_0a8891b4a30fe864d16f53c4030cff798071f1ec4a9f1906c2dee798928457a3_prof);

        
        $__internal_130714897a73093048406f33abd1c7fa87ef445007984742297d4eff023f1b67->leave($__internal_130714897a73093048406f33abd1c7fa87ef445007984742297d4eff023f1b67_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
