<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fd8f83552ee3e9fee75b0a5fbbaa947f1769a2d6daec2bd7bc8f8f3c232064e9 extends Twig_Template
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
        $__internal_f9878131897c5eb7a88cbf0305a1a928f8dc277cec4b48b637803eeb07a4b934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9878131897c5eb7a88cbf0305a1a928f8dc277cec4b48b637803eeb07a4b934->enter($__internal_f9878131897c5eb7a88cbf0305a1a928f8dc277cec4b48b637803eeb07a4b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c56d8534a9f931631228d833a2cf7691c49280a3c46032484d72913e02517c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56d8534a9f931631228d833a2cf7691c49280a3c46032484d72913e02517c13->enter($__internal_c56d8534a9f931631228d833a2cf7691c49280a3c46032484d72913e02517c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f9878131897c5eb7a88cbf0305a1a928f8dc277cec4b48b637803eeb07a4b934->leave($__internal_f9878131897c5eb7a88cbf0305a1a928f8dc277cec4b48b637803eeb07a4b934_prof);

        
        $__internal_c56d8534a9f931631228d833a2cf7691c49280a3c46032484d72913e02517c13->leave($__internal_c56d8534a9f931631228d833a2cf7691c49280a3c46032484d72913e02517c13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
