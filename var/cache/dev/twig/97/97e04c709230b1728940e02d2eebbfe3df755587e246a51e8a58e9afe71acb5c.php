<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be056a9dcfa7da269c08ff6bcdc59bd6f76ff597c7ce5786a56ef145d60d4443 extends Twig_Template
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
        $__internal_1234bc7e89510a6588c4f4af5bac4f20187a7d2246ae744828f5c5d66a6e2211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1234bc7e89510a6588c4f4af5bac4f20187a7d2246ae744828f5c5d66a6e2211->enter($__internal_1234bc7e89510a6588c4f4af5bac4f20187a7d2246ae744828f5c5d66a6e2211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f0aa31f1915b9e1082b42abfddd53331cd821c2da7fff5e93422b1aed83ffb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aa31f1915b9e1082b42abfddd53331cd821c2da7fff5e93422b1aed83ffb40->enter($__internal_f0aa31f1915b9e1082b42abfddd53331cd821c2da7fff5e93422b1aed83ffb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1234bc7e89510a6588c4f4af5bac4f20187a7d2246ae744828f5c5d66a6e2211->leave($__internal_1234bc7e89510a6588c4f4af5bac4f20187a7d2246ae744828f5c5d66a6e2211_prof);

        
        $__internal_f0aa31f1915b9e1082b42abfddd53331cd821c2da7fff5e93422b1aed83ffb40->leave($__internal_f0aa31f1915b9e1082b42abfddd53331cd821c2da7fff5e93422b1aed83ffb40_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8634267288d9390afbb2e8aac87004b1846843c7d2a14e73f2ed024d2c6e4b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8634267288d9390afbb2e8aac87004b1846843c7d2a14e73f2ed024d2c6e4b6a->enter($__internal_8634267288d9390afbb2e8aac87004b1846843c7d2a14e73f2ed024d2c6e4b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07bb9bb03c49c2f75b504ac7a3f09404f169da43af94267b8474cc49355bd484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bb9bb03c49c2f75b504ac7a3f09404f169da43af94267b8474cc49355bd484->enter($__internal_07bb9bb03c49c2f75b504ac7a3f09404f169da43af94267b8474cc49355bd484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07bb9bb03c49c2f75b504ac7a3f09404f169da43af94267b8474cc49355bd484->leave($__internal_07bb9bb03c49c2f75b504ac7a3f09404f169da43af94267b8474cc49355bd484_prof);

        
        $__internal_8634267288d9390afbb2e8aac87004b1846843c7d2a14e73f2ed024d2c6e4b6a->leave($__internal_8634267288d9390afbb2e8aac87004b1846843c7d2a14e73f2ed024d2c6e4b6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca547c9692b5bb2b0d6761ac7b136da18acc900254e8107a9245f09077e0cd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca547c9692b5bb2b0d6761ac7b136da18acc900254e8107a9245f09077e0cd48->enter($__internal_ca547c9692b5bb2b0d6761ac7b136da18acc900254e8107a9245f09077e0cd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1760608d5bcfec16e59627f5925b0f9d8e12f6768495556fb33f5f9cacf80188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1760608d5bcfec16e59627f5925b0f9d8e12f6768495556fb33f5f9cacf80188->enter($__internal_1760608d5bcfec16e59627f5925b0f9d8e12f6768495556fb33f5f9cacf80188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1760608d5bcfec16e59627f5925b0f9d8e12f6768495556fb33f5f9cacf80188->leave($__internal_1760608d5bcfec16e59627f5925b0f9d8e12f6768495556fb33f5f9cacf80188_prof);

        
        $__internal_ca547c9692b5bb2b0d6761ac7b136da18acc900254e8107a9245f09077e0cd48->leave($__internal_ca547c9692b5bb2b0d6761ac7b136da18acc900254e8107a9245f09077e0cd48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcaf82bb2c6864df325eca3e90cb3a922f1175235a9113b98d08d4b009c664c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaf82bb2c6864df325eca3e90cb3a922f1175235a9113b98d08d4b009c664c3->enter($__internal_bcaf82bb2c6864df325eca3e90cb3a922f1175235a9113b98d08d4b009c664c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f304b909f8d46450ab870eedbc3838644c6e9c8989d69a92495424e578adc88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f304b909f8d46450ab870eedbc3838644c6e9c8989d69a92495424e578adc88b->enter($__internal_f304b909f8d46450ab870eedbc3838644c6e9c8989d69a92495424e578adc88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f304b909f8d46450ab870eedbc3838644c6e9c8989d69a92495424e578adc88b->leave($__internal_f304b909f8d46450ab870eedbc3838644c6e9c8989d69a92495424e578adc88b_prof);

        
        $__internal_bcaf82bb2c6864df325eca3e90cb3a922f1175235a9113b98d08d4b009c664c3->leave($__internal_bcaf82bb2c6864df325eca3e90cb3a922f1175235a9113b98d08d4b009c664c3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
