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
        $__internal_6fead151d53ca96c7bf8de8dcae872dd25cb6b5bba05d248c90e5073dd6e61bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fead151d53ca96c7bf8de8dcae872dd25cb6b5bba05d248c90e5073dd6e61bb->enter($__internal_6fead151d53ca96c7bf8de8dcae872dd25cb6b5bba05d248c90e5073dd6e61bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_8e4146b628498eb0ff601014a5b20244d2d0cfb6ecf395d94e9eb815da9244fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4146b628498eb0ff601014a5b20244d2d0cfb6ecf395d94e9eb815da9244fc->enter($__internal_8e4146b628498eb0ff601014a5b20244d2d0cfb6ecf395d94e9eb815da9244fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_6fead151d53ca96c7bf8de8dcae872dd25cb6b5bba05d248c90e5073dd6e61bb->leave($__internal_6fead151d53ca96c7bf8de8dcae872dd25cb6b5bba05d248c90e5073dd6e61bb_prof);

        
        $__internal_8e4146b628498eb0ff601014a5b20244d2d0cfb6ecf395d94e9eb815da9244fc->leave($__internal_8e4146b628498eb0ff601014a5b20244d2d0cfb6ecf395d94e9eb815da9244fc_prof);

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
