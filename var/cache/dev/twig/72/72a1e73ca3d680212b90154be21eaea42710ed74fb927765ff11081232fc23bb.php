<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d82e33d6e5a1fe2efe9c2789d0db59a9f5fb302d585d5f10bf211a0d2f99b14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4602dda80bcbdc9cf2dffb67d6b6074855ac792f02d670e169bfc3c06630db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4602dda80bcbdc9cf2dffb67d6b6074855ac792f02d670e169bfc3c06630db2->enter($__internal_a4602dda80bcbdc9cf2dffb67d6b6074855ac792f02d670e169bfc3c06630db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5504e5b1613ce2a84c1555665b37524af50d06aebfd6a28c1b0a3e86fe007917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5504e5b1613ce2a84c1555665b37524af50d06aebfd6a28c1b0a3e86fe007917->enter($__internal_5504e5b1613ce2a84c1555665b37524af50d06aebfd6a28c1b0a3e86fe007917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4602dda80bcbdc9cf2dffb67d6b6074855ac792f02d670e169bfc3c06630db2->leave($__internal_a4602dda80bcbdc9cf2dffb67d6b6074855ac792f02d670e169bfc3c06630db2_prof);

        
        $__internal_5504e5b1613ce2a84c1555665b37524af50d06aebfd6a28c1b0a3e86fe007917->leave($__internal_5504e5b1613ce2a84c1555665b37524af50d06aebfd6a28c1b0a3e86fe007917_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca086954084fe07f594a59f2198e44e4a65691b3726bff323fdccebeefb90510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca086954084fe07f594a59f2198e44e4a65691b3726bff323fdccebeefb90510->enter($__internal_ca086954084fe07f594a59f2198e44e4a65691b3726bff323fdccebeefb90510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff9402c51bdbb10d9842e7618b30d63f989a7a34bcc35a788563fab023e9b311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9402c51bdbb10d9842e7618b30d63f989a7a34bcc35a788563fab023e9b311->enter($__internal_ff9402c51bdbb10d9842e7618b30d63f989a7a34bcc35a788563fab023e9b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff9402c51bdbb10d9842e7618b30d63f989a7a34bcc35a788563fab023e9b311->leave($__internal_ff9402c51bdbb10d9842e7618b30d63f989a7a34bcc35a788563fab023e9b311_prof);

        
        $__internal_ca086954084fe07f594a59f2198e44e4a65691b3726bff323fdccebeefb90510->leave($__internal_ca086954084fe07f594a59f2198e44e4a65691b3726bff323fdccebeefb90510_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a91cd56436d7d2ca8b3263cc43124c885d7143c4b7a27a91c18b734f71e3fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a91cd56436d7d2ca8b3263cc43124c885d7143c4b7a27a91c18b734f71e3fbd->enter($__internal_3a91cd56436d7d2ca8b3263cc43124c885d7143c4b7a27a91c18b734f71e3fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13533fe0dbcfe736971b6021ed37cfb2b527b7a5332a1f34da303f9a2dbe97f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13533fe0dbcfe736971b6021ed37cfb2b527b7a5332a1f34da303f9a2dbe97f7->enter($__internal_13533fe0dbcfe736971b6021ed37cfb2b527b7a5332a1f34da303f9a2dbe97f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13533fe0dbcfe736971b6021ed37cfb2b527b7a5332a1f34da303f9a2dbe97f7->leave($__internal_13533fe0dbcfe736971b6021ed37cfb2b527b7a5332a1f34da303f9a2dbe97f7_prof);

        
        $__internal_3a91cd56436d7d2ca8b3263cc43124c885d7143c4b7a27a91c18b734f71e3fbd->leave($__internal_3a91cd56436d7d2ca8b3263cc43124c885d7143c4b7a27a91c18b734f71e3fbd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ca2394636ccedc6e41911eaf1d7fa34a4977ec4f1a56ccd4c10733f51e6c1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca2394636ccedc6e41911eaf1d7fa34a4977ec4f1a56ccd4c10733f51e6c1cf->enter($__internal_3ca2394636ccedc6e41911eaf1d7fa34a4977ec4f1a56ccd4c10733f51e6c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a923266081b004a41cd8b966faaf01b5ad7fcba76539b14eca64bae296a98a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a923266081b004a41cd8b966faaf01b5ad7fcba76539b14eca64bae296a98a44->enter($__internal_a923266081b004a41cd8b966faaf01b5ad7fcba76539b14eca64bae296a98a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a923266081b004a41cd8b966faaf01b5ad7fcba76539b14eca64bae296a98a44->leave($__internal_a923266081b004a41cd8b966faaf01b5ad7fcba76539b14eca64bae296a98a44_prof);

        
        $__internal_3ca2394636ccedc6e41911eaf1d7fa34a4977ec4f1a56ccd4c10733f51e6c1cf->leave($__internal_3ca2394636ccedc6e41911eaf1d7fa34a4977ec4f1a56ccd4c10733f51e6c1cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
