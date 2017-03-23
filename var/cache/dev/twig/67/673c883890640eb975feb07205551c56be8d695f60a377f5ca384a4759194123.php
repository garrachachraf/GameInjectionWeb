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
        $__internal_353ec44603ef8314cce4750e9f5c527c11a4b8af668b49109fe6e199cfcab225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353ec44603ef8314cce4750e9f5c527c11a4b8af668b49109fe6e199cfcab225->enter($__internal_353ec44603ef8314cce4750e9f5c527c11a4b8af668b49109fe6e199cfcab225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_d6a70e41afffec32302adc28827d353ff70feb857d951d9329b2d36d62ae8f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a70e41afffec32302adc28827d353ff70feb857d951d9329b2d36d62ae8f20->enter($__internal_d6a70e41afffec32302adc28827d353ff70feb857d951d9329b2d36d62ae8f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_353ec44603ef8314cce4750e9f5c527c11a4b8af668b49109fe6e199cfcab225->leave($__internal_353ec44603ef8314cce4750e9f5c527c11a4b8af668b49109fe6e199cfcab225_prof);

        
        $__internal_d6a70e41afffec32302adc28827d353ff70feb857d951d9329b2d36d62ae8f20->leave($__internal_d6a70e41afffec32302adc28827d353ff70feb857d951d9329b2d36d62ae8f20_prof);

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
