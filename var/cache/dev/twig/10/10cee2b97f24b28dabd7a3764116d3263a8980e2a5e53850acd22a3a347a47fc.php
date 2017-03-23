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
        $__internal_54440cb4a6b5845cb562e567b44a269aa8f02340cdaa9e9f25631f2bf3420fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54440cb4a6b5845cb562e567b44a269aa8f02340cdaa9e9f25631f2bf3420fb7->enter($__internal_54440cb4a6b5845cb562e567b44a269aa8f02340cdaa9e9f25631f2bf3420fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8c885466d37a99e85595b18e231a04632bcac171ea1d0927d1533a023c90cda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c885466d37a99e85595b18e231a04632bcac171ea1d0927d1533a023c90cda8->enter($__internal_8c885466d37a99e85595b18e231a04632bcac171ea1d0927d1533a023c90cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_54440cb4a6b5845cb562e567b44a269aa8f02340cdaa9e9f25631f2bf3420fb7->leave($__internal_54440cb4a6b5845cb562e567b44a269aa8f02340cdaa9e9f25631f2bf3420fb7_prof);

        
        $__internal_8c885466d37a99e85595b18e231a04632bcac171ea1d0927d1533a023c90cda8->leave($__internal_8c885466d37a99e85595b18e231a04632bcac171ea1d0927d1533a023c90cda8_prof);

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
