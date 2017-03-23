<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3ddbc3156809a67a2b1161ee8ed07ed1fc2e3f7e9717bac7505b2afbb97cb2b0 extends Twig_Template
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
        $__internal_a1502f0d3bb57c2401022b88c00455e9a925af654465e00126f5b14baf3447ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1502f0d3bb57c2401022b88c00455e9a925af654465e00126f5b14baf3447ac->enter($__internal_a1502f0d3bb57c2401022b88c00455e9a925af654465e00126f5b14baf3447ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9d5047927fc327f26c839f5cdf8cf77b7abea8c498b39d0d4cc777a2d6de9f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5047927fc327f26c839f5cdf8cf77b7abea8c498b39d0d4cc777a2d6de9f01->enter($__internal_9d5047927fc327f26c839f5cdf8cf77b7abea8c498b39d0d4cc777a2d6de9f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a1502f0d3bb57c2401022b88c00455e9a925af654465e00126f5b14baf3447ac->leave($__internal_a1502f0d3bb57c2401022b88c00455e9a925af654465e00126f5b14baf3447ac_prof);

        
        $__internal_9d5047927fc327f26c839f5cdf8cf77b7abea8c498b39d0d4cc777a2d6de9f01->leave($__internal_9d5047927fc327f26c839f5cdf8cf77b7abea8c498b39d0d4cc777a2d6de9f01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
