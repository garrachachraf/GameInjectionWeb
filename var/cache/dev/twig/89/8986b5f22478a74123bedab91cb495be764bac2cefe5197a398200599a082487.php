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
        $__internal_42da994210567f8533e1c2d293aab41d38e4963c9a5cdc30ddb09cd0aaa28f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42da994210567f8533e1c2d293aab41d38e4963c9a5cdc30ddb09cd0aaa28f7e->enter($__internal_42da994210567f8533e1c2d293aab41d38e4963c9a5cdc30ddb09cd0aaa28f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_930ef25149eb08e454173540fbf925ceb652e40120864467c3a8cfb9103f3df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930ef25149eb08e454173540fbf925ceb652e40120864467c3a8cfb9103f3df9->enter($__internal_930ef25149eb08e454173540fbf925ceb652e40120864467c3a8cfb9103f3df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42da994210567f8533e1c2d293aab41d38e4963c9a5cdc30ddb09cd0aaa28f7e->leave($__internal_42da994210567f8533e1c2d293aab41d38e4963c9a5cdc30ddb09cd0aaa28f7e_prof);

        
        $__internal_930ef25149eb08e454173540fbf925ceb652e40120864467c3a8cfb9103f3df9->leave($__internal_930ef25149eb08e454173540fbf925ceb652e40120864467c3a8cfb9103f3df9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f09b1775bbee8aae0e6ab23ae5f322023773b4cd2f4a7543db2e85ca1701263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f09b1775bbee8aae0e6ab23ae5f322023773b4cd2f4a7543db2e85ca1701263->enter($__internal_5f09b1775bbee8aae0e6ab23ae5f322023773b4cd2f4a7543db2e85ca1701263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_793383169f6001a16ed99ddf54da6f241a9a2be5744828cb19cef9e99b4fd161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793383169f6001a16ed99ddf54da6f241a9a2be5744828cb19cef9e99b4fd161->enter($__internal_793383169f6001a16ed99ddf54da6f241a9a2be5744828cb19cef9e99b4fd161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_793383169f6001a16ed99ddf54da6f241a9a2be5744828cb19cef9e99b4fd161->leave($__internal_793383169f6001a16ed99ddf54da6f241a9a2be5744828cb19cef9e99b4fd161_prof);

        
        $__internal_5f09b1775bbee8aae0e6ab23ae5f322023773b4cd2f4a7543db2e85ca1701263->leave($__internal_5f09b1775bbee8aae0e6ab23ae5f322023773b4cd2f4a7543db2e85ca1701263_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_cbd8ac62554a800395643e5d6d4349255b0180b657a0564ae8707d3e7eda9df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd8ac62554a800395643e5d6d4349255b0180b657a0564ae8707d3e7eda9df9->enter($__internal_cbd8ac62554a800395643e5d6d4349255b0180b657a0564ae8707d3e7eda9df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9535921740b28a0dccaaafb0fc9da27bfa9de13859a31d407ce88de9e26f5d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9535921740b28a0dccaaafb0fc9da27bfa9de13859a31d407ce88de9e26f5d89->enter($__internal_9535921740b28a0dccaaafb0fc9da27bfa9de13859a31d407ce88de9e26f5d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_9535921740b28a0dccaaafb0fc9da27bfa9de13859a31d407ce88de9e26f5d89->leave($__internal_9535921740b28a0dccaaafb0fc9da27bfa9de13859a31d407ce88de9e26f5d89_prof);

        
        $__internal_cbd8ac62554a800395643e5d6d4349255b0180b657a0564ae8707d3e7eda9df9->leave($__internal_cbd8ac62554a800395643e5d6d4349255b0180b657a0564ae8707d3e7eda9df9_prof);

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
