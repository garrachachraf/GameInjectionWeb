<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_e2c3076928afe487009cddf8ec2f1e04d1606d803555339b6aa0758eef5dd84f extends Twig_Template
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
        $__internal_6f269d743f384a9f016ad1adfde86c46cffe61f20eb36704802af9d7c0ab8ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f269d743f384a9f016ad1adfde86c46cffe61f20eb36704802af9d7c0ab8ad2->enter($__internal_6f269d743f384a9f016ad1adfde86c46cffe61f20eb36704802af9d7c0ab8ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_6a07cf3ee4c06165a87a0696776c37b53d6e6e9813cc3d7fcd293a7f6fc9b077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a07cf3ee4c06165a87a0696776c37b53d6e6e9813cc3d7fcd293a7f6fc9b077->enter($__internal_6a07cf3ee4c06165a87a0696776c37b53d6e6e9813cc3d7fcd293a7f6fc9b077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_6f269d743f384a9f016ad1adfde86c46cffe61f20eb36704802af9d7c0ab8ad2->leave($__internal_6f269d743f384a9f016ad1adfde86c46cffe61f20eb36704802af9d7c0ab8ad2_prof);

        
        $__internal_6a07cf3ee4c06165a87a0696776c37b53d6e6e9813cc3d7fcd293a7f6fc9b077->leave($__internal_6a07cf3ee4c06165a87a0696776c37b53d6e6e9813cc3d7fcd293a7f6fc9b077_prof);

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
