<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_756ec79710117d74116c38958c61d7a55e17063180536e8d4e61c8ff52428300 extends Twig_Template
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
        $__internal_1eed366126c6c666649dfdef4fa0c55fafef0914dbe91df886529a622d41373e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eed366126c6c666649dfdef4fa0c55fafef0914dbe91df886529a622d41373e->enter($__internal_1eed366126c6c666649dfdef4fa0c55fafef0914dbe91df886529a622d41373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_03f996b368860a8272c8555c79f244b1c9ec261d38163766317b212d74b37668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f996b368860a8272c8555c79f244b1c9ec261d38163766317b212d74b37668->enter($__internal_03f996b368860a8272c8555c79f244b1c9ec261d38163766317b212d74b37668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1eed366126c6c666649dfdef4fa0c55fafef0914dbe91df886529a622d41373e->leave($__internal_1eed366126c6c666649dfdef4fa0c55fafef0914dbe91df886529a622d41373e_prof);

        
        $__internal_03f996b368860a8272c8555c79f244b1c9ec261d38163766317b212d74b37668->leave($__internal_03f996b368860a8272c8555c79f244b1c9ec261d38163766317b212d74b37668_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
