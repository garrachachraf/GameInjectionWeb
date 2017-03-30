<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1abee6fa678c51fbf079d1a86ef956686bbbf9f78e93fe1bf8a37e3477b87fec extends Twig_Template
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
        $__internal_6697195ad2c0925b237f14b3484166294b4b847bdc11f23f9ba02c9c90a9d27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6697195ad2c0925b237f14b3484166294b4b847bdc11f23f9ba02c9c90a9d27a->enter($__internal_6697195ad2c0925b237f14b3484166294b4b847bdc11f23f9ba02c9c90a9d27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1ab0e0fcc90ecd1302e6c661eade8258a017d1feee6324b8ee9c0979555dbb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab0e0fcc90ecd1302e6c661eade8258a017d1feee6324b8ee9c0979555dbb27->enter($__internal_1ab0e0fcc90ecd1302e6c661eade8258a017d1feee6324b8ee9c0979555dbb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6697195ad2c0925b237f14b3484166294b4b847bdc11f23f9ba02c9c90a9d27a->leave($__internal_6697195ad2c0925b237f14b3484166294b4b847bdc11f23f9ba02c9c90a9d27a_prof);

        
        $__internal_1ab0e0fcc90ecd1302e6c661eade8258a017d1feee6324b8ee9c0979555dbb27->leave($__internal_1ab0e0fcc90ecd1302e6c661eade8258a017d1feee6324b8ee9c0979555dbb27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
