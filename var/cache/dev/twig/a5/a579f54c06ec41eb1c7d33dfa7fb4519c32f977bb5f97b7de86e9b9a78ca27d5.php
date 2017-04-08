<?php

/* @EloboostedLogin/Default/index.html.twig */
class __TwigTemplate_9f23d78c6e47988e9ffce90a3fa0ef3793996cdca3cb36aca718915a128dc613 extends Twig_Template
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
        $__internal_f810f2229df6e55c5ddd3427567954ee9670ea144492f933fc3b9c227aaee1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f810f2229df6e55c5ddd3427567954ee9670ea144492f933fc3b9c227aaee1cb->enter($__internal_f810f2229df6e55c5ddd3427567954ee9670ea144492f933fc3b9c227aaee1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_e0bc9eb538c55a75a721660affd7b3ef874fff413549ba61ee4956cf4e142af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bc9eb538c55a75a721660affd7b3ef874fff413549ba61ee4956cf4e142af3->enter($__internal_e0bc9eb538c55a75a721660affd7b3ef874fff413549ba61ee4956cf4e142af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_f810f2229df6e55c5ddd3427567954ee9670ea144492f933fc3b9c227aaee1cb->leave($__internal_f810f2229df6e55c5ddd3427567954ee9670ea144492f933fc3b9c227aaee1cb_prof);

        
        $__internal_e0bc9eb538c55a75a721660affd7b3ef874fff413549ba61ee4956cf4e142af3->leave($__internal_e0bc9eb538c55a75a721660affd7b3ef874fff413549ba61ee4956cf4e142af3_prof);

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
{% endif %}", "@EloboostedLogin/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
