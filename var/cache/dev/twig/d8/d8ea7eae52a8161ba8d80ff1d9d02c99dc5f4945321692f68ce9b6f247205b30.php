<?php

/* @EloboostedFrontoffice/Tournament/addTournament.html.twig */
class __TwigTemplate_a2b3da1ca9dd532a7839268e0c7a2316388cc4c2f024d6344d6a0966116daddb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Tournament/addTournament.html.twig", 2);
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
        $__internal_d2b3724caf91a28cdfef2fd83591326d2872116666d15deda48e1ca4ab283fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b3724caf91a28cdfef2fd83591326d2872116666d15deda48e1ca4ab283fca->enter($__internal_d2b3724caf91a28cdfef2fd83591326d2872116666d15deda48e1ca4ab283fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Tournament/addTournament.html.twig"));

        $__internal_2504abd4df6fcceb4bd7599379d8b4afc20485c7c44d311d7027bf55e424bbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2504abd4df6fcceb4bd7599379d8b4afc20485c7c44d311d7027bf55e424bbaa->enter($__internal_2504abd4df6fcceb4bd7599379d8b4afc20485c7c44d311d7027bf55e424bbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Tournament/addTournament.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b3724caf91a28cdfef2fd83591326d2872116666d15deda48e1ca4ab283fca->leave($__internal_d2b3724caf91a28cdfef2fd83591326d2872116666d15deda48e1ca4ab283fca_prof);

        
        $__internal_2504abd4df6fcceb4bd7599379d8b4afc20485c7c44d311d7027bf55e424bbaa->leave($__internal_2504abd4df6fcceb4bd7599379d8b4afc20485c7c44d311d7027bf55e424bbaa_prof);

    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $__internal_b0d276d2287e383b1aea490abd4502de329dc78b53c31eef38bd8a5e7d18577d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d276d2287e383b1aea490abd4502de329dc78b53c31eef38bd8a5e7d18577d->enter($__internal_b0d276d2287e383b1aea490abd4502de329dc78b53c31eef38bd8a5e7d18577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_560d9953569da948aa334f79a225aeb4f64a1b025a924c95ab7185bc7cf77d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560d9953569da948aa334f79a225aeb4f64a1b025a924c95ab7185bc7cf77d2b->enter($__internal_560d9953569da948aa334f79a225aeb4f64a1b025a924c95ab7185bc7cf77d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "



    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(http://images.glaciermedia.ca/polopoly_fs/1.2194455.1457585013!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/enter-vid-jpg.jpg);\">
            <span class=\"background-overlay\"></span>
        <div class=\"container\">
            <h3 class=\"color-white font-weight-300\">Add Tournament</h3>
        </div>

    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Tournaments</a></li>
                        <li class=\"active\">Add Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Tournament Name\">
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker51'>
                            <input type='text' class=\"form-control\" id='datetimepicker5' name='datetimepicker5'/>
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                        </div>
                    </div>

                    <script type=\"text/javascript\">

                        var date1 = new Date();
                        \$(function () {
                            \$('#datetimepicker5').datetimepicker({
                                minDate: date1
                            });
                            \$('#datetimepicker51').datetimepicker({
                                minDate: date1
                            });
                        });
                        \$(\"#datetimepicker5\").on('change', function () {
                            alert(\"dfdfd\");
                            // Does some stuff and logs the event to the console
                        });
                    </script>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker21'>
                            <input type='text' class=\"form-control\" id='datetimepicker2' name='datetimepicker2'/>
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                        </div>

                    </div>

                    <script type=\"text/javascript\">
                        function mmodate() {
                            var a = document.getElementsByName(\"datetimepicker5\").valueOf()[0].value;
                            var date2 = new Date(a);
                            date2.setDate(date2.getDate() + 1);
                            document.getElementsByName(\"datetimepicker2\").valueOf()[0].value = date2;
                            \$(function () {
                                \$('#datetimepicker2').datetimepicker({
                                    defaultDate: date2,
                                    minDate: date2
                                });
                                \$('#datetimepicker21').datetimepicker({
                                    defaultDate: date2,
                                    minDate: date2
                                });
                            });
                        }

                        \$(function () {
                            \$('input[name=\"datetimepicker5\"]').datetimepicker({}).on('dp.change', function (event) {
                                mmodate();
                            });
                            \$('#datetimepicker51').datetimepicker({}).on('dp.change', function (event) {
                                mmodate();
                            });

                        });

                    </script>
                    <script type=\"text/javascript\">


                    </script>
                    <div class=\"form-group\">
                    <div class=\"row margin-top-30\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Participation fees\">
                        </div>

                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                             <input type=\"file\" id=\"photo\" name=\"photo\" class=\"form-control\" placeholder=\"Select Tournament image\">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


";
        
        $__internal_560d9953569da948aa334f79a225aeb4f64a1b025a924c95ab7185bc7cf77d2b->leave($__internal_560d9953569da948aa334f79a225aeb4f64a1b025a924c95ab7185bc7cf77d2b_prof);

        
        $__internal_b0d276d2287e383b1aea490abd4502de329dc78b53c31eef38bd8a5e7d18577d->leave($__internal_b0d276d2287e383b1aea490abd4502de329dc78b53c31eef38bd8a5e7d18577d_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Tournament/addTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/FrontofficeBundle/Resources/views/Default/addTournament.html.twig #}
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}

{% block main %}




    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(http://images.glaciermedia.ca/polopoly_fs/1.2194455.1457585013!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/enter-vid-jpg.jpg);\">
            <span class=\"background-overlay\"></span>
        <div class=\"container\">
            <h3 class=\"color-white font-weight-300\">Add Tournament</h3>
        </div>

    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Tournaments</a></li>
                        <li class=\"active\">Add Tournament</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\"  >

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-7 col-md-offset-2\">
                    <div class=\"title\">
                        <h3> Add New Tournament</h3>
                        <p></p>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"name\" id=\"name\" placeholder=\"Tournament Name\">
                    </div>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker51'>
                            <input type='text' class=\"form-control\" id='datetimepicker5' name='datetimepicker5'/>
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                        </div>
                    </div>

                    <script type=\"text/javascript\">

                        var date1 = new Date();
                        \$(function () {
                            \$('#datetimepicker5').datetimepicker({
                                minDate: date1
                            });
                            \$('#datetimepicker51').datetimepicker({
                                minDate: date1
                            });
                        });
                        \$(\"#datetimepicker5\").on('change', function () {
                            alert(\"dfdfd\");
                            // Does some stuff and logs the event to the console
                        });
                    </script>


                    <div class=\"form-group\">
                        <div class='input-group date' id='datetimepicker21'>
                            <input type='text' class=\"form-control\" id='datetimepicker2' name='datetimepicker2'/>
                            <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                        </div>

                    </div>

                    <script type=\"text/javascript\">
                        function mmodate() {
                            var a = document.getElementsByName(\"datetimepicker5\").valueOf()[0].value;
                            var date2 = new Date(a);
                            date2.setDate(date2.getDate() + 1);
                            document.getElementsByName(\"datetimepicker2\").valueOf()[0].value = date2;
                            \$(function () {
                                \$('#datetimepicker2').datetimepicker({
                                    defaultDate: date2,
                                    minDate: date2
                                });
                                \$('#datetimepicker21').datetimepicker({
                                    defaultDate: date2,
                                    minDate: date2
                                });
                            });
                        }

                        \$(function () {
                            \$('input[name=\"datetimepicker5\"]').datetimepicker({}).on('dp.change', function (event) {
                                mmodate();
                            });
                            \$('#datetimepicker51').datetimepicker({}).on('dp.change', function (event) {
                                mmodate();
                            });

                        });

                    </script>
                    <script type=\"text/javascript\">


                    </script>
                    <div class=\"form-group\">
                    <div class=\"row margin-top-30\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                            <div class=\"form-group input-icon-left\">
                                <i class=\"fa fa-trophy\" data-original-title=\"\" title=\"\"></i>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Text Input\">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-dollar\" data-original-title=\"\" title=\"\"></i>
                            <input type=\"number\" class=\"form-control\" placeholder=\"Participation fees\">
                        </div>

                    </div>
                    <div class=\"form-group\">

                        <div class=\"form-group input-icon-left\">
                            <i class=\"fa fa-image note-placeholder\" data-original-title=\"Select Tournament image\" title=\"Select Tournament image\"></i>
                             <input type=\"file\" id=\"photo\" name=\"photo\" class=\"form-control\" placeholder=\"Select Tournament image\">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


{% endblock %}
", "@EloboostedFrontoffice/Tournament/addTournament.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Tournament\\addTournament.html.twig");
    }
}
