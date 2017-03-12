<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
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
        $__internal_9d48163558c7a33204a4cecbc103460ee42dd5a0b089ea28b226d0d81165307e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d48163558c7a33204a4cecbc103460ee42dd5a0b089ea28b226d0d81165307e->enter($__internal_9d48163558c7a33204a4cecbc103460ee42dd5a0b089ea28b226d0d81165307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_6f57bba1e8aa0f898b9a4400bae5120abe2d06839e0febfb51a770d1b650117d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f57bba1e8aa0f898b9a4400bae5120abe2d06839e0febfb51a770d1b650117d->enter($__internal_6f57bba1e8aa0f898b9a4400bae5120abe2d06839e0febfb51a770d1b650117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d48163558c7a33204a4cecbc103460ee42dd5a0b089ea28b226d0d81165307e->leave($__internal_9d48163558c7a33204a4cecbc103460ee42dd5a0b089ea28b226d0d81165307e_prof);

        
        $__internal_6f57bba1e8aa0f898b9a4400bae5120abe2d06839e0febfb51a770d1b650117d->leave($__internal_6f57bba1e8aa0f898b9a4400bae5120abe2d06839e0febfb51a770d1b650117d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f73f775fbac7f1c7a2679ef572e7c3fac9243708f6c00a276f3eb2897d9fb319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73f775fbac7f1c7a2679ef572e7c3fac9243708f6c00a276f3eb2897d9fb319->enter($__internal_f73f775fbac7f1c7a2679ef572e7c3fac9243708f6c00a276f3eb2897d9fb319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d591827cfc2541c86ebeb078615b01fbf93a829de7a1d1beb420007f5910309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d591827cfc2541c86ebeb078615b01fbf93a829de7a1d1beb420007f5910309->enter($__internal_7d591827cfc2541c86ebeb078615b01fbf93a829de7a1d1beb420007f5910309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7d591827cfc2541c86ebeb078615b01fbf93a829de7a1d1beb420007f5910309->leave($__internal_7d591827cfc2541c86ebeb078615b01fbf93a829de7a1d1beb420007f5910309_prof);

        
        $__internal_f73f775fbac7f1c7a2679ef572e7c3fac9243708f6c00a276f3eb2897d9fb319->leave($__internal_f73f775fbac7f1c7a2679ef572e7c3fac9243708f6c00a276f3eb2897d9fb319_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa613ff29bc5fec0157779326521f43910f771f04398d8cb96572914bb7fe775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa613ff29bc5fec0157779326521f43910f771f04398d8cb96572914bb7fe775->enter($__internal_fa613ff29bc5fec0157779326521f43910f771f04398d8cb96572914bb7fe775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5251e138a9e40dfa77017df7561b0d18a16b852e4641549d10e9f90d291ef0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5251e138a9e40dfa77017df7561b0d18a16b852e4641549d10e9f90d291ef0e9->enter($__internal_5251e138a9e40dfa77017df7561b0d18a16b852e4641549d10e9f90d291ef0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5251e138a9e40dfa77017df7561b0d18a16b852e4641549d10e9f90d291ef0e9->leave($__internal_5251e138a9e40dfa77017df7561b0d18a16b852e4641549d10e9f90d291ef0e9_prof);

        
        $__internal_fa613ff29bc5fec0157779326521f43910f771f04398d8cb96572914bb7fe775->leave($__internal_fa613ff29bc5fec0157779326521f43910f771f04398d8cb96572914bb7fe775_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_52900d2fdc1a5aba46eb8a93a36e34ea28028f1a97d486af47e3df7f4838869d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52900d2fdc1a5aba46eb8a93a36e34ea28028f1a97d486af47e3df7f4838869d->enter($__internal_52900d2fdc1a5aba46eb8a93a36e34ea28028f1a97d486af47e3df7f4838869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a7600f916e674fd4896d0c7710aef97c22ded6abbad02ea9fa0e54922c1ab49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7600f916e674fd4896d0c7710aef97c22ded6abbad02ea9fa0e54922c1ab49->enter($__internal_0a7600f916e674fd4896d0c7710aef97c22ded6abbad02ea9fa0e54922c1ab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0a7600f916e674fd4896d0c7710aef97c22ded6abbad02ea9fa0e54922c1ab49->leave($__internal_0a7600f916e674fd4896d0c7710aef97c22ded6abbad02ea9fa0e54922c1ab49_prof);

        
        $__internal_52900d2fdc1a5aba46eb8a93a36e34ea28028f1a97d486af47e3df7f4838869d->leave($__internal_52900d2fdc1a5aba46eb8a93a36e34ea28028f1a97d486af47e3df7f4838869d_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
