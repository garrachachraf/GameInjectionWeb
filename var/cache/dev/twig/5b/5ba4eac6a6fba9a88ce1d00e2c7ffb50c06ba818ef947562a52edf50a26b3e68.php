<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f6ef130bf28610d0c8bd5c6a40ba9241de6e7fb637e77da43dec3aec11232f8e extends Twig_Template
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
        $__internal_be7f1672b2082f051b4b6dedaeb874ec6391efc76bed5a1b5db5a41892fdf6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7f1672b2082f051b4b6dedaeb874ec6391efc76bed5a1b5db5a41892fdf6a6->enter($__internal_be7f1672b2082f051b4b6dedaeb874ec6391efc76bed5a1b5db5a41892fdf6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0ed0ac06fa507509ed8fb0ab186225a723124d434c7794b90c3ca0b31861e993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed0ac06fa507509ed8fb0ab186225a723124d434c7794b90c3ca0b31861e993->enter($__internal_0ed0ac06fa507509ed8fb0ab186225a723124d434c7794b90c3ca0b31861e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_be7f1672b2082f051b4b6dedaeb874ec6391efc76bed5a1b5db5a41892fdf6a6->leave($__internal_be7f1672b2082f051b4b6dedaeb874ec6391efc76bed5a1b5db5a41892fdf6a6_prof);

        
        $__internal_0ed0ac06fa507509ed8fb0ab186225a723124d434c7794b90c3ca0b31861e993->leave($__internal_0ed0ac06fa507509ed8fb0ab186225a723124d434c7794b90c3ca0b31861e993_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e8bb3ec4aec94ec648150254f23cd8f04777142eb6c03c284fc2b95b989337e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8bb3ec4aec94ec648150254f23cd8f04777142eb6c03c284fc2b95b989337e->enter($__internal_4e8bb3ec4aec94ec648150254f23cd8f04777142eb6c03c284fc2b95b989337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c2a3f6039b26eabd6b692bc94b560dd250ef9f33869554326259e586f3ca67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2a3f6039b26eabd6b692bc94b560dd250ef9f33869554326259e586f3ca67a->enter($__internal_2c2a3f6039b26eabd6b692bc94b560dd250ef9f33869554326259e586f3ca67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c2a3f6039b26eabd6b692bc94b560dd250ef9f33869554326259e586f3ca67a->leave($__internal_2c2a3f6039b26eabd6b692bc94b560dd250ef9f33869554326259e586f3ca67a_prof);

        
        $__internal_4e8bb3ec4aec94ec648150254f23cd8f04777142eb6c03c284fc2b95b989337e->leave($__internal_4e8bb3ec4aec94ec648150254f23cd8f04777142eb6c03c284fc2b95b989337e_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
