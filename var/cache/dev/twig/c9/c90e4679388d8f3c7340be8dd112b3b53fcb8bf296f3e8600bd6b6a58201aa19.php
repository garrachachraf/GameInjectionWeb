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
        $__internal_53b3c614ce0aa104e7c6eaef4c8b95e8dd2ba41db1418c4447bac5e0892a02f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b3c614ce0aa104e7c6eaef4c8b95e8dd2ba41db1418c4447bac5e0892a02f4->enter($__internal_53b3c614ce0aa104e7c6eaef4c8b95e8dd2ba41db1418c4447bac5e0892a02f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_1aae378af12db814242bd4bea1ce81dd43ef8444a7fb49d16f64e8a8b1924c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aae378af12db814242bd4bea1ce81dd43ef8444a7fb49d16f64e8a8b1924c1b->enter($__internal_1aae378af12db814242bd4bea1ce81dd43ef8444a7fb49d16f64e8a8b1924c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_53b3c614ce0aa104e7c6eaef4c8b95e8dd2ba41db1418c4447bac5e0892a02f4->leave($__internal_53b3c614ce0aa104e7c6eaef4c8b95e8dd2ba41db1418c4447bac5e0892a02f4_prof);

        
        $__internal_1aae378af12db814242bd4bea1ce81dd43ef8444a7fb49d16f64e8a8b1924c1b->leave($__internal_1aae378af12db814242bd4bea1ce81dd43ef8444a7fb49d16f64e8a8b1924c1b_prof);

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
