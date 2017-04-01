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
        $__internal_edf0ecce767e68d78ad3fe1c4edc484e0c25b1887dcdb5a1f11127cab406ffd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf0ecce767e68d78ad3fe1c4edc484e0c25b1887dcdb5a1f11127cab406ffd6->enter($__internal_edf0ecce767e68d78ad3fe1c4edc484e0c25b1887dcdb5a1f11127cab406ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_60876faef8c9be7e7dd55d2209e6caec2dc1be055ab68e4284f24cc1fd1c59f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60876faef8c9be7e7dd55d2209e6caec2dc1be055ab68e4284f24cc1fd1c59f8->enter($__internal_60876faef8c9be7e7dd55d2209e6caec2dc1be055ab68e4284f24cc1fd1c59f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf0ecce767e68d78ad3fe1c4edc484e0c25b1887dcdb5a1f11127cab406ffd6->leave($__internal_edf0ecce767e68d78ad3fe1c4edc484e0c25b1887dcdb5a1f11127cab406ffd6_prof);

        
        $__internal_60876faef8c9be7e7dd55d2209e6caec2dc1be055ab68e4284f24cc1fd1c59f8->leave($__internal_60876faef8c9be7e7dd55d2209e6caec2dc1be055ab68e4284f24cc1fd1c59f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_707f1f48b723199abd987150b248684708b892c5017ef16a0f8bd9c9186231e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707f1f48b723199abd987150b248684708b892c5017ef16a0f8bd9c9186231e5->enter($__internal_707f1f48b723199abd987150b248684708b892c5017ef16a0f8bd9c9186231e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbc1088dfa2944e2ac40d72493411a55ee234f3fa13be06e6f7e08ddd6fd5a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc1088dfa2944e2ac40d72493411a55ee234f3fa13be06e6f7e08ddd6fd5a47->enter($__internal_dbc1088dfa2944e2ac40d72493411a55ee234f3fa13be06e6f7e08ddd6fd5a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dbc1088dfa2944e2ac40d72493411a55ee234f3fa13be06e6f7e08ddd6fd5a47->leave($__internal_dbc1088dfa2944e2ac40d72493411a55ee234f3fa13be06e6f7e08ddd6fd5a47_prof);

        
        $__internal_707f1f48b723199abd987150b248684708b892c5017ef16a0f8bd9c9186231e5->leave($__internal_707f1f48b723199abd987150b248684708b892c5017ef16a0f8bd9c9186231e5_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_3ac3df79ccf6c2e77793b6853ea1578442abfe9aa2c96dd4670d395d63e7abe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac3df79ccf6c2e77793b6853ea1578442abfe9aa2c96dd4670d395d63e7abe4->enter($__internal_3ac3df79ccf6c2e77793b6853ea1578442abfe9aa2c96dd4670d395d63e7abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_68a9e6444391e8c89ae26112fe425bcf0172e5d302f7a9e4dfeb2b7b7944feea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a9e6444391e8c89ae26112fe425bcf0172e5d302f7a9e4dfeb2b7b7944feea->enter($__internal_68a9e6444391e8c89ae26112fe425bcf0172e5d302f7a9e4dfeb2b7b7944feea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_68a9e6444391e8c89ae26112fe425bcf0172e5d302f7a9e4dfeb2b7b7944feea->leave($__internal_68a9e6444391e8c89ae26112fe425bcf0172e5d302f7a9e4dfeb2b7b7944feea_prof);

        
        $__internal_3ac3df79ccf6c2e77793b6853ea1578442abfe9aa2c96dd4670d395d63e7abe4->leave($__internal_3ac3df79ccf6c2e77793b6853ea1578442abfe9aa2c96dd4670d395d63e7abe4_prof);

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
