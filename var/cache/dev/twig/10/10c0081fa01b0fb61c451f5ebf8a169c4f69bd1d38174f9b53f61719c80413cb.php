<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_317eee346e2ab2bca6ac47fbd6bb68d7e835c8c61a899cc9583c38561d490fce extends Twig_Template
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
        $__internal_71a2001e429580eeb10f9ef02f983d1d9866f28406ff908f0656ffab1afa9881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a2001e429580eeb10f9ef02f983d1d9866f28406ff908f0656ffab1afa9881->enter($__internal_71a2001e429580eeb10f9ef02f983d1d9866f28406ff908f0656ffab1afa9881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5ef47ecc4fb7fda8bda8a11c6047fc2dc643d1fd10a59f1cd89ea1fa1325336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef47ecc4fb7fda8bda8a11c6047fc2dc643d1fd10a59f1cd89ea1fa1325336c->enter($__internal_5ef47ecc4fb7fda8bda8a11c6047fc2dc643d1fd10a59f1cd89ea1fa1325336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71a2001e429580eeb10f9ef02f983d1d9866f28406ff908f0656ffab1afa9881->leave($__internal_71a2001e429580eeb10f9ef02f983d1d9866f28406ff908f0656ffab1afa9881_prof);

        
        $__internal_5ef47ecc4fb7fda8bda8a11c6047fc2dc643d1fd10a59f1cd89ea1fa1325336c->leave($__internal_5ef47ecc4fb7fda8bda8a11c6047fc2dc643d1fd10a59f1cd89ea1fa1325336c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
