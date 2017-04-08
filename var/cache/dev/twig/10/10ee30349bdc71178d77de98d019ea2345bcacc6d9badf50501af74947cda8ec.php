<?php

/* EloboostedBackofficeBundle:Tournoi:edit.html.twig */
class __TwigTemplate_d369dd075fa9c7cb4c3c3364461862051d9fa755cf34228a7b6b416295ef2282 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Tournoi:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15aaf2fe4899b36db85d489433e56133aea1128ebc745417e43070c953957f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15aaf2fe4899b36db85d489433e56133aea1128ebc745417e43070c953957f7c->enter($__internal_15aaf2fe4899b36db85d489433e56133aea1128ebc745417e43070c953957f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $__internal_0cab12d8ed42ebc427f61242e693c13f05f690563a780b41f5ca7f10cb0bf9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cab12d8ed42ebc427f61242e693c13f05f690563a780b41f5ca7f10cb0bf9c3->enter($__internal_0cab12d8ed42ebc427f61242e693c13f05f690563a780b41f5ca7f10cb0bf9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15aaf2fe4899b36db85d489433e56133aea1128ebc745417e43070c953957f7c->leave($__internal_15aaf2fe4899b36db85d489433e56133aea1128ebc745417e43070c953957f7c_prof);

        
        $__internal_0cab12d8ed42ebc427f61242e693c13f05f690563a780b41f5ca7f10cb0bf9c3->leave($__internal_0cab12d8ed42ebc427f61242e693c13f05f690563a780b41f5ca7f10cb0bf9c3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f16c62b80e086859e34e926434015ea2b15bfd5af9526f11b35acaefd36aa736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16c62b80e086859e34e926434015ea2b15bfd5af9526f11b35acaefd36aa736->enter($__internal_f16c62b80e086859e34e926434015ea2b15bfd5af9526f11b35acaefd36aa736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0d0426abb365e38f60f092007ca77753c7366a1055cc7558b8b054d1925a2136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0426abb365e38f60f092007ca77753c7366a1055cc7558b8b054d1925a2136->enter($__internal_0d0426abb365e38f60f092007ca77753c7366a1055cc7558b8b054d1925a2136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Tournoi edit</h1>
    ";
        // line 5
        if ( !(null === (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0d0426abb365e38f60f092007ca77753c7366a1055cc7558b8b054d1925a2136->leave($__internal_0d0426abb365e38f60f092007ca77753c7366a1055cc7558b8b054d1925a2136_prof);

        
        $__internal_f16c62b80e086859e34e926434015ea2b15bfd5af9526f11b35acaefd36aa736->leave($__internal_f16c62b80e086859e34e926434015ea2b15bfd5af9526f11b35acaefd36aa736_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Tournoi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 20,  79 => 17,  72 => 13,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}

{% block main %}
    <h1>Tournoi edit</h1>
    {% if erreur is not null %}
    {{ erreur }}
    {% endif %}
    {{ form_start(edit_form) }}

        {{ form_widget(edit_form) }}

        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedBackofficeBundle:Tournoi:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/Tournoi/edit.html.twig");
    }
}
