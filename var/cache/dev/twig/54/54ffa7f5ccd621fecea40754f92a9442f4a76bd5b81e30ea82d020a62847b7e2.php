<?php

/* @NomayaSocial/Links/socialLink.html.twig */
class __TwigTemplate_7e0760d40062e2300cebfb7a1b63a81971dfeb258a48595b6b1cdee7a25befea extends Twig_Template
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
        $__internal_4633ce1a844c51e2a8099d0906537ba07cfa04d9b6c4e101629749cb4832167a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4633ce1a844c51e2a8099d0906537ba07cfa04d9b6c4e101629749cb4832167a->enter($__internal_4633ce1a844c51e2a8099d0906537ba07cfa04d9b6c4e101629749cb4832167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLink.html.twig"));

        $__internal_e81100f6f07b68991d7ad985868c33d6eebfe4cda96d2985f3b0f6e7ee31acd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81100f6f07b68991d7ad985868c33d6eebfe4cda96d2985f3b0f6e7ee31acd1->enter($__internal_e81100f6f07b68991d7ad985868c33d6eebfe4cda96d2985f3b0f6e7ee31acd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLink.html.twig"));

        // line 1
        $context["img_src"] = (((("bundles/nomayasocial/images/" . (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme"))) . "/") . (isset($context["network"]) ? $context["network"] : $this->getContext($context, "network"))) . ".png");
        // line 2
        ob_start();
        // line 3
        echo " <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["network"]) ? $context["network"] : $this->getContext($context, "network")), "html", null, true);
        echo "-link col-xs-5\">
 \t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["img_src"]) ? $context["img_src"] : $this->getContext($context, "img_src"))), "html", null, true);
        echo "\" alt =\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" /></a>
 </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4633ce1a844c51e2a8099d0906537ba07cfa04d9b6c4e101629749cb4832167a->leave($__internal_4633ce1a844c51e2a8099d0906537ba07cfa04d9b6c4e101629749cb4832167a_prof);

        
        $__internal_e81100f6f07b68991d7ad985868c33d6eebfe4cda96d2985f3b0f6e7ee31acd1->leave($__internal_e81100f6f07b68991d7ad985868c33d6eebfe4cda96d2985f3b0f6e7ee31acd1_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Links/socialLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img_src = 'bundles/nomayasocial/images/' ~ theme ~ '/' ~ network ~ '.png' %}
{% spaceless %}
 <div class=\"{{ network }}-link col-xs-5\">
 \t<a href=\"{{ url }}\" target=\"_blank\" title=\"{{ url }}\"> <img src=\"{{ asset( img_src ) }}\" alt =\"{{ url }}\" /></a>
 </div>
{% endspaceless %}", "@NomayaSocial/Links/socialLink.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Links\\socialLink.html.twig");
    }
}
