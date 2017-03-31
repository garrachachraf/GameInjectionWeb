<?php

/* :games:edit.html.twig */
class __TwigTemplate_f114f05b6fe7dd24b9bd6ba4ae62be88a408746d8d225ad41e0ded5bf7d41cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:edit.html.twig", 1);
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
        $__internal_3c2d57b7ef68731fd0c6ffbd6756ba5cd4b955c4848afeb65598679237bba5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2d57b7ef68731fd0c6ffbd6756ba5cd4b955c4848afeb65598679237bba5af->enter($__internal_3c2d57b7ef68731fd0c6ffbd6756ba5cd4b955c4848afeb65598679237bba5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $__internal_79c615c0b4de7f679642083f2bb5bd1b8267e6d1b64583fcf51b502024ef2e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c615c0b4de7f679642083f2bb5bd1b8267e6d1b64583fcf51b502024ef2e5b->enter($__internal_79c615c0b4de7f679642083f2bb5bd1b8267e6d1b64583fcf51b502024ef2e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2d57b7ef68731fd0c6ffbd6756ba5cd4b955c4848afeb65598679237bba5af->leave($__internal_3c2d57b7ef68731fd0c6ffbd6756ba5cd4b955c4848afeb65598679237bba5af_prof);

        
        $__internal_79c615c0b4de7f679642083f2bb5bd1b8267e6d1b64583fcf51b502024ef2e5b->leave($__internal_79c615c0b4de7f679642083f2bb5bd1b8267e6d1b64583fcf51b502024ef2e5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15c7672c9c9b558a9fa751ba4c632e82abe7ccd98538a7bc78ca187b62a0f867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c7672c9c9b558a9fa751ba4c632e82abe7ccd98538a7bc78ca187b62a0f867->enter($__internal_15c7672c9c9b558a9fa751ba4c632e82abe7ccd98538a7bc78ca187b62a0f867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c152cab14fea9c7dd94574ff61c4bf44f28f0918cbc3081658d51c5eb6c496c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c152cab14fea9c7dd94574ff61c4bf44f28f0918cbc3081658d51c5eb6c496c6->enter($__internal_c152cab14fea9c7dd94574ff61c4bf44f28f0918cbc3081658d51c5eb6c496c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c152cab14fea9c7dd94574ff61c4bf44f28f0918cbc3081658d51c5eb6c496c6->leave($__internal_c152cab14fea9c7dd94574ff61c4bf44f28f0918cbc3081658d51c5eb6c496c6_prof);

        
        $__internal_15c7672c9c9b558a9fa751ba4c632e82abe7ccd98538a7bc78ca187b62a0f867->leave($__internal_15c7672c9c9b558a9fa751ba4c632e82abe7ccd98538a7bc78ca187b62a0f867_prof);

    }

    public function getTemplateName()
    {
        return ":games:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Game edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":games:edit.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/edit.html.twig");
    }
}
