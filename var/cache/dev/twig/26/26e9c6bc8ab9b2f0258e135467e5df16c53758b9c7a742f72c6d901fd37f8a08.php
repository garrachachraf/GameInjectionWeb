<?php

/* :games:new.html.twig */
class __TwigTemplate_7ab492cae63a9517887bb4cce3b2579807a1b97113813051c5a5feea393f3303 extends Twig_Template
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
        $__internal_0e25da0af735689c4be3ee39565b87dfb614e9d28b2cd2a2a186f674719cac1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e25da0af735689c4be3ee39565b87dfb614e9d28b2cd2a2a186f674719cac1d->enter($__internal_0e25da0af735689c4be3ee39565b87dfb614e9d28b2cd2a2a186f674719cac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $__internal_0fdd287671e754f2ea02c0607315c3deaa10303fc0021acf7876c52839a72fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdd287671e754f2ea02c0607315c3deaa10303fc0021acf7876c52839a72fc3->enter($__internal_0fdd287671e754f2ea02c0607315c3deaa10303fc0021acf7876c52839a72fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e25da0af735689c4be3ee39565b87dfb614e9d28b2cd2a2a186f674719cac1d->leave($__internal_0e25da0af735689c4be3ee39565b87dfb614e9d28b2cd2a2a186f674719cac1d_prof);

        
        $__internal_0fdd287671e754f2ea02c0607315c3deaa10303fc0021acf7876c52839a72fc3->leave($__internal_0fdd287671e754f2ea02c0607315c3deaa10303fc0021acf7876c52839a72fc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5755cc5b656ea7e0685322d13052fc543e48afddb49ca74b2c9195debe68d792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5755cc5b656ea7e0685322d13052fc543e48afddb49ca74b2c9195debe68d792->enter($__internal_5755cc5b656ea7e0685322d13052fc543e48afddb49ca74b2c9195debe68d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dff73cba5c68f58b5b054c5217c188e32e2244a81aecafac9536038097cbf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dff73cba5c68f58b5b054c5217c188e32e2244a81aecafac9536038097cbf0f->enter($__internal_2dff73cba5c68f58b5b054c5217c188e32e2244a81aecafac9536038097cbf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_2dff73cba5c68f58b5b054c5217c188e32e2244a81aecafac9536038097cbf0f->leave($__internal_2dff73cba5c68f58b5b054c5217c188e32e2244a81aecafac9536038097cbf0f_prof);

        
        $__internal_5755cc5b656ea7e0685322d13052fc543e48afddb49ca74b2c9195debe68d792->leave($__internal_5755cc5b656ea7e0685322d13052fc543e48afddb49ca74b2c9195debe68d792_prof);

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
", ":games:new.html.twig", "C:\\wamp64\\www\\testmerge\\app/Resources\\views/games/new.html.twig");
    }
}
