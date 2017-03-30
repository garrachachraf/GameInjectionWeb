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
        $__internal_6ba2af2933510461bf7b056e6ae3e847b7df71b5118a2cf16470a9d5adec0833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba2af2933510461bf7b056e6ae3e847b7df71b5118a2cf16470a9d5adec0833->enter($__internal_6ba2af2933510461bf7b056e6ae3e847b7df71b5118a2cf16470a9d5adec0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6ba3b50f05c5b13d35706f6ccc9b77f56ac80c7dfbe79890400d1f4bebf329aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba3b50f05c5b13d35706f6ccc9b77f56ac80c7dfbe79890400d1f4bebf329aa->enter($__internal_6ba3b50f05c5b13d35706f6ccc9b77f56ac80c7dfbe79890400d1f4bebf329aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6ba2af2933510461bf7b056e6ae3e847b7df71b5118a2cf16470a9d5adec0833->leave($__internal_6ba2af2933510461bf7b056e6ae3e847b7df71b5118a2cf16470a9d5adec0833_prof);

        
        $__internal_6ba3b50f05c5b13d35706f6ccc9b77f56ac80c7dfbe79890400d1f4bebf329aa->leave($__internal_6ba3b50f05c5b13d35706f6ccc9b77f56ac80c7dfbe79890400d1f4bebf329aa_prof);

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
