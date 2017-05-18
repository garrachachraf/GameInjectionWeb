<?php

/* EloboostedBackofficeBundle:Gamelist:new.html.twig */
class __TwigTemplate_b1dbe090862c51d2ea405b89144944c6864ef63ad68e568ae2fa28ccbe9b8d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Gamelist:new.html.twig", 1);
        $this->blocks = array(
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22aef13513c0251409819d6bcc06445c1241fa2d8b4cb3263ae09a82326ec0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22aef13513c0251409819d6bcc06445c1241fa2d8b4cb3263ae09a82326ec0cb->enter($__internal_22aef13513c0251409819d6bcc06445c1241fa2d8b4cb3263ae09a82326ec0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Gamelist:new.html.twig"));

        $__internal_5b77f4a4cb8aae75708d7886e5a4a8eb5e1160d0d611e1272909259f6ca33e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b77f4a4cb8aae75708d7886e5a4a8eb5e1160d0d611e1272909259f6ca33e6e->enter($__internal_5b77f4a4cb8aae75708d7886e5a4a8eb5e1160d0d611e1272909259f6ca33e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Gamelist:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22aef13513c0251409819d6bcc06445c1241fa2d8b4cb3263ae09a82326ec0cb->leave($__internal_22aef13513c0251409819d6bcc06445c1241fa2d8b4cb3263ae09a82326ec0cb_prof);

        
        $__internal_5b77f4a4cb8aae75708d7886e5a4a8eb5e1160d0d611e1272909259f6ca33e6e->leave($__internal_5b77f4a4cb8aae75708d7886e5a4a8eb5e1160d0d611e1272909259f6ca33e6e_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_11922b2718eb45593f0abda2eefbed3ed47a88f2e104da1dfeec5732854a578d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11922b2718eb45593f0abda2eefbed3ed47a88f2e104da1dfeec5732854a578d->enter($__internal_11922b2718eb45593f0abda2eefbed3ed47a88f2e104da1dfeec5732854a578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_9f4e913f0c94f2fbb1e3d1eecea6de8fcb386bb41374f670582a0b2307cc624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4e913f0c94f2fbb1e3d1eecea6de8fcb386bb41374f670582a0b2307cc624d->enter($__internal_9f4e913f0c94f2fbb1e3d1eecea6de8fcb386bb41374f670582a0b2307cc624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 3
        echo "    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/jquery/1/jquery.min.js\"></script>


    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>New Gamelist
                        <small>different form elements</small>
                    </h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Settings 1</a>
                                </li>
                                <li><a href=\"#\">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <br>
                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left", "data-parsley-validate" => "")));
        echo "

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\"> Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "

                        </div>
                    </div>
                    <br><br>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Description<span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "

                        </div>
                    </div>
                    <br><br><br>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Logo<span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'row', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "

                        </div>
                    </div>
                    <br>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            <button type=\"submit\" class=\"btn btn-success\">Create</button>
                        </div>
                        <div id=\"total\" name=\"total\"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "






";
        
        $__internal_9f4e913f0c94f2fbb1e3d1eecea6de8fcb386bb41374f670582a0b2307cc624d->leave($__internal_9f4e913f0c94f2fbb1e3d1eecea6de8fcb386bb41374f670582a0b2307cc624d_prof);

        
        $__internal_11922b2718eb45593f0abda2eefbed3ed47a88f2e104da1dfeec5732854a578d->leave($__internal_11922b2718eb45593f0abda2eefbed3ed47a88f2e104da1dfeec5732854a578d_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Gamelist:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 84,  142 => 82,  118 => 61,  105 => 51,  92 => 41,  82 => 34,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}
{% block insiderowbottom %}
    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/jquery/1/jquery.min.js\"></script>


    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>New Gamelist
                        <small>different form elements</small>
                    </h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                        <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Settings 1</a>
                                </li>
                                <li><a href=\"#\">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                        </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    <br>
                    {{ form_start(form,{'attr': {'class': 'form-horizontal form-label-left','data-parsley-validate':''}}) }}

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\"> Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_row(form.name,{'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}

                        </div>
                    </div>
                    <br><br>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Description<span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_row(form.description,{'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}

                        </div>
                    </div>
                    <br><br><br>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Logo<span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_row(form.image,{'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}

                        </div>
                    </div>
                    <br>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            <button type=\"submit\" class=\"btn btn-success\">Create</button>
                        </div>
                        <div id=\"total\" name=\"total\"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    {{ form_rest(form) }}

    {{ form_end(form) }}






{% endblock %}
", "EloboostedBackofficeBundle:Gamelist:new.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Gamelist/new.html.twig");
    }
}
