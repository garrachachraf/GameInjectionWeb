<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_88c33bce34c576311ebdb78612966e3d3f05da96849342cb35f4b46bebaedb06 extends Twig_Template
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
        $__internal_acbac4eb5604574f6390fd3eb4bae2cbfd594dfc2be43b4c113a1331ed6eacf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbac4eb5604574f6390fd3eb4bae2cbfd594dfc2be43b4c113a1331ed6eacf1->enter($__internal_acbac4eb5604574f6390fd3eb4bae2cbfd594dfc2be43b4c113a1331ed6eacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_3171704939a1232ffbbf9250902c727c92ce9db61d39461cf03ffefa6dd773af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3171704939a1232ffbbf9250902c727c92ce9db61d39461cf03ffefa6dd773af->enter($__internal_3171704939a1232ffbbf9250902c727c92ce9db61d39461cf03ffefa6dd773af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_acbac4eb5604574f6390fd3eb4bae2cbfd594dfc2be43b4c113a1331ed6eacf1->leave($__internal_acbac4eb5604574f6390fd3eb4bae2cbfd594dfc2be43b4c113a1331ed6eacf1_prof);

        
        $__internal_3171704939a1232ffbbf9250902c727c92ce9db61d39461cf03ffefa6dd773af->leave($__internal_3171704939a1232ffbbf9250902c727c92ce9db61d39461cf03ffefa6dd773af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
