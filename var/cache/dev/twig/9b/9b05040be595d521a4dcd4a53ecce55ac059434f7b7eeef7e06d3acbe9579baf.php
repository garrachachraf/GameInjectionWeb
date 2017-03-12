<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_69a93b5fcb09290589008fcf52ad646078fe4b2760f16604751c00509b4ddfe1 extends Twig_Template
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
        $__internal_0eb3881864ae9016512877df59a6bcae342aed8cb1b0337a13b335220d640e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb3881864ae9016512877df59a6bcae342aed8cb1b0337a13b335220d640e7d->enter($__internal_0eb3881864ae9016512877df59a6bcae342aed8cb1b0337a13b335220d640e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_d20209829fa0fceca93aa372c39e0e7dcb9fa57cf837522d7bb8d713e6af3821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20209829fa0fceca93aa372c39e0e7dcb9fa57cf837522d7bb8d713e6af3821->enter($__internal_d20209829fa0fceca93aa372c39e0e7dcb9fa57cf837522d7bb8d713e6af3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        // line 1
        if (((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")) == null)) {
            // line 2
            echo "<h1>erreur</h1>

";
        } else {
            // line 5
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        
        $__internal_0eb3881864ae9016512877df59a6bcae342aed8cb1b0337a13b335220d640e7d->leave($__internal_0eb3881864ae9016512877df59a6bcae342aed8cb1b0337a13b335220d640e7d_prof);

        
        $__internal_d20209829fa0fceca93aa372c39e0e7dcb9fa57cf837522d7bb8d713e6af3821->leave($__internal_d20209829fa0fceca93aa372c39e0e7dcb9fa57cf837522d7bb8d713e6af3821_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user  == null %}
<h1>erreur</h1>

{% else %}
    <h1>{{ user.pseudo }}</h1>
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/LoginBundle/Resources/views/Default/index.html.twig");
    }
}
