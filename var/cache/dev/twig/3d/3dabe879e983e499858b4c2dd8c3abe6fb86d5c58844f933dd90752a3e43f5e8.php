<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b115873f55306d104a1fdbc6e8a01fc1c3b0772112aa2ad55362ac1ae87f406a extends Twig_Template
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
        $__internal_f7277220dfbf4f51ccb6e5d330ac9a9937bc5fc16f269a330c9f1bfa9ee104d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7277220dfbf4f51ccb6e5d330ac9a9937bc5fc16f269a330c9f1bfa9ee104d7->enter($__internal_f7277220dfbf4f51ccb6e5d330ac9a9937bc5fc16f269a330c9f1bfa9ee104d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c34f7578d216dc26473fff5c6909e457598ddf85e16964fd795cdfc30de8d38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34f7578d216dc26473fff5c6909e457598ddf85e16964fd795cdfc30de8d38f->enter($__internal_c34f7578d216dc26473fff5c6909e457598ddf85e16964fd795cdfc30de8d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_f7277220dfbf4f51ccb6e5d330ac9a9937bc5fc16f269a330c9f1bfa9ee104d7->leave($__internal_f7277220dfbf4f51ccb6e5d330ac9a9937bc5fc16f269a330c9f1bfa9ee104d7_prof);

        
        $__internal_c34f7578d216dc26473fff5c6909e457598ddf85e16964fd795cdfc30de8d38f->leave($__internal_c34f7578d216dc26473fff5c6909e457598ddf85e16964fd795cdfc30de8d38f_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
