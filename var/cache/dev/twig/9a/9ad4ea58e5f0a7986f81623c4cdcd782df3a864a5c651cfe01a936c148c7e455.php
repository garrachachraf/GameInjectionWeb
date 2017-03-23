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
        $__internal_842280c4c5b2d0cfca427b7ba16bcebc023906c9cac2933578a96f9945da695c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842280c4c5b2d0cfca427b7ba16bcebc023906c9cac2933578a96f9945da695c->enter($__internal_842280c4c5b2d0cfca427b7ba16bcebc023906c9cac2933578a96f9945da695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ffc2da6db9bce08c9874fdf484bb6928992912b296d995d752e5dca8bb5b8fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc2da6db9bce08c9874fdf484bb6928992912b296d995d752e5dca8bb5b8fd4->enter($__internal_ffc2da6db9bce08c9874fdf484bb6928992912b296d995d752e5dca8bb5b8fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_842280c4c5b2d0cfca427b7ba16bcebc023906c9cac2933578a96f9945da695c->leave($__internal_842280c4c5b2d0cfca427b7ba16bcebc023906c9cac2933578a96f9945da695c_prof);

        
        $__internal_ffc2da6db9bce08c9874fdf484bb6928992912b296d995d752e5dca8bb5b8fd4->leave($__internal_ffc2da6db9bce08c9874fdf484bb6928992912b296d995d752e5dca8bb5b8fd4_prof);

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
