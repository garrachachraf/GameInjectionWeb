<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ed2ed384072be9950c7709e8b3edee182e490a88490df7f04ffca8879ccea3cb extends Twig_Template
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
        $__internal_2f53e4085f3cb476ea1739c33571f87f744a212487642e039d5d11cec66293b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f53e4085f3cb476ea1739c33571f87f744a212487642e039d5d11cec66293b3->enter($__internal_2f53e4085f3cb476ea1739c33571f87f744a212487642e039d5d11cec66293b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1602ed3801af3a227f1c6b437bb09c4b3ad6cdfafdb6bfac5b0ff9729f8e1c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1602ed3801af3a227f1c6b437bb09c4b3ad6cdfafdb6bfac5b0ff9729f8e1c85->enter($__internal_1602ed3801af3a227f1c6b437bb09c4b3ad6cdfafdb6bfac5b0ff9729f8e1c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f53e4085f3cb476ea1739c33571f87f744a212487642e039d5d11cec66293b3->leave($__internal_2f53e4085f3cb476ea1739c33571f87f744a212487642e039d5d11cec66293b3_prof);

        
        $__internal_1602ed3801af3a227f1c6b437bb09c4b3ad6cdfafdb6bfac5b0ff9729f8e1c85->leave($__internal_1602ed3801af3a227f1c6b437bb09c4b3ad6cdfafdb6bfac5b0ff9729f8e1c85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50555074f491914d4dbd0cd5bb1f6994ffeeccf1f536a4ed014cc5fda759bff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50555074f491914d4dbd0cd5bb1f6994ffeeccf1f536a4ed014cc5fda759bff8->enter($__internal_50555074f491914d4dbd0cd5bb1f6994ffeeccf1f536a4ed014cc5fda759bff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8cab75d2612beacccf495692164286930047bbb9d4217f1e1d912034ea0ea33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cab75d2612beacccf495692164286930047bbb9d4217f1e1d912034ea0ea33->enter($__internal_a8cab75d2612beacccf495692164286930047bbb9d4217f1e1d912034ea0ea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a8cab75d2612beacccf495692164286930047bbb9d4217f1e1d912034ea0ea33->leave($__internal_a8cab75d2612beacccf495692164286930047bbb9d4217f1e1d912034ea0ea33_prof);

        
        $__internal_50555074f491914d4dbd0cd5bb1f6994ffeeccf1f536a4ed014cc5fda759bff8->leave($__internal_50555074f491914d4dbd0cd5bb1f6994ffeeccf1f536a4ed014cc5fda759bff8_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
