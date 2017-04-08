<?php

/* EloboostedFrontofficeBundle:games:edit.html.twig */
class __TwigTemplate_6b107347c5f6709d56760e33020d625b6af60bfbe2ac6325988dace24b5e421f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:games:edit.html.twig", 1);
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
        $__internal_c58e8f43cc3af4cf195db76eb215b1124c72c4792770968591bd2699e5988758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58e8f43cc3af4cf195db76eb215b1124c72c4792770968591bd2699e5988758->enter($__internal_c58e8f43cc3af4cf195db76eb215b1124c72c4792770968591bd2699e5988758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $__internal_d090f65126ccdf4916b5f9a4b632b98db34a3054898c519c0ffe37fc58ee4bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d090f65126ccdf4916b5f9a4b632b98db34a3054898c519c0ffe37fc58ee4bb6->enter($__internal_d090f65126ccdf4916b5f9a4b632b98db34a3054898c519c0ffe37fc58ee4bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58e8f43cc3af4cf195db76eb215b1124c72c4792770968591bd2699e5988758->leave($__internal_c58e8f43cc3af4cf195db76eb215b1124c72c4792770968591bd2699e5988758_prof);

        
        $__internal_d090f65126ccdf4916b5f9a4b632b98db34a3054898c519c0ffe37fc58ee4bb6->leave($__internal_d090f65126ccdf4916b5f9a4b632b98db34a3054898c519c0ffe37fc58ee4bb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_439181778ace1b7ac4cbe387111f555f7f71374c2537b4de86b65a5e640b21f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439181778ace1b7ac4cbe387111f555f7f71374c2537b4de86b65a5e640b21f9->enter($__internal_439181778ace1b7ac4cbe387111f555f7f71374c2537b4de86b65a5e640b21f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d08ea60cbf3e9eefcc6b570b792426e1e085eeedcd568de5a5b7eab26d8a004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d08ea60cbf3e9eefcc6b570b792426e1e085eeedcd568de5a5b7eab26d8a004->enter($__internal_6d08ea60cbf3e9eefcc6b570b792426e1e085eeedcd568de5a5b7eab26d8a004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d08ea60cbf3e9eefcc6b570b792426e1e085eeedcd568de5a5b7eab26d8a004->leave($__internal_6d08ea60cbf3e9eefcc6b570b792426e1e085eeedcd568de5a5b7eab26d8a004_prof);

        
        $__internal_439181778ace1b7ac4cbe387111f555f7f71374c2537b4de86b65a5e640b21f9->leave($__internal_439181778ace1b7ac4cbe387111f555f7f71374c2537b4de86b65a5e640b21f9_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:edit.html.twig";
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
", "EloboostedFrontofficeBundle:games:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/games/edit.html.twig");
    }
}
