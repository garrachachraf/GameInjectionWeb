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
        $__internal_2a0f1b7fa770ca964186d4b1fa067b873a4e3667571dabf03a378f02c72ea744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0f1b7fa770ca964186d4b1fa067b873a4e3667571dabf03a378f02c72ea744->enter($__internal_2a0f1b7fa770ca964186d4b1fa067b873a4e3667571dabf03a378f02c72ea744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2f0a5a69a4c80a72032e6a2f4dc71fa2d4f69b8a82fe67cd1455d2572692a4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0a5a69a4c80a72032e6a2f4dc71fa2d4f69b8a82fe67cd1455d2572692a4da->enter($__internal_2f0a5a69a4c80a72032e6a2f4dc71fa2d4f69b8a82fe67cd1455d2572692a4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0f1b7fa770ca964186d4b1fa067b873a4e3667571dabf03a378f02c72ea744->leave($__internal_2a0f1b7fa770ca964186d4b1fa067b873a4e3667571dabf03a378f02c72ea744_prof);

        
        $__internal_2f0a5a69a4c80a72032e6a2f4dc71fa2d4f69b8a82fe67cd1455d2572692a4da->leave($__internal_2f0a5a69a4c80a72032e6a2f4dc71fa2d4f69b8a82fe67cd1455d2572692a4da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d8e4511e7d3efaa8b13a3d11f425eb7af40148e20661d4a02f81d0cb1ba1456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8e4511e7d3efaa8b13a3d11f425eb7af40148e20661d4a02f81d0cb1ba1456->enter($__internal_7d8e4511e7d3efaa8b13a3d11f425eb7af40148e20661d4a02f81d0cb1ba1456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_804e5e74653e51ff4ac0a79227583a6b7cf707b1df3c05b3f75839937be7b97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804e5e74653e51ff4ac0a79227583a6b7cf707b1df3c05b3f75839937be7b97c->enter($__internal_804e5e74653e51ff4ac0a79227583a6b7cf707b1df3c05b3f75839937be7b97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_804e5e74653e51ff4ac0a79227583a6b7cf707b1df3c05b3f75839937be7b97c->leave($__internal_804e5e74653e51ff4ac0a79227583a6b7cf707b1df3c05b3f75839937be7b97c_prof);

        
        $__internal_7d8e4511e7d3efaa8b13a3d11f425eb7af40148e20661d4a02f81d0cb1ba1456->leave($__internal_7d8e4511e7d3efaa8b13a3d11f425eb7af40148e20661d4a02f81d0cb1ba1456_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_125f83543f87849293b574461a6a742167de4a907a8600a2b56feed008dbb8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125f83543f87849293b574461a6a742167de4a907a8600a2b56feed008dbb8d0->enter($__internal_125f83543f87849293b574461a6a742167de4a907a8600a2b56feed008dbb8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe0c5f4daf079586bd5f3a74cc6d041bc5a7145806ddd773d4024bedd40be722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0c5f4daf079586bd5f3a74cc6d041bc5a7145806ddd773d4024bedd40be722->enter($__internal_fe0c5f4daf079586bd5f3a74cc6d041bc5a7145806ddd773d4024bedd40be722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe0c5f4daf079586bd5f3a74cc6d041bc5a7145806ddd773d4024bedd40be722->leave($__internal_fe0c5f4daf079586bd5f3a74cc6d041bc5a7145806ddd773d4024bedd40be722_prof);

        
        $__internal_125f83543f87849293b574461a6a742167de4a907a8600a2b56feed008dbb8d0->leave($__internal_125f83543f87849293b574461a6a742167de4a907a8600a2b56feed008dbb8d0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4da240b8d2c835fc7590f79ed19110f04859fae70f780ddbbbcbf3c7e221c504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da240b8d2c835fc7590f79ed19110f04859fae70f780ddbbbcbf3c7e221c504->enter($__internal_4da240b8d2c835fc7590f79ed19110f04859fae70f780ddbbbcbf3c7e221c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_315013a04edfd93accd70d6276da3e0f213c4599c96dccf3792651b2fea24090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315013a04edfd93accd70d6276da3e0f213c4599c96dccf3792651b2fea24090->enter($__internal_315013a04edfd93accd70d6276da3e0f213c4599c96dccf3792651b2fea24090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_315013a04edfd93accd70d6276da3e0f213c4599c96dccf3792651b2fea24090->leave($__internal_315013a04edfd93accd70d6276da3e0f213c4599c96dccf3792651b2fea24090_prof);

        
        $__internal_4da240b8d2c835fc7590f79ed19110f04859fae70f780ddbbbcbf3c7e221c504->leave($__internal_4da240b8d2c835fc7590f79ed19110f04859fae70f780ddbbbcbf3c7e221c504_prof);

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
