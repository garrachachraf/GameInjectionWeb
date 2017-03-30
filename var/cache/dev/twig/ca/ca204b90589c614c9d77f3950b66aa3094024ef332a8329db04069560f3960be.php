<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_789bef6c489e30445b2c2677b4c4d85fca974765b72e2461b576843ff8fd3c66 extends Twig_Template
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
        $__internal_e611cb97fb8c6858196c79e31944a321967ef788dcc5b1b25c8299a54966787d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e611cb97fb8c6858196c79e31944a321967ef788dcc5b1b25c8299a54966787d->enter($__internal_e611cb97fb8c6858196c79e31944a321967ef788dcc5b1b25c8299a54966787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_407a1b16e6969adf5f0745a39a089760489110169993ed18635d51c3f32dd9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407a1b16e6969adf5f0745a39a089760489110169993ed18635d51c3f32dd9f2->enter($__internal_407a1b16e6969adf5f0745a39a089760489110169993ed18635d51c3f32dd9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e611cb97fb8c6858196c79e31944a321967ef788dcc5b1b25c8299a54966787d->leave($__internal_e611cb97fb8c6858196c79e31944a321967ef788dcc5b1b25c8299a54966787d_prof);

        
        $__internal_407a1b16e6969adf5f0745a39a089760489110169993ed18635d51c3f32dd9f2->leave($__internal_407a1b16e6969adf5f0745a39a089760489110169993ed18635d51c3f32dd9f2_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
