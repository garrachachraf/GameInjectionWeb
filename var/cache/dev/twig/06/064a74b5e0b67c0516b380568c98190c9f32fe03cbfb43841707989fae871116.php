<?php

/* ::base.html.twig */
class __TwigTemplate_2dfb870c0c9ee21830f3852bbbe4de3a2c819b3bc1d9bacdf57fa07825a91bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7b920f2ef4c19ae302bde3d9494c5c86c0e9dec409b25201a50633d37f20ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b920f2ef4c19ae302bde3d9494c5c86c0e9dec409b25201a50633d37f20ff0->enter($__internal_e7b920f2ef4c19ae302bde3d9494c5c86c0e9dec409b25201a50633d37f20ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bafe71f2f81a8440955f2a2ce0c5daa150f7f7cbe1650c8fdcfd76ff71389c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafe71f2f81a8440955f2a2ce0c5daa150f7f7cbe1650c8fdcfd76ff71389c58->enter($__internal_bafe71f2f81a8440955f2a2ce0c5daa150f7f7cbe1650c8fdcfd76ff71389c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e7b920f2ef4c19ae302bde3d9494c5c86c0e9dec409b25201a50633d37f20ff0->leave($__internal_e7b920f2ef4c19ae302bde3d9494c5c86c0e9dec409b25201a50633d37f20ff0_prof);

        
        $__internal_bafe71f2f81a8440955f2a2ce0c5daa150f7f7cbe1650c8fdcfd76ff71389c58->leave($__internal_bafe71f2f81a8440955f2a2ce0c5daa150f7f7cbe1650c8fdcfd76ff71389c58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51a61593966b98839326ed94de338aadd58fc38f9a44413e63ad08c28b6a2d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a61593966b98839326ed94de338aadd58fc38f9a44413e63ad08c28b6a2d93->enter($__internal_51a61593966b98839326ed94de338aadd58fc38f9a44413e63ad08c28b6a2d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5c146b7c292041cfc77df7889f0ceecc2e0f97e784b7153868347b8c91f3582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c146b7c292041cfc77df7889f0ceecc2e0f97e784b7153868347b8c91f3582->enter($__internal_b5c146b7c292041cfc77df7889f0ceecc2e0f97e784b7153868347b8c91f3582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b5c146b7c292041cfc77df7889f0ceecc2e0f97e784b7153868347b8c91f3582->leave($__internal_b5c146b7c292041cfc77df7889f0ceecc2e0f97e784b7153868347b8c91f3582_prof);

        
        $__internal_51a61593966b98839326ed94de338aadd58fc38f9a44413e63ad08c28b6a2d93->leave($__internal_51a61593966b98839326ed94de338aadd58fc38f9a44413e63ad08c28b6a2d93_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05933af002620dd3df230f4262df038ae52284fcc0a2ee01be0778172ade14c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05933af002620dd3df230f4262df038ae52284fcc0a2ee01be0778172ade14c4->enter($__internal_05933af002620dd3df230f4262df038ae52284fcc0a2ee01be0778172ade14c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc721889cd81c6c9610402d95e81fec4965700f3203d3b67836ea9a387df1226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc721889cd81c6c9610402d95e81fec4965700f3203d3b67836ea9a387df1226->enter($__internal_cc721889cd81c6c9610402d95e81fec4965700f3203d3b67836ea9a387df1226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc721889cd81c6c9610402d95e81fec4965700f3203d3b67836ea9a387df1226->leave($__internal_cc721889cd81c6c9610402d95e81fec4965700f3203d3b67836ea9a387df1226_prof);

        
        $__internal_05933af002620dd3df230f4262df038ae52284fcc0a2ee01be0778172ade14c4->leave($__internal_05933af002620dd3df230f4262df038ae52284fcc0a2ee01be0778172ade14c4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2dc2e0ee961e961829cccbadbe3523f240e21248b5e9862d69ca309df6fe996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dc2e0ee961e961829cccbadbe3523f240e21248b5e9862d69ca309df6fe996->enter($__internal_b2dc2e0ee961e961829cccbadbe3523f240e21248b5e9862d69ca309df6fe996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65376a2c2f281765440fbc53a61cc18a7c2daae689cedbbdbae7080d9cd7fa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65376a2c2f281765440fbc53a61cc18a7c2daae689cedbbdbae7080d9cd7fa4e->enter($__internal_65376a2c2f281765440fbc53a61cc18a7c2daae689cedbbdbae7080d9cd7fa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65376a2c2f281765440fbc53a61cc18a7c2daae689cedbbdbae7080d9cd7fa4e->leave($__internal_65376a2c2f281765440fbc53a61cc18a7c2daae689cedbbdbae7080d9cd7fa4e_prof);

        
        $__internal_b2dc2e0ee961e961829cccbadbe3523f240e21248b5e9862d69ca309df6fe996->leave($__internal_b2dc2e0ee961e961829cccbadbe3523f240e21248b5e9862d69ca309df6fe996_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_912a1b1e00902714e25300156b951076bd3b22a8bbd3e5d76ed705febdc88837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912a1b1e00902714e25300156b951076bd3b22a8bbd3e5d76ed705febdc88837->enter($__internal_912a1b1e00902714e25300156b951076bd3b22a8bbd3e5d76ed705febdc88837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0f130874e7cc92ca58957192250631f6e0c39ec1e45865f4a0248490d6d61cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f130874e7cc92ca58957192250631f6e0c39ec1e45865f4a0248490d6d61cd->enter($__internal_f0f130874e7cc92ca58957192250631f6e0c39ec1e45865f4a0248490d6d61cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0f130874e7cc92ca58957192250631f6e0c39ec1e45865f4a0248490d6d61cd->leave($__internal_f0f130874e7cc92ca58957192250631f6e0c39ec1e45865f4a0248490d6d61cd_prof);

        
        $__internal_912a1b1e00902714e25300156b951076bd3b22a8bbd3e5d76ed705febdc88837->leave($__internal_912a1b1e00902714e25300156b951076bd3b22a8bbd3e5d76ed705febdc88837_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/base.html.twig");
    }
}
