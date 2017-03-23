<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_232c5cdc0065af2a04c330cf7249f92007539c6ae0e65f249f385f1f6d893b76 extends Twig_Template
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
        $__internal_28930b92ceb221ca84085e6489d13b96784ccfc305df92eb265c6ab947755ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28930b92ceb221ca84085e6489d13b96784ccfc305df92eb265c6ab947755ac9->enter($__internal_28930b92ceb221ca84085e6489d13b96784ccfc305df92eb265c6ab947755ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bf15b8d0c06f7c34b1d06609d5606341d5b47098907d317ecb7f2e69a4a8ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf15b8d0c06f7c34b1d06609d5606341d5b47098907d317ecb7f2e69a4a8ffee->enter($__internal_bf15b8d0c06f7c34b1d06609d5606341d5b47098907d317ecb7f2e69a4a8ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_28930b92ceb221ca84085e6489d13b96784ccfc305df92eb265c6ab947755ac9->leave($__internal_28930b92ceb221ca84085e6489d13b96784ccfc305df92eb265c6ab947755ac9_prof);

        
        $__internal_bf15b8d0c06f7c34b1d06609d5606341d5b47098907d317ecb7f2e69a4a8ffee->leave($__internal_bf15b8d0c06f7c34b1d06609d5606341d5b47098907d317ecb7f2e69a4a8ffee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
