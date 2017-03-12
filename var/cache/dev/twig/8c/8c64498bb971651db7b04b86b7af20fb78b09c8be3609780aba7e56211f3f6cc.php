<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_dcf3bee414f70ac0818df3c1edaaf6664fbf194907bf635c90f705e2b083c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf3bee414f70ac0818df3c1edaaf6664fbf194907bf635c90f705e2b083c538->enter($__internal_dcf3bee414f70ac0818df3c1edaaf6664fbf194907bf635c90f705e2b083c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_da2774aeb55a28953ec603092da4c3db7882637bf14e342d8c368db723763839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2774aeb55a28953ec603092da4c3db7882637bf14e342d8c368db723763839->enter($__internal_da2774aeb55a28953ec603092da4c3db7882637bf14e342d8c368db723763839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcf3bee414f70ac0818df3c1edaaf6664fbf194907bf635c90f705e2b083c538->leave($__internal_dcf3bee414f70ac0818df3c1edaaf6664fbf194907bf635c90f705e2b083c538_prof);

        
        $__internal_da2774aeb55a28953ec603092da4c3db7882637bf14e342d8c368db723763839->leave($__internal_da2774aeb55a28953ec603092da4c3db7882637bf14e342d8c368db723763839_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a7baac00ecf42ef0bbbf86ce7615372bec80d6e4a31f0e9bc0000f2537c20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a7baac00ecf42ef0bbbf86ce7615372bec80d6e4a31f0e9bc0000f2537c20e->enter($__internal_90a7baac00ecf42ef0bbbf86ce7615372bec80d6e4a31f0e9bc0000f2537c20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03217ce6a3ccd78b69e337c3d00150039e4768ca949e0e314d422924f515dbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03217ce6a3ccd78b69e337c3d00150039e4768ca949e0e314d422924f515dbec->enter($__internal_03217ce6a3ccd78b69e337c3d00150039e4768ca949e0e314d422924f515dbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_03217ce6a3ccd78b69e337c3d00150039e4768ca949e0e314d422924f515dbec->leave($__internal_03217ce6a3ccd78b69e337c3d00150039e4768ca949e0e314d422924f515dbec_prof);

        
        $__internal_90a7baac00ecf42ef0bbbf86ce7615372bec80d6e4a31f0e9bc0000f2537c20e->leave($__internal_90a7baac00ecf42ef0bbbf86ce7615372bec80d6e4a31f0e9bc0000f2537c20e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_978ae213db0fe8a1eff75cdd6e6d718b7fe185703b3c3d4e9cd744c8ad030893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978ae213db0fe8a1eff75cdd6e6d718b7fe185703b3c3d4e9cd744c8ad030893->enter($__internal_978ae213db0fe8a1eff75cdd6e6d718b7fe185703b3c3d4e9cd744c8ad030893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34dca6dc30fba51266184a2eb13801a3c0469401d574fc0214777c23a19141c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dca6dc30fba51266184a2eb13801a3c0469401d574fc0214777c23a19141c4->enter($__internal_34dca6dc30fba51266184a2eb13801a3c0469401d574fc0214777c23a19141c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34dca6dc30fba51266184a2eb13801a3c0469401d574fc0214777c23a19141c4->leave($__internal_34dca6dc30fba51266184a2eb13801a3c0469401d574fc0214777c23a19141c4_prof);

        
        $__internal_978ae213db0fe8a1eff75cdd6e6d718b7fe185703b3c3d4e9cd744c8ad030893->leave($__internal_978ae213db0fe8a1eff75cdd6e6d718b7fe185703b3c3d4e9cd744c8ad030893_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
