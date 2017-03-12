<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5cec90d4be24d6988e613ed48fc6b21af4761a023689c0b9be01cb31af40a403 extends Twig_Template
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
        $__internal_be765f14d8bf15fcf37501d5074e227b2f63d46325205d05997a3c3c9de4b2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be765f14d8bf15fcf37501d5074e227b2f63d46325205d05997a3c3c9de4b2b8->enter($__internal_be765f14d8bf15fcf37501d5074e227b2f63d46325205d05997a3c3c9de4b2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_750110351b16e434912d31d834f179ddb06246daefa89f0b591b62fa2a3731e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750110351b16e434912d31d834f179ddb06246daefa89f0b591b62fa2a3731e7->enter($__internal_750110351b16e434912d31d834f179ddb06246daefa89f0b591b62fa2a3731e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be765f14d8bf15fcf37501d5074e227b2f63d46325205d05997a3c3c9de4b2b8->leave($__internal_be765f14d8bf15fcf37501d5074e227b2f63d46325205d05997a3c3c9de4b2b8_prof);

        
        $__internal_750110351b16e434912d31d834f179ddb06246daefa89f0b591b62fa2a3731e7->leave($__internal_750110351b16e434912d31d834f179ddb06246daefa89f0b591b62fa2a3731e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
