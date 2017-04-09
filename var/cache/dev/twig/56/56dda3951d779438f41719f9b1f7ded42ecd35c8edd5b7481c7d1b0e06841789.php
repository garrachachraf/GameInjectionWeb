<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_b6a20be679b4eb02016b57c807bb41a6a0ddc28957d9099ab0d6d1520df97261 extends Twig_Template
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
        $__internal_867da66ab03ff3ef3a21774f575da8539c377dc31c56af28d286d0e7d71ae25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867da66ab03ff3ef3a21774f575da8539c377dc31c56af28d286d0e7d71ae25d->enter($__internal_867da66ab03ff3ef3a21774f575da8539c377dc31c56af28d286d0e7d71ae25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_7cdb8e92d5134c6c7bc012ee0a3e36375228d54e807c76e6ac6671fe192468e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdb8e92d5134c6c7bc012ee0a3e36375228d54e807c76e6ac6671fe192468e7->enter($__internal_7cdb8e92d5134c6c7bc012ee0a3e36375228d54e807c76e6ac6671fe192468e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_867da66ab03ff3ef3a21774f575da8539c377dc31c56af28d286d0e7d71ae25d->leave($__internal_867da66ab03ff3ef3a21774f575da8539c377dc31c56af28d286d0e7d71ae25d_prof);

        
        $__internal_7cdb8e92d5134c6c7bc012ee0a3e36375228d54e807c76e6ac6671fe192468e7->leave($__internal_7cdb8e92d5134c6c7bc012ee0a3e36375228d54e807c76e6ac6671fe192468e7_prof);

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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
