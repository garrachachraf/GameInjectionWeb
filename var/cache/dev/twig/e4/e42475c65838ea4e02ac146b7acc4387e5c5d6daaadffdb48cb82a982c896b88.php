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
        $__internal_b24835c58ce62d9c320ac0b7d95ff939f4eefae8a09cd3f6a3d118cdb21da8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24835c58ce62d9c320ac0b7d95ff939f4eefae8a09cd3f6a3d118cdb21da8f5->enter($__internal_b24835c58ce62d9c320ac0b7d95ff939f4eefae8a09cd3f6a3d118cdb21da8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $__internal_870e59d80c45a87a3dae4d22303605e436f3744f6a15aab61f5d0ec54c61bcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870e59d80c45a87a3dae4d22303605e436f3744f6a15aab61f5d0ec54c61bcf1->enter($__internal_870e59d80c45a87a3dae4d22303605e436f3744f6a15aab61f5d0ec54c61bcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24835c58ce62d9c320ac0b7d95ff939f4eefae8a09cd3f6a3d118cdb21da8f5->leave($__internal_b24835c58ce62d9c320ac0b7d95ff939f4eefae8a09cd3f6a3d118cdb21da8f5_prof);

        
        $__internal_870e59d80c45a87a3dae4d22303605e436f3744f6a15aab61f5d0ec54c61bcf1->leave($__internal_870e59d80c45a87a3dae4d22303605e436f3744f6a15aab61f5d0ec54c61bcf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a7b578b8f560e2df95101b28c608c55fb672948c6273f3c2eba40387056282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a7b578b8f560e2df95101b28c608c55fb672948c6273f3c2eba40387056282->enter($__internal_10a7b578b8f560e2df95101b28c608c55fb672948c6273f3c2eba40387056282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be600d14ec4cbe6682e7ced87bf3725ecd246062d6d777579d9a2cf754739aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be600d14ec4cbe6682e7ced87bf3725ecd246062d6d777579d9a2cf754739aca->enter($__internal_be600d14ec4cbe6682e7ced87bf3725ecd246062d6d777579d9a2cf754739aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be600d14ec4cbe6682e7ced87bf3725ecd246062d6d777579d9a2cf754739aca->leave($__internal_be600d14ec4cbe6682e7ced87bf3725ecd246062d6d777579d9a2cf754739aca_prof);

        
        $__internal_10a7b578b8f560e2df95101b28c608c55fb672948c6273f3c2eba40387056282->leave($__internal_10a7b578b8f560e2df95101b28c608c55fb672948c6273f3c2eba40387056282_prof);

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
