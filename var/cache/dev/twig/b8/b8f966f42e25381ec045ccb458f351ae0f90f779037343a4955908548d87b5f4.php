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
        $__internal_02fa1516464e13fc6efca919fdfcc897ff8b0253f1ec0bcba45c79ece11ed943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fa1516464e13fc6efca919fdfcc897ff8b0253f1ec0bcba45c79ece11ed943->enter($__internal_02fa1516464e13fc6efca919fdfcc897ff8b0253f1ec0bcba45c79ece11ed943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ca7005fed7afb8e5667a307321bc86740c17084ef15e60611a2b237a320ffc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7005fed7afb8e5667a307321bc86740c17084ef15e60611a2b237a320ffc10->enter($__internal_ca7005fed7afb8e5667a307321bc86740c17084ef15e60611a2b237a320ffc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_02fa1516464e13fc6efca919fdfcc897ff8b0253f1ec0bcba45c79ece11ed943->leave($__internal_02fa1516464e13fc6efca919fdfcc897ff8b0253f1ec0bcba45c79ece11ed943_prof);

        
        $__internal_ca7005fed7afb8e5667a307321bc86740c17084ef15e60611a2b237a320ffc10->leave($__internal_ca7005fed7afb8e5667a307321bc86740c17084ef15e60611a2b237a320ffc10_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
