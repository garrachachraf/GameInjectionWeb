<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_80ce0e11649bad8758fe2c33cfc520974d3da5e50e0f4679bd4dc8d7ecfc69ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_4359115ff51f697580207ee063673eb733f044409d3cfd172b1f339fae95b64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4359115ff51f697580207ee063673eb733f044409d3cfd172b1f339fae95b64a->enter($__internal_4359115ff51f697580207ee063673eb733f044409d3cfd172b1f339fae95b64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_40c0b4af22dd125ae0e0c72a850676b3733e2804ab12d6b6ad3af4cb8b6b299d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c0b4af22dd125ae0e0c72a850676b3733e2804ab12d6b6ad3af4cb8b6b299d->enter($__internal_40c0b4af22dd125ae0e0c72a850676b3733e2804ab12d6b6ad3af4cb8b6b299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4359115ff51f697580207ee063673eb733f044409d3cfd172b1f339fae95b64a->leave($__internal_4359115ff51f697580207ee063673eb733f044409d3cfd172b1f339fae95b64a_prof);

        
        $__internal_40c0b4af22dd125ae0e0c72a850676b3733e2804ab12d6b6ad3af4cb8b6b299d->leave($__internal_40c0b4af22dd125ae0e0c72a850676b3733e2804ab12d6b6ad3af4cb8b6b299d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67980b059d1fd882c2613a862bb08553ef74093d7bd89f3cb9258818aa350592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67980b059d1fd882c2613a862bb08553ef74093d7bd89f3cb9258818aa350592->enter($__internal_67980b059d1fd882c2613a862bb08553ef74093d7bd89f3cb9258818aa350592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e05c80882e8152807e57d71bc2f7cb20d2dc953084655327925f53499925e805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c80882e8152807e57d71bc2f7cb20d2dc953084655327925f53499925e805->enter($__internal_e05c80882e8152807e57d71bc2f7cb20d2dc953084655327925f53499925e805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e05c80882e8152807e57d71bc2f7cb20d2dc953084655327925f53499925e805->leave($__internal_e05c80882e8152807e57d71bc2f7cb20d2dc953084655327925f53499925e805_prof);

        
        $__internal_67980b059d1fd882c2613a862bb08553ef74093d7bd89f3cb9258818aa350592->leave($__internal_67980b059d1fd882c2613a862bb08553ef74093d7bd89f3cb9258818aa350592_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdffb37e1353c7032ba44cb8e49e1edb619df0fd5e1b42ee4af159ad2a8b3dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdffb37e1353c7032ba44cb8e49e1edb619df0fd5e1b42ee4af159ad2a8b3dfd->enter($__internal_bdffb37e1353c7032ba44cb8e49e1edb619df0fd5e1b42ee4af159ad2a8b3dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a61842728735b6157645e818784ef301797b6bdad8308346360304ac902d2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a61842728735b6157645e818784ef301797b6bdad8308346360304ac902d2a6->enter($__internal_5a61842728735b6157645e818784ef301797b6bdad8308346360304ac902d2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a61842728735b6157645e818784ef301797b6bdad8308346360304ac902d2a6->leave($__internal_5a61842728735b6157645e818784ef301797b6bdad8308346360304ac902d2a6_prof);

        
        $__internal_bdffb37e1353c7032ba44cb8e49e1edb619df0fd5e1b42ee4af159ad2a8b3dfd->leave($__internal_bdffb37e1353c7032ba44cb8e49e1edb619df0fd5e1b42ee4af159ad2a8b3dfd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
