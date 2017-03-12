<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_15df0c0f949408690c2e451276e237a04ac1d508715ff8b27fa956289812355a extends Twig_Template
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
        $__internal_fe324a2cbfd124f68dfaf193d116a3998fb4c5d2b9707872230a63faa74b35fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe324a2cbfd124f68dfaf193d116a3998fb4c5d2b9707872230a63faa74b35fd->enter($__internal_fe324a2cbfd124f68dfaf193d116a3998fb4c5d2b9707872230a63faa74b35fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_b0bccb14f38331d03c3fc755a4dd996b87f276f41d00ed2acf51706c14a4590b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bccb14f38331d03c3fc755a4dd996b87f276f41d00ed2acf51706c14a4590b->enter($__internal_b0bccb14f38331d03c3fc755a4dd996b87f276f41d00ed2acf51706c14a4590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe324a2cbfd124f68dfaf193d116a3998fb4c5d2b9707872230a63faa74b35fd->leave($__internal_fe324a2cbfd124f68dfaf193d116a3998fb4c5d2b9707872230a63faa74b35fd_prof);

        
        $__internal_b0bccb14f38331d03c3fc755a4dd996b87f276f41d00ed2acf51706c14a4590b->leave($__internal_b0bccb14f38331d03c3fc755a4dd996b87f276f41d00ed2acf51706c14a4590b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e572270a726a5be925eb28ca62b7c9730c5f65d7ed6e7e22d41c9e0a6010e6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e572270a726a5be925eb28ca62b7c9730c5f65d7ed6e7e22d41c9e0a6010e6b7->enter($__internal_e572270a726a5be925eb28ca62b7c9730c5f65d7ed6e7e22d41c9e0a6010e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a93bd7c5d409c4a65c7f153003779a246bd9a28186cc8c39c6ba0535e538e8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93bd7c5d409c4a65c7f153003779a246bd9a28186cc8c39c6ba0535e538e8a4->enter($__internal_a93bd7c5d409c4a65c7f153003779a246bd9a28186cc8c39c6ba0535e538e8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        
        $__internal_a93bd7c5d409c4a65c7f153003779a246bd9a28186cc8c39c6ba0535e538e8a4->leave($__internal_a93bd7c5d409c4a65c7f153003779a246bd9a28186cc8c39c6ba0535e538e8a4_prof);

        
        $__internal_e572270a726a5be925eb28ca62b7c9730c5f65d7ed6e7e22d41c9e0a6010e6b7->leave($__internal_e572270a726a5be925eb28ca62b7c9730c5f65d7ed6e7e22d41c9e0a6010e6b7_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_28d5d75141511325ae8f48f179b6da57a8ac44ef5f9bb6c12d5e0c2b55887c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d5d75141511325ae8f48f179b6da57a8ac44ef5f9bb6c12d5e0c2b55887c81->enter($__internal_28d5d75141511325ae8f48f179b6da57a8ac44ef5f9bb6c12d5e0c2b55887c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6aae88c4b9e095196ec8d7e9bfc65fe8d6b255655904734e9d28a73b9a6c9601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aae88c4b9e095196ec8d7e9bfc65fe8d6b255655904734e9d28a73b9a6c9601->enter($__internal_6aae88c4b9e095196ec8d7e9bfc65fe8d6b255655904734e9d28a73b9a6c9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<form  method=\"post\">
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
        
        $__internal_6aae88c4b9e095196ec8d7e9bfc65fe8d6b255655904734e9d28a73b9a6c9601->leave($__internal_6aae88c4b9e095196ec8d7e9bfc65fe8d6b255655904734e9d28a73b9a6c9601_prof);

        
        $__internal_28d5d75141511325ae8f48f179b6da57a8ac44ef5f9bb6c12d5e0c2b55887c81->leave($__internal_28d5d75141511325ae8f48f179b6da57a8ac44ef5f9bb6c12d5e0c2b55887c81_prof);

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
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
