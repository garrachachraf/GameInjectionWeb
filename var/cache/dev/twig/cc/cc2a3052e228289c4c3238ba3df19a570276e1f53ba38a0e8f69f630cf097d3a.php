<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_5ebf36c2e609b473d4182fd953017acef124d32872cdd21792f82a0328749e6f extends Twig_Template
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
        $__internal_c65af3226fb6b95703901dba8e91cf319e00d9c9661dc9630d03eeb787b8a7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65af3226fb6b95703901dba8e91cf319e00d9c9661dc9630d03eeb787b8a7a2->enter($__internal_c65af3226fb6b95703901dba8e91cf319e00d9c9661dc9630d03eeb787b8a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_d76158f7ba01c235bf84da58de4134eb4cb9b17834922b9cb9c295dc8062098d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76158f7ba01c235bf84da58de4134eb4cb9b17834922b9cb9c295dc8062098d->enter($__internal_d76158f7ba01c235bf84da58de4134eb4cb9b17834922b9cb9c295dc8062098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_c65af3226fb6b95703901dba8e91cf319e00d9c9661dc9630d03eeb787b8a7a2->leave($__internal_c65af3226fb6b95703901dba8e91cf319e00d9c9661dc9630d03eeb787b8a7a2_prof);

        
        $__internal_d76158f7ba01c235bf84da58de4134eb4cb9b17834922b9cb9c295dc8062098d->leave($__internal_d76158f7ba01c235bf84da58de4134eb4cb9b17834922b9cb9c295dc8062098d_prof);

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
", "EloboostedGameinjectionBundle:Default:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
