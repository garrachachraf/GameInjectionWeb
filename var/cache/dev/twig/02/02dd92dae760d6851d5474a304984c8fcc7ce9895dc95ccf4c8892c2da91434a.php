<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_50319d7d3208c8f76eccbbcb8017cb16674fd78bc026f1d6be1abd74ffe689f8 extends Twig_Template
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
        $__internal_b93cdf2dc42e8e82294e6bab69142350f395ae4fd3bac8a8f67cdaa1366a912e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93cdf2dc42e8e82294e6bab69142350f395ae4fd3bac8a8f67cdaa1366a912e->enter($__internal_b93cdf2dc42e8e82294e6bab69142350f395ae4fd3bac8a8f67cdaa1366a912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_da1fb1fb2b1f88543ba659a08810e6533ed8f10397783c5fa178a8cf3783e30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1fb1fb2b1f88543ba659a08810e6533ed8f10397783c5fa178a8cf3783e30a->enter($__internal_da1fb1fb2b1f88543ba659a08810e6533ed8f10397783c5fa178a8cf3783e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93cdf2dc42e8e82294e6bab69142350f395ae4fd3bac8a8f67cdaa1366a912e->leave($__internal_b93cdf2dc42e8e82294e6bab69142350f395ae4fd3bac8a8f67cdaa1366a912e_prof);

        
        $__internal_da1fb1fb2b1f88543ba659a08810e6533ed8f10397783c5fa178a8cf3783e30a->leave($__internal_da1fb1fb2b1f88543ba659a08810e6533ed8f10397783c5fa178a8cf3783e30a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a34fa5f61617b5bb547cfa1045e44fc016f152beda2c2492f9c2c3d357ed6553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34fa5f61617b5bb547cfa1045e44fc016f152beda2c2492f9c2c3d357ed6553->enter($__internal_a34fa5f61617b5bb547cfa1045e44fc016f152beda2c2492f9c2c3d357ed6553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1618da462d0eef0ad9002828f4a5ce9d33f73859b76f563681596b56ac409474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1618da462d0eef0ad9002828f4a5ce9d33f73859b76f563681596b56ac409474->enter($__internal_1618da462d0eef0ad9002828f4a5ce9d33f73859b76f563681596b56ac409474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1618da462d0eef0ad9002828f4a5ce9d33f73859b76f563681596b56ac409474->leave($__internal_1618da462d0eef0ad9002828f4a5ce9d33f73859b76f563681596b56ac409474_prof);

        
        $__internal_a34fa5f61617b5bb547cfa1045e44fc016f152beda2c2492f9c2c3d357ed6553->leave($__internal_a34fa5f61617b5bb547cfa1045e44fc016f152beda2c2492f9c2c3d357ed6553_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8213dcc1e09681ec8207e30de6a12c736e061ee0040d0b98ad17df1c081d0132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8213dcc1e09681ec8207e30de6a12c736e061ee0040d0b98ad17df1c081d0132->enter($__internal_8213dcc1e09681ec8207e30de6a12c736e061ee0040d0b98ad17df1c081d0132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00b78b53ef6c5abbc6a860874c51a2d268af5051454df40c8955145564fe9e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b78b53ef6c5abbc6a860874c51a2d268af5051454df40c8955145564fe9e1b->enter($__internal_00b78b53ef6c5abbc6a860874c51a2d268af5051454df40c8955145564fe9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00b78b53ef6c5abbc6a860874c51a2d268af5051454df40c8955145564fe9e1b->leave($__internal_00b78b53ef6c5abbc6a860874c51a2d268af5051454df40c8955145564fe9e1b_prof);

        
        $__internal_8213dcc1e09681ec8207e30de6a12c736e061ee0040d0b98ad17df1c081d0132->leave($__internal_8213dcc1e09681ec8207e30de6a12c736e061ee0040d0b98ad17df1c081d0132_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8bd848b4c9ce69776bc869164cdfcf3951245ed53704dedd19d4779f0084c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bd848b4c9ce69776bc869164cdfcf3951245ed53704dedd19d4779f0084c62->enter($__internal_d8bd848b4c9ce69776bc869164cdfcf3951245ed53704dedd19d4779f0084c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dba66960653bda9ea85c0a965f8ca0d071b4f864aecbd5738362c540c26577f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dba66960653bda9ea85c0a965f8ca0d071b4f864aecbd5738362c540c26577f->enter($__internal_6dba66960653bda9ea85c0a965f8ca0d071b4f864aecbd5738362c540c26577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6dba66960653bda9ea85c0a965f8ca0d071b4f864aecbd5738362c540c26577f->leave($__internal_6dba66960653bda9ea85c0a965f8ca0d071b4f864aecbd5738362c540c26577f_prof);

        
        $__internal_d8bd848b4c9ce69776bc869164cdfcf3951245ed53704dedd19d4779f0084c62->leave($__internal_d8bd848b4c9ce69776bc869164cdfcf3951245ed53704dedd19d4779f0084c62_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
