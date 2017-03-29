<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_590f831b0f69ea3dacb657494ebab7f85027d241f84502019eb5a628a8e6f61b extends Twig_Template
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
        $__internal_743c990a285dffa939847cc384336204678378fe080fecf9a7ec3cebfb278257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743c990a285dffa939847cc384336204678378fe080fecf9a7ec3cebfb278257->enter($__internal_743c990a285dffa939847cc384336204678378fe080fecf9a7ec3cebfb278257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_3195b09fc342f806d948225c85dfd66b348032e284ab4d84d9c5f87315c5a7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3195b09fc342f806d948225c85dfd66b348032e284ab4d84d9c5f87315c5a7bd->enter($__internal_3195b09fc342f806d948225c85dfd66b348032e284ab4d84d9c5f87315c5a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_743c990a285dffa939847cc384336204678378fe080fecf9a7ec3cebfb278257->leave($__internal_743c990a285dffa939847cc384336204678378fe080fecf9a7ec3cebfb278257_prof);

        
        $__internal_3195b09fc342f806d948225c85dfd66b348032e284ab4d84d9c5f87315c5a7bd->leave($__internal_3195b09fc342f806d948225c85dfd66b348032e284ab4d84d9c5f87315c5a7bd_prof);

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
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle/Resources/views/Default/index.html.twig");
    }
}
