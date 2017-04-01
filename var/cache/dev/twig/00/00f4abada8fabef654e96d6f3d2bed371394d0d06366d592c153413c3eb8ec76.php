<?php

/* EloboostedFrontofficeBundle:participation:edit.html.twig */
class __TwigTemplate_02b1d9d131dc162eaad76a1efde15bfe4130503cea8583d382a3ef3a2a581f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:edit.html.twig", 1);
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
        $__internal_b60ff154ce50efe21354da8ed15dd31ffc39ff23bbddc6f1bc57c4a4a49cbdb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60ff154ce50efe21354da8ed15dd31ffc39ff23bbddc6f1bc57c4a4a49cbdb9->enter($__internal_b60ff154ce50efe21354da8ed15dd31ffc39ff23bbddc6f1bc57c4a4a49cbdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $__internal_78d1cf8b6818e0dd49a2e9cec3216d8a72bb79469487ce12b5cb3d192c2bc78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d1cf8b6818e0dd49a2e9cec3216d8a72bb79469487ce12b5cb3d192c2bc78b->enter($__internal_78d1cf8b6818e0dd49a2e9cec3216d8a72bb79469487ce12b5cb3d192c2bc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60ff154ce50efe21354da8ed15dd31ffc39ff23bbddc6f1bc57c4a4a49cbdb9->leave($__internal_b60ff154ce50efe21354da8ed15dd31ffc39ff23bbddc6f1bc57c4a4a49cbdb9_prof);

        
        $__internal_78d1cf8b6818e0dd49a2e9cec3216d8a72bb79469487ce12b5cb3d192c2bc78b->leave($__internal_78d1cf8b6818e0dd49a2e9cec3216d8a72bb79469487ce12b5cb3d192c2bc78b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2adff8010a901dbd72d9fb892631c1f498572f850abc085d920bba9d5bf56db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2adff8010a901dbd72d9fb892631c1f498572f850abc085d920bba9d5bf56db->enter($__internal_f2adff8010a901dbd72d9fb892631c1f498572f850abc085d920bba9d5bf56db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78762797620ae8486ee1eafb5c1ae3f32cdd9129a99a470020c268cf949d1cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78762797620ae8486ee1eafb5c1ae3f32cdd9129a99a470020c268cf949d1cfd->enter($__internal_78762797620ae8486ee1eafb5c1ae3f32cdd9129a99a470020c268cf949d1cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_78762797620ae8486ee1eafb5c1ae3f32cdd9129a99a470020c268cf949d1cfd->leave($__internal_78762797620ae8486ee1eafb5c1ae3f32cdd9129a99a470020c268cf949d1cfd_prof);

        
        $__internal_f2adff8010a901dbd72d9fb892631c1f498572f850abc085d920bba9d5bf56db->leave($__internal_f2adff8010a901dbd72d9fb892631c1f498572f850abc085d920bba9d5bf56db_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/edit.html.twig");
    }
}
