<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ce2ab8b7ebb1b2be46f36f1364982eb5f2c1b8a681a1284223533c5522eaf8ee extends Twig_Template
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
        $__internal_beda5b6f3304e64a4e8f6b518b87497b4cabfd8ced3aa74659ae3ab58392608b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beda5b6f3304e64a4e8f6b518b87497b4cabfd8ced3aa74659ae3ab58392608b->enter($__internal_beda5b6f3304e64a4e8f6b518b87497b4cabfd8ced3aa74659ae3ab58392608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_26e6e3055ddcbd419d453688e2a59f0e3a3067d5ca8eaea53b4bfbd81743938f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e6e3055ddcbd419d453688e2a59f0e3a3067d5ca8eaea53b4bfbd81743938f->enter($__internal_26e6e3055ddcbd419d453688e2a59f0e3a3067d5ca8eaea53b4bfbd81743938f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_beda5b6f3304e64a4e8f6b518b87497b4cabfd8ced3aa74659ae3ab58392608b->leave($__internal_beda5b6f3304e64a4e8f6b518b87497b4cabfd8ced3aa74659ae3ab58392608b_prof);

        
        $__internal_26e6e3055ddcbd419d453688e2a59f0e3a3067d5ca8eaea53b4bfbd81743938f->leave($__internal_26e6e3055ddcbd419d453688e2a59f0e3a3067d5ca8eaea53b4bfbd81743938f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9406a7f7544aa53d45fc6e347c52569b8864fbe7b3b5c6878eb83f4383091ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9406a7f7544aa53d45fc6e347c52569b8864fbe7b3b5c6878eb83f4383091ebc->enter($__internal_9406a7f7544aa53d45fc6e347c52569b8864fbe7b3b5c6878eb83f4383091ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf4ff643058b8b0fc74fa4236e146332782612131e110235a4bfbecea7c650ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4ff643058b8b0fc74fa4236e146332782612131e110235a4bfbecea7c650ba->enter($__internal_bf4ff643058b8b0fc74fa4236e146332782612131e110235a4bfbecea7c650ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bf4ff643058b8b0fc74fa4236e146332782612131e110235a4bfbecea7c650ba->leave($__internal_bf4ff643058b8b0fc74fa4236e146332782612131e110235a4bfbecea7c650ba_prof);

        
        $__internal_9406a7f7544aa53d45fc6e347c52569b8864fbe7b3b5c6878eb83f4383091ebc->leave($__internal_9406a7f7544aa53d45fc6e347c52569b8864fbe7b3b5c6878eb83f4383091ebc_prof);

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
