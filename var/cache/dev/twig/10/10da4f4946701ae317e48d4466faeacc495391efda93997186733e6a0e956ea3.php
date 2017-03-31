<?php

/* @EloboostedBackoffice/Tournoi/edit.html.twig */
class __TwigTemplate_e378f710d4de5ca795d5317c8207af598208a8cdff7ed682fd51976fb8fd3cfa extends Twig_Template
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
        $__internal_f0fff7c2d6e489df4da533ea966ea2c39cc3ac911c997178054a5680a12f82d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fff7c2d6e489df4da533ea966ea2c39cc3ac911c997178054a5680a12f82d9->enter($__internal_f0fff7c2d6e489df4da533ea966ea2c39cc3ac911c997178054a5680a12f82d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $__internal_3a57b77f49934bdcd49d3939abd8f14cadde37b785674fbe72063df7f549f93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a57b77f49934bdcd49d3939abd8f14cadde37b785674fbe72063df7f549f93a->enter($__internal_3a57b77f49934bdcd49d3939abd8f14cadde37b785674fbe72063df7f549f93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0fff7c2d6e489df4da533ea966ea2c39cc3ac911c997178054a5680a12f82d9->leave($__internal_f0fff7c2d6e489df4da533ea966ea2c39cc3ac911c997178054a5680a12f82d9_prof);

        
        $__internal_3a57b77f49934bdcd49d3939abd8f14cadde37b785674fbe72063df7f549f93a->leave($__internal_3a57b77f49934bdcd49d3939abd8f14cadde37b785674fbe72063df7f549f93a_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_fc3d81330468e4d0051c0a111205d6e710db219a947c69a50319e5a6ff501c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3d81330468e4d0051c0a111205d6e710db219a947c69a50319e5a6ff501c09->enter($__internal_fc3d81330468e4d0051c0a111205d6e710db219a947c69a50319e5a6ff501c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5dbb459e7313191d012cda9acf5e408ab7f3ba74bf4d5b6aa0749f7049253c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbb459e7313191d012cda9acf5e408ab7f3ba74bf4d5b6aa0749f7049253c13->enter($__internal_5dbb459e7313191d012cda9acf5e408ab7f3ba74bf4d5b6aa0749f7049253c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5dbb459e7313191d012cda9acf5e408ab7f3ba74bf4d5b6aa0749f7049253c13->leave($__internal_5dbb459e7313191d012cda9acf5e408ab7f3ba74bf4d5b6aa0749f7049253c13_prof);

        
        $__internal_fc3d81330468e4d0051c0a111205d6e710db219a947c69a50319e5a6ff501c09->leave($__internal_fc3d81330468e4d0051c0a111205d6e710db219a947c69a50319e5a6ff501c09_prof);

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
", "@EloboostedBackoffice/Tournoi/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\Tournoi\\edit.html.twig");
    }
}
