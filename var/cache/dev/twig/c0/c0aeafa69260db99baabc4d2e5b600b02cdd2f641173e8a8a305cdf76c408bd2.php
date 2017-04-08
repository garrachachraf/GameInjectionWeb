<?php

/* @EloboostedFrontoffice/games/edit.html.twig */
class __TwigTemplate_9f6b223896f3091c559b9972c0cd73ce6a9bd4596b8ea2e85b2b904dd9830a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/games/edit.html.twig", 1);
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
        $__internal_019c116b50a17804cd3061dbeb78acb2219a19ddc0827d686f0d70df8ab04eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019c116b50a17804cd3061dbeb78acb2219a19ddc0827d686f0d70df8ab04eab->enter($__internal_019c116b50a17804cd3061dbeb78acb2219a19ddc0827d686f0d70df8ab04eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $__internal_70c9c7a59d9536edac2aefb29306eb67f70d5bedfdcbb354275662f2f35e0139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c9c7a59d9536edac2aefb29306eb67f70d5bedfdcbb354275662f2f35e0139->enter($__internal_70c9c7a59d9536edac2aefb29306eb67f70d5bedfdcbb354275662f2f35e0139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019c116b50a17804cd3061dbeb78acb2219a19ddc0827d686f0d70df8ab04eab->leave($__internal_019c116b50a17804cd3061dbeb78acb2219a19ddc0827d686f0d70df8ab04eab_prof);

        
        $__internal_70c9c7a59d9536edac2aefb29306eb67f70d5bedfdcbb354275662f2f35e0139->leave($__internal_70c9c7a59d9536edac2aefb29306eb67f70d5bedfdcbb354275662f2f35e0139_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c1ede24c93ee7a165528e91db7bb64f2255aad98680987c9c5ccd26aac136d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1ede24c93ee7a165528e91db7bb64f2255aad98680987c9c5ccd26aac136d0->enter($__internal_4c1ede24c93ee7a165528e91db7bb64f2255aad98680987c9c5ccd26aac136d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9e2c16918feba1bdaf921b4191699ff4f9c6cd0abd7111898f3cced928dc3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e2c16918feba1bdaf921b4191699ff4f9c6cd0abd7111898f3cced928dc3cf->enter($__internal_c9e2c16918feba1bdaf921b4191699ff4f9c6cd0abd7111898f3cced928dc3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
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
        
        $__internal_c9e2c16918feba1bdaf921b4191699ff4f9c6cd0abd7111898f3cced928dc3cf->leave($__internal_c9e2c16918feba1bdaf921b4191699ff4f9c6cd0abd7111898f3cced928dc3cf_prof);

        
        $__internal_4c1ede24c93ee7a165528e91db7bb64f2255aad98680987c9c5ccd26aac136d0->leave($__internal_4c1ede24c93ee7a165528e91db7bb64f2255aad98680987c9c5ccd26aac136d0_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/games/edit.html.twig";
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
    <h1>Game edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/games/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\edit.html.twig");
    }
}
