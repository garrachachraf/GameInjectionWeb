<?php

/* @NomayaSocial/Links/socialLink.html.twig */
class __TwigTemplate_f6198921f8aafdeb4f29b5c260ff76642af0da7ca7f12464ae99cd20e1b7d1a0 extends Twig_Template
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
        $__internal_b2c121cd1d39168e5050ee592470c171a7a1cd8f1e5195d2b527a99376d03ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c121cd1d39168e5050ee592470c171a7a1cd8f1e5195d2b527a99376d03ac4->enter($__internal_b2c121cd1d39168e5050ee592470c171a7a1cd8f1e5195d2b527a99376d03ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLink.html.twig"));

        $__internal_45c256d930bb068e81f257f9f2eddbde6da7c5ca56fd053975fea8b453884f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c256d930bb068e81f257f9f2eddbde6da7c5ca56fd053975fea8b453884f6c->enter($__internal_45c256d930bb068e81f257f9f2eddbde6da7c5ca56fd053975fea8b453884f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Links/socialLink.html.twig"));

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
        
        $__internal_b2c121cd1d39168e5050ee592470c171a7a1cd8f1e5195d2b527a99376d03ac4->leave($__internal_b2c121cd1d39168e5050ee592470c171a7a1cd8f1e5195d2b527a99376d03ac4_prof);

        
        $__internal_45c256d930bb068e81f257f9f2eddbde6da7c5ca56fd053975fea8b453884f6c->leave($__internal_45c256d930bb068e81f257f9f2eddbde6da7c5ca56fd053975fea8b453884f6c_prof);

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
