<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_a6b3fa41df37741282e17077786bead46a321aa92e7fa8c12c199f7632ea38df extends Twig_Template
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
        $__internal_4b527f032e4822ac04cfb511452078443a9e5be09984b8225fcd04f2afa817f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b527f032e4822ac04cfb511452078443a9e5be09984b8225fcd04f2afa817f4->enter($__internal_4b527f032e4822ac04cfb511452078443a9e5be09984b8225fcd04f2afa817f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_e2680db48de4c3e02b3fe30426e2ea6a17b079727484ccd732ea4439c8cdae18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2680db48de4c3e02b3fe30426e2ea6a17b079727484ccd732ea4439c8cdae18->enter($__internal_e2680db48de4c3e02b3fe30426e2ea6a17b079727484ccd732ea4439c8cdae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b527f032e4822ac04cfb511452078443a9e5be09984b8225fcd04f2afa817f4->leave($__internal_4b527f032e4822ac04cfb511452078443a9e5be09984b8225fcd04f2afa817f4_prof);

        
        $__internal_e2680db48de4c3e02b3fe30426e2ea6a17b079727484ccd732ea4439c8cdae18->leave($__internal_e2680db48de4c3e02b3fe30426e2ea6a17b079727484ccd732ea4439c8cdae18_prof);

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
