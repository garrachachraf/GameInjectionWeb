<?php

/* @EloboostedFrontoffice/tournoi/edit.html.twig */
class __TwigTemplate_e2f02b43ce54e18b51d3b4a68bafa08dd71c06401d4b3d365222dea48db6cfab extends Twig_Template
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
        $__internal_56dae1c3ced82e19060dd87aa273fe559b6425ea68cc7a965abd7278d1974363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dae1c3ced82e19060dd87aa273fe559b6425ea68cc7a965abd7278d1974363->enter($__internal_56dae1c3ced82e19060dd87aa273fe559b6425ea68cc7a965abd7278d1974363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $__internal_fce1cea215a1ef853403c6b1727459b45332cbd0924f4a43ff0967e91b207f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce1cea215a1ef853403c6b1727459b45332cbd0924f4a43ff0967e91b207f27->enter($__internal_fce1cea215a1ef853403c6b1727459b45332cbd0924f4a43ff0967e91b207f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56dae1c3ced82e19060dd87aa273fe559b6425ea68cc7a965abd7278d1974363->leave($__internal_56dae1c3ced82e19060dd87aa273fe559b6425ea68cc7a965abd7278d1974363_prof);

        
        $__internal_fce1cea215a1ef853403c6b1727459b45332cbd0924f4a43ff0967e91b207f27->leave($__internal_fce1cea215a1ef853403c6b1727459b45332cbd0924f4a43ff0967e91b207f27_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f34c5b68015250633cda4306da710d35259e158568af5fa42c3bbf14de8eaa5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34c5b68015250633cda4306da710d35259e158568af5fa42c3bbf14de8eaa5e->enter($__internal_f34c5b68015250633cda4306da710d35259e158568af5fa42c3bbf14de8eaa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5107506c02e2419df1f6b73be014d09a206ede662509f1341da901e1b3ce0f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5107506c02e2419df1f6b73be014d09a206ede662509f1341da901e1b3ce0f28->enter($__internal_5107506c02e2419df1f6b73be014d09a206ede662509f1341da901e1b3ce0f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5107506c02e2419df1f6b73be014d09a206ede662509f1341da901e1b3ce0f28->leave($__internal_5107506c02e2419df1f6b73be014d09a206ede662509f1341da901e1b3ce0f28_prof);

        
        $__internal_f34c5b68015250633cda4306da710d35259e158568af5fa42c3bbf14de8eaa5e->leave($__internal_f34c5b68015250633cda4306da710d35259e158568af5fa42c3bbf14de8eaa5e_prof);

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
", "@EloboostedFrontoffice/tournoi/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tournoi\\edit.html.twig");
    }
}
