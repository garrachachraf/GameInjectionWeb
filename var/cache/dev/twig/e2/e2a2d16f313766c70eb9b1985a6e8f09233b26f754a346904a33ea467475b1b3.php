<?php

/* EloboostedFrontofficeBundle:tournoi:show.html.twig */
class __TwigTemplate_74d9321697fe2aa1624619627ccb5be6ab09be8a24634cc1de73b3f577b675e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:show.html.twig", 1);
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
        $__internal_87a36f875afd3ebaf016ebdc43ae5803685d86d97d960f6467c51bbcb30fdb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a36f875afd3ebaf016ebdc43ae5803685d86d97d960f6467c51bbcb30fdb68->enter($__internal_87a36f875afd3ebaf016ebdc43ae5803685d86d97d960f6467c51bbcb30fdb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:show.html.twig"));

        $__internal_576fc27ccc37f3224fc0aba69256b66bb65b9251edbd3e5bc230ed22a201f661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576fc27ccc37f3224fc0aba69256b66bb65b9251edbd3e5bc230ed22a201f661->enter($__internal_576fc27ccc37f3224fc0aba69256b66bb65b9251edbd3e5bc230ed22a201f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a36f875afd3ebaf016ebdc43ae5803685d86d97d960f6467c51bbcb30fdb68->leave($__internal_87a36f875afd3ebaf016ebdc43ae5803685d86d97d960f6467c51bbcb30fdb68_prof);

        
        $__internal_576fc27ccc37f3224fc0aba69256b66bb65b9251edbd3e5bc230ed22a201f661->leave($__internal_576fc27ccc37f3224fc0aba69256b66bb65b9251edbd3e5bc230ed22a201f661_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f905f17343b33d4a687ef696a16dfae28e9e60ded3791eda741713793957e85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f905f17343b33d4a687ef696a16dfae28e9e60ded3791eda741713793957e85c->enter($__internal_f905f17343b33d4a687ef696a16dfae28e9e60ded3791eda741713793957e85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c0eb5b0435c30bce538cbc9b794ae3e75957f52b083079b6c99dc77858145bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eb5b0435c30bce538cbc9b794ae3e75957f52b083079b6c99dc77858145bb5->enter($__internal_c0eb5b0435c30bce538cbc9b794ae3e75957f52b083079b6c99dc77858145bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Tournoi</h1>

    <table border=\"1\">
        <tbody>
            <tr>
                <th>Idtournoi</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "startDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "endDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "endDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Reward1</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reward2</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reward3</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward3", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixparjoueur</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "prixParJoueur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbrjoueur</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagetournoi</th>
                <td><img src=\"data:image/png;base64,";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "imageTournoi", array()), "html", null, true);
        echo "\"> </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_edit", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c0eb5b0435c30bce538cbc9b794ae3e75957f52b083079b6c99dc77858145bb5->leave($__internal_c0eb5b0435c30bce538cbc9b794ae3e75957f52b083079b6c99dc77858145bb5_prof);

        
        $__internal_f905f17343b33d4a687ef696a16dfae28e9e60ded3791eda741713793957e85c->leave($__internal_f905f17343b33d4a687ef696a16dfae28e9e60ded3791eda741713793957e85c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 65,  153 => 63,  147 => 60,  141 => 57,  131 => 50,  124 => 46,  117 => 42,  110 => 38,  103 => 34,  96 => 30,  89 => 26,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tournoi</h1>

    <table border=\"1\">
        <tbody>
            <tr>
                <th>Idtournoi</th>
                <td>{{ tournoi.idTournoi }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ tournoi.nom }}</td>
            </tr>
            <tr>
                <th>Startdate</th>
                <td>{% if tournoi.startDate %}{{ tournoi.startDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Enddate</th>
                <td>{% if tournoi.endDate %}{{ tournoi.endDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Reward1</th>
                <td>{{ tournoi.reward1 }}</td>
            </tr>
            <tr>
                <th>Reward2</th>
                <td>{{ tournoi.reward2 }}</td>
            </tr>
            <tr>
                <th>Reward3</th>
                <td>{{ tournoi.reward3 }}</td>
            </tr>
            <tr>
                <th>Prixparjoueur</th>
                <td>{{ tournoi.prixParJoueur }}</td>
            </tr>
            <tr>
                <th>Nbrjoueur</th>
                <td>{{ tournoi.nbrJoueur }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ tournoi.etat }}</td>
            </tr>
            <tr>
                <th>Imagetournoi</th>
                <td><img src=\"data:image/png;base64,{{ tournoi.imageTournoi }}\"> </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tournoi_edit', { 'id': tournoi.idTournoi }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:show.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/FrontofficeBundle/Resources/views/tournoi/show.html.twig");
    }
}
