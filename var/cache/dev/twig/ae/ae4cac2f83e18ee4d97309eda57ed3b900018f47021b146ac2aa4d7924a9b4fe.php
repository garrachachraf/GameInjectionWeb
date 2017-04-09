<?php

/* @EloboostedBackoffice/Tournoi/edit.html.twig */
class __TwigTemplate_8c2bc7327046ad9806b4ed6e0de0afc870063b40f70eecd6f98c6df98d557694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "@EloboostedBackoffice/Tournoi/edit.html.twig", 1);
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
        $__internal_5384bcb39aa06297e1fcdc718d771bbf5fc304facaf41c9767cd89ccae004354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5384bcb39aa06297e1fcdc718d771bbf5fc304facaf41c9767cd89ccae004354->enter($__internal_5384bcb39aa06297e1fcdc718d771bbf5fc304facaf41c9767cd89ccae004354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $__internal_98a07a081439507a436c24e0f8a627d8a7f9079a2e6479518f16f5e4755a493f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a07a081439507a436c24e0f8a627d8a7f9079a2e6479518f16f5e4755a493f->enter($__internal_98a07a081439507a436c24e0f8a627d8a7f9079a2e6479518f16f5e4755a493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5384bcb39aa06297e1fcdc718d771bbf5fc304facaf41c9767cd89ccae004354->leave($__internal_5384bcb39aa06297e1fcdc718d771bbf5fc304facaf41c9767cd89ccae004354_prof);

        
        $__internal_98a07a081439507a436c24e0f8a627d8a7f9079a2e6479518f16f5e4755a493f->leave($__internal_98a07a081439507a436c24e0f8a627d8a7f9079a2e6479518f16f5e4755a493f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_c330487682fc4b75db4b6cfe7f0429fad2fe0333f926a2e864e2b5ad695ee6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c330487682fc4b75db4b6cfe7f0429fad2fe0333f926a2e864e2b5ad695ee6b7->enter($__internal_c330487682fc4b75db4b6cfe7f0429fad2fe0333f926a2e864e2b5ad695ee6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_969d42c651dc02437548049f75c6f05515131c62a7b1de4394f9343e69efe9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969d42c651dc02437548049f75c6f05515131c62a7b1de4394f9343e69efe9ad->enter($__internal_969d42c651dc02437548049f75c6f05515131c62a7b1de4394f9343e69efe9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_969d42c651dc02437548049f75c6f05515131c62a7b1de4394f9343e69efe9ad->leave($__internal_969d42c651dc02437548049f75c6f05515131c62a7b1de4394f9343e69efe9ad_prof);

        
        $__internal_c330487682fc4b75db4b6cfe7f0429fad2fe0333f926a2e864e2b5ad695ee6b7->leave($__internal_c330487682fc4b75db4b6cfe7f0429fad2fe0333f926a2e864e2b5ad695ee6b7_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/Tournoi/edit.html.twig";
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
", "@EloboostedBackoffice/Tournoi/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Tournoi\\edit.html.twig");
    }
}
