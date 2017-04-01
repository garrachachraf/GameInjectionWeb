<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3e3040d12f631059a11cf0983e59f8ed65887f129ae5942691018d163d6c8d2f extends Twig_Template
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
        $__internal_4155a8bbc5e30a08c73f3344b2aa887d173085a4d3196173ba35bae59464d75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4155a8bbc5e30a08c73f3344b2aa887d173085a4d3196173ba35bae59464d75b->enter($__internal_4155a8bbc5e30a08c73f3344b2aa887d173085a4d3196173ba35bae59464d75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a580d743219df0d43436888edae849558dbbb4911f5c8bae85794323df57d51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a580d743219df0d43436888edae849558dbbb4911f5c8bae85794323df57d51d->enter($__internal_a580d743219df0d43436888edae849558dbbb4911f5c8bae85794323df57d51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4155a8bbc5e30a08c73f3344b2aa887d173085a4d3196173ba35bae59464d75b->leave($__internal_4155a8bbc5e30a08c73f3344b2aa887d173085a4d3196173ba35bae59464d75b_prof);

        
        $__internal_a580d743219df0d43436888edae849558dbbb4911f5c8bae85794323df57d51d->leave($__internal_a580d743219df0d43436888edae849558dbbb4911f5c8bae85794323df57d51d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
