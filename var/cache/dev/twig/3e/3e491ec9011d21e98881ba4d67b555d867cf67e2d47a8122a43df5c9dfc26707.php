<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_e18468d65e30395a833ab93e0875c7213324a8a1eeedea447e8a25cb5efa5209 extends Twig_Template
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
        $__internal_aa699b3a6ddc68a98e4f45f937bd69cf474b2ea07b6e90f518ce87ad17e25ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa699b3a6ddc68a98e4f45f937bd69cf474b2ea07b6e90f518ce87ad17e25ca8->enter($__internal_aa699b3a6ddc68a98e4f45f937bd69cf474b2ea07b6e90f518ce87ad17e25ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_57c6090ccbe48b51e1b71d56deaf1854fe77244705964922c594ef729128cae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c6090ccbe48b51e1b71d56deaf1854fe77244705964922c594ef729128cae1->enter($__internal_57c6090ccbe48b51e1b71d56deaf1854fe77244705964922c594ef729128cae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa699b3a6ddc68a98e4f45f937bd69cf474b2ea07b6e90f518ce87ad17e25ca8->leave($__internal_aa699b3a6ddc68a98e4f45f937bd69cf474b2ea07b6e90f518ce87ad17e25ca8_prof);

        
        $__internal_57c6090ccbe48b51e1b71d56deaf1854fe77244705964922c594ef729128cae1->leave($__internal_57c6090ccbe48b51e1b71d56deaf1854fe77244705964922c594ef729128cae1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3af98901d8ce71b7817c44614cda08bfe023f72d8b183975f4d2a1beca2dd2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af98901d8ce71b7817c44614cda08bfe023f72d8b183975f4d2a1beca2dd2b1->enter($__internal_3af98901d8ce71b7817c44614cda08bfe023f72d8b183975f4d2a1beca2dd2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0dfda4a2a258dba1b651ad0703d4e7f458f994fe197672ceb3b7557e20d064fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfda4a2a258dba1b651ad0703d4e7f458f994fe197672ceb3b7557e20d064fb->enter($__internal_0dfda4a2a258dba1b651ad0703d4e7f458f994fe197672ceb3b7557e20d064fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0dfda4a2a258dba1b651ad0703d4e7f458f994fe197672ceb3b7557e20d064fb->leave($__internal_0dfda4a2a258dba1b651ad0703d4e7f458f994fe197672ceb3b7557e20d064fb_prof);

        
        $__internal_3af98901d8ce71b7817c44614cda08bfe023f72d8b183975f4d2a1beca2dd2b1->leave($__internal_3af98901d8ce71b7817c44614cda08bfe023f72d8b183975f4d2a1beca2dd2b1_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_a1c5e7be58852710e3af3b2a3b45cce39e24128bf59063cb70ddaf41e7b76b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c5e7be58852710e3af3b2a3b45cce39e24128bf59063cb70ddaf41e7b76b4e->enter($__internal_a1c5e7be58852710e3af3b2a3b45cce39e24128bf59063cb70ddaf41e7b76b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_31075b684aa4566a9752f838c85f9b567ccc8cf22b2ef87ce8803b6c78654d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31075b684aa4566a9752f838c85f9b567ccc8cf22b2ef87ce8803b6c78654d9b->enter($__internal_31075b684aa4566a9752f838c85f9b567ccc8cf22b2ef87ce8803b6c78654d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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



                            </div>
                            <div class=\"panel-footer\">
                                Don't have Gameforest account? <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createAccount");
        echo "\">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
";
        
        $__internal_31075b684aa4566a9752f838c85f9b567ccc8cf22b2ef87ce8803b6c78654d9b->leave($__internal_31075b684aa4566a9752f838c85f9b567ccc8cf22b2ef87ce8803b6c78654d9b_prof);

        
        $__internal_a1c5e7be58852710e3af3b2a3b45cce39e24128bf59063cb70ddaf41e7b76b4e->leave($__internal_a1c5e7be58852710e3af3b2a3b45cce39e24128bf59063cb70ddaf41e7b76b4e_prof);

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
        return array (  105 => 35,  75 => 8,  72 => 7,  63 => 6,  50 => 4,  41 => 3,  11 => 2,);
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



                            </div>
                            <div class=\"panel-footer\">
                                Don't have Gameforest account? <a href=\"{{ path('createAccount') }}\">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
