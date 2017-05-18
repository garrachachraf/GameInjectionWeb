<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e7fbe8a1c1113b497b8fd8c2d3eede709ae29eab512872fe01e470241c8d246f extends Twig_Template
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
        $__internal_317e177d391f37ff969bdcf4032a62c31cc3043f389b6f63b61823574645c24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317e177d391f37ff969bdcf4032a62c31cc3043f389b6f63b61823574645c24e->enter($__internal_317e177d391f37ff969bdcf4032a62c31cc3043f389b6f63b61823574645c24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_066eee90536815a884d97795deb135d5eee962e63b92357cf663b6ba5805f0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066eee90536815a884d97795deb135d5eee962e63b92357cf663b6ba5805f0e3->enter($__internal_066eee90536815a884d97795deb135d5eee962e63b92357cf663b6ba5805f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317e177d391f37ff969bdcf4032a62c31cc3043f389b6f63b61823574645c24e->leave($__internal_317e177d391f37ff969bdcf4032a62c31cc3043f389b6f63b61823574645c24e_prof);

        
        $__internal_066eee90536815a884d97795deb135d5eee962e63b92357cf663b6ba5805f0e3->leave($__internal_066eee90536815a884d97795deb135d5eee962e63b92357cf663b6ba5805f0e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e268832113c198fce5138762bbaab3b7256621df9da9571b7433ecfd857bedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e268832113c198fce5138762bbaab3b7256621df9da9571b7433ecfd857bedd->enter($__internal_2e268832113c198fce5138762bbaab3b7256621df9da9571b7433ecfd857bedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d53fcfba093c1456a729adb6014c7a627ee8c2e5a46d8704db490c4b7c0c7e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53fcfba093c1456a729adb6014c7a627ee8c2e5a46d8704db490c4b7c0c7e6b->enter($__internal_d53fcfba093c1456a729adb6014c7a627ee8c2e5a46d8704db490c4b7c0c7e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d53fcfba093c1456a729adb6014c7a627ee8c2e5a46d8704db490c4b7c0c7e6b->leave($__internal_d53fcfba093c1456a729adb6014c7a627ee8c2e5a46d8704db490c4b7c0c7e6b_prof);

        
        $__internal_2e268832113c198fce5138762bbaab3b7256621df9da9571b7433ecfd857bedd->leave($__internal_2e268832113c198fce5138762bbaab3b7256621df9da9571b7433ecfd857bedd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77a325a9dc1bfe9b3d63240a166fdc63fa5e3f7394cbe2b058149b5779a4218b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a325a9dc1bfe9b3d63240a166fdc63fa5e3f7394cbe2b058149b5779a4218b->enter($__internal_77a325a9dc1bfe9b3d63240a166fdc63fa5e3f7394cbe2b058149b5779a4218b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_03cf31685b305ef3d169e870d396c09222c839ff3645242f89afc8dff56f99ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cf31685b305ef3d169e870d396c09222c839ff3645242f89afc8dff56f99ea->enter($__internal_03cf31685b305ef3d169e870d396c09222c839ff3645242f89afc8dff56f99ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_03cf31685b305ef3d169e870d396c09222c839ff3645242f89afc8dff56f99ea->leave($__internal_03cf31685b305ef3d169e870d396c09222c839ff3645242f89afc8dff56f99ea_prof);

        
        $__internal_77a325a9dc1bfe9b3d63240a166fdc63fa5e3f7394cbe2b058149b5779a4218b->leave($__internal_77a325a9dc1bfe9b3d63240a166fdc63fa5e3f7394cbe2b058149b5779a4218b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fca0622c8b99e1cc8a0912cd278203135e5a2ade191ee39ff942c8109b62923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fca0622c8b99e1cc8a0912cd278203135e5a2ade191ee39ff942c8109b62923->enter($__internal_4fca0622c8b99e1cc8a0912cd278203135e5a2ade191ee39ff942c8109b62923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3893245bc5b18821de76272b8dcde8ba67483461d039c5d486a2710afd36fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3893245bc5b18821de76272b8dcde8ba67483461d039c5d486a2710afd36fad->enter($__internal_b3893245bc5b18821de76272b8dcde8ba67483461d039c5d486a2710afd36fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b3893245bc5b18821de76272b8dcde8ba67483461d039c5d486a2710afd36fad->leave($__internal_b3893245bc5b18821de76272b8dcde8ba67483461d039c5d486a2710afd36fad_prof);

        
        $__internal_4fca0622c8b99e1cc8a0912cd278203135e5a2ade191ee39ff942c8109b62923->leave($__internal_4fca0622c8b99e1cc8a0912cd278203135e5a2ade191ee39ff942c8109b62923_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
