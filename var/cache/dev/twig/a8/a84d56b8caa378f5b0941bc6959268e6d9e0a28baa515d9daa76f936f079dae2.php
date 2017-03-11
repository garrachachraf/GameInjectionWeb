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
        $__internal_754ee83b0c3557ebdea85ce989f4606aa6b074709eeaac340a851f2e0eb59b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754ee83b0c3557ebdea85ce989f4606aa6b074709eeaac340a851f2e0eb59b4b->enter($__internal_754ee83b0c3557ebdea85ce989f4606aa6b074709eeaac340a851f2e0eb59b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_38840c3ca4097ee2327a3f9ccd739aea177f21a054e1f33c3fe486e1b5c569c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38840c3ca4097ee2327a3f9ccd739aea177f21a054e1f33c3fe486e1b5c569c9->enter($__internal_38840c3ca4097ee2327a3f9ccd739aea177f21a054e1f33c3fe486e1b5c569c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_754ee83b0c3557ebdea85ce989f4606aa6b074709eeaac340a851f2e0eb59b4b->leave($__internal_754ee83b0c3557ebdea85ce989f4606aa6b074709eeaac340a851f2e0eb59b4b_prof);

        
        $__internal_38840c3ca4097ee2327a3f9ccd739aea177f21a054e1f33c3fe486e1b5c569c9->leave($__internal_38840c3ca4097ee2327a3f9ccd739aea177f21a054e1f33c3fe486e1b5c569c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77083d25b768f0eeb9c9e447b14e4bf7a88462ae991155b91c8a73329cbf4db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77083d25b768f0eeb9c9e447b14e4bf7a88462ae991155b91c8a73329cbf4db7->enter($__internal_77083d25b768f0eeb9c9e447b14e4bf7a88462ae991155b91c8a73329cbf4db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_097cbef606993a2608161090a18f6e806538a4c574926b286efa6442cea3f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097cbef606993a2608161090a18f6e806538a4c574926b286efa6442cea3f97c->enter($__internal_097cbef606993a2608161090a18f6e806538a4c574926b286efa6442cea3f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_097cbef606993a2608161090a18f6e806538a4c574926b286efa6442cea3f97c->leave($__internal_097cbef606993a2608161090a18f6e806538a4c574926b286efa6442cea3f97c_prof);

        
        $__internal_77083d25b768f0eeb9c9e447b14e4bf7a88462ae991155b91c8a73329cbf4db7->leave($__internal_77083d25b768f0eeb9c9e447b14e4bf7a88462ae991155b91c8a73329cbf4db7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b56cc2057805185c206f6d4370090dbfe42ecc72b85c4048edd32f60500c562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b56cc2057805185c206f6d4370090dbfe42ecc72b85c4048edd32f60500c562->enter($__internal_2b56cc2057805185c206f6d4370090dbfe42ecc72b85c4048edd32f60500c562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5117137a3b267cdb7bdf6ef4462704a0edebd4c8dc55e33ba85dfdc7d2926a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5117137a3b267cdb7bdf6ef4462704a0edebd4c8dc55e33ba85dfdc7d2926a1d->enter($__internal_5117137a3b267cdb7bdf6ef4462704a0edebd4c8dc55e33ba85dfdc7d2926a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5117137a3b267cdb7bdf6ef4462704a0edebd4c8dc55e33ba85dfdc7d2926a1d->leave($__internal_5117137a3b267cdb7bdf6ef4462704a0edebd4c8dc55e33ba85dfdc7d2926a1d_prof);

        
        $__internal_2b56cc2057805185c206f6d4370090dbfe42ecc72b85c4048edd32f60500c562->leave($__internal_2b56cc2057805185c206f6d4370090dbfe42ecc72b85c4048edd32f60500c562_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_71abc815dda161738d8dc5b6bc1dc7feb48bacfd19207b5d84d3b4c5c4a8e7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71abc815dda161738d8dc5b6bc1dc7feb48bacfd19207b5d84d3b4c5c4a8e7b4->enter($__internal_71abc815dda161738d8dc5b6bc1dc7feb48bacfd19207b5d84d3b4c5c4a8e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd1bbf93cf44602908288a3ac4b6e31819d4fe741481cb4afbf579eb3d1a5c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1bbf93cf44602908288a3ac4b6e31819d4fe741481cb4afbf579eb3d1a5c8e->enter($__internal_cd1bbf93cf44602908288a3ac4b6e31819d4fe741481cb4afbf579eb3d1a5c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd1bbf93cf44602908288a3ac4b6e31819d4fe741481cb4afbf579eb3d1a5c8e->leave($__internal_cd1bbf93cf44602908288a3ac4b6e31819d4fe741481cb4afbf579eb3d1a5c8e_prof);

        
        $__internal_71abc815dda161738d8dc5b6bc1dc7feb48bacfd19207b5d84d3b4c5c4a8e7b4->leave($__internal_71abc815dda161738d8dc5b6bc1dc7feb48bacfd19207b5d84d3b4c5c4a8e7b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5df25e36eaf94b57915c8fa97dc56b3b0660e778a76fd93566f9adea7c6c214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5df25e36eaf94b57915c8fa97dc56b3b0660e778a76fd93566f9adea7c6c214->enter($__internal_d5df25e36eaf94b57915c8fa97dc56b3b0660e778a76fd93566f9adea7c6c214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_450d0810fb700628333a72141cca614ead9d58b6dabe5ac338c34c8892b0811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450d0810fb700628333a72141cca614ead9d58b6dabe5ac338c34c8892b0811c->enter($__internal_450d0810fb700628333a72141cca614ead9d58b6dabe5ac338c34c8892b0811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_450d0810fb700628333a72141cca614ead9d58b6dabe5ac338c34c8892b0811c->leave($__internal_450d0810fb700628333a72141cca614ead9d58b6dabe5ac338c34c8892b0811c_prof);

        
        $__internal_d5df25e36eaf94b57915c8fa97dc56b3b0660e778a76fd93566f9adea7c6c214->leave($__internal_d5df25e36eaf94b57915c8fa97dc56b3b0660e778a76fd93566f9adea7c6c214_prof);

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
", "::base.html.twig", "/Library/WebServer/Documents/sprintweb/app/Resources/views/base.html.twig");
    }
}
