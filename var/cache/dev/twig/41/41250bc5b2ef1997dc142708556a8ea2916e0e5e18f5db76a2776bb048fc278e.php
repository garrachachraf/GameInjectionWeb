<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_43910888e45e9f94c0ec24acd51f09c949618421d17867a61983feff7a9ab9f5 extends Twig_Template
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
        $__internal_7e877fabcf7243da566524f471940064b6338b824d2aeb0c380635b4478b463a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e877fabcf7243da566524f471940064b6338b824d2aeb0c380635b4478b463a->enter($__internal_7e877fabcf7243da566524f471940064b6338b824d2aeb0c380635b4478b463a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        $__internal_1a8e734ebd7822de4ce0e0364cb3bf06192fccc817ccdddaea5cfcfc60824623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8e734ebd7822de4ce0e0364cb3bf06192fccc817ccdddaea5cfcfc60824623->enter($__internal_1a8e734ebd7822de4ce0e0364cb3bf06192fccc817ccdddaea5cfcfc60824623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
        $__internal_7e877fabcf7243da566524f471940064b6338b824d2aeb0c380635b4478b463a->leave($__internal_7e877fabcf7243da566524f471940064b6338b824d2aeb0c380635b4478b463a_prof);

        
        $__internal_1a8e734ebd7822de4ce0e0364cb3bf06192fccc817ccdddaea5cfcfc60824623->leave($__internal_1a8e734ebd7822de4ce0e0364cb3bf06192fccc817ccdddaea5cfcfc60824623_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "TwigBundle:Exception:trace.txt.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
