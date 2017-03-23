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
        $__internal_37074826804573fe83a791466a6ad1faa77aaaf9df034a0f35172874de2face0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37074826804573fe83a791466a6ad1faa77aaaf9df034a0f35172874de2face0->enter($__internal_37074826804573fe83a791466a6ad1faa77aaaf9df034a0f35172874de2face0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_1103dce8861ca8cec6ecd72038b5bfed527379a5c74cd80036f8d1300cb5c332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1103dce8861ca8cec6ecd72038b5bfed527379a5c74cd80036f8d1300cb5c332->enter($__internal_1103dce8861ca8cec6ecd72038b5bfed527379a5c74cd80036f8d1300cb5c332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37074826804573fe83a791466a6ad1faa77aaaf9df034a0f35172874de2face0->leave($__internal_37074826804573fe83a791466a6ad1faa77aaaf9df034a0f35172874de2face0_prof);

        
        $__internal_1103dce8861ca8cec6ecd72038b5bfed527379a5c74cd80036f8d1300cb5c332->leave($__internal_1103dce8861ca8cec6ecd72038b5bfed527379a5c74cd80036f8d1300cb5c332_prof);

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
