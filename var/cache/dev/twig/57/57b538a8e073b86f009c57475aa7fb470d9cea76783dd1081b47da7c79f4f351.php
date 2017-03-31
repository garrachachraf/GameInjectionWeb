<?php

/* EloboostedFrontofficeBundle:participation:new.html.twig */
class __TwigTemplate_878cac2870933d306951c44da0d62531de9d414af61cfa8e42b749baf6be3dec extends Twig_Template
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
        $__internal_166d37eef9da413954c0d41059352fd89bff9474f44606b6b5ca65331981d25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166d37eef9da413954c0d41059352fd89bff9474f44606b6b5ca65331981d25e->enter($__internal_166d37eef9da413954c0d41059352fd89bff9474f44606b6b5ca65331981d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $__internal_672f6a3aa9ca86adc804db97a50f86b75c1b48f825fe5f1fd6aeda50ff1fa94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672f6a3aa9ca86adc804db97a50f86b75c1b48f825fe5f1fd6aeda50ff1fa94d->enter($__internal_672f6a3aa9ca86adc804db97a50f86b75c1b48f825fe5f1fd6aeda50ff1fa94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166d37eef9da413954c0d41059352fd89bff9474f44606b6b5ca65331981d25e->leave($__internal_166d37eef9da413954c0d41059352fd89bff9474f44606b6b5ca65331981d25e_prof);

        
        $__internal_672f6a3aa9ca86adc804db97a50f86b75c1b48f825fe5f1fd6aeda50ff1fa94d->leave($__internal_672f6a3aa9ca86adc804db97a50f86b75c1b48f825fe5f1fd6aeda50ff1fa94d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e84ab59bf231e676ca2bffc7aa838df8e6f592795204c77fdff0253f7c7ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e84ab59bf231e676ca2bffc7aa838df8e6f592795204c77fdff0253f7c7ff1->enter($__internal_71e84ab59bf231e676ca2bffc7aa838df8e6f592795204c77fdff0253f7c7ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c9c295a7a76a366d022e17bc3880deab483cb85fce290f64e444d158a89a12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9c295a7a76a366d022e17bc3880deab483cb85fce290f64e444d158a89a12b->enter($__internal_3c9c295a7a76a366d022e17bc3880deab483cb85fce290f64e444d158a89a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c9c295a7a76a366d022e17bc3880deab483cb85fce290f64e444d158a89a12b->leave($__internal_3c9c295a7a76a366d022e17bc3880deab483cb85fce290f64e444d158a89a12b_prof);

        
        $__internal_71e84ab59bf231e676ca2bffc7aa838df8e6f592795204c77fdff0253f7c7ff1->leave($__internal_71e84ab59bf231e676ca2bffc7aa838df8e6f592795204c77fdff0253f7c7ff1_prof);

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
", "EloboostedFrontofficeBundle:participation:new.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/new.html.twig");
    }
}
