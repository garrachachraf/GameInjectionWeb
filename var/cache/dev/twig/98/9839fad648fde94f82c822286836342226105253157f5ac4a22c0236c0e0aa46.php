<?php

/* EloboostedBackofficeBundle:Tournoi:new.html.twig */
class __TwigTemplate_92c0fd19cb2923717cccf7a8cdf03edd1967dd440db7b25ae94109f584e15916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Tournoi:new.html.twig", 1);
        $this->blocks = array(
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
            'extrascript' => array($this, 'block_extrascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9355d4212801920b9e2bdd1d9cfde79d72bdcca396d7af08e38178804ba2b1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9355d4212801920b9e2bdd1d9cfde79d72bdcca396d7af08e38178804ba2b1df->enter($__internal_9355d4212801920b9e2bdd1d9cfde79d72bdcca396d7af08e38178804ba2b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:new.html.twig"));

        $__internal_79ee0131a64558a5b68eb6c06f059deabe8e8b34825156bff3b9c18daf36de5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ee0131a64558a5b68eb6c06f059deabe8e8b34825156bff3b9c18daf36de5c->enter($__internal_79ee0131a64558a5b68eb6c06f059deabe8e8b34825156bff3b9c18daf36de5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Tournoi:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9355d4212801920b9e2bdd1d9cfde79d72bdcca396d7af08e38178804ba2b1df->leave($__internal_9355d4212801920b9e2bdd1d9cfde79d72bdcca396d7af08e38178804ba2b1df_prof);

        
        $__internal_79ee0131a64558a5b68eb6c06f059deabe8e8b34825156bff3b9c18daf36de5c->leave($__internal_79ee0131a64558a5b68eb6c06f059deabe8e8b34825156bff3b9c18daf36de5c_prof);

    }

    // line 2
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_27a1d753f4b5ff66759a4416cd70ceb7df014cf6c89f0b1739cc4532fc414e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a1d753f4b5ff66759a4416cd70ceb7df014cf6c89f0b1739cc4532fc414e62->enter($__internal_27a1d753f4b5ff66759a4416cd70ceb7df014cf6c89f0b1739cc4532fc414e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_79c6b19ed139eef93bcbf7ae773cc314544399a9ff703869a21b639746aece9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c6b19ed139eef93bcbf7ae773cc314544399a9ff703869a21b639746aece9e->enter($__internal_79c6b19ed139eef93bcbf7ae773cc314544399a9ff703869a21b639746aece9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 3
        echo "    <script type=\"text/javascript\" src=\"http://cdn.jsdelivr.net/jquery/1/jquery.min.js\"></script>


    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Form Design
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left", "data-parsley-validate" => "")));
        echo "

                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">

                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'row', array("attr" => array("class" => "hidden", "type" => "text")));
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'row', array("attr" => array("class" => "hidden")));
        echo "

                            <input type=\"text\" name=\"daterange\" value=\"\" class=\"form-control col-md-7 col-xs-12\"/>

                            <script type=\"text/javascript\">
                                \$(function () {
                                    var dd = new Date();
                                    var k = new Date();
                                    dd.setDate(dd.getDate() + 3);
                                    \$('input[name=\"daterange\"]').daterangepicker({
                                        \"showDropdowns\": true,
                                        \"timePicker\": true,
                                        \"timePicker24Hour\": true,
                                        \"linkedCalendars\": false,
                                        \"parentEl\": \"minDate\",
                                        \"endDate\": dd,
                                        \"minDate\": dd

                                    }, function (start, end, label) {
                                        document.getElementById(\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").value = start.format('YYYY-MM-DDThh:mm:ssTZ');
                                        document.getElementById(\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").value = end.format('YYYY-MM-DDThh:mm:ssTZ');
                                        var x = start.format('YYYY-MM-DD');
                                        var cc = new Date('\"' + x + \"'\");

                                        \$(\"#total\").html(\"Total : \" + (Math.abs(Math.ceil((k.getTime() - cc.getTime()) / (1000 * 60 * 60 * 24))) + 1) + \" Points\");
                                    });
                                });
                            </script>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Prizes * </label>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">

                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward1", array()), 'row', array("attr" => array("class" => "form-control  has-feedback-left")));
        echo "
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward2", array()), 'row', array("attr" => array("class" => "form-control  has-feedback-left")));
        echo "
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward3", array()), 'row', array("attr" => array("class" => "form-control  has-feedback-left")));
        echo "
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Participation fees  <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixParJoueur", array()), 'row', array("attr" => array("class" => "form-control  col-md-7 col-xs-12 has-feedback-left")));
        echo "
                            <span class=\"fa fa-dollar form-control-feedback left\" aria-hidden=\"true\"></span>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Logo : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageTournoi", array()), 'row', array("attr" => array("class" => "form-control  col-md-7 col-xs-12 has-feedback-left")));
        echo "
                            <span class=\"fa fa-image form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Players : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrJoueur", array()), 'row', array("attr" => array("class" => "form-control  col-md-7 col-xs-12 has-feedback-left")));
        echo "
                            <span class=\"fa fa-child form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Players : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idGameTrn", array()), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            <button type=\"submit\" class=\"btn btn-success\">Create</button>
                        </div>
                        <div id=\"total\" name=\"total\"></div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "







";
        
        $__internal_79c6b19ed139eef93bcbf7ae773cc314544399a9ff703869a21b639746aece9e->leave($__internal_79c6b19ed139eef93bcbf7ae773cc314544399a9ff703869a21b639746aece9e_prof);

        
        $__internal_27a1d753f4b5ff66759a4416cd70ceb7df014cf6c89f0b1739cc4532fc414e62->leave($__internal_27a1d753f4b5ff66759a4416cd70ceb7df014cf6c89f0b1739cc4532fc414e62_prof);

    }

    // line 157
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_e2fc19f34528d71a8635c2aa7906a57f7bd1cd6b6be79ca6431508f386aab7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fc19f34528d71a8635c2aa7906a57f7bd1cd6b6be79ca6431508f386aab7bd->enter($__internal_e2fc19f34528d71a8635c2aa7906a57f7bd1cd6b6be79ca6431508f386aab7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_91ceb9579a20f94bb6b17abbfd99311b00546ac0b5f10bdb66124a02db3621c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ceb9579a20f94bb6b17abbfd99311b00546ac0b5f10bdb66124a02db3621c8->enter($__internal_91ceb9579a20f94bb6b17abbfd99311b00546ac0b5f10bdb66124a02db3621c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 158
        echo "

    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\"
            src=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\"/>


";
        
        $__internal_91ceb9579a20f94bb6b17abbfd99311b00546ac0b5f10bdb66124a02db3621c8->leave($__internal_91ceb9579a20f94bb6b17abbfd99311b00546ac0b5f10bdb66124a02db3621c8_prof);

        
        $__internal_e2fc19f34528d71a8635c2aa7906a57f7bd1cd6b6be79ca6431508f386aab7bd->leave($__internal_e2fc19f34528d71a8635c2aa7906a57f7bd1cd6b6be79ca6431508f386aab7bd_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Tournoi:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 158,  258 => 157,  239 => 148,  234 => 146,  212 => 127,  202 => 120,  192 => 113,  181 => 105,  167 => 94,  160 => 90,  153 => 86,  135 => 71,  131 => 70,  109 => 51,  105 => 50,  94 => 42,  83 => 34,  50 => 3,  41 => 2,  11 => 1,);
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
                    <h2>Form Design
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
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">

                            {{ form_row(form.nom,{'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">First Name <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            {{ form_row(form.startDate,{'attr': {'class': 'hidden','type':'text'}}) }}
                            {{ form_row(form.endDate,{'attr': {'class': 'hidden'}}) }}

                            <input type=\"text\" name=\"daterange\" value=\"\" class=\"form-control col-md-7 col-xs-12\"/>

                            <script type=\"text/javascript\">
                                \$(function () {
                                    var dd = new Date();
                                    var k = new Date();
                                    dd.setDate(dd.getDate() + 3);
                                    \$('input[name=\"daterange\"]').daterangepicker({
                                        \"showDropdowns\": true,
                                        \"timePicker\": true,
                                        \"timePicker24Hour\": true,
                                        \"linkedCalendars\": false,
                                        \"parentEl\": \"minDate\",
                                        \"endDate\": dd,
                                        \"minDate\": dd

                                    }, function (start, end, label) {
                                        document.getElementById(\"{{ form.startDate.vars.id }}\").value = start.format('YYYY-MM-DDThh:mm:ssTZ');
                                        document.getElementById(\"{{ form.endDate.vars.id }}\").value = end.format('YYYY-MM-DDThh:mm:ssTZ');
                                        var x = start.format('YYYY-MM-DD');
                                        var cc = new Date('\"' + x + \"'\");

                                        \$(\"#total\").html(\"Total : \" + (Math.abs(Math.ceil((k.getTime() - cc.getTime()) / (1000 * 60 * 60 * 24))) + 1) + \" Points\");
                                    });
                                });
                            </script>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Prizes * </label>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">

                            {{ form_row(form.reward1,{'attr': {'class': 'form-control  has-feedback-left'}}) }}
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">
                            {{ form_row(form.reward2,{'attr': {'class': 'form-control  has-feedback-left'}}) }}
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                        <div class=\"col-md-2 col-sm-12 col-xs-12 form-group has-feedback\">
                            {{ form_row(form.reward3,{'attr': {'class': 'form-control  has-feedback-left'}}) }}
                            <span class=\"fa fa-trophy form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Participation fees  <span
                                    class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            {{ form_row(form.prixParJoueur,{'attr': {'class': 'form-control  col-md-7 col-xs-12 has-feedback-left'}}) }}
                            <span class=\"fa fa-dollar form-control-feedback left\" aria-hidden=\"true\"></span>

                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Logo : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            {{ form_row(form.imageTournoi,{'attr': {'class': 'form-control  col-md-7 col-xs-12 has-feedback-left'}}) }}
                            <span class=\"fa fa-image form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Players : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group has-feedback\">
                            {{ form_row(form.nbrJoueur,{'attr': {'class': 'form-control  col-md-7 col-xs-12 has-feedback-left'}}) }}
                            <span class=\"fa fa-child form-control-feedback left\" aria-hidden=\"true\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Players : <span class=\"required\">*</span></label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                            {{ form_row(form.idGameTrn) }}
                        </div>
                    </div>
                    <div class=\"ln_solid\"></div>
                    <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                            <button class=\"btn btn-primary\" type=\"reset\">Reset</button>
                            <button type=\"submit\" class=\"btn btn-success\">Create</button>
                        </div>
                        <div id=\"total\" name=\"total\"></div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    {{ form_rest(form) }}

    {{ form_end(form) }}







{% endblock %}
{% block extrascript %}


    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\"
            src=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css\"/>


{% endblock %}", "EloboostedBackofficeBundle:Tournoi:new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/Tournoi/new.html.twig");
    }
}
