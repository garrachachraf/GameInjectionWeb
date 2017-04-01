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
        $__internal_b86ff14f2125b6ad5b1b8ad09368e7bfa415bffd7c335f50200c4838a59b4ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86ff14f2125b6ad5b1b8ad09368e7bfa415bffd7c335f50200c4838a59b4ac8->enter($__internal_b86ff14f2125b6ad5b1b8ad09368e7bfa415bffd7c335f50200c4838a59b4ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $__internal_4288f23e8ab3c4e1029996535ab53d833f350788b5b8d1114e29bab4736cce78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4288f23e8ab3c4e1029996535ab53d833f350788b5b8d1114e29bab4736cce78->enter($__internal_4288f23e8ab3c4e1029996535ab53d833f350788b5b8d1114e29bab4736cce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86ff14f2125b6ad5b1b8ad09368e7bfa415bffd7c335f50200c4838a59b4ac8->leave($__internal_b86ff14f2125b6ad5b1b8ad09368e7bfa415bffd7c335f50200c4838a59b4ac8_prof);

        
        $__internal_4288f23e8ab3c4e1029996535ab53d833f350788b5b8d1114e29bab4736cce78->leave($__internal_4288f23e8ab3c4e1029996535ab53d833f350788b5b8d1114e29bab4736cce78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8886315f738a155f0d63ff7b72c104230f7422f93333eeab46ad5990a8c7f738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8886315f738a155f0d63ff7b72c104230f7422f93333eeab46ad5990a8c7f738->enter($__internal_8886315f738a155f0d63ff7b72c104230f7422f93333eeab46ad5990a8c7f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c23025a2db3982a9b6106342bc072c351cc503f54b2bb9873d364505995c6a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23025a2db3982a9b6106342bc072c351cc503f54b2bb9873d364505995c6a90->enter($__internal_c23025a2db3982a9b6106342bc072c351cc503f54b2bb9873d364505995c6a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c23025a2db3982a9b6106342bc072c351cc503f54b2bb9873d364505995c6a90->leave($__internal_c23025a2db3982a9b6106342bc072c351cc503f54b2bb9873d364505995c6a90_prof);

        
        $__internal_8886315f738a155f0d63ff7b72c104230f7422f93333eeab46ad5990a8c7f738->leave($__internal_8886315f738a155f0d63ff7b72c104230f7422f93333eeab46ad5990a8c7f738_prof);

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
