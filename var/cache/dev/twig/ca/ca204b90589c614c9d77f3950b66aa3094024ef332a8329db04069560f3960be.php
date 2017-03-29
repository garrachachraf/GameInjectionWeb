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
        $__internal_131dd6dca2f1f1a54af6e277226fea111c4f0a20fceef7835699a4618ad5cb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131dd6dca2f1f1a54af6e277226fea111c4f0a20fceef7835699a4618ad5cb51->enter($__internal_131dd6dca2f1f1a54af6e277226fea111c4f0a20fceef7835699a4618ad5cb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b655010bb973da3b72b68d5c29eacd322f4a5a70e36f61ba0f2b0cdc9b69673c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b655010bb973da3b72b68d5c29eacd322f4a5a70e36f61ba0f2b0cdc9b69673c->enter($__internal_b655010bb973da3b72b68d5c29eacd322f4a5a70e36f61ba0f2b0cdc9b69673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_131dd6dca2f1f1a54af6e277226fea111c4f0a20fceef7835699a4618ad5cb51->leave($__internal_131dd6dca2f1f1a54af6e277226fea111c4f0a20fceef7835699a4618ad5cb51_prof);

        
        $__internal_b655010bb973da3b72b68d5c29eacd322f4a5a70e36f61ba0f2b0cdc9b69673c->leave($__internal_b655010bb973da3b72b68d5c29eacd322f4a5a70e36f61ba0f2b0cdc9b69673c_prof);

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
