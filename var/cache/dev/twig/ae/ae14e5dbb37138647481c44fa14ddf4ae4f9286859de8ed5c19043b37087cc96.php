<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cc57d5629eba7478148f43e8bb25f58cda81ae72e98c688d372bf0a2116d86a5 extends Twig_Template
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
        $__internal_d6ba5cf83aa0604f392d67329426c8a8a33f61e6cde18b7be318cb74eff5470d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ba5cf83aa0604f392d67329426c8a8a33f61e6cde18b7be318cb74eff5470d->enter($__internal_d6ba5cf83aa0604f392d67329426c8a8a33f61e6cde18b7be318cb74eff5470d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ff8ebc563d6d5dfe647f743644a1506a4e0293820fc0986fb27a7295ee5057ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8ebc563d6d5dfe647f743644a1506a4e0293820fc0986fb27a7295ee5057ea->enter($__internal_ff8ebc563d6d5dfe647f743644a1506a4e0293820fc0986fb27a7295ee5057ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_d6ba5cf83aa0604f392d67329426c8a8a33f61e6cde18b7be318cb74eff5470d->leave($__internal_d6ba5cf83aa0604f392d67329426c8a8a33f61e6cde18b7be318cb74eff5470d_prof);

        
        $__internal_ff8ebc563d6d5dfe647f743644a1506a4e0293820fc0986fb27a7295ee5057ea->leave($__internal_ff8ebc563d6d5dfe647f743644a1506a4e0293820fc0986fb27a7295ee5057ea_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
