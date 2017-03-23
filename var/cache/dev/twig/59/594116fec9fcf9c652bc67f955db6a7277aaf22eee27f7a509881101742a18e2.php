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
        $__internal_311aa8abe7104e928223c63b85d1948027e7068a33673560adb9e52e1a038d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311aa8abe7104e928223c63b85d1948027e7068a33673560adb9e52e1a038d4a->enter($__internal_311aa8abe7104e928223c63b85d1948027e7068a33673560adb9e52e1a038d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_07b715ebaf422c753f43d808b877f85c30a46bed8ff031eaa5550cfeaf508e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b715ebaf422c753f43d808b877f85c30a46bed8ff031eaa5550cfeaf508e9a->enter($__internal_07b715ebaf422c753f43d808b877f85c30a46bed8ff031eaa5550cfeaf508e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_311aa8abe7104e928223c63b85d1948027e7068a33673560adb9e52e1a038d4a->leave($__internal_311aa8abe7104e928223c63b85d1948027e7068a33673560adb9e52e1a038d4a_prof);

        
        $__internal_07b715ebaf422c753f43d808b877f85c30a46bed8ff031eaa5550cfeaf508e9a->leave($__internal_07b715ebaf422c753f43d808b877f85c30a46bed8ff031eaa5550cfeaf508e9a_prof);

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
