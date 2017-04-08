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
        $__internal_40d581041d9c1147d214a6e3aee274a868fd5f872bdaf2c20e2fe07e36adf21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d581041d9c1147d214a6e3aee274a868fd5f872bdaf2c20e2fe07e36adf21d->enter($__internal_40d581041d9c1147d214a6e3aee274a868fd5f872bdaf2c20e2fe07e36adf21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9fa2740b214d14590b4f6b44757d5510759f1902eddfed0ca64c6e6b380c98b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa2740b214d14590b4f6b44757d5510759f1902eddfed0ca64c6e6b380c98b3->enter($__internal_9fa2740b214d14590b4f6b44757d5510759f1902eddfed0ca64c6e6b380c98b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40d581041d9c1147d214a6e3aee274a868fd5f872bdaf2c20e2fe07e36adf21d->leave($__internal_40d581041d9c1147d214a6e3aee274a868fd5f872bdaf2c20e2fe07e36adf21d_prof);

        
        $__internal_9fa2740b214d14590b4f6b44757d5510759f1902eddfed0ca64c6e6b380c98b3->leave($__internal_9fa2740b214d14590b4f6b44757d5510759f1902eddfed0ca64c6e6b380c98b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8973bb269cd57e07c437b2ffccb6dbccdabc1c480ccd2ed8782f72226b1363f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8973bb269cd57e07c437b2ffccb6dbccdabc1c480ccd2ed8782f72226b1363f5->enter($__internal_8973bb269cd57e07c437b2ffccb6dbccdabc1c480ccd2ed8782f72226b1363f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c452db950336970d3e8baf196944eee05029935aee236c2c44e1ed3d964b6038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c452db950336970d3e8baf196944eee05029935aee236c2c44e1ed3d964b6038->enter($__internal_c452db950336970d3e8baf196944eee05029935aee236c2c44e1ed3d964b6038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c452db950336970d3e8baf196944eee05029935aee236c2c44e1ed3d964b6038->leave($__internal_c452db950336970d3e8baf196944eee05029935aee236c2c44e1ed3d964b6038_prof);

        
        $__internal_8973bb269cd57e07c437b2ffccb6dbccdabc1c480ccd2ed8782f72226b1363f5->leave($__internal_8973bb269cd57e07c437b2ffccb6dbccdabc1c480ccd2ed8782f72226b1363f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5b76ba9eeeb0955dd72c1e6322959eaaa8c6dec270d22ed8dd030a52ad4061f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b76ba9eeeb0955dd72c1e6322959eaaa8c6dec270d22ed8dd030a52ad4061f->enter($__internal_e5b76ba9eeeb0955dd72c1e6322959eaaa8c6dec270d22ed8dd030a52ad4061f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7337d2c0c792646a06ae2087f3439de52ebbcf7e1a65e6978150530ddf28bb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7337d2c0c792646a06ae2087f3439de52ebbcf7e1a65e6978150530ddf28bb62->enter($__internal_7337d2c0c792646a06ae2087f3439de52ebbcf7e1a65e6978150530ddf28bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7337d2c0c792646a06ae2087f3439de52ebbcf7e1a65e6978150530ddf28bb62->leave($__internal_7337d2c0c792646a06ae2087f3439de52ebbcf7e1a65e6978150530ddf28bb62_prof);

        
        $__internal_e5b76ba9eeeb0955dd72c1e6322959eaaa8c6dec270d22ed8dd030a52ad4061f->leave($__internal_e5b76ba9eeeb0955dd72c1e6322959eaaa8c6dec270d22ed8dd030a52ad4061f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee030bfdd0cbe644ecb1fcb0d44ce35e07daa2d46e3486d789dce4f6c6d28a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee030bfdd0cbe644ecb1fcb0d44ce35e07daa2d46e3486d789dce4f6c6d28a12->enter($__internal_ee030bfdd0cbe644ecb1fcb0d44ce35e07daa2d46e3486d789dce4f6c6d28a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a00c466a0a2bb6738e8ff8b9958be3a3b112165654c9d6d390601757b18cd0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00c466a0a2bb6738e8ff8b9958be3a3b112165654c9d6d390601757b18cd0c6->enter($__internal_a00c466a0a2bb6738e8ff8b9958be3a3b112165654c9d6d390601757b18cd0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a00c466a0a2bb6738e8ff8b9958be3a3b112165654c9d6d390601757b18cd0c6->leave($__internal_a00c466a0a2bb6738e8ff8b9958be3a3b112165654c9d6d390601757b18cd0c6_prof);

        
        $__internal_ee030bfdd0cbe644ecb1fcb0d44ce35e07daa2d46e3486d789dce4f6c6d28a12->leave($__internal_ee030bfdd0cbe644ecb1fcb0d44ce35e07daa2d46e3486d789dce4f6c6d28a12_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec27b18c9f19cf10d8c7e27bea9d8ca53a7211722f3dbeb5a65a58404c071206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec27b18c9f19cf10d8c7e27bea9d8ca53a7211722f3dbeb5a65a58404c071206->enter($__internal_ec27b18c9f19cf10d8c7e27bea9d8ca53a7211722f3dbeb5a65a58404c071206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ec67f3d71a4597ab7f6005df5b33bcf887e1ecbdc3795b67e1b52159046a38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec67f3d71a4597ab7f6005df5b33bcf887e1ecbdc3795b67e1b52159046a38b->enter($__internal_1ec67f3d71a4597ab7f6005df5b33bcf887e1ecbdc3795b67e1b52159046a38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ec67f3d71a4597ab7f6005df5b33bcf887e1ecbdc3795b67e1b52159046a38b->leave($__internal_1ec67f3d71a4597ab7f6005df5b33bcf887e1ecbdc3795b67e1b52159046a38b_prof);

        
        $__internal_ec27b18c9f19cf10d8c7e27bea9d8ca53a7211722f3dbeb5a65a58404c071206->leave($__internal_ec27b18c9f19cf10d8c7e27bea9d8ca53a7211722f3dbeb5a65a58404c071206_prof);

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
