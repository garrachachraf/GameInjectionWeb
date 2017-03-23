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
        $__internal_ee69ed2c3e9583eb89689ccb7ceb24ad9d9fd2afd3c458b36da939150142b130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee69ed2c3e9583eb89689ccb7ceb24ad9d9fd2afd3c458b36da939150142b130->enter($__internal_ee69ed2c3e9583eb89689ccb7ceb24ad9d9fd2afd3c458b36da939150142b130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_449230333efa18de57cafa23b7694527eb4d9bcb406a2b637a313313aafc4323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449230333efa18de57cafa23b7694527eb4d9bcb406a2b637a313313aafc4323->enter($__internal_449230333efa18de57cafa23b7694527eb4d9bcb406a2b637a313313aafc4323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee69ed2c3e9583eb89689ccb7ceb24ad9d9fd2afd3c458b36da939150142b130->leave($__internal_ee69ed2c3e9583eb89689ccb7ceb24ad9d9fd2afd3c458b36da939150142b130_prof);

        
        $__internal_449230333efa18de57cafa23b7694527eb4d9bcb406a2b637a313313aafc4323->leave($__internal_449230333efa18de57cafa23b7694527eb4d9bcb406a2b637a313313aafc4323_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea47761f1c8a07b240ec3380c96526d0eeb445af3521ca23ebae1925d412db13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea47761f1c8a07b240ec3380c96526d0eeb445af3521ca23ebae1925d412db13->enter($__internal_ea47761f1c8a07b240ec3380c96526d0eeb445af3521ca23ebae1925d412db13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_728fdffb2e214f6ea1e9494957c820d083af435162aa0158ef0380a9796dfa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728fdffb2e214f6ea1e9494957c820d083af435162aa0158ef0380a9796dfa2d->enter($__internal_728fdffb2e214f6ea1e9494957c820d083af435162aa0158ef0380a9796dfa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_728fdffb2e214f6ea1e9494957c820d083af435162aa0158ef0380a9796dfa2d->leave($__internal_728fdffb2e214f6ea1e9494957c820d083af435162aa0158ef0380a9796dfa2d_prof);

        
        $__internal_ea47761f1c8a07b240ec3380c96526d0eeb445af3521ca23ebae1925d412db13->leave($__internal_ea47761f1c8a07b240ec3380c96526d0eeb445af3521ca23ebae1925d412db13_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_02ed7bdd5c2fb737f646c48c611d068cdfc03f86bc9131487428240789d84863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ed7bdd5c2fb737f646c48c611d068cdfc03f86bc9131487428240789d84863->enter($__internal_02ed7bdd5c2fb737f646c48c611d068cdfc03f86bc9131487428240789d84863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_69c7df08e2d7d88d41463bc21d3f567bbae1478aac58c0d65ac2d1ff6e3c3450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c7df08e2d7d88d41463bc21d3f567bbae1478aac58c0d65ac2d1ff6e3c3450->enter($__internal_69c7df08e2d7d88d41463bc21d3f567bbae1478aac58c0d65ac2d1ff6e3c3450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_69c7df08e2d7d88d41463bc21d3f567bbae1478aac58c0d65ac2d1ff6e3c3450->leave($__internal_69c7df08e2d7d88d41463bc21d3f567bbae1478aac58c0d65ac2d1ff6e3c3450_prof);

        
        $__internal_02ed7bdd5c2fb737f646c48c611d068cdfc03f86bc9131487428240789d84863->leave($__internal_02ed7bdd5c2fb737f646c48c611d068cdfc03f86bc9131487428240789d84863_prof);

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
