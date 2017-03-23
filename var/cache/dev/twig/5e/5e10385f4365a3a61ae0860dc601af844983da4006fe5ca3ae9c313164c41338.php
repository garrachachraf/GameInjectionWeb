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
        $__internal_e9241cd59abc921585334947f4dbbc3ac565d32a87e5806e3c5ef54c967f2fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9241cd59abc921585334947f4dbbc3ac565d32a87e5806e3c5ef54c967f2fbb->enter($__internal_e9241cd59abc921585334947f4dbbc3ac565d32a87e5806e3c5ef54c967f2fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_14b741b8e46b2b3679e561f15e528f57a66a3ded0d4170174a9173ac2063ccd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b741b8e46b2b3679e561f15e528f57a66a3ded0d4170174a9173ac2063ccd8->enter($__internal_14b741b8e46b2b3679e561f15e528f57a66a3ded0d4170174a9173ac2063ccd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9241cd59abc921585334947f4dbbc3ac565d32a87e5806e3c5ef54c967f2fbb->leave($__internal_e9241cd59abc921585334947f4dbbc3ac565d32a87e5806e3c5ef54c967f2fbb_prof);

        
        $__internal_14b741b8e46b2b3679e561f15e528f57a66a3ded0d4170174a9173ac2063ccd8->leave($__internal_14b741b8e46b2b3679e561f15e528f57a66a3ded0d4170174a9173ac2063ccd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_327f44e6be48515359c9d6da278204da6e2916a3a9d7dd114fcf48eecd422ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327f44e6be48515359c9d6da278204da6e2916a3a9d7dd114fcf48eecd422ba6->enter($__internal_327f44e6be48515359c9d6da278204da6e2916a3a9d7dd114fcf48eecd422ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b28fbc921173b097578dd8068ee04f33f08440ea42b19f02981d05edb1ea038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b28fbc921173b097578dd8068ee04f33f08440ea42b19f02981d05edb1ea038->enter($__internal_3b28fbc921173b097578dd8068ee04f33f08440ea42b19f02981d05edb1ea038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3b28fbc921173b097578dd8068ee04f33f08440ea42b19f02981d05edb1ea038->leave($__internal_3b28fbc921173b097578dd8068ee04f33f08440ea42b19f02981d05edb1ea038_prof);

        
        $__internal_327f44e6be48515359c9d6da278204da6e2916a3a9d7dd114fcf48eecd422ba6->leave($__internal_327f44e6be48515359c9d6da278204da6e2916a3a9d7dd114fcf48eecd422ba6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9f110d23759d21ab017d7dd582199670ede9d434d910ae4f7b7a8234125c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9f110d23759d21ab017d7dd582199670ede9d434d910ae4f7b7a8234125c12->enter($__internal_db9f110d23759d21ab017d7dd582199670ede9d434d910ae4f7b7a8234125c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37c34ea18be1d0c31593c46a7e2cd7d587eede37e5ad5af9a0e47d0b0b1e545e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c34ea18be1d0c31593c46a7e2cd7d587eede37e5ad5af9a0e47d0b0b1e545e->enter($__internal_37c34ea18be1d0c31593c46a7e2cd7d587eede37e5ad5af9a0e47d0b0b1e545e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37c34ea18be1d0c31593c46a7e2cd7d587eede37e5ad5af9a0e47d0b0b1e545e->leave($__internal_37c34ea18be1d0c31593c46a7e2cd7d587eede37e5ad5af9a0e47d0b0b1e545e_prof);

        
        $__internal_db9f110d23759d21ab017d7dd582199670ede9d434d910ae4f7b7a8234125c12->leave($__internal_db9f110d23759d21ab017d7dd582199670ede9d434d910ae4f7b7a8234125c12_prof);

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
