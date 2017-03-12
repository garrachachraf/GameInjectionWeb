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
        $__internal_10559e9ee54aa565ce4b1f7d3bf759687277521ead99314ebf778338188821c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10559e9ee54aa565ce4b1f7d3bf759687277521ead99314ebf778338188821c8->enter($__internal_10559e9ee54aa565ce4b1f7d3bf759687277521ead99314ebf778338188821c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $__internal_db839558d18dd9ee2e0f15995107a18aed7e385b7745465ce2ec097e65aaaa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db839558d18dd9ee2e0f15995107a18aed7e385b7745465ce2ec097e65aaaa89->enter($__internal_db839558d18dd9ee2e0f15995107a18aed7e385b7745465ce2ec097e65aaaa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedLoginBundle:Default:loginform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10559e9ee54aa565ce4b1f7d3bf759687277521ead99314ebf778338188821c8->leave($__internal_10559e9ee54aa565ce4b1f7d3bf759687277521ead99314ebf778338188821c8_prof);

        
        $__internal_db839558d18dd9ee2e0f15995107a18aed7e385b7745465ce2ec097e65aaaa89->leave($__internal_db839558d18dd9ee2e0f15995107a18aed7e385b7745465ce2ec097e65aaaa89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1ca8ade2aa62a51e98bbeda1215804fa7a5a9ebe46f6cbbc71f5032211e61ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ca8ade2aa62a51e98bbeda1215804fa7a5a9ebe46f6cbbc71f5032211e61ce->enter($__internal_d1ca8ade2aa62a51e98bbeda1215804fa7a5a9ebe46f6cbbc71f5032211e61ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9196e3bd1210b348c2ff1bbeb9aa1efb2625ee68356d1f5be57bdfa0b6b98194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9196e3bd1210b348c2ff1bbeb9aa1efb2625ee68356d1f5be57bdfa0b6b98194->enter($__internal_9196e3bd1210b348c2ff1bbeb9aa1efb2625ee68356d1f5be57bdfa0b6b98194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        
        $__internal_9196e3bd1210b348c2ff1bbeb9aa1efb2625ee68356d1f5be57bdfa0b6b98194->leave($__internal_9196e3bd1210b348c2ff1bbeb9aa1efb2625ee68356d1f5be57bdfa0b6b98194_prof);

        
        $__internal_d1ca8ade2aa62a51e98bbeda1215804fa7a5a9ebe46f6cbbc71f5032211e61ce->leave($__internal_d1ca8ade2aa62a51e98bbeda1215804fa7a5a9ebe46f6cbbc71f5032211e61ce_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_48ffe77731072ec450de68b233cd422111eaea87035af53ceb92db92b830baa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ffe77731072ec450de68b233cd422111eaea87035af53ceb92db92b830baa7->enter($__internal_48ffe77731072ec450de68b233cd422111eaea87035af53ceb92db92b830baa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_392c63dba53fb0df515e0f8be3611f074772d757eec71ca4edff122a0ac67905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392c63dba53fb0df515e0f8be3611f074772d757eec71ca4edff122a0ac67905->enter($__internal_392c63dba53fb0df515e0f8be3611f074772d757eec71ca4edff122a0ac67905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_392c63dba53fb0df515e0f8be3611f074772d757eec71ca4edff122a0ac67905->leave($__internal_392c63dba53fb0df515e0f8be3611f074772d757eec71ca4edff122a0ac67905_prof);

        
        $__internal_48ffe77731072ec450de68b233cd422111eaea87035af53ceb92db92b830baa7->leave($__internal_48ffe77731072ec450de68b233cd422111eaea87035af53ceb92db92b830baa7_prof);

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
{% endblock %}", "EloboostedLoginBundle:Default:loginform.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/LoginBundle/Resources/views/Default/loginform.html.twig");
    }
}
