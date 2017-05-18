<?php

/* EloboostedFrontofficeBundle:tournoi:edit.html.twig */
class __TwigTemplate_2e673d22153f69908cb40eca848d79212427508c36e96e30aebfdf0073ad5835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", 1);
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
        $__internal_91a2158bf87a9c4769d2a0089323a2824eaed73330e79622e800944a88600207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a2158bf87a9c4769d2a0089323a2824eaed73330e79622e800944a88600207->enter($__internal_91a2158bf87a9c4769d2a0089323a2824eaed73330e79622e800944a88600207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $__internal_474868887249c1556fcb6c9b143610c953a9034a3bbb3129bae44522914883e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474868887249c1556fcb6c9b143610c953a9034a3bbb3129bae44522914883e0->enter($__internal_474868887249c1556fcb6c9b143610c953a9034a3bbb3129bae44522914883e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a2158bf87a9c4769d2a0089323a2824eaed73330e79622e800944a88600207->leave($__internal_91a2158bf87a9c4769d2a0089323a2824eaed73330e79622e800944a88600207_prof);

        
        $__internal_474868887249c1556fcb6c9b143610c953a9034a3bbb3129bae44522914883e0->leave($__internal_474868887249c1556fcb6c9b143610c953a9034a3bbb3129bae44522914883e0_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed3a285cff81c132c3ae8e385d696d7677c38012d47c4ccaab335206dff8a161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3a285cff81c132c3ae8e385d696d7677c38012d47c4ccaab335206dff8a161->enter($__internal_ed3a285cff81c132c3ae8e385d696d7677c38012d47c4ccaab335206dff8a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a8cdd3ce8d2cf9890340419210bd52562d3bf3ab3c6eb3a47950716b769431fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cdd3ce8d2cf9890340419210bd52562d3bf3ab3c6eb3a47950716b769431fc->enter($__internal_a8cdd3ce8d2cf9890340419210bd52562d3bf3ab3c6eb3a47950716b769431fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\"
             style=\"background-image: url(http://images.glaciermedia.ca/polopoly_fs/1.2194455.1457585013!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/enter-vid-jpg.jpg);\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\">Add Tournament</h3>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Tournaments</a></li>
                        <li class=\"active\">Edit Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    ";
        // line 37
        if ( !(null === ($context["erreur"] ?? $this->getContext($context, "erreur")))) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                    ";
        }
        // line 40
        echo "                    <div class=\"form-group\">
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nom", array()), 'row');
        echo "
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker6'>
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "startDate", array()), 'row');
        echo "
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                        </div>



                    </div>


                    <div class=\"form-group\">

                        <div class='input-group date' id='datetimepicker7'>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "endDate", array()), 'row');
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
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reward1", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-trophy\"></i>
                                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reward2", array()), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reward3", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prixParJoueur", array()), 'row');
        echo "
                            </div>

                        </div>
                        <div class=\"form-group\">

                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\"
                                   title=\"Select Tournament image\"></i>

                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageTournoi", array()), 'row');
        echo "
                            </div>

                        </div>
                        <div class=\"form-group\">
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nbrJoueur", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "idGameTrn", array()), 'row');
        echo "
                        </div>
                        <div class=\"form-group\">
                            <div class=\"form-group margin-top-15\">

                                <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary pull-right\"
                                       value=\"Edit\"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <ul>
        <li>
            <a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>

        </li>
    </ul>
";
        
        $__internal_a8cdd3ce8d2cf9890340419210bd52562d3bf3ab3c6eb3a47950716b769431fc->leave($__internal_a8cdd3ce8d2cf9890340419210bd52562d3bf3ab3c6eb3a47950716b769431fc_prof);

        
        $__internal_ed3a285cff81c132c3ae8e385d696d7677c38012d47c4ccaab335206dff8a161->leave($__internal_ed3a285cff81c132c3ae8e385d696d7677c38012d47c4ccaab335206dff8a161_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 140,  225 => 135,  209 => 122,  203 => 119,  195 => 114,  182 => 104,  170 => 95,  161 => 89,  152 => 83,  127 => 61,  110 => 47,  101 => 41,  98 => 40,  92 => 38,  90 => 37,  77 => 27,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"{{ path('tournoi_index') }}\">Tournaments</a></li>
                        <li class=\"active\">Edit Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">
        {{ form_start(edit_form) }}

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    {% if erreur is not null %}
                        {{ erreur }}
                    {% endif %}
                    <div class=\"form-group\">
                        {{ form_row(edit_form.nom) }}
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker6'>
                            {{ form_row(edit_form.startDate)}}
                            <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                        </div>



                    </div>


                    <div class=\"form-group\">

                        <div class='input-group date' id='datetimepicker7'>
                            {{ form_row(edit_form.endDate)}}
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
                                        {{ form_row(edit_form.reward1) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-trophy\"></i>
                                        {{ form_row(edit_form.reward2) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                                    <div class=\"form-group input-icon-left\">
                                        <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                        {{ form_row(edit_form.reward3) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                                {{ form_row(edit_form.prixParJoueur) }}
                            </div>

                        </div>
                        <div class=\"form-group\">

                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\"
                                   title=\"Select Tournament image\"></i>

                                {{ form_row(edit_form.imageTournoi) }}
                            </div>

                        </div>
                        <div class=\"form-group\">
                            {{ form_row(edit_form.nbrJoueur) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(edit_form.idGameTrn) }}
                        </div>
                        <div class=\"form-group\">
                            <div class=\"form-group margin-top-15\">

                                <input type=\"submit\" name=\"btn\" id=\"btn\" class=\"btn btn-primary pull-right\"
                                       value=\"Edit\"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{ form_end(edit_form) }}


    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>

        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tournoi/edit.html.twig");
    }
}
