<?php

/* :games:show.html.twig */
class __TwigTemplate_de6c0b143a908641f4ce7be4cbaf58cb3eed3edf1d1ed4d1bf153a493f5ced11 extends Twig_Template
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
        $__internal_b40e5b330364077d67cf35c8d8976a825a042c8330ac0da8711222059a0cc874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40e5b330364077d67cf35c8d8976a825a042c8330ac0da8711222059a0cc874->enter($__internal_b40e5b330364077d67cf35c8d8976a825a042c8330ac0da8711222059a0cc874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $__internal_ee977daee3687470385d131f971288e3ea8feba577b36698f32371a42cbd065c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee977daee3687470385d131f971288e3ea8feba577b36698f32371a42cbd065c->enter($__internal_ee977daee3687470385d131f971288e3ea8feba577b36698f32371a42cbd065c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b40e5b330364077d67cf35c8d8976a825a042c8330ac0da8711222059a0cc874->leave($__internal_b40e5b330364077d67cf35c8d8976a825a042c8330ac0da8711222059a0cc874_prof);

        
        $__internal_ee977daee3687470385d131f971288e3ea8feba577b36698f32371a42cbd065c->leave($__internal_ee977daee3687470385d131f971288e3ea8feba577b36698f32371a42cbd065c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e4ac7d393a4c13479201b3fb7564cbc5414901c1dbaea7810a1fd9e77503284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4ac7d393a4c13479201b3fb7564cbc5414901c1dbaea7810a1fd9e77503284->enter($__internal_8e4ac7d393a4c13479201b3fb7564cbc5414901c1dbaea7810a1fd9e77503284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36e6d3831f476c435f050732520ef56d357b92d07036b7af324df6cf36ce5416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e6d3831f476c435f050732520ef56d357b92d07036b7af324df6cf36ce5416->enter($__internal_36e6d3831f476c435f050732520ef56d357b92d07036b7af324df6cf36ce5416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36e6d3831f476c435f050732520ef56d357b92d07036b7af324df6cf36ce5416->leave($__internal_36e6d3831f476c435f050732520ef56d357b92d07036b7af324df6cf36ce5416_prof);

        
        $__internal_8e4ac7d393a4c13479201b3fb7564cbc5414901c1dbaea7810a1fd9e77503284->leave($__internal_8e4ac7d393a4c13479201b3fb7564cbc5414901c1dbaea7810a1fd9e77503284_prof);

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
", ":games:show.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/show.html.twig");
    }
}