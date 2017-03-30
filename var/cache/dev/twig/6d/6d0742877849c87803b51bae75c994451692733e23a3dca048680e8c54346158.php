<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ea47bc21fc8785c3a8bc8b56b98d3f061877817a040730b47acb48bac18c598 extends Twig_Template
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
        $__internal_6a80b3b602b309bb4ae57dfe626b0613972914c1fbb93158c1fa1964ef1639bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a80b3b602b309bb4ae57dfe626b0613972914c1fbb93158c1fa1964ef1639bc->enter($__internal_6a80b3b602b309bb4ae57dfe626b0613972914c1fbb93158c1fa1964ef1639bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c6e45606b53102a1027eeff84cddbe3e81ec584aa0e39f63782cdc3cf729b20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e45606b53102a1027eeff84cddbe3e81ec584aa0e39f63782cdc3cf729b20d->enter($__internal_c6e45606b53102a1027eeff84cddbe3e81ec584aa0e39f63782cdc3cf729b20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6a80b3b602b309bb4ae57dfe626b0613972914c1fbb93158c1fa1964ef1639bc->leave($__internal_6a80b3b602b309bb4ae57dfe626b0613972914c1fbb93158c1fa1964ef1639bc_prof);

        
        $__internal_c6e45606b53102a1027eeff84cddbe3e81ec584aa0e39f63782cdc3cf729b20d->leave($__internal_c6e45606b53102a1027eeff84cddbe3e81ec584aa0e39f63782cdc3cf729b20d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
