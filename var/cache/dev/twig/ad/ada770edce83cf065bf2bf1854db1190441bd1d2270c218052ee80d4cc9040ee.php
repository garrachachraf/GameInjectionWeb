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
        $__internal_e620c3e4b6e08f789f756c5ff8b0c32822b95dfa76dd03e3370881d30cc32a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e620c3e4b6e08f789f756c5ff8b0c32822b95dfa76dd03e3370881d30cc32a3c->enter($__internal_e620c3e4b6e08f789f756c5ff8b0c32822b95dfa76dd03e3370881d30cc32a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_e3ab0fd2cd395f213cdc58880a5905971e64f0bd55fc126979c16abb689e69b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ab0fd2cd395f213cdc58880a5905971e64f0bd55fc126979c16abb689e69b9->enter($__internal_e3ab0fd2cd395f213cdc58880a5905971e64f0bd55fc126979c16abb689e69b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>

";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        
        $__internal_e620c3e4b6e08f789f756c5ff8b0c32822b95dfa76dd03e3370881d30cc32a3c->leave($__internal_e620c3e4b6e08f789f756c5ff8b0c32822b95dfa76dd03e3370881d30cc32a3c_prof);

        
        $__internal_e3ab0fd2cd395f213cdc58880a5905971e64f0bd55fc126979c16abb689e69b9->leave($__internal_e3ab0fd2cd395f213cdc58880a5905971e64f0bd55fc126979c16abb689e69b9_prof);

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

{{ user.dateDeNaissance | date }}", "EloboostedGameinjectionBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
