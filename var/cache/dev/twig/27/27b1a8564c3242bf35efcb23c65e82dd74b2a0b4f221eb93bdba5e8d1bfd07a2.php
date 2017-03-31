<?php

/* EloboostedFrontofficeBundle:tournoi:new.html.twig */
class __TwigTemplate_e74e399cf60d044a8cfbd09afc9a66b5eeaf7f776b7661e7c68e2aaec22487f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:new.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd6fc0a0a0b48a87ec4cac348f518eb31047545dee17d57245783111c625b5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6fc0a0a0b48a87ec4cac348f518eb31047545dee17d57245783111c625b5a5->enter($__internal_cd6fc0a0a0b48a87ec4cac348f518eb31047545dee17d57245783111c625b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:new.html.twig"));

        $__internal_f322868ca37f3765d6f7cb33555d3e7548e314f27371636f2253eee8f10b88dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f322868ca37f3765d6f7cb33555d3e7548e314f27371636f2253eee8f10b88dc->enter($__internal_f322868ca37f3765d6f7cb33555d3e7548e314f27371636f2253eee8f10b88dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd6fc0a0a0b48a87ec4cac348f518eb31047545dee17d57245783111c625b5a5->leave($__internal_cd6fc0a0a0b48a87ec4cac348f518eb31047545dee17d57245783111c625b5a5_prof);

        
        $__internal_f322868ca37f3765d6f7cb33555d3e7548e314f27371636f2253eee8f10b88dc->leave($__internal_f322868ca37f3765d6f7cb33555d3e7548e314f27371636f2253eee8f10b88dc_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c8dec6e3c13e7d5504b2a671fa6220737ba1ab8de8dbe88a2202556d157eeab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8dec6e3c13e7d5504b2a671fa6220737ba1ab8de8dbe88a2202556d157eeab->enter($__internal_7c8dec6e3c13e7d5504b2a671fa6220737ba1ab8de8dbe88a2202556d157eeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_159b0cf9e92efde4b9b71b9d421c609c8b1a143176b6f6c50b5d3b43a7c3349c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159b0cf9e92efde4b9b71b9d421c609c8b1a143176b6f6c50b5d3b43a7c3349c->enter($__internal_159b0cf9e92efde4b9b71b9d421c609c8b1a143176b6f6c50b5d3b43a7c3349c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\"
             style=\"background-image: url(http://images.glaciermedia.ca/polopoly_fs/1.2194455.1457585013!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/enter-vid-jpg.jpg);\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\">Add Tournament</h3>
            </div>
        </div>
    </section>
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Tournaments</a></li>
                        <li class=\"active\">Add Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker6'>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'row');
        echo "
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                        </div>



                    </div>


                    <div class=\"form-group\">

                        <div class='input-group date' id='datetimepicker7'>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'row');
        echo "
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>

                    </div>
                    <script>
                        \$(function () {
                        \$('#datetimepicker6').datetimepicker();
                        \$('#datetimepicker6').data(\"DateTimePicker\").minDate(new Date());
                        \$('#datetimepicker7').datetimepicker();
                            \$(\"#datetimepicker6\").on(\"dp.change\", function (e) {
                                var dd = new Date(e.date);
                                dd.setDate(dd.getDate()+1);
                                \$('#datetimepicker7').data(\"DateTimePicker\").minDate(dd);
                            });
                        });</script>
                    <div class=\"form-group\">
                        <div class=\"row margin-top-30\">
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\"></i>
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward1", array()), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\"></i>
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward2", array()), 'row');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reward3", array()), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixParJoueur", array()), 'row');
        echo "
                        </div>

                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\"
                               title=\"Select Tournament image\"></i>

                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageTournoi", array()), 'row');
        echo "
                        </div>

                    </div>
                    <div class=\"form-group\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbrJoueur", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idGameTrn", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group margin-top-15\">
                            <div class=\"checkbox pull-left margin-top-10\">
                                <input type=\"checkbox\" id=\"checkbox2\" onclick=\"accepted()\">

                                <label for=\"checkbox2\">Accept <a href=\"#\"> terms and service.</a></label>
                                <script>
                                    function accepted() {
                                        document.getElementById(\"btn\").disabled = false;
                                    }

                                </script>
                            </div>
                            <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary pull-right\" disabled
                                   value=\"Create\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



    ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_159b0cf9e92efde4b9b71b9d421c609c8b1a143176b6f6c50b5d3b43a7c3349c->leave($__internal_159b0cf9e92efde4b9b71b9d421c609c8b1a143176b6f6c50b5d3b43a7c3349c_prof);

        
        $__internal_7c8dec6e3c13e7d5504b2a671fa6220737ba1ab8de8dbe88a2202556d157eeab->leave($__internal_7c8dec6e3c13e7d5504b2a671fa6220737ba1ab8de8dbe88a2202556d157eeab_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 150,  230 => 146,  201 => 120,  195 => 117,  187 => 112,  174 => 102,  162 => 93,  153 => 87,  144 => 81,  119 => 59,  102 => 45,  93 => 39,  72 => 21,  62 => 14,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}


    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\"
             style=\"background-image: url(http://images.glaciermedia.ca/polopoly_fs/1.2194455.1457585013!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/enter-vid-jpg.jpg);\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\">Add Tournament</h3>
            </div>
        </div>
    </section>
    {{ form_start(form) }}
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"{{ path('tournoi_index') }}\">Tournaments</a></li>
                        <li class=\"active\">Add Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.nom) }}
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker6'>
                            {{ form_row(form.startDate)}}
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                        </div>



                    </div>


                    <div class=\"form-group\">

                        <div class='input-group date' id='datetimepicker7'>
                            {{ form_row(form.endDate)}}
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>

                    </div>
                    <script>
                        \$(function () {
                        \$('#datetimepicker6').datetimepicker();
                        \$('#datetimepicker6').data(\"DateTimePicker\").minDate(new Date());
                        \$('#datetimepicker7').datetimepicker();
                            \$(\"#datetimepicker6\").on(\"dp.change\", function (e) {
                                var dd = new Date(e.date);
                                dd.setDate(dd.getDate()+1);
                                \$('#datetimepicker7').data(\"DateTimePicker\").minDate(dd);
                            });
                        });</script>
                    <div class=\"form-group\">
                        <div class=\"row margin-top-30\">
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\"></i>
                                    {{ form_row(form.reward1) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\"></i>
                                    {{ form_row(form.reward2) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                <div class=\"form-group input-icon-left\">
                                    <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                    {{ form_row(form.reward3) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            {{ form_row(form.prixParJoueur) }}
                        </div>

                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\"
                               title=\"Select Tournament image\"></i>

                            {{ form_row(form.imageTournoi) }}
                        </div>

                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.nbrJoueur) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.idGameTrn) }}
                    </div>
                    <div class=\"form-group\">
                        <div class=\"form-group margin-top-15\">
                            <div class=\"checkbox pull-left margin-top-10\">
                                <input type=\"checkbox\" id=\"checkbox2\" onclick=\"accepted()\">

                                <label for=\"checkbox2\">Accept <a href=\"#\"> terms and service.</a></label>
                                <script>
                                    function accepted() {
                                        document.getElementById(\"btn\").disabled = false;
                                    }

                                </script>
                            </div>
                            <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary pull-right\" disabled
                                   value=\"Create\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{ form_rest(form) }}



    {{ form_end(form) }}


{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:new.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/new.html.twig");
    }
}
