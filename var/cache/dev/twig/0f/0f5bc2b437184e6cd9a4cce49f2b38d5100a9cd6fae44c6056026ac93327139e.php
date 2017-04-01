<?php

/* :games:edit.html.twig */
class __TwigTemplate_f114f05b6fe7dd24b9bd6ba4ae62be88a408746d8d225ad41e0ded5bf7d41cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:edit.html.twig", 1);
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
        $__internal_174fd4a00f92669dc146a58b216676ca4a4d72fd15f70c71eee365806ae21046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174fd4a00f92669dc146a58b216676ca4a4d72fd15f70c71eee365806ae21046->enter($__internal_174fd4a00f92669dc146a58b216676ca4a4d72fd15f70c71eee365806ae21046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $__internal_601f51466794b68b418004c95306a50a0fee5363ad7c1969a57d0940b5d1e4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601f51466794b68b418004c95306a50a0fee5363ad7c1969a57d0940b5d1e4a0->enter($__internal_601f51466794b68b418004c95306a50a0fee5363ad7c1969a57d0940b5d1e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_174fd4a00f92669dc146a58b216676ca4a4d72fd15f70c71eee365806ae21046->leave($__internal_174fd4a00f92669dc146a58b216676ca4a4d72fd15f70c71eee365806ae21046_prof);

        
        $__internal_601f51466794b68b418004c95306a50a0fee5363ad7c1969a57d0940b5d1e4a0->leave($__internal_601f51466794b68b418004c95306a50a0fee5363ad7c1969a57d0940b5d1e4a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_162c73ec1b07e29b79df8a89ff914b13c110340f662f56c6d1905a613815ab8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162c73ec1b07e29b79df8a89ff914b13c110340f662f56c6d1905a613815ab8a->enter($__internal_162c73ec1b07e29b79df8a89ff914b13c110340f662f56c6d1905a613815ab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e00c87549f5544a758c2fc4fff9ec7c61deafd0f24325c09b33d1ae0f7e7921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e00c87549f5544a758c2fc4fff9ec7c61deafd0f24325c09b33d1ae0f7e7921->enter($__internal_5e00c87549f5544a758c2fc4fff9ec7c61deafd0f24325c09b33d1ae0f7e7921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e00c87549f5544a758c2fc4fff9ec7c61deafd0f24325c09b33d1ae0f7e7921->leave($__internal_5e00c87549f5544a758c2fc4fff9ec7c61deafd0f24325c09b33d1ae0f7e7921_prof);

        
        $__internal_162c73ec1b07e29b79df8a89ff914b13c110340f662f56c6d1905a613815ab8a->leave($__internal_162c73ec1b07e29b79df8a89ff914b13c110340f662f56c6d1905a613815ab8a_prof);

    }

    public function getTemplateName()
    {
        return ":games:edit.html.twig";
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
", ":games:edit.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/edit.html.twig");
    }
}
