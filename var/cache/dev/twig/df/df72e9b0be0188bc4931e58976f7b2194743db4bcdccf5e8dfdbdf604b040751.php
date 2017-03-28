<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bea2927ccd3a93c8b0c7e01c69e8d691ce55da15642a43e1e6aba2391a86f22a extends Twig_Template
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
        $__internal_5f4d09c3e5dcedb05bb502083302e40251e932281d821dcf735242f46645871f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4d09c3e5dcedb05bb502083302e40251e932281d821dcf735242f46645871f->enter($__internal_5f4d09c3e5dcedb05bb502083302e40251e932281d821dcf735242f46645871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_75cd1ac57b4706b82bed32188395583db6565acc73392649bca41bdc2b91a9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cd1ac57b4706b82bed32188395583db6565acc73392649bca41bdc2b91a9c7->enter($__internal_75cd1ac57b4706b82bed32188395583db6565acc73392649bca41bdc2b91a9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5f4d09c3e5dcedb05bb502083302e40251e932281d821dcf735242f46645871f->leave($__internal_5f4d09c3e5dcedb05bb502083302e40251e932281d821dcf735242f46645871f_prof);

        
        $__internal_75cd1ac57b4706b82bed32188395583db6565acc73392649bca41bdc2b91a9c7->leave($__internal_75cd1ac57b4706b82bed32188395583db6565acc73392649bca41bdc2b91a9c7_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
