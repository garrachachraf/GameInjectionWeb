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
        $__internal_d0bfafc88123b90bdd71b4a8c7b07de1e02fbe972aa8538235b59003a7442508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bfafc88123b90bdd71b4a8c7b07de1e02fbe972aa8538235b59003a7442508->enter($__internal_d0bfafc88123b90bdd71b4a8c7b07de1e02fbe972aa8538235b59003a7442508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_d600b3e422a39e1ae6346c7c1a9350f9e7437c20dd749be221711236248b7643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d600b3e422a39e1ae6346c7c1a9350f9e7437c20dd749be221711236248b7643->enter($__internal_d600b3e422a39e1ae6346c7c1a9350f9e7437c20dd749be221711236248b7643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_d0bfafc88123b90bdd71b4a8c7b07de1e02fbe972aa8538235b59003a7442508->leave($__internal_d0bfafc88123b90bdd71b4a8c7b07de1e02fbe972aa8538235b59003a7442508_prof);

        
        $__internal_d600b3e422a39e1ae6346c7c1a9350f9e7437c20dd749be221711236248b7643->leave($__internal_d600b3e422a39e1ae6346c7c1a9350f9e7437c20dd749be221711236248b7643_prof);

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
