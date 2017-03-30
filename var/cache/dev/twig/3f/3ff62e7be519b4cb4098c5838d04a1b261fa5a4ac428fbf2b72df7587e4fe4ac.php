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
        $__internal_84966ff10ec6db8e23acd0012617ac105c54f07ae0329f0ce2fcba8df193ffdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84966ff10ec6db8e23acd0012617ac105c54f07ae0329f0ce2fcba8df193ffdc->enter($__internal_84966ff10ec6db8e23acd0012617ac105c54f07ae0329f0ce2fcba8df193ffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ee2e20b1fadc8c2f125bfa5e482e4a1d221bbc88f6c21aee91905b157de09043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2e20b1fadc8c2f125bfa5e482e4a1d221bbc88f6c21aee91905b157de09043->enter($__internal_ee2e20b1fadc8c2f125bfa5e482e4a1d221bbc88f6c21aee91905b157de09043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84966ff10ec6db8e23acd0012617ac105c54f07ae0329f0ce2fcba8df193ffdc->leave($__internal_84966ff10ec6db8e23acd0012617ac105c54f07ae0329f0ce2fcba8df193ffdc_prof);

        
        $__internal_ee2e20b1fadc8c2f125bfa5e482e4a1d221bbc88f6c21aee91905b157de09043->leave($__internal_ee2e20b1fadc8c2f125bfa5e482e4a1d221bbc88f6c21aee91905b157de09043_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d47fe93aaae029871f4ec9aa54c80cd6f3469ce58b8012a82f05fa47452a45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d47fe93aaae029871f4ec9aa54c80cd6f3469ce58b8012a82f05fa47452a45c->enter($__internal_2d47fe93aaae029871f4ec9aa54c80cd6f3469ce58b8012a82f05fa47452a45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8b436e7a5eefd66668097d60662b094aba9d6d4132483647cdd31e2a2be7065d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b436e7a5eefd66668097d60662b094aba9d6d4132483647cdd31e2a2be7065d->enter($__internal_8b436e7a5eefd66668097d60662b094aba9d6d4132483647cdd31e2a2be7065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8b436e7a5eefd66668097d60662b094aba9d6d4132483647cdd31e2a2be7065d->leave($__internal_8b436e7a5eefd66668097d60662b094aba9d6d4132483647cdd31e2a2be7065d_prof);

        
        $__internal_2d47fe93aaae029871f4ec9aa54c80cd6f3469ce58b8012a82f05fa47452a45c->leave($__internal_2d47fe93aaae029871f4ec9aa54c80cd6f3469ce58b8012a82f05fa47452a45c_prof);

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
