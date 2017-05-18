<?php

/* base.html.twig */
class __TwigTemplate_ece17875bb3d5efd250f6b931913029033e3f44c802bc2b981bce665caa515f2 extends Twig_Template
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
        $__internal_21a7223352ac830f43ab06649ebfbe927434feb092e9c08a6a4776583838257e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a7223352ac830f43ab06649ebfbe927434feb092e9c08a6a4776583838257e->enter($__internal_21a7223352ac830f43ab06649ebfbe927434feb092e9c08a6a4776583838257e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b57ffdf0d343b34ec449f2b2ac2102c584858bc7dc4a7319c91aca7c77bba76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57ffdf0d343b34ec449f2b2ac2102c584858bc7dc4a7319c91aca7c77bba76c->enter($__internal_b57ffdf0d343b34ec449f2b2ac2102c584858bc7dc4a7319c91aca7c77bba76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_21a7223352ac830f43ab06649ebfbe927434feb092e9c08a6a4776583838257e->leave($__internal_21a7223352ac830f43ab06649ebfbe927434feb092e9c08a6a4776583838257e_prof);

        
        $__internal_b57ffdf0d343b34ec449f2b2ac2102c584858bc7dc4a7319c91aca7c77bba76c->leave($__internal_b57ffdf0d343b34ec449f2b2ac2102c584858bc7dc4a7319c91aca7c77bba76c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b978b52723569e8d7c0bbacadebd2e5c3730454cdda3b4380bd1b93c291c4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b978b52723569e8d7c0bbacadebd2e5c3730454cdda3b4380bd1b93c291c4fa->enter($__internal_7b978b52723569e8d7c0bbacadebd2e5c3730454cdda3b4380bd1b93c291c4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67a18752d70afa76000dbc6418789abb68ed66bacb301f6a5cb6ddb74f48ef88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a18752d70afa76000dbc6418789abb68ed66bacb301f6a5cb6ddb74f48ef88->enter($__internal_67a18752d70afa76000dbc6418789abb68ed66bacb301f6a5cb6ddb74f48ef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_67a18752d70afa76000dbc6418789abb68ed66bacb301f6a5cb6ddb74f48ef88->leave($__internal_67a18752d70afa76000dbc6418789abb68ed66bacb301f6a5cb6ddb74f48ef88_prof);

        
        $__internal_7b978b52723569e8d7c0bbacadebd2e5c3730454cdda3b4380bd1b93c291c4fa->leave($__internal_7b978b52723569e8d7c0bbacadebd2e5c3730454cdda3b4380bd1b93c291c4fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_749d02b137c9c92cbd23db9ada9471ac78fbaf5ec0ad7423ba518292cb4b7abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749d02b137c9c92cbd23db9ada9471ac78fbaf5ec0ad7423ba518292cb4b7abf->enter($__internal_749d02b137c9c92cbd23db9ada9471ac78fbaf5ec0ad7423ba518292cb4b7abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4dffbefe4c0057bd33916bed5b68d29c567d81cf219e081c1b0d151c7788e1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dffbefe4c0057bd33916bed5b68d29c567d81cf219e081c1b0d151c7788e1e1->enter($__internal_4dffbefe4c0057bd33916bed5b68d29c567d81cf219e081c1b0d151c7788e1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4dffbefe4c0057bd33916bed5b68d29c567d81cf219e081c1b0d151c7788e1e1->leave($__internal_4dffbefe4c0057bd33916bed5b68d29c567d81cf219e081c1b0d151c7788e1e1_prof);

        
        $__internal_749d02b137c9c92cbd23db9ada9471ac78fbaf5ec0ad7423ba518292cb4b7abf->leave($__internal_749d02b137c9c92cbd23db9ada9471ac78fbaf5ec0ad7423ba518292cb4b7abf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba97b87b51d6cab60f8cec1d2fabe68a2ea69b838ee08b0d7e063390c09b0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba97b87b51d6cab60f8cec1d2fabe68a2ea69b838ee08b0d7e063390c09b0b2->enter($__internal_fba97b87b51d6cab60f8cec1d2fabe68a2ea69b838ee08b0d7e063390c09b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdbad8c89629761569997cb4fc00b38c485f93eaae25ad6665d6a2655bef79cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbad8c89629761569997cb4fc00b38c485f93eaae25ad6665d6a2655bef79cc->enter($__internal_cdbad8c89629761569997cb4fc00b38c485f93eaae25ad6665d6a2655bef79cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cdbad8c89629761569997cb4fc00b38c485f93eaae25ad6665d6a2655bef79cc->leave($__internal_cdbad8c89629761569997cb4fc00b38c485f93eaae25ad6665d6a2655bef79cc_prof);

        
        $__internal_fba97b87b51d6cab60f8cec1d2fabe68a2ea69b838ee08b0d7e063390c09b0b2->leave($__internal_fba97b87b51d6cab60f8cec1d2fabe68a2ea69b838ee08b0d7e063390c09b0b2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_267c1038adfd55fc9477d525e7d457f3f5627ec7cb46ec30e9d0bc782b623964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267c1038adfd55fc9477d525e7d457f3f5627ec7cb46ec30e9d0bc782b623964->enter($__internal_267c1038adfd55fc9477d525e7d457f3f5627ec7cb46ec30e9d0bc782b623964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86e8b36645f7b30671f32f74d68b1482d119909b1e117d1bfc91fa54ad5a3b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e8b36645f7b30671f32f74d68b1482d119909b1e117d1bfc91fa54ad5a3b05->enter($__internal_86e8b36645f7b30671f32f74d68b1482d119909b1e117d1bfc91fa54ad5a3b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86e8b36645f7b30671f32f74d68b1482d119909b1e117d1bfc91fa54ad5a3b05->leave($__internal_86e8b36645f7b30671f32f74d68b1482d119909b1e117d1bfc91fa54ad5a3b05_prof);

        
        $__internal_267c1038adfd55fc9477d525e7d457f3f5627ec7cb46ec30e9d0bc782b623964->leave($__internal_267c1038adfd55fc9477d525e7d457f3f5627ec7cb46ec30e9d0bc782b623964_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "/Applications/MAMP/htdocs/nn/app/Resources/views/base.html.twig");
    }
}
