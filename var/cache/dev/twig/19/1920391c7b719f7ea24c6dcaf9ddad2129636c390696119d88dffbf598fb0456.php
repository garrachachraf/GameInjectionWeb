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
        $__internal_3b5fc507891800f6a492bd5006f60f3a3598fbbda1514905729c21334c7408a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5fc507891800f6a492bd5006f60f3a3598fbbda1514905729c21334c7408a3->enter($__internal_3b5fc507891800f6a492bd5006f60f3a3598fbbda1514905729c21334c7408a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3314ed65f9021c5515c53cd3e72dbf9959454387ca81d26f704e5c021e38e65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3314ed65f9021c5515c53cd3e72dbf9959454387ca81d26f704e5c021e38e65e->enter($__internal_3314ed65f9021c5515c53cd3e72dbf9959454387ca81d26f704e5c021e38e65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5fc507891800f6a492bd5006f60f3a3598fbbda1514905729c21334c7408a3->leave($__internal_3b5fc507891800f6a492bd5006f60f3a3598fbbda1514905729c21334c7408a3_prof);

        
        $__internal_3314ed65f9021c5515c53cd3e72dbf9959454387ca81d26f704e5c021e38e65e->leave($__internal_3314ed65f9021c5515c53cd3e72dbf9959454387ca81d26f704e5c021e38e65e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_852ab2f742f1f9c316826f6642c17096e269b174289593767ce82ed93ca65c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852ab2f742f1f9c316826f6642c17096e269b174289593767ce82ed93ca65c30->enter($__internal_852ab2f742f1f9c316826f6642c17096e269b174289593767ce82ed93ca65c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_615b1289ba012db3fb55dca4ee92d4764ec9e8b1429c5bdd25d131f23c5a2c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615b1289ba012db3fb55dca4ee92d4764ec9e8b1429c5bdd25d131f23c5a2c41->enter($__internal_615b1289ba012db3fb55dca4ee92d4764ec9e8b1429c5bdd25d131f23c5a2c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_615b1289ba012db3fb55dca4ee92d4764ec9e8b1429c5bdd25d131f23c5a2c41->leave($__internal_615b1289ba012db3fb55dca4ee92d4764ec9e8b1429c5bdd25d131f23c5a2c41_prof);

        
        $__internal_852ab2f742f1f9c316826f6642c17096e269b174289593767ce82ed93ca65c30->leave($__internal_852ab2f742f1f9c316826f6642c17096e269b174289593767ce82ed93ca65c30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b09b42663a913302b039e924f495719e4bf77cf18bf8e315b69781c944c586a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b09b42663a913302b039e924f495719e4bf77cf18bf8e315b69781c944c586a->enter($__internal_1b09b42663a913302b039e924f495719e4bf77cf18bf8e315b69781c944c586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f59fc7de511e732c70577f13b9bd7197cabf61acdcdb1f7813d91d964506cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f59fc7de511e732c70577f13b9bd7197cabf61acdcdb1f7813d91d964506cd9->enter($__internal_6f59fc7de511e732c70577f13b9bd7197cabf61acdcdb1f7813d91d964506cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f59fc7de511e732c70577f13b9bd7197cabf61acdcdb1f7813d91d964506cd9->leave($__internal_6f59fc7de511e732c70577f13b9bd7197cabf61acdcdb1f7813d91d964506cd9_prof);

        
        $__internal_1b09b42663a913302b039e924f495719e4bf77cf18bf8e315b69781c944c586a->leave($__internal_1b09b42663a913302b039e924f495719e4bf77cf18bf8e315b69781c944c586a_prof);

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
