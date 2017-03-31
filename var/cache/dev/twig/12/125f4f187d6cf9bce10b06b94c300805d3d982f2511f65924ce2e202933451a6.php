<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fe4d74b619d81828a9cda548af58f29ee8387ceffbaab67e4019b5350f0f6513 extends Twig_Template
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
        $__internal_996bca2f61925b94681ed01ad7b6073259cdb3eb0eb4f0f483b1a881a2d70b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996bca2f61925b94681ed01ad7b6073259cdb3eb0eb4f0f483b1a881a2d70b46->enter($__internal_996bca2f61925b94681ed01ad7b6073259cdb3eb0eb4f0f483b1a881a2d70b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_701c1a8353f5d4303c844d2478038a9de5343cb1814a7a05a986d5ec85a36cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701c1a8353f5d4303c844d2478038a9de5343cb1814a7a05a986d5ec85a36cd5->enter($__internal_701c1a8353f5d4303c844d2478038a9de5343cb1814a7a05a986d5ec85a36cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996bca2f61925b94681ed01ad7b6073259cdb3eb0eb4f0f483b1a881a2d70b46->leave($__internal_996bca2f61925b94681ed01ad7b6073259cdb3eb0eb4f0f483b1a881a2d70b46_prof);

        
        $__internal_701c1a8353f5d4303c844d2478038a9de5343cb1814a7a05a986d5ec85a36cd5->leave($__internal_701c1a8353f5d4303c844d2478038a9de5343cb1814a7a05a986d5ec85a36cd5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74e7db99a5cab54235f1acdeaf7480248ccaa5102d411ecc6bbd917191b86131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e7db99a5cab54235f1acdeaf7480248ccaa5102d411ecc6bbd917191b86131->enter($__internal_74e7db99a5cab54235f1acdeaf7480248ccaa5102d411ecc6bbd917191b86131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8cfe03e29e4ebd1730eff1297aec630bc57acbf5b4f9a31d378658f011874b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cfe03e29e4ebd1730eff1297aec630bc57acbf5b4f9a31d378658f011874b4->enter($__internal_a8cfe03e29e4ebd1730eff1297aec630bc57acbf5b4f9a31d378658f011874b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a8cfe03e29e4ebd1730eff1297aec630bc57acbf5b4f9a31d378658f011874b4->leave($__internal_a8cfe03e29e4ebd1730eff1297aec630bc57acbf5b4f9a31d378658f011874b4_prof);

        
        $__internal_74e7db99a5cab54235f1acdeaf7480248ccaa5102d411ecc6bbd917191b86131->leave($__internal_74e7db99a5cab54235f1acdeaf7480248ccaa5102d411ecc6bbd917191b86131_prof);

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
