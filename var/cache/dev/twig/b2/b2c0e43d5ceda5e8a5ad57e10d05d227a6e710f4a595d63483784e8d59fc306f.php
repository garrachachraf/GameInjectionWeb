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
        $__internal_a4a5785e7ee62b4e80c7a13618e97f106c850405c501b4d5e66b85a12e32bf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a5785e7ee62b4e80c7a13618e97f106c850405c501b4d5e66b85a12e32bf9c->enter($__internal_a4a5785e7ee62b4e80c7a13618e97f106c850405c501b4d5e66b85a12e32bf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_feb432681ee1929feca25a01000a5dad269a735725da89f530cb9a3511a30f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb432681ee1929feca25a01000a5dad269a735725da89f530cb9a3511a30f1c->enter($__internal_feb432681ee1929feca25a01000a5dad269a735725da89f530cb9a3511a30f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_a4a5785e7ee62b4e80c7a13618e97f106c850405c501b4d5e66b85a12e32bf9c->leave($__internal_a4a5785e7ee62b4e80c7a13618e97f106c850405c501b4d5e66b85a12e32bf9c_prof);

        
        $__internal_feb432681ee1929feca25a01000a5dad269a735725da89f530cb9a3511a30f1c->leave($__internal_feb432681ee1929feca25a01000a5dad269a735725da89f530cb9a3511a30f1c_prof);

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
