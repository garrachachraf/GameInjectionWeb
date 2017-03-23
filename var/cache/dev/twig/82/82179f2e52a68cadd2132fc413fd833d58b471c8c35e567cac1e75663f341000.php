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
        $__internal_444ce9796d947a943fbc2193abf20a25a1a45b8ed3626e35004cca5844a6b6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444ce9796d947a943fbc2193abf20a25a1a45b8ed3626e35004cca5844a6b6f4->enter($__internal_444ce9796d947a943fbc2193abf20a25a1a45b8ed3626e35004cca5844a6b6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2fa11a5bacec3f400c7811f5ae7ef08d1007e4a39dcae3f9c26b80171deb6a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa11a5bacec3f400c7811f5ae7ef08d1007e4a39dcae3f9c26b80171deb6a91->enter($__internal_2fa11a5bacec3f400c7811f5ae7ef08d1007e4a39dcae3f9c26b80171deb6a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_444ce9796d947a943fbc2193abf20a25a1a45b8ed3626e35004cca5844a6b6f4->leave($__internal_444ce9796d947a943fbc2193abf20a25a1a45b8ed3626e35004cca5844a6b6f4_prof);

        
        $__internal_2fa11a5bacec3f400c7811f5ae7ef08d1007e4a39dcae3f9c26b80171deb6a91->leave($__internal_2fa11a5bacec3f400c7811f5ae7ef08d1007e4a39dcae3f9c26b80171deb6a91_prof);

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
