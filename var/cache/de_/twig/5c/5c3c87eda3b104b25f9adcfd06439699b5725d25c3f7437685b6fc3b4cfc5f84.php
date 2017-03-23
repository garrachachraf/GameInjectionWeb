<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_06b425999446cc2321e694b0e8fd6d25cc61c84a3aa65ce4ca5759c357bfe51b extends Twig_Template
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
        $__internal_b315657ec0d4e76c6bdcc7f81a90ffe8c324591e657bdb7aaff3d1c6d8c96972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b315657ec0d4e76c6bdcc7f81a90ffe8c324591e657bdb7aaff3d1c6d8c96972->enter($__internal_b315657ec0d4e76c6bdcc7f81a90ffe8c324591e657bdb7aaff3d1c6d8c96972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_632c30f5e5f8a1a676ef47e134535ababc6ffd4ab1a421d1c5e7388e6675e404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632c30f5e5f8a1a676ef47e134535ababc6ffd4ab1a421d1c5e7388e6675e404->enter($__internal_632c30f5e5f8a1a676ef47e134535ababc6ffd4ab1a421d1c5e7388e6675e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b315657ec0d4e76c6bdcc7f81a90ffe8c324591e657bdb7aaff3d1c6d8c96972->leave($__internal_b315657ec0d4e76c6bdcc7f81a90ffe8c324591e657bdb7aaff3d1c6d8c96972_prof);

        
        $__internal_632c30f5e5f8a1a676ef47e134535ababc6ffd4ab1a421d1c5e7388e6675e404->leave($__internal_632c30f5e5f8a1a676ef47e134535ababc6ffd4ab1a421d1c5e7388e6675e404_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a45bf22cca149282d7342b5e4ce6259c6bd166f8d58e51e840d64530b80d281d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45bf22cca149282d7342b5e4ce6259c6bd166f8d58e51e840d64530b80d281d->enter($__internal_a45bf22cca149282d7342b5e4ce6259c6bd166f8d58e51e840d64530b80d281d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a71c92770c3f4878fb0464a0d1e36b2699fe7306f4958bdd1fccd5ff68565410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71c92770c3f4878fb0464a0d1e36b2699fe7306f4958bdd1fccd5ff68565410->enter($__internal_a71c92770c3f4878fb0464a0d1e36b2699fe7306f4958bdd1fccd5ff68565410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a71c92770c3f4878fb0464a0d1e36b2699fe7306f4958bdd1fccd5ff68565410->leave($__internal_a71c92770c3f4878fb0464a0d1e36b2699fe7306f4958bdd1fccd5ff68565410_prof);

        
        $__internal_a45bf22cca149282d7342b5e4ce6259c6bd166f8d58e51e840d64530b80d281d->leave($__internal_a45bf22cca149282d7342b5e4ce6259c6bd166f8d58e51e840d64530b80d281d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4809fd4398938db706af19cd9df926d01924dc810730eb1b73628c6dab76d944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4809fd4398938db706af19cd9df926d01924dc810730eb1b73628c6dab76d944->enter($__internal_4809fd4398938db706af19cd9df926d01924dc810730eb1b73628c6dab76d944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_618b54b363eee4dad838156421824b00f58e109ce9924eac6bc59b574ba97a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618b54b363eee4dad838156421824b00f58e109ce9924eac6bc59b574ba97a20->enter($__internal_618b54b363eee4dad838156421824b00f58e109ce9924eac6bc59b574ba97a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_618b54b363eee4dad838156421824b00f58e109ce9924eac6bc59b574ba97a20->leave($__internal_618b54b363eee4dad838156421824b00f58e109ce9924eac6bc59b574ba97a20_prof);

        
        $__internal_4809fd4398938db706af19cd9df926d01924dc810730eb1b73628c6dab76d944->leave($__internal_4809fd4398938db706af19cd9df926d01924dc810730eb1b73628c6dab76d944_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_751766d64389e819ed8988d2f50b90a2b1428ca2646cdea9bdcad2bfd36a6ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751766d64389e819ed8988d2f50b90a2b1428ca2646cdea9bdcad2bfd36a6ad7->enter($__internal_751766d64389e819ed8988d2f50b90a2b1428ca2646cdea9bdcad2bfd36a6ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc4b19276b7e5104a1d6d7c17307cedd21f698a9fcb887c1a15399f0534c4603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4b19276b7e5104a1d6d7c17307cedd21f698a9fcb887c1a15399f0534c4603->enter($__internal_bc4b19276b7e5104a1d6d7c17307cedd21f698a9fcb887c1a15399f0534c4603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bc4b19276b7e5104a1d6d7c17307cedd21f698a9fcb887c1a15399f0534c4603->leave($__internal_bc4b19276b7e5104a1d6d7c17307cedd21f698a9fcb887c1a15399f0534c4603_prof);

        
        $__internal_751766d64389e819ed8988d2f50b90a2b1428ca2646cdea9bdcad2bfd36a6ad7->leave($__internal_751766d64389e819ed8988d2f50b90a2b1428ca2646cdea9bdcad2bfd36a6ad7_prof);

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
