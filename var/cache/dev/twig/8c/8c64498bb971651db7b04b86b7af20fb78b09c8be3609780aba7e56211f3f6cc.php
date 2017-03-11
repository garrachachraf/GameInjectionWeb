<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
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
        $__internal_9519de3f010f7ea97c3e2d37bd820c26ff0f21f2e3515795f6ca7689e0e487a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9519de3f010f7ea97c3e2d37bd820c26ff0f21f2e3515795f6ca7689e0e487a6->enter($__internal_9519de3f010f7ea97c3e2d37bd820c26ff0f21f2e3515795f6ca7689e0e487a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e6ab91d33fc24ed7836ee5c67c87693203458510b71770d78ad8a1de2ac00a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ab91d33fc24ed7836ee5c67c87693203458510b71770d78ad8a1de2ac00a9c->enter($__internal_e6ab91d33fc24ed7836ee5c67c87693203458510b71770d78ad8a1de2ac00a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9519de3f010f7ea97c3e2d37bd820c26ff0f21f2e3515795f6ca7689e0e487a6->leave($__internal_9519de3f010f7ea97c3e2d37bd820c26ff0f21f2e3515795f6ca7689e0e487a6_prof);

        
        $__internal_e6ab91d33fc24ed7836ee5c67c87693203458510b71770d78ad8a1de2ac00a9c->leave($__internal_e6ab91d33fc24ed7836ee5c67c87693203458510b71770d78ad8a1de2ac00a9c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a61eb8009ddcba256546ed5e4ed5903b114cf4905e430cc44732cb49fcce75de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61eb8009ddcba256546ed5e4ed5903b114cf4905e430cc44732cb49fcce75de->enter($__internal_a61eb8009ddcba256546ed5e4ed5903b114cf4905e430cc44732cb49fcce75de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e284af4d1c5a38f17aa6e09494b18b507873535c7279528e5d72ea80b57820f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e284af4d1c5a38f17aa6e09494b18b507873535c7279528e5d72ea80b57820f3->enter($__internal_e284af4d1c5a38f17aa6e09494b18b507873535c7279528e5d72ea80b57820f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e284af4d1c5a38f17aa6e09494b18b507873535c7279528e5d72ea80b57820f3->leave($__internal_e284af4d1c5a38f17aa6e09494b18b507873535c7279528e5d72ea80b57820f3_prof);

        
        $__internal_a61eb8009ddcba256546ed5e4ed5903b114cf4905e430cc44732cb49fcce75de->leave($__internal_a61eb8009ddcba256546ed5e4ed5903b114cf4905e430cc44732cb49fcce75de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_772fba353ce3c17b7d8a92750b9aba5d312350d749c67573a241ee08e6bc824d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772fba353ce3c17b7d8a92750b9aba5d312350d749c67573a241ee08e6bc824d->enter($__internal_772fba353ce3c17b7d8a92750b9aba5d312350d749c67573a241ee08e6bc824d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d4c1c346a22ee43431801730f735e4856c6012f66b5287a2cac05af4bfeffc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4c1c346a22ee43431801730f735e4856c6012f66b5287a2cac05af4bfeffc6->enter($__internal_5d4c1c346a22ee43431801730f735e4856c6012f66b5287a2cac05af4bfeffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d4c1c346a22ee43431801730f735e4856c6012f66b5287a2cac05af4bfeffc6->leave($__internal_5d4c1c346a22ee43431801730f735e4856c6012f66b5287a2cac05af4bfeffc6_prof);

        
        $__internal_772fba353ce3c17b7d8a92750b9aba5d312350d749c67573a241ee08e6bc824d->leave($__internal_772fba353ce3c17b7d8a92750b9aba5d312350d749c67573a241ee08e6bc824d_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
