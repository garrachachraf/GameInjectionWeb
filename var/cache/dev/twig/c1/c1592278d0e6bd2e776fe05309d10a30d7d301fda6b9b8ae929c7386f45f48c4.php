<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_93b3652ee3bb9d2cac9b770fd797031583db03585415cbbaa748e68c5e92cb3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437d1e9aa314b7d565ed1f78454ecc8bfe028c4be8654604032c7ceed65b021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437d1e9aa314b7d565ed1f78454ecc8bfe028c4be8654604032c7ceed65b021a->enter($__internal_437d1e9aa314b7d565ed1f78454ecc8bfe028c4be8654604032c7ceed65b021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cbce10dae819da6ea06b74ee8cf4cc1a490b4a6b16ae59b104863765f64acdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbce10dae819da6ea06b74ee8cf4cc1a490b4a6b16ae59b104863765f64acdc0->enter($__internal_cbce10dae819da6ea06b74ee8cf4cc1a490b4a6b16ae59b104863765f64acdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437d1e9aa314b7d565ed1f78454ecc8bfe028c4be8654604032c7ceed65b021a->leave($__internal_437d1e9aa314b7d565ed1f78454ecc8bfe028c4be8654604032c7ceed65b021a_prof);

        
        $__internal_cbce10dae819da6ea06b74ee8cf4cc1a490b4a6b16ae59b104863765f64acdc0->leave($__internal_cbce10dae819da6ea06b74ee8cf4cc1a490b4a6b16ae59b104863765f64acdc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25e568dfa8e963cc2371761b7bd0e9306939babeedcb3fa0877834fcefa0e7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e568dfa8e963cc2371761b7bd0e9306939babeedcb3fa0877834fcefa0e7cf->enter($__internal_25e568dfa8e963cc2371761b7bd0e9306939babeedcb3fa0877834fcefa0e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f3abb6aa409e0c4c252ca86e176489e358a8bad7f9a05aabb29e0876553ebe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3abb6aa409e0c4c252ca86e176489e358a8bad7f9a05aabb29e0876553ebe9->enter($__internal_6f3abb6aa409e0c4c252ca86e176489e358a8bad7f9a05aabb29e0876553ebe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f3abb6aa409e0c4c252ca86e176489e358a8bad7f9a05aabb29e0876553ebe9->leave($__internal_6f3abb6aa409e0c4c252ca86e176489e358a8bad7f9a05aabb29e0876553ebe9_prof);

        
        $__internal_25e568dfa8e963cc2371761b7bd0e9306939babeedcb3fa0877834fcefa0e7cf->leave($__internal_25e568dfa8e963cc2371761b7bd0e9306939babeedcb3fa0877834fcefa0e7cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_beee5f07bcb0e544d30f7a17ad489612e6ea7e272ce0a5f7c7c0d6b6076a44a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beee5f07bcb0e544d30f7a17ad489612e6ea7e272ce0a5f7c7c0d6b6076a44a3->enter($__internal_beee5f07bcb0e544d30f7a17ad489612e6ea7e272ce0a5f7c7c0d6b6076a44a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8b4598c916cb4001faa2494ecddc4f516f55116ce1b2d41a38b736b19184b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b4598c916cb4001faa2494ecddc4f516f55116ce1b2d41a38b736b19184b6f->enter($__internal_f8b4598c916cb4001faa2494ecddc4f516f55116ce1b2d41a38b736b19184b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f8b4598c916cb4001faa2494ecddc4f516f55116ce1b2d41a38b736b19184b6f->leave($__internal_f8b4598c916cb4001faa2494ecddc4f516f55116ce1b2d41a38b736b19184b6f_prof);

        
        $__internal_beee5f07bcb0e544d30f7a17ad489612e6ea7e272ce0a5f7c7c0d6b6076a44a3->leave($__internal_beee5f07bcb0e544d30f7a17ad489612e6ea7e272ce0a5f7c7c0d6b6076a44a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
