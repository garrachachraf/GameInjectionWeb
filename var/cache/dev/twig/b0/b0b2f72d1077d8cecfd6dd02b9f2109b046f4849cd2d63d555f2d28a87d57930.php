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
        $__internal_4f5d31c26cea248db0d44a03f222d7703ffbedc58ced1cc2962e0a488c728bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5d31c26cea248db0d44a03f222d7703ffbedc58ced1cc2962e0a488c728bd7->enter($__internal_4f5d31c26cea248db0d44a03f222d7703ffbedc58ced1cc2962e0a488c728bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fc8184d4a847c9c9468fd909b6fc652cbbabc95402eba46aa947c34518b3fcf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8184d4a847c9c9468fd909b6fc652cbbabc95402eba46aa947c34518b3fcf4->enter($__internal_fc8184d4a847c9c9468fd909b6fc652cbbabc95402eba46aa947c34518b3fcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f5d31c26cea248db0d44a03f222d7703ffbedc58ced1cc2962e0a488c728bd7->leave($__internal_4f5d31c26cea248db0d44a03f222d7703ffbedc58ced1cc2962e0a488c728bd7_prof);

        
        $__internal_fc8184d4a847c9c9468fd909b6fc652cbbabc95402eba46aa947c34518b3fcf4->leave($__internal_fc8184d4a847c9c9468fd909b6fc652cbbabc95402eba46aa947c34518b3fcf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f915ca4085412dd79d9d32f8b86b0d07af85f14f24665a9332002039df1bc6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f915ca4085412dd79d9d32f8b86b0d07af85f14f24665a9332002039df1bc6fb->enter($__internal_f915ca4085412dd79d9d32f8b86b0d07af85f14f24665a9332002039df1bc6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4daa0412d19e5c92cfa8313df45a7c19a3ede59403a0189f42c9c18d8d95adca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daa0412d19e5c92cfa8313df45a7c19a3ede59403a0189f42c9c18d8d95adca->enter($__internal_4daa0412d19e5c92cfa8313df45a7c19a3ede59403a0189f42c9c18d8d95adca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4daa0412d19e5c92cfa8313df45a7c19a3ede59403a0189f42c9c18d8d95adca->leave($__internal_4daa0412d19e5c92cfa8313df45a7c19a3ede59403a0189f42c9c18d8d95adca_prof);

        
        $__internal_f915ca4085412dd79d9d32f8b86b0d07af85f14f24665a9332002039df1bc6fb->leave($__internal_f915ca4085412dd79d9d32f8b86b0d07af85f14f24665a9332002039df1bc6fb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c11a90862036f945d65b58873adde3ed8481b2609380ba4bf355ea758ce62d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11a90862036f945d65b58873adde3ed8481b2609380ba4bf355ea758ce62d5a->enter($__internal_c11a90862036f945d65b58873adde3ed8481b2609380ba4bf355ea758ce62d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_693fb55457d3160c2ab4f5611021eafe9f565c3d61fd58bd95de5f50e34e6a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693fb55457d3160c2ab4f5611021eafe9f565c3d61fd58bd95de5f50e34e6a32->enter($__internal_693fb55457d3160c2ab4f5611021eafe9f565c3d61fd58bd95de5f50e34e6a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_693fb55457d3160c2ab4f5611021eafe9f565c3d61fd58bd95de5f50e34e6a32->leave($__internal_693fb55457d3160c2ab4f5611021eafe9f565c3d61fd58bd95de5f50e34e6a32_prof);

        
        $__internal_c11a90862036f945d65b58873adde3ed8481b2609380ba4bf355ea758ce62d5a->leave($__internal_c11a90862036f945d65b58873adde3ed8481b2609380ba4bf355ea758ce62d5a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c227cb176d1e1882c15f0c860c5c66f654d7f88f4e419b32572a266eb191e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c227cb176d1e1882c15f0c860c5c66f654d7f88f4e419b32572a266eb191e25->enter($__internal_1c227cb176d1e1882c15f0c860c5c66f654d7f88f4e419b32572a266eb191e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebc5affafd38764ffee9acd8be4b12dbf924b4b610c4f30c703556ca719c9e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc5affafd38764ffee9acd8be4b12dbf924b4b610c4f30c703556ca719c9e03->enter($__internal_ebc5affafd38764ffee9acd8be4b12dbf924b4b610c4f30c703556ca719c9e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ebc5affafd38764ffee9acd8be4b12dbf924b4b610c4f30c703556ca719c9e03->leave($__internal_ebc5affafd38764ffee9acd8be4b12dbf924b4b610c4f30c703556ca719c9e03_prof);

        
        $__internal_1c227cb176d1e1882c15f0c860c5c66f654d7f88f4e419b32572a266eb191e25->leave($__internal_1c227cb176d1e1882c15f0c860c5c66f654d7f88f4e419b32572a266eb191e25_prof);

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
