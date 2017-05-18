<?php

/* EloboostedFrontofficeBundle:participation:show.html.twig */
class __TwigTemplate_b86671050f5ab66de79d15f441b62758e637c919a780ed270e7baf8117e46eae extends Twig_Template
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
        $__internal_0f31257c94a62dc5a3fd880b99ba278a194e1870371ee502bc6a4093c4ad8176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f31257c94a62dc5a3fd880b99ba278a194e1870371ee502bc6a4093c4ad8176->enter($__internal_0f31257c94a62dc5a3fd880b99ba278a194e1870371ee502bc6a4093c4ad8176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $__internal_3a6a2d24efed235bbeb2735b36ba8ee346171738010e04f6e7e8e3353915fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6a2d24efed235bbeb2735b36ba8ee346171738010e04f6e7e8e3353915fda8->enter($__internal_3a6a2d24efed235bbeb2735b36ba8ee346171738010e04f6e7e8e3353915fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f31257c94a62dc5a3fd880b99ba278a194e1870371ee502bc6a4093c4ad8176->leave($__internal_0f31257c94a62dc5a3fd880b99ba278a194e1870371ee502bc6a4093c4ad8176_prof);

        
        $__internal_3a6a2d24efed235bbeb2735b36ba8ee346171738010e04f6e7e8e3353915fda8->leave($__internal_3a6a2d24efed235bbeb2735b36ba8ee346171738010e04f6e7e8e3353915fda8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3270607b10fec4b95e20ff5892ad8266c0ce610df643a01f9e40d36c6bc77dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3270607b10fec4b95e20ff5892ad8266c0ce610df643a01f9e40d36c6bc77dee->enter($__internal_3270607b10fec4b95e20ff5892ad8266c0ce610df643a01f9e40d36c6bc77dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_116e048051c4c054abdfa422e5b54a5ea824bed4a08522eb9c556608cf8b409f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116e048051c4c054abdfa422e5b54a5ea824bed4a08522eb9c556608cf8b409f->enter($__internal_116e048051c4c054abdfa422e5b54a5ea824bed4a08522eb9c556608cf8b409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation</h1>

    <table>
        <tbody>
            <tr>
                <th>Idparticipation</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["participation"] ?? $this->getContext($context, "participation")), "idParticipation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Positionwin</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["participation"] ?? $this->getContext($context, "participation")), "positionWin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rkey</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["participation"] ?? $this->getContext($context, "participation")), "rkey", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_edit", array("id" => $this->getAttribute(($context["participation"] ?? $this->getContext($context, "participation")), "idParticipation", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_116e048051c4c054abdfa422e5b54a5ea824bed4a08522eb9c556608cf8b409f->leave($__internal_116e048051c4c054abdfa422e5b54a5ea824bed4a08522eb9c556608cf8b409f_prof);

        
        $__internal_3270607b10fec4b95e20ff5892ad8266c0ce610df643a01f9e40d36c6bc77dee->leave($__internal_3270607b10fec4b95e20ff5892ad8266c0ce610df643a01f9e40d36c6bc77dee_prof);

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
", "EloboostedFrontofficeBundle:participation:show.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/show.html.twig");
    }
}
