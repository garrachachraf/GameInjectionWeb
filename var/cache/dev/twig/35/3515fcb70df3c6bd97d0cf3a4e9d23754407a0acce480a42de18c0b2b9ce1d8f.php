<?php

/* :games:show.html.twig */
class __TwigTemplate_5363ab63128713dd591ac2d0583d9fff82da39259de2d9d5b0ead6b103f9ac53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:show.html.twig", 1);
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
        $__internal_3de0bd0d324d5edb82b8148c34d7ecee55553d3a8c2e2110beee3d4def18bcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de0bd0d324d5edb82b8148c34d7ecee55553d3a8c2e2110beee3d4def18bcb0->enter($__internal_3de0bd0d324d5edb82b8148c34d7ecee55553d3a8c2e2110beee3d4def18bcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $__internal_1772dec9453f46f1c231ebca606ab84e02ef0cca7c8c9a7ec4728de9ad31042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1772dec9453f46f1c231ebca606ab84e02ef0cca7c8c9a7ec4728de9ad31042d->enter($__internal_1772dec9453f46f1c231ebca606ab84e02ef0cca7c8c9a7ec4728de9ad31042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de0bd0d324d5edb82b8148c34d7ecee55553d3a8c2e2110beee3d4def18bcb0->leave($__internal_3de0bd0d324d5edb82b8148c34d7ecee55553d3a8c2e2110beee3d4def18bcb0_prof);

        
        $__internal_1772dec9453f46f1c231ebca606ab84e02ef0cca7c8c9a7ec4728de9ad31042d->leave($__internal_1772dec9453f46f1c231ebca606ab84e02ef0cca7c8c9a7ec4728de9ad31042d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_426d02578c83eb8b94d0eb6022f5a4a6393ab11f9b540141179bf2aea23c1fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426d02578c83eb8b94d0eb6022f5a4a6393ab11f9b540141179bf2aea23c1fc7->enter($__internal_426d02578c83eb8b94d0eb6022f5a4a6393ab11f9b540141179bf2aea23c1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4769ef5366ec5be1af623eb9277ac9ccd2af294b8f1dace73a8ab70df1c574e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4769ef5366ec5be1af623eb9277ac9ccd2af294b8f1dace73a8ab70df1c574e4->enter($__internal_4769ef5366ec5be1af623eb9277ac9ccd2af294b8f1dace73a8ab70df1c574e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4769ef5366ec5be1af623eb9277ac9ccd2af294b8f1dace73a8ab70df1c574e4->leave($__internal_4769ef5366ec5be1af623eb9277ac9ccd2af294b8f1dace73a8ab70df1c574e4_prof);

        
        $__internal_426d02578c83eb8b94d0eb6022f5a4a6393ab11f9b540141179bf2aea23c1fc7->leave($__internal_426d02578c83eb8b94d0eb6022f5a4a6393ab11f9b540141179bf2aea23c1fc7_prof);

    }

    public function getTemplateName()
    {
        return ":games:show.html.twig";
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
", ":games:show.html.twig", "C:\\wamp64\\www\\testmerge\\app/Resources\\views/games/show.html.twig");
    }
}
