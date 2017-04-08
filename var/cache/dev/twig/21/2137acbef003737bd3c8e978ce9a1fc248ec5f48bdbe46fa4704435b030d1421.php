<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_364c8324e8ed66d6ad25f94046048b8bf7ba70afe07d9d3f0204e29cfa546a95 extends Twig_Template
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
        $__internal_805082a71d47fc437ff9a2c2eff46b3b9378c5df7b8f105e4d46e75fe40aa5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805082a71d47fc437ff9a2c2eff46b3b9378c5df7b8f105e4d46e75fe40aa5d3->enter($__internal_805082a71d47fc437ff9a2c2eff46b3b9378c5df7b8f105e4d46e75fe40aa5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_09da8278eb8c9d5b49bec3262e1b86e5d5d84bd9910060fef821e85c74dbd07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09da8278eb8c9d5b49bec3262e1b86e5d5d84bd9910060fef821e85c74dbd07c->enter($__internal_09da8278eb8c9d5b49bec3262e1b86e5d5d84bd9910060fef821e85c74dbd07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_805082a71d47fc437ff9a2c2eff46b3b9378c5df7b8f105e4d46e75fe40aa5d3->leave($__internal_805082a71d47fc437ff9a2c2eff46b3b9378c5df7b8f105e4d46e75fe40aa5d3_prof);

        
        $__internal_09da8278eb8c9d5b49bec3262e1b86e5d5d84bd9910060fef821e85c74dbd07c->leave($__internal_09da8278eb8c9d5b49bec3262e1b86e5d5d84bd9910060fef821e85c74dbd07c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
