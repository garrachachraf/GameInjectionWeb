<?php

/* EloboostedFrontofficeBundle:tournoi:edit.html.twig */
class __TwigTemplate_5204ac177055fb4a78786d8993b83ae779a5894c442e25c216ab452e5c93e782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c66240cc75eec4688c37afe9cfc2dbabe71a7d9046ea11b82fac79623afe13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c66240cc75eec4688c37afe9cfc2dbabe71a7d9046ea11b82fac79623afe13b->enter($__internal_8c66240cc75eec4688c37afe9cfc2dbabe71a7d9046ea11b82fac79623afe13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $__internal_e8799cdb4d0f8530c8f2a084034d3755d6b311eea11cabe650d4390f0b070768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8799cdb4d0f8530c8f2a084034d3755d6b311eea11cabe650d4390f0b070768->enter($__internal_e8799cdb4d0f8530c8f2a084034d3755d6b311eea11cabe650d4390f0b070768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c66240cc75eec4688c37afe9cfc2dbabe71a7d9046ea11b82fac79623afe13b->leave($__internal_8c66240cc75eec4688c37afe9cfc2dbabe71a7d9046ea11b82fac79623afe13b_prof);

        
        $__internal_e8799cdb4d0f8530c8f2a084034d3755d6b311eea11cabe650d4390f0b070768->leave($__internal_e8799cdb4d0f8530c8f2a084034d3755d6b311eea11cabe650d4390f0b070768_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_53103d0f09426d42c6e2f0c665efec8882a31f65f5471a5c78dc51d16738fe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53103d0f09426d42c6e2f0c665efec8882a31f65f5471a5c78dc51d16738fe5b->enter($__internal_53103d0f09426d42c6e2f0c665efec8882a31f65f5471a5c78dc51d16738fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dffb9f53d34b8515b4efb89ba8f9f8d599bbf9e61205e6c70206d6d5ea15d4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffb9f53d34b8515b4efb89ba8f9f8d599bbf9e61205e6c70206d6d5ea15d4ab->enter($__internal_dffb9f53d34b8515b4efb89ba8f9f8d599bbf9e61205e6c70206d6d5ea15d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_dffb9f53d34b8515b4efb89ba8f9f8d599bbf9e61205e6c70206d6d5ea15d4ab->leave($__internal_dffb9f53d34b8515b4efb89ba8f9f8d599bbf9e61205e6c70206d6d5ea15d4ab_prof);

        
        $__internal_53103d0f09426d42c6e2f0c665efec8882a31f65f5471a5c78dc51d16738fe5b->leave($__internal_53103d0f09426d42c6e2f0c665efec8882a31f65f5471a5c78dc51d16738fe5b_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:edit.html.twig";
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
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}

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
", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/edit.html.twig");
    }
}
