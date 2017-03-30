<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7bafff71bfeb1ad428e6e7132c1cf6c2d23735b9f0c8635969648eb5df5936fe extends Twig_Template
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
        $__internal_e056a3f73bdccb996a701398a52540fe1121eab91ace55cbc38fbe808e7f490b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e056a3f73bdccb996a701398a52540fe1121eab91ace55cbc38fbe808e7f490b->enter($__internal_e056a3f73bdccb996a701398a52540fe1121eab91ace55cbc38fbe808e7f490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5c77c2a8e0e72ee4669a7ce1f00aa5fede3c15ffd2f37ab4c6e9ad551cffc427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c77c2a8e0e72ee4669a7ce1f00aa5fede3c15ffd2f37ab4c6e9ad551cffc427->enter($__internal_5c77c2a8e0e72ee4669a7ce1f00aa5fede3c15ffd2f37ab4c6e9ad551cffc427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e056a3f73bdccb996a701398a52540fe1121eab91ace55cbc38fbe808e7f490b->leave($__internal_e056a3f73bdccb996a701398a52540fe1121eab91ace55cbc38fbe808e7f490b_prof);

        
        $__internal_5c77c2a8e0e72ee4669a7ce1f00aa5fede3c15ffd2f37ab4c6e9ad551cffc427->leave($__internal_5c77c2a8e0e72ee4669a7ce1f00aa5fede3c15ffd2f37ab4c6e9ad551cffc427_prof);

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
