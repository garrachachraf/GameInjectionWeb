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
        $__internal_26912157fc84eba02b5201c85268a3e11de2a1f87bb48245f9506adad873ff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26912157fc84eba02b5201c85268a3e11de2a1f87bb48245f9506adad873ff07->enter($__internal_26912157fc84eba02b5201c85268a3e11de2a1f87bb48245f9506adad873ff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7e8a3bcf9bd1e93df61c932678c4bb83a602559745e443c99332718145805f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8a3bcf9bd1e93df61c932678c4bb83a602559745e443c99332718145805f68->enter($__internal_7e8a3bcf9bd1e93df61c932678c4bb83a602559745e443c99332718145805f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26912157fc84eba02b5201c85268a3e11de2a1f87bb48245f9506adad873ff07->leave($__internal_26912157fc84eba02b5201c85268a3e11de2a1f87bb48245f9506adad873ff07_prof);

        
        $__internal_7e8a3bcf9bd1e93df61c932678c4bb83a602559745e443c99332718145805f68->leave($__internal_7e8a3bcf9bd1e93df61c932678c4bb83a602559745e443c99332718145805f68_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_603af338b69fa3a62fac06f7150167c54321313fac4d88e7b5b52b2974db1261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603af338b69fa3a62fac06f7150167c54321313fac4d88e7b5b52b2974db1261->enter($__internal_603af338b69fa3a62fac06f7150167c54321313fac4d88e7b5b52b2974db1261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_773f8803f6106c7d0e455f0f8385b01c34ae667eca0d3de033a7e71f9099ea73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773f8803f6106c7d0e455f0f8385b01c34ae667eca0d3de033a7e71f9099ea73->enter($__internal_773f8803f6106c7d0e455f0f8385b01c34ae667eca0d3de033a7e71f9099ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_773f8803f6106c7d0e455f0f8385b01c34ae667eca0d3de033a7e71f9099ea73->leave($__internal_773f8803f6106c7d0e455f0f8385b01c34ae667eca0d3de033a7e71f9099ea73_prof);

        
        $__internal_603af338b69fa3a62fac06f7150167c54321313fac4d88e7b5b52b2974db1261->leave($__internal_603af338b69fa3a62fac06f7150167c54321313fac4d88e7b5b52b2974db1261_prof);

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
