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
        $__internal_8873793040680196b0250eadf949b84bccce42f4c49baa35043dd628f637dd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8873793040680196b0250eadf949b84bccce42f4c49baa35043dd628f637dd0a->enter($__internal_8873793040680196b0250eadf949b84bccce42f4c49baa35043dd628f637dd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_1ae80458527f1dc2d546b526444c4a65fb36db11d423cd1bacada38b4ae15960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae80458527f1dc2d546b526444c4a65fb36db11d423cd1bacada38b4ae15960->enter($__internal_1ae80458527f1dc2d546b526444c4a65fb36db11d423cd1bacada38b4ae15960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8873793040680196b0250eadf949b84bccce42f4c49baa35043dd628f637dd0a->leave($__internal_8873793040680196b0250eadf949b84bccce42f4c49baa35043dd628f637dd0a_prof);

        
        $__internal_1ae80458527f1dc2d546b526444c4a65fb36db11d423cd1bacada38b4ae15960->leave($__internal_1ae80458527f1dc2d546b526444c4a65fb36db11d423cd1bacada38b4ae15960_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8bc4f23eaf8d6c25d597214b2a32166b68e4a993afd0d3f9ca2bc1daa8a9aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bc4f23eaf8d6c25d597214b2a32166b68e4a993afd0d3f9ca2bc1daa8a9aa9->enter($__internal_a8bc4f23eaf8d6c25d597214b2a32166b68e4a993afd0d3f9ca2bc1daa8a9aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b49d7d9f165e4be0cfec907fddcc49ba07936a71f70b877dae8dce01ca335f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49d7d9f165e4be0cfec907fddcc49ba07936a71f70b877dae8dce01ca335f37->enter($__internal_b49d7d9f165e4be0cfec907fddcc49ba07936a71f70b877dae8dce01ca335f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b49d7d9f165e4be0cfec907fddcc49ba07936a71f70b877dae8dce01ca335f37->leave($__internal_b49d7d9f165e4be0cfec907fddcc49ba07936a71f70b877dae8dce01ca335f37_prof);

        
        $__internal_a8bc4f23eaf8d6c25d597214b2a32166b68e4a993afd0d3f9ca2bc1daa8a9aa9->leave($__internal_a8bc4f23eaf8d6c25d597214b2a32166b68e4a993afd0d3f9ca2bc1daa8a9aa9_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_2db7d73a91dc86dc7ec0bdceea5fb7e47966250839e087dc5e21aabffbb723bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db7d73a91dc86dc7ec0bdceea5fb7e47966250839e087dc5e21aabffbb723bb->enter($__internal_2db7d73a91dc86dc7ec0bdceea5fb7e47966250839e087dc5e21aabffbb723bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_541302ae8178a029d8b123951b7db44811d544d11aabc474a89e8d14acea6ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541302ae8178a029d8b123951b7db44811d544d11aabc474a89e8d14acea6ff3->enter($__internal_541302ae8178a029d8b123951b7db44811d544d11aabc474a89e8d14acea6ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_541302ae8178a029d8b123951b7db44811d544d11aabc474a89e8d14acea6ff3->leave($__internal_541302ae8178a029d8b123951b7db44811d544d11aabc474a89e8d14acea6ff3_prof);

        
        $__internal_2db7d73a91dc86dc7ec0bdceea5fb7e47966250839e087dc5e21aabffbb723bb->leave($__internal_2db7d73a91dc86dc7ec0bdceea5fb7e47966250839e087dc5e21aabffbb723bb_prof);

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
