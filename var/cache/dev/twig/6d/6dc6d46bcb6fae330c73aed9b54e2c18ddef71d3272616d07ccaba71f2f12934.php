<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6a328d09b1747b8e2335fd177576d40e03c1b86ce217bb939d8d80e31263d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_e451c9e735dec6a5a91ba2a5ce428ad21597eeb8c119478127bd6ed84762cc0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e451c9e735dec6a5a91ba2a5ce428ad21597eeb8c119478127bd6ed84762cc0a->enter($__internal_e451c9e735dec6a5a91ba2a5ce428ad21597eeb8c119478127bd6ed84762cc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_076f119a5f57ce93d79586e0d74b0fcfa4e9a52367bfebabeffa2342969dace9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076f119a5f57ce93d79586e0d74b0fcfa4e9a52367bfebabeffa2342969dace9->enter($__internal_076f119a5f57ce93d79586e0d74b0fcfa4e9a52367bfebabeffa2342969dace9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e451c9e735dec6a5a91ba2a5ce428ad21597eeb8c119478127bd6ed84762cc0a->leave($__internal_e451c9e735dec6a5a91ba2a5ce428ad21597eeb8c119478127bd6ed84762cc0a_prof);

        
        $__internal_076f119a5f57ce93d79586e0d74b0fcfa4e9a52367bfebabeffa2342969dace9->leave($__internal_076f119a5f57ce93d79586e0d74b0fcfa4e9a52367bfebabeffa2342969dace9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_861facd199a38e21c997ba0f5b4d92451419701659f2c0e3555822762028f6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861facd199a38e21c997ba0f5b4d92451419701659f2c0e3555822762028f6f6->enter($__internal_861facd199a38e21c997ba0f5b4d92451419701659f2c0e3555822762028f6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_53f7fe266ed92718a0d214e236be3b6a10d506e112b822b04f9245ac72f2841f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f7fe266ed92718a0d214e236be3b6a10d506e112b822b04f9245ac72f2841f->enter($__internal_53f7fe266ed92718a0d214e236be3b6a10d506e112b822b04f9245ac72f2841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_53f7fe266ed92718a0d214e236be3b6a10d506e112b822b04f9245ac72f2841f->leave($__internal_53f7fe266ed92718a0d214e236be3b6a10d506e112b822b04f9245ac72f2841f_prof);

        
        $__internal_861facd199a38e21c997ba0f5b4d92451419701659f2c0e3555822762028f6f6->leave($__internal_861facd199a38e21c997ba0f5b4d92451419701659f2c0e3555822762028f6f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
