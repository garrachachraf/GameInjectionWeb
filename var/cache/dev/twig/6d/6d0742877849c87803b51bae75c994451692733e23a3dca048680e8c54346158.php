<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8ea47bc21fc8785c3a8bc8b56b98d3f061877817a040730b47acb48bac18c598 extends Twig_Template
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
        $__internal_2d52f36ea32e195ecb6ef170db1d7d8542ea32c3f32b6eee89d77a259d576790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d52f36ea32e195ecb6ef170db1d7d8542ea32c3f32b6eee89d77a259d576790->enter($__internal_2d52f36ea32e195ecb6ef170db1d7d8542ea32c3f32b6eee89d77a259d576790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_954c65f1eac30def02f9f20439686b419fbb48598e7d7dd5db62edf7ed712987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954c65f1eac30def02f9f20439686b419fbb48598e7d7dd5db62edf7ed712987->enter($__internal_954c65f1eac30def02f9f20439686b419fbb48598e7d7dd5db62edf7ed712987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2d52f36ea32e195ecb6ef170db1d7d8542ea32c3f32b6eee89d77a259d576790->leave($__internal_2d52f36ea32e195ecb6ef170db1d7d8542ea32c3f32b6eee89d77a259d576790_prof);

        
        $__internal_954c65f1eac30def02f9f20439686b419fbb48598e7d7dd5db62edf7ed712987->leave($__internal_954c65f1eac30def02f9f20439686b419fbb48598e7d7dd5db62edf7ed712987_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
