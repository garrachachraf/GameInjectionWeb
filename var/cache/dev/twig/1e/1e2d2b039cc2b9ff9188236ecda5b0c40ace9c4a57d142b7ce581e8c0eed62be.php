<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0dd04c5b274755fb9a9e2846938143f570b8df1ba855e5d25177c428c6b4c63f extends Twig_Template
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
        $__internal_2760372daac5c85f13b22be59a0be0afe45767f6ac521be8c514db3404304033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2760372daac5c85f13b22be59a0be0afe45767f6ac521be8c514db3404304033->enter($__internal_2760372daac5c85f13b22be59a0be0afe45767f6ac521be8c514db3404304033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7a6dc995f00da5f1ed361d483f2ec2f88d0eaa83ec76d0e923256785a1d0d44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6dc995f00da5f1ed361d483f2ec2f88d0eaa83ec76d0e923256785a1d0d44b->enter($__internal_7a6dc995f00da5f1ed361d483f2ec2f88d0eaa83ec76d0e923256785a1d0d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2760372daac5c85f13b22be59a0be0afe45767f6ac521be8c514db3404304033->leave($__internal_2760372daac5c85f13b22be59a0be0afe45767f6ac521be8c514db3404304033_prof);

        
        $__internal_7a6dc995f00da5f1ed361d483f2ec2f88d0eaa83ec76d0e923256785a1d0d44b->leave($__internal_7a6dc995f00da5f1ed361d483f2ec2f88d0eaa83ec76d0e923256785a1d0d44b_prof);

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
