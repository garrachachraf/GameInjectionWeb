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
        $__internal_61036aab54bb7924adef7ffb667d1828bb8aac0d776c90edee4c197015e6f677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61036aab54bb7924adef7ffb667d1828bb8aac0d776c90edee4c197015e6f677->enter($__internal_61036aab54bb7924adef7ffb667d1828bb8aac0d776c90edee4c197015e6f677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0251b089963a2c1dc0c33f7a3d6ba9c57859843819818833983fcc073a9efedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0251b089963a2c1dc0c33f7a3d6ba9c57859843819818833983fcc073a9efedc->enter($__internal_0251b089963a2c1dc0c33f7a3d6ba9c57859843819818833983fcc073a9efedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_61036aab54bb7924adef7ffb667d1828bb8aac0d776c90edee4c197015e6f677->leave($__internal_61036aab54bb7924adef7ffb667d1828bb8aac0d776c90edee4c197015e6f677_prof);

        
        $__internal_0251b089963a2c1dc0c33f7a3d6ba9c57859843819818833983fcc073a9efedc->leave($__internal_0251b089963a2c1dc0c33f7a3d6ba9c57859843819818833983fcc073a9efedc_prof);

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
