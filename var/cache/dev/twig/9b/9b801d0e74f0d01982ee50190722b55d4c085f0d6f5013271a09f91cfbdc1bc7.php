<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0a1383d4c56ccba069e1e981845631511bd9e18f5cd6510e6d7098a473e1e849 extends Twig_Template
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
        $__internal_a093148c8bc53c2530d2c9f6b11e4dc2fbbe031ddbeb11b5e8853eb109f9f18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a093148c8bc53c2530d2c9f6b11e4dc2fbbe031ddbeb11b5e8853eb109f9f18a->enter($__internal_a093148c8bc53c2530d2c9f6b11e4dc2fbbe031ddbeb11b5e8853eb109f9f18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_16e2fa44fede6013c4f9afb5294df95df931c622f8d3c6f905a3d7d74e56d9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e2fa44fede6013c4f9afb5294df95df931c622f8d3c6f905a3d7d74e56d9ed->enter($__internal_16e2fa44fede6013c4f9afb5294df95df931c622f8d3c6f905a3d7d74e56d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a093148c8bc53c2530d2c9f6b11e4dc2fbbe031ddbeb11b5e8853eb109f9f18a->leave($__internal_a093148c8bc53c2530d2c9f6b11e4dc2fbbe031ddbeb11b5e8853eb109f9f18a_prof);

        
        $__internal_16e2fa44fede6013c4f9afb5294df95df931c622f8d3c6f905a3d7d74e56d9ed->leave($__internal_16e2fa44fede6013c4f9afb5294df95df931c622f8d3c6f905a3d7d74e56d9ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38854ccfd02279a448ca25abb3459e625fb8ba43d45f44dd3350c0cb543a5532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38854ccfd02279a448ca25abb3459e625fb8ba43d45f44dd3350c0cb543a5532->enter($__internal_38854ccfd02279a448ca25abb3459e625fb8ba43d45f44dd3350c0cb543a5532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_52f952625c4e1067fc080a71d99de0eedec867ef44234ecc80fd587d497f67cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f952625c4e1067fc080a71d99de0eedec867ef44234ecc80fd587d497f67cb->enter($__internal_52f952625c4e1067fc080a71d99de0eedec867ef44234ecc80fd587d497f67cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_52f952625c4e1067fc080a71d99de0eedec867ef44234ecc80fd587d497f67cb->leave($__internal_52f952625c4e1067fc080a71d99de0eedec867ef44234ecc80fd587d497f67cb_prof);

        
        $__internal_38854ccfd02279a448ca25abb3459e625fb8ba43d45f44dd3350c0cb543a5532->leave($__internal_38854ccfd02279a448ca25abb3459e625fb8ba43d45f44dd3350c0cb543a5532_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
