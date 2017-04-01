<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_30a0e5d8580f67eb96c4c02df19473940a826d5e89605688357fab7ccd6552f3 extends Twig_Template
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
        $__internal_c3d18f935ef5bfe72766fd0fdeb60d470c6ba95c41b20e9792406767f650c1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d18f935ef5bfe72766fd0fdeb60d470c6ba95c41b20e9792406767f650c1a6->enter($__internal_c3d18f935ef5bfe72766fd0fdeb60d470c6ba95c41b20e9792406767f650c1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_46a40f6c3800c2b20e4af1fb648ff62f97f489f401be4a28b23bceab4cdcb79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a40f6c3800c2b20e4af1fb648ff62f97f489f401be4a28b23bceab4cdcb79e->enter($__internal_46a40f6c3800c2b20e4af1fb648ff62f97f489f401be4a28b23bceab4cdcb79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c3d18f935ef5bfe72766fd0fdeb60d470c6ba95c41b20e9792406767f650c1a6->leave($__internal_c3d18f935ef5bfe72766fd0fdeb60d470c6ba95c41b20e9792406767f650c1a6_prof);

        
        $__internal_46a40f6c3800c2b20e4af1fb648ff62f97f489f401be4a28b23bceab4cdcb79e->leave($__internal_46a40f6c3800c2b20e4af1fb648ff62f97f489f401be4a28b23bceab4cdcb79e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
