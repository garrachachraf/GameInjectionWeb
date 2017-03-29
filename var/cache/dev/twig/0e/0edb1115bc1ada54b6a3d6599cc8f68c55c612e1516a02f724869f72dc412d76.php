<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1abee6fa678c51fbf079d1a86ef956686bbbf9f78e93fe1bf8a37e3477b87fec extends Twig_Template
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
        $__internal_9b24ecd401bdf5924f455dd1e36fe5fdb4203ed4c4440e8e200e0894ccab45ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b24ecd401bdf5924f455dd1e36fe5fdb4203ed4c4440e8e200e0894ccab45ae->enter($__internal_9b24ecd401bdf5924f455dd1e36fe5fdb4203ed4c4440e8e200e0894ccab45ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7cbb72bcb661a0d2b84a42d3b44631b4f8a7451041779cbe886b01422b403335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbb72bcb661a0d2b84a42d3b44631b4f8a7451041779cbe886b01422b403335->enter($__internal_7cbb72bcb661a0d2b84a42d3b44631b4f8a7451041779cbe886b01422b403335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9b24ecd401bdf5924f455dd1e36fe5fdb4203ed4c4440e8e200e0894ccab45ae->leave($__internal_9b24ecd401bdf5924f455dd1e36fe5fdb4203ed4c4440e8e200e0894ccab45ae_prof);

        
        $__internal_7cbb72bcb661a0d2b84a42d3b44631b4f8a7451041779cbe886b01422b403335->leave($__internal_7cbb72bcb661a0d2b84a42d3b44631b4f8a7451041779cbe886b01422b403335_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
