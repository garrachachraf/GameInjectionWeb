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
        $__internal_335571a5d8738bd02d8960c008d99a85f746dfadc59c1fc0c3d8bffdd897a8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335571a5d8738bd02d8960c008d99a85f746dfadc59c1fc0c3d8bffdd897a8ad->enter($__internal_335571a5d8738bd02d8960c008d99a85f746dfadc59c1fc0c3d8bffdd897a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_0c0333c37e02eb16f1e6ce154bb6b1f1330ebf7a172462e4cf150d222ea1a5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0333c37e02eb16f1e6ce154bb6b1f1330ebf7a172462e4cf150d222ea1a5a6->enter($__internal_0c0333c37e02eb16f1e6ce154bb6b1f1330ebf7a172462e4cf150d222ea1a5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335571a5d8738bd02d8960c008d99a85f746dfadc59c1fc0c3d8bffdd897a8ad->leave($__internal_335571a5d8738bd02d8960c008d99a85f746dfadc59c1fc0c3d8bffdd897a8ad_prof);

        
        $__internal_0c0333c37e02eb16f1e6ce154bb6b1f1330ebf7a172462e4cf150d222ea1a5a6->leave($__internal_0c0333c37e02eb16f1e6ce154bb6b1f1330ebf7a172462e4cf150d222ea1a5a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_717ab8658c7c4658311d98e412222ee4d3cce953371d33f405b54a9c3166339f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717ab8658c7c4658311d98e412222ee4d3cce953371d33f405b54a9c3166339f->enter($__internal_717ab8658c7c4658311d98e412222ee4d3cce953371d33f405b54a9c3166339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53069071ade9372804a53b8233c5da364243bfe6160ff7be9adc14912e756afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53069071ade9372804a53b8233c5da364243bfe6160ff7be9adc14912e756afb->enter($__internal_53069071ade9372804a53b8233c5da364243bfe6160ff7be9adc14912e756afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_53069071ade9372804a53b8233c5da364243bfe6160ff7be9adc14912e756afb->leave($__internal_53069071ade9372804a53b8233c5da364243bfe6160ff7be9adc14912e756afb_prof);

        
        $__internal_717ab8658c7c4658311d98e412222ee4d3cce953371d33f405b54a9c3166339f->leave($__internal_717ab8658c7c4658311d98e412222ee4d3cce953371d33f405b54a9c3166339f_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_9c629050d1f5e3a37ad7bbf0bb8cd0024cab0329392c1862fe37484be609064f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c629050d1f5e3a37ad7bbf0bb8cd0024cab0329392c1862fe37484be609064f->enter($__internal_9c629050d1f5e3a37ad7bbf0bb8cd0024cab0329392c1862fe37484be609064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fd248e760e2686fa8aced03ef1a544b5de6d0f4696e6f9be7d3db2193656b4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd248e760e2686fa8aced03ef1a544b5de6d0f4696e6f9be7d3db2193656b4d9->enter($__internal_fd248e760e2686fa8aced03ef1a544b5de6d0f4696e6f9be7d3db2193656b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_fd248e760e2686fa8aced03ef1a544b5de6d0f4696e6f9be7d3db2193656b4d9->leave($__internal_fd248e760e2686fa8aced03ef1a544b5de6d0f4696e6f9be7d3db2193656b4d9_prof);

        
        $__internal_9c629050d1f5e3a37ad7bbf0bb8cd0024cab0329392c1862fe37484be609064f->leave($__internal_9c629050d1f5e3a37ad7bbf0bb8cd0024cab0329392c1862fe37484be609064f_prof);

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
