<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e6c7b59c7b9a80c3ee6ef43a9c8f0bce311993d6b9cb0a831687c1838c12360b extends Twig_Template
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
        $__internal_cf294cee850890c650d6f1b413da19c4d687a18deb488bcb8f87aa8d9a78ce15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf294cee850890c650d6f1b413da19c4d687a18deb488bcb8f87aa8d9a78ce15->enter($__internal_cf294cee850890c650d6f1b413da19c4d687a18deb488bcb8f87aa8d9a78ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2fc71ad9b5e5d7c4a27402d85279f26332483546e2d32c122afbaed748415277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc71ad9b5e5d7c4a27402d85279f26332483546e2d32c122afbaed748415277->enter($__internal_2fc71ad9b5e5d7c4a27402d85279f26332483546e2d32c122afbaed748415277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cf294cee850890c650d6f1b413da19c4d687a18deb488bcb8f87aa8d9a78ce15->leave($__internal_cf294cee850890c650d6f1b413da19c4d687a18deb488bcb8f87aa8d9a78ce15_prof);

        
        $__internal_2fc71ad9b5e5d7c4a27402d85279f26332483546e2d32c122afbaed748415277->leave($__internal_2fc71ad9b5e5d7c4a27402d85279f26332483546e2d32c122afbaed748415277_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
