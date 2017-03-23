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
        $__internal_092dd9c6c0bf2ee5ab3683c732943a9eb77ad83116aa083b751e5fa78d425516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092dd9c6c0bf2ee5ab3683c732943a9eb77ad83116aa083b751e5fa78d425516->enter($__internal_092dd9c6c0bf2ee5ab3683c732943a9eb77ad83116aa083b751e5fa78d425516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3137ad4bccc82e179af94f2983c5e68c323f4b991398bb439d6e354438e52c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3137ad4bccc82e179af94f2983c5e68c323f4b991398bb439d6e354438e52c11->enter($__internal_3137ad4bccc82e179af94f2983c5e68c323f4b991398bb439d6e354438e52c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_092dd9c6c0bf2ee5ab3683c732943a9eb77ad83116aa083b751e5fa78d425516->leave($__internal_092dd9c6c0bf2ee5ab3683c732943a9eb77ad83116aa083b751e5fa78d425516_prof);

        
        $__internal_3137ad4bccc82e179af94f2983c5e68c323f4b991398bb439d6e354438e52c11->leave($__internal_3137ad4bccc82e179af94f2983c5e68c323f4b991398bb439d6e354438e52c11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cad2b061589df38499138292e60c9e8a2ecc7cb425ef21d5fa3b28ecdf3cae53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad2b061589df38499138292e60c9e8a2ecc7cb425ef21d5fa3b28ecdf3cae53->enter($__internal_cad2b061589df38499138292e60c9e8a2ecc7cb425ef21d5fa3b28ecdf3cae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9934218470cf0959b995131c0212bc01f9d4e2f6326886351b66f6dff3ef9dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9934218470cf0959b995131c0212bc01f9d4e2f6326886351b66f6dff3ef9dae->enter($__internal_9934218470cf0959b995131c0212bc01f9d4e2f6326886351b66f6dff3ef9dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9934218470cf0959b995131c0212bc01f9d4e2f6326886351b66f6dff3ef9dae->leave($__internal_9934218470cf0959b995131c0212bc01f9d4e2f6326886351b66f6dff3ef9dae_prof);

        
        $__internal_cad2b061589df38499138292e60c9e8a2ecc7cb425ef21d5fa3b28ecdf3cae53->leave($__internal_cad2b061589df38499138292e60c9e8a2ecc7cb425ef21d5fa3b28ecdf3cae53_prof);

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
