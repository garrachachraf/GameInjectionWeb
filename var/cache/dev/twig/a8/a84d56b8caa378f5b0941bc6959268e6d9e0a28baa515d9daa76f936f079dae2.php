<?php

/* ::base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
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
        $__internal_d6f3c71142e4e7f46d69408f9618342fac04ca1bac43cebdd87c0b12df57a325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f3c71142e4e7f46d69408f9618342fac04ca1bac43cebdd87c0b12df57a325->enter($__internal_d6f3c71142e4e7f46d69408f9618342fac04ca1bac43cebdd87c0b12df57a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3463ee905eab7e757f2ae4151406f9562c6354b76891a7b1ebe8df33000a56d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3463ee905eab7e757f2ae4151406f9562c6354b76891a7b1ebe8df33000a56d3->enter($__internal_3463ee905eab7e757f2ae4151406f9562c6354b76891a7b1ebe8df33000a56d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d6f3c71142e4e7f46d69408f9618342fac04ca1bac43cebdd87c0b12df57a325->leave($__internal_d6f3c71142e4e7f46d69408f9618342fac04ca1bac43cebdd87c0b12df57a325_prof);

        
        $__internal_3463ee905eab7e757f2ae4151406f9562c6354b76891a7b1ebe8df33000a56d3->leave($__internal_3463ee905eab7e757f2ae4151406f9562c6354b76891a7b1ebe8df33000a56d3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41adb76aa38095079ab0c1f195813028a1af1f68a5ba32ed947c3697d96e39ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41adb76aa38095079ab0c1f195813028a1af1f68a5ba32ed947c3697d96e39ef->enter($__internal_41adb76aa38095079ab0c1f195813028a1af1f68a5ba32ed947c3697d96e39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c80925c9f727220b7f332d1906a3d4f0273e1fb013b995d4f756ad0ab484085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c80925c9f727220b7f332d1906a3d4f0273e1fb013b995d4f756ad0ab484085->enter($__internal_9c80925c9f727220b7f332d1906a3d4f0273e1fb013b995d4f756ad0ab484085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9c80925c9f727220b7f332d1906a3d4f0273e1fb013b995d4f756ad0ab484085->leave($__internal_9c80925c9f727220b7f332d1906a3d4f0273e1fb013b995d4f756ad0ab484085_prof);

        
        $__internal_41adb76aa38095079ab0c1f195813028a1af1f68a5ba32ed947c3697d96e39ef->leave($__internal_41adb76aa38095079ab0c1f195813028a1af1f68a5ba32ed947c3697d96e39ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4444c2d2a11be19caf4b954f1fd2b006b394144175dc351785e63a17100734c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4444c2d2a11be19caf4b954f1fd2b006b394144175dc351785e63a17100734c->enter($__internal_a4444c2d2a11be19caf4b954f1fd2b006b394144175dc351785e63a17100734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ffe4cc548ee5dd7c96fbce317384335d753b54b77ca538eb670cca9c1025f119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe4cc548ee5dd7c96fbce317384335d753b54b77ca538eb670cca9c1025f119->enter($__internal_ffe4cc548ee5dd7c96fbce317384335d753b54b77ca538eb670cca9c1025f119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ffe4cc548ee5dd7c96fbce317384335d753b54b77ca538eb670cca9c1025f119->leave($__internal_ffe4cc548ee5dd7c96fbce317384335d753b54b77ca538eb670cca9c1025f119_prof);

        
        $__internal_a4444c2d2a11be19caf4b954f1fd2b006b394144175dc351785e63a17100734c->leave($__internal_a4444c2d2a11be19caf4b954f1fd2b006b394144175dc351785e63a17100734c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dfbd29002ccae9f72c88aad5c3cde19a2918f695d2e990676c43b46a4be948d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfbd29002ccae9f72c88aad5c3cde19a2918f695d2e990676c43b46a4be948d->enter($__internal_7dfbd29002ccae9f72c88aad5c3cde19a2918f695d2e990676c43b46a4be948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_083e39dead58caccec9d3670dc0dff72126340718fee4ca9b6cc0cf54e2f26ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083e39dead58caccec9d3670dc0dff72126340718fee4ca9b6cc0cf54e2f26ad->enter($__internal_083e39dead58caccec9d3670dc0dff72126340718fee4ca9b6cc0cf54e2f26ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_083e39dead58caccec9d3670dc0dff72126340718fee4ca9b6cc0cf54e2f26ad->leave($__internal_083e39dead58caccec9d3670dc0dff72126340718fee4ca9b6cc0cf54e2f26ad_prof);

        
        $__internal_7dfbd29002ccae9f72c88aad5c3cde19a2918f695d2e990676c43b46a4be948d->leave($__internal_7dfbd29002ccae9f72c88aad5c3cde19a2918f695d2e990676c43b46a4be948d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da8365773c9a65ffdcc8b7a377efcc6a6c50700ff87185a66ffe52c44b3c6796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8365773c9a65ffdcc8b7a377efcc6a6c50700ff87185a66ffe52c44b3c6796->enter($__internal_da8365773c9a65ffdcc8b7a377efcc6a6c50700ff87185a66ffe52c44b3c6796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6d6c0253046eddf3d9a22c81ff9536ad1e65c71190327f7a64d5f54aa34a02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d6c0253046eddf3d9a22c81ff9536ad1e65c71190327f7a64d5f54aa34a02c->enter($__internal_d6d6c0253046eddf3d9a22c81ff9536ad1e65c71190327f7a64d5f54aa34a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6d6c0253046eddf3d9a22c81ff9536ad1e65c71190327f7a64d5f54aa34a02c->leave($__internal_d6d6c0253046eddf3d9a22c81ff9536ad1e65c71190327f7a64d5f54aa34a02c_prof);

        
        $__internal_da8365773c9a65ffdcc8b7a377efcc6a6c50700ff87185a66ffe52c44b3c6796->leave($__internal_da8365773c9a65ffdcc8b7a377efcc6a6c50700ff87185a66ffe52c44b3c6796_prof);

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
", "::base.html.twig", "/Library/WebServer/Documents/sprintweb3/app/Resources/views/base.html.twig");
    }
}
