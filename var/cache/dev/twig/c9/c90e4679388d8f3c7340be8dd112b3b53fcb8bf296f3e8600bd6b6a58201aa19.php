<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_3ddf498a72e71e2c6b69e8a7be2ee6dfeaa6443fe842f86d454e17714c190529 extends Twig_Template
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
        $__internal_1b06bf54cf9719c42a4483d4d4bfe3140f1e9037393ae3fe65e7c575cad9cf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b06bf54cf9719c42a4483d4d4bfe3140f1e9037393ae3fe65e7c575cad9cf3a->enter($__internal_1b06bf54cf9719c42a4483d4d4bfe3140f1e9037393ae3fe65e7c575cad9cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_d4cfe876e9a580009706e4a20734f91ef1da4bb88e97ca61e379fd478803bfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cfe876e9a580009706e4a20734f91ef1da4bb88e97ca61e379fd478803bfb5->enter($__internal_d4cfe876e9a580009706e4a20734f91ef1da4bb88e97ca61e379fd478803bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>

";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        echo "
<br>
";
        
        $__internal_1b06bf54cf9719c42a4483d4d4bfe3140f1e9037393ae3fe65e7c575cad9cf3a->leave($__internal_1b06bf54cf9719c42a4483d4d4bfe3140f1e9037393ae3fe65e7c575cad9cf3a_prof);

        
        $__internal_d4cfe876e9a580009706e4a20734f91ef1da4bb88e97ca61e379fd478803bfb5->leave($__internal_d4cfe876e9a580009706e4a20734f91ef1da4bb88e97ca61e379fd478803bfb5_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedGameinjection/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ user.username }} :<br>

{{ user.dateDeNaissance | date }}
<br>
", "@EloboostedGameinjection/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\GameinjectionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
