<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_a533209ba4a18a0812ab6d770b55935e5eaf111967788648c18194956c148a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedLoginBundle:Default:loginform.html.twig", 2);
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
        $__internal_39a0bf30063258303efbd618999fef8959d3203c24ea28ef22996e8908f2c398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a0bf30063258303efbd618999fef8959d3203c24ea28ef22996e8908f2c398->enter($__internal_39a0bf30063258303efbd618999fef8959d3203c24ea28ef22996e8908f2c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_88216f681e94e550e19c7ef2da44c7276e1f5b163fe22ac12200230d2c9bb49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88216f681e94e550e19c7ef2da44c7276e1f5b163fe22ac12200230d2c9bb49d->enter($__internal_88216f681e94e550e19c7ef2da44c7276e1f5b163fe22ac12200230d2c9bb49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39a0bf30063258303efbd618999fef8959d3203c24ea28ef22996e8908f2c398->leave($__internal_39a0bf30063258303efbd618999fef8959d3203c24ea28ef22996e8908f2c398_prof);

        
        $__internal_88216f681e94e550e19c7ef2da44c7276e1f5b163fe22ac12200230d2c9bb49d->leave($__internal_88216f681e94e550e19c7ef2da44c7276e1f5b163fe22ac12200230d2c9bb49d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_020f29cc90334517772c2595f2ed2b6fdec599ba060b249cc98f1c64bc302424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020f29cc90334517772c2595f2ed2b6fdec599ba060b249cc98f1c64bc302424->enter($__internal_020f29cc90334517772c2595f2ed2b6fdec599ba060b249cc98f1c64bc302424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad1234ce7218219a5954ccb01404107fc852a6b49c7526d8f78828c49230a551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1234ce7218219a5954ccb01404107fc852a6b49c7526d8f78828c49230a551->enter($__internal_ad1234ce7218219a5954ccb01404107fc852a6b49c7526d8f78828c49230a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ad1234ce7218219a5954ccb01404107fc852a6b49c7526d8f78828c49230a551->leave($__internal_ad1234ce7218219a5954ccb01404107fc852a6b49c7526d8f78828c49230a551_prof);

        
        $__internal_020f29cc90334517772c2595f2ed2b6fdec599ba060b249cc98f1c64bc302424->leave($__internal_020f29cc90334517772c2595f2ed2b6fdec599ba060b249cc98f1c64bc302424_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_71c1cbe33fc9e5fe17aba536e1eea0f34a30d1e9933b25ee2d59d9c6d95573b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c1cbe33fc9e5fe17aba536e1eea0f34a30d1e9933b25ee2d59d9c6d95573b8->enter($__internal_71c1cbe33fc9e5fe17aba536e1eea0f34a30d1e9933b25ee2d59d9c6d95573b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_91a4ac678d4c83f89736549c924b45f6f54098526aff665bbcbf06ad324ab1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a4ac678d4c83f89736549c924b45f6f54098526aff665bbcbf06ad324ab1f8->enter($__internal_91a4ac678d4c83f89736549c924b45f6f54098526aff665bbcbf06ad324ab1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_91a4ac678d4c83f89736549c924b45f6f54098526aff665bbcbf06ad324ab1f8->leave($__internal_91a4ac678d4c83f89736549c924b45f6f54098526aff665bbcbf06ad324ab1f8_prof);

        
        $__internal_71c1cbe33fc9e5fe17aba536e1eea0f34a30d1e9933b25ee2d59d9c6d95573b8->leave($__internal_71c1cbe33fc9e5fe17aba536e1eea0f34a30d1e9933b25ee2d59d9c6d95573b8_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedLoginBundle:Default:loginform.html.twig";
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
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
