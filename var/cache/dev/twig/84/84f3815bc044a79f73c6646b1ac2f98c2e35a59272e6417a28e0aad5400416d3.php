<?php

/* @EloboostedFrontoffice/participation/index.html.twig */
class __TwigTemplate_87a5a103b8b21dcb93ea9c17afabe0f88f40d3a7c9558be9e3bbc2723ed3f3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/index.html.twig", 1);
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
        $__internal_1a5f7667f1c01b88efa822bb0521df1075acafc083aacc742147fd55ad7fe0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5f7667f1c01b88efa822bb0521df1075acafc083aacc742147fd55ad7fe0b0->enter($__internal_1a5f7667f1c01b88efa822bb0521df1075acafc083aacc742147fd55ad7fe0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/index.html.twig"));

        $__internal_ee86495254e0564e23e0ffb9390d0c5e5f6e2cbdbb9fc9369d83aa0883784031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee86495254e0564e23e0ffb9390d0c5e5f6e2cbdbb9fc9369d83aa0883784031->enter($__internal_ee86495254e0564e23e0ffb9390d0c5e5f6e2cbdbb9fc9369d83aa0883784031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5f7667f1c01b88efa822bb0521df1075acafc083aacc742147fd55ad7fe0b0->leave($__internal_1a5f7667f1c01b88efa822bb0521df1075acafc083aacc742147fd55ad7fe0b0_prof);

        
        $__internal_ee86495254e0564e23e0ffb9390d0c5e5f6e2cbdbb9fc9369d83aa0883784031->leave($__internal_ee86495254e0564e23e0ffb9390d0c5e5f6e2cbdbb9fc9369d83aa0883784031_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d92a1ffe24aa631a4636b5cdefdca1b8ca05d37507d595490bd4a5011b4dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d92a1ffe24aa631a4636b5cdefdca1b8ca05d37507d595490bd4a5011b4dfd->enter($__internal_08d92a1ffe24aa631a4636b5cdefdca1b8ca05d37507d595490bd4a5011b4dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1d9e59cea2b503077e858474dfa91905f1224b45b4c06c8382840eece634d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d9e59cea2b503077e858474dfa91905f1224b45b4c06c8382840eece634d8c->enter($__internal_d1d9e59cea2b503077e858474dfa91905f1224b45b4c06c8382840eece634d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1d9e59cea2b503077e858474dfa91905f1224b45b4c06c8382840eece634d8c->leave($__internal_d1d9e59cea2b503077e858474dfa91905f1224b45b4c06c8382840eece634d8c_prof);

        
        $__internal_08d92a1ffe24aa631a4636b5cdefdca1b8ca05d37507d595490bd4a5011b4dfd->leave($__internal_08d92a1ffe24aa631a4636b5cdefdca1b8ca05d37507d595490bd4a5011b4dfd_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/index.html.twig";
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
", "@EloboostedFrontoffice/participation/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\index.html.twig");
    }
}
