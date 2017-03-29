<?php

/* ::base.html.twig */
class __TwigTemplate_24b59280ff59f5629e7cbc8a69f72a2c1f34e92e092a859f088665548f2ec62a extends Twig_Template
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
        $__internal_53efa4ece76330873a8e3fd02cc8ee89095941a5dedfa286b3b40874bd0f9add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53efa4ece76330873a8e3fd02cc8ee89095941a5dedfa286b3b40874bd0f9add->enter($__internal_53efa4ece76330873a8e3fd02cc8ee89095941a5dedfa286b3b40874bd0f9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a4ac70880c0b43f249ea6a29ebac623b98f3ee55a0cc6ea69a1e393a4ab932ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ac70880c0b43f249ea6a29ebac623b98f3ee55a0cc6ea69a1e393a4ab932ab->enter($__internal_a4ac70880c0b43f249ea6a29ebac623b98f3ee55a0cc6ea69a1e393a4ab932ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_53efa4ece76330873a8e3fd02cc8ee89095941a5dedfa286b3b40874bd0f9add->leave($__internal_53efa4ece76330873a8e3fd02cc8ee89095941a5dedfa286b3b40874bd0f9add_prof);

        
        $__internal_a4ac70880c0b43f249ea6a29ebac623b98f3ee55a0cc6ea69a1e393a4ab932ab->leave($__internal_a4ac70880c0b43f249ea6a29ebac623b98f3ee55a0cc6ea69a1e393a4ab932ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6bb69a4fd45d1f26e77c0614a710343559d14e407286a566f2fc50879ca209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6bb69a4fd45d1f26e77c0614a710343559d14e407286a566f2fc50879ca209->enter($__internal_3e6bb69a4fd45d1f26e77c0614a710343559d14e407286a566f2fc50879ca209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f259f5dafb42e896e0d0d035e2adc7ad1e46d1da8031facbd1c65027e6e30fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f259f5dafb42e896e0d0d035e2adc7ad1e46d1da8031facbd1c65027e6e30fb9->enter($__internal_f259f5dafb42e896e0d0d035e2adc7ad1e46d1da8031facbd1c65027e6e30fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f259f5dafb42e896e0d0d035e2adc7ad1e46d1da8031facbd1c65027e6e30fb9->leave($__internal_f259f5dafb42e896e0d0d035e2adc7ad1e46d1da8031facbd1c65027e6e30fb9_prof);

        
        $__internal_3e6bb69a4fd45d1f26e77c0614a710343559d14e407286a566f2fc50879ca209->leave($__internal_3e6bb69a4fd45d1f26e77c0614a710343559d14e407286a566f2fc50879ca209_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae2e5a0b04d6852188e5035abaf2538d1c1628aa1579d0f1a0380baee3b8630c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2e5a0b04d6852188e5035abaf2538d1c1628aa1579d0f1a0380baee3b8630c->enter($__internal_ae2e5a0b04d6852188e5035abaf2538d1c1628aa1579d0f1a0380baee3b8630c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_276787d4979fff3b45c5dcb2dee6e6cce49c4db2d5edf214e530046b005ecfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276787d4979fff3b45c5dcb2dee6e6cce49c4db2d5edf214e530046b005ecfce->enter($__internal_276787d4979fff3b45c5dcb2dee6e6cce49c4db2d5edf214e530046b005ecfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_276787d4979fff3b45c5dcb2dee6e6cce49c4db2d5edf214e530046b005ecfce->leave($__internal_276787d4979fff3b45c5dcb2dee6e6cce49c4db2d5edf214e530046b005ecfce_prof);

        
        $__internal_ae2e5a0b04d6852188e5035abaf2538d1c1628aa1579d0f1a0380baee3b8630c->leave($__internal_ae2e5a0b04d6852188e5035abaf2538d1c1628aa1579d0f1a0380baee3b8630c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9d36974ad066ae8765c12ae1348137eac1819ddf6981c0a4cec58de9eaedd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d36974ad066ae8765c12ae1348137eac1819ddf6981c0a4cec58de9eaedd52->enter($__internal_a9d36974ad066ae8765c12ae1348137eac1819ddf6981c0a4cec58de9eaedd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f7c871fe1c14703ac612cde0d143873573c923be4928c7a1f93b10074fcc088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7c871fe1c14703ac612cde0d143873573c923be4928c7a1f93b10074fcc088->enter($__internal_0f7c871fe1c14703ac612cde0d143873573c923be4928c7a1f93b10074fcc088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f7c871fe1c14703ac612cde0d143873573c923be4928c7a1f93b10074fcc088->leave($__internal_0f7c871fe1c14703ac612cde0d143873573c923be4928c7a1f93b10074fcc088_prof);

        
        $__internal_a9d36974ad066ae8765c12ae1348137eac1819ddf6981c0a4cec58de9eaedd52->leave($__internal_a9d36974ad066ae8765c12ae1348137eac1819ddf6981c0a4cec58de9eaedd52_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faadee476dcd14183f760ff47fd053cc171f5a6fe6802492117d1c0d1a2671cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faadee476dcd14183f760ff47fd053cc171f5a6fe6802492117d1c0d1a2671cc->enter($__internal_faadee476dcd14183f760ff47fd053cc171f5a6fe6802492117d1c0d1a2671cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5166e1f885850954e9232367c6c0733a305f2cd886d4f634e4f88a8e2fb92e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5166e1f885850954e9232367c6c0733a305f2cd886d4f634e4f88a8e2fb92e15->enter($__internal_5166e1f885850954e9232367c6c0733a305f2cd886d4f634e4f88a8e2fb92e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5166e1f885850954e9232367c6c0733a305f2cd886d4f634e4f88a8e2fb92e15->leave($__internal_5166e1f885850954e9232367c6c0733a305f2cd886d4f634e4f88a8e2fb92e15_prof);

        
        $__internal_faadee476dcd14183f760ff47fd053cc171f5a6fe6802492117d1c0d1a2671cc->leave($__internal_faadee476dcd14183f760ff47fd053cc171f5a6fe6802492117d1c0d1a2671cc_prof);

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
