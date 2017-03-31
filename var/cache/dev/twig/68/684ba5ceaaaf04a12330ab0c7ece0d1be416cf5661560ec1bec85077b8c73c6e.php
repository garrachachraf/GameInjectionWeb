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
        $__internal_5d9227b5e71b129b204e027883d4cd3a4d8c2c9207a2292f26c4053fc8d5eebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9227b5e71b129b204e027883d4cd3a4d8c2c9207a2292f26c4053fc8d5eebc->enter($__internal_5d9227b5e71b129b204e027883d4cd3a4d8c2c9207a2292f26c4053fc8d5eebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $__internal_cfc4d8163c7a3ad18410340cca23b4dc4745a4b149064c824b39d660162b026c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc4d8163c7a3ad18410340cca23b4dc4745a4b149064c824b39d660162b026c->enter($__internal_cfc4d8163c7a3ad18410340cca23b4dc4745a4b149064c824b39d660162b026c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9227b5e71b129b204e027883d4cd3a4d8c2c9207a2292f26c4053fc8d5eebc->leave($__internal_5d9227b5e71b129b204e027883d4cd3a4d8c2c9207a2292f26c4053fc8d5eebc_prof);

        
        $__internal_cfc4d8163c7a3ad18410340cca23b4dc4745a4b149064c824b39d660162b026c->leave($__internal_cfc4d8163c7a3ad18410340cca23b4dc4745a4b149064c824b39d660162b026c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fd8840e92659ac59e8a1d6f7ac43d647fd07b1e261f54a923f10f176b810d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd8840e92659ac59e8a1d6f7ac43d647fd07b1e261f54a923f10f176b810d5e->enter($__internal_5fd8840e92659ac59e8a1d6f7ac43d647fd07b1e261f54a923f10f176b810d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89bbf4b18fc87eb16290c39ed93e2e731a17594d6d1d9be8004b5679f6eb2bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bbf4b18fc87eb16290c39ed93e2e731a17594d6d1d9be8004b5679f6eb2bf3->enter($__internal_89bbf4b18fc87eb16290c39ed93e2e731a17594d6d1d9be8004b5679f6eb2bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89bbf4b18fc87eb16290c39ed93e2e731a17594d6d1d9be8004b5679f6eb2bf3->leave($__internal_89bbf4b18fc87eb16290c39ed93e2e731a17594d6d1d9be8004b5679f6eb2bf3_prof);

        
        $__internal_5fd8840e92659ac59e8a1d6f7ac43d647fd07b1e261f54a923f10f176b810d5e->leave($__internal_5fd8840e92659ac59e8a1d6f7ac43d647fd07b1e261f54a923f10f176b810d5e_prof);

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
