<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1442fb15fb2b0c71e3ab5816a437594c3e6ce2224bc164a296c30f4d624adbca extends Twig_Template
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
        $__internal_76648e6be6a0e581e4560960c45f54afa57395d815ada7022f023eb8baf6e444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76648e6be6a0e581e4560960c45f54afa57395d815ada7022f023eb8baf6e444->enter($__internal_76648e6be6a0e581e4560960c45f54afa57395d815ada7022f023eb8baf6e444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d6918675e2e70d94321cdb208e81214b6e11590d20f95379a0f057d260c0f2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6918675e2e70d94321cdb208e81214b6e11590d20f95379a0f057d260c0f2b0->enter($__internal_d6918675e2e70d94321cdb208e81214b6e11590d20f95379a0f057d260c0f2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_76648e6be6a0e581e4560960c45f54afa57395d815ada7022f023eb8baf6e444->leave($__internal_76648e6be6a0e581e4560960c45f54afa57395d815ada7022f023eb8baf6e444_prof);

        
        $__internal_d6918675e2e70d94321cdb208e81214b6e11590d20f95379a0f057d260c0f2b0->leave($__internal_d6918675e2e70d94321cdb208e81214b6e11590d20f95379a0f057d260c0f2b0_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
