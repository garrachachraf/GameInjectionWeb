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
        $__internal_cb2d55f2d3cb9526831e5f82ac02b2bbbdd99e289321be2c03d59d7b867ab11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2d55f2d3cb9526831e5f82ac02b2bbbdd99e289321be2c03d59d7b867ab11c->enter($__internal_cb2d55f2d3cb9526831e5f82ac02b2bbbdd99e289321be2c03d59d7b867ab11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d10dc5287d31ae98c298025e758a7bd3d18b7d27ed0cb178ca296686325305d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10dc5287d31ae98c298025e758a7bd3d18b7d27ed0cb178ca296686325305d7->enter($__internal_d10dc5287d31ae98c298025e758a7bd3d18b7d27ed0cb178ca296686325305d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb2d55f2d3cb9526831e5f82ac02b2bbbdd99e289321be2c03d59d7b867ab11c->leave($__internal_cb2d55f2d3cb9526831e5f82ac02b2bbbdd99e289321be2c03d59d7b867ab11c_prof);

        
        $__internal_d10dc5287d31ae98c298025e758a7bd3d18b7d27ed0cb178ca296686325305d7->leave($__internal_d10dc5287d31ae98c298025e758a7bd3d18b7d27ed0cb178ca296686325305d7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_362bc1788ab4cfa5b337a9a696ce59e5de0a21fa6bf9ed967158bd05c0e511bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362bc1788ab4cfa5b337a9a696ce59e5de0a21fa6bf9ed967158bd05c0e511bb->enter($__internal_362bc1788ab4cfa5b337a9a696ce59e5de0a21fa6bf9ed967158bd05c0e511bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d7e17f7756e67c95b955e63a12b200a8ab4e0906e2975c89315c634123d73f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7e17f7756e67c95b955e63a12b200a8ab4e0906e2975c89315c634123d73f0->enter($__internal_7d7e17f7756e67c95b955e63a12b200a8ab4e0906e2975c89315c634123d73f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d7e17f7756e67c95b955e63a12b200a8ab4e0906e2975c89315c634123d73f0->leave($__internal_7d7e17f7756e67c95b955e63a12b200a8ab4e0906e2975c89315c634123d73f0_prof);

        
        $__internal_362bc1788ab4cfa5b337a9a696ce59e5de0a21fa6bf9ed967158bd05c0e511bb->leave($__internal_362bc1788ab4cfa5b337a9a696ce59e5de0a21fa6bf9ed967158bd05c0e511bb_prof);

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
