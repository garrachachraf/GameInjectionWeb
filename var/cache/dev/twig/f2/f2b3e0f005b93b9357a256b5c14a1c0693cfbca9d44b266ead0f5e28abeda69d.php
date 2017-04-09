<?php

/* EloboostedFrontofficeBundle:participation:new.html.twig */
class __TwigTemplate_9ab412949aa3c448b6d42bfbc1a374f3fe8345158fc42717827b0be25616e6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:new.html.twig", 1);
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
        $__internal_c320e3eac2cca00922b6c9b7abb4abc201e0347f6652ddc5a8d8309419336efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c320e3eac2cca00922b6c9b7abb4abc201e0347f6652ddc5a8d8309419336efd->enter($__internal_c320e3eac2cca00922b6c9b7abb4abc201e0347f6652ddc5a8d8309419336efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $__internal_1889388011428dc5c08ce38798b83e3777a217b92e5b88e52ff05fbe0a7736d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1889388011428dc5c08ce38798b83e3777a217b92e5b88e52ff05fbe0a7736d9->enter($__internal_1889388011428dc5c08ce38798b83e3777a217b92e5b88e52ff05fbe0a7736d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c320e3eac2cca00922b6c9b7abb4abc201e0347f6652ddc5a8d8309419336efd->leave($__internal_c320e3eac2cca00922b6c9b7abb4abc201e0347f6652ddc5a8d8309419336efd_prof);

        
        $__internal_1889388011428dc5c08ce38798b83e3777a217b92e5b88e52ff05fbe0a7736d9->leave($__internal_1889388011428dc5c08ce38798b83e3777a217b92e5b88e52ff05fbe0a7736d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a5735080e4cc86ce33cd94a6e196c2220a1f301129caebad7eb9881d5074eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5735080e4cc86ce33cd94a6e196c2220a1f301129caebad7eb9881d5074eb7->enter($__internal_0a5735080e4cc86ce33cd94a6e196c2220a1f301129caebad7eb9881d5074eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9501e11ef117c53fd14399545bb77efae447fff580d481db8bb5bf6be34a788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9501e11ef117c53fd14399545bb77efae447fff580d481db8bb5bf6be34a788->enter($__internal_c9501e11ef117c53fd14399545bb77efae447fff580d481db8bb5bf6be34a788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c9501e11ef117c53fd14399545bb77efae447fff580d481db8bb5bf6be34a788->leave($__internal_c9501e11ef117c53fd14399545bb77efae447fff580d481db8bb5bf6be34a788_prof);

        
        $__internal_0a5735080e4cc86ce33cd94a6e196c2220a1f301129caebad7eb9881d5074eb7->leave($__internal_0a5735080e4cc86ce33cd94a6e196c2220a1f301129caebad7eb9881d5074eb7_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:new.html.twig";
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
    <h1>Participation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/new.html.twig");
    }
}
