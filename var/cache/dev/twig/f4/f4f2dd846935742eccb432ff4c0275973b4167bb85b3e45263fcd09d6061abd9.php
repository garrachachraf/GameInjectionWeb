<?php

/* @EloboostedFrontoffice/games/edit.html.twig */
class __TwigTemplate_6deb3da844a8aa306e3588e21a2f70152b11037a2ba91d08f433ef536f469ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/games/edit.html.twig", 1);
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
        $__internal_47d76d5c343f3bf3bf5cc9e820caf022f75fd81d7dc0409741158c01eecb441f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d76d5c343f3bf3bf5cc9e820caf022f75fd81d7dc0409741158c01eecb441f->enter($__internal_47d76d5c343f3bf3bf5cc9e820caf022f75fd81d7dc0409741158c01eecb441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $__internal_afc54991aa2954b14aaf85332843edcd0c9fa228107e5e40cd8e274df6d2a28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc54991aa2954b14aaf85332843edcd0c9fa228107e5e40cd8e274df6d2a28e->enter($__internal_afc54991aa2954b14aaf85332843edcd0c9fa228107e5e40cd8e274df6d2a28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d76d5c343f3bf3bf5cc9e820caf022f75fd81d7dc0409741158c01eecb441f->leave($__internal_47d76d5c343f3bf3bf5cc9e820caf022f75fd81d7dc0409741158c01eecb441f_prof);

        
        $__internal_afc54991aa2954b14aaf85332843edcd0c9fa228107e5e40cd8e274df6d2a28e->leave($__internal_afc54991aa2954b14aaf85332843edcd0c9fa228107e5e40cd8e274df6d2a28e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01d47e90bcae74505ea3fcf1472b1a17176decc5d99072c12f6b1bdd04c71c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d47e90bcae74505ea3fcf1472b1a17176decc5d99072c12f6b1bdd04c71c61->enter($__internal_01d47e90bcae74505ea3fcf1472b1a17176decc5d99072c12f6b1bdd04c71c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cc5ba9b63cd73eee6099bf134f157606b8571c4dcfe5cfcd3b260b67a52e2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc5ba9b63cd73eee6099bf134f157606b8571c4dcfe5cfcd3b260b67a52e2cf->enter($__internal_7cc5ba9b63cd73eee6099bf134f157606b8571c4dcfe5cfcd3b260b67a52e2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7cc5ba9b63cd73eee6099bf134f157606b8571c4dcfe5cfcd3b260b67a52e2cf->leave($__internal_7cc5ba9b63cd73eee6099bf134f157606b8571c4dcfe5cfcd3b260b67a52e2cf_prof);

        
        $__internal_01d47e90bcae74505ea3fcf1472b1a17176decc5d99072c12f6b1bdd04c71c61->leave($__internal_01d47e90bcae74505ea3fcf1472b1a17176decc5d99072c12f6b1bdd04c71c61_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/games/edit.html.twig";
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
", "@EloboostedFrontoffice/games/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\edit.html.twig");
    }
}
