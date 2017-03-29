<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_54781a13294398ce92d9ec3e3359f17879ce7708c3c891f27ae7e30de3b88fd0 extends Twig_Template
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
        $__internal_2ad92915fc8fb769e4f330be9ad6c09facab93c55915c7c73961d968492ab9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad92915fc8fb769e4f330be9ad6c09facab93c55915c7c73961d968492ab9ed->enter($__internal_2ad92915fc8fb769e4f330be9ad6c09facab93c55915c7c73961d968492ab9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_90d17f06c99f55326235e562166c7c38a01f67fe3e14166453029abdb747d03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d17f06c99f55326235e562166c7c38a01f67fe3e14166453029abdb747d03e->enter($__internal_90d17f06c99f55326235e562166c7c38a01f67fe3e14166453029abdb747d03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_2ad92915fc8fb769e4f330be9ad6c09facab93c55915c7c73961d968492ab9ed->leave($__internal_2ad92915fc8fb769e4f330be9ad6c09facab93c55915c7c73961d968492ab9ed_prof);

        
        $__internal_90d17f06c99f55326235e562166c7c38a01f67fe3e14166453029abdb747d03e->leave($__internal_90d17f06c99f55326235e562166c7c38a01f67fe3e14166453029abdb747d03e_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
