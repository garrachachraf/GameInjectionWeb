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
        $__internal_d15c83bdb00ff52345e25f4fc1618f8f78398118af70cce3f5584cd1a08cf20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15c83bdb00ff52345e25f4fc1618f8f78398118af70cce3f5584cd1a08cf20e->enter($__internal_d15c83bdb00ff52345e25f4fc1618f8f78398118af70cce3f5584cd1a08cf20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_c26b5eb406504c466521d3c785f757ff2deb46c937e4cd48d3512c7fe2569403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c26b5eb406504c466521d3c785f757ff2deb46c937e4cd48d3512c7fe2569403->enter($__internal_c26b5eb406504c466521d3c785f757ff2deb46c937e4cd48d3512c7fe2569403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15c83bdb00ff52345e25f4fc1618f8f78398118af70cce3f5584cd1a08cf20e->leave($__internal_d15c83bdb00ff52345e25f4fc1618f8f78398118af70cce3f5584cd1a08cf20e_prof);

        
        $__internal_c26b5eb406504c466521d3c785f757ff2deb46c937e4cd48d3512c7fe2569403->leave($__internal_c26b5eb406504c466521d3c785f757ff2deb46c937e4cd48d3512c7fe2569403_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8508a5ed0a206c5ec93b77432feba108d4a81b8ae74d46622289526a167c2547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8508a5ed0a206c5ec93b77432feba108d4a81b8ae74d46622289526a167c2547->enter($__internal_8508a5ed0a206c5ec93b77432feba108d4a81b8ae74d46622289526a167c2547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e77c404f08048147c381b9e2f7562ce627bb6862eee4b514cf5dda935ed26dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77c404f08048147c381b9e2f7562ce627bb6862eee4b514cf5dda935ed26dbd->enter($__internal_e77c404f08048147c381b9e2f7562ce627bb6862eee4b514cf5dda935ed26dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e77c404f08048147c381b9e2f7562ce627bb6862eee4b514cf5dda935ed26dbd->leave($__internal_e77c404f08048147c381b9e2f7562ce627bb6862eee4b514cf5dda935ed26dbd_prof);

        
        $__internal_8508a5ed0a206c5ec93b77432feba108d4a81b8ae74d46622289526a167c2547->leave($__internal_8508a5ed0a206c5ec93b77432feba108d4a81b8ae74d46622289526a167c2547_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd406eb631a9daa1fe45d055cc82f678a50f9a37f1e32cbd0699159fd34621f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd406eb631a9daa1fe45d055cc82f678a50f9a37f1e32cbd0699159fd34621f4->enter($__internal_bd406eb631a9daa1fe45d055cc82f678a50f9a37f1e32cbd0699159fd34621f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_14af5c13e09f8c235fe582bc5dce5939268fc3b686a509b3ed5d1f3467e1a089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14af5c13e09f8c235fe582bc5dce5939268fc3b686a509b3ed5d1f3467e1a089->enter($__internal_14af5c13e09f8c235fe582bc5dce5939268fc3b686a509b3ed5d1f3467e1a089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_14af5c13e09f8c235fe582bc5dce5939268fc3b686a509b3ed5d1f3467e1a089->leave($__internal_14af5c13e09f8c235fe582bc5dce5939268fc3b686a509b3ed5d1f3467e1a089_prof);

        
        $__internal_bd406eb631a9daa1fe45d055cc82f678a50f9a37f1e32cbd0699159fd34621f4->leave($__internal_bd406eb631a9daa1fe45d055cc82f678a50f9a37f1e32cbd0699159fd34621f4_prof);

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
