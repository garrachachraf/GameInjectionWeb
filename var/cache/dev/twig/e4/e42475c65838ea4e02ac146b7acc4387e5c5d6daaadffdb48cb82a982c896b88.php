<?php

/* EloboostedBackofficeBundle:tcategorie:show.html.twig */
class __TwigTemplate_5afd29d3ed4fa95c81d9e5ff1aed9349357513541071917a6a2edb44a12e3eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedBackofficeBundle:tcategorie:show.html.twig", 1);
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
        $__internal_1006e6f0922270fe0287d3586566ed3c84b0e47fd9d5897c2aa3795899b71f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1006e6f0922270fe0287d3586566ed3c84b0e47fd9d5897c2aa3795899b71f8b->enter($__internal_1006e6f0922270fe0287d3586566ed3c84b0e47fd9d5897c2aa3795899b71f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $__internal_4fa5d9374b3449ff74bb5b0318156f4193f5491825bfbef90c0a04ad6e4105ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa5d9374b3449ff74bb5b0318156f4193f5491825bfbef90c0a04ad6e4105ac->enter($__internal_4fa5d9374b3449ff74bb5b0318156f4193f5491825bfbef90c0a04ad6e4105ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1006e6f0922270fe0287d3586566ed3c84b0e47fd9d5897c2aa3795899b71f8b->leave($__internal_1006e6f0922270fe0287d3586566ed3c84b0e47fd9d5897c2aa3795899b71f8b_prof);

        
        $__internal_4fa5d9374b3449ff74bb5b0318156f4193f5491825bfbef90c0a04ad6e4105ac->leave($__internal_4fa5d9374b3449ff74bb5b0318156f4193f5491825bfbef90c0a04ad6e4105ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0bdb959145bc07b6802796474d929cf7197c965c293e0ef243e4614818ce7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bdb959145bc07b6802796474d929cf7197c965c293e0ef243e4614818ce7f7->enter($__internal_a0bdb959145bc07b6802796474d929cf7197c965c293e0ef243e4614818ce7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a8dbd95f2e30282cd24ea32afffe5c9ca6a91f991987d117ec641c49027c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a8dbd95f2e30282cd24ea32afffe5c9ca6a91f991987d117ec641c49027c76->enter($__internal_71a8dbd95f2e30282cd24ea32afffe5c9ca6a91f991987d117ec641c49027c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_71a8dbd95f2e30282cd24ea32afffe5c9ca6a91f991987d117ec641c49027c76->leave($__internal_71a8dbd95f2e30282cd24ea32afffe5c9ca6a91f991987d117ec641c49027c76_prof);

        
        $__internal_a0bdb959145bc07b6802796474d929cf7197c965c293e0ef243e4614818ce7f7->leave($__internal_a0bdb959145bc07b6802796474d929cf7197c965c293e0ef243e4614818ce7f7_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:tcategorie:show.html.twig";
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
", "EloboostedBackofficeBundle:tcategorie:show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/tcategorie/show.html.twig");
    }
}
