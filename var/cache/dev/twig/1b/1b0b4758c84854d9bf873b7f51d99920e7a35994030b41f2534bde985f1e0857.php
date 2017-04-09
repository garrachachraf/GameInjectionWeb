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
        $__internal_4504ed2039ded88ed443443eb69d61ce43baaac39746b75cf87bf16cc3dfb8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4504ed2039ded88ed443443eb69d61ce43baaac39746b75cf87bf16cc3dfb8c4->enter($__internal_4504ed2039ded88ed443443eb69d61ce43baaac39746b75cf87bf16cc3dfb8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_a7854a1d605b4ed3069cfa80f88ffa88b8f551dbc88aaa7a6cdd7a0b934f7faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7854a1d605b4ed3069cfa80f88ffa88b8f551dbc88aaa7a6cdd7a0b934f7faa->enter($__internal_a7854a1d605b4ed3069cfa80f88ffa88b8f551dbc88aaa7a6cdd7a0b934f7faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4504ed2039ded88ed443443eb69d61ce43baaac39746b75cf87bf16cc3dfb8c4->leave($__internal_4504ed2039ded88ed443443eb69d61ce43baaac39746b75cf87bf16cc3dfb8c4_prof);

        
        $__internal_a7854a1d605b4ed3069cfa80f88ffa88b8f551dbc88aaa7a6cdd7a0b934f7faa->leave($__internal_a7854a1d605b4ed3069cfa80f88ffa88b8f551dbc88aaa7a6cdd7a0b934f7faa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c00e113722df01abbe28ac815026971f2da8375a4cc602e28d640caf1dc92872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00e113722df01abbe28ac815026971f2da8375a4cc602e28d640caf1dc92872->enter($__internal_c00e113722df01abbe28ac815026971f2da8375a4cc602e28d640caf1dc92872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce41920a833632f183bd954a49c791a6790b08bdbe60c839b898d17b434472f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce41920a833632f183bd954a49c791a6790b08bdbe60c839b898d17b434472f5->enter($__internal_ce41920a833632f183bd954a49c791a6790b08bdbe60c839b898d17b434472f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ce41920a833632f183bd954a49c791a6790b08bdbe60c839b898d17b434472f5->leave($__internal_ce41920a833632f183bd954a49c791a6790b08bdbe60c839b898d17b434472f5_prof);

        
        $__internal_c00e113722df01abbe28ac815026971f2da8375a4cc602e28d640caf1dc92872->leave($__internal_c00e113722df01abbe28ac815026971f2da8375a4cc602e28d640caf1dc92872_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_9c156cbd8d683302237bb9e44d2aca0e177380415d888127b7d389f85cd9538a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c156cbd8d683302237bb9e44d2aca0e177380415d888127b7d389f85cd9538a->enter($__internal_9c156cbd8d683302237bb9e44d2aca0e177380415d888127b7d389f85cd9538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_79d86c781a627daeda1d28e2415843a32e2dd57f8b04547bbf9f313b33db3f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d86c781a627daeda1d28e2415843a32e2dd57f8b04547bbf9f313b33db3f59->enter($__internal_79d86c781a627daeda1d28e2415843a32e2dd57f8b04547bbf9f313b33db3f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_79d86c781a627daeda1d28e2415843a32e2dd57f8b04547bbf9f313b33db3f59->leave($__internal_79d86c781a627daeda1d28e2415843a32e2dd57f8b04547bbf9f313b33db3f59_prof);

        
        $__internal_9c156cbd8d683302237bb9e44d2aca0e177380415d888127b7d389f85cd9538a->leave($__internal_9c156cbd8d683302237bb9e44d2aca0e177380415d888127b7d389f85cd9538a_prof);

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
