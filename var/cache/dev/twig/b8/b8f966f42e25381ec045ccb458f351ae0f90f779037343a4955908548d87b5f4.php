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
        $__internal_8ffc513a723e55fb18a6a2852d58c76a771810ca5e9642e7fb7a7d0b2f0ae545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffc513a723e55fb18a6a2852d58c76a771810ca5e9642e7fb7a7d0b2f0ae545->enter($__internal_8ffc513a723e55fb18a6a2852d58c76a771810ca5e9642e7fb7a7d0b2f0ae545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f68e9f05939d770b528233fffeeeca24eca8340dff856c1e8b05c38b33f4c3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68e9f05939d770b528233fffeeeca24eca8340dff856c1e8b05c38b33f4c3e1->enter($__internal_f68e9f05939d770b528233fffeeeca24eca8340dff856c1e8b05c38b33f4c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_8ffc513a723e55fb18a6a2852d58c76a771810ca5e9642e7fb7a7d0b2f0ae545->leave($__internal_8ffc513a723e55fb18a6a2852d58c76a771810ca5e9642e7fb7a7d0b2f0ae545_prof);

        
        $__internal_f68e9f05939d770b528233fffeeeca24eca8340dff856c1e8b05c38b33f4c3e1->leave($__internal_f68e9f05939d770b528233fffeeeca24eca8340dff856c1e8b05c38b33f4c3e1_prof);

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
