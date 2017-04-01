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
        $__internal_1fb405f00e17c98f812961cdc032d66d4818a0e4279dc74cdbe16e06a4ede52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb405f00e17c98f812961cdc032d66d4818a0e4279dc74cdbe16e06a4ede52a->enter($__internal_1fb405f00e17c98f812961cdc032d66d4818a0e4279dc74cdbe16e06a4ede52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_630a41c36f96d04fcd3d11027a93cf13043fa3d972158e90a296e0fd24b023a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630a41c36f96d04fcd3d11027a93cf13043fa3d972158e90a296e0fd24b023a5->enter($__internal_630a41c36f96d04fcd3d11027a93cf13043fa3d972158e90a296e0fd24b023a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb405f00e17c98f812961cdc032d66d4818a0e4279dc74cdbe16e06a4ede52a->leave($__internal_1fb405f00e17c98f812961cdc032d66d4818a0e4279dc74cdbe16e06a4ede52a_prof);

        
        $__internal_630a41c36f96d04fcd3d11027a93cf13043fa3d972158e90a296e0fd24b023a5->leave($__internal_630a41c36f96d04fcd3d11027a93cf13043fa3d972158e90a296e0fd24b023a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7154e260ef1f0aebddfbf2e9f9c3ec01d0ab6bc9cfec127327446bd13076c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7154e260ef1f0aebddfbf2e9f9c3ec01d0ab6bc9cfec127327446bd13076c0d->enter($__internal_c7154e260ef1f0aebddfbf2e9f9c3ec01d0ab6bc9cfec127327446bd13076c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4a278fc54cfd2a497a47b4c0dba61ba48964e9b113dc049a2d4321ad131c747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a278fc54cfd2a497a47b4c0dba61ba48964e9b113dc049a2d4321ad131c747a->enter($__internal_4a278fc54cfd2a497a47b4c0dba61ba48964e9b113dc049a2d4321ad131c747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4a278fc54cfd2a497a47b4c0dba61ba48964e9b113dc049a2d4321ad131c747a->leave($__internal_4a278fc54cfd2a497a47b4c0dba61ba48964e9b113dc049a2d4321ad131c747a_prof);

        
        $__internal_c7154e260ef1f0aebddfbf2e9f9c3ec01d0ab6bc9cfec127327446bd13076c0d->leave($__internal_c7154e260ef1f0aebddfbf2e9f9c3ec01d0ab6bc9cfec127327446bd13076c0d_prof);

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
