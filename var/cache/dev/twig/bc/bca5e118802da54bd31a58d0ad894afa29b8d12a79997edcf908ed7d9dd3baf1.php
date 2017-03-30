<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_3e405ae64f98d52477d12ec0218bdfc5905fb4cea61466f7fa8e056c239f1f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd17ec6694217a6e70f3700698a428fe1ac7ccea8d2ad3bfdb938122ab6e349b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd17ec6694217a6e70f3700698a428fe1ac7ccea8d2ad3bfdb938122ab6e349b->enter($__internal_dd17ec6694217a6e70f3700698a428fe1ac7ccea8d2ad3bfdb938122ab6e349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_a50982b4ba98cc7f64bd22b42e8c59312a37f9d1a70b3adf3718c54517e85538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50982b4ba98cc7f64bd22b42e8c59312a37f9d1a70b3adf3718c54517e85538->enter($__internal_a50982b4ba98cc7f64bd22b42e8c59312a37f9d1a70b3adf3718c54517e85538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd17ec6694217a6e70f3700698a428fe1ac7ccea8d2ad3bfdb938122ab6e349b->leave($__internal_dd17ec6694217a6e70f3700698a428fe1ac7ccea8d2ad3bfdb938122ab6e349b_prof);

        
        $__internal_a50982b4ba98cc7f64bd22b42e8c59312a37f9d1a70b3adf3718c54517e85538->leave($__internal_a50982b4ba98cc7f64bd22b42e8c59312a37f9d1a70b3adf3718c54517e85538_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}", "EloboostedBackofficeBundle:Default:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\BackofficeBundle/Resources/views/Default/index.html.twig");
    }
}
