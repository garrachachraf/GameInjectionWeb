<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4c772bd6db69c32a6d76f1a610b874cf0fd6dced82ed58ad1946b3da3c2e84f7 extends Twig_Template
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
        $__internal_66ea7d3d3587e1347eb79ee3594689935d534b45ed4eb62de3ac1d812c7127db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ea7d3d3587e1347eb79ee3594689935d534b45ed4eb62de3ac1d812c7127db->enter($__internal_66ea7d3d3587e1347eb79ee3594689935d534b45ed4eb62de3ac1d812c7127db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5a0be3f4f0268624c6fd700bd92368dda4182804bcf42b3389113baec18b9b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0be3f4f0268624c6fd700bd92368dda4182804bcf42b3389113baec18b9b1e->enter($__internal_5a0be3f4f0268624c6fd700bd92368dda4182804bcf42b3389113baec18b9b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_66ea7d3d3587e1347eb79ee3594689935d534b45ed4eb62de3ac1d812c7127db->leave($__internal_66ea7d3d3587e1347eb79ee3594689935d534b45ed4eb62de3ac1d812c7127db_prof);

        
        $__internal_5a0be3f4f0268624c6fd700bd92368dda4182804bcf42b3389113baec18b9b1e->leave($__internal_5a0be3f4f0268624c6fd700bd92368dda4182804bcf42b3389113baec18b9b1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
