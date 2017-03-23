<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_0ef4eb70384354ac1877f0409038e6699cc7d178b57d4cf702022b53c2fc9c5c extends Twig_Template
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
        $__internal_81096c2c6dae73bb59fb6054476d4881adf7569199dc05a3193828faf485ee63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81096c2c6dae73bb59fb6054476d4881adf7569199dc05a3193828faf485ee63->enter($__internal_81096c2c6dae73bb59fb6054476d4881adf7569199dc05a3193828faf485ee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_f4bde4c869c05dea21f5cdd41add05054bd55d56ee053e0724d24f1f81b0f95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bde4c869c05dea21f5cdd41add05054bd55d56ee053e0724d24f1f81b0f95a->enter($__internal_f4bde4c869c05dea21f5cdd41add05054bd55d56ee053e0724d24f1f81b0f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_81096c2c6dae73bb59fb6054476d4881adf7569199dc05a3193828faf485ee63->leave($__internal_81096c2c6dae73bb59fb6054476d4881adf7569199dc05a3193828faf485ee63_prof);

        
        $__internal_f4bde4c869c05dea21f5cdd41add05054bd55d56ee053e0724d24f1f81b0f95a->leave($__internal_f4bde4c869c05dea21f5cdd41add05054bd55d56ee053e0724d24f1f81b0f95a_prof);

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
", "EloboostedGameinjectionBundle:Default:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
