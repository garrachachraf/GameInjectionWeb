<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_1097dd515e405055e0f6752555c3789115100414feb74ab60a5d8fda49f5f5fe extends Twig_Template
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
        $__internal_38b53ace1543c70a0b89dd47830d049ef6b9c9a445587d0461281f65cd2ccff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b53ace1543c70a0b89dd47830d049ef6b9c9a445587d0461281f65cd2ccff6->enter($__internal_38b53ace1543c70a0b89dd47830d049ef6b9c9a445587d0461281f65cd2ccff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_b36a48f4b6240f9d3b2a33c1590173b696dcb941e12a1d316dececf14585fa66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36a48f4b6240f9d3b2a33c1590173b696dcb941e12a1d316dececf14585fa66->enter($__internal_b36a48f4b6240f9d3b2a33c1590173b696dcb941e12a1d316dececf14585fa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_38b53ace1543c70a0b89dd47830d049ef6b9c9a445587d0461281f65cd2ccff6->leave($__internal_38b53ace1543c70a0b89dd47830d049ef6b9c9a445587d0461281f65cd2ccff6_prof);

        
        $__internal_b36a48f4b6240f9d3b2a33c1590173b696dcb941e12a1d316dececf14585fa66->leave($__internal_b36a48f4b6240f9d3b2a33c1590173b696dcb941e12a1d316dececf14585fa66_prof);

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