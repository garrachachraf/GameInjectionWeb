<?php

/* games/new.html.twig */
class __TwigTemplate_8ee25e16e66c741d42090a36f22d3b4d0dd79cb996482e8635143038951a6613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/new.html.twig", 1);
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
        $__internal_872ef768a789576ecdcdb079b67d67a4feaf2505a6f3d026b60e12c431014767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872ef768a789576ecdcdb079b67d67a4feaf2505a6f3d026b60e12c431014767->enter($__internal_872ef768a789576ecdcdb079b67d67a4feaf2505a6f3d026b60e12c431014767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $__internal_243b113d773550f586a28537be4d7bd4da181f92238023c532d33e2194335303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243b113d773550f586a28537be4d7bd4da181f92238023c532d33e2194335303->enter($__internal_243b113d773550f586a28537be4d7bd4da181f92238023c532d33e2194335303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872ef768a789576ecdcdb079b67d67a4feaf2505a6f3d026b60e12c431014767->leave($__internal_872ef768a789576ecdcdb079b67d67a4feaf2505a6f3d026b60e12c431014767_prof);

        
        $__internal_243b113d773550f586a28537be4d7bd4da181f92238023c532d33e2194335303->leave($__internal_243b113d773550f586a28537be4d7bd4da181f92238023c532d33e2194335303_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08ff75debcc6c1d4700c2444c1b9459a5ea5fe9bdf3cd0abbb548a574d3bfe50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ff75debcc6c1d4700c2444c1b9459a5ea5fe9bdf3cd0abbb548a574d3bfe50->enter($__internal_08ff75debcc6c1d4700c2444c1b9459a5ea5fe9bdf3cd0abbb548a574d3bfe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37c0c5ad845464a137e02ca3521ff3a602c348eaebaa6d5de436122a2ad57c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c0c5ad845464a137e02ca3521ff3a602c348eaebaa6d5de436122a2ad57c76->enter($__internal_37c0c5ad845464a137e02ca3521ff3a602c348eaebaa6d5de436122a2ad57c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37c0c5ad845464a137e02ca3521ff3a602c348eaebaa6d5de436122a2ad57c76->leave($__internal_37c0c5ad845464a137e02ca3521ff3a602c348eaebaa6d5de436122a2ad57c76_prof);

        
        $__internal_08ff75debcc6c1d4700c2444c1b9459a5ea5fe9bdf3cd0abbb548a574d3bfe50->leave($__internal_08ff75debcc6c1d4700c2444c1b9459a5ea5fe9bdf3cd0abbb548a574d3bfe50_prof);

    }

    public function getTemplateName()
    {
        return "games/new.html.twig";
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
", "games/new.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\new.html.twig");
    }
}
