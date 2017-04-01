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
        $__internal_b677e1e165b1da11bae89b7d64f3ceaae17b0b018e84411b8fcf43411fd17986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b677e1e165b1da11bae89b7d64f3ceaae17b0b018e84411b8fcf43411fd17986->enter($__internal_b677e1e165b1da11bae89b7d64f3ceaae17b0b018e84411b8fcf43411fd17986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $__internal_3ce2395928fbdc14d77c90c28c1df9bba2b21e0c94f2df5fdee8f78ed0b75378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce2395928fbdc14d77c90c28c1df9bba2b21e0c94f2df5fdee8f78ed0b75378->enter($__internal_3ce2395928fbdc14d77c90c28c1df9bba2b21e0c94f2df5fdee8f78ed0b75378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b677e1e165b1da11bae89b7d64f3ceaae17b0b018e84411b8fcf43411fd17986->leave($__internal_b677e1e165b1da11bae89b7d64f3ceaae17b0b018e84411b8fcf43411fd17986_prof);

        
        $__internal_3ce2395928fbdc14d77c90c28c1df9bba2b21e0c94f2df5fdee8f78ed0b75378->leave($__internal_3ce2395928fbdc14d77c90c28c1df9bba2b21e0c94f2df5fdee8f78ed0b75378_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0519640ad0cbd547a13f1b5508f1793bc2c79875c9f240e296b56acfff93b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0519640ad0cbd547a13f1b5508f1793bc2c79875c9f240e296b56acfff93b0->enter($__internal_eb0519640ad0cbd547a13f1b5508f1793bc2c79875c9f240e296b56acfff93b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f7242620a1a3acc862d56dd7d82016c46c4f4b8453b7f53e5912b5f61ac7077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7242620a1a3acc862d56dd7d82016c46c4f4b8453b7f53e5912b5f61ac7077->enter($__internal_5f7242620a1a3acc862d56dd7d82016c46c4f4b8453b7f53e5912b5f61ac7077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f7242620a1a3acc862d56dd7d82016c46c4f4b8453b7f53e5912b5f61ac7077->leave($__internal_5f7242620a1a3acc862d56dd7d82016c46c4f4b8453b7f53e5912b5f61ac7077_prof);

        
        $__internal_eb0519640ad0cbd547a13f1b5508f1793bc2c79875c9f240e296b56acfff93b0->leave($__internal_eb0519640ad0cbd547a13f1b5508f1793bc2c79875c9f240e296b56acfff93b0_prof);

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
