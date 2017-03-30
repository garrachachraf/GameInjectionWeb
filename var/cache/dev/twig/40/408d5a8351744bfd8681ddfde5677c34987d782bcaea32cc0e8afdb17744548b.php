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
        $__internal_dca783731d0c25c4c7acd832e67263261679e48d885af0db17c91d02f339f2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca783731d0c25c4c7acd832e67263261679e48d885af0db17c91d02f339f2f3->enter($__internal_dca783731d0c25c4c7acd832e67263261679e48d885af0db17c91d02f339f2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_af0d23f71d4ec59bb1d8b3d157c3d6d30813a9ffa6264527df829871144dc613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0d23f71d4ec59bb1d8b3d157c3d6d30813a9ffa6264527df829871144dc613->enter($__internal_af0d23f71d4ec59bb1d8b3d157c3d6d30813a9ffa6264527df829871144dc613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca783731d0c25c4c7acd832e67263261679e48d885af0db17c91d02f339f2f3->leave($__internal_dca783731d0c25c4c7acd832e67263261679e48d885af0db17c91d02f339f2f3_prof);

        
        $__internal_af0d23f71d4ec59bb1d8b3d157c3d6d30813a9ffa6264527df829871144dc613->leave($__internal_af0d23f71d4ec59bb1d8b3d157c3d6d30813a9ffa6264527df829871144dc613_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6aee9a62ebedda960f669a576079dfae2e2505d1ec5e711ef8bc7c1157dc5ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aee9a62ebedda960f669a576079dfae2e2505d1ec5e711ef8bc7c1157dc5ca0->enter($__internal_6aee9a62ebedda960f669a576079dfae2e2505d1ec5e711ef8bc7c1157dc5ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b561d99854d3d22637984be1f018c6b6c526882e98ce43123de229b696692f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b561d99854d3d22637984be1f018c6b6c526882e98ce43123de229b696692f78->enter($__internal_b561d99854d3d22637984be1f018c6b6c526882e98ce43123de229b696692f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b561d99854d3d22637984be1f018c6b6c526882e98ce43123de229b696692f78->leave($__internal_b561d99854d3d22637984be1f018c6b6c526882e98ce43123de229b696692f78_prof);

        
        $__internal_6aee9a62ebedda960f669a576079dfae2e2505d1ec5e711ef8bc7c1157dc5ca0->leave($__internal_6aee9a62ebedda960f669a576079dfae2e2505d1ec5e711ef8bc7c1157dc5ca0_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_36e1c1925c376d4dc78b00f0eafb4d99763bb0b2cb39850193b998307147b207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e1c1925c376d4dc78b00f0eafb4d99763bb0b2cb39850193b998307147b207->enter($__internal_36e1c1925c376d4dc78b00f0eafb4d99763bb0b2cb39850193b998307147b207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_83947f9abfde35d1537dbb60b9303e269b965efad332228a3c816805d916397a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83947f9abfde35d1537dbb60b9303e269b965efad332228a3c816805d916397a->enter($__internal_83947f9abfde35d1537dbb60b9303e269b965efad332228a3c816805d916397a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_83947f9abfde35d1537dbb60b9303e269b965efad332228a3c816805d916397a->leave($__internal_83947f9abfde35d1537dbb60b9303e269b965efad332228a3c816805d916397a_prof);

        
        $__internal_36e1c1925c376d4dc78b00f0eafb4d99763bb0b2cb39850193b998307147b207->leave($__internal_36e1c1925c376d4dc78b00f0eafb4d99763bb0b2cb39850193b998307147b207_prof);

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
