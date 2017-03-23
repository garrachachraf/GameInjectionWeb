<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_23ae26ff49a637e85d0d6906a06c8039d2acd150c07998592ba48f93093b94a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db19595a75a255181cb780bfe4959f988c7b02a24337cdb83f81df81fbf8d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db19595a75a255181cb780bfe4959f988c7b02a24337cdb83f81df81fbf8d0d->enter($__internal_5db19595a75a255181cb780bfe4959f988c7b02a24337cdb83f81df81fbf8d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c4a4ee7e68f07ce8eb4f0149e08cfcb5705279d5ac6f8830eb115ff7eb0cafee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a4ee7e68f07ce8eb4f0149e08cfcb5705279d5ac6f8830eb115ff7eb0cafee->enter($__internal_c4a4ee7e68f07ce8eb4f0149e08cfcb5705279d5ac6f8830eb115ff7eb0cafee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db19595a75a255181cb780bfe4959f988c7b02a24337cdb83f81df81fbf8d0d->leave($__internal_5db19595a75a255181cb780bfe4959f988c7b02a24337cdb83f81df81fbf8d0d_prof);

        
        $__internal_c4a4ee7e68f07ce8eb4f0149e08cfcb5705279d5ac6f8830eb115ff7eb0cafee->leave($__internal_c4a4ee7e68f07ce8eb4f0149e08cfcb5705279d5ac6f8830eb115ff7eb0cafee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbd3661c29b7a70a29f4f8bf32d8d755373398f23518dc5fccda8eec808c51a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd3661c29b7a70a29f4f8bf32d8d755373398f23518dc5fccda8eec808c51a7->enter($__internal_cbd3661c29b7a70a29f4f8bf32d8d755373398f23518dc5fccda8eec808c51a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63fcf6a55d3c5fcb46532102dd28deeaf16c8a1b4f692f0bb2b4394ac77f1123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fcf6a55d3c5fcb46532102dd28deeaf16c8a1b4f692f0bb2b4394ac77f1123->enter($__internal_63fcf6a55d3c5fcb46532102dd28deeaf16c8a1b4f692f0bb2b4394ac77f1123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_63fcf6a55d3c5fcb46532102dd28deeaf16c8a1b4f692f0bb2b4394ac77f1123->leave($__internal_63fcf6a55d3c5fcb46532102dd28deeaf16c8a1b4f692f0bb2b4394ac77f1123_prof);

        
        $__internal_cbd3661c29b7a70a29f4f8bf32d8d755373398f23518dc5fccda8eec808c51a7->leave($__internal_cbd3661c29b7a70a29f4f8bf32d8d755373398f23518dc5fccda8eec808c51a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
