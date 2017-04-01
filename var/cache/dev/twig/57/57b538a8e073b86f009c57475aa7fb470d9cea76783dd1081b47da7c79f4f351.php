<?php

/* EloboostedFrontofficeBundle:participation:new.html.twig */
class __TwigTemplate_878cac2870933d306951c44da0d62531de9d414af61cfa8e42b749baf6be3dec extends Twig_Template
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
        $__internal_26bdf163e933be3c0f9e99abcaa5f753d87f1f415eaed5d99ec70112c8e0bd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bdf163e933be3c0f9e99abcaa5f753d87f1f415eaed5d99ec70112c8e0bd2a->enter($__internal_26bdf163e933be3c0f9e99abcaa5f753d87f1f415eaed5d99ec70112c8e0bd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $__internal_fb7a6a95da259a3f75334efc92b65a22d8407c801a87797cf686822548ab9738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7a6a95da259a3f75334efc92b65a22d8407c801a87797cf686822548ab9738->enter($__internal_fb7a6a95da259a3f75334efc92b65a22d8407c801a87797cf686822548ab9738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26bdf163e933be3c0f9e99abcaa5f753d87f1f415eaed5d99ec70112c8e0bd2a->leave($__internal_26bdf163e933be3c0f9e99abcaa5f753d87f1f415eaed5d99ec70112c8e0bd2a_prof);

        
        $__internal_fb7a6a95da259a3f75334efc92b65a22d8407c801a87797cf686822548ab9738->leave($__internal_fb7a6a95da259a3f75334efc92b65a22d8407c801a87797cf686822548ab9738_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9960f92103291b92ab941e80ae07f2d1461220cb60b0ce34842723829fc92896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9960f92103291b92ab941e80ae07f2d1461220cb60b0ce34842723829fc92896->enter($__internal_9960f92103291b92ab941e80ae07f2d1461220cb60b0ce34842723829fc92896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a27bcaa99ee6f4780168f4c4c08d581e8f5de9501aaac4e4bc12e8a2712ae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a27bcaa99ee6f4780168f4c4c08d581e8f5de9501aaac4e4bc12e8a2712ae3b->enter($__internal_8a27bcaa99ee6f4780168f4c4c08d581e8f5de9501aaac4e4bc12e8a2712ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8a27bcaa99ee6f4780168f4c4c08d581e8f5de9501aaac4e4bc12e8a2712ae3b->leave($__internal_8a27bcaa99ee6f4780168f4c4c08d581e8f5de9501aaac4e4bc12e8a2712ae3b_prof);

        
        $__internal_9960f92103291b92ab941e80ae07f2d1461220cb60b0ce34842723829fc92896->leave($__internal_9960f92103291b92ab941e80ae07f2d1461220cb60b0ce34842723829fc92896_prof);

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
", "EloboostedFrontofficeBundle:participation:new.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/new.html.twig");
    }
}
