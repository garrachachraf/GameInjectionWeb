<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c621eb95187c1501f9d56c8ff3d154326d4a85cd90f91ec42323e881e9e96e15 extends Twig_Template
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
        $__internal_573519b3ad78472126c019466d48d926efa10f7e83f1dba01b93a271c8c02a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573519b3ad78472126c019466d48d926efa10f7e83f1dba01b93a271c8c02a1a->enter($__internal_573519b3ad78472126c019466d48d926efa10f7e83f1dba01b93a271c8c02a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_daa4dd05ce748234ed57dce9c675867c85080e985cf8107863364ed846a5e6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa4dd05ce748234ed57dce9c675867c85080e985cf8107863364ed846a5e6f5->enter($__internal_daa4dd05ce748234ed57dce9c675867c85080e985cf8107863364ed846a5e6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_573519b3ad78472126c019466d48d926efa10f7e83f1dba01b93a271c8c02a1a->leave($__internal_573519b3ad78472126c019466d48d926efa10f7e83f1dba01b93a271c8c02a1a_prof);

        
        $__internal_daa4dd05ce748234ed57dce9c675867c85080e985cf8107863364ed846a5e6f5->leave($__internal_daa4dd05ce748234ed57dce9c675867c85080e985cf8107863364ed846a5e6f5_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
