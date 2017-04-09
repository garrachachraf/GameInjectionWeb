<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25b20168c85fb678eda04f8614770496185fad5177159f9600da866fcd6a1f82 extends Twig_Template
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
        $__internal_539886800862de90e6bc0add0ee13cf80bda8a8a7a986b8d4c298df74cc76501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539886800862de90e6bc0add0ee13cf80bda8a8a7a986b8d4c298df74cc76501->enter($__internal_539886800862de90e6bc0add0ee13cf80bda8a8a7a986b8d4c298df74cc76501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_205fbf9033337e2524eabe97e62b05930b4d59cb362b4d35665ee0a1fcd33d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205fbf9033337e2524eabe97e62b05930b4d59cb362b4d35665ee0a1fcd33d71->enter($__internal_205fbf9033337e2524eabe97e62b05930b4d59cb362b4d35665ee0a1fcd33d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_539886800862de90e6bc0add0ee13cf80bda8a8a7a986b8d4c298df74cc76501->leave($__internal_539886800862de90e6bc0add0ee13cf80bda8a8a7a986b8d4c298df74cc76501_prof);

        
        $__internal_205fbf9033337e2524eabe97e62b05930b4d59cb362b4d35665ee0a1fcd33d71->leave($__internal_205fbf9033337e2524eabe97e62b05930b4d59cb362b4d35665ee0a1fcd33d71_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
