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
        $__internal_c7423c8a4bce415685a85b550247c514840914b65adbdc579486f3696b5f5b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7423c8a4bce415685a85b550247c514840914b65adbdc579486f3696b5f5b20->enter($__internal_c7423c8a4bce415685a85b550247c514840914b65adbdc579486f3696b5f5b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4f59e636352fdcbc838e14507ca4fd062bedbf10676386bad16fe833727b455f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f59e636352fdcbc838e14507ca4fd062bedbf10676386bad16fe833727b455f->enter($__internal_4f59e636352fdcbc838e14507ca4fd062bedbf10676386bad16fe833727b455f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c7423c8a4bce415685a85b550247c514840914b65adbdc579486f3696b5f5b20->leave($__internal_c7423c8a4bce415685a85b550247c514840914b65adbdc579486f3696b5f5b20_prof);

        
        $__internal_4f59e636352fdcbc838e14507ca4fd062bedbf10676386bad16fe833727b455f->leave($__internal_4f59e636352fdcbc838e14507ca4fd062bedbf10676386bad16fe833727b455f_prof);

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
