<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6b049d0f67fc93302bc24bfc3c5325c08bfe86728519962f199da1efc28c50e3 extends Twig_Template
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
        $__internal_de69093fbed5ad9a5c4f1e1591db6b3ef34066f9b3871412d7dd6b2a62a5ba0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de69093fbed5ad9a5c4f1e1591db6b3ef34066f9b3871412d7dd6b2a62a5ba0e->enter($__internal_de69093fbed5ad9a5c4f1e1591db6b3ef34066f9b3871412d7dd6b2a62a5ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6fc3946a6a54a7ea26de359e476b4316ffcfe63b3627ec9068dde34d1585da70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc3946a6a54a7ea26de359e476b4316ffcfe63b3627ec9068dde34d1585da70->enter($__internal_6fc3946a6a54a7ea26de359e476b4316ffcfe63b3627ec9068dde34d1585da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_de69093fbed5ad9a5c4f1e1591db6b3ef34066f9b3871412d7dd6b2a62a5ba0e->leave($__internal_de69093fbed5ad9a5c4f1e1591db6b3ef34066f9b3871412d7dd6b2a62a5ba0e_prof);

        
        $__internal_6fc3946a6a54a7ea26de359e476b4316ffcfe63b3627ec9068dde34d1585da70->leave($__internal_6fc3946a6a54a7ea26de359e476b4316ffcfe63b3627ec9068dde34d1585da70_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
