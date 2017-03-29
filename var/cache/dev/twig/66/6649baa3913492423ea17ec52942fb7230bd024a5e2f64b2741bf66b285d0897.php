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
        $__internal_e530b5187915bd1bab40d42fd5e1a980e825782f5e8a0e741498d63334adfed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e530b5187915bd1bab40d42fd5e1a980e825782f5e8a0e741498d63334adfed6->enter($__internal_e530b5187915bd1bab40d42fd5e1a980e825782f5e8a0e741498d63334adfed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_179f41eb718fb4cf45bfc6c791a476e79ffc621051c49b6f8bce73a9bc10bde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179f41eb718fb4cf45bfc6c791a476e79ffc621051c49b6f8bce73a9bc10bde3->enter($__internal_179f41eb718fb4cf45bfc6c791a476e79ffc621051c49b6f8bce73a9bc10bde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e530b5187915bd1bab40d42fd5e1a980e825782f5e8a0e741498d63334adfed6->leave($__internal_e530b5187915bd1bab40d42fd5e1a980e825782f5e8a0e741498d63334adfed6_prof);

        
        $__internal_179f41eb718fb4cf45bfc6c791a476e79ffc621051c49b6f8bce73a9bc10bde3->leave($__internal_179f41eb718fb4cf45bfc6c791a476e79ffc621051c49b6f8bce73a9bc10bde3_prof);

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
