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
        $__internal_f0d489921100fed42ef3f26d04f81f49d69675ef017169a5e3d18543a0bd2d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d489921100fed42ef3f26d04f81f49d69675ef017169a5e3d18543a0bd2d4b->enter($__internal_f0d489921100fed42ef3f26d04f81f49d69675ef017169a5e3d18543a0bd2d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_5841fc5ccb52e0cbcf5329865e581781dd4bf9e4a620145ab826aac50321c511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5841fc5ccb52e0cbcf5329865e581781dd4bf9e4a620145ab826aac50321c511->enter($__internal_5841fc5ccb52e0cbcf5329865e581781dd4bf9e4a620145ab826aac50321c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_f0d489921100fed42ef3f26d04f81f49d69675ef017169a5e3d18543a0bd2d4b->leave($__internal_f0d489921100fed42ef3f26d04f81f49d69675ef017169a5e3d18543a0bd2d4b_prof);

        
        $__internal_5841fc5ccb52e0cbcf5329865e581781dd4bf9e4a620145ab826aac50321c511->leave($__internal_5841fc5ccb52e0cbcf5329865e581781dd4bf9e4a620145ab826aac50321c511_prof);

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
