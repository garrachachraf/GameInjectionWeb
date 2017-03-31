<?php

/* games/index.html.twig */
class __TwigTemplate_90b281055b21b9706523858ac2f481c049e778ee8e59c81ca1f1f7c5bdfc88fe extends Twig_Template
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
        $__internal_befe7dcc4c7b42142cbe9b19cc118352e600e703d7e69b8ee5aed27048290991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befe7dcc4c7b42142cbe9b19cc118352e600e703d7e69b8ee5aed27048290991->enter($__internal_befe7dcc4c7b42142cbe9b19cc118352e600e703d7e69b8ee5aed27048290991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/index.html.twig"));

        $__internal_9d6613b77b592a1d55b2e3721d2345606f1fe68bb552b2c9ad1de15c2f82891d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6613b77b592a1d55b2e3721d2345606f1fe68bb552b2c9ad1de15c2f82891d->enter($__internal_9d6613b77b592a1d55b2e3721d2345606f1fe68bb552b2c9ad1de15c2f82891d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_befe7dcc4c7b42142cbe9b19cc118352e600e703d7e69b8ee5aed27048290991->leave($__internal_befe7dcc4c7b42142cbe9b19cc118352e600e703d7e69b8ee5aed27048290991_prof);

        
        $__internal_9d6613b77b592a1d55b2e3721d2345606f1fe68bb552b2c9ad1de15c2f82891d->leave($__internal_9d6613b77b592a1d55b2e3721d2345606f1fe68bb552b2c9ad1de15c2f82891d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f7ef9a1ce093d1250361c4947e92f8a9abcf976bbe6687558318ddd66ef1f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7ef9a1ce093d1250361c4947e92f8a9abcf976bbe6687558318ddd66ef1f5c->enter($__internal_1f7ef9a1ce093d1250361c4947e92f8a9abcf976bbe6687558318ddd66ef1f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dee0a5e87daaa11fc7c90ef0da656a5c18aceca93f23d4b64529d28779dec395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee0a5e87daaa11fc7c90ef0da656a5c18aceca93f23d4b64529d28779dec395->enter($__internal_dee0a5e87daaa11fc7c90ef0da656a5c18aceca93f23d4b64529d28779dec395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dee0a5e87daaa11fc7c90ef0da656a5c18aceca93f23d4b64529d28779dec395->leave($__internal_dee0a5e87daaa11fc7c90ef0da656a5c18aceca93f23d4b64529d28779dec395_prof);

        
        $__internal_1f7ef9a1ce093d1250361c4947e92f8a9abcf976bbe6687558318ddd66ef1f5c->leave($__internal_1f7ef9a1ce093d1250361c4947e92f8a9abcf976bbe6687558318ddd66ef1f5c_prof);

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
", "games/index.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\games\\index.html.twig");
    }
}
