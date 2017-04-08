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
        $__internal_b358a5f8590ce732297bd8d895673ed0d575a23018ee0f4efcfa59ef368569fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b358a5f8590ce732297bd8d895673ed0d575a23018ee0f4efcfa59ef368569fe->enter($__internal_b358a5f8590ce732297bd8d895673ed0d575a23018ee0f4efcfa59ef368569fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $__internal_cef4d5badd26be1865fecb94f2da5f2d7693964bb26180ee9ebd1a77722b0435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef4d5badd26be1865fecb94f2da5f2d7693964bb26180ee9ebd1a77722b0435->enter($__internal_cef4d5badd26be1865fecb94f2da5f2d7693964bb26180ee9ebd1a77722b0435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b358a5f8590ce732297bd8d895673ed0d575a23018ee0f4efcfa59ef368569fe->leave($__internal_b358a5f8590ce732297bd8d895673ed0d575a23018ee0f4efcfa59ef368569fe_prof);

        
        $__internal_cef4d5badd26be1865fecb94f2da5f2d7693964bb26180ee9ebd1a77722b0435->leave($__internal_cef4d5badd26be1865fecb94f2da5f2d7693964bb26180ee9ebd1a77722b0435_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ce55ad7642de46ef2eba7ce7af120f500b66f65f4d7ac5536182144383ba8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce55ad7642de46ef2eba7ce7af120f500b66f65f4d7ac5536182144383ba8de->enter($__internal_8ce55ad7642de46ef2eba7ce7af120f500b66f65f4d7ac5536182144383ba8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_786fe1b0b2453bde301a46c95fbc1f47fcc0908dab86dbf9b867b1d2525accf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786fe1b0b2453bde301a46c95fbc1f47fcc0908dab86dbf9b867b1d2525accf0->enter($__internal_786fe1b0b2453bde301a46c95fbc1f47fcc0908dab86dbf9b867b1d2525accf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_786fe1b0b2453bde301a46c95fbc1f47fcc0908dab86dbf9b867b1d2525accf0->leave($__internal_786fe1b0b2453bde301a46c95fbc1f47fcc0908dab86dbf9b867b1d2525accf0_prof);

        
        $__internal_8ce55ad7642de46ef2eba7ce7af120f500b66f65f4d7ac5536182144383ba8de->leave($__internal_8ce55ad7642de46ef2eba7ce7af120f500b66f65f4d7ac5536182144383ba8de_prof);

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
