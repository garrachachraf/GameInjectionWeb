<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_49dd02e190bca1b3629763065b114f6c806f608a509d0da32823f8c5b29ccb9f extends Twig_Template
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
        $__internal_1f5b0d186aa101022ca3e6155e941fadf63494172e2f1ab454fb3eb7f9003dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5b0d186aa101022ca3e6155e941fadf63494172e2f1ab454fb3eb7f9003dd7->enter($__internal_1f5b0d186aa101022ca3e6155e941fadf63494172e2f1ab454fb3eb7f9003dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5d9295417d1bf3cc34ff2eedde650eadf8795528e87914e0ccbbf341f5684150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9295417d1bf3cc34ff2eedde650eadf8795528e87914e0ccbbf341f5684150->enter($__internal_5d9295417d1bf3cc34ff2eedde650eadf8795528e87914e0ccbbf341f5684150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1f5b0d186aa101022ca3e6155e941fadf63494172e2f1ab454fb3eb7f9003dd7->leave($__internal_1f5b0d186aa101022ca3e6155e941fadf63494172e2f1ab454fb3eb7f9003dd7_prof);

        
        $__internal_5d9295417d1bf3cc34ff2eedde650eadf8795528e87914e0ccbbf341f5684150->leave($__internal_5d9295417d1bf3cc34ff2eedde650eadf8795528e87914e0ccbbf341f5684150_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
