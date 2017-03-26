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
        $__internal_1e674a25e16510c9a60cd23b7b3742c59a9a82bf3a4856036e3ad1a39001db9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e674a25e16510c9a60cd23b7b3742c59a9a82bf3a4856036e3ad1a39001db9d->enter($__internal_1e674a25e16510c9a60cd23b7b3742c59a9a82bf3a4856036e3ad1a39001db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_ec1a834fac6146478130bf217ec9adb6af02ecab5c9f9622de0a10a8e7e3df03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1a834fac6146478130bf217ec9adb6af02ecab5c9f9622de0a10a8e7e3df03->enter($__internal_ec1a834fac6146478130bf217ec9adb6af02ecab5c9f9622de0a10a8e7e3df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e674a25e16510c9a60cd23b7b3742c59a9a82bf3a4856036e3ad1a39001db9d->leave($__internal_1e674a25e16510c9a60cd23b7b3742c59a9a82bf3a4856036e3ad1a39001db9d_prof);

        
        $__internal_ec1a834fac6146478130bf217ec9adb6af02ecab5c9f9622de0a10a8e7e3df03->leave($__internal_ec1a834fac6146478130bf217ec9adb6af02ecab5c9f9622de0a10a8e7e3df03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_056ad44449988e9b269bb5c5fa2d1c46ce04d08757cd8f73168f845d8d9d3a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056ad44449988e9b269bb5c5fa2d1c46ce04d08757cd8f73168f845d8d9d3a1b->enter($__internal_056ad44449988e9b269bb5c5fa2d1c46ce04d08757cd8f73168f845d8d9d3a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3056b1c2169aaf6f6bfa46507a6556f1c6ea75878c7180dc0010e85f0142cdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3056b1c2169aaf6f6bfa46507a6556f1c6ea75878c7180dc0010e85f0142cdf2->enter($__internal_3056b1c2169aaf6f6bfa46507a6556f1c6ea75878c7180dc0010e85f0142cdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3056b1c2169aaf6f6bfa46507a6556f1c6ea75878c7180dc0010e85f0142cdf2->leave($__internal_3056b1c2169aaf6f6bfa46507a6556f1c6ea75878c7180dc0010e85f0142cdf2_prof);

        
        $__internal_056ad44449988e9b269bb5c5fa2d1c46ce04d08757cd8f73168f845d8d9d3a1b->leave($__internal_056ad44449988e9b269bb5c5fa2d1c46ce04d08757cd8f73168f845d8d9d3a1b_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_cef2d54cd738e8e75717823e5c73816c4c1d84c321f0b3f8157198a1c6d2f71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef2d54cd738e8e75717823e5c73816c4c1d84c321f0b3f8157198a1c6d2f71d->enter($__internal_cef2d54cd738e8e75717823e5c73816c4c1d84c321f0b3f8157198a1c6d2f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5e3cf8205086995381c1c56ee9136aa1611e9f7d6a7876917e28172f7ab667ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3cf8205086995381c1c56ee9136aa1611e9f7d6a7876917e28172f7ab667ff->enter($__internal_5e3cf8205086995381c1c56ee9136aa1611e9f7d6a7876917e28172f7ab667ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5e3cf8205086995381c1c56ee9136aa1611e9f7d6a7876917e28172f7ab667ff->leave($__internal_5e3cf8205086995381c1c56ee9136aa1611e9f7d6a7876917e28172f7ab667ff_prof);

        
        $__internal_cef2d54cd738e8e75717823e5c73816c4c1d84c321f0b3f8157198a1c6d2f71d->leave($__internal_cef2d54cd738e8e75717823e5c73816c4c1d84c321f0b3f8157198a1c6d2f71d_prof);

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
