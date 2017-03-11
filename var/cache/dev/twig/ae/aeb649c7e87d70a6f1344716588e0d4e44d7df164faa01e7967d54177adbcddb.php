<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_469bb03d78ae0ef4647fb4225132c5a3d32d7400988420ca5e95cd9d628e3bca extends Twig_Template
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
        $__internal_df58075a888e7c04e9d853f3f473502d3b5e9a451b4fb8364cbe4188c1ea59ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df58075a888e7c04e9d853f3f473502d3b5e9a451b4fb8364cbe4188c1ea59ea->enter($__internal_df58075a888e7c04e9d853f3f473502d3b5e9a451b4fb8364cbe4188c1ea59ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b2cbc6ec8e32ff1f6f12f3b445004f64cea49fd83902a7748e2e60904ef3cfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cbc6ec8e32ff1f6f12f3b445004f64cea49fd83902a7748e2e60904ef3cfc6->enter($__internal_b2cbc6ec8e32ff1f6f12f3b445004f64cea49fd83902a7748e2e60904ef3cfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df58075a888e7c04e9d853f3f473502d3b5e9a451b4fb8364cbe4188c1ea59ea->leave($__internal_df58075a888e7c04e9d853f3f473502d3b5e9a451b4fb8364cbe4188c1ea59ea_prof);

        
        $__internal_b2cbc6ec8e32ff1f6f12f3b445004f64cea49fd83902a7748e2e60904ef3cfc6->leave($__internal_b2cbc6ec8e32ff1f6f12f3b445004f64cea49fd83902a7748e2e60904ef3cfc6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee6d1ca01a6511a1997bea6664465ed7bde9d97179a6043e4f7ffbd001d69701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6d1ca01a6511a1997bea6664465ed7bde9d97179a6043e4f7ffbd001d69701->enter($__internal_ee6d1ca01a6511a1997bea6664465ed7bde9d97179a6043e4f7ffbd001d69701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71a75f937c261e26bdf87ebde5e1dfd9f92472b08a029c4bf6c222cf6e863ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a75f937c261e26bdf87ebde5e1dfd9f92472b08a029c4bf6c222cf6e863ad1->enter($__internal_71a75f937c261e26bdf87ebde5e1dfd9f92472b08a029c4bf6c222cf6e863ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_71a75f937c261e26bdf87ebde5e1dfd9f92472b08a029c4bf6c222cf6e863ad1->leave($__internal_71a75f937c261e26bdf87ebde5e1dfd9f92472b08a029c4bf6c222cf6e863ad1_prof);

        
        $__internal_ee6d1ca01a6511a1997bea6664465ed7bde9d97179a6043e4f7ffbd001d69701->leave($__internal_ee6d1ca01a6511a1997bea6664465ed7bde9d97179a6043e4f7ffbd001d69701_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
