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
        $__internal_ff5c3b59a081d047fcf6dbeec1c8728b9b6222d83f6473549a9e59540ac670c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5c3b59a081d047fcf6dbeec1c8728b9b6222d83f6473549a9e59540ac670c8->enter($__internal_ff5c3b59a081d047fcf6dbeec1c8728b9b6222d83f6473549a9e59540ac670c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_aafa35bc78b593a5fb37fcd0c9ad861848c45106e831959370465b4864d5adee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafa35bc78b593a5fb37fcd0c9ad861848c45106e831959370465b4864d5adee->enter($__internal_aafa35bc78b593a5fb37fcd0c9ad861848c45106e831959370465b4864d5adee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ff5c3b59a081d047fcf6dbeec1c8728b9b6222d83f6473549a9e59540ac670c8->leave($__internal_ff5c3b59a081d047fcf6dbeec1c8728b9b6222d83f6473549a9e59540ac670c8_prof);

        
        $__internal_aafa35bc78b593a5fb37fcd0c9ad861848c45106e831959370465b4864d5adee->leave($__internal_aafa35bc78b593a5fb37fcd0c9ad861848c45106e831959370465b4864d5adee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cec1d5890c6c9f20e6f41e5fffdc1dea6ee7f8774005c1a012b4a032ca82794c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec1d5890c6c9f20e6f41e5fffdc1dea6ee7f8774005c1a012b4a032ca82794c->enter($__internal_cec1d5890c6c9f20e6f41e5fffdc1dea6ee7f8774005c1a012b4a032ca82794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2639234f99dca802a60a89ac836f8f242009c86389e6b7bbae4a46f032370b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2639234f99dca802a60a89ac836f8f242009c86389e6b7bbae4a46f032370b6->enter($__internal_a2639234f99dca802a60a89ac836f8f242009c86389e6b7bbae4a46f032370b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a2639234f99dca802a60a89ac836f8f242009c86389e6b7bbae4a46f032370b6->leave($__internal_a2639234f99dca802a60a89ac836f8f242009c86389e6b7bbae4a46f032370b6_prof);

        
        $__internal_cec1d5890c6c9f20e6f41e5fffdc1dea6ee7f8774005c1a012b4a032ca82794c->leave($__internal_cec1d5890c6c9f20e6f41e5fffdc1dea6ee7f8774005c1a012b4a032ca82794c_prof);

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
