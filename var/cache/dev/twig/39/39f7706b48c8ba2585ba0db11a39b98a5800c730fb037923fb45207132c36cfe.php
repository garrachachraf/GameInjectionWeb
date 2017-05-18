<?php

/* EloboostedFrontofficeBundle:participation:index.html.twig */
class __TwigTemplate_9f00e86df91c0d0bf5f84cffb1a9cfa3a319da1e3479e39bad3cadef73c2be40 extends Twig_Template
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
        $__internal_d03ee901d8426bec0409eaac1935fe54efcb1fccad17c88a0d81db944315fe99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03ee901d8426bec0409eaac1935fe54efcb1fccad17c88a0d81db944315fe99->enter($__internal_d03ee901d8426bec0409eaac1935fe54efcb1fccad17c88a0d81db944315fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $__internal_45d5078fb30a857a4c37d1189b42965e7e5d7a2b4d88b4ed902f89d552164fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d5078fb30a857a4c37d1189b42965e7e5d7a2b4d88b4ed902f89d552164fca->enter($__internal_45d5078fb30a857a4c37d1189b42965e7e5d7a2b4d88b4ed902f89d552164fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03ee901d8426bec0409eaac1935fe54efcb1fccad17c88a0d81db944315fe99->leave($__internal_d03ee901d8426bec0409eaac1935fe54efcb1fccad17c88a0d81db944315fe99_prof);

        
        $__internal_45d5078fb30a857a4c37d1189b42965e7e5d7a2b4d88b4ed902f89d552164fca->leave($__internal_45d5078fb30a857a4c37d1189b42965e7e5d7a2b4d88b4ed902f89d552164fca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2212ab9871b06ecd66cd8c6648898137f4a204b9308c592c42b9c5627999dfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2212ab9871b06ecd66cd8c6648898137f4a204b9308c592c42b9c5627999dfaa->enter($__internal_2212ab9871b06ecd66cd8c6648898137f4a204b9308c592c42b9c5627999dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25ad3dd08db4c8c7e79329eb18b03f803763ddffcbfac518e23bd744c1736c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ad3dd08db4c8c7e79329eb18b03f803763ddffcbfac518e23bd744c1736c6d->enter($__internal_25ad3dd08db4c8c7e79329eb18b03f803763ddffcbfac518e23bd744c1736c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["participations"] ?? $this->getContext($context, "participations")));
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
        
        $__internal_25ad3dd08db4c8c7e79329eb18b03f803763ddffcbfac518e23bd744c1736c6d->leave($__internal_25ad3dd08db4c8c7e79329eb18b03f803763ddffcbfac518e23bd744c1736c6d_prof);

        
        $__internal_2212ab9871b06ecd66cd8c6648898137f4a204b9308c592c42b9c5627999dfaa->leave($__internal_2212ab9871b06ecd66cd8c6648898137f4a204b9308c592c42b9c5627999dfaa_prof);

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
", "EloboostedFrontofficeBundle:participation:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/index.html.twig");
    }
}
