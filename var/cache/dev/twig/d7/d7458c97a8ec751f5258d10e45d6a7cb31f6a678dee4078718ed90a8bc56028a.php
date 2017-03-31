<?php

/* EloboostedFrontofficeBundle:participation:show.html.twig */
class __TwigTemplate_30d0551917b4b7fb4f966b752c2e4c6c8d7903805ee2f331adeea7f27bf05306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:show.html.twig", 1);
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
        $__internal_1e374984984bee7de32a3aec483b63ae49e5a5e5776bb094a9d0ec568492e00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e374984984bee7de32a3aec483b63ae49e5a5e5776bb094a9d0ec568492e00e->enter($__internal_1e374984984bee7de32a3aec483b63ae49e5a5e5776bb094a9d0ec568492e00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $__internal_86148bba832fddd1ca3600d235d9ba86110de967bb70fba52368a3c7740ba576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86148bba832fddd1ca3600d235d9ba86110de967bb70fba52368a3c7740ba576->enter($__internal_86148bba832fddd1ca3600d235d9ba86110de967bb70fba52368a3c7740ba576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e374984984bee7de32a3aec483b63ae49e5a5e5776bb094a9d0ec568492e00e->leave($__internal_1e374984984bee7de32a3aec483b63ae49e5a5e5776bb094a9d0ec568492e00e_prof);

        
        $__internal_86148bba832fddd1ca3600d235d9ba86110de967bb70fba52368a3c7740ba576->leave($__internal_86148bba832fddd1ca3600d235d9ba86110de967bb70fba52368a3c7740ba576_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fa3cab9f4a9dc1a4cb3d712b24493687a5b91e78facebc44efe9f4357932193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa3cab9f4a9dc1a4cb3d712b24493687a5b91e78facebc44efe9f4357932193->enter($__internal_0fa3cab9f4a9dc1a4cb3d712b24493687a5b91e78facebc44efe9f4357932193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23961c986ec0297d201ac4dc3f712f2c1814f6f9e7429c8409285cacd3592394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23961c986ec0297d201ac4dc3f712f2c1814f6f9e7429c8409285cacd3592394->enter($__internal_23961c986ec0297d201ac4dc3f712f2c1814f6f9e7429c8409285cacd3592394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation</h1>

    <table>
        <tbody>
            <tr>
                <th>Idparticipation</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "idParticipation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Positionwin</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "positionWin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rkey</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "rkey", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_edit", array("id" => $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "idParticipation", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_23961c986ec0297d201ac4dc3f712f2c1814f6f9e7429c8409285cacd3592394->leave($__internal_23961c986ec0297d201ac4dc3f712f2c1814f6f9e7429c8409285cacd3592394_prof);

        
        $__internal_0fa3cab9f4a9dc1a4cb3d712b24493687a5b91e78facebc44efe9f4357932193->leave($__internal_0fa3cab9f4a9dc1a4cb3d712b24493687a5b91e78facebc44efe9f4357932193_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participation</h1>

    <table>
        <tbody>
            <tr>
                <th>Idparticipation</th>
                <td>{{ participation.idParticipation }}</td>
            </tr>
            <tr>
                <th>Positionwin</th>
                <td>{{ participation.positionWin }}</td>
            </tr>
            <tr>
                <th>Rkey</th>
                <td>{{ participation.rkey }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('participation_edit', { 'id': participation.idParticipation }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:show.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/show.html.twig");
    }
}
