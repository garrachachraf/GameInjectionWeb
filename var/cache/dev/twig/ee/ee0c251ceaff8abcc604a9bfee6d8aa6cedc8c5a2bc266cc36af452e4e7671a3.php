<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_7aa27bd30952947aed25802fb3078e9567894cc10071d23b37dd07697a8349fc extends Twig_Template
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
        $__internal_b744dff0518a4eabbacd3a5f857a61b3bf66c2c387dfe467a11a848ff697e313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b744dff0518a4eabbacd3a5f857a61b3bf66c2c387dfe467a11a848ff697e313->enter($__internal_b744dff0518a4eabbacd3a5f857a61b3bf66c2c387dfe467a11a848ff697e313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_e39f92fe80130765366a368d4e301fadc7e6148f369d08d98bab1cf729cb0630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39f92fe80130765366a368d4e301fadc7e6148f369d08d98bab1cf729cb0630->enter($__internal_e39f92fe80130765366a368d4e301fadc7e6148f369d08d98bab1cf729cb0630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_b744dff0518a4eabbacd3a5f857a61b3bf66c2c387dfe467a11a848ff697e313->leave($__internal_b744dff0518a4eabbacd3a5f857a61b3bf66c2c387dfe467a11a848ff697e313_prof);

        
        $__internal_e39f92fe80130765366a368d4e301fadc7e6148f369d08d98bab1cf729cb0630->leave($__internal_e39f92fe80130765366a368d4e301fadc7e6148f369d08d98bab1cf729cb0630_prof);

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
", "@EloboostedGameinjection/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\GameinjectionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
