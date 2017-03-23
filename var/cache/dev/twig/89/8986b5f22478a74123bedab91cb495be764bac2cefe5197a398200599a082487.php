<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_1492a4719035e0d88414d13bc5816d8431bfda3ab6b8e0eafd113d7aeae89a74 extends Twig_Template
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
        $__internal_4e088130a2746fdb2ff34bf15cb70c376270a8b1a1ce2e37c64bbf1a864902a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e088130a2746fdb2ff34bf15cb70c376270a8b1a1ce2e37c64bbf1a864902a5->enter($__internal_4e088130a2746fdb2ff34bf15cb70c376270a8b1a1ce2e37c64bbf1a864902a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_f9233f7fedd52ce629424a0954d9ea9288e784865aac49397430fe46372c7bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9233f7fedd52ce629424a0954d9ea9288e784865aac49397430fe46372c7bdf->enter($__internal_f9233f7fedd52ce629424a0954d9ea9288e784865aac49397430fe46372c7bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e088130a2746fdb2ff34bf15cb70c376270a8b1a1ce2e37c64bbf1a864902a5->leave($__internal_4e088130a2746fdb2ff34bf15cb70c376270a8b1a1ce2e37c64bbf1a864902a5_prof);

        
        $__internal_f9233f7fedd52ce629424a0954d9ea9288e784865aac49397430fe46372c7bdf->leave($__internal_f9233f7fedd52ce629424a0954d9ea9288e784865aac49397430fe46372c7bdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_236be9c946c0cc5590e37d20d1315bc33649a01c2f6914c9c2dd1a46918ae19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236be9c946c0cc5590e37d20d1315bc33649a01c2f6914c9c2dd1a46918ae19f->enter($__internal_236be9c946c0cc5590e37d20d1315bc33649a01c2f6914c9c2dd1a46918ae19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89d3ab9634cf233ce4158ccacce1479153d0040ee1e426e0bc572d3dc8611de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d3ab9634cf233ce4158ccacce1479153d0040ee1e426e0bc572d3dc8611de3->enter($__internal_89d3ab9634cf233ce4158ccacce1479153d0040ee1e426e0bc572d3dc8611de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_89d3ab9634cf233ce4158ccacce1479153d0040ee1e426e0bc572d3dc8611de3->leave($__internal_89d3ab9634cf233ce4158ccacce1479153d0040ee1e426e0bc572d3dc8611de3_prof);

        
        $__internal_236be9c946c0cc5590e37d20d1315bc33649a01c2f6914c9c2dd1a46918ae19f->leave($__internal_236be9c946c0cc5590e37d20d1315bc33649a01c2f6914c9c2dd1a46918ae19f_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_6cb623922360da8a3a0f9885e999226ae83b2acd65edc8a6266a4079afbace3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb623922360da8a3a0f9885e999226ae83b2acd65edc8a6266a4079afbace3c->enter($__internal_6cb623922360da8a3a0f9885e999226ae83b2acd65edc8a6266a4079afbace3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_82d6281797cc480e3833563683ad51621e9449286499a51b0f53e5966373c72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d6281797cc480e3833563683ad51621e9449286499a51b0f53e5966373c72f->enter($__internal_82d6281797cc480e3833563683ad51621e9449286499a51b0f53e5966373c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_82d6281797cc480e3833563683ad51621e9449286499a51b0f53e5966373c72f->leave($__internal_82d6281797cc480e3833563683ad51621e9449286499a51b0f53e5966373c72f_prof);

        
        $__internal_6cb623922360da8a3a0f9885e999226ae83b2acd65edc8a6266a4079afbace3c->leave($__internal_6cb623922360da8a3a0f9885e999226ae83b2acd65edc8a6266a4079afbace3c_prof);

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
