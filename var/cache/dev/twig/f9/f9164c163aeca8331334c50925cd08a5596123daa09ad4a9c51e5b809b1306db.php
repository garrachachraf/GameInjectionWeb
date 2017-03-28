<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_5dc1bb106b498af067aa93486cc149cc98a82918eef431632303325f66cc516d extends Twig_Template
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
        $__internal_ea24d74cdee7c286864ff10d42172c64fdfccf5d01bb2b9e18d996174d104b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea24d74cdee7c286864ff10d42172c64fdfccf5d01bb2b9e18d996174d104b58->enter($__internal_ea24d74cdee7c286864ff10d42172c64fdfccf5d01bb2b9e18d996174d104b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_ddf0b010fb83285abfb63b2fa7447ec3ea5c440505fc2e1caff959d8ba74f587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf0b010fb83285abfb63b2fa7447ec3ea5c440505fc2e1caff959d8ba74f587->enter($__internal_ddf0b010fb83285abfb63b2fa7447ec3ea5c440505fc2e1caff959d8ba74f587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_ea24d74cdee7c286864ff10d42172c64fdfccf5d01bb2b9e18d996174d104b58->leave($__internal_ea24d74cdee7c286864ff10d42172c64fdfccf5d01bb2b9e18d996174d104b58_prof);

        
        $__internal_ddf0b010fb83285abfb63b2fa7447ec3ea5c440505fc2e1caff959d8ba74f587->leave($__internal_ddf0b010fb83285abfb63b2fa7447ec3ea5c440505fc2e1caff959d8ba74f587_prof);

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
