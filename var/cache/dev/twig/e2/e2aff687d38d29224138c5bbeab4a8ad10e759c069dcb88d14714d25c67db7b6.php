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
        $__internal_0620dcf3db3a51ea265de75bc88df75ca6c874900bf1b8df4930f85d963b9643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0620dcf3db3a51ea265de75bc88df75ca6c874900bf1b8df4930f85d963b9643->enter($__internal_0620dcf3db3a51ea265de75bc88df75ca6c874900bf1b8df4930f85d963b9643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_bcdc568b0b22f243014f70b9070235b8b36fdf4a3efdd5b59878f935659ff5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdc568b0b22f243014f70b9070235b8b36fdf4a3efdd5b59878f935659ff5af->enter($__internal_bcdc568b0b22f243014f70b9070235b8b36fdf4a3efdd5b59878f935659ff5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0620dcf3db3a51ea265de75bc88df75ca6c874900bf1b8df4930f85d963b9643->leave($__internal_0620dcf3db3a51ea265de75bc88df75ca6c874900bf1b8df4930f85d963b9643_prof);

        
        $__internal_bcdc568b0b22f243014f70b9070235b8b36fdf4a3efdd5b59878f935659ff5af->leave($__internal_bcdc568b0b22f243014f70b9070235b8b36fdf4a3efdd5b59878f935659ff5af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5053b1e8f8b5f712c99856a63d22898f96b93098cfdd9f6b430dcf2d2cced014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5053b1e8f8b5f712c99856a63d22898f96b93098cfdd9f6b430dcf2d2cced014->enter($__internal_5053b1e8f8b5f712c99856a63d22898f96b93098cfdd9f6b430dcf2d2cced014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c980e4d15c13bf7f946f0ff1503db21a3df5f65edaac722c53688a7cedcfad95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c980e4d15c13bf7f946f0ff1503db21a3df5f65edaac722c53688a7cedcfad95->enter($__internal_c980e4d15c13bf7f946f0ff1503db21a3df5f65edaac722c53688a7cedcfad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c980e4d15c13bf7f946f0ff1503db21a3df5f65edaac722c53688a7cedcfad95->leave($__internal_c980e4d15c13bf7f946f0ff1503db21a3df5f65edaac722c53688a7cedcfad95_prof);

        
        $__internal_5053b1e8f8b5f712c99856a63d22898f96b93098cfdd9f6b430dcf2d2cced014->leave($__internal_5053b1e8f8b5f712c99856a63d22898f96b93098cfdd9f6b430dcf2d2cced014_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_522c684579596dd82710f4817909e57dbf05323fb6b85e6e128433d3156dafbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522c684579596dd82710f4817909e57dbf05323fb6b85e6e128433d3156dafbf->enter($__internal_522c684579596dd82710f4817909e57dbf05323fb6b85e6e128433d3156dafbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a12363293678093a2837fe7cb8105327a8d2948129628cedd5247605d4596c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12363293678093a2837fe7cb8105327a8d2948129628cedd5247605d4596c8d->enter($__internal_a12363293678093a2837fe7cb8105327a8d2948129628cedd5247605d4596c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a12363293678093a2837fe7cb8105327a8d2948129628cedd5247605d4596c8d->leave($__internal_a12363293678093a2837fe7cb8105327a8d2948129628cedd5247605d4596c8d_prof);

        
        $__internal_522c684579596dd82710f4817909e57dbf05323fb6b85e6e128433d3156dafbf->leave($__internal_522c684579596dd82710f4817909e57dbf05323fb6b85e6e128433d3156dafbf_prof);

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
