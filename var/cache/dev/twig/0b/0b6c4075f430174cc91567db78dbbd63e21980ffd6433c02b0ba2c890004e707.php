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
        $__internal_fd8b8f6ac02cdcffdd8790ab949833a515250cd278227eb9236e5618a08c1705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8b8f6ac02cdcffdd8790ab949833a515250cd278227eb9236e5618a08c1705->enter($__internal_fd8b8f6ac02cdcffdd8790ab949833a515250cd278227eb9236e5618a08c1705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_86cf4ba2806194e2937b16cebe236458f3a3b5081728f37b25512abb2e875317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cf4ba2806194e2937b16cebe236458f3a3b5081728f37b25512abb2e875317->enter($__internal_86cf4ba2806194e2937b16cebe236458f3a3b5081728f37b25512abb2e875317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_fd8b8f6ac02cdcffdd8790ab949833a515250cd278227eb9236e5618a08c1705->leave($__internal_fd8b8f6ac02cdcffdd8790ab949833a515250cd278227eb9236e5618a08c1705_prof);

        
        $__internal_86cf4ba2806194e2937b16cebe236458f3a3b5081728f37b25512abb2e875317->leave($__internal_86cf4ba2806194e2937b16cebe236458f3a3b5081728f37b25512abb2e875317_prof);

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
