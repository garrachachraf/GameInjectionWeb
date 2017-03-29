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
        $__internal_b3412c27cc0886e4a1910398dc56b48ecc150107ea48fa6155106055983fd510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3412c27cc0886e4a1910398dc56b48ecc150107ea48fa6155106055983fd510->enter($__internal_b3412c27cc0886e4a1910398dc56b48ecc150107ea48fa6155106055983fd510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_c0bc153d7c6b3b0b57a77e1300ec0e68ba25f6fa66822e5249ca73dd3fceaaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bc153d7c6b3b0b57a77e1300ec0e68ba25f6fa66822e5249ca73dd3fceaaea->enter($__internal_c0bc153d7c6b3b0b57a77e1300ec0e68ba25f6fa66822e5249ca73dd3fceaaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b3412c27cc0886e4a1910398dc56b48ecc150107ea48fa6155106055983fd510->leave($__internal_b3412c27cc0886e4a1910398dc56b48ecc150107ea48fa6155106055983fd510_prof);

        
        $__internal_c0bc153d7c6b3b0b57a77e1300ec0e68ba25f6fa66822e5249ca73dd3fceaaea->leave($__internal_c0bc153d7c6b3b0b57a77e1300ec0e68ba25f6fa66822e5249ca73dd3fceaaea_prof);

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
