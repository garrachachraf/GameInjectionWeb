<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_6d2882e6e72d648fcd02670f337d887a8147df38d9c5347daf31b9b8d8f7a4be extends Twig_Template
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
        $__internal_083c3e5eca93ebb829bb98a9ffa3f0f5cf3628a137ff4998fab9f5a25d37e67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083c3e5eca93ebb829bb98a9ffa3f0f5cf3628a137ff4998fab9f5a25d37e67f->enter($__internal_083c3e5eca93ebb829bb98a9ffa3f0f5cf3628a137ff4998fab9f5a25d37e67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_b35848bc4fad879ddc6bccd97e8dac2a74a248b52996b00ed2908fd9b303e35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35848bc4fad879ddc6bccd97e8dac2a74a248b52996b00ed2908fd9b303e35e->enter($__internal_b35848bc4fad879ddc6bccd97e8dac2a74a248b52996b00ed2908fd9b303e35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_083c3e5eca93ebb829bb98a9ffa3f0f5cf3628a137ff4998fab9f5a25d37e67f->leave($__internal_083c3e5eca93ebb829bb98a9ffa3f0f5cf3628a137ff4998fab9f5a25d37e67f_prof);

        
        $__internal_b35848bc4fad879ddc6bccd97e8dac2a74a248b52996b00ed2908fd9b303e35e->leave($__internal_b35848bc4fad879ddc6bccd97e8dac2a74a248b52996b00ed2908fd9b303e35e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
