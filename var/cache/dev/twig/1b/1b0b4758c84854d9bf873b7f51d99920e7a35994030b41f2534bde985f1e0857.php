<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_323e96f2e5c3adf2c7d453f496a109099026318fdfbf8ea4108ac5ce5ae03606 extends Twig_Template
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
        $__internal_ca18ea6485627b5011ce0c867cb81c183822d708f98d3dfb174c2783b7e13563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca18ea6485627b5011ce0c867cb81c183822d708f98d3dfb174c2783b7e13563->enter($__internal_ca18ea6485627b5011ce0c867cb81c183822d708f98d3dfb174c2783b7e13563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_c16b6ab9e6f5e6bcfbd0f69923ea46d05eaab508a73d63ac259b6b2e205b56a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16b6ab9e6f5e6bcfbd0f69923ea46d05eaab508a73d63ac259b6b2e205b56a8->enter($__internal_c16b6ab9e6f5e6bcfbd0f69923ea46d05eaab508a73d63ac259b6b2e205b56a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca18ea6485627b5011ce0c867cb81c183822d708f98d3dfb174c2783b7e13563->leave($__internal_ca18ea6485627b5011ce0c867cb81c183822d708f98d3dfb174c2783b7e13563_prof);

        
        $__internal_c16b6ab9e6f5e6bcfbd0f69923ea46d05eaab508a73d63ac259b6b2e205b56a8->leave($__internal_c16b6ab9e6f5e6bcfbd0f69923ea46d05eaab508a73d63ac259b6b2e205b56a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_738ddbdbdeaa444dfd2db5b57273c910346dbf366aef1ae19a28888eb216a04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738ddbdbdeaa444dfd2db5b57273c910346dbf366aef1ae19a28888eb216a04c->enter($__internal_738ddbdbdeaa444dfd2db5b57273c910346dbf366aef1ae19a28888eb216a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2b1bf12fc4428ae1aade39a5c5014d725ec00f4ed6b24e9c8334dd97dcc5e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b1bf12fc4428ae1aade39a5c5014d725ec00f4ed6b24e9c8334dd97dcc5e3d->enter($__internal_f2b1bf12fc4428ae1aade39a5c5014d725ec00f4ed6b24e9c8334dd97dcc5e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f2b1bf12fc4428ae1aade39a5c5014d725ec00f4ed6b24e9c8334dd97dcc5e3d->leave($__internal_f2b1bf12fc4428ae1aade39a5c5014d725ec00f4ed6b24e9c8334dd97dcc5e3d_prof);

        
        $__internal_738ddbdbdeaa444dfd2db5b57273c910346dbf366aef1ae19a28888eb216a04c->leave($__internal_738ddbdbdeaa444dfd2db5b57273c910346dbf366aef1ae19a28888eb216a04c_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_41868ecbe9fcbae1d801dd0653fd7b26485694d3f86b3db578b9226587d97ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41868ecbe9fcbae1d801dd0653fd7b26485694d3f86b3db578b9226587d97ad4->enter($__internal_41868ecbe9fcbae1d801dd0653fd7b26485694d3f86b3db578b9226587d97ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b9ceb1dbdf4b2f38120bbf140a1f681edcb9a600547bd475521a2717399e2a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ceb1dbdf4b2f38120bbf140a1f681edcb9a600547bd475521a2717399e2a06->enter($__internal_b9ceb1dbdf4b2f38120bbf140a1f681edcb9a600547bd475521a2717399e2a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_b9ceb1dbdf4b2f38120bbf140a1f681edcb9a600547bd475521a2717399e2a06->leave($__internal_b9ceb1dbdf4b2f38120bbf140a1f681edcb9a600547bd475521a2717399e2a06_prof);

        
        $__internal_41868ecbe9fcbae1d801dd0653fd7b26485694d3f86b3db578b9226587d97ad4->leave($__internal_41868ecbe9fcbae1d801dd0653fd7b26485694d3f86b3db578b9226587d97ad4_prof);

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
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
