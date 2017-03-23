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
        $__internal_5277bdc4fbde251230fdc4bcf676c3e65a89ac5a911201d942117c07d726f669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5277bdc4fbde251230fdc4bcf676c3e65a89ac5a911201d942117c07d726f669->enter($__internal_5277bdc4fbde251230fdc4bcf676c3e65a89ac5a911201d942117c07d726f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_9758ab279273256c94e550202a86ad858cf01d0a7e4950af3487c05811da5883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9758ab279273256c94e550202a86ad858cf01d0a7e4950af3487c05811da5883->enter($__internal_9758ab279273256c94e550202a86ad858cf01d0a7e4950af3487c05811da5883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5277bdc4fbde251230fdc4bcf676c3e65a89ac5a911201d942117c07d726f669->leave($__internal_5277bdc4fbde251230fdc4bcf676c3e65a89ac5a911201d942117c07d726f669_prof);

        
        $__internal_9758ab279273256c94e550202a86ad858cf01d0a7e4950af3487c05811da5883->leave($__internal_9758ab279273256c94e550202a86ad858cf01d0a7e4950af3487c05811da5883_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9b1cc8f334b4d9ac16ff7a75120dc58fa40af0e66cb2e7e9665abc30184621d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b1cc8f334b4d9ac16ff7a75120dc58fa40af0e66cb2e7e9665abc30184621d->enter($__internal_a9b1cc8f334b4d9ac16ff7a75120dc58fa40af0e66cb2e7e9665abc30184621d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5e18ec793ca81ff85f01efa5df3b595cd3be1964bf09d213ffa1c8c6a20fd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e18ec793ca81ff85f01efa5df3b595cd3be1964bf09d213ffa1c8c6a20fd94->enter($__internal_a5e18ec793ca81ff85f01efa5df3b595cd3be1964bf09d213ffa1c8c6a20fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a5e18ec793ca81ff85f01efa5df3b595cd3be1964bf09d213ffa1c8c6a20fd94->leave($__internal_a5e18ec793ca81ff85f01efa5df3b595cd3be1964bf09d213ffa1c8c6a20fd94_prof);

        
        $__internal_a9b1cc8f334b4d9ac16ff7a75120dc58fa40af0e66cb2e7e9665abc30184621d->leave($__internal_a9b1cc8f334b4d9ac16ff7a75120dc58fa40af0e66cb2e7e9665abc30184621d_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_6dab75abaefed644089d58d772652642eb7420b1a00696805cef3528097b150c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dab75abaefed644089d58d772652642eb7420b1a00696805cef3528097b150c->enter($__internal_6dab75abaefed644089d58d772652642eb7420b1a00696805cef3528097b150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b044094883dd1612c1f30ed9b9ccd29d6fe410a1c4671506134abe9f2f7760ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b044094883dd1612c1f30ed9b9ccd29d6fe410a1c4671506134abe9f2f7760ec->enter($__internal_b044094883dd1612c1f30ed9b9ccd29d6fe410a1c4671506134abe9f2f7760ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_b044094883dd1612c1f30ed9b9ccd29d6fe410a1c4671506134abe9f2f7760ec->leave($__internal_b044094883dd1612c1f30ed9b9ccd29d6fe410a1c4671506134abe9f2f7760ec_prof);

        
        $__internal_6dab75abaefed644089d58d772652642eb7420b1a00696805cef3528097b150c->leave($__internal_6dab75abaefed644089d58d772652642eb7420b1a00696805cef3528097b150c_prof);

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
