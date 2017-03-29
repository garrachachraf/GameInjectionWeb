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
        $__internal_9933d81c551e6ec6563992036a7834acdbcca07985fb5fb140d83030ecb129f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9933d81c551e6ec6563992036a7834acdbcca07985fb5fb140d83030ecb129f0->enter($__internal_9933d81c551e6ec6563992036a7834acdbcca07985fb5fb140d83030ecb129f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_bf96597a9ea48eb7d2070cacdd84eafbd2e8a539da10e4a722adcf3f04bbdbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf96597a9ea48eb7d2070cacdd84eafbd2e8a539da10e4a722adcf3f04bbdbc9->enter($__internal_bf96597a9ea48eb7d2070cacdd84eafbd2e8a539da10e4a722adcf3f04bbdbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9933d81c551e6ec6563992036a7834acdbcca07985fb5fb140d83030ecb129f0->leave($__internal_9933d81c551e6ec6563992036a7834acdbcca07985fb5fb140d83030ecb129f0_prof);

        
        $__internal_bf96597a9ea48eb7d2070cacdd84eafbd2e8a539da10e4a722adcf3f04bbdbc9->leave($__internal_bf96597a9ea48eb7d2070cacdd84eafbd2e8a539da10e4a722adcf3f04bbdbc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1ceb940ffc237398a2e4ef1dd2d2fb891e2954bb1336f8a789f87f72d6fd483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ceb940ffc237398a2e4ef1dd2d2fb891e2954bb1336f8a789f87f72d6fd483->enter($__internal_d1ceb940ffc237398a2e4ef1dd2d2fb891e2954bb1336f8a789f87f72d6fd483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f1ec19c8806bcd13f315283e8697d6b350dcfaddaa53dfab3ce831b0ef9ec3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1ec19c8806bcd13f315283e8697d6b350dcfaddaa53dfab3ce831b0ef9ec3f->enter($__internal_0f1ec19c8806bcd13f315283e8697d6b350dcfaddaa53dfab3ce831b0ef9ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0f1ec19c8806bcd13f315283e8697d6b350dcfaddaa53dfab3ce831b0ef9ec3f->leave($__internal_0f1ec19c8806bcd13f315283e8697d6b350dcfaddaa53dfab3ce831b0ef9ec3f_prof);

        
        $__internal_d1ceb940ffc237398a2e4ef1dd2d2fb891e2954bb1336f8a789f87f72d6fd483->leave($__internal_d1ceb940ffc237398a2e4ef1dd2d2fb891e2954bb1336f8a789f87f72d6fd483_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f980144cae060ac9f6783632c354a00f4ed815dffb7d6c50f0549384bc12f5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f980144cae060ac9f6783632c354a00f4ed815dffb7d6c50f0549384bc12f5f2->enter($__internal_f980144cae060ac9f6783632c354a00f4ed815dffb7d6c50f0549384bc12f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1594d7977ce83a3174f76749af819b6daf21b6b472ee86a4e53faefcdf1f5c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1594d7977ce83a3174f76749af819b6daf21b6b472ee86a4e53faefcdf1f5c59->enter($__internal_1594d7977ce83a3174f76749af819b6daf21b6b472ee86a4e53faefcdf1f5c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1594d7977ce83a3174f76749af819b6daf21b6b472ee86a4e53faefcdf1f5c59->leave($__internal_1594d7977ce83a3174f76749af819b6daf21b6b472ee86a4e53faefcdf1f5c59_prof);

        
        $__internal_f980144cae060ac9f6783632c354a00f4ed815dffb7d6c50f0549384bc12f5f2->leave($__internal_f980144cae060ac9f6783632c354a00f4ed815dffb7d6c50f0549384bc12f5f2_prof);

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
