<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_345e5968c98773c71cda1449dfa30a87bed26411ba262e28dded41a9e65eddee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_384ce0c97b6d898b00bd5b97bc96e2c7d140e76e4fc3cafe5c3c6d405c81ca7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384ce0c97b6d898b00bd5b97bc96e2c7d140e76e4fc3cafe5c3c6d405c81ca7b->enter($__internal_384ce0c97b6d898b00bd5b97bc96e2c7d140e76e4fc3cafe5c3c6d405c81ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f25a98f6800b85aa0a761b3bc7239574f79ef8982f651b058b32d1779f86d4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a98f6800b85aa0a761b3bc7239574f79ef8982f651b058b32d1779f86d4f3->enter($__internal_f25a98f6800b85aa0a761b3bc7239574f79ef8982f651b058b32d1779f86d4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384ce0c97b6d898b00bd5b97bc96e2c7d140e76e4fc3cafe5c3c6d405c81ca7b->leave($__internal_384ce0c97b6d898b00bd5b97bc96e2c7d140e76e4fc3cafe5c3c6d405c81ca7b_prof);

        
        $__internal_f25a98f6800b85aa0a761b3bc7239574f79ef8982f651b058b32d1779f86d4f3->leave($__internal_f25a98f6800b85aa0a761b3bc7239574f79ef8982f651b058b32d1779f86d4f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3abd338300ab4dbd8d66622107543e452a55519183181cc16a8f278ce302f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3abd338300ab4dbd8d66622107543e452a55519183181cc16a8f278ce302f83->enter($__internal_a3abd338300ab4dbd8d66622107543e452a55519183181cc16a8f278ce302f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e5082b2a0fbc560183130f0a227205b7561bada586353a4ec919bd995b59efc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5082b2a0fbc560183130f0a227205b7561bada586353a4ec919bd995b59efc9->enter($__internal_e5082b2a0fbc560183130f0a227205b7561bada586353a4ec919bd995b59efc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e5082b2a0fbc560183130f0a227205b7561bada586353a4ec919bd995b59efc9->leave($__internal_e5082b2a0fbc560183130f0a227205b7561bada586353a4ec919bd995b59efc9_prof);

        
        $__internal_a3abd338300ab4dbd8d66622107543e452a55519183181cc16a8f278ce302f83->leave($__internal_a3abd338300ab4dbd8d66622107543e452a55519183181cc16a8f278ce302f83_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7bb4de5c68fe4b5d270b8c95bd007aafd9a062c0d7eac826bde0e3322a1e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7bb4de5c68fe4b5d270b8c95bd007aafd9a062c0d7eac826bde0e3322a1e71->enter($__internal_9a7bb4de5c68fe4b5d270b8c95bd007aafd9a062c0d7eac826bde0e3322a1e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0b3af66a717690a4ee41c8e8680c3a81fb918094fc01291acfa748c4b0129ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b3af66a717690a4ee41c8e8680c3a81fb918094fc01291acfa748c4b0129ad->enter($__internal_d0b3af66a717690a4ee41c8e8680c3a81fb918094fc01291acfa748c4b0129ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d0b3af66a717690a4ee41c8e8680c3a81fb918094fc01291acfa748c4b0129ad->leave($__internal_d0b3af66a717690a4ee41c8e8680c3a81fb918094fc01291acfa748c4b0129ad_prof);

        
        $__internal_9a7bb4de5c68fe4b5d270b8c95bd007aafd9a062c0d7eac826bde0e3322a1e71->leave($__internal_9a7bb4de5c68fe4b5d270b8c95bd007aafd9a062c0d7eac826bde0e3322a1e71_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
