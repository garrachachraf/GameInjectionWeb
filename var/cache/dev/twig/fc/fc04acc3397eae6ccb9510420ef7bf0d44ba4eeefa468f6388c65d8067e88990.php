<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_481f11201f03f6f2ebb7dada8164c45c4ff8be1b560e35bd1a8d58ef9ecd9616 extends Twig_Template
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
        $__internal_eb138efc43632fed7a08822e92c2f0af574900f3c579064ca0f1acda777c80bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb138efc43632fed7a08822e92c2f0af574900f3c579064ca0f1acda777c80bd->enter($__internal_eb138efc43632fed7a08822e92c2f0af574900f3c579064ca0f1acda777c80bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8b7e0313f5af0144264b429a3ec5e2f7f23116b5e123f73ecbb7e449e9888487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7e0313f5af0144264b429a3ec5e2f7f23116b5e123f73ecbb7e449e9888487->enter($__internal_8b7e0313f5af0144264b429a3ec5e2f7f23116b5e123f73ecbb7e449e9888487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_eb138efc43632fed7a08822e92c2f0af574900f3c579064ca0f1acda777c80bd->leave($__internal_eb138efc43632fed7a08822e92c2f0af574900f3c579064ca0f1acda777c80bd_prof);

        
        $__internal_8b7e0313f5af0144264b429a3ec5e2f7f23116b5e123f73ecbb7e449e9888487->leave($__internal_8b7e0313f5af0144264b429a3ec5e2f7f23116b5e123f73ecbb7e449e9888487_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
