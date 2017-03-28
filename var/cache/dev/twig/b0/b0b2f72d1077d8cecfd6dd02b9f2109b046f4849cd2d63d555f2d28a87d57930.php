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
        $__internal_5cf76b7c15a896a34f77456589e220b687af766c4b9fc96ebf9986c9d496984e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf76b7c15a896a34f77456589e220b687af766c4b9fc96ebf9986c9d496984e->enter($__internal_5cf76b7c15a896a34f77456589e220b687af766c4b9fc96ebf9986c9d496984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_88cedc2978e64107d4a8492fcc47657f0b8d13fd8dde7a57bae50cc54c445a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cedc2978e64107d4a8492fcc47657f0b8d13fd8dde7a57bae50cc54c445a57->enter($__internal_88cedc2978e64107d4a8492fcc47657f0b8d13fd8dde7a57bae50cc54c445a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf76b7c15a896a34f77456589e220b687af766c4b9fc96ebf9986c9d496984e->leave($__internal_5cf76b7c15a896a34f77456589e220b687af766c4b9fc96ebf9986c9d496984e_prof);

        
        $__internal_88cedc2978e64107d4a8492fcc47657f0b8d13fd8dde7a57bae50cc54c445a57->leave($__internal_88cedc2978e64107d4a8492fcc47657f0b8d13fd8dde7a57bae50cc54c445a57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5dfefb212e532337f44db04d97831281ef4ac5583002970fac5cc6b5c37a634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dfefb212e532337f44db04d97831281ef4ac5583002970fac5cc6b5c37a634->enter($__internal_d5dfefb212e532337f44db04d97831281ef4ac5583002970fac5cc6b5c37a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61d22f12d05cd2dcd9ec8816d4bad34aa19a8ee01b041a7237cca76e05679f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d22f12d05cd2dcd9ec8816d4bad34aa19a8ee01b041a7237cca76e05679f07->enter($__internal_61d22f12d05cd2dcd9ec8816d4bad34aa19a8ee01b041a7237cca76e05679f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_61d22f12d05cd2dcd9ec8816d4bad34aa19a8ee01b041a7237cca76e05679f07->leave($__internal_61d22f12d05cd2dcd9ec8816d4bad34aa19a8ee01b041a7237cca76e05679f07_prof);

        
        $__internal_d5dfefb212e532337f44db04d97831281ef4ac5583002970fac5cc6b5c37a634->leave($__internal_d5dfefb212e532337f44db04d97831281ef4ac5583002970fac5cc6b5c37a634_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea6a781735969a07ac36fe51d5cdf83ea33bd6407cadc6ca4fc971de20cef12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea6a781735969a07ac36fe51d5cdf83ea33bd6407cadc6ca4fc971de20cef12->enter($__internal_cea6a781735969a07ac36fe51d5cdf83ea33bd6407cadc6ca4fc971de20cef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35313539c4e5f4872cbe6d3d6fb862c2de10bc5d6a6fca7da6f9f6bc320e4df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35313539c4e5f4872cbe6d3d6fb862c2de10bc5d6a6fca7da6f9f6bc320e4df7->enter($__internal_35313539c4e5f4872cbe6d3d6fb862c2de10bc5d6a6fca7da6f9f6bc320e4df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35313539c4e5f4872cbe6d3d6fb862c2de10bc5d6a6fca7da6f9f6bc320e4df7->leave($__internal_35313539c4e5f4872cbe6d3d6fb862c2de10bc5d6a6fca7da6f9f6bc320e4df7_prof);

        
        $__internal_cea6a781735969a07ac36fe51d5cdf83ea33bd6407cadc6ca4fc971de20cef12->leave($__internal_cea6a781735969a07ac36fe51d5cdf83ea33bd6407cadc6ca4fc971de20cef12_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2440c2f7d023727b6a906fcda1250356a68d262267b7324528e9784194428cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2440c2f7d023727b6a906fcda1250356a68d262267b7324528e9784194428cb4->enter($__internal_2440c2f7d023727b6a906fcda1250356a68d262267b7324528e9784194428cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a8b95fc00636d43d21d28bf3c470dbd72089beb5bafaa35bb42680e46e95335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8b95fc00636d43d21d28bf3c470dbd72089beb5bafaa35bb42680e46e95335->enter($__internal_1a8b95fc00636d43d21d28bf3c470dbd72089beb5bafaa35bb42680e46e95335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1a8b95fc00636d43d21d28bf3c470dbd72089beb5bafaa35bb42680e46e95335->leave($__internal_1a8b95fc00636d43d21d28bf3c470dbd72089beb5bafaa35bb42680e46e95335_prof);

        
        $__internal_2440c2f7d023727b6a906fcda1250356a68d262267b7324528e9784194428cb4->leave($__internal_2440c2f7d023727b6a906fcda1250356a68d262267b7324528e9784194428cb4_prof);

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
