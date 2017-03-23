<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5086e97fda03fc2c0431c7ca640dc272e292a4289b243aa1d3155ebdae63ee03 extends Twig_Template
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
        $__internal_24a6200dcd1766d1c2fde3f492ac72f8b3d11e219d753729e0ad8504dd0a1cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a6200dcd1766d1c2fde3f492ac72f8b3d11e219d753729e0ad8504dd0a1cd6->enter($__internal_24a6200dcd1766d1c2fde3f492ac72f8b3d11e219d753729e0ad8504dd0a1cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_cb6ccf675b287bff0fb6c4a789258879fa9411103a19df327f4e667592ad4587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6ccf675b287bff0fb6c4a789258879fa9411103a19df327f4e667592ad4587->enter($__internal_cb6ccf675b287bff0fb6c4a789258879fa9411103a19df327f4e667592ad4587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_24a6200dcd1766d1c2fde3f492ac72f8b3d11e219d753729e0ad8504dd0a1cd6->leave($__internal_24a6200dcd1766d1c2fde3f492ac72f8b3d11e219d753729e0ad8504dd0a1cd6_prof);

        
        $__internal_cb6ccf675b287bff0fb6c4a789258879fa9411103a19df327f4e667592ad4587->leave($__internal_cb6ccf675b287bff0fb6c4a789258879fa9411103a19df327f4e667592ad4587_prof);

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
