<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_631e2d2e1d32095a4e3df46b3be39864b9383a0a1cb7bc82b8052ed64df2f791 extends Twig_Template
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
        $__internal_6dd0c4338621c83090b311f3ffab8b16565aa7c8cd1e60350b616242fdd621e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd0c4338621c83090b311f3ffab8b16565aa7c8cd1e60350b616242fdd621e1->enter($__internal_6dd0c4338621c83090b311f3ffab8b16565aa7c8cd1e60350b616242fdd621e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_1fa52d74f9301b6f427279d7b77c3bdbca500df85a3abe4d3f5fce64e431f725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa52d74f9301b6f427279d7b77c3bdbca500df85a3abe4d3f5fce64e431f725->enter($__internal_1fa52d74f9301b6f427279d7b77c3bdbca500df85a3abe4d3f5fce64e431f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_6dd0c4338621c83090b311f3ffab8b16565aa7c8cd1e60350b616242fdd621e1->leave($__internal_6dd0c4338621c83090b311f3ffab8b16565aa7c8cd1e60350b616242fdd621e1_prof);

        
        $__internal_1fa52d74f9301b6f427279d7b77c3bdbca500df85a3abe4d3f5fce64e431f725->leave($__internal_1fa52d74f9301b6f427279d7b77c3bdbca500df85a3abe4d3f5fce64e431f725_prof);

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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
