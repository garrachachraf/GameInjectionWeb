<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a551e02d4539f8cf5629a2482151f945820469d800fe93c1490dbc86089ce1a1 extends Twig_Template
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
        $__internal_95d416900a00146107718669495f0e208d68ab9e98d11eb9bc1e7654eece6afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d416900a00146107718669495f0e208d68ab9e98d11eb9bc1e7654eece6afd->enter($__internal_95d416900a00146107718669495f0e208d68ab9e98d11eb9bc1e7654eece6afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_533b830b99963d46a2d489fcfae8f155e0c01e2ab12ae25e754243d7ac827c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b830b99963d46a2d489fcfae8f155e0c01e2ab12ae25e754243d7ac827c29->enter($__internal_533b830b99963d46a2d489fcfae8f155e0c01e2ab12ae25e754243d7ac827c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_95d416900a00146107718669495f0e208d68ab9e98d11eb9bc1e7654eece6afd->leave($__internal_95d416900a00146107718669495f0e208d68ab9e98d11eb9bc1e7654eece6afd_prof);

        
        $__internal_533b830b99963d46a2d489fcfae8f155e0c01e2ab12ae25e754243d7ac827c29->leave($__internal_533b830b99963d46a2d489fcfae8f155e0c01e2ab12ae25e754243d7ac827c29_prof);

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
