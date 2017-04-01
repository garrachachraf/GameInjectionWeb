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
        $__internal_2f0bd25901e4e3a1ac149b761e07075f61c79f116ebfb1c8b54567506e84b538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0bd25901e4e3a1ac149b761e07075f61c79f116ebfb1c8b54567506e84b538->enter($__internal_2f0bd25901e4e3a1ac149b761e07075f61c79f116ebfb1c8b54567506e84b538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_18f00007da85b16d9589e75afced023c942d4480a313b73650a866e794db6742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f00007da85b16d9589e75afced023c942d4480a313b73650a866e794db6742->enter($__internal_18f00007da85b16d9589e75afced023c942d4480a313b73650a866e794db6742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2f0bd25901e4e3a1ac149b761e07075f61c79f116ebfb1c8b54567506e84b538->leave($__internal_2f0bd25901e4e3a1ac149b761e07075f61c79f116ebfb1c8b54567506e84b538_prof);

        
        $__internal_18f00007da85b16d9589e75afced023c942d4480a313b73650a866e794db6742->leave($__internal_18f00007da85b16d9589e75afced023c942d4480a313b73650a866e794db6742_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_86adb086f7e0d712b88630d380367bd5e69e64623541fd5ca6bcd55e5ae4ddbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86adb086f7e0d712b88630d380367bd5e69e64623541fd5ca6bcd55e5ae4ddbd->enter($__internal_86adb086f7e0d712b88630d380367bd5e69e64623541fd5ca6bcd55e5ae4ddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54d2850d09867746c4d23facc6be313943c9829492a93e57033b644bf9050ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d2850d09867746c4d23facc6be313943c9829492a93e57033b644bf9050ad4->enter($__internal_54d2850d09867746c4d23facc6be313943c9829492a93e57033b644bf9050ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54d2850d09867746c4d23facc6be313943c9829492a93e57033b644bf9050ad4->leave($__internal_54d2850d09867746c4d23facc6be313943c9829492a93e57033b644bf9050ad4_prof);

        
        $__internal_86adb086f7e0d712b88630d380367bd5e69e64623541fd5ca6bcd55e5ae4ddbd->leave($__internal_86adb086f7e0d712b88630d380367bd5e69e64623541fd5ca6bcd55e5ae4ddbd_prof);

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
