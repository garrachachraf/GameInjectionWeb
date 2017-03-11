<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_230393040efffcb78665031947b596ccac40034a2429799039f9631ec1e790af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230393040efffcb78665031947b596ccac40034a2429799039f9631ec1e790af->enter($__internal_230393040efffcb78665031947b596ccac40034a2429799039f9631ec1e790af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_29b27e01c0726df9ab8921dd62a704ff09b2255215a99b1a7ddd1748564343f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b27e01c0726df9ab8921dd62a704ff09b2255215a99b1a7ddd1748564343f6->enter($__internal_29b27e01c0726df9ab8921dd62a704ff09b2255215a99b1a7ddd1748564343f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_230393040efffcb78665031947b596ccac40034a2429799039f9631ec1e790af->leave($__internal_230393040efffcb78665031947b596ccac40034a2429799039f9631ec1e790af_prof);

        
        $__internal_29b27e01c0726df9ab8921dd62a704ff09b2255215a99b1a7ddd1748564343f6->leave($__internal_29b27e01c0726df9ab8921dd62a704ff09b2255215a99b1a7ddd1748564343f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
