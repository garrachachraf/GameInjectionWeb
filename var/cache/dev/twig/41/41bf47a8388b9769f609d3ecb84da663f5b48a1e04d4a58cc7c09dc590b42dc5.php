<?php

/* games/edit.html.twig */
class __TwigTemplate_919969b521c69f51d49e1b81bcaf59ba320257a36729fa356ba93ead47a96393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/edit.html.twig", 1);
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
        $__internal_66c836385990102ec7826b366ff9f4ccb92329df2d457b28badd035111f086c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c836385990102ec7826b366ff9f4ccb92329df2d457b28badd035111f086c6->enter($__internal_66c836385990102ec7826b366ff9f4ccb92329df2d457b28badd035111f086c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $__internal_0895121aa26648745277684bbb9d63dc890a340aa02dd0752d95bf4c1241f14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0895121aa26648745277684bbb9d63dc890a340aa02dd0752d95bf4c1241f14c->enter($__internal_0895121aa26648745277684bbb9d63dc890a340aa02dd0752d95bf4c1241f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66c836385990102ec7826b366ff9f4ccb92329df2d457b28badd035111f086c6->leave($__internal_66c836385990102ec7826b366ff9f4ccb92329df2d457b28badd035111f086c6_prof);

        
        $__internal_0895121aa26648745277684bbb9d63dc890a340aa02dd0752d95bf4c1241f14c->leave($__internal_0895121aa26648745277684bbb9d63dc890a340aa02dd0752d95bf4c1241f14c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11dd88dfd43c3aa71255cfd786b468f6c32124f101471dc83d213b369d6357ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dd88dfd43c3aa71255cfd786b468f6c32124f101471dc83d213b369d6357ed->enter($__internal_11dd88dfd43c3aa71255cfd786b468f6c32124f101471dc83d213b369d6357ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91cac5328a77fb51938c3425af823860ce9859ee1213f5e931de33d68b01df86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91cac5328a77fb51938c3425af823860ce9859ee1213f5e931de33d68b01df86->enter($__internal_91cac5328a77fb51938c3425af823860ce9859ee1213f5e931de33d68b01df86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91cac5328a77fb51938c3425af823860ce9859ee1213f5e931de33d68b01df86->leave($__internal_91cac5328a77fb51938c3425af823860ce9859ee1213f5e931de33d68b01df86_prof);

        
        $__internal_11dd88dfd43c3aa71255cfd786b468f6c32124f101471dc83d213b369d6357ed->leave($__internal_11dd88dfd43c3aa71255cfd786b468f6c32124f101471dc83d213b369d6357ed_prof);

    }

    public function getTemplateName()
    {
        return "games/edit.html.twig";
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
", "games/edit.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\edit.html.twig");
    }
}
