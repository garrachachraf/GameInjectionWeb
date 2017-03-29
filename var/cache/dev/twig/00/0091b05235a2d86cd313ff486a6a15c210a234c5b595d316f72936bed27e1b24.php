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
        $__internal_445f055e00a353eea22e1329c81e01af213b278ed5681450e9a2697be500b2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445f055e00a353eea22e1329c81e01af213b278ed5681450e9a2697be500b2c4->enter($__internal_445f055e00a353eea22e1329c81e01af213b278ed5681450e9a2697be500b2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_8d9fdc079fb5a5681427a98a29e8c1e16ad9a0580a9258c86dd0f66e4ceb7c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9fdc079fb5a5681427a98a29e8c1e16ad9a0580a9258c86dd0f66e4ceb7c10->enter($__internal_8d9fdc079fb5a5681427a98a29e8c1e16ad9a0580a9258c86dd0f66e4ceb7c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_445f055e00a353eea22e1329c81e01af213b278ed5681450e9a2697be500b2c4->leave($__internal_445f055e00a353eea22e1329c81e01af213b278ed5681450e9a2697be500b2c4_prof);

        
        $__internal_8d9fdc079fb5a5681427a98a29e8c1e16ad9a0580a9258c86dd0f66e4ceb7c10->leave($__internal_8d9fdc079fb5a5681427a98a29e8c1e16ad9a0580a9258c86dd0f66e4ceb7c10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a99db3f6bf7f3b5bebc1b2d798c2086746fd9d52362a2c4b29a42379ab507aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99db3f6bf7f3b5bebc1b2d798c2086746fd9d52362a2c4b29a42379ab507aa8->enter($__internal_a99db3f6bf7f3b5bebc1b2d798c2086746fd9d52362a2c4b29a42379ab507aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c52552980adae131648b115d6b00dd3075fc94a50225df15e50c15a3b14977d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52552980adae131648b115d6b00dd3075fc94a50225df15e50c15a3b14977d5->enter($__internal_c52552980adae131648b115d6b00dd3075fc94a50225df15e50c15a3b14977d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c52552980adae131648b115d6b00dd3075fc94a50225df15e50c15a3b14977d5->leave($__internal_c52552980adae131648b115d6b00dd3075fc94a50225df15e50c15a3b14977d5_prof);

        
        $__internal_a99db3f6bf7f3b5bebc1b2d798c2086746fd9d52362a2c4b29a42379ab507aa8->leave($__internal_a99db3f6bf7f3b5bebc1b2d798c2086746fd9d52362a2c4b29a42379ab507aa8_prof);

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
