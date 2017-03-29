<?php

/* EloboostedFrontofficeBundle:tournoi:edit.html.twig */
class __TwigTemplate_17b227dcf763f0eb4dba1f48389b54f50912d46468c8661c5d610ce373fdbd0f extends Twig_Template
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
        $__internal_2388a61189c21329914940a45e8b3eea0489a96ea778f1099d65bc0bf461139f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388a61189c21329914940a45e8b3eea0489a96ea778f1099d65bc0bf461139f->enter($__internal_2388a61189c21329914940a45e8b3eea0489a96ea778f1099d65bc0bf461139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $__internal_410640fa28fff32772a3a912a03b898a8ac10380538c179e7c250b0e4e45947d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410640fa28fff32772a3a912a03b898a8ac10380538c179e7c250b0e4e45947d->enter($__internal_410640fa28fff32772a3a912a03b898a8ac10380538c179e7c250b0e4e45947d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2388a61189c21329914940a45e8b3eea0489a96ea778f1099d65bc0bf461139f->leave($__internal_2388a61189c21329914940a45e8b3eea0489a96ea778f1099d65bc0bf461139f_prof);

        
        $__internal_410640fa28fff32772a3a912a03b898a8ac10380538c179e7c250b0e4e45947d->leave($__internal_410640fa28fff32772a3a912a03b898a8ac10380538c179e7c250b0e4e45947d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f9787ad4bf7624932b160b5b236decd4798537becfc327b19b5a337d163a8247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9787ad4bf7624932b160b5b236decd4798537becfc327b19b5a337d163a8247->enter($__internal_f9787ad4bf7624932b160b5b236decd4798537becfc327b19b5a337d163a8247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b48365f8d600b64b2c19e661c723b501e452f3aa3e1db4c3a03f03dd01adf5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48365f8d600b64b2c19e661c723b501e452f3aa3e1db4c3a03f03dd01adf5af->enter($__internal_b48365f8d600b64b2c19e661c723b501e452f3aa3e1db4c3a03f03dd01adf5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_b48365f8d600b64b2c19e661c723b501e452f3aa3e1db4c3a03f03dd01adf5af->leave($__internal_b48365f8d600b64b2c19e661c723b501e452f3aa3e1db4c3a03f03dd01adf5af_prof);

        
        $__internal_f9787ad4bf7624932b160b5b236decd4798537becfc327b19b5a337d163a8247->leave($__internal_f9787ad4bf7624932b160b5b236decd4798537becfc327b19b5a337d163a8247_prof);

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
", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/edit.html.twig");
    }
}
