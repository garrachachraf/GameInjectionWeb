<?php

/* ::base.html.twig */
class __TwigTemplate_8f2e22d31df9c6c4aa5f521ef24cd1f6255ac1fa20809541f5919337925ccc16 extends Twig_Template
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
        $__internal_73f2e66a2175c419cce49a99bc605b4aeaa1ca82dad45f18290c2ec1383cae6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f2e66a2175c419cce49a99bc605b4aeaa1ca82dad45f18290c2ec1383cae6f->enter($__internal_73f2e66a2175c419cce49a99bc605b4aeaa1ca82dad45f18290c2ec1383cae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a426fa39a5fdf8e00d44d94a8aadf2544bdd578828512508eca6dac38f66b68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a426fa39a5fdf8e00d44d94a8aadf2544bdd578828512508eca6dac38f66b68a->enter($__internal_a426fa39a5fdf8e00d44d94a8aadf2544bdd578828512508eca6dac38f66b68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_73f2e66a2175c419cce49a99bc605b4aeaa1ca82dad45f18290c2ec1383cae6f->leave($__internal_73f2e66a2175c419cce49a99bc605b4aeaa1ca82dad45f18290c2ec1383cae6f_prof);

        
        $__internal_a426fa39a5fdf8e00d44d94a8aadf2544bdd578828512508eca6dac38f66b68a->leave($__internal_a426fa39a5fdf8e00d44d94a8aadf2544bdd578828512508eca6dac38f66b68a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e64bfc006cb25db6f375f048e1a98b4777f12bab35bd3a79f2bbdc965d20a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e64bfc006cb25db6f375f048e1a98b4777f12bab35bd3a79f2bbdc965d20a42->enter($__internal_8e64bfc006cb25db6f375f048e1a98b4777f12bab35bd3a79f2bbdc965d20a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf1bc708fc34f6f01ded3fef07ede9ed0ec5f4e95af803c4ceeeccbc96fff685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1bc708fc34f6f01ded3fef07ede9ed0ec5f4e95af803c4ceeeccbc96fff685->enter($__internal_bf1bc708fc34f6f01ded3fef07ede9ed0ec5f4e95af803c4ceeeccbc96fff685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf1bc708fc34f6f01ded3fef07ede9ed0ec5f4e95af803c4ceeeccbc96fff685->leave($__internal_bf1bc708fc34f6f01ded3fef07ede9ed0ec5f4e95af803c4ceeeccbc96fff685_prof);

        
        $__internal_8e64bfc006cb25db6f375f048e1a98b4777f12bab35bd3a79f2bbdc965d20a42->leave($__internal_8e64bfc006cb25db6f375f048e1a98b4777f12bab35bd3a79f2bbdc965d20a42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1ee25014b3cd984806d18308e0bc7d4f4ad69ff10972cfb7713acfcfc18aa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ee25014b3cd984806d18308e0bc7d4f4ad69ff10972cfb7713acfcfc18aa00->enter($__internal_c1ee25014b3cd984806d18308e0bc7d4f4ad69ff10972cfb7713acfcfc18aa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ba95b4e4cbc2643a0debc077515cff05d9c0a614bba96450dfbfc56eac6dc369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba95b4e4cbc2643a0debc077515cff05d9c0a614bba96450dfbfc56eac6dc369->enter($__internal_ba95b4e4cbc2643a0debc077515cff05d9c0a614bba96450dfbfc56eac6dc369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba95b4e4cbc2643a0debc077515cff05d9c0a614bba96450dfbfc56eac6dc369->leave($__internal_ba95b4e4cbc2643a0debc077515cff05d9c0a614bba96450dfbfc56eac6dc369_prof);

        
        $__internal_c1ee25014b3cd984806d18308e0bc7d4f4ad69ff10972cfb7713acfcfc18aa00->leave($__internal_c1ee25014b3cd984806d18308e0bc7d4f4ad69ff10972cfb7713acfcfc18aa00_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_398a6c89b89858ca90d55824c8d6a688ad966d3052c3963bd6bd8e481076a93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a6c89b89858ca90d55824c8d6a688ad966d3052c3963bd6bd8e481076a93e->enter($__internal_398a6c89b89858ca90d55824c8d6a688ad966d3052c3963bd6bd8e481076a93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2de20e50cb92b274f1fb720a756d497b6e4a8b2779f13f1c862bd9864fae317f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de20e50cb92b274f1fb720a756d497b6e4a8b2779f13f1c862bd9864fae317f->enter($__internal_2de20e50cb92b274f1fb720a756d497b6e4a8b2779f13f1c862bd9864fae317f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2de20e50cb92b274f1fb720a756d497b6e4a8b2779f13f1c862bd9864fae317f->leave($__internal_2de20e50cb92b274f1fb720a756d497b6e4a8b2779f13f1c862bd9864fae317f_prof);

        
        $__internal_398a6c89b89858ca90d55824c8d6a688ad966d3052c3963bd6bd8e481076a93e->leave($__internal_398a6c89b89858ca90d55824c8d6a688ad966d3052c3963bd6bd8e481076a93e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7913e1c38e4aa28b93c0cf38186218f1a61ca150ed030b778b58048b3cfca7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7913e1c38e4aa28b93c0cf38186218f1a61ca150ed030b778b58048b3cfca7d1->enter($__internal_7913e1c38e4aa28b93c0cf38186218f1a61ca150ed030b778b58048b3cfca7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b114650c647d8a39ea668a48915efcea020c746949c79e3ee1f95b3c8d18f833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b114650c647d8a39ea668a48915efcea020c746949c79e3ee1f95b3c8d18f833->enter($__internal_b114650c647d8a39ea668a48915efcea020c746949c79e3ee1f95b3c8d18f833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b114650c647d8a39ea668a48915efcea020c746949c79e3ee1f95b3c8d18f833->leave($__internal_b114650c647d8a39ea668a48915efcea020c746949c79e3ee1f95b3c8d18f833_prof);

        
        $__internal_7913e1c38e4aa28b93c0cf38186218f1a61ca150ed030b778b58048b3cfca7d1->leave($__internal_7913e1c38e4aa28b93c0cf38186218f1a61ca150ed030b778b58048b3cfca7d1_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\testmerge\\app/Resources\\views/base.html.twig");
    }
}
