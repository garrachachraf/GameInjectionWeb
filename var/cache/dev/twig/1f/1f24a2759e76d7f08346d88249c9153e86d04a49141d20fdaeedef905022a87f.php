<?php

/* :games:index.html.twig */
class __TwigTemplate_8d8c6abdc906761b5190c50b0bad47dbf3cc20219333b30f8f46572742569881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:index.html.twig", 1);
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
        $__internal_0999597370ee321694b85ebd3e18f17c6ae9d3fb227c5f223d6eaea55ca89d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0999597370ee321694b85ebd3e18f17c6ae9d3fb227c5f223d6eaea55ca89d8b->enter($__internal_0999597370ee321694b85ebd3e18f17c6ae9d3fb227c5f223d6eaea55ca89d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:index.html.twig"));

        $__internal_3d71cd40cd442c1128fcec940de14f445a013c229711018d0d619e0e41bf4e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d71cd40cd442c1128fcec940de14f445a013c229711018d0d619e0e41bf4e6b->enter($__internal_3d71cd40cd442c1128fcec940de14f445a013c229711018d0d619e0e41bf4e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0999597370ee321694b85ebd3e18f17c6ae9d3fb227c5f223d6eaea55ca89d8b->leave($__internal_0999597370ee321694b85ebd3e18f17c6ae9d3fb227c5f223d6eaea55ca89d8b_prof);

        
        $__internal_3d71cd40cd442c1128fcec940de14f445a013c229711018d0d619e0e41bf4e6b->leave($__internal_3d71cd40cd442c1128fcec940de14f445a013c229711018d0d619e0e41bf4e6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9e07ffd97f65f12352a80f5cf2f5379418f5aa9e633a959a7a8d83200a2cf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e07ffd97f65f12352a80f5cf2f5379418f5aa9e633a959a7a8d83200a2cf3e->enter($__internal_c9e07ffd97f65f12352a80f5cf2f5379418f5aa9e633a959a7a8d83200a2cf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dae4eb0e31041acbb70b385843ad888edf8c383d3d19022751dff1ecb99eb18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae4eb0e31041acbb70b385843ad888edf8c383d3d19022751dff1ecb99eb18a->enter($__internal_dae4eb0e31041acbb70b385843ad888edf8c383d3d19022751dff1ecb99eb18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dae4eb0e31041acbb70b385843ad888edf8c383d3d19022751dff1ecb99eb18a->leave($__internal_dae4eb0e31041acbb70b385843ad888edf8c383d3d19022751dff1ecb99eb18a_prof);

        
        $__internal_c9e07ffd97f65f12352a80f5cf2f5379418f5aa9e633a959a7a8d83200a2cf3e->leave($__internal_c9e07ffd97f65f12352a80f5cf2f5379418f5aa9e633a959a7a8d83200a2cf3e_prof);

    }

    public function getTemplateName()
    {
        return ":games:index.html.twig";
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
", ":games:index.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/index.html.twig");
    }
}
