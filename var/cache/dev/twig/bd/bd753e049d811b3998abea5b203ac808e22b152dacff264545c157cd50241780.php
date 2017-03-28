<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7bafff71bfeb1ad428e6e7132c1cf6c2d23735b9f0c8635969648eb5df5936fe extends Twig_Template
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
        $__internal_d6fb8a7e7bf8639695ebc2f62cdf206ca93f7a66e76c28c666419b5fb16de101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fb8a7e7bf8639695ebc2f62cdf206ca93f7a66e76c28c666419b5fb16de101->enter($__internal_d6fb8a7e7bf8639695ebc2f62cdf206ca93f7a66e76c28c666419b5fb16de101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0b751bc8357e43769d89555c1d4dc37f0ed48a4f52ed25f609da8ae06ebbf910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b751bc8357e43769d89555c1d4dc37f0ed48a4f52ed25f609da8ae06ebbf910->enter($__internal_0b751bc8357e43769d89555c1d4dc37f0ed48a4f52ed25f609da8ae06ebbf910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d6fb8a7e7bf8639695ebc2f62cdf206ca93f7a66e76c28c666419b5fb16de101->leave($__internal_d6fb8a7e7bf8639695ebc2f62cdf206ca93f7a66e76c28c666419b5fb16de101_prof);

        
        $__internal_0b751bc8357e43769d89555c1d4dc37f0ed48a4f52ed25f609da8ae06ebbf910->leave($__internal_0b751bc8357e43769d89555c1d4dc37f0ed48a4f52ed25f609da8ae06ebbf910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
