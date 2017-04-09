<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_317eee346e2ab2bca6ac47fbd6bb68d7e835c8c61a899cc9583c38561d490fce extends Twig_Template
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
        $__internal_9d5768152bed3c39cefe9ef05507d8041506f30333648e55c22d5c9344ac6f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5768152bed3c39cefe9ef05507d8041506f30333648e55c22d5c9344ac6f38->enter($__internal_9d5768152bed3c39cefe9ef05507d8041506f30333648e55c22d5c9344ac6f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9644402bfeb8a6e79f5ce6b909f97215c4ab1fa57a86818a19f10c71280379e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9644402bfeb8a6e79f5ce6b909f97215c4ab1fa57a86818a19f10c71280379e7->enter($__internal_9644402bfeb8a6e79f5ce6b909f97215c4ab1fa57a86818a19f10c71280379e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9d5768152bed3c39cefe9ef05507d8041506f30333648e55c22d5c9344ac6f38->leave($__internal_9d5768152bed3c39cefe9ef05507d8041506f30333648e55c22d5c9344ac6f38_prof);

        
        $__internal_9644402bfeb8a6e79f5ce6b909f97215c4ab1fa57a86818a19f10c71280379e7->leave($__internal_9644402bfeb8a6e79f5ce6b909f97215c4ab1fa57a86818a19f10c71280379e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
