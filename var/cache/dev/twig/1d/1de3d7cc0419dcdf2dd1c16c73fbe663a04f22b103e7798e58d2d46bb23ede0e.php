<?php

/* ::base.html.twig */
class __TwigTemplate_8f2e22d31df9c6c4aa5f521ef24cd1f6255ac1fa20809541f5919337925ccc16 extends Twig_Template
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
        $__internal_5948fd73e5751004456afe43245cee11dd53dfb65ef7c609fd79a94456f928e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5948fd73e5751004456afe43245cee11dd53dfb65ef7c609fd79a94456f928e3->enter($__internal_5948fd73e5751004456afe43245cee11dd53dfb65ef7c609fd79a94456f928e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_dd03c67254ff4dec31b948041838ef59256a90c3a7a3aadf37e09f3ac7f303be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd03c67254ff4dec31b948041838ef59256a90c3a7a3aadf37e09f3ac7f303be->enter($__internal_dd03c67254ff4dec31b948041838ef59256a90c3a7a3aadf37e09f3ac7f303be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5948fd73e5751004456afe43245cee11dd53dfb65ef7c609fd79a94456f928e3->leave($__internal_5948fd73e5751004456afe43245cee11dd53dfb65ef7c609fd79a94456f928e3_prof);

        
        $__internal_dd03c67254ff4dec31b948041838ef59256a90c3a7a3aadf37e09f3ac7f303be->leave($__internal_dd03c67254ff4dec31b948041838ef59256a90c3a7a3aadf37e09f3ac7f303be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b388e5fded942d9b435f6773e304bfbef920e0aa09b5d32f22b711fa07660879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b388e5fded942d9b435f6773e304bfbef920e0aa09b5d32f22b711fa07660879->enter($__internal_b388e5fded942d9b435f6773e304bfbef920e0aa09b5d32f22b711fa07660879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1ae94200eec95842fead03a288cbb0948210596d4f923924e75acb81280f1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ae94200eec95842fead03a288cbb0948210596d4f923924e75acb81280f1d0->enter($__internal_f1ae94200eec95842fead03a288cbb0948210596d4f923924e75acb81280f1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f1ae94200eec95842fead03a288cbb0948210596d4f923924e75acb81280f1d0->leave($__internal_f1ae94200eec95842fead03a288cbb0948210596d4f923924e75acb81280f1d0_prof);

        
        $__internal_b388e5fded942d9b435f6773e304bfbef920e0aa09b5d32f22b711fa07660879->leave($__internal_b388e5fded942d9b435f6773e304bfbef920e0aa09b5d32f22b711fa07660879_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0f134c7439c0cabb41005faf757ccc32848c7176bcada2cda909f20f9813f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f134c7439c0cabb41005faf757ccc32848c7176bcada2cda909f20f9813f4b->enter($__internal_c0f134c7439c0cabb41005faf757ccc32848c7176bcada2cda909f20f9813f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_912924f03d35c25b65a3128c4b4e551c1ad16ba13ea2f0dfe568ab2726b8a375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912924f03d35c25b65a3128c4b4e551c1ad16ba13ea2f0dfe568ab2726b8a375->enter($__internal_912924f03d35c25b65a3128c4b4e551c1ad16ba13ea2f0dfe568ab2726b8a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_912924f03d35c25b65a3128c4b4e551c1ad16ba13ea2f0dfe568ab2726b8a375->leave($__internal_912924f03d35c25b65a3128c4b4e551c1ad16ba13ea2f0dfe568ab2726b8a375_prof);

        
        $__internal_c0f134c7439c0cabb41005faf757ccc32848c7176bcada2cda909f20f9813f4b->leave($__internal_c0f134c7439c0cabb41005faf757ccc32848c7176bcada2cda909f20f9813f4b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_652dddd0ec68a1294c880e6c6bb0bd21a57ad24dab432ead1c2473517f8854cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652dddd0ec68a1294c880e6c6bb0bd21a57ad24dab432ead1c2473517f8854cc->enter($__internal_652dddd0ec68a1294c880e6c6bb0bd21a57ad24dab432ead1c2473517f8854cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26a275022fa74618e38f32717dbd41170db8c99a3a99eacdd1c6e1acc04ab792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a275022fa74618e38f32717dbd41170db8c99a3a99eacdd1c6e1acc04ab792->enter($__internal_26a275022fa74618e38f32717dbd41170db8c99a3a99eacdd1c6e1acc04ab792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26a275022fa74618e38f32717dbd41170db8c99a3a99eacdd1c6e1acc04ab792->leave($__internal_26a275022fa74618e38f32717dbd41170db8c99a3a99eacdd1c6e1acc04ab792_prof);

        
        $__internal_652dddd0ec68a1294c880e6c6bb0bd21a57ad24dab432ead1c2473517f8854cc->leave($__internal_652dddd0ec68a1294c880e6c6bb0bd21a57ad24dab432ead1c2473517f8854cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37f45ebfe015c73949f8655481e6d7c87f9079b93093d537465792851e88cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f45ebfe015c73949f8655481e6d7c87f9079b93093d537465792851e88cb78->enter($__internal_37f45ebfe015c73949f8655481e6d7c87f9079b93093d537465792851e88cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_42665bcc6228b2c681eeba37e635e329b77510c4f31b5ed044367fec944434ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42665bcc6228b2c681eeba37e635e329b77510c4f31b5ed044367fec944434ef->enter($__internal_42665bcc6228b2c681eeba37e635e329b77510c4f31b5ed044367fec944434ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42665bcc6228b2c681eeba37e635e329b77510c4f31b5ed044367fec944434ef->leave($__internal_42665bcc6228b2c681eeba37e635e329b77510c4f31b5ed044367fec944434ef_prof);

        
        $__internal_37f45ebfe015c73949f8655481e6d7c87f9079b93093d537465792851e88cb78->leave($__internal_37f45ebfe015c73949f8655481e6d7c87f9079b93093d537465792851e88cb78_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\testmerge\\app/Resources\\views/base.html.twig");
    }
}
