<?php

/* EloboostedBackofficeBundle:tcategorie:show.html.twig */
class __TwigTemplate_df995e793f1abb0ef3faa482a9a288a890f6e12552d5bcd5a2886e4826a18ed5 extends Twig_Template
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
        $__internal_de89b349f720fdcc46c78def61f93e739544d0f21754896459f4a7d949760366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de89b349f720fdcc46c78def61f93e739544d0f21754896459f4a7d949760366->enter($__internal_de89b349f720fdcc46c78def61f93e739544d0f21754896459f4a7d949760366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $__internal_6b39bb0381cf327eb5ee57f269d75cb62f76b9d39c94212fdd2a07bd368bb2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b39bb0381cf327eb5ee57f269d75cb62f76b9d39c94212fdd2a07bd368bb2f8->enter($__internal_6b39bb0381cf327eb5ee57f269d75cb62f76b9d39c94212fdd2a07bd368bb2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:tcategorie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de89b349f720fdcc46c78def61f93e739544d0f21754896459f4a7d949760366->leave($__internal_de89b349f720fdcc46c78def61f93e739544d0f21754896459f4a7d949760366_prof);

        
        $__internal_6b39bb0381cf327eb5ee57f269d75cb62f76b9d39c94212fdd2a07bd368bb2f8->leave($__internal_6b39bb0381cf327eb5ee57f269d75cb62f76b9d39c94212fdd2a07bd368bb2f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8a30b5fa84e89a889e1d8a1aa8fbd5f1e6c4f1ba9bf804cc24d36510baf702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8a30b5fa84e89a889e1d8a1aa8fbd5f1e6c4f1ba9bf804cc24d36510baf702->enter($__internal_6a8a30b5fa84e89a889e1d8a1aa8fbd5f1e6c4f1ba9bf804cc24d36510baf702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47675b3503bccbb91b4a8c83f1bf84bd84251e467b5217ba6b077c34bc52276c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47675b3503bccbb91b4a8c83f1bf84bd84251e467b5217ba6b077c34bc52276c->enter($__internal_47675b3503bccbb91b4a8c83f1bf84bd84251e467b5217ba6b077c34bc52276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tcategorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcategorie</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tCategorie"] ?? $this->getContext($context, "tCategorie")), "idCategorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcategorie</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tCategorie"] ?? $this->getContext($context, "tCategorie")), "nomCategorie", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tcategorie_edit", array("id" => $this->getAttribute(($context["tCategorie"] ?? $this->getContext($context, "tCategorie")), "idCategorie", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_47675b3503bccbb91b4a8c83f1bf84bd84251e467b5217ba6b077c34bc52276c->leave($__internal_47675b3503bccbb91b4a8c83f1bf84bd84251e467b5217ba6b077c34bc52276c_prof);

        
        $__internal_6a8a30b5fa84e89a889e1d8a1aa8fbd5f1e6c4f1ba9bf804cc24d36510baf702->leave($__internal_6a8a30b5fa84e89a889e1d8a1aa8fbd5f1e6c4f1ba9bf804cc24d36510baf702_prof);

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
", "EloboostedBackofficeBundle:tcategorie:show.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/tcategorie/show.html.twig");
    }
}
