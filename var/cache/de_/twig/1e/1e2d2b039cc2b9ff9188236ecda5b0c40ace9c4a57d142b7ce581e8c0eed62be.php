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
        $__internal_bcb52f3ad95ba3e3d9b671ca8125c14eae522b2054ef7e50819514107d68a6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb52f3ad95ba3e3d9b671ca8125c14eae522b2054ef7e50819514107d68a6ce->enter($__internal_bcb52f3ad95ba3e3d9b671ca8125c14eae522b2054ef7e50819514107d68a6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_86209242f1bb3c5b3cbdc0a074fb5f42bd93095fc42997e25a7dc8c310627851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86209242f1bb3c5b3cbdc0a074fb5f42bd93095fc42997e25a7dc8c310627851->enter($__internal_86209242f1bb3c5b3cbdc0a074fb5f42bd93095fc42997e25a7dc8c310627851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bcb52f3ad95ba3e3d9b671ca8125c14eae522b2054ef7e50819514107d68a6ce->leave($__internal_bcb52f3ad95ba3e3d9b671ca8125c14eae522b2054ef7e50819514107d68a6ce_prof);

        
        $__internal_86209242f1bb3c5b3cbdc0a074fb5f42bd93095fc42997e25a7dc8c310627851->leave($__internal_86209242f1bb3c5b3cbdc0a074fb5f42bd93095fc42997e25a7dc8c310627851_prof);

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
