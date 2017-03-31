<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_34bd073976bb6a092d496e9f0493069ef5193b5946be608722ff0328c3b7b44e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_6e985807ec18bcd7a64b88b08ed90f0cc58e226c111f18ebef9a7d216235dac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e985807ec18bcd7a64b88b08ed90f0cc58e226c111f18ebef9a7d216235dac0->enter($__internal_6e985807ec18bcd7a64b88b08ed90f0cc58e226c111f18ebef9a7d216235dac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_50046b15a1cd85a78e4e3d36d3214db16cf0c0ebec28d3d4e8ac2138d58a7a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50046b15a1cd85a78e4e3d36d3214db16cf0c0ebec28d3d4e8ac2138d58a7a7b->enter($__internal_50046b15a1cd85a78e4e3d36d3214db16cf0c0ebec28d3d4e8ac2138d58a7a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e985807ec18bcd7a64b88b08ed90f0cc58e226c111f18ebef9a7d216235dac0->leave($__internal_6e985807ec18bcd7a64b88b08ed90f0cc58e226c111f18ebef9a7d216235dac0_prof);

        
        $__internal_50046b15a1cd85a78e4e3d36d3214db16cf0c0ebec28d3d4e8ac2138d58a7a7b->leave($__internal_50046b15a1cd85a78e4e3d36d3214db16cf0c0ebec28d3d4e8ac2138d58a7a7b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f61a7cce87472c91befaf57a99b1ac798fe6a9dc2df10de9075780a4961976bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61a7cce87472c91befaf57a99b1ac798fe6a9dc2df10de9075780a4961976bb->enter($__internal_f61a7cce87472c91befaf57a99b1ac798fe6a9dc2df10de9075780a4961976bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aba40596028882f95dde467abc118af1dc61c64174abfee6a6ceb80220767469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba40596028882f95dde467abc118af1dc61c64174abfee6a6ceb80220767469->enter($__internal_aba40596028882f95dde467abc118af1dc61c64174abfee6a6ceb80220767469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aba40596028882f95dde467abc118af1dc61c64174abfee6a6ceb80220767469->leave($__internal_aba40596028882f95dde467abc118af1dc61c64174abfee6a6ceb80220767469_prof);

        
        $__internal_f61a7cce87472c91befaf57a99b1ac798fe6a9dc2df10de9075780a4961976bb->leave($__internal_f61a7cce87472c91befaf57a99b1ac798fe6a9dc2df10de9075780a4961976bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8dd339876438a1ce323a6bc1c4b4ece17cf4b57f50c99a9869574e66d568ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8dd339876438a1ce323a6bc1c4b4ece17cf4b57f50c99a9869574e66d568ed6->enter($__internal_f8dd339876438a1ce323a6bc1c4b4ece17cf4b57f50c99a9869574e66d568ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5028076ae81844fc261870fea6a6726fad4c7239e6e8916581bd3390c5dfabfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5028076ae81844fc261870fea6a6726fad4c7239e6e8916581bd3390c5dfabfd->enter($__internal_5028076ae81844fc261870fea6a6726fad4c7239e6e8916581bd3390c5dfabfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5028076ae81844fc261870fea6a6726fad4c7239e6e8916581bd3390c5dfabfd->leave($__internal_5028076ae81844fc261870fea6a6726fad4c7239e6e8916581bd3390c5dfabfd_prof);

        
        $__internal_f8dd339876438a1ce323a6bc1c4b4ece17cf4b57f50c99a9869574e66d568ed6->leave($__internal_f8dd339876438a1ce323a6bc1c4b4ece17cf4b57f50c99a9869574e66d568ed6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
