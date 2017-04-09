<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_7aa27bd30952947aed25802fb3078e9567894cc10071d23b37dd07697a8349fc extends Twig_Template
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
        $__internal_85575b2874fab6dace831ce0324e9a704aeb7a6106f073ad78e4c581d4d736e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85575b2874fab6dace831ce0324e9a704aeb7a6106f073ad78e4c581d4d736e2->enter($__internal_85575b2874fab6dace831ce0324e9a704aeb7a6106f073ad78e4c581d4d736e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_e93b61f126cc5423f245d1ce55bd92b1c25530d54959b23d890881e00e1904a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93b61f126cc5423f245d1ce55bd92b1c25530d54959b23d890881e00e1904a2->enter($__internal_e93b61f126cc5423f245d1ce55bd92b1c25530d54959b23d890881e00e1904a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_85575b2874fab6dace831ce0324e9a704aeb7a6106f073ad78e4c581d4d736e2->leave($__internal_85575b2874fab6dace831ce0324e9a704aeb7a6106f073ad78e4c581d4d736e2_prof);

        
        $__internal_e93b61f126cc5423f245d1ce55bd92b1c25530d54959b23d890881e00e1904a2->leave($__internal_e93b61f126cc5423f245d1ce55bd92b1c25530d54959b23d890881e00e1904a2_prof);

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
", "@EloboostedGameinjection/Default/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\GameinjectionBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
