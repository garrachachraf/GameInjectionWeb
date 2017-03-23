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
        $__internal_61e5a158d43506cfed38bc8a3f52c5593cad04f2694b89de24dbea289cac6dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e5a158d43506cfed38bc8a3f52c5593cad04f2694b89de24dbea289cac6dd5->enter($__internal_61e5a158d43506cfed38bc8a3f52c5593cad04f2694b89de24dbea289cac6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c6cdb0f0a591bbf482f90dd77e5bf1ae782251a4792678ca54b1d9a99c6674cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cdb0f0a591bbf482f90dd77e5bf1ae782251a4792678ca54b1d9a99c6674cd->enter($__internal_c6cdb0f0a591bbf482f90dd77e5bf1ae782251a4792678ca54b1d9a99c6674cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_61e5a158d43506cfed38bc8a3f52c5593cad04f2694b89de24dbea289cac6dd5->leave($__internal_61e5a158d43506cfed38bc8a3f52c5593cad04f2694b89de24dbea289cac6dd5_prof);

        
        $__internal_c6cdb0f0a591bbf482f90dd77e5bf1ae782251a4792678ca54b1d9a99c6674cd->leave($__internal_c6cdb0f0a591bbf482f90dd77e5bf1ae782251a4792678ca54b1d9a99c6674cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ccdf2fdcbb53f948ceee84ed3ea0c17026fad8ade48c77b72d8c461257e5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ccdf2fdcbb53f948ceee84ed3ea0c17026fad8ade48c77b72d8c461257e5c3->enter($__internal_58ccdf2fdcbb53f948ceee84ed3ea0c17026fad8ade48c77b72d8c461257e5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2cabc0443bdb7b09dd9cd8394f2d505cf7122caa4ca9e3ea0422d8e0adf5584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cabc0443bdb7b09dd9cd8394f2d505cf7122caa4ca9e3ea0422d8e0adf5584->enter($__internal_d2cabc0443bdb7b09dd9cd8394f2d505cf7122caa4ca9e3ea0422d8e0adf5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d2cabc0443bdb7b09dd9cd8394f2d505cf7122caa4ca9e3ea0422d8e0adf5584->leave($__internal_d2cabc0443bdb7b09dd9cd8394f2d505cf7122caa4ca9e3ea0422d8e0adf5584_prof);

        
        $__internal_58ccdf2fdcbb53f948ceee84ed3ea0c17026fad8ade48c77b72d8c461257e5c3->leave($__internal_58ccdf2fdcbb53f948ceee84ed3ea0c17026fad8ade48c77b72d8c461257e5c3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_737ea358ae968a405bb093070ec1187a78b09742559d960b95dfd694b16df7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737ea358ae968a405bb093070ec1187a78b09742559d960b95dfd694b16df7df->enter($__internal_737ea358ae968a405bb093070ec1187a78b09742559d960b95dfd694b16df7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_34f069a09d9781383504362374b23e5f9365e227e436cdbccba7ee8493207d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f069a09d9781383504362374b23e5f9365e227e436cdbccba7ee8493207d05->enter($__internal_34f069a09d9781383504362374b23e5f9365e227e436cdbccba7ee8493207d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_34f069a09d9781383504362374b23e5f9365e227e436cdbccba7ee8493207d05->leave($__internal_34f069a09d9781383504362374b23e5f9365e227e436cdbccba7ee8493207d05_prof);

        
        $__internal_737ea358ae968a405bb093070ec1187a78b09742559d960b95dfd694b16df7df->leave($__internal_737ea358ae968a405bb093070ec1187a78b09742559d960b95dfd694b16df7df_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d196380c2eb3906b5c373b159a1c47bd8aacd7b21740a2e86cfb180b16a7f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d196380c2eb3906b5c373b159a1c47bd8aacd7b21740a2e86cfb180b16a7f8b->enter($__internal_2d196380c2eb3906b5c373b159a1c47bd8aacd7b21740a2e86cfb180b16a7f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64bf0350edd20c3af91796e392569f2721e4f82f0eb8ea834733a5710b2b80f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bf0350edd20c3af91796e392569f2721e4f82f0eb8ea834733a5710b2b80f0->enter($__internal_64bf0350edd20c3af91796e392569f2721e4f82f0eb8ea834733a5710b2b80f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64bf0350edd20c3af91796e392569f2721e4f82f0eb8ea834733a5710b2b80f0->leave($__internal_64bf0350edd20c3af91796e392569f2721e4f82f0eb8ea834733a5710b2b80f0_prof);

        
        $__internal_2d196380c2eb3906b5c373b159a1c47bd8aacd7b21740a2e86cfb180b16a7f8b->leave($__internal_2d196380c2eb3906b5c373b159a1c47bd8aacd7b21740a2e86cfb180b16a7f8b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a3b47567ae90d8bb2a821046d17ac4ccafa7b1e26e19af6317ccda5ddf0a05b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3b47567ae90d8bb2a821046d17ac4ccafa7b1e26e19af6317ccda5ddf0a05b->enter($__internal_4a3b47567ae90d8bb2a821046d17ac4ccafa7b1e26e19af6317ccda5ddf0a05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d11b8661b4adb3747d50ac01791e557749a8f18ac922637d850eb873157e8888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11b8661b4adb3747d50ac01791e557749a8f18ac922637d850eb873157e8888->enter($__internal_d11b8661b4adb3747d50ac01791e557749a8f18ac922637d850eb873157e8888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d11b8661b4adb3747d50ac01791e557749a8f18ac922637d850eb873157e8888->leave($__internal_d11b8661b4adb3747d50ac01791e557749a8f18ac922637d850eb873157e8888_prof);

        
        $__internal_4a3b47567ae90d8bb2a821046d17ac4ccafa7b1e26e19af6317ccda5ddf0a05b->leave($__internal_4a3b47567ae90d8bb2a821046d17ac4ccafa7b1e26e19af6317ccda5ddf0a05b_prof);

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
