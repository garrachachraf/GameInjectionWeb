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
        $__internal_91f8072e9730c685022041ce7f81fcf13270f0196bfbcb3ed05ad8f526d570a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f8072e9730c685022041ce7f81fcf13270f0196bfbcb3ed05ad8f526d570a6->enter($__internal_91f8072e9730c685022041ce7f81fcf13270f0196bfbcb3ed05ad8f526d570a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1a4efdc72e99ad6415f929035c607d781f02ef45f39b2e41768d417cd8a53435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4efdc72e99ad6415f929035c607d781f02ef45f39b2e41768d417cd8a53435->enter($__internal_1a4efdc72e99ad6415f929035c607d781f02ef45f39b2e41768d417cd8a53435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_91f8072e9730c685022041ce7f81fcf13270f0196bfbcb3ed05ad8f526d570a6->leave($__internal_91f8072e9730c685022041ce7f81fcf13270f0196bfbcb3ed05ad8f526d570a6_prof);

        
        $__internal_1a4efdc72e99ad6415f929035c607d781f02ef45f39b2e41768d417cd8a53435->leave($__internal_1a4efdc72e99ad6415f929035c607d781f02ef45f39b2e41768d417cd8a53435_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
