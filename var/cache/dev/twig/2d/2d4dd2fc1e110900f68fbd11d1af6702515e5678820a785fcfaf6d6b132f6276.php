<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0fc3c113f9a5b969d25ce86ef655a2fe4dd71a076fcf42a683a0fdca02bd03b0 extends Twig_Template
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
        $__internal_3101f223d38c0e0343820ab1b05a26d3e0edd30e6fd1ae4363ca44ffc142a89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3101f223d38c0e0343820ab1b05a26d3e0edd30e6fd1ae4363ca44ffc142a89e->enter($__internal_3101f223d38c0e0343820ab1b05a26d3e0edd30e6fd1ae4363ca44ffc142a89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_da1e30eb2b54700bfd223533b3919426014f1de8fe333fa0ff4cddf6175070c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1e30eb2b54700bfd223533b3919426014f1de8fe333fa0ff4cddf6175070c5->enter($__internal_da1e30eb2b54700bfd223533b3919426014f1de8fe333fa0ff4cddf6175070c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3101f223d38c0e0343820ab1b05a26d3e0edd30e6fd1ae4363ca44ffc142a89e->leave($__internal_3101f223d38c0e0343820ab1b05a26d3e0edd30e6fd1ae4363ca44ffc142a89e_prof);

        
        $__internal_da1e30eb2b54700bfd223533b3919426014f1de8fe333fa0ff4cddf6175070c5->leave($__internal_da1e30eb2b54700bfd223533b3919426014f1de8fe333fa0ff4cddf6175070c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
