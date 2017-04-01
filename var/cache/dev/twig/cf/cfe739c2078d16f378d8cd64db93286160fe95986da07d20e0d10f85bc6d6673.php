<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6c213a9c463baff008aecb542e2cefb3fc3ce1d4e373a43da8c958f83c241388 extends Twig_Template
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
        $__internal_ba30a4b77089a32c0e1002ae3300997c8a31847b45d6051dd2ed66f0265aad83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba30a4b77089a32c0e1002ae3300997c8a31847b45d6051dd2ed66f0265aad83->enter($__internal_ba30a4b77089a32c0e1002ae3300997c8a31847b45d6051dd2ed66f0265aad83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0295fe76fbfde55d25829cb5d6c917f49a629d537c520660a72934731b70a20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0295fe76fbfde55d25829cb5d6c917f49a629d537c520660a72934731b70a20b->enter($__internal_0295fe76fbfde55d25829cb5d6c917f49a629d537c520660a72934731b70a20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ba30a4b77089a32c0e1002ae3300997c8a31847b45d6051dd2ed66f0265aad83->leave($__internal_ba30a4b77089a32c0e1002ae3300997c8a31847b45d6051dd2ed66f0265aad83_prof);

        
        $__internal_0295fe76fbfde55d25829cb5d6c917f49a629d537c520660a72934731b70a20b->leave($__internal_0295fe76fbfde55d25829cb5d6c917f49a629d537c520660a72934731b70a20b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
