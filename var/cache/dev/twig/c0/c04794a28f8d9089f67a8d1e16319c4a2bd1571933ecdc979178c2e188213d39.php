<?php

/* EloboostedBackofficeBundle:Tournoi:edit.html.twig */
class __TwigTemplate_ad228620e1394c7f153173bcc82bf1d39e84a3d398acc10c2f36351d7302c78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Tournoi:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7d2a6e8831d3299f0e9a4743481f23c3765efdfcbc7326f48a6f648bc388cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d2a6e8831d3299f0e9a4743481f23c3765efdfcbc7326f48a6f648bc388cda->enter($__internal_c7d2a6e8831d3299f0e9a4743481f23c3765efdfcbc7326f48a6f648bc388cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $__internal_d38459087555163485846f92662517a9199073abfcfd4260492191116ccadb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38459087555163485846f92662517a9199073abfcfd4260492191116ccadb71->enter($__internal_d38459087555163485846f92662517a9199073abfcfd4260492191116ccadb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d2a6e8831d3299f0e9a4743481f23c3765efdfcbc7326f48a6f648bc388cda->leave($__internal_c7d2a6e8831d3299f0e9a4743481f23c3765efdfcbc7326f48a6f648bc388cda_prof);

        
        $__internal_d38459087555163485846f92662517a9199073abfcfd4260492191116ccadb71->leave($__internal_d38459087555163485846f92662517a9199073abfcfd4260492191116ccadb71_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3422ff2bc39d009c07bbc46bce61e30bbe27eed9fba10337db322b98c0842536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3422ff2bc39d009c07bbc46bce61e30bbe27eed9fba10337db322b98c0842536->enter($__internal_3422ff2bc39d009c07bbc46bce61e30bbe27eed9fba10337db322b98c0842536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e2231a36ad76f30dc17788cffcbf815ebedcfd46304c8dc1adf2912d32d15b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2231a36ad76f30dc17788cffcbf815ebedcfd46304c8dc1adf2912d32d15b4b->enter($__internal_e2231a36ad76f30dc17788cffcbf815ebedcfd46304c8dc1adf2912d32d15b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Tournoi edit</h1>
    ";
        // line 5
        if ( !(null === ($context["erreur"] ?? $this->getContext($context, "erreur")))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e2231a36ad76f30dc17788cffcbf815ebedcfd46304c8dc1adf2912d32d15b4b->leave($__internal_e2231a36ad76f30dc17788cffcbf815ebedcfd46304c8dc1adf2912d32d15b4b_prof);

        
        $__internal_3422ff2bc39d009c07bbc46bce61e30bbe27eed9fba10337db322b98c0842536->leave($__internal_3422ff2bc39d009c07bbc46bce61e30bbe27eed9fba10337db322b98c0842536_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Tournoi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 20,  79 => 17,  72 => 13,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}

{% block main %}
    <h1>Tournoi edit</h1>
    {% if erreur is not null %}
    {{ erreur }}
    {% endif %}
    {{ form_start(edit_form) }}

        {{ form_widget(edit_form) }}

        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedBackofficeBundle:Tournoi:edit.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Tournoi/edit.html.twig");
    }
}
