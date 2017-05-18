<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_135b40b506d110974d0f717e18422a73b6dce13123fb209dbccfeda44be0dc71 extends Twig_Template
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
        $__internal_f1f8311bbbea3f6f40b217adaa3825b1d83d3a05e8200e6e1f05a69a6228bc38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f8311bbbea3f6f40b217adaa3825b1d83d3a05e8200e6e1f05a69a6228bc38->enter($__internal_f1f8311bbbea3f6f40b217adaa3825b1d83d3a05e8200e6e1f05a69a6228bc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_58dee23009a02115f4c18efd97dacf56ed8e63c2f3e48827121567a787363d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dee23009a02115f4c18efd97dacf56ed8e63c2f3e48827121567a787363d23->enter($__internal_58dee23009a02115f4c18efd97dacf56ed8e63c2f3e48827121567a787363d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f1f8311bbbea3f6f40b217adaa3825b1d83d3a05e8200e6e1f05a69a6228bc38->leave($__internal_f1f8311bbbea3f6f40b217adaa3825b1d83d3a05e8200e6e1f05a69a6228bc38_prof);

        
        $__internal_58dee23009a02115f4c18efd97dacf56ed8e63c2f3e48827121567a787363d23->leave($__internal_58dee23009a02115f4c18efd97dacf56ed8e63c2f3e48827121567a787363d23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
