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
        $__internal_ed172a8f62754621a2c65b2ce9dab8fa91e03d31b41682c52a05f383af04f5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed172a8f62754621a2c65b2ce9dab8fa91e03d31b41682c52a05f383af04f5d6->enter($__internal_ed172a8f62754621a2c65b2ce9dab8fa91e03d31b41682c52a05f383af04f5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e30a9a6d8df1424922fb462eb6e6c89695ab8c8c5f57a5e66cf9de97c3806a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30a9a6d8df1424922fb462eb6e6c89695ab8c8c5f57a5e66cf9de97c3806a7f->enter($__internal_e30a9a6d8df1424922fb462eb6e6c89695ab8c8c5f57a5e66cf9de97c3806a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_ed172a8f62754621a2c65b2ce9dab8fa91e03d31b41682c52a05f383af04f5d6->leave($__internal_ed172a8f62754621a2c65b2ce9dab8fa91e03d31b41682c52a05f383af04f5d6_prof);

        
        $__internal_e30a9a6d8df1424922fb462eb6e6c89695ab8c8c5f57a5e66cf9de97c3806a7f->leave($__internal_e30a9a6d8df1424922fb462eb6e6c89695ab8c8c5f57a5e66cf9de97c3806a7f_prof);

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
