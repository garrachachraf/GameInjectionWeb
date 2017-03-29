<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_eaef7b31ac79adae7d4802e450886c292a3965086dc71d4e4013064ae0574ad5 extends Twig_Template
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
        $__internal_ea476b3300038c4df44bbdf02783ab1fb0b6292e0a7bc5917ccaf9e0e7d750b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea476b3300038c4df44bbdf02783ab1fb0b6292e0a7bc5917ccaf9e0e7d750b3->enter($__internal_ea476b3300038c4df44bbdf02783ab1fb0b6292e0a7bc5917ccaf9e0e7d750b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1ce6c8cba28542f96c6323e47ab8d5e47baf9bc302ef3b06e3b07648291849d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce6c8cba28542f96c6323e47ab8d5e47baf9bc302ef3b06e3b07648291849d3->enter($__internal_1ce6c8cba28542f96c6323e47ab8d5e47baf9bc302ef3b06e3b07648291849d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea476b3300038c4df44bbdf02783ab1fb0b6292e0a7bc5917ccaf9e0e7d750b3->leave($__internal_ea476b3300038c4df44bbdf02783ab1fb0b6292e0a7bc5917ccaf9e0e7d750b3_prof);

        
        $__internal_1ce6c8cba28542f96c6323e47ab8d5e47baf9bc302ef3b06e3b07648291849d3->leave($__internal_1ce6c8cba28542f96c6323e47ab8d5e47baf9bc302ef3b06e3b07648291849d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71000b5394c82d72af8ccff8bd9c27c4546243e863be30b74dc254fc6b692f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71000b5394c82d72af8ccff8bd9c27c4546243e863be30b74dc254fc6b692f05->enter($__internal_71000b5394c82d72af8ccff8bd9c27c4546243e863be30b74dc254fc6b692f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a2dc0756688866241ffd74181a3107769f7648147b3128a26f89e4d1d3047ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2dc0756688866241ffd74181a3107769f7648147b3128a26f89e4d1d3047ba->enter($__internal_5a2dc0756688866241ffd74181a3107769f7648147b3128a26f89e4d1d3047ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a2dc0756688866241ffd74181a3107769f7648147b3128a26f89e4d1d3047ba->leave($__internal_5a2dc0756688866241ffd74181a3107769f7648147b3128a26f89e4d1d3047ba_prof);

        
        $__internal_71000b5394c82d72af8ccff8bd9c27c4546243e863be30b74dc254fc6b692f05->leave($__internal_71000b5394c82d72af8ccff8bd9c27c4546243e863be30b74dc254fc6b692f05_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad78f83f2dc6ce6c3d2c8efa698c0a789aaa60d62f2f951c4d95f46ef8d73404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad78f83f2dc6ce6c3d2c8efa698c0a789aaa60d62f2f951c4d95f46ef8d73404->enter($__internal_ad78f83f2dc6ce6c3d2c8efa698c0a789aaa60d62f2f951c4d95f46ef8d73404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b03d31ff808cf45dba1f4e56cbd9c304b04c7001e329e2a1f8f7a55dc1833e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03d31ff808cf45dba1f4e56cbd9c304b04c7001e329e2a1f8f7a55dc1833e3a->enter($__internal_b03d31ff808cf45dba1f4e56cbd9c304b04c7001e329e2a1f8f7a55dc1833e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b03d31ff808cf45dba1f4e56cbd9c304b04c7001e329e2a1f8f7a55dc1833e3a->leave($__internal_b03d31ff808cf45dba1f4e56cbd9c304b04c7001e329e2a1f8f7a55dc1833e3a_prof);

        
        $__internal_ad78f83f2dc6ce6c3d2c8efa698c0a789aaa60d62f2f951c4d95f46ef8d73404->leave($__internal_ad78f83f2dc6ce6c3d2c8efa698c0a789aaa60d62f2f951c4d95f46ef8d73404_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde8360fbddada27301fffecc078149a43db81a2d1afd5c0a02a3e98861e9531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde8360fbddada27301fffecc078149a43db81a2d1afd5c0a02a3e98861e9531->enter($__internal_cde8360fbddada27301fffecc078149a43db81a2d1afd5c0a02a3e98861e9531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c22875ab6af6fff593f7a54b01465bf73db426cb2949fd136aadec5633f5326b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22875ab6af6fff593f7a54b01465bf73db426cb2949fd136aadec5633f5326b->enter($__internal_c22875ab6af6fff593f7a54b01465bf73db426cb2949fd136aadec5633f5326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c22875ab6af6fff593f7a54b01465bf73db426cb2949fd136aadec5633f5326b->leave($__internal_c22875ab6af6fff593f7a54b01465bf73db426cb2949fd136aadec5633f5326b_prof);

        
        $__internal_cde8360fbddada27301fffecc078149a43db81a2d1afd5c0a02a3e98861e9531->leave($__internal_cde8360fbddada27301fffecc078149a43db81a2d1afd5c0a02a3e98861e9531_prof);

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
