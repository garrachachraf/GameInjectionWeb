<?php

/* @EloboostedLogin/Default/index.html.twig */
class __TwigTemplate_bdd64e52fc263226e6e1b539021359ac786014fc3766d3c69b047a9e69e134a8 extends Twig_Template
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
        $__internal_036923f762ab9536c3e2a4c3411e2e9fc87851b939fde44d142b678d8de24ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036923f762ab9536c3e2a4c3411e2e9fc87851b939fde44d142b678d8de24ac0->enter($__internal_036923f762ab9536c3e2a4c3411e2e9fc87851b939fde44d142b678d8de24ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_fc9cc19237c15bb4a08281e710517fa838d67371d93168dbde79c0d1920da935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9cc19237c15bb4a08281e710517fa838d67371d93168dbde79c0d1920da935->enter($__internal_fc9cc19237c15bb4a08281e710517fa838d67371d93168dbde79c0d1920da935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_036923f762ab9536c3e2a4c3411e2e9fc87851b939fde44d142b678d8de24ac0->leave($__internal_036923f762ab9536c3e2a4c3411e2e9fc87851b939fde44d142b678d8de24ac0_prof);

        
        $__internal_fc9cc19237c15bb4a08281e710517fa838d67371d93168dbde79c0d1920da935->leave($__internal_fc9cc19237c15bb4a08281e710517fa838d67371d93168dbde79c0d1920da935_prof);

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
