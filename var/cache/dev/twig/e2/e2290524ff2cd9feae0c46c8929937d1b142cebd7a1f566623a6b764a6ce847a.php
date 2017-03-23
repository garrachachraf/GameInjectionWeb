<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3ddbc3156809a67a2b1161ee8ed07ed1fc2e3f7e9717bac7505b2afbb97cb2b0 extends Twig_Template
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
        $__internal_b1c15d6caff9f80f6cc655574b24f4304d5002d00cd067fa004e8eb9526d7f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c15d6caff9f80f6cc655574b24f4304d5002d00cd067fa004e8eb9526d7f1f->enter($__internal_b1c15d6caff9f80f6cc655574b24f4304d5002d00cd067fa004e8eb9526d7f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_02bb204d2fb47973ad458f335ceb1b95bbdfae2fd09018dd6fa1b1548e51fa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bb204d2fb47973ad458f335ceb1b95bbdfae2fd09018dd6fa1b1548e51fa69->enter($__internal_02bb204d2fb47973ad458f335ceb1b95bbdfae2fd09018dd6fa1b1548e51fa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b1c15d6caff9f80f6cc655574b24f4304d5002d00cd067fa004e8eb9526d7f1f->leave($__internal_b1c15d6caff9f80f6cc655574b24f4304d5002d00cd067fa004e8eb9526d7f1f_prof);

        
        $__internal_02bb204d2fb47973ad458f335ceb1b95bbdfae2fd09018dd6fa1b1548e51fa69->leave($__internal_02bb204d2fb47973ad458f335ceb1b95bbdfae2fd09018dd6fa1b1548e51fa69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
