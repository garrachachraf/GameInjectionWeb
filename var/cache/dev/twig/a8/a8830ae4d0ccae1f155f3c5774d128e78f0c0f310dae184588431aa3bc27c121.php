<?php

/* EloboostedBackofficeBundle:Tournoi:edit.html.twig */
class __TwigTemplate_676af6e418c4254f029ff046dcf1a05b9d90a0eed545f82f4d5ac66625b538c7 extends Twig_Template
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
        $__internal_c9670656cfdd4dde347b979c3b0e29e042bf5bc01e6a19ed742206da348f0523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9670656cfdd4dde347b979c3b0e29e042bf5bc01e6a19ed742206da348f0523->enter($__internal_c9670656cfdd4dde347b979c3b0e29e042bf5bc01e6a19ed742206da348f0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $__internal_b1f44997c6956f8c85668b0b8ffef44ee6babb6edb5734cd20bcc648ebdfa7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f44997c6956f8c85668b0b8ffef44ee6babb6edb5734cd20bcc648ebdfa7fc->enter($__internal_b1f44997c6956f8c85668b0b8ffef44ee6babb6edb5734cd20bcc648ebdfa7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9670656cfdd4dde347b979c3b0e29e042bf5bc01e6a19ed742206da348f0523->leave($__internal_c9670656cfdd4dde347b979c3b0e29e042bf5bc01e6a19ed742206da348f0523_prof);

        
        $__internal_b1f44997c6956f8c85668b0b8ffef44ee6babb6edb5734cd20bcc648ebdfa7fc->leave($__internal_b1f44997c6956f8c85668b0b8ffef44ee6babb6edb5734cd20bcc648ebdfa7fc_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7362e52891cb8b6b259b653b9602c3d4e775f7c77360de19eb7e3bd16fcda8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7362e52891cb8b6b259b653b9602c3d4e775f7c77360de19eb7e3bd16fcda8f8->enter($__internal_7362e52891cb8b6b259b653b9602c3d4e775f7c77360de19eb7e3bd16fcda8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1aa0d5bccd3b1f33439e9457981d86ed03752f6f9359eeb6a99c3c08d0dd2d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa0d5bccd3b1f33439e9457981d86ed03752f6f9359eeb6a99c3c08d0dd2d78->enter($__internal_1aa0d5bccd3b1f33439e9457981d86ed03752f6f9359eeb6a99c3c08d0dd2d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_1aa0d5bccd3b1f33439e9457981d86ed03752f6f9359eeb6a99c3c08d0dd2d78->leave($__internal_1aa0d5bccd3b1f33439e9457981d86ed03752f6f9359eeb6a99c3c08d0dd2d78_prof);

        
        $__internal_7362e52891cb8b6b259b653b9602c3d4e775f7c77360de19eb7e3bd16fcda8f8->leave($__internal_7362e52891cb8b6b259b653b9602c3d4e775f7c77360de19eb7e3bd16fcda8f8_prof);

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
", "EloboostedBackofficeBundle:Tournoi:edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Tournoi/edit.html.twig");
    }
}
