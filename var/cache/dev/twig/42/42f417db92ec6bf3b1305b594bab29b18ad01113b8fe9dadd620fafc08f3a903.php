<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_0e788f84e258990f6b44bd352426ce781a420df0a3f78f2c923a1b42180241d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e788f84e258990f6b44bd352426ce781a420df0a3f78f2c923a1b42180241d6->enter($__internal_0e788f84e258990f6b44bd352426ce781a420df0a3f78f2c923a1b42180241d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f017e4e120eff5ec0975acce8b5163e25dbde027aecd43f6d4ab175c0e8cfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f017e4e120eff5ec0975acce8b5163e25dbde027aecd43f6d4ab175c0e8cfa7->enter($__internal_2f017e4e120eff5ec0975acce8b5163e25dbde027aecd43f6d4ab175c0e8cfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e788f84e258990f6b44bd352426ce781a420df0a3f78f2c923a1b42180241d6->leave($__internal_0e788f84e258990f6b44bd352426ce781a420df0a3f78f2c923a1b42180241d6_prof);

        
        $__internal_2f017e4e120eff5ec0975acce8b5163e25dbde027aecd43f6d4ab175c0e8cfa7->leave($__internal_2f017e4e120eff5ec0975acce8b5163e25dbde027aecd43f6d4ab175c0e8cfa7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac5ed474d90070af2a44148ac933215d6bf42f65da3d6c1657dffe79110e54bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5ed474d90070af2a44148ac933215d6bf42f65da3d6c1657dffe79110e54bc->enter($__internal_ac5ed474d90070af2a44148ac933215d6bf42f65da3d6c1657dffe79110e54bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d2062a3556ae2d750a0fc3fe48fc1eb87e48896d4a44159f42ca1462a41f4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2062a3556ae2d750a0fc3fe48fc1eb87e48896d4a44159f42ca1462a41f4d0->enter($__internal_5d2062a3556ae2d750a0fc3fe48fc1eb87e48896d4a44159f42ca1462a41f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d2062a3556ae2d750a0fc3fe48fc1eb87e48896d4a44159f42ca1462a41f4d0->leave($__internal_5d2062a3556ae2d750a0fc3fe48fc1eb87e48896d4a44159f42ca1462a41f4d0_prof);

        
        $__internal_ac5ed474d90070af2a44148ac933215d6bf42f65da3d6c1657dffe79110e54bc->leave($__internal_ac5ed474d90070af2a44148ac933215d6bf42f65da3d6c1657dffe79110e54bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9890415dd7432cabde83bc4bf8e431b8b181ee9af43ab8f9c8a357b216405df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9890415dd7432cabde83bc4bf8e431b8b181ee9af43ab8f9c8a357b216405df->enter($__internal_e9890415dd7432cabde83bc4bf8e431b8b181ee9af43ab8f9c8a357b216405df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c378e1d430f476c9a3da0b10ef2f54c73cf06f78646fb439dbc63426c3504c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c378e1d430f476c9a3da0b10ef2f54c73cf06f78646fb439dbc63426c3504c79->enter($__internal_c378e1d430f476c9a3da0b10ef2f54c73cf06f78646fb439dbc63426c3504c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c378e1d430f476c9a3da0b10ef2f54c73cf06f78646fb439dbc63426c3504c79->leave($__internal_c378e1d430f476c9a3da0b10ef2f54c73cf06f78646fb439dbc63426c3504c79_prof);

        
        $__internal_e9890415dd7432cabde83bc4bf8e431b8b181ee9af43ab8f9c8a357b216405df->leave($__internal_e9890415dd7432cabde83bc4bf8e431b8b181ee9af43ab8f9c8a357b216405df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3672f6a093c860dc7b5051b2b906e84d9949d0921d9b7584d755d87f9ba8c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3672f6a093c860dc7b5051b2b906e84d9949d0921d9b7584d755d87f9ba8c55->enter($__internal_e3672f6a093c860dc7b5051b2b906e84d9949d0921d9b7584d755d87f9ba8c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_844302fbcf6fee7bf09ddb952d5880247ee61658f7ba4c255cc2b6dc5d9328bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844302fbcf6fee7bf09ddb952d5880247ee61658f7ba4c255cc2b6dc5d9328bb->enter($__internal_844302fbcf6fee7bf09ddb952d5880247ee61658f7ba4c255cc2b6dc5d9328bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_844302fbcf6fee7bf09ddb952d5880247ee61658f7ba4c255cc2b6dc5d9328bb->leave($__internal_844302fbcf6fee7bf09ddb952d5880247ee61658f7ba4c255cc2b6dc5d9328bb_prof);

        
        $__internal_e3672f6a093c860dc7b5051b2b906e84d9949d0921d9b7584d755d87f9ba8c55->leave($__internal_e3672f6a093c860dc7b5051b2b906e84d9949d0921d9b7584d755d87f9ba8c55_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
