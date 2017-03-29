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
        $__internal_fcd1c7cc2810e4b7755ba1ef72bf4ef8f451e6380aa60ef8b81d230bdeca4a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd1c7cc2810e4b7755ba1ef72bf4ef8f451e6380aa60ef8b81d230bdeca4a0c->enter($__internal_fcd1c7cc2810e4b7755ba1ef72bf4ef8f451e6380aa60ef8b81d230bdeca4a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_88e8457c0eceac2700ddcb1f752999f0284a5a0b3fdf8d0a21f2a6bcde03ff6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8457c0eceac2700ddcb1f752999f0284a5a0b3fdf8d0a21f2a6bcde03ff6d->enter($__internal_88e8457c0eceac2700ddcb1f752999f0284a5a0b3fdf8d0a21f2a6bcde03ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd1c7cc2810e4b7755ba1ef72bf4ef8f451e6380aa60ef8b81d230bdeca4a0c->leave($__internal_fcd1c7cc2810e4b7755ba1ef72bf4ef8f451e6380aa60ef8b81d230bdeca4a0c_prof);

        
        $__internal_88e8457c0eceac2700ddcb1f752999f0284a5a0b3fdf8d0a21f2a6bcde03ff6d->leave($__internal_88e8457c0eceac2700ddcb1f752999f0284a5a0b3fdf8d0a21f2a6bcde03ff6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b0aef2ff87a67639a60b1712a8bd12665c7f3aece3b2a2b2be40867255c4a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0aef2ff87a67639a60b1712a8bd12665c7f3aece3b2a2b2be40867255c4a31->enter($__internal_8b0aef2ff87a67639a60b1712a8bd12665c7f3aece3b2a2b2be40867255c4a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea7f6b20735c14248d528efbd258a5bb9728b2ebbd51ac9ffb9079a78aa930e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7f6b20735c14248d528efbd258a5bb9728b2ebbd51ac9ffb9079a78aa930e5->enter($__internal_ea7f6b20735c14248d528efbd258a5bb9728b2ebbd51ac9ffb9079a78aa930e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ea7f6b20735c14248d528efbd258a5bb9728b2ebbd51ac9ffb9079a78aa930e5->leave($__internal_ea7f6b20735c14248d528efbd258a5bb9728b2ebbd51ac9ffb9079a78aa930e5_prof);

        
        $__internal_8b0aef2ff87a67639a60b1712a8bd12665c7f3aece3b2a2b2be40867255c4a31->leave($__internal_8b0aef2ff87a67639a60b1712a8bd12665c7f3aece3b2a2b2be40867255c4a31_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_bbc7624e42298ad1a2fc1192ce01708a3a004343b9ba1ff961ae06130e031c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc7624e42298ad1a2fc1192ce01708a3a004343b9ba1ff961ae06130e031c19->enter($__internal_bbc7624e42298ad1a2fc1192ce01708a3a004343b9ba1ff961ae06130e031c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0a6a6a8a4e916d48558fd98f7db1d652d9d0f84dddcad406edf6d00578600132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6a6a8a4e916d48558fd98f7db1d652d9d0f84dddcad406edf6d00578600132->enter($__internal_0a6a6a8a4e916d48558fd98f7db1d652d9d0f84dddcad406edf6d00578600132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_0a6a6a8a4e916d48558fd98f7db1d652d9d0f84dddcad406edf6d00578600132->leave($__internal_0a6a6a8a4e916d48558fd98f7db1d652d9d0f84dddcad406edf6d00578600132_prof);

        
        $__internal_bbc7624e42298ad1a2fc1192ce01708a3a004343b9ba1ff961ae06130e031c19->leave($__internal_bbc7624e42298ad1a2fc1192ce01708a3a004343b9ba1ff961ae06130e031c19_prof);

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
