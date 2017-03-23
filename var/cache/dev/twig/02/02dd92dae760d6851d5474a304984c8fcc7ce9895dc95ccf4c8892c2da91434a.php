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
        $__internal_3b16e4ed67cf24e1e99cbea79579dd220f18173d05c915a2c7090c93b321021e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b16e4ed67cf24e1e99cbea79579dd220f18173d05c915a2c7090c93b321021e->enter($__internal_3b16e4ed67cf24e1e99cbea79579dd220f18173d05c915a2c7090c93b321021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_488e41aa90b464c95d886c7f57d77a8902ea55258e05acb321374700a94fc01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488e41aa90b464c95d886c7f57d77a8902ea55258e05acb321374700a94fc01b->enter($__internal_488e41aa90b464c95d886c7f57d77a8902ea55258e05acb321374700a94fc01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b16e4ed67cf24e1e99cbea79579dd220f18173d05c915a2c7090c93b321021e->leave($__internal_3b16e4ed67cf24e1e99cbea79579dd220f18173d05c915a2c7090c93b321021e_prof);

        
        $__internal_488e41aa90b464c95d886c7f57d77a8902ea55258e05acb321374700a94fc01b->leave($__internal_488e41aa90b464c95d886c7f57d77a8902ea55258e05acb321374700a94fc01b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d00db4cfbfb6ea2b9adda7c8036bb47172dfdde0eb80821a7a02c8ce28dbac05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00db4cfbfb6ea2b9adda7c8036bb47172dfdde0eb80821a7a02c8ce28dbac05->enter($__internal_d00db4cfbfb6ea2b9adda7c8036bb47172dfdde0eb80821a7a02c8ce28dbac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ad31efa212dd4cce73c6844e56a06f88d234a910e5b280e7cdb8e98d035e917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad31efa212dd4cce73c6844e56a06f88d234a910e5b280e7cdb8e98d035e917->enter($__internal_8ad31efa212dd4cce73c6844e56a06f88d234a910e5b280e7cdb8e98d035e917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ad31efa212dd4cce73c6844e56a06f88d234a910e5b280e7cdb8e98d035e917->leave($__internal_8ad31efa212dd4cce73c6844e56a06f88d234a910e5b280e7cdb8e98d035e917_prof);

        
        $__internal_d00db4cfbfb6ea2b9adda7c8036bb47172dfdde0eb80821a7a02c8ce28dbac05->leave($__internal_d00db4cfbfb6ea2b9adda7c8036bb47172dfdde0eb80821a7a02c8ce28dbac05_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6df9ee0dd03824e2a4048135049ca55fe7d1a370e6af0e6834b57292896d831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6df9ee0dd03824e2a4048135049ca55fe7d1a370e6af0e6834b57292896d831->enter($__internal_b6df9ee0dd03824e2a4048135049ca55fe7d1a370e6af0e6834b57292896d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cdd1900d97a258889958e4532735712558dcc3d417403acb5296e9d12229b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdd1900d97a258889958e4532735712558dcc3d417403acb5296e9d12229b2d->enter($__internal_5cdd1900d97a258889958e4532735712558dcc3d417403acb5296e9d12229b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5cdd1900d97a258889958e4532735712558dcc3d417403acb5296e9d12229b2d->leave($__internal_5cdd1900d97a258889958e4532735712558dcc3d417403acb5296e9d12229b2d_prof);

        
        $__internal_b6df9ee0dd03824e2a4048135049ca55fe7d1a370e6af0e6834b57292896d831->leave($__internal_b6df9ee0dd03824e2a4048135049ca55fe7d1a370e6af0e6834b57292896d831_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb05e74b03a4812ce1c02b508bd86736bb73add19fad56c924828436f8b18223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb05e74b03a4812ce1c02b508bd86736bb73add19fad56c924828436f8b18223->enter($__internal_cb05e74b03a4812ce1c02b508bd86736bb73add19fad56c924828436f8b18223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db7bb9ad218debfe3e4d2c389261dbd5e22a7b65dad5c0cb6f446576403cdbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7bb9ad218debfe3e4d2c389261dbd5e22a7b65dad5c0cb6f446576403cdbfc->enter($__internal_db7bb9ad218debfe3e4d2c389261dbd5e22a7b65dad5c0cb6f446576403cdbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_db7bb9ad218debfe3e4d2c389261dbd5e22a7b65dad5c0cb6f446576403cdbfc->leave($__internal_db7bb9ad218debfe3e4d2c389261dbd5e22a7b65dad5c0cb6f446576403cdbfc_prof);

        
        $__internal_cb05e74b03a4812ce1c02b508bd86736bb73add19fad56c924828436f8b18223->leave($__internal_cb05e74b03a4812ce1c02b508bd86736bb73add19fad56c924828436f8b18223_prof);

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
