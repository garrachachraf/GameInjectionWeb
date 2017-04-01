<?php

/* @EloboostedLogin/Default/loginform.html.twig */
class __TwigTemplate_dbc0d1d284470ef0a9341a5f8f64fa64e85ef4bcef044d1962efd235a36ca12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedLogin/Default/loginform.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397e41744779d94a418b0cfd6ab610cada82d538929f31731cc83f36bc61b134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397e41744779d94a418b0cfd6ab610cada82d538929f31731cc83f36bc61b134->enter($__internal_397e41744779d94a418b0cfd6ab610cada82d538929f31731cc83f36bc61b134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_898e8a641bb776f98577daae6595ab6b4aae141c13b88509446245092a0da104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898e8a641bb776f98577daae6595ab6b4aae141c13b88509446245092a0da104->enter($__internal_898e8a641bb776f98577daae6595ab6b4aae141c13b88509446245092a0da104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397e41744779d94a418b0cfd6ab610cada82d538929f31731cc83f36bc61b134->leave($__internal_397e41744779d94a418b0cfd6ab610cada82d538929f31731cc83f36bc61b134_prof);

        
        $__internal_898e8a641bb776f98577daae6595ab6b4aae141c13b88509446245092a0da104->leave($__internal_898e8a641bb776f98577daae6595ab6b4aae141c13b88509446245092a0da104_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7c55bc9a22d0e0996698166459f650b9d3df1d8e2bc088c8041840d1aff7fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c55bc9a22d0e0996698166459f650b9d3df1d8e2bc088c8041840d1aff7fb7->enter($__internal_d7c55bc9a22d0e0996698166459f650b9d3df1d8e2bc088c8041840d1aff7fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c157f35a30d734ef41e70c9607d7b5eebe3b792aca24ed70fc762c4c8ab583b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c157f35a30d734ef41e70c9607d7b5eebe3b792aca24ed70fc762c4c8ab583b->enter($__internal_5c157f35a30d734ef41e70c9607d7b5eebe3b792aca24ed70fc762c4c8ab583b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c157f35a30d734ef41e70c9607d7b5eebe3b792aca24ed70fc762c4c8ab583b->leave($__internal_5c157f35a30d734ef41e70c9607d7b5eebe3b792aca24ed70fc762c4c8ab583b_prof);

        
        $__internal_d7c55bc9a22d0e0996698166459f650b9d3df1d8e2bc088c8041840d1aff7fb7->leave($__internal_d7c55bc9a22d0e0996698166459f650b9d3df1d8e2bc088c8041840d1aff7fb7_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_4028f1249d5955a3b9b1fe7961bb6725945b574e4537964a682ffa711ec74456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4028f1249d5955a3b9b1fe7961bb6725945b574e4537964a682ffa711ec74456->enter($__internal_4028f1249d5955a3b9b1fe7961bb6725945b574e4537964a682ffa711ec74456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_354daf2c5fe2139cbde1aae9e5854fb2124295929e4017c2ea1d7c2a092397bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354daf2c5fe2139cbde1aae9e5854fb2124295929e4017c2ea1d7c2a092397bd->enter($__internal_354daf2c5fe2139cbde1aae9e5854fb2124295929e4017c2ea1d7c2a092397bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <form  method=\"post\">
        <section class=\"hero hero-panel\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-login.jpg"), "html", null, true);
        echo "');\">
            <div class=\"hero-bg\"></div>
            <div class=\"container relative\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                        <div class=\"panel panel-default panel-login\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> Sign In to Gameforest</h3>
                            </div>
                            <div class=\"panel-body\">

                                <div class=\"separator\"><span>GI</span></div>

                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" class=\"form-control\" name=\"login_username\" id=\"login_username\" placeholder=\"Username\">
                                </div>
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-lock\"></i>
                                    <input type=\"password\" class=\"form-control\" name=\"login_password\" id=\"login_password\" placeholder=\"Password\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>

                                <div class=\"form-actions\">
                                    <div class=\"checkbox checkbox-primary\">
                                        <input type=\"checkbox\" id=\"checkbox\">
                                        <label for=\"checkbox\">Remember me</label>
                                    </div>
                                </div>

                            </div>
                            <div class=\"panel-footer\">
                                Don't have Gameforest account? <a href=\"register.html\">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
";
        
        $__internal_354daf2c5fe2139cbde1aae9e5854fb2124295929e4017c2ea1d7c2a092397bd->leave($__internal_354daf2c5fe2139cbde1aae9e5854fb2124295929e4017c2ea1d7c2a092397bd_prof);

        
        $__internal_4028f1249d5955a3b9b1fe7961bb6725945b574e4537964a682ffa711ec74456->leave($__internal_4028f1249d5955a3b9b1fe7961bb6725945b574e4537964a682ffa711ec74456_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedLogin/Default/loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  72 => 7,  63 => 6,  50 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/LoginBundle/Resources/views/Default/loginform.html.twig #}
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block head %}
    {{ parent() }}
{% endblock %}
{% block main %}
    <form  method=\"post\">
        <section class=\"hero hero-panel\" style=\"background-image: url('{{ asset('img/cover/cover-login.jpg')}}');\">
            <div class=\"hero-bg\"></div>
            <div class=\"container relative\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto\">
                        <div class=\"panel panel-default panel-login\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> Sign In to Gameforest</h3>
                            </div>
                            <div class=\"panel-body\">

                                <div class=\"separator\"><span>GI</span></div>

                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-user\"></i>
                                    <input type=\"text\" class=\"form-control\" name=\"login_username\" id=\"login_username\" placeholder=\"Username\">
                                </div>
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-lock\"></i>
                                    <input type=\"password\" class=\"form-control\" name=\"login_password\" id=\"login_password\" placeholder=\"Password\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign In</button>

                                <div class=\"form-actions\">
                                    <div class=\"checkbox checkbox-primary\">
                                        <input type=\"checkbox\" id=\"checkbox\">
                                        <label for=\"checkbox\">Remember me</label>
                                    </div>
                                </div>

                            </div>
                            <div class=\"panel-footer\">
                                Don't have Gameforest account? <a href=\"register.html\">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
{% endblock %}", "@EloboostedLogin/Default/loginform.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\loginform.html.twig");
    }
}
