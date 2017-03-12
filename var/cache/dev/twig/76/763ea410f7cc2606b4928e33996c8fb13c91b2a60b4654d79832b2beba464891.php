<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8432f4ab7bfa7e4beef8becc940c8f3fdd4c1891d5789a3801d8ffe97026435c extends Twig_Template
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
        $__internal_51101ebf641badde5422b850d45238db5e5ae245bed4d47f3b79000b6d7fb997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51101ebf641badde5422b850d45238db5e5ae245bed4d47f3b79000b6d7fb997->enter($__internal_51101ebf641badde5422b850d45238db5e5ae245bed4d47f3b79000b6d7fb997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e465f1b4d0d5aad15e5342dc5f70c2685aa837665b9bfc0fb3aca38e96224219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e465f1b4d0d5aad15e5342dc5f70c2685aa837665b9bfc0fb3aca38e96224219->enter($__internal_e465f1b4d0d5aad15e5342dc5f70c2685aa837665b9bfc0fb3aca38e96224219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51101ebf641badde5422b850d45238db5e5ae245bed4d47f3b79000b6d7fb997->leave($__internal_51101ebf641badde5422b850d45238db5e5ae245bed4d47f3b79000b6d7fb997_prof);

        
        $__internal_e465f1b4d0d5aad15e5342dc5f70c2685aa837665b9bfc0fb3aca38e96224219->leave($__internal_e465f1b4d0d5aad15e5342dc5f70c2685aa837665b9bfc0fb3aca38e96224219_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
