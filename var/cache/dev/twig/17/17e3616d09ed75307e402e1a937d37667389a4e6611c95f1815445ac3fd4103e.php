<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bff4ce5626022c0784bfe00a1cff3b2e7afe0ffce2d625df017284defe92b0fb extends Twig_Template
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
        $__internal_5b6bfc7b6640ce410e1dbac985d095ddb3033d9386bb1f427659aaea7b0ae05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6bfc7b6640ce410e1dbac985d095ddb3033d9386bb1f427659aaea7b0ae05a->enter($__internal_5b6bfc7b6640ce410e1dbac985d095ddb3033d9386bb1f427659aaea7b0ae05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f90a6ce8a3d39dd0b512102b8a5a3e71b0b7073809e58caefc48a7ecccdfc8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90a6ce8a3d39dd0b512102b8a5a3e71b0b7073809e58caefc48a7ecccdfc8ec->enter($__internal_f90a6ce8a3d39dd0b512102b8a5a3e71b0b7073809e58caefc48a7ecccdfc8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6bfc7b6640ce410e1dbac985d095ddb3033d9386bb1f427659aaea7b0ae05a->leave($__internal_5b6bfc7b6640ce410e1dbac985d095ddb3033d9386bb1f427659aaea7b0ae05a_prof);

        
        $__internal_f90a6ce8a3d39dd0b512102b8a5a3e71b0b7073809e58caefc48a7ecccdfc8ec->leave($__internal_f90a6ce8a3d39dd0b512102b8a5a3e71b0b7073809e58caefc48a7ecccdfc8ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a7e515654e7ae021138a2a64961b8756216ceb91ebdd108be4a38e9577298e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7e515654e7ae021138a2a64961b8756216ceb91ebdd108be4a38e9577298e8->enter($__internal_2a7e515654e7ae021138a2a64961b8756216ceb91ebdd108be4a38e9577298e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e2b399e3fff52ea6a82b490b5fb9887c6c86860e8c27fb1ef37f720758216ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2b399e3fff52ea6a82b490b5fb9887c6c86860e8c27fb1ef37f720758216ae->enter($__internal_3e2b399e3fff52ea6a82b490b5fb9887c6c86860e8c27fb1ef37f720758216ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3e2b399e3fff52ea6a82b490b5fb9887c6c86860e8c27fb1ef37f720758216ae->leave($__internal_3e2b399e3fff52ea6a82b490b5fb9887c6c86860e8c27fb1ef37f720758216ae_prof);

        
        $__internal_2a7e515654e7ae021138a2a64961b8756216ceb91ebdd108be4a38e9577298e8->leave($__internal_2a7e515654e7ae021138a2a64961b8756216ceb91ebdd108be4a38e9577298e8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8d81aa61124779b5b42bb6eb3510fb48810dd92926bfb31185db50ff6ec63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8d81aa61124779b5b42bb6eb3510fb48810dd92926bfb31185db50ff6ec63e->enter($__internal_0a8d81aa61124779b5b42bb6eb3510fb48810dd92926bfb31185db50ff6ec63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d5ad38ece0f7379e7edb82867b7570fd181fafa61f8297486614f8bb8f9ad51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ad38ece0f7379e7edb82867b7570fd181fafa61f8297486614f8bb8f9ad51->enter($__internal_1d5ad38ece0f7379e7edb82867b7570fd181fafa61f8297486614f8bb8f9ad51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1d5ad38ece0f7379e7edb82867b7570fd181fafa61f8297486614f8bb8f9ad51->leave($__internal_1d5ad38ece0f7379e7edb82867b7570fd181fafa61f8297486614f8bb8f9ad51_prof);

        
        $__internal_0a8d81aa61124779b5b42bb6eb3510fb48810dd92926bfb31185db50ff6ec63e->leave($__internal_0a8d81aa61124779b5b42bb6eb3510fb48810dd92926bfb31185db50ff6ec63e_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
