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
        $__internal_8b186b405f54dfc8fd680fdba9d6c5df47b75985116eb1b756f254a63eb0f193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b186b405f54dfc8fd680fdba9d6c5df47b75985116eb1b756f254a63eb0f193->enter($__internal_8b186b405f54dfc8fd680fdba9d6c5df47b75985116eb1b756f254a63eb0f193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_e4f2fe5d6ec5cd0dfe8265bbac7a64ed2e31807341171f2aa595fd7c5247c5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f2fe5d6ec5cd0dfe8265bbac7a64ed2e31807341171f2aa595fd7c5247c5ca->enter($__internal_e4f2fe5d6ec5cd0dfe8265bbac7a64ed2e31807341171f2aa595fd7c5247c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b186b405f54dfc8fd680fdba9d6c5df47b75985116eb1b756f254a63eb0f193->leave($__internal_8b186b405f54dfc8fd680fdba9d6c5df47b75985116eb1b756f254a63eb0f193_prof);

        
        $__internal_e4f2fe5d6ec5cd0dfe8265bbac7a64ed2e31807341171f2aa595fd7c5247c5ca->leave($__internal_e4f2fe5d6ec5cd0dfe8265bbac7a64ed2e31807341171f2aa595fd7c5247c5ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e1a105a7417d2d6b4f68ec83b74867a990b6b75419ee7276a9c91a205e3ba4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1a105a7417d2d6b4f68ec83b74867a990b6b75419ee7276a9c91a205e3ba4c->enter($__internal_8e1a105a7417d2d6b4f68ec83b74867a990b6b75419ee7276a9c91a205e3ba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf28e6e9e4e8ee1a2e466b93a00258fba8d2710b95f1fcb9553a35f8260bf46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf28e6e9e4e8ee1a2e466b93a00258fba8d2710b95f1fcb9553a35f8260bf46b->enter($__internal_bf28e6e9e4e8ee1a2e466b93a00258fba8d2710b95f1fcb9553a35f8260bf46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bf28e6e9e4e8ee1a2e466b93a00258fba8d2710b95f1fcb9553a35f8260bf46b->leave($__internal_bf28e6e9e4e8ee1a2e466b93a00258fba8d2710b95f1fcb9553a35f8260bf46b_prof);

        
        $__internal_8e1a105a7417d2d6b4f68ec83b74867a990b6b75419ee7276a9c91a205e3ba4c->leave($__internal_8e1a105a7417d2d6b4f68ec83b74867a990b6b75419ee7276a9c91a205e3ba4c_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_5e7c1d6ff5039db74c226e1a36413de59817f622460271e6bc9416a666d760ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7c1d6ff5039db74c226e1a36413de59817f622460271e6bc9416a666d760ba->enter($__internal_5e7c1d6ff5039db74c226e1a36413de59817f622460271e6bc9416a666d760ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a09de7f987f262cb80cc54061d6398975c8770080a9d7f2c64695c1a788d223d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09de7f987f262cb80cc54061d6398975c8770080a9d7f2c64695c1a788d223d->enter($__internal_a09de7f987f262cb80cc54061d6398975c8770080a9d7f2c64695c1a788d223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_a09de7f987f262cb80cc54061d6398975c8770080a9d7f2c64695c1a788d223d->leave($__internal_a09de7f987f262cb80cc54061d6398975c8770080a9d7f2c64695c1a788d223d_prof);

        
        $__internal_5e7c1d6ff5039db74c226e1a36413de59817f622460271e6bc9416a666d760ba->leave($__internal_5e7c1d6ff5039db74c226e1a36413de59817f622460271e6bc9416a666d760ba_prof);

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
