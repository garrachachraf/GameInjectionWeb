<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3d39b66d3a381c2675182f0bc89f38e964de0a537953d3b52766430016baa399 extends Twig_Template
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
        $__internal_5eb44ed0f9f33d7595e8fc65f4c2a28c122e53c34f3b0efb062338b6aec4f378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb44ed0f9f33d7595e8fc65f4c2a28c122e53c34f3b0efb062338b6aec4f378->enter($__internal_5eb44ed0f9f33d7595e8fc65f4c2a28c122e53c34f3b0efb062338b6aec4f378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_269d9358c5e05f84a75f66204528bc571a3a072db554ae321826db11452a7011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269d9358c5e05f84a75f66204528bc571a3a072db554ae321826db11452a7011->enter($__internal_269d9358c5e05f84a75f66204528bc571a3a072db554ae321826db11452a7011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb44ed0f9f33d7595e8fc65f4c2a28c122e53c34f3b0efb062338b6aec4f378->leave($__internal_5eb44ed0f9f33d7595e8fc65f4c2a28c122e53c34f3b0efb062338b6aec4f378_prof);

        
        $__internal_269d9358c5e05f84a75f66204528bc571a3a072db554ae321826db11452a7011->leave($__internal_269d9358c5e05f84a75f66204528bc571a3a072db554ae321826db11452a7011_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_104a654298f48cf18da871dce0bde60b228192c71e83f399e80780d110ddd2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104a654298f48cf18da871dce0bde60b228192c71e83f399e80780d110ddd2ba->enter($__internal_104a654298f48cf18da871dce0bde60b228192c71e83f399e80780d110ddd2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bef7c4149076ec284ec4c7aef21635a168d8fadba860386177600afc6f1ca134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef7c4149076ec284ec4c7aef21635a168d8fadba860386177600afc6f1ca134->enter($__internal_bef7c4149076ec284ec4c7aef21635a168d8fadba860386177600afc6f1ca134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bef7c4149076ec284ec4c7aef21635a168d8fadba860386177600afc6f1ca134->leave($__internal_bef7c4149076ec284ec4c7aef21635a168d8fadba860386177600afc6f1ca134_prof);

        
        $__internal_104a654298f48cf18da871dce0bde60b228192c71e83f399e80780d110ddd2ba->leave($__internal_104a654298f48cf18da871dce0bde60b228192c71e83f399e80780d110ddd2ba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c2a873d93dd14a2709be34ccdc768f2c2936610a3276f9a5f21badfbec3f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c2a873d93dd14a2709be34ccdc768f2c2936610a3276f9a5f21badfbec3f07->enter($__internal_e0c2a873d93dd14a2709be34ccdc768f2c2936610a3276f9a5f21badfbec3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1543e41cddebf50ce34e6a3fb68b14dd390ade1d2196e26fe09d6509565b5dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1543e41cddebf50ce34e6a3fb68b14dd390ade1d2196e26fe09d6509565b5dc9->enter($__internal_1543e41cddebf50ce34e6a3fb68b14dd390ade1d2196e26fe09d6509565b5dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1543e41cddebf50ce34e6a3fb68b14dd390ade1d2196e26fe09d6509565b5dc9->leave($__internal_1543e41cddebf50ce34e6a3fb68b14dd390ade1d2196e26fe09d6509565b5dc9_prof);

        
        $__internal_e0c2a873d93dd14a2709be34ccdc768f2c2936610a3276f9a5f21badfbec3f07->leave($__internal_e0c2a873d93dd14a2709be34ccdc768f2c2936610a3276f9a5f21badfbec3f07_prof);

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
