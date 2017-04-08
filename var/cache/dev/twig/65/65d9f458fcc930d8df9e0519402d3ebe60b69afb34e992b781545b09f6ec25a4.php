<?php

/* @EloboostedBackoffice/tcategorie/show.html.twig */
class __TwigTemplate_4ffe9ac219e392fada54ce2f9a5a1d99f6e4b06ec92f78830a56a3e121eb8e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedBackoffice/tcategorie/show.html.twig", 1);
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
        $__internal_bd11d18efa5b6f636fd7418d76aab45ff2be1e07cb424da67577561fb5a8d4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd11d18efa5b6f636fd7418d76aab45ff2be1e07cb424da67577561fb5a8d4ff->enter($__internal_bd11d18efa5b6f636fd7418d76aab45ff2be1e07cb424da67577561fb5a8d4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/show.html.twig"));

        $__internal_559f8931def324c939c85f420cc041064a3f742bd892bbacc6f833c27e797606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559f8931def324c939c85f420cc041064a3f742bd892bbacc6f833c27e797606->enter($__internal_559f8931def324c939c85f420cc041064a3f742bd892bbacc6f833c27e797606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedBackoffice/tcategorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd11d18efa5b6f636fd7418d76aab45ff2be1e07cb424da67577561fb5a8d4ff->leave($__internal_bd11d18efa5b6f636fd7418d76aab45ff2be1e07cb424da67577561fb5a8d4ff_prof);

        
        $__internal_559f8931def324c939c85f420cc041064a3f742bd892bbacc6f833c27e797606->leave($__internal_559f8931def324c939c85f420cc041064a3f742bd892bbacc6f833c27e797606_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e4d4a00a198388896af28abb7c36b057f86e6a6668c9e5b264e771bacf90c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e4d4a00a198388896af28abb7c36b057f86e6a6668c9e5b264e771bacf90c3->enter($__internal_63e4d4a00a198388896af28abb7c36b057f86e6a6668c9e5b264e771bacf90c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab54f17039b16afc4c5ee8322b33ebb9977971e3ad8fe2559fb8d2af1a2e3a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab54f17039b16afc4c5ee8322b33ebb9977971e3ad8fe2559fb8d2af1a2e3a10->enter($__internal_ab54f17039b16afc4c5ee8322b33ebb9977971e3ad8fe2559fb8d2af1a2e3a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tcategorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcategorie</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tCategorie"]) ? $context["tCategorie"] : $this->getContext($context, "tCategorie")), "idCategorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcategorie</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tCategorie"]) ? $context["tCategorie"] : $this->getContext($context, "tCategorie")), "nomCategorie", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_edit", array("id" => $this->getAttribute((isset($context["tCategorie"]) ? $context["tCategorie"] : $this->getContext($context, "tCategorie")), "idCategorie", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ab54f17039b16afc4c5ee8322b33ebb9977971e3ad8fe2559fb8d2af1a2e3a10->leave($__internal_ab54f17039b16afc4c5ee8322b33ebb9977971e3ad8fe2559fb8d2af1a2e3a10_prof);

        
        $__internal_63e4d4a00a198388896af28abb7c36b057f86e6a6668c9e5b264e771bacf90c3->leave($__internal_63e4d4a00a198388896af28abb7c36b057f86e6a6668c9e5b264e771bacf90c3_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedBackoffice/tcategorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tcategorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcategorie</th>
                <td>{{ tCategorie.idCategorie }}</td>
            </tr>
            <tr>
                <th>Nomcategorie</th>
                <td>{{ tCategorie.nomCategorie }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tcategorie_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tcategorie_edit', { 'id': tCategorie.idCategorie }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@EloboostedBackoffice/tcategorie/show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle\\Resources\\views\\tcategorie\\show.html.twig");
    }
}
