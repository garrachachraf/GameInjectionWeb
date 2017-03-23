<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_21675df96647b956abb26b58e11b78ed0ff7d04912e1e42a67445cf030589a44 extends Twig_Template
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
        $__internal_2b52013f23c062e363d6e408f61687bb3ab39f8a0dcfa4c29b5520df3bda4177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b52013f23c062e363d6e408f61687bb3ab39f8a0dcfa4c29b5520df3bda4177->enter($__internal_2b52013f23c062e363d6e408f61687bb3ab39f8a0dcfa4c29b5520df3bda4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_eda3e2bfb555dd488a7a32cba60592bbd95ed33e54fd9346541144bcf6a69d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda3e2bfb555dd488a7a32cba60592bbd95ed33e54fd9346541144bcf6a69d7f->enter($__internal_eda3e2bfb555dd488a7a32cba60592bbd95ed33e54fd9346541144bcf6a69d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b52013f23c062e363d6e408f61687bb3ab39f8a0dcfa4c29b5520df3bda4177->leave($__internal_2b52013f23c062e363d6e408f61687bb3ab39f8a0dcfa4c29b5520df3bda4177_prof);

        
        $__internal_eda3e2bfb555dd488a7a32cba60592bbd95ed33e54fd9346541144bcf6a69d7f->leave($__internal_eda3e2bfb555dd488a7a32cba60592bbd95ed33e54fd9346541144bcf6a69d7f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c93d3533860c2dc4e8fad7a4bf1efcc9c6b2a1a0671d5174e2e470aa43b0173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c93d3533860c2dc4e8fad7a4bf1efcc9c6b2a1a0671d5174e2e470aa43b0173->enter($__internal_7c93d3533860c2dc4e8fad7a4bf1efcc9c6b2a1a0671d5174e2e470aa43b0173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e3f1e5b5272170bbeeef580d1fc2c886770939a3ec949a076e077e2a6f57bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3f1e5b5272170bbeeef580d1fc2c886770939a3ec949a076e077e2a6f57bfc->enter($__internal_1e3f1e5b5272170bbeeef580d1fc2c886770939a3ec949a076e077e2a6f57bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e3f1e5b5272170bbeeef580d1fc2c886770939a3ec949a076e077e2a6f57bfc->leave($__internal_1e3f1e5b5272170bbeeef580d1fc2c886770939a3ec949a076e077e2a6f57bfc_prof);

        
        $__internal_7c93d3533860c2dc4e8fad7a4bf1efcc9c6b2a1a0671d5174e2e470aa43b0173->leave($__internal_7c93d3533860c2dc4e8fad7a4bf1efcc9c6b2a1a0671d5174e2e470aa43b0173_prof);

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
