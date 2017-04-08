<?php

/* EloboostedFrontofficeBundle:participation:edit.html.twig */
class __TwigTemplate_7b5882f1d333c1221456a2e3683d020464b22090450cc5a2625bd08a968b3698 extends Twig_Template
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
        $__internal_304f23d3278cacb05ad4da6fefe248963c601bf3d68c7458c87152357437944e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304f23d3278cacb05ad4da6fefe248963c601bf3d68c7458c87152357437944e->enter($__internal_304f23d3278cacb05ad4da6fefe248963c601bf3d68c7458c87152357437944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $__internal_70c1a4774e837ed6036a6bfb8fab79b9afc74c2a7c6caf13c395ee2d8e6f4a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c1a4774e837ed6036a6bfb8fab79b9afc74c2a7c6caf13c395ee2d8e6f4a8b->enter($__internal_70c1a4774e837ed6036a6bfb8fab79b9afc74c2a7c6caf13c395ee2d8e6f4a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_304f23d3278cacb05ad4da6fefe248963c601bf3d68c7458c87152357437944e->leave($__internal_304f23d3278cacb05ad4da6fefe248963c601bf3d68c7458c87152357437944e_prof);

        
        $__internal_70c1a4774e837ed6036a6bfb8fab79b9afc74c2a7c6caf13c395ee2d8e6f4a8b->leave($__internal_70c1a4774e837ed6036a6bfb8fab79b9afc74c2a7c6caf13c395ee2d8e6f4a8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98cc2d0e256758b654bd5158b158f00d559bed93fb7904d264794a01bb16b22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cc2d0e256758b654bd5158b158f00d559bed93fb7904d264794a01bb16b22d->enter($__internal_98cc2d0e256758b654bd5158b158f00d559bed93fb7904d264794a01bb16b22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed246e8748f7dbf85f4f1dcbf75de600ab334a5857eda0d3fe0e71e966b13de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed246e8748f7dbf85f4f1dcbf75de600ab334a5857eda0d3fe0e71e966b13de5->enter($__internal_ed246e8748f7dbf85f4f1dcbf75de600ab334a5857eda0d3fe0e71e966b13de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed246e8748f7dbf85f4f1dcbf75de600ab334a5857eda0d3fe0e71e966b13de5->leave($__internal_ed246e8748f7dbf85f4f1dcbf75de600ab334a5857eda0d3fe0e71e966b13de5_prof);

        
        $__internal_98cc2d0e256758b654bd5158b158f00d559bed93fb7904d264794a01bb16b22d->leave($__internal_98cc2d0e256758b654bd5158b158f00d559bed93fb7904d264794a01bb16b22d_prof);

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
", "EloboostedFrontofficeBundle:participation:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/edit.html.twig");
    }
}
