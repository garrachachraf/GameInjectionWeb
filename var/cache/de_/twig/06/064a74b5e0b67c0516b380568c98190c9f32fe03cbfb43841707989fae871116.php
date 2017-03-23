<?php

/* ::base.html.twig */
class __TwigTemplate_2dfb870c0c9ee21830f3852bbbe4de3a2c819b3bc1d9bacdf57fa07825a91bb1 extends Twig_Template
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
        $__internal_f5fc98da1ff70790b89735d82179824625eec92d6d74a4be5fc9d5cdbfe99df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fc98da1ff70790b89735d82179824625eec92d6d74a4be5fc9d5cdbfe99df6->enter($__internal_f5fc98da1ff70790b89735d82179824625eec92d6d74a4be5fc9d5cdbfe99df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b06b9066678ec81a9a2240a933d6a3318ee672c12e0c46636126f029348ee738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06b9066678ec81a9a2240a933d6a3318ee672c12e0c46636126f029348ee738->enter($__internal_b06b9066678ec81a9a2240a933d6a3318ee672c12e0c46636126f029348ee738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f5fc98da1ff70790b89735d82179824625eec92d6d74a4be5fc9d5cdbfe99df6->leave($__internal_f5fc98da1ff70790b89735d82179824625eec92d6d74a4be5fc9d5cdbfe99df6_prof);

        
        $__internal_b06b9066678ec81a9a2240a933d6a3318ee672c12e0c46636126f029348ee738->leave($__internal_b06b9066678ec81a9a2240a933d6a3318ee672c12e0c46636126f029348ee738_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1877380c0c51ee2d408fc37b53c3c4085dbece24a4db37e0c0660b6f2fe13e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1877380c0c51ee2d408fc37b53c3c4085dbece24a4db37e0c0660b6f2fe13e20->enter($__internal_1877380c0c51ee2d408fc37b53c3c4085dbece24a4db37e0c0660b6f2fe13e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43863421297be16fb7c45bbd2c5db92b81a310dc79ab76d83971b4d611e14348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43863421297be16fb7c45bbd2c5db92b81a310dc79ab76d83971b4d611e14348->enter($__internal_43863421297be16fb7c45bbd2c5db92b81a310dc79ab76d83971b4d611e14348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_43863421297be16fb7c45bbd2c5db92b81a310dc79ab76d83971b4d611e14348->leave($__internal_43863421297be16fb7c45bbd2c5db92b81a310dc79ab76d83971b4d611e14348_prof);

        
        $__internal_1877380c0c51ee2d408fc37b53c3c4085dbece24a4db37e0c0660b6f2fe13e20->leave($__internal_1877380c0c51ee2d408fc37b53c3c4085dbece24a4db37e0c0660b6f2fe13e20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e16f4c03f34b4a7d3c34990a0541591e0d3dcc2da686c70e5e33227377b2e7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16f4c03f34b4a7d3c34990a0541591e0d3dcc2da686c70e5e33227377b2e7b7->enter($__internal_e16f4c03f34b4a7d3c34990a0541591e0d3dcc2da686c70e5e33227377b2e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dc501356311342930b97fabf9f62f89979727f38dd650ef750b260e80bcefa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc501356311342930b97fabf9f62f89979727f38dd650ef750b260e80bcefa85->enter($__internal_dc501356311342930b97fabf9f62f89979727f38dd650ef750b260e80bcefa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc501356311342930b97fabf9f62f89979727f38dd650ef750b260e80bcefa85->leave($__internal_dc501356311342930b97fabf9f62f89979727f38dd650ef750b260e80bcefa85_prof);

        
        $__internal_e16f4c03f34b4a7d3c34990a0541591e0d3dcc2da686c70e5e33227377b2e7b7->leave($__internal_e16f4c03f34b4a7d3c34990a0541591e0d3dcc2da686c70e5e33227377b2e7b7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7362828db4d44a66e1d74075de301a147f690b9117f0b14ca8f31d0793651386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7362828db4d44a66e1d74075de301a147f690b9117f0b14ca8f31d0793651386->enter($__internal_7362828db4d44a66e1d74075de301a147f690b9117f0b14ca8f31d0793651386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8974ef6ecd81f5efaeff4b1f51f26c052338d45c3f801e1a97969dc8df28becf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8974ef6ecd81f5efaeff4b1f51f26c052338d45c3f801e1a97969dc8df28becf->enter($__internal_8974ef6ecd81f5efaeff4b1f51f26c052338d45c3f801e1a97969dc8df28becf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8974ef6ecd81f5efaeff4b1f51f26c052338d45c3f801e1a97969dc8df28becf->leave($__internal_8974ef6ecd81f5efaeff4b1f51f26c052338d45c3f801e1a97969dc8df28becf_prof);

        
        $__internal_7362828db4d44a66e1d74075de301a147f690b9117f0b14ca8f31d0793651386->leave($__internal_7362828db4d44a66e1d74075de301a147f690b9117f0b14ca8f31d0793651386_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3106d0b8b35e15262b8638bfa49aa106297cf06ef715e009acf6e237af996a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3106d0b8b35e15262b8638bfa49aa106297cf06ef715e009acf6e237af996a0->enter($__internal_b3106d0b8b35e15262b8638bfa49aa106297cf06ef715e009acf6e237af996a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_744c980267638ff8cf6f0504d3b7cc61376dc5b8ab5b13fd685692493b0ed167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744c980267638ff8cf6f0504d3b7cc61376dc5b8ab5b13fd685692493b0ed167->enter($__internal_744c980267638ff8cf6f0504d3b7cc61376dc5b8ab5b13fd685692493b0ed167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_744c980267638ff8cf6f0504d3b7cc61376dc5b8ab5b13fd685692493b0ed167->leave($__internal_744c980267638ff8cf6f0504d3b7cc61376dc5b8ab5b13fd685692493b0ed167_prof);

        
        $__internal_b3106d0b8b35e15262b8638bfa49aa106297cf06ef715e009acf6e237af996a0->leave($__internal_b3106d0b8b35e15262b8638bfa49aa106297cf06ef715e009acf6e237af996a0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/base.html.twig");
    }
}
