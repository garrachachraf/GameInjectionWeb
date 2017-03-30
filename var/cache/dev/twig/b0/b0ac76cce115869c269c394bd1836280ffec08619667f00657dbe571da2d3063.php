<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_30a0e5d8580f67eb96c4c02df19473940a826d5e89605688357fab7ccd6552f3 extends Twig_Template
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
        $__internal_462a78470568f0c67cac4fb157a3608ad8c76a4d76f0c4e92ce03ca836c2d9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462a78470568f0c67cac4fb157a3608ad8c76a4d76f0c4e92ce03ca836c2d9bd->enter($__internal_462a78470568f0c67cac4fb157a3608ad8c76a4d76f0c4e92ce03ca836c2d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_104b4378df1af7505b4fd8469266365bfe4979d84288609b39fd4e1c64972180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104b4378df1af7505b4fd8469266365bfe4979d84288609b39fd4e1c64972180->enter($__internal_104b4378df1af7505b4fd8469266365bfe4979d84288609b39fd4e1c64972180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_462a78470568f0c67cac4fb157a3608ad8c76a4d76f0c4e92ce03ca836c2d9bd->leave($__internal_462a78470568f0c67cac4fb157a3608ad8c76a4d76f0c4e92ce03ca836c2d9bd_prof);

        
        $__internal_104b4378df1af7505b4fd8469266365bfe4979d84288609b39fd4e1c64972180->leave($__internal_104b4378df1af7505b4fd8469266365bfe4979d84288609b39fd4e1c64972180_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
