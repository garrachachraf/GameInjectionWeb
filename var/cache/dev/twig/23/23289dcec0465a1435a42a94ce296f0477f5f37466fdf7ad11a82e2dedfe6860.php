<?php

/* EloboostedFrontofficeBundle:participation:index.html.twig */
class __TwigTemplate_bd94d8ec9dda56bbccc9304e77820b89c90b2e9934e8a36879436f5acce53ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:index.html.twig", 1);
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
        $__internal_d5b2e6527edb7dc61b26a58dd1da664b8a492888725864bf13d0866b256e519d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b2e6527edb7dc61b26a58dd1da664b8a492888725864bf13d0866b256e519d->enter($__internal_d5b2e6527edb7dc61b26a58dd1da664b8a492888725864bf13d0866b256e519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $__internal_e37b25c33731847cb37f9d59de554d113f83ebd4e716814638adab79774f2332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37b25c33731847cb37f9d59de554d113f83ebd4e716814638adab79774f2332->enter($__internal_e37b25c33731847cb37f9d59de554d113f83ebd4e716814638adab79774f2332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b2e6527edb7dc61b26a58dd1da664b8a492888725864bf13d0866b256e519d->leave($__internal_d5b2e6527edb7dc61b26a58dd1da664b8a492888725864bf13d0866b256e519d_prof);

        
        $__internal_e37b25c33731847cb37f9d59de554d113f83ebd4e716814638adab79774f2332->leave($__internal_e37b25c33731847cb37f9d59de554d113f83ebd4e716814638adab79774f2332_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc167a9da8e55e80f00f36ca5d6f6cc700e6e51babdc96a577deb87aa7399b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc167a9da8e55e80f00f36ca5d6f6cc700e6e51babdc96a577deb87aa7399b3c->enter($__internal_fc167a9da8e55e80f00f36ca5d6f6cc700e6e51babdc96a577deb87aa7399b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f705a2416692306a64309c6964debc4fadbf8c419afc7925aff346a2f666696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f705a2416692306a64309c6964debc4fadbf8c419afc7925aff346a2f666696->enter($__internal_7f705a2416692306a64309c6964debc4fadbf8c419afc7925aff346a2f666696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idparticipation</th>
                <th>Positionwin</th>
                <th>Rkey</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_show", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "idParticipation", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "positionWin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "rkey", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_show", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_edit", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_new");
        echo "\">Create a new participation</a>
        </li>
    </ul>
";
        
        $__internal_7f705a2416692306a64309c6964debc4fadbf8c419afc7925aff346a2f666696->leave($__internal_7f705a2416692306a64309c6964debc4fadbf8c419afc7925aff346a2f666696_prof);

        
        $__internal_fc167a9da8e55e80f00f36ca5d6f6cc700e6e51babdc96a577deb87aa7399b3c->leave($__internal_fc167a9da8e55e80f00f36ca5d6f6cc700e6e51babdc96a577deb87aa7399b3c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idparticipation</th>
                <th>Positionwin</th>
                <th>Rkey</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for participation in participations %}
            <tr>
                <td><a href=\"{{ path('participation_show', { 'id': participation.idParticipation }) }}\">{{ participation.idParticipation }}</a></td>
                <td>{{ participation.positionWin }}</td>
                <td>{{ participation.rkey }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('participation_show', { 'id': participation.idParticipation }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('participation_edit', { 'id': participation.idParticipation }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('participation_new') }}\">Create a new participation</a>
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/index.html.twig");
    }
}
