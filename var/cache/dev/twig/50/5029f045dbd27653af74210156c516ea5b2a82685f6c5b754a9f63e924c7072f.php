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
        $__internal_ebebffef2803c6e0e52229d99ff2c32de882e22ceda840abedc4a31851cc32fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebebffef2803c6e0e52229d99ff2c32de882e22ceda840abedc4a31851cc32fc->enter($__internal_ebebffef2803c6e0e52229d99ff2c32de882e22ceda840abedc4a31851cc32fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

        $__internal_e37ba911f7c1a240ce54ec8cceeefbe7ec8e1cd0c23de46399a17d35935c6830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37ba911f7c1a240ce54ec8cceeefbe7ec8e1cd0c23de46399a17d35935c6830->enter($__internal_e37ba911f7c1a240ce54ec8cceeefbe7ec8e1cd0c23de46399a17d35935c6830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/index.html.twig"));

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
        
        $__internal_ebebffef2803c6e0e52229d99ff2c32de882e22ceda840abedc4a31851cc32fc->leave($__internal_ebebffef2803c6e0e52229d99ff2c32de882e22ceda840abedc4a31851cc32fc_prof);

        
        $__internal_e37ba911f7c1a240ce54ec8cceeefbe7ec8e1cd0c23de46399a17d35935c6830->leave($__internal_e37ba911f7c1a240ce54ec8cceeefbe7ec8e1cd0c23de46399a17d35935c6830_prof);

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
