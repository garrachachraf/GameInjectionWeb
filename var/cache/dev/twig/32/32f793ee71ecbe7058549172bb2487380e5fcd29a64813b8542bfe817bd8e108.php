<?php

/* games/new.html.twig */
class __TwigTemplate_83439b88065c7df895afeb1d6a43c42ed95348fb0dd9f44de559a71e08d2cb59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/new.html.twig", 1);
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
        $__internal_cbfc90e902834271dd8ef2691d0ecd983a738743e60b8250e9e2475d1ba35be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfc90e902834271dd8ef2691d0ecd983a738743e60b8250e9e2475d1ba35be2->enter($__internal_cbfc90e902834271dd8ef2691d0ecd983a738743e60b8250e9e2475d1ba35be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $__internal_18f216c9fa3498b152fc6b9cdfc02b06c8feae7c20e371b3c482eb32bad60b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f216c9fa3498b152fc6b9cdfc02b06c8feae7c20e371b3c482eb32bad60b5b->enter($__internal_18f216c9fa3498b152fc6b9cdfc02b06c8feae7c20e371b3c482eb32bad60b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfc90e902834271dd8ef2691d0ecd983a738743e60b8250e9e2475d1ba35be2->leave($__internal_cbfc90e902834271dd8ef2691d0ecd983a738743e60b8250e9e2475d1ba35be2_prof);

        
        $__internal_18f216c9fa3498b152fc6b9cdfc02b06c8feae7c20e371b3c482eb32bad60b5b->leave($__internal_18f216c9fa3498b152fc6b9cdfc02b06c8feae7c20e371b3c482eb32bad60b5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24c7e516f8f681f8a7fb5d0a31f76847b1ef560cd3bceb22f9511a3326160930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c7e516f8f681f8a7fb5d0a31f76847b1ef560cd3bceb22f9511a3326160930->enter($__internal_24c7e516f8f681f8a7fb5d0a31f76847b1ef560cd3bceb22f9511a3326160930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bc6a8f87b157068fe731f79b69c69544d5b2e41d9906830a2d6de347765faf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc6a8f87b157068fe731f79b69c69544d5b2e41d9906830a2d6de347765faf1->enter($__internal_5bc6a8f87b157068fe731f79b69c69544d5b2e41d9906830a2d6de347765faf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5bc6a8f87b157068fe731f79b69c69544d5b2e41d9906830a2d6de347765faf1->leave($__internal_5bc6a8f87b157068fe731f79b69c69544d5b2e41d9906830a2d6de347765faf1_prof);

        
        $__internal_24c7e516f8f681f8a7fb5d0a31f76847b1ef560cd3bceb22f9511a3326160930->leave($__internal_24c7e516f8f681f8a7fb5d0a31f76847b1ef560cd3bceb22f9511a3326160930_prof);

    }

    public function getTemplateName()
    {
        return "games/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Game creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "games/new.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\games\\new.html.twig");
    }
}
