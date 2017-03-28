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
        $__internal_60ae1646f89d95d5dafbba3ee55445aec4a078215afc0b0b8777e4d985e9a151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ae1646f89d95d5dafbba3ee55445aec4a078215afc0b0b8777e4d985e9a151->enter($__internal_60ae1646f89d95d5dafbba3ee55445aec4a078215afc0b0b8777e4d985e9a151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a582d86d987a00a8accea02a59dc08f51cd115917010395da5e0c37142d68f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a582d86d987a00a8accea02a59dc08f51cd115917010395da5e0c37142d68f1c->enter($__internal_a582d86d987a00a8accea02a59dc08f51cd115917010395da5e0c37142d68f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_60ae1646f89d95d5dafbba3ee55445aec4a078215afc0b0b8777e4d985e9a151->leave($__internal_60ae1646f89d95d5dafbba3ee55445aec4a078215afc0b0b8777e4d985e9a151_prof);

        
        $__internal_a582d86d987a00a8accea02a59dc08f51cd115917010395da5e0c37142d68f1c->leave($__internal_a582d86d987a00a8accea02a59dc08f51cd115917010395da5e0c37142d68f1c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_daa08066d7293da559989f97cf789db9ec56157a088f2f173789f019dd1ec90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa08066d7293da559989f97cf789db9ec56157a088f2f173789f019dd1ec90a->enter($__internal_daa08066d7293da559989f97cf789db9ec56157a088f2f173789f019dd1ec90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_461d8143a4957a7a4510aac453cf4c52ebd29e1acb560d862230496fb881fb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461d8143a4957a7a4510aac453cf4c52ebd29e1acb560d862230496fb881fb84->enter($__internal_461d8143a4957a7a4510aac453cf4c52ebd29e1acb560d862230496fb881fb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_461d8143a4957a7a4510aac453cf4c52ebd29e1acb560d862230496fb881fb84->leave($__internal_461d8143a4957a7a4510aac453cf4c52ebd29e1acb560d862230496fb881fb84_prof);

        
        $__internal_daa08066d7293da559989f97cf789db9ec56157a088f2f173789f019dd1ec90a->leave($__internal_daa08066d7293da559989f97cf789db9ec56157a088f2f173789f019dd1ec90a_prof);

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
