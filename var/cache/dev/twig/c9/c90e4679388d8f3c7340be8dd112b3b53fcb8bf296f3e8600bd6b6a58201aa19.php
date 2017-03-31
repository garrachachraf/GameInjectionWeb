<?php

/* @EloboostedGameinjection/Default/index.html.twig */
class __TwigTemplate_3ddf498a72e71e2c6b69e8a7be2ee6dfeaa6443fe842f86d454e17714c190529 extends Twig_Template
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
        $__internal_de7485333ef0b13024f37067f1c55b68e5e0234cdc8c1b8ea80140cc1a847966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7485333ef0b13024f37067f1c55b68e5e0234cdc8c1b8ea80140cc1a847966->enter($__internal_de7485333ef0b13024f37067f1c55b68e5e0234cdc8c1b8ea80140cc1a847966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

        $__internal_4b8fdbb5011ca90fe0b45ebc5302f32929d8ec6522553ae4a67f49188dfd3235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8fdbb5011ca90fe0b45ebc5302f32929d8ec6522553ae4a67f49188dfd3235->enter($__internal_4b8fdbb5011ca90fe0b45ebc5302f32929d8ec6522553ae4a67f49188dfd3235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedGameinjection/Default/index.html.twig"));

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
        
        $__internal_de7485333ef0b13024f37067f1c55b68e5e0234cdc8c1b8ea80140cc1a847966->leave($__internal_de7485333ef0b13024f37067f1c55b68e5e0234cdc8c1b8ea80140cc1a847966_prof);

        
        $__internal_4b8fdbb5011ca90fe0b45ebc5302f32929d8ec6522553ae4a67f49188dfd3235->leave($__internal_4b8fdbb5011ca90fe0b45ebc5302f32929d8ec6522553ae4a67f49188dfd3235_prof);

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
