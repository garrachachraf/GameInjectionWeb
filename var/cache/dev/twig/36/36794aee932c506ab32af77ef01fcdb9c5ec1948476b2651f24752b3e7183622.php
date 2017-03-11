<?php

/* EloboostedLoginBundle:Default:loginform.html.twig */
class __TwigTemplate_15df0c0f949408690c2e451276e237a04ac1d508715ff8b27fa956289812355a extends Twig_Template
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
        $__internal_a41adba04be7ea20fea40f249cc5ab40d62c0120058f7e761e120b81abf5fc2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41adba04be7ea20fea40f249cc5ab40d62c0120058f7e761e120b81abf5fc2d->enter($__internal_a41adba04be7ea20fea40f249cc5ab40d62c0120058f7e761e120b81abf5fc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_8695aaf0444fcf05c22d9112e161eff29e6719a25eeef0136300f4b773f412e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8695aaf0444fcf05c22d9112e161eff29e6719a25eeef0136300f4b773f412e3->enter($__internal_8695aaf0444fcf05c22d9112e161eff29e6719a25eeef0136300f4b773f412e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41adba04be7ea20fea40f249cc5ab40d62c0120058f7e761e120b81abf5fc2d->leave($__internal_a41adba04be7ea20fea40f249cc5ab40d62c0120058f7e761e120b81abf5fc2d_prof);

        
        $__internal_8695aaf0444fcf05c22d9112e161eff29e6719a25eeef0136300f4b773f412e3->leave($__internal_8695aaf0444fcf05c22d9112e161eff29e6719a25eeef0136300f4b773f412e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f63b6704650cbb57b8afa9489a6205b5ae049ccd5c63776c0b0c14bd0b23e7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63b6704650cbb57b8afa9489a6205b5ae049ccd5c63776c0b0c14bd0b23e7d8->enter($__internal_f63b6704650cbb57b8afa9489a6205b5ae049ccd5c63776c0b0c14bd0b23e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a5525a7e44dea8edeffe654b25db756b9e46aac7d2bfc8befcea9ddada43089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a5525a7e44dea8edeffe654b25db756b9e46aac7d2bfc8befcea9ddada43089->enter($__internal_0a5525a7e44dea8edeffe654b25db756b9e46aac7d2bfc8befcea9ddada43089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        
        $__internal_0a5525a7e44dea8edeffe654b25db756b9e46aac7d2bfc8befcea9ddada43089->leave($__internal_0a5525a7e44dea8edeffe654b25db756b9e46aac7d2bfc8befcea9ddada43089_prof);

        
        $__internal_f63b6704650cbb57b8afa9489a6205b5ae049ccd5c63776c0b0c14bd0b23e7d8->leave($__internal_f63b6704650cbb57b8afa9489a6205b5ae049ccd5c63776c0b0c14bd0b23e7d8_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_21750009a68cd806b771faf821144bdd5529de770dc5ded8e8bc362e0c101bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21750009a68cd806b771faf821144bdd5529de770dc5ded8e8bc362e0c101bcc->enter($__internal_21750009a68cd806b771faf821144bdd5529de770dc5ded8e8bc362e0c101bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_bc00d20925091be2f03ec848ca5798b5223d42dadb18d93ec46c1044cdd58a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc00d20925091be2f03ec848ca5798b5223d42dadb18d93ec46c1044cdd58a03->enter($__internal_bc00d20925091be2f03ec848ca5798b5223d42dadb18d93ec46c1044cdd58a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "<form  method=\"post\">
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
        
        $__internal_bc00d20925091be2f03ec848ca5798b5223d42dadb18d93ec46c1044cdd58a03->leave($__internal_bc00d20925091be2f03ec848ca5798b5223d42dadb18d93ec46c1044cdd58a03_prof);

        
        $__internal_21750009a68cd806b771faf821144bdd5529de770dc5ded8e8bc362e0c101bcc->leave($__internal_21750009a68cd806b771faf821144bdd5529de770dc5ded8e8bc362e0c101bcc_prof);

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
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "/Library/WebServer/Documents/sprintweb/src/Eloboosted/LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
