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
        $__internal_9870bc2339d57864a841c0964722503a892bd2ca42d4962c415570540a97f65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9870bc2339d57864a841c0964722503a892bd2ca42d4962c415570540a97f65f->enter($__internal_9870bc2339d57864a841c0964722503a892bd2ca42d4962c415570540a97f65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_430bbb040ab697062d2eb6e6ede360b1aa48bbe0b3dee9cfaa3d7502c0e1bc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430bbb040ab697062d2eb6e6ede360b1aa48bbe0b3dee9cfaa3d7502c0e1bc6f->enter($__internal_430bbb040ab697062d2eb6e6ede360b1aa48bbe0b3dee9cfaa3d7502c0e1bc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_9870bc2339d57864a841c0964722503a892bd2ca42d4962c415570540a97f65f->leave($__internal_9870bc2339d57864a841c0964722503a892bd2ca42d4962c415570540a97f65f_prof);

        
        $__internal_430bbb040ab697062d2eb6e6ede360b1aa48bbe0b3dee9cfaa3d7502c0e1bc6f->leave($__internal_430bbb040ab697062d2eb6e6ede360b1aa48bbe0b3dee9cfaa3d7502c0e1bc6f_prof);

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
