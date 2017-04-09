<?php

/* base.html.twig */
class __TwigTemplate_977a5ae99c3de620fe0e8ab7ef67939f56ff65a06e859c0b3952895eab3536ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c255f2f8b69ec657e30f81f4c703a4d4c270e3166ca8f36bed6bd372d5e1aad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c255f2f8b69ec657e30f81f4c703a4d4c270e3166ca8f36bed6bd372d5e1aad4->enter($__internal_c255f2f8b69ec657e30f81f4c703a4d4c270e3166ca8f36bed6bd372d5e1aad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a4afc3223a757fa7ad9d677e9e2060602fad3d2cc387dbb97e4c1fa53e6e63b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4afc3223a757fa7ad9d677e9e2060602fad3d2cc387dbb97e4c1fa53e6e63b2->enter($__internal_a4afc3223a757fa7ad9d677e9e2060602fad3d2cc387dbb97e4c1fa53e6e63b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c255f2f8b69ec657e30f81f4c703a4d4c270e3166ca8f36bed6bd372d5e1aad4->leave($__internal_c255f2f8b69ec657e30f81f4c703a4d4c270e3166ca8f36bed6bd372d5e1aad4_prof);

        
        $__internal_a4afc3223a757fa7ad9d677e9e2060602fad3d2cc387dbb97e4c1fa53e6e63b2->leave($__internal_a4afc3223a757fa7ad9d677e9e2060602fad3d2cc387dbb97e4c1fa53e6e63b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d5fdbdf8fe76b7276a28f824e0cd2380b2b6a8caaecc1b44cc966dc6477176f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5fdbdf8fe76b7276a28f824e0cd2380b2b6a8caaecc1b44cc966dc6477176f->enter($__internal_7d5fdbdf8fe76b7276a28f824e0cd2380b2b6a8caaecc1b44cc966dc6477176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98326072eb81e5379e397462d378096099f95d74d21efebe241988aec778f8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98326072eb81e5379e397462d378096099f95d74d21efebe241988aec778f8ab->enter($__internal_98326072eb81e5379e397462d378096099f95d74d21efebe241988aec778f8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98326072eb81e5379e397462d378096099f95d74d21efebe241988aec778f8ab->leave($__internal_98326072eb81e5379e397462d378096099f95d74d21efebe241988aec778f8ab_prof);

        
        $__internal_7d5fdbdf8fe76b7276a28f824e0cd2380b2b6a8caaecc1b44cc966dc6477176f->leave($__internal_7d5fdbdf8fe76b7276a28f824e0cd2380b2b6a8caaecc1b44cc966dc6477176f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_505fe3071f0ee1da22782094aef75d1ef96abde9752c2b4a788f37a208416dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_505fe3071f0ee1da22782094aef75d1ef96abde9752c2b4a788f37a208416dbf->enter($__internal_505fe3071f0ee1da22782094aef75d1ef96abde9752c2b4a788f37a208416dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_444bea124d53ef11949f92c8573078f4d23517358ea3293dfbb3687311aea953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444bea124d53ef11949f92c8573078f4d23517358ea3293dfbb3687311aea953->enter($__internal_444bea124d53ef11949f92c8573078f4d23517358ea3293dfbb3687311aea953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_444bea124d53ef11949f92c8573078f4d23517358ea3293dfbb3687311aea953->leave($__internal_444bea124d53ef11949f92c8573078f4d23517358ea3293dfbb3687311aea953_prof);

        
        $__internal_505fe3071f0ee1da22782094aef75d1ef96abde9752c2b4a788f37a208416dbf->leave($__internal_505fe3071f0ee1da22782094aef75d1ef96abde9752c2b4a788f37a208416dbf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9d62da97ead340a9d868cb74e114b1b32d8aadcec45dacfd85460b57db77be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9d62da97ead340a9d868cb74e114b1b32d8aadcec45dacfd85460b57db77be->enter($__internal_7a9d62da97ead340a9d868cb74e114b1b32d8aadcec45dacfd85460b57db77be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0081d74093c4d190de6f9256130d35b219ce789dbc29cf723750931b59e6a3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0081d74093c4d190de6f9256130d35b219ce789dbc29cf723750931b59e6a3cf->enter($__internal_0081d74093c4d190de6f9256130d35b219ce789dbc29cf723750931b59e6a3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0081d74093c4d190de6f9256130d35b219ce789dbc29cf723750931b59e6a3cf->leave($__internal_0081d74093c4d190de6f9256130d35b219ce789dbc29cf723750931b59e6a3cf_prof);

        
        $__internal_7a9d62da97ead340a9d868cb74e114b1b32d8aadcec45dacfd85460b57db77be->leave($__internal_7a9d62da97ead340a9d868cb74e114b1b32d8aadcec45dacfd85460b57db77be_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca29806c33bd6f3c3da11468a67264d2e49abba4899b4edc6bad2a1a0bca7bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca29806c33bd6f3c3da11468a67264d2e49abba4899b4edc6bad2a1a0bca7bff->enter($__internal_ca29806c33bd6f3c3da11468a67264d2e49abba4899b4edc6bad2a1a0bca7bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5ac9fd5e90a88b6bd7292707e7e37c90bef76141847ee56cc00fbe595b4fc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ac9fd5e90a88b6bd7292707e7e37c90bef76141847ee56cc00fbe595b4fc88->enter($__internal_a5ac9fd5e90a88b6bd7292707e7e37c90bef76141847ee56cc00fbe595b4fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5ac9fd5e90a88b6bd7292707e7e37c90bef76141847ee56cc00fbe595b4fc88->leave($__internal_a5ac9fd5e90a88b6bd7292707e7e37c90bef76141847ee56cc00fbe595b4fc88_prof);

        
        $__internal_ca29806c33bd6f3c3da11468a67264d2e49abba4899b4edc6bad2a1a0bca7bff->leave($__internal_ca29806c33bd6f3c3da11468a67264d2e49abba4899b4edc6bad2a1a0bca7bff_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\base.html.twig");
    }
}
