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
        $__internal_5d6f6ee5acf246a5905392708b552273943f63f4eba55923146e1a36fb7911c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6f6ee5acf246a5905392708b552273943f63f4eba55923146e1a36fb7911c3->enter($__internal_5d6f6ee5acf246a5905392708b552273943f63f4eba55923146e1a36fb7911c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $__internal_2bc44410d105f22dd1d21bfc600c3e99d000da01b19eaf160dfb6ef48b61ebff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc44410d105f22dd1d21bfc600c3e99d000da01b19eaf160dfb6ef48b61ebff->enter($__internal_2bc44410d105f22dd1d21bfc600c3e99d000da01b19eaf160dfb6ef48b61ebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedLogin/Default/loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d6f6ee5acf246a5905392708b552273943f63f4eba55923146e1a36fb7911c3->leave($__internal_5d6f6ee5acf246a5905392708b552273943f63f4eba55923146e1a36fb7911c3_prof);

        
        $__internal_2bc44410d105f22dd1d21bfc600c3e99d000da01b19eaf160dfb6ef48b61ebff->leave($__internal_2bc44410d105f22dd1d21bfc600c3e99d000da01b19eaf160dfb6ef48b61ebff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f25ba1711ce85106d7246423aeaa761e38d7b6c3d974363bf9850a25910dc82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25ba1711ce85106d7246423aeaa761e38d7b6c3d974363bf9850a25910dc82b->enter($__internal_f25ba1711ce85106d7246423aeaa761e38d7b6c3d974363bf9850a25910dc82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_343fa31c8bcc2cc7095ecf50d701553d04b977fbbcbfaee56fe581e178f9bc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343fa31c8bcc2cc7095ecf50d701553d04b977fbbcbfaee56fe581e178f9bc45->enter($__internal_343fa31c8bcc2cc7095ecf50d701553d04b977fbbcbfaee56fe581e178f9bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_343fa31c8bcc2cc7095ecf50d701553d04b977fbbcbfaee56fe581e178f9bc45->leave($__internal_343fa31c8bcc2cc7095ecf50d701553d04b977fbbcbfaee56fe581e178f9bc45_prof);

        
        $__internal_f25ba1711ce85106d7246423aeaa761e38d7b6c3d974363bf9850a25910dc82b->leave($__internal_f25ba1711ce85106d7246423aeaa761e38d7b6c3d974363bf9850a25910dc82b_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_ce11d32e272e5e79270a00410590d35b58be80fdcd25b95dd872c5b952652643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce11d32e272e5e79270a00410590d35b58be80fdcd25b95dd872c5b952652643->enter($__internal_ce11d32e272e5e79270a00410590d35b58be80fdcd25b95dd872c5b952652643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5700dfc28009805bbf56fa8b850e838450f8a90d1d11f12be670ed49b74629ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5700dfc28009805bbf56fa8b850e838450f8a90d1d11f12be670ed49b74629ae->enter($__internal_5700dfc28009805bbf56fa8b850e838450f8a90d1d11f12be670ed49b74629ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_5700dfc28009805bbf56fa8b850e838450f8a90d1d11f12be670ed49b74629ae->leave($__internal_5700dfc28009805bbf56fa8b850e838450f8a90d1d11f12be670ed49b74629ae_prof);

        
        $__internal_ce11d32e272e5e79270a00410590d35b58be80fdcd25b95dd872c5b952652643->leave($__internal_ce11d32e272e5e79270a00410590d35b58be80fdcd25b95dd872c5b952652643_prof);

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
