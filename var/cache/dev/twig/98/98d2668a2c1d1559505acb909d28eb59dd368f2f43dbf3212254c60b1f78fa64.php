<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_74f5319d0d41b38e74a525ca8534103fd6d486239dd3353e185183a38b1b52f8 extends Twig_Template
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
        $__internal_cd74fce5dc897c3a0e755702c572a648fc9b4fea0e3c61b4ef755b8582e11d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd74fce5dc897c3a0e755702c572a648fc9b4fea0e3c61b4ef755b8582e11d32->enter($__internal_cd74fce5dc897c3a0e755702c572a648fc9b4fea0e3c61b4ef755b8582e11d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d890b6b853873dd2bb90e86f14d2215d606cc2d53fd233af0546f7858ad65efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d890b6b853873dd2bb90e86f14d2215d606cc2d53fd233af0546f7858ad65efa->enter($__internal_d890b6b853873dd2bb90e86f14d2215d606cc2d53fd233af0546f7858ad65efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cd74fce5dc897c3a0e755702c572a648fc9b4fea0e3c61b4ef755b8582e11d32->leave($__internal_cd74fce5dc897c3a0e755702c572a648fc9b4fea0e3c61b4ef755b8582e11d32_prof);

        
        $__internal_d890b6b853873dd2bb90e86f14d2215d606cc2d53fd233af0546f7858ad65efa->leave($__internal_d890b6b853873dd2bb90e86f14d2215d606cc2d53fd233af0546f7858ad65efa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
