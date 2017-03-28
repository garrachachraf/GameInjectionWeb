<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c8c5e7f59c94d95ecdadb41cc9cd923507439a61800af75ebc3cf64511eb9d1e extends Twig_Template
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
        $__internal_f3c5c998735771b2380dd10a84064c9eb81155caa1615c09fa0afbd67ffaf130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c5c998735771b2380dd10a84064c9eb81155caa1615c09fa0afbd67ffaf130->enter($__internal_f3c5c998735771b2380dd10a84064c9eb81155caa1615c09fa0afbd67ffaf130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7d76c782c9f6b10e1345b71e15734a9aa027073e1a01e2e8248dfbb8543b5623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d76c782c9f6b10e1345b71e15734a9aa027073e1a01e2e8248dfbb8543b5623->enter($__internal_7d76c782c9f6b10e1345b71e15734a9aa027073e1a01e2e8248dfbb8543b5623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f3c5c998735771b2380dd10a84064c9eb81155caa1615c09fa0afbd67ffaf130->leave($__internal_f3c5c998735771b2380dd10a84064c9eb81155caa1615c09fa0afbd67ffaf130_prof);

        
        $__internal_7d76c782c9f6b10e1345b71e15734a9aa027073e1a01e2e8248dfbb8543b5623->leave($__internal_7d76c782c9f6b10e1345b71e15734a9aa027073e1a01e2e8248dfbb8543b5623_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
