<?php

/* @EloboostedFrontoffice/tournoi/edit.html.twig */
class __TwigTemplate_205fa2e8a926da868b8eb8b4784813ad8db27178a1233313dea872e509bd22b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/tournoi/edit.html.twig", 1);
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
        $__internal_53d2533fdcdcd4d480ae270195c11eb8c0ff5faacd60f79257caa8993bb87eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d2533fdcdcd4d480ae270195c11eb8c0ff5faacd60f79257caa8993bb87eac->enter($__internal_53d2533fdcdcd4d480ae270195c11eb8c0ff5faacd60f79257caa8993bb87eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $__internal_438dbc1122a13a96bd0fd71ed50f6593e86a1cd7639df1f33b3c3087fbbf5553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438dbc1122a13a96bd0fd71ed50f6593e86a1cd7639df1f33b3c3087fbbf5553->enter($__internal_438dbc1122a13a96bd0fd71ed50f6593e86a1cd7639df1f33b3c3087fbbf5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d2533fdcdcd4d480ae270195c11eb8c0ff5faacd60f79257caa8993bb87eac->leave($__internal_53d2533fdcdcd4d480ae270195c11eb8c0ff5faacd60f79257caa8993bb87eac_prof);

        
        $__internal_438dbc1122a13a96bd0fd71ed50f6593e86a1cd7639df1f33b3c3087fbbf5553->leave($__internal_438dbc1122a13a96bd0fd71ed50f6593e86a1cd7639df1f33b3c3087fbbf5553_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1792430a44739ebd3bb3bcd18a4be833bd6f0e17e8d88e05417264305d8928ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1792430a44739ebd3bb3bcd18a4be833bd6f0e17e8d88e05417264305d8928ab->enter($__internal_1792430a44739ebd3bb3bcd18a4be833bd6f0e17e8d88e05417264305d8928ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c7b588373544786a1abc28371f1ed30a7ef7e6ad3069768ca9cc452b0d6d9cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b588373544786a1abc28371f1ed30a7ef7e6ad3069768ca9cc452b0d6d9cd3->enter($__internal_c7b588373544786a1abc28371f1ed30a7ef7e6ad3069768ca9cc452b0d6d9cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_c7b588373544786a1abc28371f1ed30a7ef7e6ad3069768ca9cc452b0d6d9cd3->leave($__internal_c7b588373544786a1abc28371f1ed30a7ef7e6ad3069768ca9cc452b0d6d9cd3_prof);

        
        $__internal_1792430a44739ebd3bb3bcd18a4be833bd6f0e17e8d88e05417264305d8928ab->leave($__internal_1792430a44739ebd3bb3bcd18a4be833bd6f0e17e8d88e05417264305d8928ab_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tournoi/edit.html.twig";
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
", "@EloboostedFrontoffice/tournoi/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tournoi\\edit.html.twig");
    }
}
