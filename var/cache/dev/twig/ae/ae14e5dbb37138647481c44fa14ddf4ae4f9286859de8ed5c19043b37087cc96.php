<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cc57d5629eba7478148f43e8bb25f58cda81ae72e98c688d372bf0a2116d86a5 extends Twig_Template
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
        $__internal_f9ba7da03da29912df3e63d92fb1ffcd4276de13deec57a75ef4c807e8d088e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ba7da03da29912df3e63d92fb1ffcd4276de13deec57a75ef4c807e8d088e1->enter($__internal_f9ba7da03da29912df3e63d92fb1ffcd4276de13deec57a75ef4c807e8d088e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_41f84353b45e62cee3ba5bd211f02ef6ce2e57b8fa7128a154da0f38588988ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f84353b45e62cee3ba5bd211f02ef6ce2e57b8fa7128a154da0f38588988ef->enter($__internal_41f84353b45e62cee3ba5bd211f02ef6ce2e57b8fa7128a154da0f38588988ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f9ba7da03da29912df3e63d92fb1ffcd4276de13deec57a75ef4c807e8d088e1->leave($__internal_f9ba7da03da29912df3e63d92fb1ffcd4276de13deec57a75ef4c807e8d088e1_prof);

        
        $__internal_41f84353b45e62cee3ba5bd211f02ef6ce2e57b8fa7128a154da0f38588988ef->leave($__internal_41f84353b45e62cee3ba5bd211f02ef6ce2e57b8fa7128a154da0f38588988ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
