<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25b20168c85fb678eda04f8614770496185fad5177159f9600da866fcd6a1f82 extends Twig_Template
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
        $__internal_f478567bd3132bf647c2bede09920c1cdd63d4780f400c795279312e6c43ab03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f478567bd3132bf647c2bede09920c1cdd63d4780f400c795279312e6c43ab03->enter($__internal_f478567bd3132bf647c2bede09920c1cdd63d4780f400c795279312e6c43ab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3819472df6027af19a0584a2ddad67bcf59022d53de1962661a105952301e486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3819472df6027af19a0584a2ddad67bcf59022d53de1962661a105952301e486->enter($__internal_3819472df6027af19a0584a2ddad67bcf59022d53de1962661a105952301e486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f478567bd3132bf647c2bede09920c1cdd63d4780f400c795279312e6c43ab03->leave($__internal_f478567bd3132bf647c2bede09920c1cdd63d4780f400c795279312e6c43ab03_prof);

        
        $__internal_3819472df6027af19a0584a2ddad67bcf59022d53de1962661a105952301e486->leave($__internal_3819472df6027af19a0584a2ddad67bcf59022d53de1962661a105952301e486_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
