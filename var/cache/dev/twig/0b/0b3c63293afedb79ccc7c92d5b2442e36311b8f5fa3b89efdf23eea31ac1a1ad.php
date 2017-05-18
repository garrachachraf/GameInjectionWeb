<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_829251614db894b57eb2934429183c28603189c4b3f16801391d708ff3a8d52d extends Twig_Template
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
        $__internal_5814ffb598c6754120869bc34f62f13698f5a05f6b6fe901b73e15ff25567f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5814ffb598c6754120869bc34f62f13698f5a05f6b6fe901b73e15ff25567f13->enter($__internal_5814ffb598c6754120869bc34f62f13698f5a05f6b6fe901b73e15ff25567f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6274ae1f91ff440834947bfad60d661ba4c2d45e0e8313eb2b578a463a2d2086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6274ae1f91ff440834947bfad60d661ba4c2d45e0e8313eb2b578a463a2d2086->enter($__internal_6274ae1f91ff440834947bfad60d661ba4c2d45e0e8313eb2b578a463a2d2086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5814ffb598c6754120869bc34f62f13698f5a05f6b6fe901b73e15ff25567f13->leave($__internal_5814ffb598c6754120869bc34f62f13698f5a05f6b6fe901b73e15ff25567f13_prof);

        
        $__internal_6274ae1f91ff440834947bfad60d661ba4c2d45e0e8313eb2b578a463a2d2086->leave($__internal_6274ae1f91ff440834947bfad60d661ba4c2d45e0e8313eb2b578a463a2d2086_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
