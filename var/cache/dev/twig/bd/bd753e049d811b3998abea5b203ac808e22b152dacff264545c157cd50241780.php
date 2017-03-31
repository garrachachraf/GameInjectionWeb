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
        $__internal_bcf65370f7d1c5fabfde0a5dc48934561920e9a205fa18443d7660df22d9ba14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf65370f7d1c5fabfde0a5dc48934561920e9a205fa18443d7660df22d9ba14->enter($__internal_bcf65370f7d1c5fabfde0a5dc48934561920e9a205fa18443d7660df22d9ba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ce87ebec5e941075f5615299cc94d4b489262069e613ed2d78195c8625c37c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce87ebec5e941075f5615299cc94d4b489262069e613ed2d78195c8625c37c7c->enter($__internal_ce87ebec5e941075f5615299cc94d4b489262069e613ed2d78195c8625c37c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_bcf65370f7d1c5fabfde0a5dc48934561920e9a205fa18443d7660df22d9ba14->leave($__internal_bcf65370f7d1c5fabfde0a5dc48934561920e9a205fa18443d7660df22d9ba14_prof);

        
        $__internal_ce87ebec5e941075f5615299cc94d4b489262069e613ed2d78195c8625c37c7c->leave($__internal_ce87ebec5e941075f5615299cc94d4b489262069e613ed2d78195c8625c37c7c_prof);

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
