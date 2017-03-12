<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a92c607cd6c30e3f1b3c14e9d8b26551d0b78b33e66139ee68d2a59da1460061 extends Twig_Template
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
        $__internal_7c0b6ede8c37897758e188c4039583bdb63996e8024060887e49d7999e09faf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0b6ede8c37897758e188c4039583bdb63996e8024060887e49d7999e09faf6->enter($__internal_7c0b6ede8c37897758e188c4039583bdb63996e8024060887e49d7999e09faf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_46562ad3b9c4a1b5239f03985f60d777bd2c0f7383d2b9bd717a971f2cd34559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46562ad3b9c4a1b5239f03985f60d777bd2c0f7383d2b9bd717a971f2cd34559->enter($__internal_46562ad3b9c4a1b5239f03985f60d777bd2c0f7383d2b9bd717a971f2cd34559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7c0b6ede8c37897758e188c4039583bdb63996e8024060887e49d7999e09faf6->leave($__internal_7c0b6ede8c37897758e188c4039583bdb63996e8024060887e49d7999e09faf6_prof);

        
        $__internal_46562ad3b9c4a1b5239f03985f60d777bd2c0f7383d2b9bd717a971f2cd34559->leave($__internal_46562ad3b9c4a1b5239f03985f60d777bd2c0f7383d2b9bd717a971f2cd34559_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
