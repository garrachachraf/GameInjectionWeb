<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_21f37a3f1dc258f11b7a7fabf655041f3e158dde5cca364589c753b5310161d9 extends Twig_Template
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
        $__internal_4a181fec410ef3d1741f76bdde2cd575e1e43bc84171856b3675d017f068da4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a181fec410ef3d1741f76bdde2cd575e1e43bc84171856b3675d017f068da4e->enter($__internal_4a181fec410ef3d1741f76bdde2cd575e1e43bc84171856b3675d017f068da4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_93d3a1345bd4eac1402034ac4fe23b3dcb303da19e9afb132bc714353fbe6345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d3a1345bd4eac1402034ac4fe23b3dcb303da19e9afb132bc714353fbe6345->enter($__internal_93d3a1345bd4eac1402034ac4fe23b3dcb303da19e9afb132bc714353fbe6345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4a181fec410ef3d1741f76bdde2cd575e1e43bc84171856b3675d017f068da4e->leave($__internal_4a181fec410ef3d1741f76bdde2cd575e1e43bc84171856b3675d017f068da4e_prof);

        
        $__internal_93d3a1345bd4eac1402034ac4fe23b3dcb303da19e9afb132bc714353fbe6345->leave($__internal_93d3a1345bd4eac1402034ac4fe23b3dcb303da19e9afb132bc714353fbe6345_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
