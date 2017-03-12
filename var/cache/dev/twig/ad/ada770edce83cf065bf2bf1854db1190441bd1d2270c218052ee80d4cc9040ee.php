<?php

/* EloboostedGameinjectionBundle:Default:index.html.twig */
class __TwigTemplate_7d73241659678e0d5283bb4d343d20aae443807a5c187b18dc51e567aa930152 extends Twig_Template
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
        $__internal_c177c14cc69b871366ef55526edf4a7c06106b10c02e7c005eb9574d0a441930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c177c14cc69b871366ef55526edf4a7c06106b10c02e7c005eb9574d0a441930->enter($__internal_c177c14cc69b871366ef55526edf4a7c06106b10c02e7c005eb9574d0a441930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_65615fdad4edc1f36f03bcb2d158e42ef544d2c10e64d862360259404d2112b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65615fdad4edc1f36f03bcb2d158e42ef544d2c10e64d862360259404d2112b1->enter($__internal_65615fdad4edc1f36f03bcb2d158e42ef544d2c10e64d862360259404d2112b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>

";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        echo "
<br>
<img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" height=\"100px\" width=\"100px\" />";
        
        $__internal_c177c14cc69b871366ef55526edf4a7c06106b10c02e7c005eb9574d0a441930->leave($__internal_c177c14cc69b871366ef55526edf4a7c06106b10c02e7c005eb9574d0a441930_prof);

        
        $__internal_65615fdad4edc1f36f03bcb2d158e42ef544d2c10e64d862360259404d2112b1->leave($__internal_65615fdad4edc1f36f03bcb2d158e42ef544d2c10e64d862360259404d2112b1_prof);

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
        return array (  36 => 5,  31 => 3,  25 => 1,);
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
<img alt=\"Embedded Image\" src=\"data:image/png;base64,{{ user.image }}\" height=\"100px\" width=\"100px\" />", "EloboostedGameinjectionBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
