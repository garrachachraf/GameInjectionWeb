<?php

/* @EloboostedLogin/Default/loginform.html.twig */
class __TwigTemplate_be65ef0381e5be98765b019105377f85703fda30577de31a1e26095cb085cc24 extends Twig_Template
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
        $__internal_6eddd4c07e7866f24147ad8a16506db953a88928cba0f8559af565c3f1c46891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eddd4c07e7866f24147ad8a16506db953a88928cba0f8559af565c3f1c46891->enter($__internal_6eddd4c07e7866f24147ad8a16506db953a88928cba0f8559af565c3f1c46891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_4551d5ce97be43dc6f32542e94303981daa804b1426c26a72c5de1f5cb9e05b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4551d5ce97be43dc6f32542e94303981daa804b1426c26a72c5de1f5cb9e05b0->enter($__internal_4551d5ce97be43dc6f32542e94303981daa804b1426c26a72c5de1f5cb9e05b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eddd4c07e7866f24147ad8a16506db953a88928cba0f8559af565c3f1c46891->leave($__internal_6eddd4c07e7866f24147ad8a16506db953a88928cba0f8559af565c3f1c46891_prof);

        
        $__internal_4551d5ce97be43dc6f32542e94303981daa804b1426c26a72c5de1f5cb9e05b0->leave($__internal_4551d5ce97be43dc6f32542e94303981daa804b1426c26a72c5de1f5cb9e05b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e86ccde08e5f6a1c691de21e579cd7e3334034fbc8831989e64a0cf5acc7506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e86ccde08e5f6a1c691de21e579cd7e3334034fbc8831989e64a0cf5acc7506->enter($__internal_2e86ccde08e5f6a1c691de21e579cd7e3334034fbc8831989e64a0cf5acc7506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63e1f3f224529fd67bb38c6bf5d4b5cc953f3c52b8952645004f5dbdced3094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e1f3f224529fd67bb38c6bf5d4b5cc953f3c52b8952645004f5dbdced3094d->enter($__internal_63e1f3f224529fd67bb38c6bf5d4b5cc953f3c52b8952645004f5dbdced3094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_63e1f3f224529fd67bb38c6bf5d4b5cc953f3c52b8952645004f5dbdced3094d->leave($__internal_63e1f3f224529fd67bb38c6bf5d4b5cc953f3c52b8952645004f5dbdced3094d_prof);

        
        $__internal_2e86ccde08e5f6a1c691de21e579cd7e3334034fbc8831989e64a0cf5acc7506->leave($__internal_2e86ccde08e5f6a1c691de21e579cd7e3334034fbc8831989e64a0cf5acc7506_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_0961f869a7e3336c5b638e59f884cf34010bee8dd4a53e10d7dde97661700e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0961f869a7e3336c5b638e59f884cf34010bee8dd4a53e10d7dde97661700e53->enter($__internal_0961f869a7e3336c5b638e59f884cf34010bee8dd4a53e10d7dde97661700e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_728c72080857a16152fd63d537edd7ca09ece7da6574b8b2741ffc8dd641d0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728c72080857a16152fd63d537edd7ca09ece7da6574b8b2741ffc8dd641d0e9->enter($__internal_728c72080857a16152fd63d537edd7ca09ece7da6574b8b2741ffc8dd641d0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_728c72080857a16152fd63d537edd7ca09ece7da6574b8b2741ffc8dd641d0e9->leave($__internal_728c72080857a16152fd63d537edd7ca09ece7da6574b8b2741ffc8dd641d0e9_prof);

        
        $__internal_0961f869a7e3336c5b638e59f884cf34010bee8dd4a53e10d7dde97661700e53->leave($__internal_0961f869a7e3336c5b638e59f884cf34010bee8dd4a53e10d7dde97661700e53_prof);

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
{% endblock %}", "@EloboostedLogin/Default/loginform.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle\\Resources\\views\\Default\\loginform.html.twig");
    }
}
