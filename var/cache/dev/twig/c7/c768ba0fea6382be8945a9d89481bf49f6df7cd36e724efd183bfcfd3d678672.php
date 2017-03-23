<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1301e55d13a0ec49a0307d8b9095932da8eb1d110026b6cf37c1878ebf1fbd7b extends Twig_Template
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
        $__internal_76a297b4b27e2fcb7acd07b1074645d4c71f54e030c13438f13831dd8b9712dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a297b4b27e2fcb7acd07b1074645d4c71f54e030c13438f13831dd8b9712dc->enter($__internal_76a297b4b27e2fcb7acd07b1074645d4c71f54e030c13438f13831dd8b9712dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d9f90d7a1f943ee5d8395f93daa5ee05752d9726033d50bcb9294b54659e8b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f90d7a1f943ee5d8395f93daa5ee05752d9726033d50bcb9294b54659e8b7f->enter($__internal_d9f90d7a1f943ee5d8395f93daa5ee05752d9726033d50bcb9294b54659e8b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_76a297b4b27e2fcb7acd07b1074645d4c71f54e030c13438f13831dd8b9712dc->leave($__internal_76a297b4b27e2fcb7acd07b1074645d4c71f54e030c13438f13831dd8b9712dc_prof);

        
        $__internal_d9f90d7a1f943ee5d8395f93daa5ee05752d9726033d50bcb9294b54659e8b7f->leave($__internal_d9f90d7a1f943ee5d8395f93daa5ee05752d9726033d50bcb9294b54659e8b7f_prof);

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
