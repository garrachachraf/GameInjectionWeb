<?php

/* games/new.html.twig */
class __TwigTemplate_8ee25e16e66c741d42090a36f22d3b4d0dd79cb996482e8635143038951a6613 extends Twig_Template
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
        $__internal_a4fc20b68d57d3d619045d38388d669732b528d02ef6edd9e13cdb111da20f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fc20b68d57d3d619045d38388d669732b528d02ef6edd9e13cdb111da20f4e->enter($__internal_a4fc20b68d57d3d619045d38388d669732b528d02ef6edd9e13cdb111da20f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $__internal_56809ba914bcf9174a68aea80e459468a46fe152117b0f21db70f2fc4222eae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56809ba914bcf9174a68aea80e459468a46fe152117b0f21db70f2fc4222eae7->enter($__internal_56809ba914bcf9174a68aea80e459468a46fe152117b0f21db70f2fc4222eae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4fc20b68d57d3d619045d38388d669732b528d02ef6edd9e13cdb111da20f4e->leave($__internal_a4fc20b68d57d3d619045d38388d669732b528d02ef6edd9e13cdb111da20f4e_prof);

        
        $__internal_56809ba914bcf9174a68aea80e459468a46fe152117b0f21db70f2fc4222eae7->leave($__internal_56809ba914bcf9174a68aea80e459468a46fe152117b0f21db70f2fc4222eae7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_867146b06cae0e1bfba2e3a02b6c2f7b64c784b2ed9ad04a3bcb02c05c1fbeec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867146b06cae0e1bfba2e3a02b6c2f7b64c784b2ed9ad04a3bcb02c05c1fbeec->enter($__internal_867146b06cae0e1bfba2e3a02b6c2f7b64c784b2ed9ad04a3bcb02c05c1fbeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a248ceb0b6176033d1a8d3b8a0c468ba7cfa8ea156a62c09b6fde3e2c268137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a248ceb0b6176033d1a8d3b8a0c468ba7cfa8ea156a62c09b6fde3e2c268137->enter($__internal_1a248ceb0b6176033d1a8d3b8a0c468ba7cfa8ea156a62c09b6fde3e2c268137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a248ceb0b6176033d1a8d3b8a0c468ba7cfa8ea156a62c09b6fde3e2c268137->leave($__internal_1a248ceb0b6176033d1a8d3b8a0c468ba7cfa8ea156a62c09b6fde3e2c268137_prof);

        
        $__internal_867146b06cae0e1bfba2e3a02b6c2f7b64c784b2ed9ad04a3bcb02c05c1fbeec->leave($__internal_867146b06cae0e1bfba2e3a02b6c2f7b64c784b2ed9ad04a3bcb02c05c1fbeec_prof);

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
", "games/new.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\new.html.twig");
    }
}
