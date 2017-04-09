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
        $__internal_b29217b52094e595948367c7ec349d36b4571eb8422721a42a2883385ae5b753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29217b52094e595948367c7ec349d36b4571eb8422721a42a2883385ae5b753->enter($__internal_b29217b52094e595948367c7ec349d36b4571eb8422721a42a2883385ae5b753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_02678f4a3e8165ae2d0cca3b565246fd033e65c8d93ac203bbe9dda37af31ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02678f4a3e8165ae2d0cca3b565246fd033e65c8d93ac203bbe9dda37af31ceb->enter($__internal_02678f4a3e8165ae2d0cca3b565246fd033e65c8d93ac203bbe9dda37af31ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29217b52094e595948367c7ec349d36b4571eb8422721a42a2883385ae5b753->leave($__internal_b29217b52094e595948367c7ec349d36b4571eb8422721a42a2883385ae5b753_prof);

        
        $__internal_02678f4a3e8165ae2d0cca3b565246fd033e65c8d93ac203bbe9dda37af31ceb->leave($__internal_02678f4a3e8165ae2d0cca3b565246fd033e65c8d93ac203bbe9dda37af31ceb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_968d23f21c84857694651fc6e35c3d407638ceb8fe2cc09966089a83f60a880b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968d23f21c84857694651fc6e35c3d407638ceb8fe2cc09966089a83f60a880b->enter($__internal_968d23f21c84857694651fc6e35c3d407638ceb8fe2cc09966089a83f60a880b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_656b0e4df13372c280ef7cf613eafc4e64a56972f209939943c6f443e92486ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656b0e4df13372c280ef7cf613eafc4e64a56972f209939943c6f443e92486ed->enter($__internal_656b0e4df13372c280ef7cf613eafc4e64a56972f209939943c6f443e92486ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_656b0e4df13372c280ef7cf613eafc4e64a56972f209939943c6f443e92486ed->leave($__internal_656b0e4df13372c280ef7cf613eafc4e64a56972f209939943c6f443e92486ed_prof);

        
        $__internal_968d23f21c84857694651fc6e35c3d407638ceb8fe2cc09966089a83f60a880b->leave($__internal_968d23f21c84857694651fc6e35c3d407638ceb8fe2cc09966089a83f60a880b_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_315ca0ed295a81a18c70a116b92fcd58d8fc3f74c15ebd5501b4b02bfce6f8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315ca0ed295a81a18c70a116b92fcd58d8fc3f74c15ebd5501b4b02bfce6f8f9->enter($__internal_315ca0ed295a81a18c70a116b92fcd58d8fc3f74c15ebd5501b4b02bfce6f8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_08d739ce37d8dcc0c285c02b6908758d1aa35d0557749a7c93a79b1b22ce8116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d739ce37d8dcc0c285c02b6908758d1aa35d0557749a7c93a79b1b22ce8116->enter($__internal_08d739ce37d8dcc0c285c02b6908758d1aa35d0557749a7c93a79b1b22ce8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_08d739ce37d8dcc0c285c02b6908758d1aa35d0557749a7c93a79b1b22ce8116->leave($__internal_08d739ce37d8dcc0c285c02b6908758d1aa35d0557749a7c93a79b1b22ce8116_prof);

        
        $__internal_315ca0ed295a81a18c70a116b92fcd58d8fc3f74c15ebd5501b4b02bfce6f8f9->leave($__internal_315ca0ed295a81a18c70a116b92fcd58d8fc3f74c15ebd5501b4b02bfce6f8f9_prof);

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
