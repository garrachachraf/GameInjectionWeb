<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1b217c514f66a08f4b6dbd1317e9d67651c1e82801a702151018c76fac7f90f0 extends Twig_Template
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
        $__internal_60bc58d4f3b790c1e21a14ab1b0d430f41d6866b26320302b1d2e3d2e29ecd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bc58d4f3b790c1e21a14ab1b0d430f41d6866b26320302b1d2e3d2e29ecd73->enter($__internal_60bc58d4f3b790c1e21a14ab1b0d430f41d6866b26320302b1d2e3d2e29ecd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6088389b2bdc62dd68eaf32981399eb50c01a66d9df435f70d6d85e039084314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6088389b2bdc62dd68eaf32981399eb50c01a66d9df435f70d6d85e039084314->enter($__internal_6088389b2bdc62dd68eaf32981399eb50c01a66d9df435f70d6d85e039084314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_60bc58d4f3b790c1e21a14ab1b0d430f41d6866b26320302b1d2e3d2e29ecd73->leave($__internal_60bc58d4f3b790c1e21a14ab1b0d430f41d6866b26320302b1d2e3d2e29ecd73_prof);

        
        $__internal_6088389b2bdc62dd68eaf32981399eb50c01a66d9df435f70d6d85e039084314->leave($__internal_6088389b2bdc62dd68eaf32981399eb50c01a66d9df435f70d6d85e039084314_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
