<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_d0065776d954664ff10ba541937674854feb6901b332d5237c9afb526154a433 extends Twig_Template
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
        $__internal_9094c174d12c27ed52e8d37bb3c4adb226195a55d85331e253cf46f96bb53ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9094c174d12c27ed52e8d37bb3c4adb226195a55d85331e253cf46f96bb53ab2->enter($__internal_9094c174d12c27ed52e8d37bb3c4adb226195a55d85331e253cf46f96bb53ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_7a3e39e8b6b193a3aaa76780294bbaf42ec54e3df9ed29cbe203a65db9b7d647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3e39e8b6b193a3aaa76780294bbaf42ec54e3df9ed29cbe203a65db9b7d647->enter($__internal_7a3e39e8b6b193a3aaa76780294bbaf42ec54e3df9ed29cbe203a65db9b7d647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_9094c174d12c27ed52e8d37bb3c4adb226195a55d85331e253cf46f96bb53ab2->leave($__internal_9094c174d12c27ed52e8d37bb3c4adb226195a55d85331e253cf46f96bb53ab2_prof);

        
        $__internal_7a3e39e8b6b193a3aaa76780294bbaf42ec54e3df9ed29cbe203a65db9b7d647->leave($__internal_7a3e39e8b6b193a3aaa76780294bbaf42ec54e3df9ed29cbe203a65db9b7d647_prof);

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
