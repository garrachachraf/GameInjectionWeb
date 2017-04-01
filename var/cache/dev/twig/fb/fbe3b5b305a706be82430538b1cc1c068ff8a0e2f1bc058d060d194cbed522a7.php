<?php

/* games/show.html.twig */
class __TwigTemplate_c0537d7107cce0123e569db4c41b5ce02dcf1764c62b9231f1750f630f602f53 extends Twig_Template
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
        $__internal_e19049df7c1d9042f264e0bc0754ff3217d6479d1f06c84184db17f442b0a4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19049df7c1d9042f264e0bc0754ff3217d6479d1f06c84184db17f442b0a4c3->enter($__internal_e19049df7c1d9042f264e0bc0754ff3217d6479d1f06c84184db17f442b0a4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $__internal_02095bf31fb5dc9df8a98a0866c970277b40b6c182a249a567302883e3b72857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02095bf31fb5dc9df8a98a0866c970277b40b6c182a249a567302883e3b72857->enter($__internal_02095bf31fb5dc9df8a98a0866c970277b40b6c182a249a567302883e3b72857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19049df7c1d9042f264e0bc0754ff3217d6479d1f06c84184db17f442b0a4c3->leave($__internal_e19049df7c1d9042f264e0bc0754ff3217d6479d1f06c84184db17f442b0a4c3_prof);

        
        $__internal_02095bf31fb5dc9df8a98a0866c970277b40b6c182a249a567302883e3b72857->leave($__internal_02095bf31fb5dc9df8a98a0866c970277b40b6c182a249a567302883e3b72857_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e84e83691bcbce2be798a107dc455342fefec22dc8728498129d02c3020aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e84e83691bcbce2be798a107dc455342fefec22dc8728498129d02c3020aae->enter($__internal_d9e84e83691bcbce2be798a107dc455342fefec22dc8728498129d02c3020aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af11f35b1c373baceee4ceac6708f7d9c6d74186ca69ed3a33df1c099823480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af11f35b1c373baceee4ceac6708f7d9c6d74186ca69ed3a33df1c099823480d->enter($__internal_af11f35b1c373baceee4ceac6708f7d9c6d74186ca69ed3a33df1c099823480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af11f35b1c373baceee4ceac6708f7d9c6d74186ca69ed3a33df1c099823480d->leave($__internal_af11f35b1c373baceee4ceac6708f7d9c6d74186ca69ed3a33df1c099823480d_prof);

        
        $__internal_d9e84e83691bcbce2be798a107dc455342fefec22dc8728498129d02c3020aae->leave($__internal_d9e84e83691bcbce2be798a107dc455342fefec22dc8728498129d02c3020aae_prof);

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
", "games/show.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\games\\show.html.twig");
    }
}
