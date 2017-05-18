<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1277faf91058a56ef6c6b1c0ba6969e8863955fa57750a36ea383b9b7f7fdd8a extends Twig_Template
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
        $__internal_a3ed6c38b6dad928eea11ca470be248b6d967d8bdc3d1ba50b443b5ddb6d43d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ed6c38b6dad928eea11ca470be248b6d967d8bdc3d1ba50b443b5ddb6d43d9->enter($__internal_a3ed6c38b6dad928eea11ca470be248b6d967d8bdc3d1ba50b443b5ddb6d43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d0b2f628cc56520c34d92bc53ceb25195f4c264542523d71f422fe4d2dee4529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b2f628cc56520c34d92bc53ceb25195f4c264542523d71f422fe4d2dee4529->enter($__internal_d0b2f628cc56520c34d92bc53ceb25195f4c264542523d71f422fe4d2dee4529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a3ed6c38b6dad928eea11ca470be248b6d967d8bdc3d1ba50b443b5ddb6d43d9->leave($__internal_a3ed6c38b6dad928eea11ca470be248b6d967d8bdc3d1ba50b443b5ddb6d43d9_prof);

        
        $__internal_d0b2f628cc56520c34d92bc53ceb25195f4c264542523d71f422fe4d2dee4529->leave($__internal_d0b2f628cc56520c34d92bc53ceb25195f4c264542523d71f422fe4d2dee4529_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
