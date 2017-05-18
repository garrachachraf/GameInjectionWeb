<?php

/* EloboostedFrontofficeBundle:participation:new.html.twig */
class __TwigTemplate_1dfd5368dc90073ebdf98eaa8635ffe3a69ba9d63d6958227ec9261d1bbe5ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:new.html.twig", 1);
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
        $__internal_a26ba3db110eb94e2f0fe504c71dbc6646e9e18b47014174ecaa321774e10c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26ba3db110eb94e2f0fe504c71dbc6646e9e18b47014174ecaa321774e10c78->enter($__internal_a26ba3db110eb94e2f0fe504c71dbc6646e9e18b47014174ecaa321774e10c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $__internal_4b4dcf45ca77229f78e9d9c59df5b3f6a89a07ffd9dcf726477d3b178feac1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4dcf45ca77229f78e9d9c59df5b3f6a89a07ffd9dcf726477d3b178feac1da->enter($__internal_4b4dcf45ca77229f78e9d9c59df5b3f6a89a07ffd9dcf726477d3b178feac1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a26ba3db110eb94e2f0fe504c71dbc6646e9e18b47014174ecaa321774e10c78->leave($__internal_a26ba3db110eb94e2f0fe504c71dbc6646e9e18b47014174ecaa321774e10c78_prof);

        
        $__internal_4b4dcf45ca77229f78e9d9c59df5b3f6a89a07ffd9dcf726477d3b178feac1da->leave($__internal_4b4dcf45ca77229f78e9d9c59df5b3f6a89a07ffd9dcf726477d3b178feac1da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_689ecd611c38c8e4c870c2b56b450df59cac3a01d3e37b8f5f1931f53981a21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689ecd611c38c8e4c870c2b56b450df59cac3a01d3e37b8f5f1931f53981a21f->enter($__internal_689ecd611c38c8e4c870c2b56b450df59cac3a01d3e37b8f5f1931f53981a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b666caf92f29dddd0755f9c8671670626e98ad706ffb7625c0474526ec882c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b666caf92f29dddd0755f9c8671670626e98ad706ffb7625c0474526ec882c8->enter($__internal_5b666caf92f29dddd0755f9c8671670626e98ad706ffb7625c0474526ec882c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5b666caf92f29dddd0755f9c8671670626e98ad706ffb7625c0474526ec882c8->leave($__internal_5b666caf92f29dddd0755f9c8671670626e98ad706ffb7625c0474526ec882c8_prof);

        
        $__internal_689ecd611c38c8e4c870c2b56b450df59cac3a01d3e37b8f5f1931f53981a21f->leave($__internal_689ecd611c38c8e4c870c2b56b450df59cac3a01d3e37b8f5f1931f53981a21f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:new.html.twig";
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
    <h1>Participation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:new.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/new.html.twig");
    }
}
