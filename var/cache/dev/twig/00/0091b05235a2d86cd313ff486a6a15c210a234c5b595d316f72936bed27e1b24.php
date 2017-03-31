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
        $__internal_b6f3c446f2903380ee72e27cfd527932a39c09f4f62bc3341d8e102dd6b9b078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f3c446f2903380ee72e27cfd527932a39c09f4f62bc3341d8e102dd6b9b078->enter($__internal_b6f3c446f2903380ee72e27cfd527932a39c09f4f62bc3341d8e102dd6b9b078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9cbb0e09d3452d252f5b429b528368cbdf7117771610b9c9282c7c6ad20a11a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbb0e09d3452d252f5b429b528368cbdf7117771610b9c9282c7c6ad20a11a3->enter($__internal_9cbb0e09d3452d252f5b429b528368cbdf7117771610b9c9282c7c6ad20a11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b6f3c446f2903380ee72e27cfd527932a39c09f4f62bc3341d8e102dd6b9b078->leave($__internal_b6f3c446f2903380ee72e27cfd527932a39c09f4f62bc3341d8e102dd6b9b078_prof);

        
        $__internal_9cbb0e09d3452d252f5b429b528368cbdf7117771610b9c9282c7c6ad20a11a3->leave($__internal_9cbb0e09d3452d252f5b429b528368cbdf7117771610b9c9282c7c6ad20a11a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60f059f549290c06566d070808fe18433b56ae5f2dd217fb14211e322916f31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f059f549290c06566d070808fe18433b56ae5f2dd217fb14211e322916f31f->enter($__internal_60f059f549290c06566d070808fe18433b56ae5f2dd217fb14211e322916f31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f61bd04ddba55c12a9d5024134755e8c1e578ad2ce044bde341073c27f0319db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61bd04ddba55c12a9d5024134755e8c1e578ad2ce044bde341073c27f0319db->enter($__internal_f61bd04ddba55c12a9d5024134755e8c1e578ad2ce044bde341073c27f0319db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f61bd04ddba55c12a9d5024134755e8c1e578ad2ce044bde341073c27f0319db->leave($__internal_f61bd04ddba55c12a9d5024134755e8c1e578ad2ce044bde341073c27f0319db_prof);

        
        $__internal_60f059f549290c06566d070808fe18433b56ae5f2dd217fb14211e322916f31f->leave($__internal_60f059f549290c06566d070808fe18433b56ae5f2dd217fb14211e322916f31f_prof);

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
