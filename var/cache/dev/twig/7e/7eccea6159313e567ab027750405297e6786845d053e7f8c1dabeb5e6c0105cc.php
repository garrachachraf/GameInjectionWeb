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
        $__internal_3a010d10bfad4af51e26afd7a91341a380faaf093adbee611bf4fc906e68f8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a010d10bfad4af51e26afd7a91341a380faaf093adbee611bf4fc906e68f8c2->enter($__internal_3a010d10bfad4af51e26afd7a91341a380faaf093adbee611bf4fc906e68f8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cb2d27d0ed3b86d298a55a406d2e52ded6fe2c361b439bffcc6286d0b425be00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2d27d0ed3b86d298a55a406d2e52ded6fe2c361b439bffcc6286d0b425be00->enter($__internal_cb2d27d0ed3b86d298a55a406d2e52ded6fe2c361b439bffcc6286d0b425be00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a010d10bfad4af51e26afd7a91341a380faaf093adbee611bf4fc906e68f8c2->leave($__internal_3a010d10bfad4af51e26afd7a91341a380faaf093adbee611bf4fc906e68f8c2_prof);

        
        $__internal_cb2d27d0ed3b86d298a55a406d2e52ded6fe2c361b439bffcc6286d0b425be00->leave($__internal_cb2d27d0ed3b86d298a55a406d2e52ded6fe2c361b439bffcc6286d0b425be00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d7b22e3d69b434b46504b060065e145641a7121210b9159f8885f9dd1230574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7b22e3d69b434b46504b060065e145641a7121210b9159f8885f9dd1230574->enter($__internal_9d7b22e3d69b434b46504b060065e145641a7121210b9159f8885f9dd1230574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc9b46fdc65ababd85297c0b28b574f3cac8e8140d77796694d3e0dcc2ae8253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9b46fdc65ababd85297c0b28b574f3cac8e8140d77796694d3e0dcc2ae8253->enter($__internal_cc9b46fdc65ababd85297c0b28b574f3cac8e8140d77796694d3e0dcc2ae8253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc9b46fdc65ababd85297c0b28b574f3cac8e8140d77796694d3e0dcc2ae8253->leave($__internal_cc9b46fdc65ababd85297c0b28b574f3cac8e8140d77796694d3e0dcc2ae8253_prof);

        
        $__internal_9d7b22e3d69b434b46504b060065e145641a7121210b9159f8885f9dd1230574->leave($__internal_9d7b22e3d69b434b46504b060065e145641a7121210b9159f8885f9dd1230574_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fae758724451b1bf7a1af512e63c59efb032f046b64144f43584927b63b919c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fae758724451b1bf7a1af512e63c59efb032f046b64144f43584927b63b919c->enter($__internal_0fae758724451b1bf7a1af512e63c59efb032f046b64144f43584927b63b919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a5517084500170e5ce5176d5d73ce040c16c1340d8c95207a41500d7ef937e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5517084500170e5ce5176d5d73ce040c16c1340d8c95207a41500d7ef937e97->enter($__internal_a5517084500170e5ce5176d5d73ce040c16c1340d8c95207a41500d7ef937e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5517084500170e5ce5176d5d73ce040c16c1340d8c95207a41500d7ef937e97->leave($__internal_a5517084500170e5ce5176d5d73ce040c16c1340d8c95207a41500d7ef937e97_prof);

        
        $__internal_0fae758724451b1bf7a1af512e63c59efb032f046b64144f43584927b63b919c->leave($__internal_0fae758724451b1bf7a1af512e63c59efb032f046b64144f43584927b63b919c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2c79d9ffaac320d0de86c3742ec4a72aba686ee78b4636768376937aa8e5637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c79d9ffaac320d0de86c3742ec4a72aba686ee78b4636768376937aa8e5637->enter($__internal_d2c79d9ffaac320d0de86c3742ec4a72aba686ee78b4636768376937aa8e5637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48930e6252650dd3aceb0cba463836c95bc1779b18b8b6cf30b3f6dd5ffd23a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48930e6252650dd3aceb0cba463836c95bc1779b18b8b6cf30b3f6dd5ffd23a4->enter($__internal_48930e6252650dd3aceb0cba463836c95bc1779b18b8b6cf30b3f6dd5ffd23a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48930e6252650dd3aceb0cba463836c95bc1779b18b8b6cf30b3f6dd5ffd23a4->leave($__internal_48930e6252650dd3aceb0cba463836c95bc1779b18b8b6cf30b3f6dd5ffd23a4_prof);

        
        $__internal_d2c79d9ffaac320d0de86c3742ec4a72aba686ee78b4636768376937aa8e5637->leave($__internal_d2c79d9ffaac320d0de86c3742ec4a72aba686ee78b4636768376937aa8e5637_prof);

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
