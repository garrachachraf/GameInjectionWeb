<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_99883bc79cb9b827652602916e9cecfe44ddd196e6f2414e273964461a2ce525 extends Twig_Template
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
        $__internal_6b98507cc686d6b22343cb276e311338a4dda6b3e0de4058edd75975d8649caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b98507cc686d6b22343cb276e311338a4dda6b3e0de4058edd75975d8649caa->enter($__internal_6b98507cc686d6b22343cb276e311338a4dda6b3e0de4058edd75975d8649caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5c7ac9b9367cc07fb71a4fea614ae273e712c235b152d42b1e5df60c9139dc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7ac9b9367cc07fb71a4fea614ae273e712c235b152d42b1e5df60c9139dc49->enter($__internal_5c7ac9b9367cc07fb71a4fea614ae273e712c235b152d42b1e5df60c9139dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b98507cc686d6b22343cb276e311338a4dda6b3e0de4058edd75975d8649caa->leave($__internal_6b98507cc686d6b22343cb276e311338a4dda6b3e0de4058edd75975d8649caa_prof);

        
        $__internal_5c7ac9b9367cc07fb71a4fea614ae273e712c235b152d42b1e5df60c9139dc49->leave($__internal_5c7ac9b9367cc07fb71a4fea614ae273e712c235b152d42b1e5df60c9139dc49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a7e37dd1d0e49b496107789602c1aa5f79a59ece137aa52b482b9104f3b821a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7e37dd1d0e49b496107789602c1aa5f79a59ece137aa52b482b9104f3b821a->enter($__internal_9a7e37dd1d0e49b496107789602c1aa5f79a59ece137aa52b482b9104f3b821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b6900560ef4457d4a6cb068265739e945dc3b88b067e5b264e9037823f8226d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6900560ef4457d4a6cb068265739e945dc3b88b067e5b264e9037823f8226d->enter($__internal_8b6900560ef4457d4a6cb068265739e945dc3b88b067e5b264e9037823f8226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b6900560ef4457d4a6cb068265739e945dc3b88b067e5b264e9037823f8226d->leave($__internal_8b6900560ef4457d4a6cb068265739e945dc3b88b067e5b264e9037823f8226d_prof);

        
        $__internal_9a7e37dd1d0e49b496107789602c1aa5f79a59ece137aa52b482b9104f3b821a->leave($__internal_9a7e37dd1d0e49b496107789602c1aa5f79a59ece137aa52b482b9104f3b821a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d5cafae717bf2d981e5447549e175d38b039fe348040ea6ac8457492122bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d5cafae717bf2d981e5447549e175d38b039fe348040ea6ac8457492122bc0->enter($__internal_03d5cafae717bf2d981e5447549e175d38b039fe348040ea6ac8457492122bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd7a95900c50bce2195fbf512d14ee951f64fac0627de2dbee40bc1b6b853bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7a95900c50bce2195fbf512d14ee951f64fac0627de2dbee40bc1b6b853bd0->enter($__internal_dd7a95900c50bce2195fbf512d14ee951f64fac0627de2dbee40bc1b6b853bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd7a95900c50bce2195fbf512d14ee951f64fac0627de2dbee40bc1b6b853bd0->leave($__internal_dd7a95900c50bce2195fbf512d14ee951f64fac0627de2dbee40bc1b6b853bd0_prof);

        
        $__internal_03d5cafae717bf2d981e5447549e175d38b039fe348040ea6ac8457492122bc0->leave($__internal_03d5cafae717bf2d981e5447549e175d38b039fe348040ea6ac8457492122bc0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21a159d5bcbadaec25433369ba5693a636f10e993d4d379709cf1c0650574c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21a159d5bcbadaec25433369ba5693a636f10e993d4d379709cf1c0650574c1->enter($__internal_c21a159d5bcbadaec25433369ba5693a636f10e993d4d379709cf1c0650574c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ded4d46573c94c2f26a002dcf960593afb0263cef1b8230de51272021fecff67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded4d46573c94c2f26a002dcf960593afb0263cef1b8230de51272021fecff67->enter($__internal_ded4d46573c94c2f26a002dcf960593afb0263cef1b8230de51272021fecff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ded4d46573c94c2f26a002dcf960593afb0263cef1b8230de51272021fecff67->leave($__internal_ded4d46573c94c2f26a002dcf960593afb0263cef1b8230de51272021fecff67_prof);

        
        $__internal_c21a159d5bcbadaec25433369ba5693a636f10e993d4d379709cf1c0650574c1->leave($__internal_c21a159d5bcbadaec25433369ba5693a636f10e993d4d379709cf1c0650574c1_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
