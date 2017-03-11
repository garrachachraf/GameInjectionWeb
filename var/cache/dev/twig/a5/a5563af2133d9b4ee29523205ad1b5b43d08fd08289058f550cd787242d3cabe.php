<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
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
        $__internal_16593177db71139804b36d2e2e280424b1b8382774afb2f697d7b4b75d32e14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16593177db71139804b36d2e2e280424b1b8382774afb2f697d7b4b75d32e14f->enter($__internal_16593177db71139804b36d2e2e280424b1b8382774afb2f697d7b4b75d32e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b0929a792b66ffa13cc19dfa0f978654d2eab507d0d336c30b1b6c510fcb0cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0929a792b66ffa13cc19dfa0f978654d2eab507d0d336c30b1b6c510fcb0cf7->enter($__internal_b0929a792b66ffa13cc19dfa0f978654d2eab507d0d336c30b1b6c510fcb0cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_16593177db71139804b36d2e2e280424b1b8382774afb2f697d7b4b75d32e14f->leave($__internal_16593177db71139804b36d2e2e280424b1b8382774afb2f697d7b4b75d32e14f_prof);

        
        $__internal_b0929a792b66ffa13cc19dfa0f978654d2eab507d0d336c30b1b6c510fcb0cf7->leave($__internal_b0929a792b66ffa13cc19dfa0f978654d2eab507d0d336c30b1b6c510fcb0cf7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5bf7d8aa82a1a8fdfec9735fc83009223ef34d848cdeced3415faca8b5a6fd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf7d8aa82a1a8fdfec9735fc83009223ef34d848cdeced3415faca8b5a6fd32->enter($__internal_5bf7d8aa82a1a8fdfec9735fc83009223ef34d848cdeced3415faca8b5a6fd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_656b6def008a51e4a200c81a821eb1d29046a662a325b5b204d3883cfaf24bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656b6def008a51e4a200c81a821eb1d29046a662a325b5b204d3883cfaf24bbe->enter($__internal_656b6def008a51e4a200c81a821eb1d29046a662a325b5b204d3883cfaf24bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_656b6def008a51e4a200c81a821eb1d29046a662a325b5b204d3883cfaf24bbe->leave($__internal_656b6def008a51e4a200c81a821eb1d29046a662a325b5b204d3883cfaf24bbe_prof);

        
        $__internal_5bf7d8aa82a1a8fdfec9735fc83009223ef34d848cdeced3415faca8b5a6fd32->leave($__internal_5bf7d8aa82a1a8fdfec9735fc83009223ef34d848cdeced3415faca8b5a6fd32_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
