<?php

/* EloboostedFrontofficeBundle:participation:index.html.twig */
class __TwigTemplate_9ce4c83faeb1c3e108a22b6b409357a5b6656a1f70977e1dbe6e2507f8d0a948 extends Twig_Template
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
        $__internal_9887f69df9220379a6040100bea802bbb4e687a4b8d1fcc5461abedce95b28b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9887f69df9220379a6040100bea802bbb4e687a4b8d1fcc5461abedce95b28b4->enter($__internal_9887f69df9220379a6040100bea802bbb4e687a4b8d1fcc5461abedce95b28b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $__internal_90ad91c7eed70307b09ed75a486731fb3e1cfabad6b069d920461f5a394ddc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ad91c7eed70307b09ed75a486731fb3e1cfabad6b069d920461f5a394ddc5b->enter($__internal_90ad91c7eed70307b09ed75a486731fb3e1cfabad6b069d920461f5a394ddc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9887f69df9220379a6040100bea802bbb4e687a4b8d1fcc5461abedce95b28b4->leave($__internal_9887f69df9220379a6040100bea802bbb4e687a4b8d1fcc5461abedce95b28b4_prof);

        
        $__internal_90ad91c7eed70307b09ed75a486731fb3e1cfabad6b069d920461f5a394ddc5b->leave($__internal_90ad91c7eed70307b09ed75a486731fb3e1cfabad6b069d920461f5a394ddc5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f595084345e8b7b1576d5467cbc81a2ab37cf6b9177277a77fb13fee427157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f595084345e8b7b1576d5467cbc81a2ab37cf6b9177277a77fb13fee427157->enter($__internal_73f595084345e8b7b1576d5467cbc81a2ab37cf6b9177277a77fb13fee427157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08799dffe9fdc564a175beb38922ef5c7554e7af8519cb29910503f96bc80c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08799dffe9fdc564a175beb38922ef5c7554e7af8519cb29910503f96bc80c75->enter($__internal_08799dffe9fdc564a175beb38922ef5c7554e7af8519cb29910503f96bc80c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08799dffe9fdc564a175beb38922ef5c7554e7af8519cb29910503f96bc80c75->leave($__internal_08799dffe9fdc564a175beb38922ef5c7554e7af8519cb29910503f96bc80c75_prof);

        
        $__internal_73f595084345e8b7b1576d5467cbc81a2ab37cf6b9177277a77fb13fee427157->leave($__internal_73f595084345e8b7b1576d5467cbc81a2ab37cf6b9177277a77fb13fee427157_prof);

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
", "EloboostedFrontofficeBundle:participation:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/index.html.twig");
    }
}
