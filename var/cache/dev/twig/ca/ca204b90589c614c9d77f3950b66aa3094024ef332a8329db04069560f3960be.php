<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_789bef6c489e30445b2c2677b4c4d85fca974765b72e2461b576843ff8fd3c66 extends Twig_Template
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
        $__internal_aca750c6a24862379fbdb26b27071ec6592189e89793371f9d932349475b76bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca750c6a24862379fbdb26b27071ec6592189e89793371f9d932349475b76bb->enter($__internal_aca750c6a24862379fbdb26b27071ec6592189e89793371f9d932349475b76bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_9922a2f30250288e44c34dd351e689600067e8d89c37ca31339419bcab7d80bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9922a2f30250288e44c34dd351e689600067e8d89c37ca31339419bcab7d80bb->enter($__internal_9922a2f30250288e44c34dd351e689600067e8d89c37ca31339419bcab7d80bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_aca750c6a24862379fbdb26b27071ec6592189e89793371f9d932349475b76bb->leave($__internal_aca750c6a24862379fbdb26b27071ec6592189e89793371f9d932349475b76bb_prof);

        
        $__internal_9922a2f30250288e44c34dd351e689600067e8d89c37ca31339419bcab7d80bb->leave($__internal_9922a2f30250288e44c34dd351e689600067e8d89c37ca31339419bcab7d80bb_prof);

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
