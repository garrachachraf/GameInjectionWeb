<?php

/* @EloboostedFrontoffice/participation/edit.html.twig */
class __TwigTemplate_d02142c44843404316ebd3135eef949277ceaf22603afaba00bb5de66e879115 extends Twig_Template
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
        $__internal_f986c12b241737d4d7d3f6f6713eaa2359ec72c0929033cd2326b093ceb6d6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f986c12b241737d4d7d3f6f6713eaa2359ec72c0929033cd2326b093ceb6d6b3->enter($__internal_f986c12b241737d4d7d3f6f6713eaa2359ec72c0929033cd2326b093ceb6d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $__internal_92c65513b42f3e72d54ff1a7a940fd773d1dce8ece58811ca5c6ee5002a8b5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c65513b42f3e72d54ff1a7a940fd773d1dce8ece58811ca5c6ee5002a8b5fe->enter($__internal_92c65513b42f3e72d54ff1a7a940fd773d1dce8ece58811ca5c6ee5002a8b5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f986c12b241737d4d7d3f6f6713eaa2359ec72c0929033cd2326b093ceb6d6b3->leave($__internal_f986c12b241737d4d7d3f6f6713eaa2359ec72c0929033cd2326b093ceb6d6b3_prof);

        
        $__internal_92c65513b42f3e72d54ff1a7a940fd773d1dce8ece58811ca5c6ee5002a8b5fe->leave($__internal_92c65513b42f3e72d54ff1a7a940fd773d1dce8ece58811ca5c6ee5002a8b5fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6244f909dee23742aee63f498668101ebef4a64592f17a3207af8251dced0a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6244f909dee23742aee63f498668101ebef4a64592f17a3207af8251dced0a0e->enter($__internal_6244f909dee23742aee63f498668101ebef4a64592f17a3207af8251dced0a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9715ef9720e9f1bacdf03ee6035d3c8b56256cf2b05729f6a66f94a34697127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9715ef9720e9f1bacdf03ee6035d3c8b56256cf2b05729f6a66f94a34697127->enter($__internal_f9715ef9720e9f1bacdf03ee6035d3c8b56256cf2b05729f6a66f94a34697127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9715ef9720e9f1bacdf03ee6035d3c8b56256cf2b05729f6a66f94a34697127->leave($__internal_f9715ef9720e9f1bacdf03ee6035d3c8b56256cf2b05729f6a66f94a34697127_prof);

        
        $__internal_6244f909dee23742aee63f498668101ebef4a64592f17a3207af8251dced0a0e->leave($__internal_6244f909dee23742aee63f498668101ebef4a64592f17a3207af8251dced0a0e_prof);

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
", "@EloboostedFrontoffice/participation/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\edit.html.twig");
    }
}
