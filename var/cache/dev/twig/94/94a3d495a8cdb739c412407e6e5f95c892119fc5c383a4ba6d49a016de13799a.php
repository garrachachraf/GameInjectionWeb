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
        $__internal_eb782fffec696abb3bf3a4a804b3108b214538ce05dbbff36d04d036531c1f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb782fffec696abb3bf3a4a804b3108b214538ce05dbbff36d04d036531c1f7e->enter($__internal_eb782fffec696abb3bf3a4a804b3108b214538ce05dbbff36d04d036531c1f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $__internal_6c250eac0c794cd5f7729ad42bce809f7b24ab475a758854bf2423d4619cc06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c250eac0c794cd5f7729ad42bce809f7b24ab475a758854bf2423d4619cc06a->enter($__internal_6c250eac0c794cd5f7729ad42bce809f7b24ab475a758854bf2423d4619cc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb782fffec696abb3bf3a4a804b3108b214538ce05dbbff36d04d036531c1f7e->leave($__internal_eb782fffec696abb3bf3a4a804b3108b214538ce05dbbff36d04d036531c1f7e_prof);

        
        $__internal_6c250eac0c794cd5f7729ad42bce809f7b24ab475a758854bf2423d4619cc06a->leave($__internal_6c250eac0c794cd5f7729ad42bce809f7b24ab475a758854bf2423d4619cc06a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2db02a06738db3a209b43f921d13e92748ea89ed33557f474eaaf4bdaa8ecad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2db02a06738db3a209b43f921d13e92748ea89ed33557f474eaaf4bdaa8ecad->enter($__internal_e2db02a06738db3a209b43f921d13e92748ea89ed33557f474eaaf4bdaa8ecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3d90654b83dc18239195b25cab5578d428f73d079d599b5c9e976bc935c87b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d90654b83dc18239195b25cab5578d428f73d079d599b5c9e976bc935c87b7->enter($__internal_d3d90654b83dc18239195b25cab5578d428f73d079d599b5c9e976bc935c87b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3d90654b83dc18239195b25cab5578d428f73d079d599b5c9e976bc935c87b7->leave($__internal_d3d90654b83dc18239195b25cab5578d428f73d079d599b5c9e976bc935c87b7_prof);

        
        $__internal_e2db02a06738db3a209b43f921d13e92748ea89ed33557f474eaaf4bdaa8ecad->leave($__internal_e2db02a06738db3a209b43f921d13e92748ea89ed33557f474eaaf4bdaa8ecad_prof);

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
