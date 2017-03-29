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
        $__internal_83f4cc5fd7dc97d8483b0294824bc36747bc56f8080b7c1b76d87973bdd151a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f4cc5fd7dc97d8483b0294824bc36747bc56f8080b7c1b76d87973bdd151a7->enter($__internal_83f4cc5fd7dc97d8483b0294824bc36747bc56f8080b7c1b76d87973bdd151a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ddc6a6aa73249cd977b97d2e74bcca5a33b779265880a14f8aca034ae9e04a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc6a6aa73249cd977b97d2e74bcca5a33b779265880a14f8aca034ae9e04a3a->enter($__internal_ddc6a6aa73249cd977b97d2e74bcca5a33b779265880a14f8aca034ae9e04a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_83f4cc5fd7dc97d8483b0294824bc36747bc56f8080b7c1b76d87973bdd151a7->leave($__internal_83f4cc5fd7dc97d8483b0294824bc36747bc56f8080b7c1b76d87973bdd151a7_prof);

        
        $__internal_ddc6a6aa73249cd977b97d2e74bcca5a33b779265880a14f8aca034ae9e04a3a->leave($__internal_ddc6a6aa73249cd977b97d2e74bcca5a33b779265880a14f8aca034ae9e04a3a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5bb9988d1fd65e5b834661e98e9acee13732b993b3bbc851c105a35f435576d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bb9988d1fd65e5b834661e98e9acee13732b993b3bbc851c105a35f435576d->enter($__internal_c5bb9988d1fd65e5b834661e98e9acee13732b993b3bbc851c105a35f435576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_449ade900617ee38ffb683c526648fce28f2040f20198459816853e333e59565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449ade900617ee38ffb683c526648fce28f2040f20198459816853e333e59565->enter($__internal_449ade900617ee38ffb683c526648fce28f2040f20198459816853e333e59565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_449ade900617ee38ffb683c526648fce28f2040f20198459816853e333e59565->leave($__internal_449ade900617ee38ffb683c526648fce28f2040f20198459816853e333e59565_prof);

        
        $__internal_c5bb9988d1fd65e5b834661e98e9acee13732b993b3bbc851c105a35f435576d->leave($__internal_c5bb9988d1fd65e5b834661e98e9acee13732b993b3bbc851c105a35f435576d_prof);

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
