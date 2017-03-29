<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4237c07fb4a89dbc7a358468d5926d47be315772a628eab6c4f260ddcb940525 extends Twig_Template
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
        $__internal_d9e6bef029744a8fe6b8a0769f494bd9fb32b90f81ea65ea1f4390c2a757cb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e6bef029744a8fe6b8a0769f494bd9fb32b90f81ea65ea1f4390c2a757cb60->enter($__internal_d9e6bef029744a8fe6b8a0769f494bd9fb32b90f81ea65ea1f4390c2a757cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e6a9f764d48ae59702c4d0d86ac695b28355a6cd5b188763d54fe2c10a46df93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a9f764d48ae59702c4d0d86ac695b28355a6cd5b188763d54fe2c10a46df93->enter($__internal_e6a9f764d48ae59702c4d0d86ac695b28355a6cd5b188763d54fe2c10a46df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d9e6bef029744a8fe6b8a0769f494bd9fb32b90f81ea65ea1f4390c2a757cb60->leave($__internal_d9e6bef029744a8fe6b8a0769f494bd9fb32b90f81ea65ea1f4390c2a757cb60_prof);

        
        $__internal_e6a9f764d48ae59702c4d0d86ac695b28355a6cd5b188763d54fe2c10a46df93->leave($__internal_e6a9f764d48ae59702c4d0d86ac695b28355a6cd5b188763d54fe2c10a46df93_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
