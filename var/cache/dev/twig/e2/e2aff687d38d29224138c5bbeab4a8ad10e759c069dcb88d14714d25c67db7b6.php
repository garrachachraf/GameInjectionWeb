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
        $__internal_a9f6fa14b8a5a8d780de6926d9bf9fcfb454a8cab0f37a123edad12f2dbaf1db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f6fa14b8a5a8d780de6926d9bf9fcfb454a8cab0f37a123edad12f2dbaf1db->enter($__internal_a9f6fa14b8a5a8d780de6926d9bf9fcfb454a8cab0f37a123edad12f2dbaf1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_69eb9e72a801004e6902513c95eac1b85ecfedfae7aca5089b280e87fbf27948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69eb9e72a801004e6902513c95eac1b85ecfedfae7aca5089b280e87fbf27948->enter($__internal_69eb9e72a801004e6902513c95eac1b85ecfedfae7aca5089b280e87fbf27948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f6fa14b8a5a8d780de6926d9bf9fcfb454a8cab0f37a123edad12f2dbaf1db->leave($__internal_a9f6fa14b8a5a8d780de6926d9bf9fcfb454a8cab0f37a123edad12f2dbaf1db_prof);

        
        $__internal_69eb9e72a801004e6902513c95eac1b85ecfedfae7aca5089b280e87fbf27948->leave($__internal_69eb9e72a801004e6902513c95eac1b85ecfedfae7aca5089b280e87fbf27948_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fd45d565fcf03a6b4efcffeb7737c49e66edb8b1a079ef9ef047a1f7ab18dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd45d565fcf03a6b4efcffeb7737c49e66edb8b1a079ef9ef047a1f7ab18dc0->enter($__internal_4fd45d565fcf03a6b4efcffeb7737c49e66edb8b1a079ef9ef047a1f7ab18dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_accba8852a60f0e45cc37c9971faf1a363e6fc77f35bd36a8ae069bb93426980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accba8852a60f0e45cc37c9971faf1a363e6fc77f35bd36a8ae069bb93426980->enter($__internal_accba8852a60f0e45cc37c9971faf1a363e6fc77f35bd36a8ae069bb93426980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_accba8852a60f0e45cc37c9971faf1a363e6fc77f35bd36a8ae069bb93426980->leave($__internal_accba8852a60f0e45cc37c9971faf1a363e6fc77f35bd36a8ae069bb93426980_prof);

        
        $__internal_4fd45d565fcf03a6b4efcffeb7737c49e66edb8b1a079ef9ef047a1f7ab18dc0->leave($__internal_4fd45d565fcf03a6b4efcffeb7737c49e66edb8b1a079ef9ef047a1f7ab18dc0_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_477fce444ab17d4bd661b26fc87aba853ffce07d93986e39d12d61484eca62e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477fce444ab17d4bd661b26fc87aba853ffce07d93986e39d12d61484eca62e9->enter($__internal_477fce444ab17d4bd661b26fc87aba853ffce07d93986e39d12d61484eca62e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7ce577dd38d9b5e9799f227d5a6639535129bd08b6917ea014ed45b3040e6d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce577dd38d9b5e9799f227d5a6639535129bd08b6917ea014ed45b3040e6d43->enter($__internal_7ce577dd38d9b5e9799f227d5a6639535129bd08b6917ea014ed45b3040e6d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_7ce577dd38d9b5e9799f227d5a6639535129bd08b6917ea014ed45b3040e6d43->leave($__internal_7ce577dd38d9b5e9799f227d5a6639535129bd08b6917ea014ed45b3040e6d43_prof);

        
        $__internal_477fce444ab17d4bd661b26fc87aba853ffce07d93986e39d12d61484eca62e9->leave($__internal_477fce444ab17d4bd661b26fc87aba853ffce07d93986e39d12d61484eca62e9_prof);

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
