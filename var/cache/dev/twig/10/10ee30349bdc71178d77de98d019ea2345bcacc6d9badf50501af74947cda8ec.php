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
        $__internal_84244cec999ce439cbd7717438c7cb15fa3c15a86a507c8a37dba28d08e6bba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84244cec999ce439cbd7717438c7cb15fa3c15a86a507c8a37dba28d08e6bba7->enter($__internal_84244cec999ce439cbd7717438c7cb15fa3c15a86a507c8a37dba28d08e6bba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $__internal_22725e11ed06c50c0dd5a21d12c2c03354b33d54d2f9d0cfd236c674d3633693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22725e11ed06c50c0dd5a21d12c2c03354b33d54d2f9d0cfd236c674d3633693->enter($__internal_22725e11ed06c50c0dd5a21d12c2c03354b33d54d2f9d0cfd236c674d3633693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84244cec999ce439cbd7717438c7cb15fa3c15a86a507c8a37dba28d08e6bba7->leave($__internal_84244cec999ce439cbd7717438c7cb15fa3c15a86a507c8a37dba28d08e6bba7_prof);

        
        $__internal_22725e11ed06c50c0dd5a21d12c2c03354b33d54d2f9d0cfd236c674d3633693->leave($__internal_22725e11ed06c50c0dd5a21d12c2c03354b33d54d2f9d0cfd236c674d3633693_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_305069c7aa2a3ae0a3a0f1254cf64e02d4de6be82c28bdb56a02f394b4a6ebbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305069c7aa2a3ae0a3a0f1254cf64e02d4de6be82c28bdb56a02f394b4a6ebbf->enter($__internal_305069c7aa2a3ae0a3a0f1254cf64e02d4de6be82c28bdb56a02f394b4a6ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d32cf12e69d604fcfdc423aded5f22f44b3db76ed49866d1e44f34ff558de57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32cf12e69d604fcfdc423aded5f22f44b3db76ed49866d1e44f34ff558de57e->enter($__internal_d32cf12e69d604fcfdc423aded5f22f44b3db76ed49866d1e44f34ff558de57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_d32cf12e69d604fcfdc423aded5f22f44b3db76ed49866d1e44f34ff558de57e->leave($__internal_d32cf12e69d604fcfdc423aded5f22f44b3db76ed49866d1e44f34ff558de57e_prof);

        
        $__internal_305069c7aa2a3ae0a3a0f1254cf64e02d4de6be82c28bdb56a02f394b4a6ebbf->leave($__internal_305069c7aa2a3ae0a3a0f1254cf64e02d4de6be82c28bdb56a02f394b4a6ebbf_prof);

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
