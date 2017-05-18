<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_6d2d7c43caeff213ef650004bbb905374dc5d5fb2c959ea2c4d3685b8a6f2e0a extends Twig_Template
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
        $__internal_34606312f2aec7c07f3e68c6036e901401dff6eed2c9616c3a53ef20d7e028e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34606312f2aec7c07f3e68c6036e901401dff6eed2c9616c3a53ef20d7e028e3->enter($__internal_34606312f2aec7c07f3e68c6036e901401dff6eed2c9616c3a53ef20d7e028e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_4b059b72457805aa743bb1eb6bf903a6381cf90dfb03cd2e5ad8c57c3af0419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b059b72457805aa743bb1eb6bf903a6381cf90dfb03cd2e5ad8c57c3af0419d->enter($__internal_4b059b72457805aa743bb1eb6bf903a6381cf90dfb03cd2e5ad8c57c3af0419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>

";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        echo "
<br>
";
        
        $__internal_34606312f2aec7c07f3e68c6036e901401dff6eed2c9616c3a53ef20d7e028e3->leave($__internal_34606312f2aec7c07f3e68c6036e901401dff6eed2c9616c3a53ef20d7e028e3_prof);

        
        $__internal_4b059b72457805aa743bb1eb6bf903a6381cf90dfb03cd2e5ad8c57c3af0419d->leave($__internal_4b059b72457805aa743bb1eb6bf903a6381cf90dfb03cd2e5ad8c57c3af0419d_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedGameinjectionBundle:Default:index.html.twig";
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
", "EloboostedGameinjectionBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
