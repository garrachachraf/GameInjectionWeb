<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5054275b1f120abbcf7bc6a783e3cda7ad261cb1185c8977af769c8b55dd587e extends Twig_Template
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
        $__internal_5e630485b33fc224622a1ff1db1a27fcad8ec71526c6f283202c93a50b4f99e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e630485b33fc224622a1ff1db1a27fcad8ec71526c6f283202c93a50b4f99e8->enter($__internal_5e630485b33fc224622a1ff1db1a27fcad8ec71526c6f283202c93a50b4f99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e50115bbdf1e1946b4ae492cd4fb6d2d3eb1d76ad104c73925e3ea68aec2d88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50115bbdf1e1946b4ae492cd4fb6d2d3eb1d76ad104c73925e3ea68aec2d88c->enter($__internal_e50115bbdf1e1946b4ae492cd4fb6d2d3eb1d76ad104c73925e3ea68aec2d88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5e630485b33fc224622a1ff1db1a27fcad8ec71526c6f283202c93a50b4f99e8->leave($__internal_5e630485b33fc224622a1ff1db1a27fcad8ec71526c6f283202c93a50b4f99e8_prof);

        
        $__internal_e50115bbdf1e1946b4ae492cd4fb6d2d3eb1d76ad104c73925e3ea68aec2d88c->leave($__internal_e50115bbdf1e1946b4ae492cd4fb6d2d3eb1d76ad104c73925e3ea68aec2d88c_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
