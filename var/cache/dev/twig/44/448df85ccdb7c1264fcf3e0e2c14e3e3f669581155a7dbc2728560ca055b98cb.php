<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d1c4a978d8317715c7fd7017217c90edd01e22f7fafff58b1af9a40ed7060e4d extends Twig_Template
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
        $__internal_1a3c1e4e9db0d47e115bea14577e0c7b83da28e0f4926348433d6f80e23cba45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3c1e4e9db0d47e115bea14577e0c7b83da28e0f4926348433d6f80e23cba45->enter($__internal_1a3c1e4e9db0d47e115bea14577e0c7b83da28e0f4926348433d6f80e23cba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_29bfcc38565eaeb29d69103029ea139a0c3f3a23a11609bcc02fba0d2f0c3e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bfcc38565eaeb29d69103029ea139a0c3f3a23a11609bcc02fba0d2f0c3e46->enter($__internal_29bfcc38565eaeb29d69103029ea139a0c3f3a23a11609bcc02fba0d2f0c3e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1a3c1e4e9db0d47e115bea14577e0c7b83da28e0f4926348433d6f80e23cba45->leave($__internal_1a3c1e4e9db0d47e115bea14577e0c7b83da28e0f4926348433d6f80e23cba45_prof);

        
        $__internal_29bfcc38565eaeb29d69103029ea139a0c3f3a23a11609bcc02fba0d2f0c3e46->leave($__internal_29bfcc38565eaeb29d69103029ea139a0c3f3a23a11609bcc02fba0d2f0c3e46_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
