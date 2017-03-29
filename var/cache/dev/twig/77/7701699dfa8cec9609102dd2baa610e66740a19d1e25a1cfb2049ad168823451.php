<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_18ff029ca8dc921d141d071e8695f7a7bc02792a9078a313a5f97880c5f6a34e extends Twig_Template
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
        $__internal_882e356f0c611552028a179ce76d0037d67bf30e84a43ac803e9a9f661994dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882e356f0c611552028a179ce76d0037d67bf30e84a43ac803e9a9f661994dcf->enter($__internal_882e356f0c611552028a179ce76d0037d67bf30e84a43ac803e9a9f661994dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d7ad8282223b1e313ef61be35886b0918855dd9aee83de107353b28a9a2002ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ad8282223b1e313ef61be35886b0918855dd9aee83de107353b28a9a2002ff->enter($__internal_d7ad8282223b1e313ef61be35886b0918855dd9aee83de107353b28a9a2002ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_882e356f0c611552028a179ce76d0037d67bf30e84a43ac803e9a9f661994dcf->leave($__internal_882e356f0c611552028a179ce76d0037d67bf30e84a43ac803e9a9f661994dcf_prof);

        
        $__internal_d7ad8282223b1e313ef61be35886b0918855dd9aee83de107353b28a9a2002ff->leave($__internal_d7ad8282223b1e313ef61be35886b0918855dd9aee83de107353b28a9a2002ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
