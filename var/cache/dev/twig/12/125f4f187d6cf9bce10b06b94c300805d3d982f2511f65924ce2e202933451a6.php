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
        $__internal_38956e7c3a8214661542e266522e9e48b8aaa710152cc76af29387e6ca6e9c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38956e7c3a8214661542e266522e9e48b8aaa710152cc76af29387e6ca6e9c03->enter($__internal_38956e7c3a8214661542e266522e9e48b8aaa710152cc76af29387e6ca6e9c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_29bf94ca41705ab21e1c1df967ef089cdd35e7117b576d729071ae902a763ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bf94ca41705ab21e1c1df967ef089cdd35e7117b576d729071ae902a763ad3->enter($__internal_29bf94ca41705ab21e1c1df967ef089cdd35e7117b576d729071ae902a763ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38956e7c3a8214661542e266522e9e48b8aaa710152cc76af29387e6ca6e9c03->leave($__internal_38956e7c3a8214661542e266522e9e48b8aaa710152cc76af29387e6ca6e9c03_prof);

        
        $__internal_29bf94ca41705ab21e1c1df967ef089cdd35e7117b576d729071ae902a763ad3->leave($__internal_29bf94ca41705ab21e1c1df967ef089cdd35e7117b576d729071ae902a763ad3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51d1c6264ad2ec6248ef6fc6f444209fe6ca89c3411d70d9dbaa9bafd65bdd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d1c6264ad2ec6248ef6fc6f444209fe6ca89c3411d70d9dbaa9bafd65bdd58->enter($__internal_51d1c6264ad2ec6248ef6fc6f444209fe6ca89c3411d70d9dbaa9bafd65bdd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a13d252d38dca20531ab7e4c1d9a2320adf7877112647a052caf0047a7b5fb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13d252d38dca20531ab7e4c1d9a2320adf7877112647a052caf0047a7b5fb52->enter($__internal_a13d252d38dca20531ab7e4c1d9a2320adf7877112647a052caf0047a7b5fb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a13d252d38dca20531ab7e4c1d9a2320adf7877112647a052caf0047a7b5fb52->leave($__internal_a13d252d38dca20531ab7e4c1d9a2320adf7877112647a052caf0047a7b5fb52_prof);

        
        $__internal_51d1c6264ad2ec6248ef6fc6f444209fe6ca89c3411d70d9dbaa9bafd65bdd58->leave($__internal_51d1c6264ad2ec6248ef6fc6f444209fe6ca89c3411d70d9dbaa9bafd65bdd58_prof);

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
