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
        $__internal_e9f073b901a1d4ad19b5af8013a44f4562fd6707bc26d205f8c35677e8594828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f073b901a1d4ad19b5af8013a44f4562fd6707bc26d205f8c35677e8594828->enter($__internal_e9f073b901a1d4ad19b5af8013a44f4562fd6707bc26d205f8c35677e8594828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_90ccaa29ee0d23ae481868c3e7ce032a42f068930acbb432ece128c55588061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ccaa29ee0d23ae481868c3e7ce032a42f068930acbb432ece128c55588061c->enter($__internal_90ccaa29ee0d23ae481868c3e7ce032a42f068930acbb432ece128c55588061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e9f073b901a1d4ad19b5af8013a44f4562fd6707bc26d205f8c35677e8594828->leave($__internal_e9f073b901a1d4ad19b5af8013a44f4562fd6707bc26d205f8c35677e8594828_prof);

        
        $__internal_90ccaa29ee0d23ae481868c3e7ce032a42f068930acbb432ece128c55588061c->leave($__internal_90ccaa29ee0d23ae481868c3e7ce032a42f068930acbb432ece128c55588061c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac4ce7f041c6adffbd8699b8184c773902ad713cfe2cb2abd2714e65e6138a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4ce7f041c6adffbd8699b8184c773902ad713cfe2cb2abd2714e65e6138a9d->enter($__internal_ac4ce7f041c6adffbd8699b8184c773902ad713cfe2cb2abd2714e65e6138a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_609434956ab3187cb9d6cd33b659240e41c7369c84f417d71378de84ff65d2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609434956ab3187cb9d6cd33b659240e41c7369c84f417d71378de84ff65d2ac->enter($__internal_609434956ab3187cb9d6cd33b659240e41c7369c84f417d71378de84ff65d2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_609434956ab3187cb9d6cd33b659240e41c7369c84f417d71378de84ff65d2ac->leave($__internal_609434956ab3187cb9d6cd33b659240e41c7369c84f417d71378de84ff65d2ac_prof);

        
        $__internal_ac4ce7f041c6adffbd8699b8184c773902ad713cfe2cb2abd2714e65e6138a9d->leave($__internal_ac4ce7f041c6adffbd8699b8184c773902ad713cfe2cb2abd2714e65e6138a9d_prof);

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
