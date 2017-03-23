<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7e36a3264775c23dc4d1dcd7f72f2a278c2bd1fec01a6a16af2f5a3f756c7eb4 extends Twig_Template
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
        $__internal_9ae99df76d4b2f6daf628cdb5abe656d7c2521a8befe891f65f110911e42b279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae99df76d4b2f6daf628cdb5abe656d7c2521a8befe891f65f110911e42b279->enter($__internal_9ae99df76d4b2f6daf628cdb5abe656d7c2521a8befe891f65f110911e42b279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_353505e8f7337cccbf30a1eeb1c663e2dff0b23e93f0ae95ea45fb781395207b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353505e8f7337cccbf30a1eeb1c663e2dff0b23e93f0ae95ea45fb781395207b->enter($__internal_353505e8f7337cccbf30a1eeb1c663e2dff0b23e93f0ae95ea45fb781395207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ae99df76d4b2f6daf628cdb5abe656d7c2521a8befe891f65f110911e42b279->leave($__internal_9ae99df76d4b2f6daf628cdb5abe656d7c2521a8befe891f65f110911e42b279_prof);

        
        $__internal_353505e8f7337cccbf30a1eeb1c663e2dff0b23e93f0ae95ea45fb781395207b->leave($__internal_353505e8f7337cccbf30a1eeb1c663e2dff0b23e93f0ae95ea45fb781395207b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6915be5bde27770ac6565ba40d48973d82b389d922f0aea31258d28214df9e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6915be5bde27770ac6565ba40d48973d82b389d922f0aea31258d28214df9e9d->enter($__internal_6915be5bde27770ac6565ba40d48973d82b389d922f0aea31258d28214df9e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52cbe5d685449bf5b18157b332a7e31ddf3eb40b4b3b5654566a1296c54d4df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cbe5d685449bf5b18157b332a7e31ddf3eb40b4b3b5654566a1296c54d4df9->enter($__internal_52cbe5d685449bf5b18157b332a7e31ddf3eb40b4b3b5654566a1296c54d4df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_52cbe5d685449bf5b18157b332a7e31ddf3eb40b4b3b5654566a1296c54d4df9->leave($__internal_52cbe5d685449bf5b18157b332a7e31ddf3eb40b4b3b5654566a1296c54d4df9_prof);

        
        $__internal_6915be5bde27770ac6565ba40d48973d82b389d922f0aea31258d28214df9e9d->leave($__internal_6915be5bde27770ac6565ba40d48973d82b389d922f0aea31258d28214df9e9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
