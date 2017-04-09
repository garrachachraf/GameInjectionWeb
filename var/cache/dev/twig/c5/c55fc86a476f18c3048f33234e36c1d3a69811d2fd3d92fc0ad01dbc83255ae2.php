<?php

/* :games:edit.html.twig */
class __TwigTemplate_f6287d608ab4989b6f5abf1d523c5e347decbdab2a824cebfd94941c232e4cbd extends Twig_Template
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
        $__internal_bcf5827b595c54fff36f7742a3384495f06e022e469f068ad72231e8567dc893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf5827b595c54fff36f7742a3384495f06e022e469f068ad72231e8567dc893->enter($__internal_bcf5827b595c54fff36f7742a3384495f06e022e469f068ad72231e8567dc893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $__internal_c5750f0f642973afddb9f2c25b758ef63fb3162ff54a12695e8a51be65ddab05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5750f0f642973afddb9f2c25b758ef63fb3162ff54a12695e8a51be65ddab05->enter($__internal_c5750f0f642973afddb9f2c25b758ef63fb3162ff54a12695e8a51be65ddab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf5827b595c54fff36f7742a3384495f06e022e469f068ad72231e8567dc893->leave($__internal_bcf5827b595c54fff36f7742a3384495f06e022e469f068ad72231e8567dc893_prof);

        
        $__internal_c5750f0f642973afddb9f2c25b758ef63fb3162ff54a12695e8a51be65ddab05->leave($__internal_c5750f0f642973afddb9f2c25b758ef63fb3162ff54a12695e8a51be65ddab05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ed443dc63e3f90e007ca1b2278890c8e58baa2d1fc156ff679dfe3f9381b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ed443dc63e3f90e007ca1b2278890c8e58baa2d1fc156ff679dfe3f9381b6d->enter($__internal_65ed443dc63e3f90e007ca1b2278890c8e58baa2d1fc156ff679dfe3f9381b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70a4266ab5da2fd5ca7e374b3eb11bd132238e2d7b3698e654071f875eac09f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a4266ab5da2fd5ca7e374b3eb11bd132238e2d7b3698e654071f875eac09f3->enter($__internal_70a4266ab5da2fd5ca7e374b3eb11bd132238e2d7b3698e654071f875eac09f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70a4266ab5da2fd5ca7e374b3eb11bd132238e2d7b3698e654071f875eac09f3->leave($__internal_70a4266ab5da2fd5ca7e374b3eb11bd132238e2d7b3698e654071f875eac09f3_prof);

        
        $__internal_65ed443dc63e3f90e007ca1b2278890c8e58baa2d1fc156ff679dfe3f9381b6d->leave($__internal_65ed443dc63e3f90e007ca1b2278890c8e58baa2d1fc156ff679dfe3f9381b6d_prof);

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
", ":games:edit.html.twig", "C:\\wamp64\\www\\testmerge\\app/Resources\\views/games/edit.html.twig");
    }
}
