<?php

/* games/edit.html.twig */
class __TwigTemplate_9037ec70d1e6eea98283315449d2644a3aad2375a5fe9bd3d05f6412a9e114dd extends Twig_Template
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
        $__internal_e4eed50442df76fbadc409742da93e4aa2be8ef73ad53e29f25c10b759700579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eed50442df76fbadc409742da93e4aa2be8ef73ad53e29f25c10b759700579->enter($__internal_e4eed50442df76fbadc409742da93e4aa2be8ef73ad53e29f25c10b759700579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $__internal_27234f3fa18ea33567819ec36543eb21d4a06fd9075d3aa40c1ffd9528325937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27234f3fa18ea33567819ec36543eb21d4a06fd9075d3aa40c1ffd9528325937->enter($__internal_27234f3fa18ea33567819ec36543eb21d4a06fd9075d3aa40c1ffd9528325937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4eed50442df76fbadc409742da93e4aa2be8ef73ad53e29f25c10b759700579->leave($__internal_e4eed50442df76fbadc409742da93e4aa2be8ef73ad53e29f25c10b759700579_prof);

        
        $__internal_27234f3fa18ea33567819ec36543eb21d4a06fd9075d3aa40c1ffd9528325937->leave($__internal_27234f3fa18ea33567819ec36543eb21d4a06fd9075d3aa40c1ffd9528325937_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ece8dd983ed0097bb1f51d5ac8687a41b48d0fdf35525b83c0a929150fceb44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece8dd983ed0097bb1f51d5ac8687a41b48d0fdf35525b83c0a929150fceb44a->enter($__internal_ece8dd983ed0097bb1f51d5ac8687a41b48d0fdf35525b83c0a929150fceb44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cf9ea646f3ccb1ec028b93d232dadc0e9023a67a303a00f27afe19a124ae223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf9ea646f3ccb1ec028b93d232dadc0e9023a67a303a00f27afe19a124ae223->enter($__internal_2cf9ea646f3ccb1ec028b93d232dadc0e9023a67a303a00f27afe19a124ae223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cf9ea646f3ccb1ec028b93d232dadc0e9023a67a303a00f27afe19a124ae223->leave($__internal_2cf9ea646f3ccb1ec028b93d232dadc0e9023a67a303a00f27afe19a124ae223_prof);

        
        $__internal_ece8dd983ed0097bb1f51d5ac8687a41b48d0fdf35525b83c0a929150fceb44a->leave($__internal_ece8dd983ed0097bb1f51d5ac8687a41b48d0fdf35525b83c0a929150fceb44a_prof);

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
", "games/edit.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\games\\edit.html.twig");
    }
}
