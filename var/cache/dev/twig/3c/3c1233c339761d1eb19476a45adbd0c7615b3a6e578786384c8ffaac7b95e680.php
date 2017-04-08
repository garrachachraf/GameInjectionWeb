<?php

/* EloboostedLoginBundle:Default:index.html.twig */
class __TwigTemplate_7d2891a051b6c059005a9bf65771b55044effacc34ed1fedfbab6a587831b905 extends Twig_Template
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
        $__internal_193c5be4663366e7e6e7f18d0c063e632e404f423475cbbdcb54f476e60e7d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193c5be4663366e7e6e7f18d0c063e632e404f423475cbbdcb54f476e60e7d81->enter($__internal_193c5be4663366e7e6e7f18d0c063e632e404f423475cbbdcb54f476e60e7d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

        $__internal_a1acedbf47510e265de58014f54b68295d6babf3797d763a9219dbff25128718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1acedbf47510e265de58014f54b68295d6babf3797d763a9219dbff25128718->enter($__internal_a1acedbf47510e265de58014f54b68295d6babf3797d763a9219dbff25128718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:index.html.twig"));

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
        
        $__internal_193c5be4663366e7e6e7f18d0c063e632e404f423475cbbdcb54f476e60e7d81->leave($__internal_193c5be4663366e7e6e7f18d0c063e632e404f423475cbbdcb54f476e60e7d81_prof);

        
        $__internal_a1acedbf47510e265de58014f54b68295d6babf3797d763a9219dbff25128718->leave($__internal_a1acedbf47510e265de58014f54b68295d6babf3797d763a9219dbff25128718_prof);

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
{% endif %}", "EloboostedLoginBundle:Default:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle/Resources/views/Default/index.html.twig");
    }
}
