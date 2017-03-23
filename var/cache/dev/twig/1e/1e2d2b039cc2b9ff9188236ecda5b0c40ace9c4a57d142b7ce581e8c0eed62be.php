<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0dd04c5b274755fb9a9e2846938143f570b8df1ba855e5d25177c428c6b4c63f extends Twig_Template
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
        $__internal_9dac355b8f6d3ec7517187a456e5c40b662eedc0fd19d175032de5b06f38b3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dac355b8f6d3ec7517187a456e5c40b662eedc0fd19d175032de5b06f38b3b3->enter($__internal_9dac355b8f6d3ec7517187a456e5c40b662eedc0fd19d175032de5b06f38b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_730d041f5638fbabdcd74e1066e306b6ac3e0fb8c15ad551f23506b794019c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730d041f5638fbabdcd74e1066e306b6ac3e0fb8c15ad551f23506b794019c33->enter($__internal_730d041f5638fbabdcd74e1066e306b6ac3e0fb8c15ad551f23506b794019c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9dac355b8f6d3ec7517187a456e5c40b662eedc0fd19d175032de5b06f38b3b3->leave($__internal_9dac355b8f6d3ec7517187a456e5c40b662eedc0fd19d175032de5b06f38b3b3_prof);

        
        $__internal_730d041f5638fbabdcd74e1066e306b6ac3e0fb8c15ad551f23506b794019c33->leave($__internal_730d041f5638fbabdcd74e1066e306b6ac3e0fb8c15ad551f23506b794019c33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
