<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9b96034e61192be3c028ffd6dc4e151923e5c123d82c97d29ab9a8f5810c9f5a extends Twig_Template
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
        $__internal_1f8bd80bebab09f44f489105011c9c42fba51be53cda92e5249cee95f61df5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8bd80bebab09f44f489105011c9c42fba51be53cda92e5249cee95f61df5e4->enter($__internal_1f8bd80bebab09f44f489105011c9c42fba51be53cda92e5249cee95f61df5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1426151fd2c13abc1d67d1790f4fe1eb867b5c8b597091b565d800e780b0a863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1426151fd2c13abc1d67d1790f4fe1eb867b5c8b597091b565d800e780b0a863->enter($__internal_1426151fd2c13abc1d67d1790f4fe1eb867b5c8b597091b565d800e780b0a863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f8bd80bebab09f44f489105011c9c42fba51be53cda92e5249cee95f61df5e4->leave($__internal_1f8bd80bebab09f44f489105011c9c42fba51be53cda92e5249cee95f61df5e4_prof);

        
        $__internal_1426151fd2c13abc1d67d1790f4fe1eb867b5c8b597091b565d800e780b0a863->leave($__internal_1426151fd2c13abc1d67d1790f4fe1eb867b5c8b597091b565d800e780b0a863_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0253bb6c7776c19a743336db32b86a96b9bc3f3773ad19a6aed46a7d33c1c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0253bb6c7776c19a743336db32b86a96b9bc3f3773ad19a6aed46a7d33c1c8c->enter($__internal_d0253bb6c7776c19a743336db32b86a96b9bc3f3773ad19a6aed46a7d33c1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af92ff8bb0db32e9224e84278ba6217b15689ba3a832fd2d3c2907d9d3b7c1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af92ff8bb0db32e9224e84278ba6217b15689ba3a832fd2d3c2907d9d3b7c1af->enter($__internal_af92ff8bb0db32e9224e84278ba6217b15689ba3a832fd2d3c2907d9d3b7c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af92ff8bb0db32e9224e84278ba6217b15689ba3a832fd2d3c2907d9d3b7c1af->leave($__internal_af92ff8bb0db32e9224e84278ba6217b15689ba3a832fd2d3c2907d9d3b7c1af_prof);

        
        $__internal_d0253bb6c7776c19a743336db32b86a96b9bc3f3773ad19a6aed46a7d33c1c8c->leave($__internal_d0253bb6c7776c19a743336db32b86a96b9bc3f3773ad19a6aed46a7d33c1c8c_prof);

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
