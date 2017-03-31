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
        $__internal_60765268f4e4a4fbbc1ea1a9e5ea672e5e19ae65e5a1229ced9dba1c628ad532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60765268f4e4a4fbbc1ea1a9e5ea672e5e19ae65e5a1229ced9dba1c628ad532->enter($__internal_60765268f4e4a4fbbc1ea1a9e5ea672e5e19ae65e5a1229ced9dba1c628ad532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

        $__internal_1e432b40c62703fbf373875e53bfbf2c5c44a3bb67ccd6fa4450525008be83d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e432b40c62703fbf373875e53bfbf2c5c44a3bb67ccd6fa4450525008be83d5->enter($__internal_1e432b40c62703fbf373875e53bfbf2c5c44a3bb67ccd6fa4450525008be83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedGameinjectionBundle:Default:index.html.twig"));

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
        
        $__internal_60765268f4e4a4fbbc1ea1a9e5ea672e5e19ae65e5a1229ced9dba1c628ad532->leave($__internal_60765268f4e4a4fbbc1ea1a9e5ea672e5e19ae65e5a1229ced9dba1c628ad532_prof);

        
        $__internal_1e432b40c62703fbf373875e53bfbf2c5c44a3bb67ccd6fa4450525008be83d5->leave($__internal_1e432b40c62703fbf373875e53bfbf2c5c44a3bb67ccd6fa4450525008be83d5_prof);

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
