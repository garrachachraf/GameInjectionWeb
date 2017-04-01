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
        $__internal_a15f8b718d60bd876153242393b82a42e56b54d520889e7331e17e653603d45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15f8b718d60bd876153242393b82a42e56b54d520889e7331e17e653603d45c->enter($__internal_a15f8b718d60bd876153242393b82a42e56b54d520889e7331e17e653603d45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $__internal_f27963bbaad37a0c4c05d88c4d5e0c79d504c0fea41ec153661bb66b47952b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27963bbaad37a0c4c05d88c4d5e0c79d504c0fea41ec153661bb66b47952b01->enter($__internal_f27963bbaad37a0c4c05d88c4d5e0c79d504c0fea41ec153661bb66b47952b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/Tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15f8b718d60bd876153242393b82a42e56b54d520889e7331e17e653603d45c->leave($__internal_a15f8b718d60bd876153242393b82a42e56b54d520889e7331e17e653603d45c_prof);

        
        $__internal_f27963bbaad37a0c4c05d88c4d5e0c79d504c0fea41ec153661bb66b47952b01->leave($__internal_f27963bbaad37a0c4c05d88c4d5e0c79d504c0fea41ec153661bb66b47952b01_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_5bbd6c3a29175304ffe22e963ddef94ab80d968dd52e83dc2140b1daed567ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbd6c3a29175304ffe22e963ddef94ab80d968dd52e83dc2140b1daed567ce3->enter($__internal_5bbd6c3a29175304ffe22e963ddef94ab80d968dd52e83dc2140b1daed567ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ddb7a5112edc9b508831890f35da08eb59cf290caa1b6fd3060794c47c489d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb7a5112edc9b508831890f35da08eb59cf290caa1b6fd3060794c47c489d11->enter($__internal_ddb7a5112edc9b508831890f35da08eb59cf290caa1b6fd3060794c47c489d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ddb7a5112edc9b508831890f35da08eb59cf290caa1b6fd3060794c47c489d11->leave($__internal_ddb7a5112edc9b508831890f35da08eb59cf290caa1b6fd3060794c47c489d11_prof);

        
        $__internal_5bbd6c3a29175304ffe22e963ddef94ab80d968dd52e83dc2140b1daed567ce3->leave($__internal_5bbd6c3a29175304ffe22e963ddef94ab80d968dd52e83dc2140b1daed567ce3_prof);

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
