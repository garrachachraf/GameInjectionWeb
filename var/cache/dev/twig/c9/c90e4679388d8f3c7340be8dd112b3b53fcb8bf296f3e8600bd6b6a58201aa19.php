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
        $__internal_e9a1062982e450d5866bb707ced282394741cb1dcc54663ce054ea8a78a98e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a1062982e450d5866bb707ced282394741cb1dcc54663ce054ea8a78a98e47->enter($__internal_e9a1062982e450d5866bb707ced282394741cb1dcc54663ce054ea8a78a98e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_0274f8b943200346610c31495be96f2711631ba93a335669ff82785a923e76da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0274f8b943200346610c31495be96f2711631ba93a335669ff82785a923e76da->enter($__internal_0274f8b943200346610c31495be96f2711631ba93a335669ff82785a923e76da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_e9a1062982e450d5866bb707ced282394741cb1dcc54663ce054ea8a78a98e47->leave($__internal_e9a1062982e450d5866bb707ced282394741cb1dcc54663ce054ea8a78a98e47_prof);

        
        $__internal_0274f8b943200346610c31495be96f2711631ba93a335669ff82785a923e76da->leave($__internal_0274f8b943200346610c31495be96f2711631ba93a335669ff82785a923e76da_prof);

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
