<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_057ac2565b3b0363c2939a0225e53a2f4c1de37c7e74221816e49a863ad8d174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b1604f80970d8aef96ce1f685e15e4098ea3c73d1611c91aa2dfea95ea180e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1604f80970d8aef96ce1f685e15e4098ea3c73d1611c91aa2dfea95ea180e5f->enter($__internal_b1604f80970d8aef96ce1f685e15e4098ea3c73d1611c91aa2dfea95ea180e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0936015f0094af8994c9edf3a55f6e78325971bb492a5abf6d7ec9f449bdf9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0936015f0094af8994c9edf3a55f6e78325971bb492a5abf6d7ec9f449bdf9c8->enter($__internal_0936015f0094af8994c9edf3a55f6e78325971bb492a5abf6d7ec9f449bdf9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1604f80970d8aef96ce1f685e15e4098ea3c73d1611c91aa2dfea95ea180e5f->leave($__internal_b1604f80970d8aef96ce1f685e15e4098ea3c73d1611c91aa2dfea95ea180e5f_prof);

        
        $__internal_0936015f0094af8994c9edf3a55f6e78325971bb492a5abf6d7ec9f449bdf9c8->leave($__internal_0936015f0094af8994c9edf3a55f6e78325971bb492a5abf6d7ec9f449bdf9c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56297188dc5bb9396004643eadcb16c49365ba3ec19c6eb2b9fccff015ac3f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56297188dc5bb9396004643eadcb16c49365ba3ec19c6eb2b9fccff015ac3f37->enter($__internal_56297188dc5bb9396004643eadcb16c49365ba3ec19c6eb2b9fccff015ac3f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_43ffa25248e43fd0d6adee46c13cef4d8e567cddad8cfbeaec01e759d9ca67ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ffa25248e43fd0d6adee46c13cef4d8e567cddad8cfbeaec01e759d9ca67ca->enter($__internal_43ffa25248e43fd0d6adee46c13cef4d8e567cddad8cfbeaec01e759d9ca67ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43ffa25248e43fd0d6adee46c13cef4d8e567cddad8cfbeaec01e759d9ca67ca->leave($__internal_43ffa25248e43fd0d6adee46c13cef4d8e567cddad8cfbeaec01e759d9ca67ca_prof);

        
        $__internal_56297188dc5bb9396004643eadcb16c49365ba3ec19c6eb2b9fccff015ac3f37->leave($__internal_56297188dc5bb9396004643eadcb16c49365ba3ec19c6eb2b9fccff015ac3f37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a81e454699e1fdd20314077ec29225432a05735aab7522928b212c72da2bdbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81e454699e1fdd20314077ec29225432a05735aab7522928b212c72da2bdbcb->enter($__internal_a81e454699e1fdd20314077ec29225432a05735aab7522928b212c72da2bdbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e0668c04265fa082561d967cbc949a16a15107a78abcb2e3d95959e5ad61cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0668c04265fa082561d967cbc949a16a15107a78abcb2e3d95959e5ad61cd3->enter($__internal_4e0668c04265fa082561d967cbc949a16a15107a78abcb2e3d95959e5ad61cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e0668c04265fa082561d967cbc949a16a15107a78abcb2e3d95959e5ad61cd3->leave($__internal_4e0668c04265fa082561d967cbc949a16a15107a78abcb2e3d95959e5ad61cd3_prof);

        
        $__internal_a81e454699e1fdd20314077ec29225432a05735aab7522928b212c72da2bdbcb->leave($__internal_a81e454699e1fdd20314077ec29225432a05735aab7522928b212c72da2bdbcb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f07d308f87983680303255793d2ca458383fffbbb01f1d58e49571f6fc676d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f07d308f87983680303255793d2ca458383fffbbb01f1d58e49571f6fc676d6->enter($__internal_1f07d308f87983680303255793d2ca458383fffbbb01f1d58e49571f6fc676d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab921ef75c06c3887b348ebc50e8c72be5abdffd1a54bf77b44f1a3e48b2723e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab921ef75c06c3887b348ebc50e8c72be5abdffd1a54bf77b44f1a3e48b2723e->enter($__internal_ab921ef75c06c3887b348ebc50e8c72be5abdffd1a54bf77b44f1a3e48b2723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab921ef75c06c3887b348ebc50e8c72be5abdffd1a54bf77b44f1a3e48b2723e->leave($__internal_ab921ef75c06c3887b348ebc50e8c72be5abdffd1a54bf77b44f1a3e48b2723e_prof);

        
        $__internal_1f07d308f87983680303255793d2ca458383fffbbb01f1d58e49571f6fc676d6->leave($__internal_1f07d308f87983680303255793d2ca458383fffbbb01f1d58e49571f6fc676d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
