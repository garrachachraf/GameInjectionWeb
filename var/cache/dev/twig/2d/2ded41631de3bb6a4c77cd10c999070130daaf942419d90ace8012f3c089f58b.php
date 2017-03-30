<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ed73354cba07385b82f49169cac8d70a92215d06fa02bcbeb7d99baa59e5f273 extends Twig_Template
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
        $__internal_bb5159926c397a5b47a9072accb8cac1ba81626cc1018c96d61d3c9f4983b71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5159926c397a5b47a9072accb8cac1ba81626cc1018c96d61d3c9f4983b71e->enter($__internal_bb5159926c397a5b47a9072accb8cac1ba81626cc1018c96d61d3c9f4983b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4979d76924a8ebb0c48b74125a3363a24988757f78f881b867454d8e95bda3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4979d76924a8ebb0c48b74125a3363a24988757f78f881b867454d8e95bda3c3->enter($__internal_4979d76924a8ebb0c48b74125a3363a24988757f78f881b867454d8e95bda3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5159926c397a5b47a9072accb8cac1ba81626cc1018c96d61d3c9f4983b71e->leave($__internal_bb5159926c397a5b47a9072accb8cac1ba81626cc1018c96d61d3c9f4983b71e_prof);

        
        $__internal_4979d76924a8ebb0c48b74125a3363a24988757f78f881b867454d8e95bda3c3->leave($__internal_4979d76924a8ebb0c48b74125a3363a24988757f78f881b867454d8e95bda3c3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7f551d504902f09a1ed7ebab36d7b5bb3915af720894b74ebf60993b86c0b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f551d504902f09a1ed7ebab36d7b5bb3915af720894b74ebf60993b86c0b5b->enter($__internal_a7f551d504902f09a1ed7ebab36d7b5bb3915af720894b74ebf60993b86c0b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8f0b6ee5169fde461e77d2a543973a779d788f856345120174c2ad5644ec862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f0b6ee5169fde461e77d2a543973a779d788f856345120174c2ad5644ec862->enter($__internal_b8f0b6ee5169fde461e77d2a543973a779d788f856345120174c2ad5644ec862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8f0b6ee5169fde461e77d2a543973a779d788f856345120174c2ad5644ec862->leave($__internal_b8f0b6ee5169fde461e77d2a543973a779d788f856345120174c2ad5644ec862_prof);

        
        $__internal_a7f551d504902f09a1ed7ebab36d7b5bb3915af720894b74ebf60993b86c0b5b->leave($__internal_a7f551d504902f09a1ed7ebab36d7b5bb3915af720894b74ebf60993b86c0b5b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1bc36c5b9fe842a21a4a5d20804ef4207ab2d3601506ec1dd4e9f5c7c15ab94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bc36c5b9fe842a21a4a5d20804ef4207ab2d3601506ec1dd4e9f5c7c15ab94->enter($__internal_c1bc36c5b9fe842a21a4a5d20804ef4207ab2d3601506ec1dd4e9f5c7c15ab94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa2f02838190f4bedaa9e09d92f4ee9d699b4c8b51b4c385a93252e530ebf816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2f02838190f4bedaa9e09d92f4ee9d699b4c8b51b4c385a93252e530ebf816->enter($__internal_aa2f02838190f4bedaa9e09d92f4ee9d699b4c8b51b4c385a93252e530ebf816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa2f02838190f4bedaa9e09d92f4ee9d699b4c8b51b4c385a93252e530ebf816->leave($__internal_aa2f02838190f4bedaa9e09d92f4ee9d699b4c8b51b4c385a93252e530ebf816_prof);

        
        $__internal_c1bc36c5b9fe842a21a4a5d20804ef4207ab2d3601506ec1dd4e9f5c7c15ab94->leave($__internal_c1bc36c5b9fe842a21a4a5d20804ef4207ab2d3601506ec1dd4e9f5c7c15ab94_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f9b7529ad3267bbeddab79ebabb05605d392f6960e5a92d978780652a6e5c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9b7529ad3267bbeddab79ebabb05605d392f6960e5a92d978780652a6e5c40->enter($__internal_4f9b7529ad3267bbeddab79ebabb05605d392f6960e5a92d978780652a6e5c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed48cd314990e1d338c9e6e7c1406181fb6d46ea4aabaebf52eaa3e183e2dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed48cd314990e1d338c9e6e7c1406181fb6d46ea4aabaebf52eaa3e183e2dfb->enter($__internal_8ed48cd314990e1d338c9e6e7c1406181fb6d46ea4aabaebf52eaa3e183e2dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8ed48cd314990e1d338c9e6e7c1406181fb6d46ea4aabaebf52eaa3e183e2dfb->leave($__internal_8ed48cd314990e1d338c9e6e7c1406181fb6d46ea4aabaebf52eaa3e183e2dfb_prof);

        
        $__internal_4f9b7529ad3267bbeddab79ebabb05605d392f6960e5a92d978780652a6e5c40->leave($__internal_4f9b7529ad3267bbeddab79ebabb05605d392f6960e5a92d978780652a6e5c40_prof);

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
