<?php

/* EloboostedFrontofficeBundle:games:edit.html.twig */
class __TwigTemplate_cdcfb10c85aefda1cbe2b3d1394f88d381cfc20cdde2f9340d52793fa6af79e2 extends Twig_Template
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
        $__internal_f003c5069c883b81f770217d44473d9a0bbc329bf986a7e495625e770f605369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f003c5069c883b81f770217d44473d9a0bbc329bf986a7e495625e770f605369->enter($__internal_f003c5069c883b81f770217d44473d9a0bbc329bf986a7e495625e770f605369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $__internal_c60a78e646eeaf47070c8cf58a0b27ee2df10e675b5474e7558425f586981fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60a78e646eeaf47070c8cf58a0b27ee2df10e675b5474e7558425f586981fb4->enter($__internal_c60a78e646eeaf47070c8cf58a0b27ee2df10e675b5474e7558425f586981fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f003c5069c883b81f770217d44473d9a0bbc329bf986a7e495625e770f605369->leave($__internal_f003c5069c883b81f770217d44473d9a0bbc329bf986a7e495625e770f605369_prof);

        
        $__internal_c60a78e646eeaf47070c8cf58a0b27ee2df10e675b5474e7558425f586981fb4->leave($__internal_c60a78e646eeaf47070c8cf58a0b27ee2df10e675b5474e7558425f586981fb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f2ddd66f9b2ea948ea0e40817a782b63375d42bed97c5df6117549d5b85f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f2ddd66f9b2ea948ea0e40817a782b63375d42bed97c5df6117549d5b85f80->enter($__internal_e8f2ddd66f9b2ea948ea0e40817a782b63375d42bed97c5df6117549d5b85f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12f686717bd829455254dc77ba4abce75dcd8fbb30ce84112ad343680734da51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f686717bd829455254dc77ba4abce75dcd8fbb30ce84112ad343680734da51->enter($__internal_12f686717bd829455254dc77ba4abce75dcd8fbb30ce84112ad343680734da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12f686717bd829455254dc77ba4abce75dcd8fbb30ce84112ad343680734da51->leave($__internal_12f686717bd829455254dc77ba4abce75dcd8fbb30ce84112ad343680734da51_prof);

        
        $__internal_e8f2ddd66f9b2ea948ea0e40817a782b63375d42bed97c5df6117549d5b85f80->leave($__internal_e8f2ddd66f9b2ea948ea0e40817a782b63375d42bed97c5df6117549d5b85f80_prof);

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
", "EloboostedFrontofficeBundle:games:edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/games/edit.html.twig");
    }
}
