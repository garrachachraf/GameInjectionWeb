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
        $__internal_b94d06f8edb0f2e7a95f82f3f10e38bdb8459e07fcd3507274c84f06569742a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94d06f8edb0f2e7a95f82f3f10e38bdb8459e07fcd3507274c84f06569742a2->enter($__internal_b94d06f8edb0f2e7a95f82f3f10e38bdb8459e07fcd3507274c84f06569742a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a17a2142a712ff7b6512d6bd133b1f7ac052b75d51af6c6673761eb1caf27bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17a2142a712ff7b6512d6bd133b1f7ac052b75d51af6c6673761eb1caf27bbc->enter($__internal_a17a2142a712ff7b6512d6bd133b1f7ac052b75d51af6c6673761eb1caf27bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b94d06f8edb0f2e7a95f82f3f10e38bdb8459e07fcd3507274c84f06569742a2->leave($__internal_b94d06f8edb0f2e7a95f82f3f10e38bdb8459e07fcd3507274c84f06569742a2_prof);

        
        $__internal_a17a2142a712ff7b6512d6bd133b1f7ac052b75d51af6c6673761eb1caf27bbc->leave($__internal_a17a2142a712ff7b6512d6bd133b1f7ac052b75d51af6c6673761eb1caf27bbc_prof);

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
