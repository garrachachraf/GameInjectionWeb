<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_e050ed5165736a199a87f948ed2eab9a050b220cf7bfbf51391e52656d96d711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e050ed5165736a199a87f948ed2eab9a050b220cf7bfbf51391e52656d96d711->enter($__internal_e050ed5165736a199a87f948ed2eab9a050b220cf7bfbf51391e52656d96d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dbb106f178938b63d8721b7da19831932815554b9958c8b062bb4418365fb6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb106f178938b63d8721b7da19831932815554b9958c8b062bb4418365fb6b6->enter($__internal_dbb106f178938b63d8721b7da19831932815554b9958c8b062bb4418365fb6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e050ed5165736a199a87f948ed2eab9a050b220cf7bfbf51391e52656d96d711->leave($__internal_e050ed5165736a199a87f948ed2eab9a050b220cf7bfbf51391e52656d96d711_prof);

        
        $__internal_dbb106f178938b63d8721b7da19831932815554b9958c8b062bb4418365fb6b6->leave($__internal_dbb106f178938b63d8721b7da19831932815554b9958c8b062bb4418365fb6b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
