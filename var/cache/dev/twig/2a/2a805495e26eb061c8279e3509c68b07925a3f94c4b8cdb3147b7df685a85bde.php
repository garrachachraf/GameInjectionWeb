<?php

/* EloboostedFrontofficeBundle:games:edit.html.twig */
class __TwigTemplate_54f67061de2740a4afbc7e68291950c11c714042856262f9b40e3d8478dd58c7 extends Twig_Template
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
        $__internal_ba32f16a975a8c34fa6ecbd04593fe27b637bee1efb2a73e0a151708a8512a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba32f16a975a8c34fa6ecbd04593fe27b637bee1efb2a73e0a151708a8512a41->enter($__internal_ba32f16a975a8c34fa6ecbd04593fe27b637bee1efb2a73e0a151708a8512a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $__internal_14f0aa2171feaf806dc91b5b609ac22e4b37e2a0c7e896fbc07639f20cab5f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f0aa2171feaf806dc91b5b609ac22e4b37e2a0c7e896fbc07639f20cab5f0d->enter($__internal_14f0aa2171feaf806dc91b5b609ac22e4b37e2a0c7e896fbc07639f20cab5f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba32f16a975a8c34fa6ecbd04593fe27b637bee1efb2a73e0a151708a8512a41->leave($__internal_ba32f16a975a8c34fa6ecbd04593fe27b637bee1efb2a73e0a151708a8512a41_prof);

        
        $__internal_14f0aa2171feaf806dc91b5b609ac22e4b37e2a0c7e896fbc07639f20cab5f0d->leave($__internal_14f0aa2171feaf806dc91b5b609ac22e4b37e2a0c7e896fbc07639f20cab5f0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1ef024912866b0582994f3dc82f7cebf95f9e256e36a9a1c1ffdd26e095057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1ef024912866b0582994f3dc82f7cebf95f9e256e36a9a1c1ffdd26e095057->enter($__internal_8e1ef024912866b0582994f3dc82f7cebf95f9e256e36a9a1c1ffdd26e095057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f36374dde35540b8d82b38aeb77e8d6bde99341b80c0f074b915edc0715cc9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36374dde35540b8d82b38aeb77e8d6bde99341b80c0f074b915edc0715cc9d3->enter($__internal_f36374dde35540b8d82b38aeb77e8d6bde99341b80c0f074b915edc0715cc9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f36374dde35540b8d82b38aeb77e8d6bde99341b80c0f074b915edc0715cc9d3->leave($__internal_f36374dde35540b8d82b38aeb77e8d6bde99341b80c0f074b915edc0715cc9d3_prof);

        
        $__internal_8e1ef024912866b0582994f3dc82f7cebf95f9e256e36a9a1c1ffdd26e095057->leave($__internal_8e1ef024912866b0582994f3dc82f7cebf95f9e256e36a9a1c1ffdd26e095057_prof);

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
", "EloboostedFrontofficeBundle:games:edit.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/games/edit.html.twig");
    }
}
