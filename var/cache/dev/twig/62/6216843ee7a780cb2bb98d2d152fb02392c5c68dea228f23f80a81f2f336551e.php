<?php

/* :games:new.html.twig */
class __TwigTemplate_cc2ecf08d1f13230900c14369f31f77cfb7563320d7c44144d73dd21a56267bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:new.html.twig", 1);
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
        $__internal_525bfadcf24ecedde9185adb51d6822a776f297089f971307c981627a727c366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525bfadcf24ecedde9185adb51d6822a776f297089f971307c981627a727c366->enter($__internal_525bfadcf24ecedde9185adb51d6822a776f297089f971307c981627a727c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $__internal_318a670b28f8eaf9f8b6370eecc6fcd52088b60f90e56d25067b5808a7a8cc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318a670b28f8eaf9f8b6370eecc6fcd52088b60f90e56d25067b5808a7a8cc54->enter($__internal_318a670b28f8eaf9f8b6370eecc6fcd52088b60f90e56d25067b5808a7a8cc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525bfadcf24ecedde9185adb51d6822a776f297089f971307c981627a727c366->leave($__internal_525bfadcf24ecedde9185adb51d6822a776f297089f971307c981627a727c366_prof);

        
        $__internal_318a670b28f8eaf9f8b6370eecc6fcd52088b60f90e56d25067b5808a7a8cc54->leave($__internal_318a670b28f8eaf9f8b6370eecc6fcd52088b60f90e56d25067b5808a7a8cc54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d04f88a5415000da64c46a9f2a6c59394013cfb305d9f68c8b39bc6071d1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d04f88a5415000da64c46a9f2a6c59394013cfb305d9f68c8b39bc6071d1ae->enter($__internal_a5d04f88a5415000da64c46a9f2a6c59394013cfb305d9f68c8b39bc6071d1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_644de6efefd5d86d990a6805b0162d5404ad4677bf1018cfae16dd3789d24e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644de6efefd5d86d990a6805b0162d5404ad4677bf1018cfae16dd3789d24e85->enter($__internal_644de6efefd5d86d990a6805b0162d5404ad4677bf1018cfae16dd3789d24e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_644de6efefd5d86d990a6805b0162d5404ad4677bf1018cfae16dd3789d24e85->leave($__internal_644de6efefd5d86d990a6805b0162d5404ad4677bf1018cfae16dd3789d24e85_prof);

        
        $__internal_a5d04f88a5415000da64c46a9f2a6c59394013cfb305d9f68c8b39bc6071d1ae->leave($__internal_a5d04f88a5415000da64c46a9f2a6c59394013cfb305d9f68c8b39bc6071d1ae_prof);

    }

    public function getTemplateName()
    {
        return ":games:new.html.twig";
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
", ":games:new.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/new.html.twig");
    }
}
