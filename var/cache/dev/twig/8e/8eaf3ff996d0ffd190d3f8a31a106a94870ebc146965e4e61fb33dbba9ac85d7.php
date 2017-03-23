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
        $__internal_9cc78e1a34beced1339e430dda4ea15c2f06b076d686e413915f75ca7412febd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc78e1a34beced1339e430dda4ea15c2f06b076d686e413915f75ca7412febd->enter($__internal_9cc78e1a34beced1339e430dda4ea15c2f06b076d686e413915f75ca7412febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2633033e4d057f58b4460b90b851a5e767bbf0e0d0282da09eb1b42663d0f401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2633033e4d057f58b4460b90b851a5e767bbf0e0d0282da09eb1b42663d0f401->enter($__internal_2633033e4d057f58b4460b90b851a5e767bbf0e0d0282da09eb1b42663d0f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9cc78e1a34beced1339e430dda4ea15c2f06b076d686e413915f75ca7412febd->leave($__internal_9cc78e1a34beced1339e430dda4ea15c2f06b076d686e413915f75ca7412febd_prof);

        
        $__internal_2633033e4d057f58b4460b90b851a5e767bbf0e0d0282da09eb1b42663d0f401->leave($__internal_2633033e4d057f58b4460b90b851a5e767bbf0e0d0282da09eb1b42663d0f401_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0aad127581894af58f95f3eb2a623cf3b191f08ff76f3f632d156bbeef99fccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aad127581894af58f95f3eb2a623cf3b191f08ff76f3f632d156bbeef99fccd->enter($__internal_0aad127581894af58f95f3eb2a623cf3b191f08ff76f3f632d156bbeef99fccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_527cc1393a8aa166bff59d4128ff2d80ef05526bc1b33bb6adc47efad1ea89af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527cc1393a8aa166bff59d4128ff2d80ef05526bc1b33bb6adc47efad1ea89af->enter($__internal_527cc1393a8aa166bff59d4128ff2d80ef05526bc1b33bb6adc47efad1ea89af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_527cc1393a8aa166bff59d4128ff2d80ef05526bc1b33bb6adc47efad1ea89af->leave($__internal_527cc1393a8aa166bff59d4128ff2d80ef05526bc1b33bb6adc47efad1ea89af_prof);

        
        $__internal_0aad127581894af58f95f3eb2a623cf3b191f08ff76f3f632d156bbeef99fccd->leave($__internal_0aad127581894af58f95f3eb2a623cf3b191f08ff76f3f632d156bbeef99fccd_prof);

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
