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
        $__internal_4481cd2c0d80aaa9bc98277d1e8222f3e98648a980daf37e06ee17e9f219b682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4481cd2c0d80aaa9bc98277d1e8222f3e98648a980daf37e06ee17e9f219b682->enter($__internal_4481cd2c0d80aaa9bc98277d1e8222f3e98648a980daf37e06ee17e9f219b682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d868e76b04254b92770c4ddd9d2fbb9cf17d95a6a4a8dc0653f3c7895c49b001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d868e76b04254b92770c4ddd9d2fbb9cf17d95a6a4a8dc0653f3c7895c49b001->enter($__internal_d868e76b04254b92770c4ddd9d2fbb9cf17d95a6a4a8dc0653f3c7895c49b001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4481cd2c0d80aaa9bc98277d1e8222f3e98648a980daf37e06ee17e9f219b682->leave($__internal_4481cd2c0d80aaa9bc98277d1e8222f3e98648a980daf37e06ee17e9f219b682_prof);

        
        $__internal_d868e76b04254b92770c4ddd9d2fbb9cf17d95a6a4a8dc0653f3c7895c49b001->leave($__internal_d868e76b04254b92770c4ddd9d2fbb9cf17d95a6a4a8dc0653f3c7895c49b001_prof);

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
