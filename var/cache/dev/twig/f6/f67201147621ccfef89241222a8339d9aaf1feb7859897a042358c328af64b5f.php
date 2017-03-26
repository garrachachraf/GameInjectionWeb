<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b929eb0333ec9ed2ac3391a2c1276c237746ad1e5f7853af252fb35f4c1213c0 extends Twig_Template
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
        $__internal_ccd2541e18c79c399b6f8834bbab27083158a286e6cf55fb8e02f0d2e1237571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd2541e18c79c399b6f8834bbab27083158a286e6cf55fb8e02f0d2e1237571->enter($__internal_ccd2541e18c79c399b6f8834bbab27083158a286e6cf55fb8e02f0d2e1237571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3948497400f1d7d40937d0825653a56417b29d5befe1667f8cf1588a5bbc2255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3948497400f1d7d40937d0825653a56417b29d5befe1667f8cf1588a5bbc2255->enter($__internal_3948497400f1d7d40937d0825653a56417b29d5befe1667f8cf1588a5bbc2255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_ccd2541e18c79c399b6f8834bbab27083158a286e6cf55fb8e02f0d2e1237571->leave($__internal_ccd2541e18c79c399b6f8834bbab27083158a286e6cf55fb8e02f0d2e1237571_prof);

        
        $__internal_3948497400f1d7d40937d0825653a56417b29d5befe1667f8cf1588a5bbc2255->leave($__internal_3948497400f1d7d40937d0825653a56417b29d5befe1667f8cf1588a5bbc2255_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
