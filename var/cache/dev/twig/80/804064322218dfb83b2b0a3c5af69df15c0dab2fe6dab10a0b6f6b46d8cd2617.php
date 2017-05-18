<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b042e82d857bece0ba9048cfa044c3d8601ed8cdc93813a978a4faf5427d58c3 extends Twig_Template
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
        $__internal_d9fc0b57d666e1da0e87a8ced1a31188d41bf686791a28f6336023b4038bb6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fc0b57d666e1da0e87a8ced1a31188d41bf686791a28f6336023b4038bb6b9->enter($__internal_d9fc0b57d666e1da0e87a8ced1a31188d41bf686791a28f6336023b4038bb6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_92117829b81847c76ce1d9268ed9d42a86d93d0e8ec6e911d564112c7580e428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92117829b81847c76ce1d9268ed9d42a86d93d0e8ec6e911d564112c7580e428->enter($__internal_92117829b81847c76ce1d9268ed9d42a86d93d0e8ec6e911d564112c7580e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d9fc0b57d666e1da0e87a8ced1a31188d41bf686791a28f6336023b4038bb6b9->leave($__internal_d9fc0b57d666e1da0e87a8ced1a31188d41bf686791a28f6336023b4038bb6b9_prof);

        
        $__internal_92117829b81847c76ce1d9268ed9d42a86d93d0e8ec6e911d564112c7580e428->leave($__internal_92117829b81847c76ce1d9268ed9d42a86d93d0e8ec6e911d564112c7580e428_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
