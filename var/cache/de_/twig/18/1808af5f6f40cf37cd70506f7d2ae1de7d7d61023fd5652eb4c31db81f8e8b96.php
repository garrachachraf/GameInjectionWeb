<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_c975bafe1c95cfc26501a81eba0ca665cfe298ad0e371dbb49e453f6d31dd82c extends Twig_Template
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
        $__internal_77fe3144b111ad75e1302cf47ecf32dd6c1885f5589a58eca6fcad9211c205e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fe3144b111ad75e1302cf47ecf32dd6c1885f5589a58eca6fcad9211c205e2->enter($__internal_77fe3144b111ad75e1302cf47ecf32dd6c1885f5589a58eca6fcad9211c205e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c19b471055f2bcb83ba6e659d4991a00cdf90d73266763fd0db6799c7be4c97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19b471055f2bcb83ba6e659d4991a00cdf90d73266763fd0db6799c7be4c97a->enter($__internal_c19b471055f2bcb83ba6e659d4991a00cdf90d73266763fd0db6799c7be4c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_77fe3144b111ad75e1302cf47ecf32dd6c1885f5589a58eca6fcad9211c205e2->leave($__internal_77fe3144b111ad75e1302cf47ecf32dd6c1885f5589a58eca6fcad9211c205e2_prof);

        
        $__internal_c19b471055f2bcb83ba6e659d4991a00cdf90d73266763fd0db6799c7be4c97a->leave($__internal_c19b471055f2bcb83ba6e659d4991a00cdf90d73266763fd0db6799c7be4c97a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
