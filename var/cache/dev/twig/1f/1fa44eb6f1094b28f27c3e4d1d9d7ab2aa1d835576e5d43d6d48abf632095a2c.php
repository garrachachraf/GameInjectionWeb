<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_21675df96647b956abb26b58e11b78ed0ff7d04912e1e42a67445cf030589a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9829604b12fdfd4cf740b255b9b956ff93a2b081eec5131c2f8d26efe008f913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9829604b12fdfd4cf740b255b9b956ff93a2b081eec5131c2f8d26efe008f913->enter($__internal_9829604b12fdfd4cf740b255b9b956ff93a2b081eec5131c2f8d26efe008f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a813190023cd37c69feafd56ddecfcacb8b957e6ef3d11b9af6224f353273d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a813190023cd37c69feafd56ddecfcacb8b957e6ef3d11b9af6224f353273d28->enter($__internal_a813190023cd37c69feafd56ddecfcacb8b957e6ef3d11b9af6224f353273d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9829604b12fdfd4cf740b255b9b956ff93a2b081eec5131c2f8d26efe008f913->leave($__internal_9829604b12fdfd4cf740b255b9b956ff93a2b081eec5131c2f8d26efe008f913_prof);

        
        $__internal_a813190023cd37c69feafd56ddecfcacb8b957e6ef3d11b9af6224f353273d28->leave($__internal_a813190023cd37c69feafd56ddecfcacb8b957e6ef3d11b9af6224f353273d28_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8eac57cfa5461c16fcbe60019c1c9c538391adf01e98709a6a33c92b28def14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8eac57cfa5461c16fcbe60019c1c9c538391adf01e98709a6a33c92b28def14->enter($__internal_b8eac57cfa5461c16fcbe60019c1c9c538391adf01e98709a6a33c92b28def14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_533776b2a530f8ad38ee96278d027f9f250442703c3211aed616adaea97ccf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533776b2a530f8ad38ee96278d027f9f250442703c3211aed616adaea97ccf69->enter($__internal_533776b2a530f8ad38ee96278d027f9f250442703c3211aed616adaea97ccf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_533776b2a530f8ad38ee96278d027f9f250442703c3211aed616adaea97ccf69->leave($__internal_533776b2a530f8ad38ee96278d027f9f250442703c3211aed616adaea97ccf69_prof);

        
        $__internal_b8eac57cfa5461c16fcbe60019c1c9c538391adf01e98709a6a33c92b28def14->leave($__internal_b8eac57cfa5461c16fcbe60019c1c9c538391adf01e98709a6a33c92b28def14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
