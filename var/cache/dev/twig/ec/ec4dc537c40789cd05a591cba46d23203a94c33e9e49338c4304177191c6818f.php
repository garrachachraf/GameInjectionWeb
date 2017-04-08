<?php

/* games/index.html.twig */
class __TwigTemplate_30691284d5fe2535a28a064532fff53980e2c0109df701a2231f5b6ada40db16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/index.html.twig", 1);
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
        $__internal_fdc30eb1480851612a55acce2126ecf59424ab070cf71fd85f830e07735bd0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc30eb1480851612a55acce2126ecf59424ab070cf71fd85f830e07735bd0fc->enter($__internal_fdc30eb1480851612a55acce2126ecf59424ab070cf71fd85f830e07735bd0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/index.html.twig"));

        $__internal_3f6e88d53a20dd9f072262efc05125dcbe897cba1e843aecabf848701b59d7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6e88d53a20dd9f072262efc05125dcbe897cba1e843aecabf848701b59d7b0->enter($__internal_3f6e88d53a20dd9f072262efc05125dcbe897cba1e843aecabf848701b59d7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdc30eb1480851612a55acce2126ecf59424ab070cf71fd85f830e07735bd0fc->leave($__internal_fdc30eb1480851612a55acce2126ecf59424ab070cf71fd85f830e07735bd0fc_prof);

        
        $__internal_3f6e88d53a20dd9f072262efc05125dcbe897cba1e843aecabf848701b59d7b0->leave($__internal_3f6e88d53a20dd9f072262efc05125dcbe897cba1e843aecabf848701b59d7b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66c195de615e6e169450709cb581657d61f8455852cd2d3955a708bc2ac2e5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c195de615e6e169450709cb581657d61f8455852cd2d3955a708bc2ac2e5e9->enter($__internal_66c195de615e6e169450709cb581657d61f8455852cd2d3955a708bc2ac2e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c70b11e29a090207f0c4dbf851ec59e3bd355977733f0c51bfa209902707440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c70b11e29a090207f0c4dbf851ec59e3bd355977733f0c51bfa209902707440->enter($__internal_0c70b11e29a090207f0c4dbf851ec59e3bd355977733f0c51bfa209902707440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Games list</h1>

    <table>
        <thead>
            <tr>
                <th>Idgames</th>
                <th>Nomgames</th>
                <th>Imagegames</th>
                <th>Prix</th>
                <th>Supported</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "idGames", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "nomGames", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "imageGames", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "supported", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_edit", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_new");
        echo "\">Create a new game</a>
        </li>
    </ul>
";
        
        $__internal_0c70b11e29a090207f0c4dbf851ec59e3bd355977733f0c51bfa209902707440->leave($__internal_0c70b11e29a090207f0c4dbf851ec59e3bd355977733f0c51bfa209902707440_prof);

        
        $__internal_66c195de615e6e169450709cb581657d61f8455852cd2d3955a708bc2ac2e5e9->leave($__internal_66c195de615e6e169450709cb581657d61f8455852cd2d3955a708bc2ac2e5e9_prof);

    }

    public function getTemplateName()
    {
        return "games/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Games list</h1>

    <table>
        <thead>
            <tr>
                <th>Idgames</th>
                <th>Nomgames</th>
                <th>Imagegames</th>
                <th>Prix</th>
                <th>Supported</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for game in games %}
            <tr>
                <td><a href=\"{{ path('yes_show', { 'id': game.idGames }) }}\">{{ game.idGames }}</a></td>
                <td>{{ game.nomGames }}</td>
                <td>{{ game.imageGames }}</td>
                <td>{{ game.prix }}</td>
                <td>{{ game.supported }}</td>
                <td>{{ game.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('yes_show', { 'id': game.idGames }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('yes_edit', { 'id': game.idGames }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('yes_new') }}\">Create a new game</a>
        </li>
    </ul>
{% endblock %}
", "games/index.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\index.html.twig");
    }
}