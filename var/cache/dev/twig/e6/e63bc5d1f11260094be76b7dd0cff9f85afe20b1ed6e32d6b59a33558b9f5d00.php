<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ca826cefb5440d144f7a3aa7bcf496abca4e1f3a3af078d1256c3fd0877ac4a3 extends Twig_Template
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
        $__internal_fae887906150942a2c83c7561c6866015c80c269730dd0d8b67fa108fccd945b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae887906150942a2c83c7561c6866015c80c269730dd0d8b67fa108fccd945b->enter($__internal_fae887906150942a2c83c7561c6866015c80c269730dd0d8b67fa108fccd945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_26a3f515e839b6e2cacecde56f659e7090727fa4518f3c445fd67512bfe5af0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a3f515e839b6e2cacecde56f659e7090727fa4518f3c445fd67512bfe5af0f->enter($__internal_26a3f515e839b6e2cacecde56f659e7090727fa4518f3c445fd67512bfe5af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae887906150942a2c83c7561c6866015c80c269730dd0d8b67fa108fccd945b->leave($__internal_fae887906150942a2c83c7561c6866015c80c269730dd0d8b67fa108fccd945b_prof);

        
        $__internal_26a3f515e839b6e2cacecde56f659e7090727fa4518f3c445fd67512bfe5af0f->leave($__internal_26a3f515e839b6e2cacecde56f659e7090727fa4518f3c445fd67512bfe5af0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08d9cd300206f6ab7e00c3299804be278cb8abe693b50c560c3c2b3d7104e14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d9cd300206f6ab7e00c3299804be278cb8abe693b50c560c3c2b3d7104e14b->enter($__internal_08d9cd300206f6ab7e00c3299804be278cb8abe693b50c560c3c2b3d7104e14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2764743bd37ea90c20f6590be7b9c813c5eecde601675fbbceb618c6b9f415c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2764743bd37ea90c20f6590be7b9c813c5eecde601675fbbceb618c6b9f415c3->enter($__internal_2764743bd37ea90c20f6590be7b9c813c5eecde601675fbbceb618c6b9f415c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2764743bd37ea90c20f6590be7b9c813c5eecde601675fbbceb618c6b9f415c3->leave($__internal_2764743bd37ea90c20f6590be7b9c813c5eecde601675fbbceb618c6b9f415c3_prof);

        
        $__internal_08d9cd300206f6ab7e00c3299804be278cb8abe693b50c560c3c2b3d7104e14b->leave($__internal_08d9cd300206f6ab7e00c3299804be278cb8abe693b50c560c3c2b3d7104e14b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a019dcea5bbeb0dabcf85da06315626fbdfdbffd99a81b30982b100c8e64f746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a019dcea5bbeb0dabcf85da06315626fbdfdbffd99a81b30982b100c8e64f746->enter($__internal_a019dcea5bbeb0dabcf85da06315626fbdfdbffd99a81b30982b100c8e64f746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5921e5da61d32d1fa47993a36fcce5f5942b4d58a753d90214eece26b2a7587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5921e5da61d32d1fa47993a36fcce5f5942b4d58a753d90214eece26b2a7587a->enter($__internal_5921e5da61d32d1fa47993a36fcce5f5942b4d58a753d90214eece26b2a7587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5921e5da61d32d1fa47993a36fcce5f5942b4d58a753d90214eece26b2a7587a->leave($__internal_5921e5da61d32d1fa47993a36fcce5f5942b4d58a753d90214eece26b2a7587a_prof);

        
        $__internal_a019dcea5bbeb0dabcf85da06315626fbdfdbffd99a81b30982b100c8e64f746->leave($__internal_a019dcea5bbeb0dabcf85da06315626fbdfdbffd99a81b30982b100c8e64f746_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_561a0148ff12f1c646d8321d72ea4054f23be775c87d26cd0951f32a9f89ab6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561a0148ff12f1c646d8321d72ea4054f23be775c87d26cd0951f32a9f89ab6f->enter($__internal_561a0148ff12f1c646d8321d72ea4054f23be775c87d26cd0951f32a9f89ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aae7f582d5c608d28aa76684d216b38f0cbb5fc671664737cc0f0d4a96e77170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae7f582d5c608d28aa76684d216b38f0cbb5fc671664737cc0f0d4a96e77170->enter($__internal_aae7f582d5c608d28aa76684d216b38f0cbb5fc671664737cc0f0d4a96e77170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_aae7f582d5c608d28aa76684d216b38f0cbb5fc671664737cc0f0d4a96e77170->leave($__internal_aae7f582d5c608d28aa76684d216b38f0cbb5fc671664737cc0f0d4a96e77170_prof);

        
        $__internal_561a0148ff12f1c646d8321d72ea4054f23be775c87d26cd0951f32a9f89ab6f->leave($__internal_561a0148ff12f1c646d8321d72ea4054f23be775c87d26cd0951f32a9f89ab6f_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
