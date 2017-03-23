<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1653f0f809b8dd939ae7a8e299c7063458cd2e396afa946aa5ffbe85cf2d60a1 extends Twig_Template
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
        $__internal_c24f32bef425efe58355e2ea254cb978536f0623b3557a5ada98698459ae2e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24f32bef425efe58355e2ea254cb978536f0623b3557a5ada98698459ae2e93->enter($__internal_c24f32bef425efe58355e2ea254cb978536f0623b3557a5ada98698459ae2e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e0f6c0f52a1134abf30efaf40a9bcfbba9a85be64583a1e80be30b8f51963deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f6c0f52a1134abf30efaf40a9bcfbba9a85be64583a1e80be30b8f51963deb->enter($__internal_e0f6c0f52a1134abf30efaf40a9bcfbba9a85be64583a1e80be30b8f51963deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c24f32bef425efe58355e2ea254cb978536f0623b3557a5ada98698459ae2e93->leave($__internal_c24f32bef425efe58355e2ea254cb978536f0623b3557a5ada98698459ae2e93_prof);

        
        $__internal_e0f6c0f52a1134abf30efaf40a9bcfbba9a85be64583a1e80be30b8f51963deb->leave($__internal_e0f6c0f52a1134abf30efaf40a9bcfbba9a85be64583a1e80be30b8f51963deb_prof);

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
