<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3b0990e9435be31be29b9dd137018c94295428730bee1b10ca58dc3f75240a9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8175d73403ec9b5229370f32edb017618e7507b9a847adfdd49ecabe967fe19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8175d73403ec9b5229370f32edb017618e7507b9a847adfdd49ecabe967fe19->enter($__internal_f8175d73403ec9b5229370f32edb017618e7507b9a847adfdd49ecabe967fe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e36ec0ddc8f8536692e005f7d4e637e9edf8e2a64a74f4f7f11469293469ba53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36ec0ddc8f8536692e005f7d4e637e9edf8e2a64a74f4f7f11469293469ba53->enter($__internal_e36ec0ddc8f8536692e005f7d4e637e9edf8e2a64a74f4f7f11469293469ba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f8175d73403ec9b5229370f32edb017618e7507b9a847adfdd49ecabe967fe19->leave($__internal_f8175d73403ec9b5229370f32edb017618e7507b9a847adfdd49ecabe967fe19_prof);

        
        $__internal_e36ec0ddc8f8536692e005f7d4e637e9edf8e2a64a74f4f7f11469293469ba53->leave($__internal_e36ec0ddc8f8536692e005f7d4e637e9edf8e2a64a74f4f7f11469293469ba53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
