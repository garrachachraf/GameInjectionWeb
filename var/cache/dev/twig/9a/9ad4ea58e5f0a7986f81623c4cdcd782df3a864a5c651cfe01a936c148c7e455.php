<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ff7b03c9e07f2a5c40d66abb06996df66505272e4d41aa4c8f21d12b9f5ee394 extends Twig_Template
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
        $__internal_a905d85b3eed7ba8b364251825e2ac229a4bfb53fa4b493ab5ce6afd7aac6316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a905d85b3eed7ba8b364251825e2ac229a4bfb53fa4b493ab5ce6afd7aac6316->enter($__internal_a905d85b3eed7ba8b364251825e2ac229a4bfb53fa4b493ab5ce6afd7aac6316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_9ab11528daeb375d857e5efb07430e9a312f20ecb6841119b63bbeee60ba31b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab11528daeb375d857e5efb07430e9a312f20ecb6841119b63bbeee60ba31b5->enter($__internal_9ab11528daeb375d857e5efb07430e9a312f20ecb6841119b63bbeee60ba31b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a905d85b3eed7ba8b364251825e2ac229a4bfb53fa4b493ab5ce6afd7aac6316->leave($__internal_a905d85b3eed7ba8b364251825e2ac229a4bfb53fa4b493ab5ce6afd7aac6316_prof);

        
        $__internal_9ab11528daeb375d857e5efb07430e9a312f20ecb6841119b63bbeee60ba31b5->leave($__internal_9ab11528daeb375d857e5efb07430e9a312f20ecb6841119b63bbeee60ba31b5_prof);

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
