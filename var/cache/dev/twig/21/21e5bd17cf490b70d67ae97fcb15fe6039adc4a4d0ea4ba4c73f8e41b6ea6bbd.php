<?php

/* base.html.twig */
class __TwigTemplate_1b112a055c5b143fd2623b5a94eec0695d0bce6ea8c61ae5098d2a71db46ffc3 extends Twig_Template
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
        $__internal_2e89b0bd1985a1b2e8c85c63d0d2eaa47b7e08470f59884c92e28dec28244205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e89b0bd1985a1b2e8c85c63d0d2eaa47b7e08470f59884c92e28dec28244205->enter($__internal_2e89b0bd1985a1b2e8c85c63d0d2eaa47b7e08470f59884c92e28dec28244205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_aa80f385dd9bdab688f69b5a2a04f57dcd54ff22140c98edd87e4c0dbb4bdebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa80f385dd9bdab688f69b5a2a04f57dcd54ff22140c98edd87e4c0dbb4bdebc->enter($__internal_aa80f385dd9bdab688f69b5a2a04f57dcd54ff22140c98edd87e4c0dbb4bdebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2e89b0bd1985a1b2e8c85c63d0d2eaa47b7e08470f59884c92e28dec28244205->leave($__internal_2e89b0bd1985a1b2e8c85c63d0d2eaa47b7e08470f59884c92e28dec28244205_prof);

        
        $__internal_aa80f385dd9bdab688f69b5a2a04f57dcd54ff22140c98edd87e4c0dbb4bdebc->leave($__internal_aa80f385dd9bdab688f69b5a2a04f57dcd54ff22140c98edd87e4c0dbb4bdebc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c98a76e603dcf3f99c18f10ca8a2ece10c1cd254df0b6d5a2de7590e21156d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c98a76e603dcf3f99c18f10ca8a2ece10c1cd254df0b6d5a2de7590e21156d4->enter($__internal_3c98a76e603dcf3f99c18f10ca8a2ece10c1cd254df0b6d5a2de7590e21156d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dc07a8ee375404a5ea1806baefd4636a15e78c68212ed5356b470d3e0629e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc07a8ee375404a5ea1806baefd4636a15e78c68212ed5356b470d3e0629e48->enter($__internal_8dc07a8ee375404a5ea1806baefd4636a15e78c68212ed5356b470d3e0629e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8dc07a8ee375404a5ea1806baefd4636a15e78c68212ed5356b470d3e0629e48->leave($__internal_8dc07a8ee375404a5ea1806baefd4636a15e78c68212ed5356b470d3e0629e48_prof);

        
        $__internal_3c98a76e603dcf3f99c18f10ca8a2ece10c1cd254df0b6d5a2de7590e21156d4->leave($__internal_3c98a76e603dcf3f99c18f10ca8a2ece10c1cd254df0b6d5a2de7590e21156d4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90237391018155bda727ea3a31ffe97577e2b8d021371a0d83b11fa31a95fa90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90237391018155bda727ea3a31ffe97577e2b8d021371a0d83b11fa31a95fa90->enter($__internal_90237391018155bda727ea3a31ffe97577e2b8d021371a0d83b11fa31a95fa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a0fa48bc12b3f4ccb06d3c639f497df94e705fa9cd110682095435973bc2ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0fa48bc12b3f4ccb06d3c639f497df94e705fa9cd110682095435973bc2ac6->enter($__internal_5a0fa48bc12b3f4ccb06d3c639f497df94e705fa9cd110682095435973bc2ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a0fa48bc12b3f4ccb06d3c639f497df94e705fa9cd110682095435973bc2ac6->leave($__internal_5a0fa48bc12b3f4ccb06d3c639f497df94e705fa9cd110682095435973bc2ac6_prof);

        
        $__internal_90237391018155bda727ea3a31ffe97577e2b8d021371a0d83b11fa31a95fa90->leave($__internal_90237391018155bda727ea3a31ffe97577e2b8d021371a0d83b11fa31a95fa90_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b73e7f2f97efd9684f194fa52a0b1805d84a87e54c69674737fd7dac9e50e3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73e7f2f97efd9684f194fa52a0b1805d84a87e54c69674737fd7dac9e50e3e0->enter($__internal_b73e7f2f97efd9684f194fa52a0b1805d84a87e54c69674737fd7dac9e50e3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45dc119c83b1dc485dd201a69347203d6c3e26b6c99adc563bd6bc587bbf7842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dc119c83b1dc485dd201a69347203d6c3e26b6c99adc563bd6bc587bbf7842->enter($__internal_45dc119c83b1dc485dd201a69347203d6c3e26b6c99adc563bd6bc587bbf7842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45dc119c83b1dc485dd201a69347203d6c3e26b6c99adc563bd6bc587bbf7842->leave($__internal_45dc119c83b1dc485dd201a69347203d6c3e26b6c99adc563bd6bc587bbf7842_prof);

        
        $__internal_b73e7f2f97efd9684f194fa52a0b1805d84a87e54c69674737fd7dac9e50e3e0->leave($__internal_b73e7f2f97efd9684f194fa52a0b1805d84a87e54c69674737fd7dac9e50e3e0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0cd5342cf278a61d0c48660d11d0e204b38ee678ef7d020d8982cd9128eb140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cd5342cf278a61d0c48660d11d0e204b38ee678ef7d020d8982cd9128eb140->enter($__internal_f0cd5342cf278a61d0c48660d11d0e204b38ee678ef7d020d8982cd9128eb140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_41211c7e42cdc75177985bae69cf9c1bea7263896e4b5c111b8f4472458f34ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41211c7e42cdc75177985bae69cf9c1bea7263896e4b5c111b8f4472458f34ed->enter($__internal_41211c7e42cdc75177985bae69cf9c1bea7263896e4b5c111b8f4472458f34ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_41211c7e42cdc75177985bae69cf9c1bea7263896e4b5c111b8f4472458f34ed->leave($__internal_41211c7e42cdc75177985bae69cf9c1bea7263896e4b5c111b8f4472458f34ed_prof);

        
        $__internal_f0cd5342cf278a61d0c48660d11d0e204b38ee678ef7d020d8982cd9128eb140->leave($__internal_f0cd5342cf278a61d0c48660d11d0e204b38ee678ef7d020d8982cd9128eb140_prof);

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
", "base.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\base.html.twig");
    }
}
