<?php

/* @EloboostedFrontoffice/participation/show.html.twig */
class __TwigTemplate_7fcc4cc41dde65d93494b4b2c79e2c42e0993b9d9dee1a4b64d299983c24467e extends Twig_Template
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
        $__internal_88c562ab2005440c46aeaaf1d13f2fe4affc3e9476b5140df7eb497dd9b10e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c562ab2005440c46aeaaf1d13f2fe4affc3e9476b5140df7eb497dd9b10e63->enter($__internal_88c562ab2005440c46aeaaf1d13f2fe4affc3e9476b5140df7eb497dd9b10e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $__internal_2a94ed0de178d4f6014cadc6691a3f82f491593a09da65d46f5eb281ab08da28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a94ed0de178d4f6014cadc6691a3f82f491593a09da65d46f5eb281ab08da28->enter($__internal_2a94ed0de178d4f6014cadc6691a3f82f491593a09da65d46f5eb281ab08da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c562ab2005440c46aeaaf1d13f2fe4affc3e9476b5140df7eb497dd9b10e63->leave($__internal_88c562ab2005440c46aeaaf1d13f2fe4affc3e9476b5140df7eb497dd9b10e63_prof);

        
        $__internal_2a94ed0de178d4f6014cadc6691a3f82f491593a09da65d46f5eb281ab08da28->leave($__internal_2a94ed0de178d4f6014cadc6691a3f82f491593a09da65d46f5eb281ab08da28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a07e72e24732635c8d70cd290f8fb239ef0ecb0120b38f6c5f2579a66af0fd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07e72e24732635c8d70cd290f8fb239ef0ecb0120b38f6c5f2579a66af0fd7a->enter($__internal_a07e72e24732635c8d70cd290f8fb239ef0ecb0120b38f6c5f2579a66af0fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_602828252b3cd3bbd252d0c597e24e92a9ca65f499e06d2767ad049e3ebcbbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602828252b3cd3bbd252d0c597e24e92a9ca65f499e06d2767ad049e3ebcbbec->enter($__internal_602828252b3cd3bbd252d0c597e24e92a9ca65f499e06d2767ad049e3ebcbbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_602828252b3cd3bbd252d0c597e24e92a9ca65f499e06d2767ad049e3ebcbbec->leave($__internal_602828252b3cd3bbd252d0c597e24e92a9ca65f499e06d2767ad049e3ebcbbec_prof);

        
        $__internal_a07e72e24732635c8d70cd290f8fb239ef0ecb0120b38f6c5f2579a66af0fd7a->leave($__internal_a07e72e24732635c8d70cd290f8fb239ef0ecb0120b38f6c5f2579a66af0fd7a_prof);

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
", "@EloboostedFrontoffice/participation/show.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\show.html.twig");
    }
}
