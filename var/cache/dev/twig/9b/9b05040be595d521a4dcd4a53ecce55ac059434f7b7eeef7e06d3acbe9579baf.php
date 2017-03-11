<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_69a93b5fcb09290589008fcf52ad646078fe4b2760f16604751c00509b4ddfe1 extends Twig_Template
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
        $__internal_3ba698cf1aecc1c1215cee6cfb4c0cee3cac9e90ad0154e7ae7da0ac07829e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba698cf1aecc1c1215cee6cfb4c0cee3cac9e90ad0154e7ae7da0ac07829e2a->enter($__internal_3ba698cf1aecc1c1215cee6cfb4c0cee3cac9e90ad0154e7ae7da0ac07829e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_89f8a4aec981257b5098f56f0f36b7d14784a75aa202bfb7e0d2aa3b93b94411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f8a4aec981257b5098f56f0f36b7d14784a75aa202bfb7e0d2aa3b93b94411->enter($__internal_89f8a4aec981257b5098f56f0f36b7d14784a75aa202bfb7e0d2aa3b93b94411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        // line 1
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 2
            echo "<h1>erreur</h1>

";
        } else {
            // line 5
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        
        $__internal_3ba698cf1aecc1c1215cee6cfb4c0cee3cac9e90ad0154e7ae7da0ac07829e2a->leave($__internal_3ba698cf1aecc1c1215cee6cfb4c0cee3cac9e90ad0154e7ae7da0ac07829e2a_prof);

        
        $__internal_89f8a4aec981257b5098f56f0f36b7d14784a75aa202bfb7e0d2aa3b93b94411->leave($__internal_89f8a4aec981257b5098f56f0f36b7d14784a75aa202bfb7e0d2aa3b93b94411_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user  == null %}
<h1>erreur</h1>

{% else %}
    <h1>{{ user.pseudo }}</h1>
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/LoginBundle/Resources/views/Default/index.html.twig");
    }
}
