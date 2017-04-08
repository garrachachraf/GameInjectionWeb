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
        $__internal_76b5248613f4a73411d7bad53b81f8bf9b30cabed5c656f4596e5e648f8f9b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b5248613f4a73411d7bad53b81f8bf9b30cabed5c656f4596e5e648f8f9b2c->enter($__internal_76b5248613f4a73411d7bad53b81f8bf9b30cabed5c656f4596e5e648f8f9b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_04b339d0c148df0bd1555e5820254ca8e1142a029b12ccb96ed64fee390e2ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b339d0c148df0bd1555e5820254ca8e1142a029b12ccb96ed64fee390e2ff1->enter($__internal_04b339d0c148df0bd1555e5820254ca8e1142a029b12ccb96ed64fee390e2ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b5248613f4a73411d7bad53b81f8bf9b30cabed5c656f4596e5e648f8f9b2c->leave($__internal_76b5248613f4a73411d7bad53b81f8bf9b30cabed5c656f4596e5e648f8f9b2c_prof);

        
        $__internal_04b339d0c148df0bd1555e5820254ca8e1142a029b12ccb96ed64fee390e2ff1->leave($__internal_04b339d0c148df0bd1555e5820254ca8e1142a029b12ccb96ed64fee390e2ff1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12c898d333cbed76a0c9ab6822dddf8cda1581c60f770732ea5e972c28db14de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c898d333cbed76a0c9ab6822dddf8cda1581c60f770732ea5e972c28db14de->enter($__internal_12c898d333cbed76a0c9ab6822dddf8cda1581c60f770732ea5e972c28db14de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be709cbfc1463cc18eba98b00cb068cc8949b55744aab23def7209a7a0e2e7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be709cbfc1463cc18eba98b00cb068cc8949b55744aab23def7209a7a0e2e7dd->enter($__internal_be709cbfc1463cc18eba98b00cb068cc8949b55744aab23def7209a7a0e2e7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be709cbfc1463cc18eba98b00cb068cc8949b55744aab23def7209a7a0e2e7dd->leave($__internal_be709cbfc1463cc18eba98b00cb068cc8949b55744aab23def7209a7a0e2e7dd_prof);

        
        $__internal_12c898d333cbed76a0c9ab6822dddf8cda1581c60f770732ea5e972c28db14de->leave($__internal_12c898d333cbed76a0c9ab6822dddf8cda1581c60f770732ea5e972c28db14de_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a949c9f70c3e5826f48ad83a2d33b4b5b8e796e3fa7cd16c9bfa9507f7a640d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a949c9f70c3e5826f48ad83a2d33b4b5b8e796e3fa7cd16c9bfa9507f7a640d2->enter($__internal_a949c9f70c3e5826f48ad83a2d33b4b5b8e796e3fa7cd16c9bfa9507f7a640d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35c8077bcfc76df63da9fb40cbe68b3e63c406b26118b9fd683e19a4349fd46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c8077bcfc76df63da9fb40cbe68b3e63c406b26118b9fd683e19a4349fd46f->enter($__internal_35c8077bcfc76df63da9fb40cbe68b3e63c406b26118b9fd683e19a4349fd46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35c8077bcfc76df63da9fb40cbe68b3e63c406b26118b9fd683e19a4349fd46f->leave($__internal_35c8077bcfc76df63da9fb40cbe68b3e63c406b26118b9fd683e19a4349fd46f_prof);

        
        $__internal_a949c9f70c3e5826f48ad83a2d33b4b5b8e796e3fa7cd16c9bfa9507f7a640d2->leave($__internal_a949c9f70c3e5826f48ad83a2d33b4b5b8e796e3fa7cd16c9bfa9507f7a640d2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac81c268dbf3039aff6e7f91bc98be1823c7d95daf967e7b4e04731807054dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac81c268dbf3039aff6e7f91bc98be1823c7d95daf967e7b4e04731807054dbf->enter($__internal_ac81c268dbf3039aff6e7f91bc98be1823c7d95daf967e7b4e04731807054dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89e6be7394f28e26f5206ef1450be052e7ebcf7ad234f9099590805f947dc9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6be7394f28e26f5206ef1450be052e7ebcf7ad234f9099590805f947dc9a6->enter($__internal_89e6be7394f28e26f5206ef1450be052e7ebcf7ad234f9099590805f947dc9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_89e6be7394f28e26f5206ef1450be052e7ebcf7ad234f9099590805f947dc9a6->leave($__internal_89e6be7394f28e26f5206ef1450be052e7ebcf7ad234f9099590805f947dc9a6_prof);

        
        $__internal_ac81c268dbf3039aff6e7f91bc98be1823c7d95daf967e7b4e04731807054dbf->leave($__internal_ac81c268dbf3039aff6e7f91bc98be1823c7d95daf967e7b4e04731807054dbf_prof);

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
