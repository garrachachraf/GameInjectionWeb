<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bbc7c7a4edc288b0b6b902490124e05b7d36cf623fe5c20b774fa45a06c5913b extends Twig_Template
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
        $__internal_0013731549034c3b118aa21c84627f408bc2b2784056d48cd13adfe13f8dd28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0013731549034c3b118aa21c84627f408bc2b2784056d48cd13adfe13f8dd28e->enter($__internal_0013731549034c3b118aa21c84627f408bc2b2784056d48cd13adfe13f8dd28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f61bb4b402583c5882a10f13482e916308ae2b53f59a2251dd5b95da7fc748bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61bb4b402583c5882a10f13482e916308ae2b53f59a2251dd5b95da7fc748bc->enter($__internal_f61bb4b402583c5882a10f13482e916308ae2b53f59a2251dd5b95da7fc748bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0013731549034c3b118aa21c84627f408bc2b2784056d48cd13adfe13f8dd28e->leave($__internal_0013731549034c3b118aa21c84627f408bc2b2784056d48cd13adfe13f8dd28e_prof);

        
        $__internal_f61bb4b402583c5882a10f13482e916308ae2b53f59a2251dd5b95da7fc748bc->leave($__internal_f61bb4b402583c5882a10f13482e916308ae2b53f59a2251dd5b95da7fc748bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae91631ad06e24b96f78c748ec0b4d570c840c997e2a8216a4ca59e25b1deb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae91631ad06e24b96f78c748ec0b4d570c840c997e2a8216a4ca59e25b1deb06->enter($__internal_ae91631ad06e24b96f78c748ec0b4d570c840c997e2a8216a4ca59e25b1deb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b45d8bd78bb64d60d1a921ffa77896cd0cae18eb1805a1a7fda4e5d0edc786f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b45d8bd78bb64d60d1a921ffa77896cd0cae18eb1805a1a7fda4e5d0edc786f->enter($__internal_1b45d8bd78bb64d60d1a921ffa77896cd0cae18eb1805a1a7fda4e5d0edc786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1b45d8bd78bb64d60d1a921ffa77896cd0cae18eb1805a1a7fda4e5d0edc786f->leave($__internal_1b45d8bd78bb64d60d1a921ffa77896cd0cae18eb1805a1a7fda4e5d0edc786f_prof);

        
        $__internal_ae91631ad06e24b96f78c748ec0b4d570c840c997e2a8216a4ca59e25b1deb06->leave($__internal_ae91631ad06e24b96f78c748ec0b4d570c840c997e2a8216a4ca59e25b1deb06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_568e005ad3359db705e9a508e755fce27e391db7bd16301988796ae4cc7af6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568e005ad3359db705e9a508e755fce27e391db7bd16301988796ae4cc7af6de->enter($__internal_568e005ad3359db705e9a508e755fce27e391db7bd16301988796ae4cc7af6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7a3f1b342af063e4c7f262a34671a1a71948e713571b548942e4e2afb97e466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a3f1b342af063e4c7f262a34671a1a71948e713571b548942e4e2afb97e466->enter($__internal_f7a3f1b342af063e4c7f262a34671a1a71948e713571b548942e4e2afb97e466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7a3f1b342af063e4c7f262a34671a1a71948e713571b548942e4e2afb97e466->leave($__internal_f7a3f1b342af063e4c7f262a34671a1a71948e713571b548942e4e2afb97e466_prof);

        
        $__internal_568e005ad3359db705e9a508e755fce27e391db7bd16301988796ae4cc7af6de->leave($__internal_568e005ad3359db705e9a508e755fce27e391db7bd16301988796ae4cc7af6de_prof);

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
