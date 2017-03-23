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
        $__internal_20948994937d2da796fb1a06432a70ba634cd2f5825b86816fd4fe4f9c7ca517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20948994937d2da796fb1a06432a70ba634cd2f5825b86816fd4fe4f9c7ca517->enter($__internal_20948994937d2da796fb1a06432a70ba634cd2f5825b86816fd4fe4f9c7ca517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f7248c52909ffcd601173ffddae52e199ded77264f029cf09df3c0cde8904e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7248c52909ffcd601173ffddae52e199ded77264f029cf09df3c0cde8904e55->enter($__internal_f7248c52909ffcd601173ffddae52e199ded77264f029cf09df3c0cde8904e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20948994937d2da796fb1a06432a70ba634cd2f5825b86816fd4fe4f9c7ca517->leave($__internal_20948994937d2da796fb1a06432a70ba634cd2f5825b86816fd4fe4f9c7ca517_prof);

        
        $__internal_f7248c52909ffcd601173ffddae52e199ded77264f029cf09df3c0cde8904e55->leave($__internal_f7248c52909ffcd601173ffddae52e199ded77264f029cf09df3c0cde8904e55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfca8efad3469316a5785b88024cf497b9ef54c2c40685df3e4a0b5514fec47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfca8efad3469316a5785b88024cf497b9ef54c2c40685df3e4a0b5514fec47c->enter($__internal_bfca8efad3469316a5785b88024cf497b9ef54c2c40685df3e4a0b5514fec47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_513aa33f446714797fd9f7eac2ada150bcc1365cf290fbb54a8764cac7a5daa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513aa33f446714797fd9f7eac2ada150bcc1365cf290fbb54a8764cac7a5daa0->enter($__internal_513aa33f446714797fd9f7eac2ada150bcc1365cf290fbb54a8764cac7a5daa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_513aa33f446714797fd9f7eac2ada150bcc1365cf290fbb54a8764cac7a5daa0->leave($__internal_513aa33f446714797fd9f7eac2ada150bcc1365cf290fbb54a8764cac7a5daa0_prof);

        
        $__internal_bfca8efad3469316a5785b88024cf497b9ef54c2c40685df3e4a0b5514fec47c->leave($__internal_bfca8efad3469316a5785b88024cf497b9ef54c2c40685df3e4a0b5514fec47c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1aa7845b4c7853250e1b6225811f2dd89517abfc6885021b4da59b4b442c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1aa7845b4c7853250e1b6225811f2dd89517abfc6885021b4da59b4b442c2d->enter($__internal_3c1aa7845b4c7853250e1b6225811f2dd89517abfc6885021b4da59b4b442c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_372fd8fff5d3f8573adcbf5e007e126fb942a079a9454fb56232e392f2eb5d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372fd8fff5d3f8573adcbf5e007e126fb942a079a9454fb56232e392f2eb5d09->enter($__internal_372fd8fff5d3f8573adcbf5e007e126fb942a079a9454fb56232e392f2eb5d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_372fd8fff5d3f8573adcbf5e007e126fb942a079a9454fb56232e392f2eb5d09->leave($__internal_372fd8fff5d3f8573adcbf5e007e126fb942a079a9454fb56232e392f2eb5d09_prof);

        
        $__internal_3c1aa7845b4c7853250e1b6225811f2dd89517abfc6885021b4da59b4b442c2d->leave($__internal_3c1aa7845b4c7853250e1b6225811f2dd89517abfc6885021b4da59b4b442c2d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0edc7c85b864c265ae6a1644d2dac431c6ba334a15e46c54b3b25ba5dec4e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0edc7c85b864c265ae6a1644d2dac431c6ba334a15e46c54b3b25ba5dec4e53->enter($__internal_d0edc7c85b864c265ae6a1644d2dac431c6ba334a15e46c54b3b25ba5dec4e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a88ec0b5df8713b6dd1e4b2bb3572b61e42f7e692814d78eb4797e1e53786d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a88ec0b5df8713b6dd1e4b2bb3572b61e42f7e692814d78eb4797e1e53786d0->enter($__internal_6a88ec0b5df8713b6dd1e4b2bb3572b61e42f7e692814d78eb4797e1e53786d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6a88ec0b5df8713b6dd1e4b2bb3572b61e42f7e692814d78eb4797e1e53786d0->leave($__internal_6a88ec0b5df8713b6dd1e4b2bb3572b61e42f7e692814d78eb4797e1e53786d0_prof);

        
        $__internal_d0edc7c85b864c265ae6a1644d2dac431c6ba334a15e46c54b3b25ba5dec4e53->leave($__internal_d0edc7c85b864c265ae6a1644d2dac431c6ba334a15e46c54b3b25ba5dec4e53_prof);

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
