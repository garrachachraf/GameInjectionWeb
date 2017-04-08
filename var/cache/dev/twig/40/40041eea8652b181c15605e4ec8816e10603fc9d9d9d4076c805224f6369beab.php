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
        $__internal_95ce92316e0da585c20237d6fac6ce0797b51e4360b471cb4d7b82061b3dd395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ce92316e0da585c20237d6fac6ce0797b51e4360b471cb4d7b82061b3dd395->enter($__internal_95ce92316e0da585c20237d6fac6ce0797b51e4360b471cb4d7b82061b3dd395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $__internal_16eba68d53193fb8330ab99012009c4b13b74e674062a2447726593802747549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16eba68d53193fb8330ab99012009c4b13b74e674062a2447726593802747549->enter($__internal_16eba68d53193fb8330ab99012009c4b13b74e674062a2447726593802747549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ce92316e0da585c20237d6fac6ce0797b51e4360b471cb4d7b82061b3dd395->leave($__internal_95ce92316e0da585c20237d6fac6ce0797b51e4360b471cb4d7b82061b3dd395_prof);

        
        $__internal_16eba68d53193fb8330ab99012009c4b13b74e674062a2447726593802747549->leave($__internal_16eba68d53193fb8330ab99012009c4b13b74e674062a2447726593802747549_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c761d78ab7e22815dceea1d378ccdd3913a798733405aa68a58e45f1ed9904f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c761d78ab7e22815dceea1d378ccdd3913a798733405aa68a58e45f1ed9904f->enter($__internal_5c761d78ab7e22815dceea1d378ccdd3913a798733405aa68a58e45f1ed9904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_350869a53a23329079510cbf2338863154d24ed1394b31ec998262a16aecc79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350869a53a23329079510cbf2338863154d24ed1394b31ec998262a16aecc79d->enter($__internal_350869a53a23329079510cbf2338863154d24ed1394b31ec998262a16aecc79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_350869a53a23329079510cbf2338863154d24ed1394b31ec998262a16aecc79d->leave($__internal_350869a53a23329079510cbf2338863154d24ed1394b31ec998262a16aecc79d_prof);

        
        $__internal_5c761d78ab7e22815dceea1d378ccdd3913a798733405aa68a58e45f1ed9904f->leave($__internal_5c761d78ab7e22815dceea1d378ccdd3913a798733405aa68a58e45f1ed9904f_prof);

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
