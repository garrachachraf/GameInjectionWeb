<?php

/* @EloboostedLogin/Default/index.html.twig */
class __TwigTemplate_149397282323dfc72510f50b42c6dd053056137713863f07bd167f44d101d48c extends Twig_Template
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
        $__internal_a9235f0db3eafe78c64a5eb9009381f4216f8788b1dcf0f12b2911dcb80a97c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9235f0db3eafe78c64a5eb9009381f4216f8788b1dcf0f12b2911dcb80a97c7->enter($__internal_a9235f0db3eafe78c64a5eb9009381f4216f8788b1dcf0f12b2911dcb80a97c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_421370e23f36ff12a148ff8c91d5439d0366d2918b5f822f0d3653e5c0ec7083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421370e23f36ff12a148ff8c91d5439d0366d2918b5f822f0d3653e5c0ec7083->enter($__internal_421370e23f36ff12a148ff8c91d5439d0366d2918b5f822f0d3653e5c0ec7083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_a9235f0db3eafe78c64a5eb9009381f4216f8788b1dcf0f12b2911dcb80a97c7->leave($__internal_a9235f0db3eafe78c64a5eb9009381f4216f8788b1dcf0f12b2911dcb80a97c7_prof);

        
        $__internal_421370e23f36ff12a148ff8c91d5439d0366d2918b5f822f0d3653e5c0ec7083->leave($__internal_421370e23f36ff12a148ff8c91d5439d0366d2918b5f822f0d3653e5c0ec7083_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedLogin/Default/index.html.twig";
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
{% endif %}", "@EloboostedLogin/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
