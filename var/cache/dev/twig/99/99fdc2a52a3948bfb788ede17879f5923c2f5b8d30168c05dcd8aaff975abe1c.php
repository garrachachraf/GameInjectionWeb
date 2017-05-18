<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a4bcf835b1224904d279264903e05205d622e6fd59ecd0683e1c8de1a8975d81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_638ab819083a15840378f100f2fcc2421738cebb30c4ea1b92c11461ea5b298d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638ab819083a15840378f100f2fcc2421738cebb30c4ea1b92c11461ea5b298d->enter($__internal_638ab819083a15840378f100f2fcc2421738cebb30c4ea1b92c11461ea5b298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bc2e9b610a1cad67195d94438dc970f6ff46b40047fe0cdb2e4560b5554d5a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2e9b610a1cad67195d94438dc970f6ff46b40047fe0cdb2e4560b5554d5a31->enter($__internal_bc2e9b610a1cad67195d94438dc970f6ff46b40047fe0cdb2e4560b5554d5a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_638ab819083a15840378f100f2fcc2421738cebb30c4ea1b92c11461ea5b298d->leave($__internal_638ab819083a15840378f100f2fcc2421738cebb30c4ea1b92c11461ea5b298d_prof);

        
        $__internal_bc2e9b610a1cad67195d94438dc970f6ff46b40047fe0cdb2e4560b5554d5a31->leave($__internal_bc2e9b610a1cad67195d94438dc970f6ff46b40047fe0cdb2e4560b5554d5a31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c9b3d5d625a50a30c8a07a88a38e62913d00bfea029bdd68c07c55bd6399952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9b3d5d625a50a30c8a07a88a38e62913d00bfea029bdd68c07c55bd6399952->enter($__internal_1c9b3d5d625a50a30c8a07a88a38e62913d00bfea029bdd68c07c55bd6399952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffa8496c20463ccb5c0a1496513cfc58b3a1c9ca533a038332ccab8807f2bf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa8496c20463ccb5c0a1496513cfc58b3a1c9ca533a038332ccab8807f2bf94->enter($__internal_ffa8496c20463ccb5c0a1496513cfc58b3a1c9ca533a038332ccab8807f2bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ffa8496c20463ccb5c0a1496513cfc58b3a1c9ca533a038332ccab8807f2bf94->leave($__internal_ffa8496c20463ccb5c0a1496513cfc58b3a1c9ca533a038332ccab8807f2bf94_prof);

        
        $__internal_1c9b3d5d625a50a30c8a07a88a38e62913d00bfea029bdd68c07c55bd6399952->leave($__internal_1c9b3d5d625a50a30c8a07a88a38e62913d00bfea029bdd68c07c55bd6399952_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2615358f8eec2c7c167aceeccaf78847066c64dbda40553a4df74a7ca41ada62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2615358f8eec2c7c167aceeccaf78847066c64dbda40553a4df74a7ca41ada62->enter($__internal_2615358f8eec2c7c167aceeccaf78847066c64dbda40553a4df74a7ca41ada62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_966f4e45bfc37d8f904339929ec9d27499d7848be901e921a68ce701c2d3c351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966f4e45bfc37d8f904339929ec9d27499d7848be901e921a68ce701c2d3c351->enter($__internal_966f4e45bfc37d8f904339929ec9d27499d7848be901e921a68ce701c2d3c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_966f4e45bfc37d8f904339929ec9d27499d7848be901e921a68ce701c2d3c351->leave($__internal_966f4e45bfc37d8f904339929ec9d27499d7848be901e921a68ce701c2d3c351_prof);

        
        $__internal_2615358f8eec2c7c167aceeccaf78847066c64dbda40553a4df74a7ca41ada62->leave($__internal_2615358f8eec2c7c167aceeccaf78847066c64dbda40553a4df74a7ca41ada62_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d25387705faadf54cd65b0284e2b7d1d665f5bb7092f4611a3a85d55ce1bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d25387705faadf54cd65b0284e2b7d1d665f5bb7092f4611a3a85d55ce1bef->enter($__internal_f0d25387705faadf54cd65b0284e2b7d1d665f5bb7092f4611a3a85d55ce1bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc3b564b09b2ac483a5bab60697b81c22dbca1f8ce91747857cb273dc204ca67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b564b09b2ac483a5bab60697b81c22dbca1f8ce91747857cb273dc204ca67->enter($__internal_cc3b564b09b2ac483a5bab60697b81c22dbca1f8ce91747857cb273dc204ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cc3b564b09b2ac483a5bab60697b81c22dbca1f8ce91747857cb273dc204ca67->leave($__internal_cc3b564b09b2ac483a5bab60697b81c22dbca1f8ce91747857cb273dc204ca67_prof);

        
        $__internal_f0d25387705faadf54cd65b0284e2b7d1d665f5bb7092f4611a3a85d55ce1bef->leave($__internal_f0d25387705faadf54cd65b0284e2b7d1d665f5bb7092f4611a3a85d55ce1bef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
