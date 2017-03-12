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
        $__internal_38dd3da790a678e0a1eced09de4e8d64e501d7f2e1b94215e050f247b7c68209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38dd3da790a678e0a1eced09de4e8d64e501d7f2e1b94215e050f247b7c68209->enter($__internal_38dd3da790a678e0a1eced09de4e8d64e501d7f2e1b94215e050f247b7c68209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_743727427e4b538d575f67e85ea3ce93ec611fdbc955e0bf8efacbd24e27fd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743727427e4b538d575f67e85ea3ce93ec611fdbc955e0bf8efacbd24e27fd94->enter($__internal_743727427e4b538d575f67e85ea3ce93ec611fdbc955e0bf8efacbd24e27fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " :<br>
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["token_storage"]) ? $context["token_storage"] : $this->getContext($context, "token_storage")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateDeNaissance", array())), "html", null, true);
        echo "
<br>
<img alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" height=\"100px\" width=\"100px\" />";
        
        $__internal_38dd3da790a678e0a1eced09de4e8d64e501d7f2e1b94215e050f247b7c68209->leave($__internal_38dd3da790a678e0a1eced09de4e8d64e501d7f2e1b94215e050f247b7c68209_prof);

        
        $__internal_743727427e4b538d575f67e85ea3ce93ec611fdbc955e0bf8efacbd24e27fd94->leave($__internal_743727427e4b538d575f67e85ea3ce93ec611fdbc955e0bf8efacbd24e27fd94_prof);

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
        return array (  39 => 5,  34 => 3,  30 => 2,  25 => 1,);
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
{{ token_storage.user.username }}
{{ user.dateDeNaissance | date }}
<br>
<img alt=\"Embedded Image\" src=\"data:image/png;base64,{{ user.image }}\" height=\"100px\" width=\"100px\" />", "EloboostedGameinjectionBundle:Default:index.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/GameinjectionBundle/Resources/views/Default/index.html.twig");
    }
}
