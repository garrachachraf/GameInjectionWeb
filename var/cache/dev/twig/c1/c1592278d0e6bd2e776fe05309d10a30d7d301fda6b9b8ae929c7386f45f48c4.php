<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_93b3652ee3bb9d2cac9b770fd797031583db03585415cbbaa748e68c5e92cb3a extends Twig_Template
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
        $__internal_bb5ed92acae4cbea6567257f8e98f9c1cb722ab7c15bbcf2b40f0a93b30a66e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5ed92acae4cbea6567257f8e98f9c1cb722ab7c15bbcf2b40f0a93b30a66e8->enter($__internal_bb5ed92acae4cbea6567257f8e98f9c1cb722ab7c15bbcf2b40f0a93b30a66e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_64343309527bc3d11da5dd8f30931276c4a630e107cf2d832cd39198c28b8fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64343309527bc3d11da5dd8f30931276c4a630e107cf2d832cd39198c28b8fb4->enter($__internal_64343309527bc3d11da5dd8f30931276c4a630e107cf2d832cd39198c28b8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5ed92acae4cbea6567257f8e98f9c1cb722ab7c15bbcf2b40f0a93b30a66e8->leave($__internal_bb5ed92acae4cbea6567257f8e98f9c1cb722ab7c15bbcf2b40f0a93b30a66e8_prof);

        
        $__internal_64343309527bc3d11da5dd8f30931276c4a630e107cf2d832cd39198c28b8fb4->leave($__internal_64343309527bc3d11da5dd8f30931276c4a630e107cf2d832cd39198c28b8fb4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd5f250833b6268e8d6101ad15724cb9338fc39343a182c879e87a222feadb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5f250833b6268e8d6101ad15724cb9338fc39343a182c879e87a222feadb8a->enter($__internal_bd5f250833b6268e8d6101ad15724cb9338fc39343a182c879e87a222feadb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b07253ba62abbebf10cfc222fd76342368b3e77bbdf0ca7f7559da8042e72e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07253ba62abbebf10cfc222fd76342368b3e77bbdf0ca7f7559da8042e72e0a->enter($__internal_b07253ba62abbebf10cfc222fd76342368b3e77bbdf0ca7f7559da8042e72e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b07253ba62abbebf10cfc222fd76342368b3e77bbdf0ca7f7559da8042e72e0a->leave($__internal_b07253ba62abbebf10cfc222fd76342368b3e77bbdf0ca7f7559da8042e72e0a_prof);

        
        $__internal_bd5f250833b6268e8d6101ad15724cb9338fc39343a182c879e87a222feadb8a->leave($__internal_bd5f250833b6268e8d6101ad15724cb9338fc39343a182c879e87a222feadb8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da9d41f25ce0cbe61c3890fccc599d51ea02308a3fe7fe150b6b4d703e09023b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9d41f25ce0cbe61c3890fccc599d51ea02308a3fe7fe150b6b4d703e09023b->enter($__internal_da9d41f25ce0cbe61c3890fccc599d51ea02308a3fe7fe150b6b4d703e09023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee299fea515a776ce7ddec6e97c6c68efe012d808575a93f76646f8df7d977d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee299fea515a776ce7ddec6e97c6c68efe012d808575a93f76646f8df7d977d2->enter($__internal_ee299fea515a776ce7ddec6e97c6c68efe012d808575a93f76646f8df7d977d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee299fea515a776ce7ddec6e97c6c68efe012d808575a93f76646f8df7d977d2->leave($__internal_ee299fea515a776ce7ddec6e97c6c68efe012d808575a93f76646f8df7d977d2_prof);

        
        $__internal_da9d41f25ce0cbe61c3890fccc599d51ea02308a3fe7fe150b6b4d703e09023b->leave($__internal_da9d41f25ce0cbe61c3890fccc599d51ea02308a3fe7fe150b6b4d703e09023b_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
