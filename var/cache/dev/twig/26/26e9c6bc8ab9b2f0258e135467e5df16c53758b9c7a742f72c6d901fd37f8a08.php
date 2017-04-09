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
        $__internal_c3aac0c17ca4780b4391ee03d63270a506543e7c42dd503d8bd540acad9c6d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3aac0c17ca4780b4391ee03d63270a506543e7c42dd503d8bd540acad9c6d6d->enter($__internal_c3aac0c17ca4780b4391ee03d63270a506543e7c42dd503d8bd540acad9c6d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $__internal_4d0d0ee27cab1a89ab14a6f3ab2bbe38aa6bf7115678af8abd96f51be9c17db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0d0ee27cab1a89ab14a6f3ab2bbe38aa6bf7115678af8abd96f51be9c17db7->enter($__internal_4d0d0ee27cab1a89ab14a6f3ab2bbe38aa6bf7115678af8abd96f51be9c17db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3aac0c17ca4780b4391ee03d63270a506543e7c42dd503d8bd540acad9c6d6d->leave($__internal_c3aac0c17ca4780b4391ee03d63270a506543e7c42dd503d8bd540acad9c6d6d_prof);

        
        $__internal_4d0d0ee27cab1a89ab14a6f3ab2bbe38aa6bf7115678af8abd96f51be9c17db7->leave($__internal_4d0d0ee27cab1a89ab14a6f3ab2bbe38aa6bf7115678af8abd96f51be9c17db7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5a933ac3095324f23133643b429a08ac838217c5b02d81c43a2dfc18bf64528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a933ac3095324f23133643b429a08ac838217c5b02d81c43a2dfc18bf64528->enter($__internal_a5a933ac3095324f23133643b429a08ac838217c5b02d81c43a2dfc18bf64528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f9f9fd655b085ca760d59c4d92eb5cdd7c411f97c39c02ddd2594641de92c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9f9fd655b085ca760d59c4d92eb5cdd7c411f97c39c02ddd2594641de92c30->enter($__internal_9f9f9fd655b085ca760d59c4d92eb5cdd7c411f97c39c02ddd2594641de92c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f9f9fd655b085ca760d59c4d92eb5cdd7c411f97c39c02ddd2594641de92c30->leave($__internal_9f9f9fd655b085ca760d59c4d92eb5cdd7c411f97c39c02ddd2594641de92c30_prof);

        
        $__internal_a5a933ac3095324f23133643b429a08ac838217c5b02d81c43a2dfc18bf64528->leave($__internal_a5a933ac3095324f23133643b429a08ac838217c5b02d81c43a2dfc18bf64528_prof);

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
