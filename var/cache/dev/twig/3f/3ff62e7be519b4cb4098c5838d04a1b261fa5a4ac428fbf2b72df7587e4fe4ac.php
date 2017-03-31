<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_729f688324f9e88e8071609fc72b19ce9204f8a15d19648ad855be11d253fc01 extends Twig_Template
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
        $__internal_b6234d3e8db8969da18e9a962b5aba4ba6a59f9f8643a73328bc3536a075aa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6234d3e8db8969da18e9a962b5aba4ba6a59f9f8643a73328bc3536a075aa12->enter($__internal_b6234d3e8db8969da18e9a962b5aba4ba6a59f9f8643a73328bc3536a075aa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_843a198af6ccc043d984ef0e76673003ae38b9dd0cc9a8ce244972cafb3c8144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843a198af6ccc043d984ef0e76673003ae38b9dd0cc9a8ce244972cafb3c8144->enter($__internal_843a198af6ccc043d984ef0e76673003ae38b9dd0cc9a8ce244972cafb3c8144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6234d3e8db8969da18e9a962b5aba4ba6a59f9f8643a73328bc3536a075aa12->leave($__internal_b6234d3e8db8969da18e9a962b5aba4ba6a59f9f8643a73328bc3536a075aa12_prof);

        
        $__internal_843a198af6ccc043d984ef0e76673003ae38b9dd0cc9a8ce244972cafb3c8144->leave($__internal_843a198af6ccc043d984ef0e76673003ae38b9dd0cc9a8ce244972cafb3c8144_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4b3b5e6df3c76cdcbdb3d7ec5eca9579833dc289f2acdc43871b70702783192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b3b5e6df3c76cdcbdb3d7ec5eca9579833dc289f2acdc43871b70702783192->enter($__internal_c4b3b5e6df3c76cdcbdb3d7ec5eca9579833dc289f2acdc43871b70702783192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0d88bb18b2189d1ca695f728291c71751edc951174c1a26cd18fc1c505a56a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d88bb18b2189d1ca695f728291c71751edc951174c1a26cd18fc1c505a56a00->enter($__internal_0d88bb18b2189d1ca695f728291c71751edc951174c1a26cd18fc1c505a56a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0d88bb18b2189d1ca695f728291c71751edc951174c1a26cd18fc1c505a56a00->leave($__internal_0d88bb18b2189d1ca695f728291c71751edc951174c1a26cd18fc1c505a56a00_prof);

        
        $__internal_c4b3b5e6df3c76cdcbdb3d7ec5eca9579833dc289f2acdc43871b70702783192->leave($__internal_c4b3b5e6df3c76cdcbdb3d7ec5eca9579833dc289f2acdc43871b70702783192_prof);

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
