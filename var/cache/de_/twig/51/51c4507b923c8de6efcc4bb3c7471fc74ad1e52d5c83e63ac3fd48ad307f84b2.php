<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bbc7c7a4edc288b0b6b902490124e05b7d36cf623fe5c20b774fa45a06c5913b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea4010183b6c6dac7d2ca269ce4a577fc1c4ed1edeb1da9e9b611c60bcf5afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea4010183b6c6dac7d2ca269ce4a577fc1c4ed1edeb1da9e9b611c60bcf5afb->enter($__internal_dea4010183b6c6dac7d2ca269ce4a577fc1c4ed1edeb1da9e9b611c60bcf5afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f689405094ca147d505131d0d2fe00d0b1543100749ee06c146e1074f7d0eaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f689405094ca147d505131d0d2fe00d0b1543100749ee06c146e1074f7d0eaa7->enter($__internal_f689405094ca147d505131d0d2fe00d0b1543100749ee06c146e1074f7d0eaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea4010183b6c6dac7d2ca269ce4a577fc1c4ed1edeb1da9e9b611c60bcf5afb->leave($__internal_dea4010183b6c6dac7d2ca269ce4a577fc1c4ed1edeb1da9e9b611c60bcf5afb_prof);

        
        $__internal_f689405094ca147d505131d0d2fe00d0b1543100749ee06c146e1074f7d0eaa7->leave($__internal_f689405094ca147d505131d0d2fe00d0b1543100749ee06c146e1074f7d0eaa7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec6e41f149bc3e7b395489f1790dbd39dd3c3205fcfd52efdad8794671767c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6e41f149bc3e7b395489f1790dbd39dd3c3205fcfd52efdad8794671767c26->enter($__internal_ec6e41f149bc3e7b395489f1790dbd39dd3c3205fcfd52efdad8794671767c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c142fc96c7fcf838b7cb3803a9701479e4aad1da04b8ce6549c76bcf2905d8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c142fc96c7fcf838b7cb3803a9701479e4aad1da04b8ce6549c76bcf2905d8f1->enter($__internal_c142fc96c7fcf838b7cb3803a9701479e4aad1da04b8ce6549c76bcf2905d8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c142fc96c7fcf838b7cb3803a9701479e4aad1da04b8ce6549c76bcf2905d8f1->leave($__internal_c142fc96c7fcf838b7cb3803a9701479e4aad1da04b8ce6549c76bcf2905d8f1_prof);

        
        $__internal_ec6e41f149bc3e7b395489f1790dbd39dd3c3205fcfd52efdad8794671767c26->leave($__internal_ec6e41f149bc3e7b395489f1790dbd39dd3c3205fcfd52efdad8794671767c26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41d27aa8df9e84b92295355097ad8a64c1ea583edcc67cefde00db96c67d918c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d27aa8df9e84b92295355097ad8a64c1ea583edcc67cefde00db96c67d918c->enter($__internal_41d27aa8df9e84b92295355097ad8a64c1ea583edcc67cefde00db96c67d918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61bd24c8b6a1e481698c486588fb88794aa54d536332c9774e4f2d2e718b570c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bd24c8b6a1e481698c486588fb88794aa54d536332c9774e4f2d2e718b570c->enter($__internal_61bd24c8b6a1e481698c486588fb88794aa54d536332c9774e4f2d2e718b570c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_61bd24c8b6a1e481698c486588fb88794aa54d536332c9774e4f2d2e718b570c->leave($__internal_61bd24c8b6a1e481698c486588fb88794aa54d536332c9774e4f2d2e718b570c_prof);

        
        $__internal_41d27aa8df9e84b92295355097ad8a64c1ea583edcc67cefde00db96c67d918c->leave($__internal_41d27aa8df9e84b92295355097ad8a64c1ea583edcc67cefde00db96c67d918c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
