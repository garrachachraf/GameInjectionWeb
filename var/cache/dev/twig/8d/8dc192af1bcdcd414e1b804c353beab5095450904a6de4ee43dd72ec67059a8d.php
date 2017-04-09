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
        $__internal_ac76dd32fc78d4c6a4781e5b5c1655376c017d5d07f1145cbaf6d22ff91c178b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac76dd32fc78d4c6a4781e5b5c1655376c017d5d07f1145cbaf6d22ff91c178b->enter($__internal_ac76dd32fc78d4c6a4781e5b5c1655376c017d5d07f1145cbaf6d22ff91c178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_635ff519a78a2d01860b247e9c3b794f2e817af33b7aa64f5c3e2865631e4fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635ff519a78a2d01860b247e9c3b794f2e817af33b7aa64f5c3e2865631e4fec->enter($__internal_635ff519a78a2d01860b247e9c3b794f2e817af33b7aa64f5c3e2865631e4fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac76dd32fc78d4c6a4781e5b5c1655376c017d5d07f1145cbaf6d22ff91c178b->leave($__internal_ac76dd32fc78d4c6a4781e5b5c1655376c017d5d07f1145cbaf6d22ff91c178b_prof);

        
        $__internal_635ff519a78a2d01860b247e9c3b794f2e817af33b7aa64f5c3e2865631e4fec->leave($__internal_635ff519a78a2d01860b247e9c3b794f2e817af33b7aa64f5c3e2865631e4fec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_126edf7a5563889f0e447a4a902174710f10158c15abf94c99271b41724bcb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126edf7a5563889f0e447a4a902174710f10158c15abf94c99271b41724bcb08->enter($__internal_126edf7a5563889f0e447a4a902174710f10158c15abf94c99271b41724bcb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f66b5b53e7d2d224cbc30d0189ed890d2620d8d77d104ccfe82bf63863922602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66b5b53e7d2d224cbc30d0189ed890d2620d8d77d104ccfe82bf63863922602->enter($__internal_f66b5b53e7d2d224cbc30d0189ed890d2620d8d77d104ccfe82bf63863922602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f66b5b53e7d2d224cbc30d0189ed890d2620d8d77d104ccfe82bf63863922602->leave($__internal_f66b5b53e7d2d224cbc30d0189ed890d2620d8d77d104ccfe82bf63863922602_prof);

        
        $__internal_126edf7a5563889f0e447a4a902174710f10158c15abf94c99271b41724bcb08->leave($__internal_126edf7a5563889f0e447a4a902174710f10158c15abf94c99271b41724bcb08_prof);

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
