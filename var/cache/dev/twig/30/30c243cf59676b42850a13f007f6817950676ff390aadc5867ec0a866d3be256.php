<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_216980750905dcbbaaefb3c61f2a0809fec4e222aba547fe77366cbe40c7b3b9 extends Twig_Template
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
        $__internal_0e1dd2e57709d91a6c6af89f0f56b42296ac87d75a00bf0796f078172b212f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1dd2e57709d91a6c6af89f0f56b42296ac87d75a00bf0796f078172b212f30->enter($__internal_0e1dd2e57709d91a6c6af89f0f56b42296ac87d75a00bf0796f078172b212f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4b9904f5c4617d4fd9c23738f2b21c1f75172c036051978f78aaa622fc1486e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9904f5c4617d4fd9c23738f2b21c1f75172c036051978f78aaa622fc1486e7->enter($__internal_4b9904f5c4617d4fd9c23738f2b21c1f75172c036051978f78aaa622fc1486e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0e1dd2e57709d91a6c6af89f0f56b42296ac87d75a00bf0796f078172b212f30->leave($__internal_0e1dd2e57709d91a6c6af89f0f56b42296ac87d75a00bf0796f078172b212f30_prof);

        
        $__internal_4b9904f5c4617d4fd9c23738f2b21c1f75172c036051978f78aaa622fc1486e7->leave($__internal_4b9904f5c4617d4fd9c23738f2b21c1f75172c036051978f78aaa622fc1486e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
