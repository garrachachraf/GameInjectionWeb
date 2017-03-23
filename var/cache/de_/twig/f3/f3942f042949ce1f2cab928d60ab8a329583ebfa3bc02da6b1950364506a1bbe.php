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
        $__internal_0aa125dcea3aafa0f04a8c314223d6dbc55c042eacc657edb5990e3e8ca4ef8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa125dcea3aafa0f04a8c314223d6dbc55c042eacc657edb5990e3e8ca4ef8e->enter($__internal_0aa125dcea3aafa0f04a8c314223d6dbc55c042eacc657edb5990e3e8ca4ef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_78b9ec03b2b5e3c5af04b56090a14394cf539f98945d4d65d73fee09d74524de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b9ec03b2b5e3c5af04b56090a14394cf539f98945d4d65d73fee09d74524de->enter($__internal_78b9ec03b2b5e3c5af04b56090a14394cf539f98945d4d65d73fee09d74524de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_0aa125dcea3aafa0f04a8c314223d6dbc55c042eacc657edb5990e3e8ca4ef8e->leave($__internal_0aa125dcea3aafa0f04a8c314223d6dbc55c042eacc657edb5990e3e8ca4ef8e_prof);

        
        $__internal_78b9ec03b2b5e3c5af04b56090a14394cf539f98945d4d65d73fee09d74524de->leave($__internal_78b9ec03b2b5e3c5af04b56090a14394cf539f98945d4d65d73fee09d74524de_prof);

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
