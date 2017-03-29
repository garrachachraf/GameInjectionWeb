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
        $__internal_f8562a5486658baec6f87750125d1a39d8273e5a3b9099167990dfb1ccd3f707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8562a5486658baec6f87750125d1a39d8273e5a3b9099167990dfb1ccd3f707->enter($__internal_f8562a5486658baec6f87750125d1a39d8273e5a3b9099167990dfb1ccd3f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_8861c97520e6ff8f3e0793553a5e7a8c0d1cb93f545fd40c386836f7e2d80d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8861c97520e6ff8f3e0793553a5e7a8c0d1cb93f545fd40c386836f7e2d80d35->enter($__internal_8861c97520e6ff8f3e0793553a5e7a8c0d1cb93f545fd40c386836f7e2d80d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8562a5486658baec6f87750125d1a39d8273e5a3b9099167990dfb1ccd3f707->leave($__internal_f8562a5486658baec6f87750125d1a39d8273e5a3b9099167990dfb1ccd3f707_prof);

        
        $__internal_8861c97520e6ff8f3e0793553a5e7a8c0d1cb93f545fd40c386836f7e2d80d35->leave($__internal_8861c97520e6ff8f3e0793553a5e7a8c0d1cb93f545fd40c386836f7e2d80d35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe6886ae3c0a10af096af5a9e537023cc9346c12063f6620893565dc2769312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe6886ae3c0a10af096af5a9e537023cc9346c12063f6620893565dc2769312->enter($__internal_dfe6886ae3c0a10af096af5a9e537023cc9346c12063f6620893565dc2769312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e79c93a6db143cc20ac08a63aca8f7adfa09cd16b3eea6d745f41a61ea6c454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e79c93a6db143cc20ac08a63aca8f7adfa09cd16b3eea6d745f41a61ea6c454->enter($__internal_4e79c93a6db143cc20ac08a63aca8f7adfa09cd16b3eea6d745f41a61ea6c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e79c93a6db143cc20ac08a63aca8f7adfa09cd16b3eea6d745f41a61ea6c454->leave($__internal_4e79c93a6db143cc20ac08a63aca8f7adfa09cd16b3eea6d745f41a61ea6c454_prof);

        
        $__internal_dfe6886ae3c0a10af096af5a9e537023cc9346c12063f6620893565dc2769312->leave($__internal_dfe6886ae3c0a10af096af5a9e537023cc9346c12063f6620893565dc2769312_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_2a2adec70fb8c69cc16fa7a5497c401088fdf411538c346614a8ce4edd23e507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2adec70fb8c69cc16fa7a5497c401088fdf411538c346614a8ce4edd23e507->enter($__internal_2a2adec70fb8c69cc16fa7a5497c401088fdf411538c346614a8ce4edd23e507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_97bbc163613b83a1224e6b5eec99f11ee13cc26e55d0f82bbbd36155d16fb069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bbc163613b83a1224e6b5eec99f11ee13cc26e55d0f82bbbd36155d16fb069->enter($__internal_97bbc163613b83a1224e6b5eec99f11ee13cc26e55d0f82bbbd36155d16fb069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_97bbc163613b83a1224e6b5eec99f11ee13cc26e55d0f82bbbd36155d16fb069->leave($__internal_97bbc163613b83a1224e6b5eec99f11ee13cc26e55d0f82bbbd36155d16fb069_prof);

        
        $__internal_2a2adec70fb8c69cc16fa7a5497c401088fdf411538c346614a8ce4edd23e507->leave($__internal_2a2adec70fb8c69cc16fa7a5497c401088fdf411538c346614a8ce4edd23e507_prof);

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
