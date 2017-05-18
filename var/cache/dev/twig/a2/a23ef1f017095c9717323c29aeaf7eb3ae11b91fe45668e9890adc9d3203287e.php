<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_96e5e2dab6e120d506c44c3425f32a7e53c8f6f0604364e2d49ae9dc3c35bec9 extends Twig_Template
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
        $__internal_99b22ba2110f7097bfcb5e915352d466d99dc677cb60219831c567500d7a1400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b22ba2110f7097bfcb5e915352d466d99dc677cb60219831c567500d7a1400->enter($__internal_99b22ba2110f7097bfcb5e915352d466d99dc677cb60219831c567500d7a1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_127462b705f218b989e3f4ad7731fa9cef6957f42a9bbac4f5758979eaf73dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127462b705f218b989e3f4ad7731fa9cef6957f42a9bbac4f5758979eaf73dec->enter($__internal_127462b705f218b989e3f4ad7731fa9cef6957f42a9bbac4f5758979eaf73dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b22ba2110f7097bfcb5e915352d466d99dc677cb60219831c567500d7a1400->leave($__internal_99b22ba2110f7097bfcb5e915352d466d99dc677cb60219831c567500d7a1400_prof);

        
        $__internal_127462b705f218b989e3f4ad7731fa9cef6957f42a9bbac4f5758979eaf73dec->leave($__internal_127462b705f218b989e3f4ad7731fa9cef6957f42a9bbac4f5758979eaf73dec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d8bffa7c67fd2b3e59f58807fedd55aa09bbc86e45120442da22343eebc2761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8bffa7c67fd2b3e59f58807fedd55aa09bbc86e45120442da22343eebc2761->enter($__internal_8d8bffa7c67fd2b3e59f58807fedd55aa09bbc86e45120442da22343eebc2761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d91d9f40873db3b1c95cd46e5957099484bb1b3053e282f0cfb6b8908bb9932a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91d9f40873db3b1c95cd46e5957099484bb1b3053e282f0cfb6b8908bb9932a->enter($__internal_d91d9f40873db3b1c95cd46e5957099484bb1b3053e282f0cfb6b8908bb9932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d91d9f40873db3b1c95cd46e5957099484bb1b3053e282f0cfb6b8908bb9932a->leave($__internal_d91d9f40873db3b1c95cd46e5957099484bb1b3053e282f0cfb6b8908bb9932a_prof);

        
        $__internal_8d8bffa7c67fd2b3e59f58807fedd55aa09bbc86e45120442da22343eebc2761->leave($__internal_8d8bffa7c67fd2b3e59f58807fedd55aa09bbc86e45120442da22343eebc2761_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60d4e0b2c5dc9ba770bc189b08d28d6f7cc6f5668c41a4c2562292b42ec11030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d4e0b2c5dc9ba770bc189b08d28d6f7cc6f5668c41a4c2562292b42ec11030->enter($__internal_60d4e0b2c5dc9ba770bc189b08d28d6f7cc6f5668c41a4c2562292b42ec11030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2bab645a3603a40c7c0dc4900a1712999b9be370e6f61ec763f2af5abbd48e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bab645a3603a40c7c0dc4900a1712999b9be370e6f61ec763f2af5abbd48e5->enter($__internal_c2bab645a3603a40c7c0dc4900a1712999b9be370e6f61ec763f2af5abbd48e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2bab645a3603a40c7c0dc4900a1712999b9be370e6f61ec763f2af5abbd48e5->leave($__internal_c2bab645a3603a40c7c0dc4900a1712999b9be370e6f61ec763f2af5abbd48e5_prof);

        
        $__internal_60d4e0b2c5dc9ba770bc189b08d28d6f7cc6f5668c41a4c2562292b42ec11030->leave($__internal_60d4e0b2c5dc9ba770bc189b08d28d6f7cc6f5668c41a4c2562292b42ec11030_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87e8b0814133ce7a20ee1ed13afcffd40003eab0b10ec4f0d61d5cd8554c405a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e8b0814133ce7a20ee1ed13afcffd40003eab0b10ec4f0d61d5cd8554c405a->enter($__internal_87e8b0814133ce7a20ee1ed13afcffd40003eab0b10ec4f0d61d5cd8554c405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fab17efc87525c1aadcefe4be4cf8fe8faedc1701db4937cf2324d56f4b6cdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab17efc87525c1aadcefe4be4cf8fe8faedc1701db4937cf2324d56f4b6cdf5->enter($__internal_fab17efc87525c1aadcefe4be4cf8fe8faedc1701db4937cf2324d56f4b6cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fab17efc87525c1aadcefe4be4cf8fe8faedc1701db4937cf2324d56f4b6cdf5->leave($__internal_fab17efc87525c1aadcefe4be4cf8fe8faedc1701db4937cf2324d56f4b6cdf5_prof);

        
        $__internal_87e8b0814133ce7a20ee1ed13afcffd40003eab0b10ec4f0d61d5cd8554c405a->leave($__internal_87e8b0814133ce7a20ee1ed13afcffd40003eab0b10ec4f0d61d5cd8554c405a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
