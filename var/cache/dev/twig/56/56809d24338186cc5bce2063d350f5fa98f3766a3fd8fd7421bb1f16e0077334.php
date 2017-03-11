<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_735b7e594b580016a363ff8b14e55fbcfb7992945a7f43f614ff223cd65f488d extends Twig_Template
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
        $__internal_417d6eaffdd501aadd320b93ebb2ec8ff7ba92419a51c104c3bbeccedf496495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417d6eaffdd501aadd320b93ebb2ec8ff7ba92419a51c104c3bbeccedf496495->enter($__internal_417d6eaffdd501aadd320b93ebb2ec8ff7ba92419a51c104c3bbeccedf496495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b3da5dcc7689cae2a08a80f5efdf22462abb96bf99dfeeb7b1f333054b3c1617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3da5dcc7689cae2a08a80f5efdf22462abb96bf99dfeeb7b1f333054b3c1617->enter($__internal_b3da5dcc7689cae2a08a80f5efdf22462abb96bf99dfeeb7b1f333054b3c1617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_417d6eaffdd501aadd320b93ebb2ec8ff7ba92419a51c104c3bbeccedf496495->leave($__internal_417d6eaffdd501aadd320b93ebb2ec8ff7ba92419a51c104c3bbeccedf496495_prof);

        
        $__internal_b3da5dcc7689cae2a08a80f5efdf22462abb96bf99dfeeb7b1f333054b3c1617->leave($__internal_b3da5dcc7689cae2a08a80f5efdf22462abb96bf99dfeeb7b1f333054b3c1617_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
