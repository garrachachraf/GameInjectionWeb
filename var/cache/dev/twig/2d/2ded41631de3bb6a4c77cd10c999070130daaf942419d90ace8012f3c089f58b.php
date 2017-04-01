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
        $__internal_26da4d15c8c593662f5115e5f0ff3c6f0d5c456e7d3224ec2d2bc82b8be56736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26da4d15c8c593662f5115e5f0ff3c6f0d5c456e7d3224ec2d2bc82b8be56736->enter($__internal_26da4d15c8c593662f5115e5f0ff3c6f0d5c456e7d3224ec2d2bc82b8be56736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bc9521592b4997a4768b2d002a728ddc8466a24b7cdf93bcdfd207265f0009dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9521592b4997a4768b2d002a728ddc8466a24b7cdf93bcdfd207265f0009dc->enter($__internal_bc9521592b4997a4768b2d002a728ddc8466a24b7cdf93bcdfd207265f0009dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26da4d15c8c593662f5115e5f0ff3c6f0d5c456e7d3224ec2d2bc82b8be56736->leave($__internal_26da4d15c8c593662f5115e5f0ff3c6f0d5c456e7d3224ec2d2bc82b8be56736_prof);

        
        $__internal_bc9521592b4997a4768b2d002a728ddc8466a24b7cdf93bcdfd207265f0009dc->leave($__internal_bc9521592b4997a4768b2d002a728ddc8466a24b7cdf93bcdfd207265f0009dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c27192a4bb88988e1f374d3b3cfffc8888297598a91c92dcbd720d7b6997c8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27192a4bb88988e1f374d3b3cfffc8888297598a91c92dcbd720d7b6997c8ec->enter($__internal_c27192a4bb88988e1f374d3b3cfffc8888297598a91c92dcbd720d7b6997c8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea0b14621d4fce87e61965a6b4546eb3407a26c365d7702dd1c2a0719e9aed49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0b14621d4fce87e61965a6b4546eb3407a26c365d7702dd1c2a0719e9aed49->enter($__internal_ea0b14621d4fce87e61965a6b4546eb3407a26c365d7702dd1c2a0719e9aed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea0b14621d4fce87e61965a6b4546eb3407a26c365d7702dd1c2a0719e9aed49->leave($__internal_ea0b14621d4fce87e61965a6b4546eb3407a26c365d7702dd1c2a0719e9aed49_prof);

        
        $__internal_c27192a4bb88988e1f374d3b3cfffc8888297598a91c92dcbd720d7b6997c8ec->leave($__internal_c27192a4bb88988e1f374d3b3cfffc8888297598a91c92dcbd720d7b6997c8ec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9405fe2a82f8c6fa9034a200799284fc64ad24d0fe595cbfc64cdefb1603370e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9405fe2a82f8c6fa9034a200799284fc64ad24d0fe595cbfc64cdefb1603370e->enter($__internal_9405fe2a82f8c6fa9034a200799284fc64ad24d0fe595cbfc64cdefb1603370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2ccfb7569283591918eeabc2261dec55bdabdda1b5fddfd121fb321b0f6e637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ccfb7569283591918eeabc2261dec55bdabdda1b5fddfd121fb321b0f6e637->enter($__internal_b2ccfb7569283591918eeabc2261dec55bdabdda1b5fddfd121fb321b0f6e637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2ccfb7569283591918eeabc2261dec55bdabdda1b5fddfd121fb321b0f6e637->leave($__internal_b2ccfb7569283591918eeabc2261dec55bdabdda1b5fddfd121fb321b0f6e637_prof);

        
        $__internal_9405fe2a82f8c6fa9034a200799284fc64ad24d0fe595cbfc64cdefb1603370e->leave($__internal_9405fe2a82f8c6fa9034a200799284fc64ad24d0fe595cbfc64cdefb1603370e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_28a59d6eb469446fc4a61cdbb480b9a38afadbd1b6b1fcdcb016fd34d1341853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a59d6eb469446fc4a61cdbb480b9a38afadbd1b6b1fcdcb016fd34d1341853->enter($__internal_28a59d6eb469446fc4a61cdbb480b9a38afadbd1b6b1fcdcb016fd34d1341853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f5302397b4d6e1e12137d361844841f7992e4ed7a1d526afd9db843da3ea293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5302397b4d6e1e12137d361844841f7992e4ed7a1d526afd9db843da3ea293->enter($__internal_2f5302397b4d6e1e12137d361844841f7992e4ed7a1d526afd9db843da3ea293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2f5302397b4d6e1e12137d361844841f7992e4ed7a1d526afd9db843da3ea293->leave($__internal_2f5302397b4d6e1e12137d361844841f7992e4ed7a1d526afd9db843da3ea293_prof);

        
        $__internal_28a59d6eb469446fc4a61cdbb480b9a38afadbd1b6b1fcdcb016fd34d1341853->leave($__internal_28a59d6eb469446fc4a61cdbb480b9a38afadbd1b6b1fcdcb016fd34d1341853_prof);

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
