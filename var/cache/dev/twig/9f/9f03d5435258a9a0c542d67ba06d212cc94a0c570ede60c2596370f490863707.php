<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c9230728ead9648fdac9e2f1f903ad36461aa0ce6667411d8f9009c70b65b7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_94be38bc7c8f1824bb9397094ed2cc0d9ce93d4ec214ce1bcf26de206adbd6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94be38bc7c8f1824bb9397094ed2cc0d9ce93d4ec214ce1bcf26de206adbd6c7->enter($__internal_94be38bc7c8f1824bb9397094ed2cc0d9ce93d4ec214ce1bcf26de206adbd6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0931d3b377dbe6a922a5e4166d3ac1d59cc3a78d8995011f0772705ddc9ba433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0931d3b377dbe6a922a5e4166d3ac1d59cc3a78d8995011f0772705ddc9ba433->enter($__internal_0931d3b377dbe6a922a5e4166d3ac1d59cc3a78d8995011f0772705ddc9ba433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94be38bc7c8f1824bb9397094ed2cc0d9ce93d4ec214ce1bcf26de206adbd6c7->leave($__internal_94be38bc7c8f1824bb9397094ed2cc0d9ce93d4ec214ce1bcf26de206adbd6c7_prof);

        
        $__internal_0931d3b377dbe6a922a5e4166d3ac1d59cc3a78d8995011f0772705ddc9ba433->leave($__internal_0931d3b377dbe6a922a5e4166d3ac1d59cc3a78d8995011f0772705ddc9ba433_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8aebf39ee6061d6100ab24df8ad45f793e3267bc8ef9f62e6de0d68e6b8c816c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aebf39ee6061d6100ab24df8ad45f793e3267bc8ef9f62e6de0d68e6b8c816c->enter($__internal_8aebf39ee6061d6100ab24df8ad45f793e3267bc8ef9f62e6de0d68e6b8c816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9a6cd752335899d5147b7992a36760411e45f5da0e05eb403ff207f148b463b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a6cd752335899d5147b7992a36760411e45f5da0e05eb403ff207f148b463b->enter($__internal_f9a6cd752335899d5147b7992a36760411e45f5da0e05eb403ff207f148b463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f9a6cd752335899d5147b7992a36760411e45f5da0e05eb403ff207f148b463b->leave($__internal_f9a6cd752335899d5147b7992a36760411e45f5da0e05eb403ff207f148b463b_prof);

        
        $__internal_8aebf39ee6061d6100ab24df8ad45f793e3267bc8ef9f62e6de0d68e6b8c816c->leave($__internal_8aebf39ee6061d6100ab24df8ad45f793e3267bc8ef9f62e6de0d68e6b8c816c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b56474111418dc8ed22a23b7f3a7625f18e50d8e9aaff5ab2531877934a3e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b56474111418dc8ed22a23b7f3a7625f18e50d8e9aaff5ab2531877934a3e7c->enter($__internal_0b56474111418dc8ed22a23b7f3a7625f18e50d8e9aaff5ab2531877934a3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b5412fa44a9898e795dda6251b8bb634ee60b5f60b3e6c850ca64d2ca56590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5412fa44a9898e795dda6251b8bb634ee60b5f60b3e6c850ca64d2ca56590b->enter($__internal_9b5412fa44a9898e795dda6251b8bb634ee60b5f60b3e6c850ca64d2ca56590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9b5412fa44a9898e795dda6251b8bb634ee60b5f60b3e6c850ca64d2ca56590b->leave($__internal_9b5412fa44a9898e795dda6251b8bb634ee60b5f60b3e6c850ca64d2ca56590b_prof);

        
        $__internal_0b56474111418dc8ed22a23b7f3a7625f18e50d8e9aaff5ab2531877934a3e7c->leave($__internal_0b56474111418dc8ed22a23b7f3a7625f18e50d8e9aaff5ab2531877934a3e7c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14ed28d2a7a9ba9ad836feb0646de8d500d62fa9530a3d156a4404117b3abb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ed28d2a7a9ba9ad836feb0646de8d500d62fa9530a3d156a4404117b3abb86->enter($__internal_14ed28d2a7a9ba9ad836feb0646de8d500d62fa9530a3d156a4404117b3abb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e1d8310e3dc9427c0985a6a542f7913b27a9ed34d6609c5fb498de87a3048c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1d8310e3dc9427c0985a6a542f7913b27a9ed34d6609c5fb498de87a3048c1->enter($__internal_4e1d8310e3dc9427c0985a6a542f7913b27a9ed34d6609c5fb498de87a3048c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e1d8310e3dc9427c0985a6a542f7913b27a9ed34d6609c5fb498de87a3048c1->leave($__internal_4e1d8310e3dc9427c0985a6a542f7913b27a9ed34d6609c5fb498de87a3048c1_prof);

        
        $__internal_14ed28d2a7a9ba9ad836feb0646de8d500d62fa9530a3d156a4404117b3abb86->leave($__internal_14ed28d2a7a9ba9ad836feb0646de8d500d62fa9530a3d156a4404117b3abb86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
