<?php

/* :games:show.html.twig */
class __TwigTemplate_bb269ba10587a296b6aa11e905f8007bd045b508b3ab0ad2ac15c935475db26c extends Twig_Template
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
        $__internal_3bf2b34443eea939aa212bf8e5464dca212232ed3500f8e5b53e35d42950b2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf2b34443eea939aa212bf8e5464dca212232ed3500f8e5b53e35d42950b2e6->enter($__internal_3bf2b34443eea939aa212bf8e5464dca212232ed3500f8e5b53e35d42950b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $__internal_79aa6516635a997a2f38db2ad1248519f1cefd205b5b47d1171b48808e291ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aa6516635a997a2f38db2ad1248519f1cefd205b5b47d1171b48808e291ad2->enter($__internal_79aa6516635a997a2f38db2ad1248519f1cefd205b5b47d1171b48808e291ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf2b34443eea939aa212bf8e5464dca212232ed3500f8e5b53e35d42950b2e6->leave($__internal_3bf2b34443eea939aa212bf8e5464dca212232ed3500f8e5b53e35d42950b2e6_prof);

        
        $__internal_79aa6516635a997a2f38db2ad1248519f1cefd205b5b47d1171b48808e291ad2->leave($__internal_79aa6516635a997a2f38db2ad1248519f1cefd205b5b47d1171b48808e291ad2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fce22fb647941ba11302dc7c79791903b3c8ddb5dd042a3ea995aff80afa38a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce22fb647941ba11302dc7c79791903b3c8ddb5dd042a3ea995aff80afa38a3->enter($__internal_fce22fb647941ba11302dc7c79791903b3c8ddb5dd042a3ea995aff80afa38a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5f5168254a78562050dcbcbf07b3c25ec0666d45e296370b74b0cf2c7d390e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f5168254a78562050dcbcbf07b3c25ec0666d45e296370b74b0cf2c7d390e3->enter($__internal_b5f5168254a78562050dcbcbf07b3c25ec0666d45e296370b74b0cf2c7d390e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game</h1>

    <table>
        <tbody>
            <tr>
                <th>Idgames</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "idGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomgames</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "nomGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagegames</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "imageGames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Supported</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "supported", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "description", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_edit", array("id" => $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "idGames", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b5f5168254a78562050dcbcbf07b3c25ec0666d45e296370b74b0cf2c7d390e3->leave($__internal_b5f5168254a78562050dcbcbf07b3c25ec0666d45e296370b74b0cf2c7d390e3_prof);

        
        $__internal_fce22fb647941ba11302dc7c79791903b3c8ddb5dd042a3ea995aff80afa38a3->leave($__internal_fce22fb647941ba11302dc7c79791903b3c8ddb5dd042a3ea995aff80afa38a3_prof);

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
", ":games:show.html.twig", "/Applications/MAMP/htdocs/nn/app/Resources/views/games/show.html.twig");
    }
}
