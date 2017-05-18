<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3e49d9ce91664a4d35a5278fe2626d45338d40dbba88af1226b929ee3463ddfe extends Twig_Template
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
        $__internal_94463a48047dd9e9c929e77cfe1b2cb48cb2c8e538e71a409e30769174e75617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94463a48047dd9e9c929e77cfe1b2cb48cb2c8e538e71a409e30769174e75617->enter($__internal_94463a48047dd9e9c929e77cfe1b2cb48cb2c8e538e71a409e30769174e75617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8ae39495498d1bcfd8782deb5c084279f18b951e26e19d26c0aa2db48de7980a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae39495498d1bcfd8782deb5c084279f18b951e26e19d26c0aa2db48de7980a->enter($__internal_8ae39495498d1bcfd8782deb5c084279f18b951e26e19d26c0aa2db48de7980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_94463a48047dd9e9c929e77cfe1b2cb48cb2c8e538e71a409e30769174e75617->leave($__internal_94463a48047dd9e9c929e77cfe1b2cb48cb2c8e538e71a409e30769174e75617_prof);

        
        $__internal_8ae39495498d1bcfd8782deb5c084279f18b951e26e19d26c0aa2db48de7980a->leave($__internal_8ae39495498d1bcfd8782deb5c084279f18b951e26e19d26c0aa2db48de7980a_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
