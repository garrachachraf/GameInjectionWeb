<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9ed56ed18ebfdb94018ce1345e5fba3011d1462ff6eb326b0d15bb17005827b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_7c80505fe029ef70f6d24f73c4625f8277bca59d1d2061d2769179be008bf599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c80505fe029ef70f6d24f73c4625f8277bca59d1d2061d2769179be008bf599->enter($__internal_7c80505fe029ef70f6d24f73c4625f8277bca59d1d2061d2769179be008bf599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_811245627a8be3bb0970bf033dd4df44058c6fd439bc6b0c1c5c217ac25f11dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811245627a8be3bb0970bf033dd4df44058c6fd439bc6b0c1c5c217ac25f11dc->enter($__internal_811245627a8be3bb0970bf033dd4df44058c6fd439bc6b0c1c5c217ac25f11dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c80505fe029ef70f6d24f73c4625f8277bca59d1d2061d2769179be008bf599->leave($__internal_7c80505fe029ef70f6d24f73c4625f8277bca59d1d2061d2769179be008bf599_prof);

        
        $__internal_811245627a8be3bb0970bf033dd4df44058c6fd439bc6b0c1c5c217ac25f11dc->leave($__internal_811245627a8be3bb0970bf033dd4df44058c6fd439bc6b0c1c5c217ac25f11dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c8fed20186d15f5391e2bd3d43f25418898f580a4774cf8193d1802731a9cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8fed20186d15f5391e2bd3d43f25418898f580a4774cf8193d1802731a9cc2->enter($__internal_4c8fed20186d15f5391e2bd3d43f25418898f580a4774cf8193d1802731a9cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c80e033bad197736643d209cd0f18d141161570c93778cc59e2dc509d8fad1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80e033bad197736643d209cd0f18d141161570c93778cc59e2dc509d8fad1b9->enter($__internal_c80e033bad197736643d209cd0f18d141161570c93778cc59e2dc509d8fad1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c80e033bad197736643d209cd0f18d141161570c93778cc59e2dc509d8fad1b9->leave($__internal_c80e033bad197736643d209cd0f18d141161570c93778cc59e2dc509d8fad1b9_prof);

        
        $__internal_4c8fed20186d15f5391e2bd3d43f25418898f580a4774cf8193d1802731a9cc2->leave($__internal_4c8fed20186d15f5391e2bd3d43f25418898f580a4774cf8193d1802731a9cc2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cabe27688bcac7cfda763f7cdc8d5db515058c48b43acfdcb952d7c214e20e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabe27688bcac7cfda763f7cdc8d5db515058c48b43acfdcb952d7c214e20e77->enter($__internal_cabe27688bcac7cfda763f7cdc8d5db515058c48b43acfdcb952d7c214e20e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff5d7bf09351c3b53fd4b5ea2ba2b325d77cbc4b82b55155c5880fa8febc41af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5d7bf09351c3b53fd4b5ea2ba2b325d77cbc4b82b55155c5880fa8febc41af->enter($__internal_ff5d7bf09351c3b53fd4b5ea2ba2b325d77cbc4b82b55155c5880fa8febc41af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ff5d7bf09351c3b53fd4b5ea2ba2b325d77cbc4b82b55155c5880fa8febc41af->leave($__internal_ff5d7bf09351c3b53fd4b5ea2ba2b325d77cbc4b82b55155c5880fa8febc41af_prof);

        
        $__internal_cabe27688bcac7cfda763f7cdc8d5db515058c48b43acfdcb952d7c214e20e77->leave($__internal_cabe27688bcac7cfda763f7cdc8d5db515058c48b43acfdcb952d7c214e20e77_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa8ac091c7b59b672902c1c95f938222e556845e96199d1b535166cc995b8135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8ac091c7b59b672902c1c95f938222e556845e96199d1b535166cc995b8135->enter($__internal_fa8ac091c7b59b672902c1c95f938222e556845e96199d1b535166cc995b8135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_32751b20be4d3d634c8545bc7109fff203a9ee27d403c1b43f9631cc89c9de05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32751b20be4d3d634c8545bc7109fff203a9ee27d403c1b43f9631cc89c9de05->enter($__internal_32751b20be4d3d634c8545bc7109fff203a9ee27d403c1b43f9631cc89c9de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_32751b20be4d3d634c8545bc7109fff203a9ee27d403c1b43f9631cc89c9de05->leave($__internal_32751b20be4d3d634c8545bc7109fff203a9ee27d403c1b43f9631cc89c9de05_prof);

        
        $__internal_fa8ac091c7b59b672902c1c95f938222e556845e96199d1b535166cc995b8135->leave($__internal_fa8ac091c7b59b672902c1c95f938222e556845e96199d1b535166cc995b8135_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
