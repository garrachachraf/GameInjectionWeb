<?php

/* :games:new.html.twig */
class __TwigTemplate_75288858bfc2a62a23852f9509515e9ca7f9a167e4e1eb0b489f2d2e9d3bf859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_837fa80fa01ea60963bbc91d2aab13e3ab140679e3511aee300bbe59ba95dc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837fa80fa01ea60963bbc91d2aab13e3ab140679e3511aee300bbe59ba95dc9c->enter($__internal_837fa80fa01ea60963bbc91d2aab13e3ab140679e3511aee300bbe59ba95dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $__internal_ec81c0ce1e93ece16fa7ded6adf39dc2d76aa596f4ae1db2367cf7790190a626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec81c0ce1e93ece16fa7ded6adf39dc2d76aa596f4ae1db2367cf7790190a626->enter($__internal_ec81c0ce1e93ece16fa7ded6adf39dc2d76aa596f4ae1db2367cf7790190a626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837fa80fa01ea60963bbc91d2aab13e3ab140679e3511aee300bbe59ba95dc9c->leave($__internal_837fa80fa01ea60963bbc91d2aab13e3ab140679e3511aee300bbe59ba95dc9c_prof);

        
        $__internal_ec81c0ce1e93ece16fa7ded6adf39dc2d76aa596f4ae1db2367cf7790190a626->leave($__internal_ec81c0ce1e93ece16fa7ded6adf39dc2d76aa596f4ae1db2367cf7790190a626_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2c8021804525d955f09f6bd24eb7612ff1fa808f43fb2c5634f59db117e5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2c8021804525d955f09f6bd24eb7612ff1fa808f43fb2c5634f59db117e5c4->enter($__internal_cf2c8021804525d955f09f6bd24eb7612ff1fa808f43fb2c5634f59db117e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c16d8fc41863e340f5aafdfa8150b9bf6e45a7c0a05193db2f47e6cd15b2e2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16d8fc41863e340f5aafdfa8150b9bf6e45a7c0a05193db2f47e6cd15b2e2c3->enter($__internal_c16d8fc41863e340f5aafdfa8150b9bf6e45a7c0a05193db2f47e6cd15b2e2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c16d8fc41863e340f5aafdfa8150b9bf6e45a7c0a05193db2f47e6cd15b2e2c3->leave($__internal_c16d8fc41863e340f5aafdfa8150b9bf6e45a7c0a05193db2f47e6cd15b2e2c3_prof);

        
        $__internal_cf2c8021804525d955f09f6bd24eb7612ff1fa808f43fb2c5634f59db117e5c4->leave($__internal_cf2c8021804525d955f09f6bd24eb7612ff1fa808f43fb2c5634f59db117e5c4_prof);

    }

    public function getTemplateName()
    {
        return ":games:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Game creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":games:new.html.twig", "/Applications/MAMP/htdocs/nn/app/Resources/views/games/new.html.twig");
    }
}
