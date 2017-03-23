<?php

/* @EloboostedLogin/Default/loginform.html.twig */
class __TwigTemplate_2b9bd37038b0d8d66668664cd1062f61e243835dc9ce8e98bba0c83a1e6ca08a extends Twig_Template
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
        $__internal_1d86ef61cee334a77a72913d989dc4608494a42284b9ce95b4aa869119cf74be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d86ef61cee334a77a72913d989dc4608494a42284b9ce95b4aa869119cf74be->enter($__internal_1d86ef61cee334a77a72913d989dc4608494a42284b9ce95b4aa869119cf74be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_1a29559fe0500ebcbc125f4210f766abf0ee43cbb583bef2831b8b108c219f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a29559fe0500ebcbc125f4210f766abf0ee43cbb583bef2831b8b108c219f26->enter($__internal_1a29559fe0500ebcbc125f4210f766abf0ee43cbb583bef2831b8b108c219f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d86ef61cee334a77a72913d989dc4608494a42284b9ce95b4aa869119cf74be->leave($__internal_1d86ef61cee334a77a72913d989dc4608494a42284b9ce95b4aa869119cf74be_prof);

        
        $__internal_1a29559fe0500ebcbc125f4210f766abf0ee43cbb583bef2831b8b108c219f26->leave($__internal_1a29559fe0500ebcbc125f4210f766abf0ee43cbb583bef2831b8b108c219f26_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70df20f1085d6cc1a5ce80448461ffdfe76a0ef3be04894bd11ebd693a6651f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70df20f1085d6cc1a5ce80448461ffdfe76a0ef3be04894bd11ebd693a6651f2->enter($__internal_70df20f1085d6cc1a5ce80448461ffdfe76a0ef3be04894bd11ebd693a6651f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_067f8b1e5ff97c706834b7225a17a9ba3d086ae061bc630c94ce20d1223c0279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067f8b1e5ff97c706834b7225a17a9ba3d086ae061bc630c94ce20d1223c0279->enter($__internal_067f8b1e5ff97c706834b7225a17a9ba3d086ae061bc630c94ce20d1223c0279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_067f8b1e5ff97c706834b7225a17a9ba3d086ae061bc630c94ce20d1223c0279->leave($__internal_067f8b1e5ff97c706834b7225a17a9ba3d086ae061bc630c94ce20d1223c0279_prof);

        
        $__internal_70df20f1085d6cc1a5ce80448461ffdfe76a0ef3be04894bd11ebd693a6651f2->leave($__internal_70df20f1085d6cc1a5ce80448461ffdfe76a0ef3be04894bd11ebd693a6651f2_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_ea1b91068f169fc77d011e3e37725dafa7259aa4f321a67f70b3af1710b9cd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1b91068f169fc77d011e3e37725dafa7259aa4f321a67f70b3af1710b9cd1a->enter($__internal_ea1b91068f169fc77d011e3e37725dafa7259aa4f321a67f70b3af1710b9cd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fc490fe57f9e38818ae4848abf6fa159bcb54658a4adc7ce4418d84ef98a03f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc490fe57f9e38818ae4848abf6fa159bcb54658a4adc7ce4418d84ef98a03f8->enter($__internal_fc490fe57f9e38818ae4848abf6fa159bcb54658a4adc7ce4418d84ef98a03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_fc490fe57f9e38818ae4848abf6fa159bcb54658a4adc7ce4418d84ef98a03f8->leave($__internal_fc490fe57f9e38818ae4848abf6fa159bcb54658a4adc7ce4418d84ef98a03f8_prof);

        
        $__internal_ea1b91068f169fc77d011e3e37725dafa7259aa4f321a67f70b3af1710b9cd1a->leave($__internal_ea1b91068f169fc77d011e3e37725dafa7259aa4f321a67f70b3af1710b9cd1a_prof);

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
