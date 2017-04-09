<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b61435cacfc066e0cb3f155e707cc3c57d78d507534dcfbb2da78c51cd7ade46 extends Twig_Template
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
        $__internal_42ba9308962a1d8ea2810124c6719e340981531a3c24ff84e2e15ebefa28f989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ba9308962a1d8ea2810124c6719e340981531a3c24ff84e2e15ebefa28f989->enter($__internal_42ba9308962a1d8ea2810124c6719e340981531a3c24ff84e2e15ebefa28f989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f1edabfba19993b1a6b048c8f9fea9b604b89e3d1fbfefb6fe39bd00d0005a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1edabfba19993b1a6b048c8f9fea9b604b89e3d1fbfefb6fe39bd00d0005a6b->enter($__internal_f1edabfba19993b1a6b048c8f9fea9b604b89e3d1fbfefb6fe39bd00d0005a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_42ba9308962a1d8ea2810124c6719e340981531a3c24ff84e2e15ebefa28f989->leave($__internal_42ba9308962a1d8ea2810124c6719e340981531a3c24ff84e2e15ebefa28f989_prof);

        
        $__internal_f1edabfba19993b1a6b048c8f9fea9b604b89e3d1fbfefb6fe39bd00d0005a6b->leave($__internal_f1edabfba19993b1a6b048c8f9fea9b604b89e3d1fbfefb6fe39bd00d0005a6b_prof);

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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
