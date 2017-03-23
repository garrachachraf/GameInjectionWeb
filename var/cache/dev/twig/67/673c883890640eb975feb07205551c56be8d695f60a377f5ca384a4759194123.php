<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_d0065776d954664ff10ba541937674854feb6901b332d5237c9afb526154a433 extends Twig_Template
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
        $__internal_d13858b071830299101300f68627c9b7ac5a8ab9211e12a9fa0eeb06c2c13207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13858b071830299101300f68627c9b7ac5a8ab9211e12a9fa0eeb06c2c13207->enter($__internal_d13858b071830299101300f68627c9b7ac5a8ab9211e12a9fa0eeb06c2c13207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_5b5abbc46d4303f4b7a6c7a319b46318b8d13f6c4bc0a3c9d199254b7f508ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5abbc46d4303f4b7a6c7a319b46318b8d13f6c4bc0a3c9d199254b7f508ce6->enter($__internal_5b5abbc46d4303f4b7a6c7a319b46318b8d13f6c4bc0a3c9d199254b7f508ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_d13858b071830299101300f68627c9b7ac5a8ab9211e12a9fa0eeb06c2c13207->leave($__internal_d13858b071830299101300f68627c9b7ac5a8ab9211e12a9fa0eeb06c2c13207_prof);

        
        $__internal_5b5abbc46d4303f4b7a6c7a319b46318b8d13f6c4bc0a3c9d199254b7f508ce6->leave($__internal_5b5abbc46d4303f4b7a6c7a319b46318b8d13f6c4bc0a3c9d199254b7f508ce6_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedGameinjection/Default/index.html.twig";
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
", "@EloboostedGameinjection/Default/index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\GameinjectionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
