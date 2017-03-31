<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_345e5968c98773c71cda1449dfa30a87bed26411ba262e28dded41a9e65eddee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d1bb0505c69021398480d88ba658ee305c93844011ee67113ba358cf1c575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d1bb0505c69021398480d88ba658ee305c93844011ee67113ba358cf1c575a->enter($__internal_b4d1bb0505c69021398480d88ba658ee305c93844011ee67113ba358cf1c575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d02995f20490d04d1b34735f3cd1dd15f2b8305fac1884c47385cd51c0dfe334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02995f20490d04d1b34735f3cd1dd15f2b8305fac1884c47385cd51c0dfe334->enter($__internal_d02995f20490d04d1b34735f3cd1dd15f2b8305fac1884c47385cd51c0dfe334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d1bb0505c69021398480d88ba658ee305c93844011ee67113ba358cf1c575a->leave($__internal_b4d1bb0505c69021398480d88ba658ee305c93844011ee67113ba358cf1c575a_prof);

        
        $__internal_d02995f20490d04d1b34735f3cd1dd15f2b8305fac1884c47385cd51c0dfe334->leave($__internal_d02995f20490d04d1b34735f3cd1dd15f2b8305fac1884c47385cd51c0dfe334_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_872b2d9ddf40f0992dad2f5cb14a28e0b10e958b708981568b7db94389392907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872b2d9ddf40f0992dad2f5cb14a28e0b10e958b708981568b7db94389392907->enter($__internal_872b2d9ddf40f0992dad2f5cb14a28e0b10e958b708981568b7db94389392907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3800d7689fad565da54d71d9471bc0a588b4d59b4acff79cb2b16443387dc810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3800d7689fad565da54d71d9471bc0a588b4d59b4acff79cb2b16443387dc810->enter($__internal_3800d7689fad565da54d71d9471bc0a588b4d59b4acff79cb2b16443387dc810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3800d7689fad565da54d71d9471bc0a588b4d59b4acff79cb2b16443387dc810->leave($__internal_3800d7689fad565da54d71d9471bc0a588b4d59b4acff79cb2b16443387dc810_prof);

        
        $__internal_872b2d9ddf40f0992dad2f5cb14a28e0b10e958b708981568b7db94389392907->leave($__internal_872b2d9ddf40f0992dad2f5cb14a28e0b10e958b708981568b7db94389392907_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e470b9f194fca1288e1d82d27845349f9ba320cf29c6e87c75115493f0fcb9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e470b9f194fca1288e1d82d27845349f9ba320cf29c6e87c75115493f0fcb9ff->enter($__internal_e470b9f194fca1288e1d82d27845349f9ba320cf29c6e87c75115493f0fcb9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26b768543753bc7dc54165bf2ecb872480743f73d7fff269395ff51d05b1b1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b768543753bc7dc54165bf2ecb872480743f73d7fff269395ff51d05b1b1ea->enter($__internal_26b768543753bc7dc54165bf2ecb872480743f73d7fff269395ff51d05b1b1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_26b768543753bc7dc54165bf2ecb872480743f73d7fff269395ff51d05b1b1ea->leave($__internal_26b768543753bc7dc54165bf2ecb872480743f73d7fff269395ff51d05b1b1ea_prof);

        
        $__internal_e470b9f194fca1288e1d82d27845349f9ba320cf29c6e87c75115493f0fcb9ff->leave($__internal_e470b9f194fca1288e1d82d27845349f9ba320cf29c6e87c75115493f0fcb9ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
