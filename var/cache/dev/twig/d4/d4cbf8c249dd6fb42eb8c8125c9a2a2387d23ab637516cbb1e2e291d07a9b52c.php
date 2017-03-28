<?php

/* ::base.html.twig */
class __TwigTemplate_24b59280ff59f5629e7cbc8a69f72a2c1f34e92e092a859f088665548f2ec62a extends Twig_Template
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
        $__internal_fe02f1707c15d029f8cd30b7ad69461587c74173be2fa420934171ab06011d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe02f1707c15d029f8cd30b7ad69461587c74173be2fa420934171ab06011d0c->enter($__internal_fe02f1707c15d029f8cd30b7ad69461587c74173be2fa420934171ab06011d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_136e455b0d2ed3a7b25e74065cec0d7b25b9e4dcf0fa76ddab8a83f324bf23dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136e455b0d2ed3a7b25e74065cec0d7b25b9e4dcf0fa76ddab8a83f324bf23dd->enter($__internal_136e455b0d2ed3a7b25e74065cec0d7b25b9e4dcf0fa76ddab8a83f324bf23dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fe02f1707c15d029f8cd30b7ad69461587c74173be2fa420934171ab06011d0c->leave($__internal_fe02f1707c15d029f8cd30b7ad69461587c74173be2fa420934171ab06011d0c_prof);

        
        $__internal_136e455b0d2ed3a7b25e74065cec0d7b25b9e4dcf0fa76ddab8a83f324bf23dd->leave($__internal_136e455b0d2ed3a7b25e74065cec0d7b25b9e4dcf0fa76ddab8a83f324bf23dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca012bd02949fffa1c38aa360cf485a503b843c47a406172e8c268ef4eaba394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca012bd02949fffa1c38aa360cf485a503b843c47a406172e8c268ef4eaba394->enter($__internal_ca012bd02949fffa1c38aa360cf485a503b843c47a406172e8c268ef4eaba394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19921589cb4f972e6a3c1bebf0fb34e8ac3d5eaaa37e64b96535877937889862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19921589cb4f972e6a3c1bebf0fb34e8ac3d5eaaa37e64b96535877937889862->enter($__internal_19921589cb4f972e6a3c1bebf0fb34e8ac3d5eaaa37e64b96535877937889862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_19921589cb4f972e6a3c1bebf0fb34e8ac3d5eaaa37e64b96535877937889862->leave($__internal_19921589cb4f972e6a3c1bebf0fb34e8ac3d5eaaa37e64b96535877937889862_prof);

        
        $__internal_ca012bd02949fffa1c38aa360cf485a503b843c47a406172e8c268ef4eaba394->leave($__internal_ca012bd02949fffa1c38aa360cf485a503b843c47a406172e8c268ef4eaba394_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e08e475e23fe4bf1d096b94bcf14dc68d43bf85c5ac39715b6c6bc05c4dc827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e08e475e23fe4bf1d096b94bcf14dc68d43bf85c5ac39715b6c6bc05c4dc827->enter($__internal_6e08e475e23fe4bf1d096b94bcf14dc68d43bf85c5ac39715b6c6bc05c4dc827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ea218986a3d827564d3b0519f583c205e71f3315ba47cd46f2cba401d12d849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea218986a3d827564d3b0519f583c205e71f3315ba47cd46f2cba401d12d849->enter($__internal_2ea218986a3d827564d3b0519f583c205e71f3315ba47cd46f2cba401d12d849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ea218986a3d827564d3b0519f583c205e71f3315ba47cd46f2cba401d12d849->leave($__internal_2ea218986a3d827564d3b0519f583c205e71f3315ba47cd46f2cba401d12d849_prof);

        
        $__internal_6e08e475e23fe4bf1d096b94bcf14dc68d43bf85c5ac39715b6c6bc05c4dc827->leave($__internal_6e08e475e23fe4bf1d096b94bcf14dc68d43bf85c5ac39715b6c6bc05c4dc827_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_83481c89a0602146cf18e75ad145da3173494b664491773659cbe75523a52b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83481c89a0602146cf18e75ad145da3173494b664491773659cbe75523a52b11->enter($__internal_83481c89a0602146cf18e75ad145da3173494b664491773659cbe75523a52b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e450d57916a521f7bd5864a52c33bd32412e9f94da51b5ae865dfaec1d76fd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e450d57916a521f7bd5864a52c33bd32412e9f94da51b5ae865dfaec1d76fd09->enter($__internal_e450d57916a521f7bd5864a52c33bd32412e9f94da51b5ae865dfaec1d76fd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e450d57916a521f7bd5864a52c33bd32412e9f94da51b5ae865dfaec1d76fd09->leave($__internal_e450d57916a521f7bd5864a52c33bd32412e9f94da51b5ae865dfaec1d76fd09_prof);

        
        $__internal_83481c89a0602146cf18e75ad145da3173494b664491773659cbe75523a52b11->leave($__internal_83481c89a0602146cf18e75ad145da3173494b664491773659cbe75523a52b11_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_562cf32a3c89daa8747fb2d76b9839f3db7ddda70925b48f542efea5b0b57379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562cf32a3c89daa8747fb2d76b9839f3db7ddda70925b48f542efea5b0b57379->enter($__internal_562cf32a3c89daa8747fb2d76b9839f3db7ddda70925b48f542efea5b0b57379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc41f92c77b789684c34c70baadcaa456e88bc1880dad865a91219294ffbd9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc41f92c77b789684c34c70baadcaa456e88bc1880dad865a91219294ffbd9b5->enter($__internal_bc41f92c77b789684c34c70baadcaa456e88bc1880dad865a91219294ffbd9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc41f92c77b789684c34c70baadcaa456e88bc1880dad865a91219294ffbd9b5->leave($__internal_bc41f92c77b789684c34c70baadcaa456e88bc1880dad865a91219294ffbd9b5_prof);

        
        $__internal_562cf32a3c89daa8747fb2d76b9839f3db7ddda70925b48f542efea5b0b57379->leave($__internal_562cf32a3c89daa8747fb2d76b9839f3db7ddda70925b48f542efea5b0b57379_prof);

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
