<?php

/* @EloboostedLogin/Default/loginform.html.twig */
class __TwigTemplate_2b9bd37038b0d8d66668664cd1062f61e243835dc9ce8e98bba0c83a1e6ca08a extends Twig_Template
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
        $__internal_d1fac3d32a9c7ce2402e73466d624b8f9812cf554e6b1d67f8caaccbb3ca5eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fac3d32a9c7ce2402e73466d624b8f9812cf554e6b1d67f8caaccbb3ca5eb5->enter($__internal_d1fac3d32a9c7ce2402e73466d624b8f9812cf554e6b1d67f8caaccbb3ca5eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_afa45f9eb4d521713380cc052ebbb2daafccd33c9997640faa395a3d6678cfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa45f9eb4d521713380cc052ebbb2daafccd33c9997640faa395a3d6678cfb0->enter($__internal_afa45f9eb4d521713380cc052ebbb2daafccd33c9997640faa395a3d6678cfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1fac3d32a9c7ce2402e73466d624b8f9812cf554e6b1d67f8caaccbb3ca5eb5->leave($__internal_d1fac3d32a9c7ce2402e73466d624b8f9812cf554e6b1d67f8caaccbb3ca5eb5_prof);

        
        $__internal_afa45f9eb4d521713380cc052ebbb2daafccd33c9997640faa395a3d6678cfb0->leave($__internal_afa45f9eb4d521713380cc052ebbb2daafccd33c9997640faa395a3d6678cfb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5899871e1a75aeb49bf03c035aff4e74c07d0e3fc2104120ba2c2a5599ad2fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5899871e1a75aeb49bf03c035aff4e74c07d0e3fc2104120ba2c2a5599ad2fb1->enter($__internal_5899871e1a75aeb49bf03c035aff4e74c07d0e3fc2104120ba2c2a5599ad2fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98955cf101e4bf6563634d443840bb396080a1d78ac5758cb1de0880df8fd6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98955cf101e4bf6563634d443840bb396080a1d78ac5758cb1de0880df8fd6c8->enter($__internal_98955cf101e4bf6563634d443840bb396080a1d78ac5758cb1de0880df8fd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98955cf101e4bf6563634d443840bb396080a1d78ac5758cb1de0880df8fd6c8->leave($__internal_98955cf101e4bf6563634d443840bb396080a1d78ac5758cb1de0880df8fd6c8_prof);

        
        $__internal_5899871e1a75aeb49bf03c035aff4e74c07d0e3fc2104120ba2c2a5599ad2fb1->leave($__internal_5899871e1a75aeb49bf03c035aff4e74c07d0e3fc2104120ba2c2a5599ad2fb1_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_aeb480d43105a74f8d4e1b1a910f435cb18fc484aa9b3d42e1ebf8c0c078e872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb480d43105a74f8d4e1b1a910f435cb18fc484aa9b3d42e1ebf8c0c078e872->enter($__internal_aeb480d43105a74f8d4e1b1a910f435cb18fc484aa9b3d42e1ebf8c0c078e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ee7947c095abe82820ca4ee0b0df85d9608fe73c9874f3b0fd5e20901884dc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7947c095abe82820ca4ee0b0df85d9608fe73c9874f3b0fd5e20901884dc5a->enter($__internal_ee7947c095abe82820ca4ee0b0df85d9608fe73c9874f3b0fd5e20901884dc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ee7947c095abe82820ca4ee0b0df85d9608fe73c9874f3b0fd5e20901884dc5a->leave($__internal_ee7947c095abe82820ca4ee0b0df85d9608fe73c9874f3b0fd5e20901884dc5a_prof);

        
        $__internal_aeb480d43105a74f8d4e1b1a910f435cb18fc484aa9b3d42e1ebf8c0c078e872->leave($__internal_aeb480d43105a74f8d4e1b1a910f435cb18fc484aa9b3d42e1ebf8c0c078e872_prof);

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
