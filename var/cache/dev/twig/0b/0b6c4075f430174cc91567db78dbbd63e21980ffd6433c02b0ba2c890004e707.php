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
        $__internal_66326848f47373f3a53bdc9148134317050af99104c56a5d6b15e75fc3f6904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66326848f47373f3a53bdc9148134317050af99104c56a5d6b15e75fc3f6904e->enter($__internal_66326848f47373f3a53bdc9148134317050af99104c56a5d6b15e75fc3f6904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_7d1f455a7eb3e38565cfb5109767687077707dd7f86141729de10c35e2345f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1f455a7eb3e38565cfb5109767687077707dd7f86141729de10c35e2345f31->enter($__internal_7d1f455a7eb3e38565cfb5109767687077707dd7f86141729de10c35e2345f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_66326848f47373f3a53bdc9148134317050af99104c56a5d6b15e75fc3f6904e->leave($__internal_66326848f47373f3a53bdc9148134317050af99104c56a5d6b15e75fc3f6904e_prof);

        
        $__internal_7d1f455a7eb3e38565cfb5109767687077707dd7f86141729de10c35e2345f31->leave($__internal_7d1f455a7eb3e38565cfb5109767687077707dd7f86141729de10c35e2345f31_prof);

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
