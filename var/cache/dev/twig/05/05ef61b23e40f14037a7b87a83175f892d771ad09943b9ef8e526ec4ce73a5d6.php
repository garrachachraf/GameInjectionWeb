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
        $__internal_e2c39b432187332aaec01040b0cbc1cb80ca0e6804d1e5de7c091a1b9f01d783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c39b432187332aaec01040b0cbc1cb80ca0e6804d1e5de7c091a1b9f01d783->enter($__internal_e2c39b432187332aaec01040b0cbc1cb80ca0e6804d1e5de7c091a1b9f01d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_36e68bc7259b3648b13937bb487a136c399e3fc577ea01bbbfebd7b46226e241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e68bc7259b3648b13937bb487a136c399e3fc577ea01bbbfebd7b46226e241->enter($__internal_36e68bc7259b3648b13937bb487a136c399e3fc577ea01bbbfebd7b46226e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c39b432187332aaec01040b0cbc1cb80ca0e6804d1e5de7c091a1b9f01d783->leave($__internal_e2c39b432187332aaec01040b0cbc1cb80ca0e6804d1e5de7c091a1b9f01d783_prof);

        
        $__internal_36e68bc7259b3648b13937bb487a136c399e3fc577ea01bbbfebd7b46226e241->leave($__internal_36e68bc7259b3648b13937bb487a136c399e3fc577ea01bbbfebd7b46226e241_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4ddd941646fa0f1c4b5fc4052389160dfb489864b83e1fd8714fd0f27bc1542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ddd941646fa0f1c4b5fc4052389160dfb489864b83e1fd8714fd0f27bc1542->enter($__internal_b4ddd941646fa0f1c4b5fc4052389160dfb489864b83e1fd8714fd0f27bc1542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a39a56607669a52c953dcb92c2a79fe59bab9ff8165fa1f8012cf033fc2a7701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39a56607669a52c953dcb92c2a79fe59bab9ff8165fa1f8012cf033fc2a7701->enter($__internal_a39a56607669a52c953dcb92c2a79fe59bab9ff8165fa1f8012cf033fc2a7701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a39a56607669a52c953dcb92c2a79fe59bab9ff8165fa1f8012cf033fc2a7701->leave($__internal_a39a56607669a52c953dcb92c2a79fe59bab9ff8165fa1f8012cf033fc2a7701_prof);

        
        $__internal_b4ddd941646fa0f1c4b5fc4052389160dfb489864b83e1fd8714fd0f27bc1542->leave($__internal_b4ddd941646fa0f1c4b5fc4052389160dfb489864b83e1fd8714fd0f27bc1542_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45d71467865f059f19565ca3fcf81b73873e18e2360fec4b24d126be432f4055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d71467865f059f19565ca3fcf81b73873e18e2360fec4b24d126be432f4055->enter($__internal_45d71467865f059f19565ca3fcf81b73873e18e2360fec4b24d126be432f4055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ab079a03624a562951ea8bc15c059d350795fe2ac975be489684981eb77cafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab079a03624a562951ea8bc15c059d350795fe2ac975be489684981eb77cafb->enter($__internal_2ab079a03624a562951ea8bc15c059d350795fe2ac975be489684981eb77cafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2ab079a03624a562951ea8bc15c059d350795fe2ac975be489684981eb77cafb->leave($__internal_2ab079a03624a562951ea8bc15c059d350795fe2ac975be489684981eb77cafb_prof);

        
        $__internal_45d71467865f059f19565ca3fcf81b73873e18e2360fec4b24d126be432f4055->leave($__internal_45d71467865f059f19565ca3fcf81b73873e18e2360fec4b24d126be432f4055_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c01345f3facc610e25dc4ab8ce79de7083db3665b7a74f9acee0e50ebc7b37b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01345f3facc610e25dc4ab8ce79de7083db3665b7a74f9acee0e50ebc7b37b7->enter($__internal_c01345f3facc610e25dc4ab8ce79de7083db3665b7a74f9acee0e50ebc7b37b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcefd07202cff15280207ab860b91ba49913cff2846e940e10e4841bc8ca49f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcefd07202cff15280207ab860b91ba49913cff2846e940e10e4841bc8ca49f1->enter($__internal_bcefd07202cff15280207ab860b91ba49913cff2846e940e10e4841bc8ca49f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bcefd07202cff15280207ab860b91ba49913cff2846e940e10e4841bc8ca49f1->leave($__internal_bcefd07202cff15280207ab860b91ba49913cff2846e940e10e4841bc8ca49f1_prof);

        
        $__internal_c01345f3facc610e25dc4ab8ce79de7083db3665b7a74f9acee0e50ebc7b37b7->leave($__internal_c01345f3facc610e25dc4ab8ce79de7083db3665b7a74f9acee0e50ebc7b37b7_prof);

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
