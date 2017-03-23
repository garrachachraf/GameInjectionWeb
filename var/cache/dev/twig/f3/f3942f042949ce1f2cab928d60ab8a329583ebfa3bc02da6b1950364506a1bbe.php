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
        $__internal_ea3bef0733e5dbd9dd4d135b30fc454f52e19c3624ea54bba7f56a2a29b2c4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3bef0733e5dbd9dd4d135b30fc454f52e19c3624ea54bba7f56a2a29b2c4b4->enter($__internal_ea3bef0733e5dbd9dd4d135b30fc454f52e19c3624ea54bba7f56a2a29b2c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_d6d478e403c817f3f055db959e6f3f7bf9977fd7a1fc4a31f1349e0ebd91fcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d478e403c817f3f055db959e6f3f7bf9977fd7a1fc4a31f1349e0ebd91fcbf->enter($__internal_d6d478e403c817f3f055db959e6f3f7bf9977fd7a1fc4a31f1349e0ebd91fcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_ea3bef0733e5dbd9dd4d135b30fc454f52e19c3624ea54bba7f56a2a29b2c4b4->leave($__internal_ea3bef0733e5dbd9dd4d135b30fc454f52e19c3624ea54bba7f56a2a29b2c4b4_prof);

        
        $__internal_d6d478e403c817f3f055db959e6f3f7bf9977fd7a1fc4a31f1349e0ebd91fcbf->leave($__internal_d6d478e403c817f3f055db959e6f3f7bf9977fd7a1fc4a31f1349e0ebd91fcbf_prof);

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
