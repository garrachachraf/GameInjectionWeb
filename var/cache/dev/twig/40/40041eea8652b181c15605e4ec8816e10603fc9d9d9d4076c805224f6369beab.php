<?php

/* games/show.html.twig */
class __TwigTemplate_68018974adedde1e2f7738f65d171cfc9d36a6c210d012c7184e756b53509abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2111b1e491024a82f58a916d0cbceb0a1c632402a14a5a8c993a867dd74d272e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2111b1e491024a82f58a916d0cbceb0a1c632402a14a5a8c993a867dd74d272e->enter($__internal_2111b1e491024a82f58a916d0cbceb0a1c632402a14a5a8c993a867dd74d272e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $__internal_692c0cf8fead4dc5ee3ec9d5cafcd43c36b755df6c191846c5d9dcd7be0e8fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692c0cf8fead4dc5ee3ec9d5cafcd43c36b755df6c191846c5d9dcd7be0e8fc6->enter($__internal_692c0cf8fead4dc5ee3ec9d5cafcd43c36b755df6c191846c5d9dcd7be0e8fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2111b1e491024a82f58a916d0cbceb0a1c632402a14a5a8c993a867dd74d272e->leave($__internal_2111b1e491024a82f58a916d0cbceb0a1c632402a14a5a8c993a867dd74d272e_prof);

        
        $__internal_692c0cf8fead4dc5ee3ec9d5cafcd43c36b755df6c191846c5d9dcd7be0e8fc6->leave($__internal_692c0cf8fead4dc5ee3ec9d5cafcd43c36b755df6c191846c5d9dcd7be0e8fc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9532490779cd58a6fd2b90454263d6db8695a04fb5f51f08af67ec1c72bbd6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9532490779cd58a6fd2b90454263d6db8695a04fb5f51f08af67ec1c72bbd6a1->enter($__internal_9532490779cd58a6fd2b90454263d6db8695a04fb5f51f08af67ec1c72bbd6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20dd519f32a10d66ab931c9dcd10a3a2b88917f5d37d081a6a8fb7f904a456d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dd519f32a10d66ab931c9dcd10a3a2b88917f5d37d081a6a8fb7f904a456d5->enter($__internal_20dd519f32a10d66ab931c9dcd10a3a2b88917f5d37d081a6a8fb7f904a456d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game</h1>

    <table>
        <tbody>
            <tr>
                <th>Idgames</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "idGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomgames</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "nomGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagegames</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "imageGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Supported</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "supported", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_edit", array("id" => $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "idGames", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_20dd519f32a10d66ab931c9dcd10a3a2b88917f5d37d081a6a8fb7f904a456d5->leave($__internal_20dd519f32a10d66ab931c9dcd10a3a2b88917f5d37d081a6a8fb7f904a456d5_prof);

        
        $__internal_9532490779cd58a6fd2b90454263d6db8695a04fb5f51f08af67ec1c72bbd6a1->leave($__internal_9532490779cd58a6fd2b90454263d6db8695a04fb5f51f08af67ec1c72bbd6a1_prof);

    }

    public function getTemplateName()
    {
        return "games/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Game</h1>

    <table>
        <tbody>
            <tr>
                <th>Idgames</th>
                <td>{{ game.idGames }}</td>
            </tr>
            <tr>
                <th>Nomgames</th>
                <td>{{ game.nomGames }}</td>
            </tr>
            <tr>
                <th>Imagegames</th>
                <td>{{ game.imageGames }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ game.prix }}</td>
            </tr>
            <tr>
                <th>Supported</th>
                <td>{{ game.supported }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ game.description }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('yes_edit', { 'id': game.idGames }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "games/show.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\show.html.twig");
    }
}
