<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_839b5fb21a4e9bd72fc048f7c90a0b50790b4e7f06aad61bf21bf5c4757a65d0 extends Twig_Template
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
        $__internal_3063b2b8806eb8c73290f4994cabe61e632830407115ce544efb53b6bdae7ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3063b2b8806eb8c73290f4994cabe61e632830407115ce544efb53b6bdae7ea3->enter($__internal_3063b2b8806eb8c73290f4994cabe61e632830407115ce544efb53b6bdae7ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_3baca4579e0b15ad629a23688caae11f1931c9df24a77209e5d9f67deab3d074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baca4579e0b15ad629a23688caae11f1931c9df24a77209e5d9f67deab3d074->enter($__internal_3baca4579e0b15ad629a23688caae11f1931c9df24a77209e5d9f67deab3d074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_3063b2b8806eb8c73290f4994cabe61e632830407115ce544efb53b6bdae7ea3->leave($__internal_3063b2b8806eb8c73290f4994cabe61e632830407115ce544efb53b6bdae7ea3_prof);

        
        $__internal_3baca4579e0b15ad629a23688caae11f1931c9df24a77209e5d9f67deab3d074->leave($__internal_3baca4579e0b15ad629a23688caae11f1931c9df24a77209e5d9f67deab3d074_prof);

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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}