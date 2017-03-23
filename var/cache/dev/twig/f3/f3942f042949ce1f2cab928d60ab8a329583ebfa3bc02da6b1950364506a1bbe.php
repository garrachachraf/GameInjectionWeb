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
        $__internal_f426fbc9f1ad1859f769398644e764e0de06ba168a31c858e5517876f8c9bd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f426fbc9f1ad1859f769398644e764e0de06ba168a31c858e5517876f8c9bd5a->enter($__internal_f426fbc9f1ad1859f769398644e764e0de06ba168a31c858e5517876f8c9bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_582efda05277a4a30f65d119b4c467198cc3213e8e9b5bf73329fead53f3a16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582efda05277a4a30f65d119b4c467198cc3213e8e9b5bf73329fead53f3a16a->enter($__internal_582efda05277a4a30f65d119b4c467198cc3213e8e9b5bf73329fead53f3a16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_f426fbc9f1ad1859f769398644e764e0de06ba168a31c858e5517876f8c9bd5a->leave($__internal_f426fbc9f1ad1859f769398644e764e0de06ba168a31c858e5517876f8c9bd5a_prof);

        
        $__internal_582efda05277a4a30f65d119b4c467198cc3213e8e9b5bf73329fead53f3a16a->leave($__internal_582efda05277a4a30f65d119b4c467198cc3213e8e9b5bf73329fead53f3a16a_prof);

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
