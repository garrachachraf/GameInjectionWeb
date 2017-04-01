<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4237c07fb4a89dbc7a358468d5926d47be315772a628eab6c4f260ddcb940525 extends Twig_Template
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
        $__internal_dba04082a8d150b7ebe7acb972fda6dc6c197704c4f5cae22dc5ef81ed67c81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba04082a8d150b7ebe7acb972fda6dc6c197704c4f5cae22dc5ef81ed67c81c->enter($__internal_dba04082a8d150b7ebe7acb972fda6dc6c197704c4f5cae22dc5ef81ed67c81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6db111418bee4fc7e9f3626cbd98a9dc3e00611213b28c3f8c07ce93fa503bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db111418bee4fc7e9f3626cbd98a9dc3e00611213b28c3f8c07ce93fa503bdf->enter($__internal_6db111418bee4fc7e9f3626cbd98a9dc3e00611213b28c3f8c07ce93fa503bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dba04082a8d150b7ebe7acb972fda6dc6c197704c4f5cae22dc5ef81ed67c81c->leave($__internal_dba04082a8d150b7ebe7acb972fda6dc6c197704c4f5cae22dc5ef81ed67c81c_prof);

        
        $__internal_6db111418bee4fc7e9f3626cbd98a9dc3e00611213b28c3f8c07ce93fa503bdf->leave($__internal_6db111418bee4fc7e9f3626cbd98a9dc3e00611213b28c3f8c07ce93fa503bdf_prof);

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
