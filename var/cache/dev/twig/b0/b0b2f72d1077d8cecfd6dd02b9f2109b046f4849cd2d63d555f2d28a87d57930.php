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
        $__internal_af4fc79d3348f509224598e01ee423a3565b99defdb42ac3783a55a8fc4489e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4fc79d3348f509224598e01ee423a3565b99defdb42ac3783a55a8fc4489e9->enter($__internal_af4fc79d3348f509224598e01ee423a3565b99defdb42ac3783a55a8fc4489e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_32cbea3fbd34a1983d5e35bc46cfd5062303ab830b5f277ca7e8c3a4ae552c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cbea3fbd34a1983d5e35bc46cfd5062303ab830b5f277ca7e8c3a4ae552c5b->enter($__internal_32cbea3fbd34a1983d5e35bc46cfd5062303ab830b5f277ca7e8c3a4ae552c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af4fc79d3348f509224598e01ee423a3565b99defdb42ac3783a55a8fc4489e9->leave($__internal_af4fc79d3348f509224598e01ee423a3565b99defdb42ac3783a55a8fc4489e9_prof);

        
        $__internal_32cbea3fbd34a1983d5e35bc46cfd5062303ab830b5f277ca7e8c3a4ae552c5b->leave($__internal_32cbea3fbd34a1983d5e35bc46cfd5062303ab830b5f277ca7e8c3a4ae552c5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4676ee430afd89886e5285a5a2733ae37c20ad16bf75f92f35b3b1724a78655e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4676ee430afd89886e5285a5a2733ae37c20ad16bf75f92f35b3b1724a78655e->enter($__internal_4676ee430afd89886e5285a5a2733ae37c20ad16bf75f92f35b3b1724a78655e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74c4169ca4a7eacb4372a8327c9fa5169fae5cbe3b3749354f4ae43178aeba08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c4169ca4a7eacb4372a8327c9fa5169fae5cbe3b3749354f4ae43178aeba08->enter($__internal_74c4169ca4a7eacb4372a8327c9fa5169fae5cbe3b3749354f4ae43178aeba08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_74c4169ca4a7eacb4372a8327c9fa5169fae5cbe3b3749354f4ae43178aeba08->leave($__internal_74c4169ca4a7eacb4372a8327c9fa5169fae5cbe3b3749354f4ae43178aeba08_prof);

        
        $__internal_4676ee430afd89886e5285a5a2733ae37c20ad16bf75f92f35b3b1724a78655e->leave($__internal_4676ee430afd89886e5285a5a2733ae37c20ad16bf75f92f35b3b1724a78655e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_40b7418dd2b2e54b96e949a70394672ec7ce60ec261c29ff851a05099704d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b7418dd2b2e54b96e949a70394672ec7ce60ec261c29ff851a05099704d487->enter($__internal_40b7418dd2b2e54b96e949a70394672ec7ce60ec261c29ff851a05099704d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31488753c04ff3f2d4023990730b63316658cafe433a39c1d20ba655c1c23936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31488753c04ff3f2d4023990730b63316658cafe433a39c1d20ba655c1c23936->enter($__internal_31488753c04ff3f2d4023990730b63316658cafe433a39c1d20ba655c1c23936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31488753c04ff3f2d4023990730b63316658cafe433a39c1d20ba655c1c23936->leave($__internal_31488753c04ff3f2d4023990730b63316658cafe433a39c1d20ba655c1c23936_prof);

        
        $__internal_40b7418dd2b2e54b96e949a70394672ec7ce60ec261c29ff851a05099704d487->leave($__internal_40b7418dd2b2e54b96e949a70394672ec7ce60ec261c29ff851a05099704d487_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5e1b23fe68ba05e6220a2862de73e456ea3ff95cf4c8a5643fa7b1f726aa95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5e1b23fe68ba05e6220a2862de73e456ea3ff95cf4c8a5643fa7b1f726aa95->enter($__internal_5c5e1b23fe68ba05e6220a2862de73e456ea3ff95cf4c8a5643fa7b1f726aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3bb0908cef7399279ff64f707c23ebccf9b0cf6e7ebc5ca40cb29232c1d0780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bb0908cef7399279ff64f707c23ebccf9b0cf6e7ebc5ca40cb29232c1d0780->enter($__internal_a3bb0908cef7399279ff64f707c23ebccf9b0cf6e7ebc5ca40cb29232c1d0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a3bb0908cef7399279ff64f707c23ebccf9b0cf6e7ebc5ca40cb29232c1d0780->leave($__internal_a3bb0908cef7399279ff64f707c23ebccf9b0cf6e7ebc5ca40cb29232c1d0780_prof);

        
        $__internal_5c5e1b23fe68ba05e6220a2862de73e456ea3ff95cf4c8a5643fa7b1f726aa95->leave($__internal_5c5e1b23fe68ba05e6220a2862de73e456ea3ff95cf4c8a5643fa7b1f726aa95_prof);

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
