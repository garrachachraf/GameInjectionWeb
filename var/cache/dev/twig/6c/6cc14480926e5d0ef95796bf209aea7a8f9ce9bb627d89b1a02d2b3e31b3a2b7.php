<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1b217c514f66a08f4b6dbd1317e9d67651c1e82801a702151018c76fac7f90f0 extends Twig_Template
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
        $__internal_d1ed234873e9703e71d6c39665c7a4cd718f3ddcb1ac9d13744ad4d97efbffd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed234873e9703e71d6c39665c7a4cd718f3ddcb1ac9d13744ad4d97efbffd1->enter($__internal_d1ed234873e9703e71d6c39665c7a4cd718f3ddcb1ac9d13744ad4d97efbffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_481c9aef371edde6329dac69ba74585dbf65b5419d5d4b15bc29526204fc8d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481c9aef371edde6329dac69ba74585dbf65b5419d5d4b15bc29526204fc8d78->enter($__internal_481c9aef371edde6329dac69ba74585dbf65b5419d5d4b15bc29526204fc8d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d1ed234873e9703e71d6c39665c7a4cd718f3ddcb1ac9d13744ad4d97efbffd1->leave($__internal_d1ed234873e9703e71d6c39665c7a4cd718f3ddcb1ac9d13744ad4d97efbffd1_prof);

        
        $__internal_481c9aef371edde6329dac69ba74585dbf65b5419d5d4b15bc29526204fc8d78->leave($__internal_481c9aef371edde6329dac69ba74585dbf65b5419d5d4b15bc29526204fc8d78_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
