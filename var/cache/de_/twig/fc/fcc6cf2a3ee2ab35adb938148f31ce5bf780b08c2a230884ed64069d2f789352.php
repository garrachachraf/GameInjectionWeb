<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c6927f13cf698dba1be9f18dee74ea105358bb1adc56414b95e4c82b78f2cd81 extends Twig_Template
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
        $__internal_ece2f5612743dec7136a69612008876128d9b67df552892c39949cb39027972c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece2f5612743dec7136a69612008876128d9b67df552892c39949cb39027972c->enter($__internal_ece2f5612743dec7136a69612008876128d9b67df552892c39949cb39027972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bc195f3eae06ec38113c904d799156a8ea3f27194ef7fb4cd4fd5e9720a61052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc195f3eae06ec38113c904d799156a8ea3f27194ef7fb4cd4fd5e9720a61052->enter($__internal_bc195f3eae06ec38113c904d799156a8ea3f27194ef7fb4cd4fd5e9720a61052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ece2f5612743dec7136a69612008876128d9b67df552892c39949cb39027972c->leave($__internal_ece2f5612743dec7136a69612008876128d9b67df552892c39949cb39027972c_prof);

        
        $__internal_bc195f3eae06ec38113c904d799156a8ea3f27194ef7fb4cd4fd5e9720a61052->leave($__internal_bc195f3eae06ec38113c904d799156a8ea3f27194ef7fb4cd4fd5e9720a61052_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
