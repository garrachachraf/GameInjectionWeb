<?php

/* @EloboostedFrontoffice/participation/edit.html.twig */
class __TwigTemplate_241e9992365f3d8ac293da95a9e5ebbdf4845d40d97e8a2af3f70f1e82fe13ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/edit.html.twig", 1);
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
        $__internal_fa6ebeb53508d8c6d7d2639ac3eb2d7e1457b4e7444233ea430e862a95660081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6ebeb53508d8c6d7d2639ac3eb2d7e1457b4e7444233ea430e862a95660081->enter($__internal_fa6ebeb53508d8c6d7d2639ac3eb2d7e1457b4e7444233ea430e862a95660081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $__internal_8d7143fac5b524ffc664cf0513074f43bdf28039e7f042290454ae5360fe1f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7143fac5b524ffc664cf0513074f43bdf28039e7f042290454ae5360fe1f6c->enter($__internal_8d7143fac5b524ffc664cf0513074f43bdf28039e7f042290454ae5360fe1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6ebeb53508d8c6d7d2639ac3eb2d7e1457b4e7444233ea430e862a95660081->leave($__internal_fa6ebeb53508d8c6d7d2639ac3eb2d7e1457b4e7444233ea430e862a95660081_prof);

        
        $__internal_8d7143fac5b524ffc664cf0513074f43bdf28039e7f042290454ae5360fe1f6c->leave($__internal_8d7143fac5b524ffc664cf0513074f43bdf28039e7f042290454ae5360fe1f6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_064addb5799867cdd8067c543bf67f20685a630a959d6e4ad061bcc294bbdfc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064addb5799867cdd8067c543bf67f20685a630a959d6e4ad061bcc294bbdfc0->enter($__internal_064addb5799867cdd8067c543bf67f20685a630a959d6e4ad061bcc294bbdfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7867efb689bd78887e9954c6d6902a395fae67c66dbe7e39738c978c90980b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7867efb689bd78887e9954c6d6902a395fae67c66dbe7e39738c978c90980b2c->enter($__internal_7867efb689bd78887e9954c6d6902a395fae67c66dbe7e39738c978c90980b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7867efb689bd78887e9954c6d6902a395fae67c66dbe7e39738c978c90980b2c->leave($__internal_7867efb689bd78887e9954c6d6902a395fae67c66dbe7e39738c978c90980b2c_prof);

        
        $__internal_064addb5799867cdd8067c543bf67f20685a630a959d6e4ad061bcc294bbdfc0->leave($__internal_064addb5799867cdd8067c543bf67f20685a630a959d6e4ad061bcc294bbdfc0_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/edit.html.twig";
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
", "@EloboostedFrontoffice/participation/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\edit.html.twig");
    }
}
