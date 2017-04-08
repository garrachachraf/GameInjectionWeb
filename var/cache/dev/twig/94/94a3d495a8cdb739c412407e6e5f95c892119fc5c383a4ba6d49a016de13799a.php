<?php

/* @EloboostedFrontoffice/participation/show.html.twig */
class __TwigTemplate_1db77884588b9cdc41c94f8eb9d0cc319a41d3ce4c221287e1ba68314233792b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/show.html.twig", 1);
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
        $__internal_0daec7490cc31d57f2efca2b405bb5f8ee69b822fe1f772464867c9ee72ee4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daec7490cc31d57f2efca2b405bb5f8ee69b822fe1f772464867c9ee72ee4c7->enter($__internal_0daec7490cc31d57f2efca2b405bb5f8ee69b822fe1f772464867c9ee72ee4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $__internal_fe5927290e205e61e34373a9d0889e9b0a875a68a31ddc7da808debfb50d76d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5927290e205e61e34373a9d0889e9b0a875a68a31ddc7da808debfb50d76d6->enter($__internal_fe5927290e205e61e34373a9d0889e9b0a875a68a31ddc7da808debfb50d76d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0daec7490cc31d57f2efca2b405bb5f8ee69b822fe1f772464867c9ee72ee4c7->leave($__internal_0daec7490cc31d57f2efca2b405bb5f8ee69b822fe1f772464867c9ee72ee4c7_prof);

        
        $__internal_fe5927290e205e61e34373a9d0889e9b0a875a68a31ddc7da808debfb50d76d6->leave($__internal_fe5927290e205e61e34373a9d0889e9b0a875a68a31ddc7da808debfb50d76d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de99d077dfac0de1377201db59a88b7a80c2a127002003ed666ae2e4fb425cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de99d077dfac0de1377201db59a88b7a80c2a127002003ed666ae2e4fb425cc->enter($__internal_1de99d077dfac0de1377201db59a88b7a80c2a127002003ed666ae2e4fb425cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23be97dc8ccfd632d7c931861185a25006ac5bdfad5382a6f9f47ef56f5b7bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23be97dc8ccfd632d7c931861185a25006ac5bdfad5382a6f9f47ef56f5b7bcd->enter($__internal_23be97dc8ccfd632d7c931861185a25006ac5bdfad5382a6f9f47ef56f5b7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23be97dc8ccfd632d7c931861185a25006ac5bdfad5382a6f9f47ef56f5b7bcd->leave($__internal_23be97dc8ccfd632d7c931861185a25006ac5bdfad5382a6f9f47ef56f5b7bcd_prof);

        
        $__internal_1de99d077dfac0de1377201db59a88b7a80c2a127002003ed666ae2e4fb425cc->leave($__internal_1de99d077dfac0de1377201db59a88b7a80c2a127002003ed666ae2e4fb425cc_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/show.html.twig";
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
", "@EloboostedFrontoffice/participation/show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\show.html.twig");
    }
}
