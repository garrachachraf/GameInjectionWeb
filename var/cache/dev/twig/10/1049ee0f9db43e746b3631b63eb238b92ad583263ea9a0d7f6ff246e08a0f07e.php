<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d7e0f7f9d1ea7acfb1e00b2d3509ba29d39aefe4a84c9cf5f2d1500c3033dcd8 extends Twig_Template
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
        $__internal_ecea6831f714a6285bcfa29052406c820240ec1bf8dc386da83adea99b5c143f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea6831f714a6285bcfa29052406c820240ec1bf8dc386da83adea99b5c143f->enter($__internal_ecea6831f714a6285bcfa29052406c820240ec1bf8dc386da83adea99b5c143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_0546742de4aeb20a3fa06f81bc81562921b7f51f802b5bfc470aedc8446ba464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0546742de4aeb20a3fa06f81bc81562921b7f51f802b5bfc470aedc8446ba464->enter($__internal_0546742de4aeb20a3fa06f81bc81562921b7f51f802b5bfc470aedc8446ba464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_ecea6831f714a6285bcfa29052406c820240ec1bf8dc386da83adea99b5c143f->leave($__internal_ecea6831f714a6285bcfa29052406c820240ec1bf8dc386da83adea99b5c143f_prof);

        
        $__internal_0546742de4aeb20a3fa06f81bc81562921b7f51f802b5bfc470aedc8446ba464->leave($__internal_0546742de4aeb20a3fa06f81bc81562921b7f51f802b5bfc470aedc8446ba464_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
