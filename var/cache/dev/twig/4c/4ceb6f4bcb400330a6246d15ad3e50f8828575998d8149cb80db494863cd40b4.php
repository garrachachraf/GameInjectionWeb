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
        $__internal_6acc8bbd8fa869a5a2edc849f45d6be544706692f27c87eebb614ff6cc75c547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acc8bbd8fa869a5a2edc849f45d6be544706692f27c87eebb614ff6cc75c547->enter($__internal_6acc8bbd8fa869a5a2edc849f45d6be544706692f27c87eebb614ff6cc75c547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8feda8fb68c6ff3a915e3be5f1b772a7b8cdadf0e5534a39754fc6ea60404327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8feda8fb68c6ff3a915e3be5f1b772a7b8cdadf0e5534a39754fc6ea60404327->enter($__internal_8feda8fb68c6ff3a915e3be5f1b772a7b8cdadf0e5534a39754fc6ea60404327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6acc8bbd8fa869a5a2edc849f45d6be544706692f27c87eebb614ff6cc75c547->leave($__internal_6acc8bbd8fa869a5a2edc849f45d6be544706692f27c87eebb614ff6cc75c547_prof);

        
        $__internal_8feda8fb68c6ff3a915e3be5f1b772a7b8cdadf0e5534a39754fc6ea60404327->leave($__internal_8feda8fb68c6ff3a915e3be5f1b772a7b8cdadf0e5534a39754fc6ea60404327_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
