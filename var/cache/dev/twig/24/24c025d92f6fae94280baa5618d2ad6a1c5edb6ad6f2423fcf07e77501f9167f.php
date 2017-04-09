<?php

/* @EloboostedFrontoffice/participation/new.html.twig */
class __TwigTemplate_9e8dc398c226b5b6604b6dc7e2debe013be41781c9d26d96696aad5a84821fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/new.html.twig", 1);
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
        $__internal_13335d3ea2bf2308ab2aba738db4d42c0fa374eb23a45adc1b59e294fd77856e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13335d3ea2bf2308ab2aba738db4d42c0fa374eb23a45adc1b59e294fd77856e->enter($__internal_13335d3ea2bf2308ab2aba738db4d42c0fa374eb23a45adc1b59e294fd77856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $__internal_32e2bcf56b798a66d97d609c638a00ed8da1cec19ab5b5b3d8992f90d166fd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e2bcf56b798a66d97d609c638a00ed8da1cec19ab5b5b3d8992f90d166fd47->enter($__internal_32e2bcf56b798a66d97d609c638a00ed8da1cec19ab5b5b3d8992f90d166fd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13335d3ea2bf2308ab2aba738db4d42c0fa374eb23a45adc1b59e294fd77856e->leave($__internal_13335d3ea2bf2308ab2aba738db4d42c0fa374eb23a45adc1b59e294fd77856e_prof);

        
        $__internal_32e2bcf56b798a66d97d609c638a00ed8da1cec19ab5b5b3d8992f90d166fd47->leave($__internal_32e2bcf56b798a66d97d609c638a00ed8da1cec19ab5b5b3d8992f90d166fd47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a1617671cff53668d14a5bc09566ca993605e292ccb7d8522cd6069c848f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a1617671cff53668d14a5bc09566ca993605e292ccb7d8522cd6069c848f90->enter($__internal_21a1617671cff53668d14a5bc09566ca993605e292ccb7d8522cd6069c848f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00ea3194b673948c0dfa715822dfac4e9b1689336098d56425ff9124dfb7bdca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ea3194b673948c0dfa715822dfac4e9b1689336098d56425ff9124dfb7bdca->enter($__internal_00ea3194b673948c0dfa715822dfac4e9b1689336098d56425ff9124dfb7bdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00ea3194b673948c0dfa715822dfac4e9b1689336098d56425ff9124dfb7bdca->leave($__internal_00ea3194b673948c0dfa715822dfac4e9b1689336098d56425ff9124dfb7bdca_prof);

        
        $__internal_21a1617671cff53668d14a5bc09566ca993605e292ccb7d8522cd6069c848f90->leave($__internal_21a1617671cff53668d14a5bc09566ca993605e292ccb7d8522cd6069c848f90_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/new.html.twig";
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
", "@EloboostedFrontoffice/participation/new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\new.html.twig");
    }
}
