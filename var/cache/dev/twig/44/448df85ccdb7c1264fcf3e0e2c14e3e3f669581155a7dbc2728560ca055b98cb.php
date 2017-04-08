<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d1c4a978d8317715c7fd7017217c90edd01e22f7fafff58b1af9a40ed7060e4d extends Twig_Template
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
        $__internal_55785aca93ed606b5ffd1fd9e3c5dab3e58b2b221341f08f9d523b5adc6eb640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55785aca93ed606b5ffd1fd9e3c5dab3e58b2b221341f08f9d523b5adc6eb640->enter($__internal_55785aca93ed606b5ffd1fd9e3c5dab3e58b2b221341f08f9d523b5adc6eb640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_eaf77b96845bb6552ba7314aacc45e7ee5c302884b76831843d33ac92dc7c5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf77b96845bb6552ba7314aacc45e7ee5c302884b76831843d33ac92dc7c5c5->enter($__internal_eaf77b96845bb6552ba7314aacc45e7ee5c302884b76831843d33ac92dc7c5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_55785aca93ed606b5ffd1fd9e3c5dab3e58b2b221341f08f9d523b5adc6eb640->leave($__internal_55785aca93ed606b5ffd1fd9e3c5dab3e58b2b221341f08f9d523b5adc6eb640_prof);

        
        $__internal_eaf77b96845bb6552ba7314aacc45e7ee5c302884b76831843d33ac92dc7c5c5->leave($__internal_eaf77b96845bb6552ba7314aacc45e7ee5c302884b76831843d33ac92dc7c5c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
