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
        $__internal_ad5595a2fba70cc0d1b87a06d886db350b61e5119a4f19c4d38692d270ee8cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5595a2fba70cc0d1b87a06d886db350b61e5119a4f19c4d38692d270ee8cbe->enter($__internal_ad5595a2fba70cc0d1b87a06d886db350b61e5119a4f19c4d38692d270ee8cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_03ca54cf2894867bd9dd9a8260bd79e01162b4fa958c833349f1f25619fd96ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ca54cf2894867bd9dd9a8260bd79e01162b4fa958c833349f1f25619fd96ee->enter($__internal_03ca54cf2894867bd9dd9a8260bd79e01162b4fa958c833349f1f25619fd96ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_ad5595a2fba70cc0d1b87a06d886db350b61e5119a4f19c4d38692d270ee8cbe->leave($__internal_ad5595a2fba70cc0d1b87a06d886db350b61e5119a4f19c4d38692d270ee8cbe_prof);

        
        $__internal_03ca54cf2894867bd9dd9a8260bd79e01162b4fa958c833349f1f25619fd96ee->leave($__internal_03ca54cf2894867bd9dd9a8260bd79e01162b4fa958c833349f1f25619fd96ee_prof);

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
