<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_63d72a95f796df9319bff0b30f767c5347d73c469e8988ed469c663dca1a0b15 extends Twig_Template
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
        $__internal_3199e42a6f45be5c8602afaa592a5835614e39f17efcb0d33c9f3e7a628d4b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3199e42a6f45be5c8602afaa592a5835614e39f17efcb0d33c9f3e7a628d4b1f->enter($__internal_3199e42a6f45be5c8602afaa592a5835614e39f17efcb0d33c9f3e7a628d4b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e135018565a0ab99fae1539d637db27ff31a0a7bde0f422fb6ada148ccd4a087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e135018565a0ab99fae1539d637db27ff31a0a7bde0f422fb6ada148ccd4a087->enter($__internal_e135018565a0ab99fae1539d637db27ff31a0a7bde0f422fb6ada148ccd4a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3199e42a6f45be5c8602afaa592a5835614e39f17efcb0d33c9f3e7a628d4b1f->leave($__internal_3199e42a6f45be5c8602afaa592a5835614e39f17efcb0d33c9f3e7a628d4b1f_prof);

        
        $__internal_e135018565a0ab99fae1539d637db27ff31a0a7bde0f422fb6ada148ccd4a087->leave($__internal_e135018565a0ab99fae1539d637db27ff31a0a7bde0f422fb6ada148ccd4a087_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c98c52d4cd7565492c53074b4c1a598a95405bdb4e4c23f32bb52af7d4b5d2d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98c52d4cd7565492c53074b4c1a598a95405bdb4e4c23f32bb52af7d4b5d2d5->enter($__internal_c98c52d4cd7565492c53074b4c1a598a95405bdb4e4c23f32bb52af7d4b5d2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_412acc9b0eb1292d922703d10d37e7d554be48aa38e3f8a9e75e0f276f8c05d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412acc9b0eb1292d922703d10d37e7d554be48aa38e3f8a9e75e0f276f8c05d1->enter($__internal_412acc9b0eb1292d922703d10d37e7d554be48aa38e3f8a9e75e0f276f8c05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_412acc9b0eb1292d922703d10d37e7d554be48aa38e3f8a9e75e0f276f8c05d1->leave($__internal_412acc9b0eb1292d922703d10d37e7d554be48aa38e3f8a9e75e0f276f8c05d1_prof);

        
        $__internal_c98c52d4cd7565492c53074b4c1a598a95405bdb4e4c23f32bb52af7d4b5d2d5->leave($__internal_c98c52d4cd7565492c53074b4c1a598a95405bdb4e4c23f32bb52af7d4b5d2d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2289ff26f8840ce307ea17064ca2dce4273704481050c22a80e0249fa0bacdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2289ff26f8840ce307ea17064ca2dce4273704481050c22a80e0249fa0bacdea->enter($__internal_2289ff26f8840ce307ea17064ca2dce4273704481050c22a80e0249fa0bacdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f15e518c812858e87928105b32891c65a5bc4f6a2925a14db1bbdb4af0103573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15e518c812858e87928105b32891c65a5bc4f6a2925a14db1bbdb4af0103573->enter($__internal_f15e518c812858e87928105b32891c65a5bc4f6a2925a14db1bbdb4af0103573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f15e518c812858e87928105b32891c65a5bc4f6a2925a14db1bbdb4af0103573->leave($__internal_f15e518c812858e87928105b32891c65a5bc4f6a2925a14db1bbdb4af0103573_prof);

        
        $__internal_2289ff26f8840ce307ea17064ca2dce4273704481050c22a80e0249fa0bacdea->leave($__internal_2289ff26f8840ce307ea17064ca2dce4273704481050c22a80e0249fa0bacdea_prof);

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
