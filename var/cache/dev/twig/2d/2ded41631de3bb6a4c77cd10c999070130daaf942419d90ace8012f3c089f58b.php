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
        $__internal_ff1aef75e6d877333888157a8aedd046ee4ec2852f07b3503957095c4ab93c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1aef75e6d877333888157a8aedd046ee4ec2852f07b3503957095c4ab93c54->enter($__internal_ff1aef75e6d877333888157a8aedd046ee4ec2852f07b3503957095c4ab93c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9a91c2685c4fb891f1eb302136c1252f5dd825b984fc46f902b426489edc89c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a91c2685c4fb891f1eb302136c1252f5dd825b984fc46f902b426489edc89c9->enter($__internal_9a91c2685c4fb891f1eb302136c1252f5dd825b984fc46f902b426489edc89c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff1aef75e6d877333888157a8aedd046ee4ec2852f07b3503957095c4ab93c54->leave($__internal_ff1aef75e6d877333888157a8aedd046ee4ec2852f07b3503957095c4ab93c54_prof);

        
        $__internal_9a91c2685c4fb891f1eb302136c1252f5dd825b984fc46f902b426489edc89c9->leave($__internal_9a91c2685c4fb891f1eb302136c1252f5dd825b984fc46f902b426489edc89c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1477b473134ed4bf1e06e75f38361ae7e79cf852424f95626d7a7204746c9fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1477b473134ed4bf1e06e75f38361ae7e79cf852424f95626d7a7204746c9fa7->enter($__internal_1477b473134ed4bf1e06e75f38361ae7e79cf852424f95626d7a7204746c9fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55544e5c2fa7791a181fc63bfeb592c58dc3078648ac7b602a46950aff91fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55544e5c2fa7791a181fc63bfeb592c58dc3078648ac7b602a46950aff91fbcc->enter($__internal_55544e5c2fa7791a181fc63bfeb592c58dc3078648ac7b602a46950aff91fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_55544e5c2fa7791a181fc63bfeb592c58dc3078648ac7b602a46950aff91fbcc->leave($__internal_55544e5c2fa7791a181fc63bfeb592c58dc3078648ac7b602a46950aff91fbcc_prof);

        
        $__internal_1477b473134ed4bf1e06e75f38361ae7e79cf852424f95626d7a7204746c9fa7->leave($__internal_1477b473134ed4bf1e06e75f38361ae7e79cf852424f95626d7a7204746c9fa7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_084ccaaddbceb9d8d21e139fb0bb4e8437f0cae1862c02d975cf5e538700a12c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084ccaaddbceb9d8d21e139fb0bb4e8437f0cae1862c02d975cf5e538700a12c->enter($__internal_084ccaaddbceb9d8d21e139fb0bb4e8437f0cae1862c02d975cf5e538700a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_015940328b798a956cb087dbc6430485f331f2aca8a9c786616146588e8727ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015940328b798a956cb087dbc6430485f331f2aca8a9c786616146588e8727ae->enter($__internal_015940328b798a956cb087dbc6430485f331f2aca8a9c786616146588e8727ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_015940328b798a956cb087dbc6430485f331f2aca8a9c786616146588e8727ae->leave($__internal_015940328b798a956cb087dbc6430485f331f2aca8a9c786616146588e8727ae_prof);

        
        $__internal_084ccaaddbceb9d8d21e139fb0bb4e8437f0cae1862c02d975cf5e538700a12c->leave($__internal_084ccaaddbceb9d8d21e139fb0bb4e8437f0cae1862c02d975cf5e538700a12c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddd622f20acae6975c5f24afacf66402868b0b1553832c251603b63913e1a378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd622f20acae6975c5f24afacf66402868b0b1553832c251603b63913e1a378->enter($__internal_ddd622f20acae6975c5f24afacf66402868b0b1553832c251603b63913e1a378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f4c0e07bbff44c1e65ec005388ecbcd31a0034fe017f36e77fb16c719c6abe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4c0e07bbff44c1e65ec005388ecbcd31a0034fe017f36e77fb16c719c6abe3->enter($__internal_5f4c0e07bbff44c1e65ec005388ecbcd31a0034fe017f36e77fb16c719c6abe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5f4c0e07bbff44c1e65ec005388ecbcd31a0034fe017f36e77fb16c719c6abe3->leave($__internal_5f4c0e07bbff44c1e65ec005388ecbcd31a0034fe017f36e77fb16c719c6abe3_prof);

        
        $__internal_ddd622f20acae6975c5f24afacf66402868b0b1553832c251603b63913e1a378->leave($__internal_ddd622f20acae6975c5f24afacf66402868b0b1553832c251603b63913e1a378_prof);

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
