<?php

/* EloboostedFrontofficeBundle:participation:show.html.twig */
class __TwigTemplate_8239f5358f5870a548b40b83fffd6d78399d9b049a8db97fcdf660ce01a60372 extends Twig_Template
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
        $__internal_b94146c7a03f10eb30c1e529994d008dfeae47a161be29542b0f7180c0547dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94146c7a03f10eb30c1e529994d008dfeae47a161be29542b0f7180c0547dbd->enter($__internal_b94146c7a03f10eb30c1e529994d008dfeae47a161be29542b0f7180c0547dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $__internal_de648d875cf56642a4e72093d39cf66fa4da9c04ab9bc70151c9eab49795abef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de648d875cf56642a4e72093d39cf66fa4da9c04ab9bc70151c9eab49795abef->enter($__internal_de648d875cf56642a4e72093d39cf66fa4da9c04ab9bc70151c9eab49795abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b94146c7a03f10eb30c1e529994d008dfeae47a161be29542b0f7180c0547dbd->leave($__internal_b94146c7a03f10eb30c1e529994d008dfeae47a161be29542b0f7180c0547dbd_prof);

        
        $__internal_de648d875cf56642a4e72093d39cf66fa4da9c04ab9bc70151c9eab49795abef->leave($__internal_de648d875cf56642a4e72093d39cf66fa4da9c04ab9bc70151c9eab49795abef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_285c812d25dbff0fcc4f245026866e75d33723707712f2eea0f33e4fcd146b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285c812d25dbff0fcc4f245026866e75d33723707712f2eea0f33e4fcd146b60->enter($__internal_285c812d25dbff0fcc4f245026866e75d33723707712f2eea0f33e4fcd146b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd3b7bfe5e60f1c97c309d6fce37a0ad546cd5d505ec2df188d4304b07214e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3b7bfe5e60f1c97c309d6fce37a0ad546cd5d505ec2df188d4304b07214e1f->enter($__internal_cd3b7bfe5e60f1c97c309d6fce37a0ad546cd5d505ec2df188d4304b07214e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd3b7bfe5e60f1c97c309d6fce37a0ad546cd5d505ec2df188d4304b07214e1f->leave($__internal_cd3b7bfe5e60f1c97c309d6fce37a0ad546cd5d505ec2df188d4304b07214e1f_prof);

        
        $__internal_285c812d25dbff0fcc4f245026866e75d33723707712f2eea0f33e4fcd146b60->leave($__internal_285c812d25dbff0fcc4f245026866e75d33723707712f2eea0f33e4fcd146b60_prof);

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
", "EloboostedFrontofficeBundle:participation:show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/show.html.twig");
    }
}
