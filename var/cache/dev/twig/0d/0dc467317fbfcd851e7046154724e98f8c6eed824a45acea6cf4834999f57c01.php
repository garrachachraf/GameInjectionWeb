<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_8fbe134aea535a190eec2ed103d92d0e8cd147431d7d04cb42f45dd43ba711de extends Twig_Template
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
        $__internal_01b6e129f7518b9602017fe099c3ca036ac9e5d2b9163620e19477bb0b07df62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b6e129f7518b9602017fe099c3ca036ac9e5d2b9163620e19477bb0b07df62->enter($__internal_01b6e129f7518b9602017fe099c3ca036ac9e5d2b9163620e19477bb0b07df62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_fc70e66bb55fb2d491b1651d97beacf9fc71a9ec21a771f658c54156d15e0ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc70e66bb55fb2d491b1651d97beacf9fc71a9ec21a771f658c54156d15e0ff6->enter($__internal_fc70e66bb55fb2d491b1651d97beacf9fc71a9ec21a771f658c54156d15e0ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        // line 1
        if ((($context["user"] ?? $this->getContext($context, "user")) == null)) {
            // line 2
            echo "<h1>erreur</h1>

";
        } else {
            // line 5
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        
        $__internal_01b6e129f7518b9602017fe099c3ca036ac9e5d2b9163620e19477bb0b07df62->leave($__internal_01b6e129f7518b9602017fe099c3ca036ac9e5d2b9163620e19477bb0b07df62_prof);

        
        $__internal_fc70e66bb55fb2d491b1651d97beacf9fc71a9ec21a771f658c54156d15e0ff6->leave($__internal_fc70e66bb55fb2d491b1651d97beacf9fc71a9ec21a771f658c54156d15e0ff6_prof);

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
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/LoginBundle/Resources/views/Default/index.html.twig");
    }
}
