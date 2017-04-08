<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7c872f0ed2cc044251cb67951b0248d4eb02fc47fcbaef1b0afa7187d39abb2 extends Twig_Template
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
        $__internal_15aa6a1921021080704ad41863e1fda90fe604267053436ca30eb7f749c0cb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15aa6a1921021080704ad41863e1fda90fe604267053436ca30eb7f749c0cb6c->enter($__internal_15aa6a1921021080704ad41863e1fda90fe604267053436ca30eb7f749c0cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2de2ade6d596085b22d2114af173f12d738f74866458af192ca25404207df61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de2ade6d596085b22d2114af173f12d738f74866458af192ca25404207df61a->enter($__internal_2de2ade6d596085b22d2114af173f12d738f74866458af192ca25404207df61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_15aa6a1921021080704ad41863e1fda90fe604267053436ca30eb7f749c0cb6c->leave($__internal_15aa6a1921021080704ad41863e1fda90fe604267053436ca30eb7f749c0cb6c_prof);

        
        $__internal_2de2ade6d596085b22d2114af173f12d738f74866458af192ca25404207df61a->leave($__internal_2de2ade6d596085b22d2114af173f12d738f74866458af192ca25404207df61a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fea8d290228f4d4f1c21454f686f367cb7e9e358a7ed6bc5b0d65b30a9de277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fea8d290228f4d4f1c21454f686f367cb7e9e358a7ed6bc5b0d65b30a9de277->enter($__internal_6fea8d290228f4d4f1c21454f686f367cb7e9e358a7ed6bc5b0d65b30a9de277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3afcfb54cab1ab6c348a8a000d006afc93ba18abf36f6dfbf4e9d80dcf9c3fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afcfb54cab1ab6c348a8a000d006afc93ba18abf36f6dfbf4e9d80dcf9c3fcb->enter($__internal_3afcfb54cab1ab6c348a8a000d006afc93ba18abf36f6dfbf4e9d80dcf9c3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3afcfb54cab1ab6c348a8a000d006afc93ba18abf36f6dfbf4e9d80dcf9c3fcb->leave($__internal_3afcfb54cab1ab6c348a8a000d006afc93ba18abf36f6dfbf4e9d80dcf9c3fcb_prof);

        
        $__internal_6fea8d290228f4d4f1c21454f686f367cb7e9e358a7ed6bc5b0d65b30a9de277->leave($__internal_6fea8d290228f4d4f1c21454f686f367cb7e9e358a7ed6bc5b0d65b30a9de277_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
