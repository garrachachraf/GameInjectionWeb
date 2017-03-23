<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0fc3c113f9a5b969d25ce86ef655a2fe4dd71a076fcf42a683a0fdca02bd03b0 extends Twig_Template
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
        $__internal_10015c647c73f1c166835726461be4bdbb7c38798775d77a64b749e90c5e05dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10015c647c73f1c166835726461be4bdbb7c38798775d77a64b749e90c5e05dd->enter($__internal_10015c647c73f1c166835726461be4bdbb7c38798775d77a64b749e90c5e05dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_34315ea6dae3d5dbf2c4e0d154599c9a5a16fd0ba0b4e77fcbbddf9160a78554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34315ea6dae3d5dbf2c4e0d154599c9a5a16fd0ba0b4e77fcbbddf9160a78554->enter($__internal_34315ea6dae3d5dbf2c4e0d154599c9a5a16fd0ba0b4e77fcbbddf9160a78554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_10015c647c73f1c166835726461be4bdbb7c38798775d77a64b749e90c5e05dd->leave($__internal_10015c647c73f1c166835726461be4bdbb7c38798775d77a64b749e90c5e05dd_prof);

        
        $__internal_34315ea6dae3d5dbf2c4e0d154599c9a5a16fd0ba0b4e77fcbbddf9160a78554->leave($__internal_34315ea6dae3d5dbf2c4e0d154599c9a5a16fd0ba0b4e77fcbbddf9160a78554_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
