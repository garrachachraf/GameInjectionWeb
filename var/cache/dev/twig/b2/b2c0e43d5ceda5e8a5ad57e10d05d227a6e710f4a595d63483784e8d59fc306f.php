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
        $__internal_3cb4fad9b9f9135f523278d66340db26e1ec837156f7faf42801e823d4472c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb4fad9b9f9135f523278d66340db26e1ec837156f7faf42801e823d4472c97->enter($__internal_3cb4fad9b9f9135f523278d66340db26e1ec837156f7faf42801e823d4472c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_8fe9d795d9eb1423cad217592f6861a743870fccc07ac35dd4f5c9df18f4a353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe9d795d9eb1423cad217592f6861a743870fccc07ac35dd4f5c9df18f4a353->enter($__internal_8fe9d795d9eb1423cad217592f6861a743870fccc07ac35dd4f5c9df18f4a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_3cb4fad9b9f9135f523278d66340db26e1ec837156f7faf42801e823d4472c97->leave($__internal_3cb4fad9b9f9135f523278d66340db26e1ec837156f7faf42801e823d4472c97_prof);

        
        $__internal_8fe9d795d9eb1423cad217592f6861a743870fccc07ac35dd4f5c9df18f4a353->leave($__internal_8fe9d795d9eb1423cad217592f6861a743870fccc07ac35dd4f5c9df18f4a353_prof);

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
