<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_440ea84b70ea52a4756917bb75cdcd83cac3de3b85ce73b41ae23c19f8e4a115 extends Twig_Template
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
        $__internal_b639fe4061dc8dc336e0ba151f704cce643b6881a8a0f53504cbc0bac84113c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b639fe4061dc8dc336e0ba151f704cce643b6881a8a0f53504cbc0bac84113c0->enter($__internal_b639fe4061dc8dc336e0ba151f704cce643b6881a8a0f53504cbc0bac84113c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c85f986bfb96bb3792a0a20c4c34c361d99d7878a2190494e320a30d98cbce2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85f986bfb96bb3792a0a20c4c34c361d99d7878a2190494e320a30d98cbce2c->enter($__internal_c85f986bfb96bb3792a0a20c4c34c361d99d7878a2190494e320a30d98cbce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b639fe4061dc8dc336e0ba151f704cce643b6881a8a0f53504cbc0bac84113c0->leave($__internal_b639fe4061dc8dc336e0ba151f704cce643b6881a8a0f53504cbc0bac84113c0_prof);

        
        $__internal_c85f986bfb96bb3792a0a20c4c34c361d99d7878a2190494e320a30d98cbce2c->leave($__internal_c85f986bfb96bb3792a0a20c4c34c361d99d7878a2190494e320a30d98cbce2c_prof);

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
