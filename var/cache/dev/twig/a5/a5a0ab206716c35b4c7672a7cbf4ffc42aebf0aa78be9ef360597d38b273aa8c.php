<?php

/* EloboostedFrontofficeBundle:tevenement:index.html.twig */
class __TwigTemplate_21c4508697b1aa63177d585a29af251ae94be80bb49b064c4db05bc7b4056705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tevenement:index.html.twig", 1);
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
        $__internal_5bd6e42530b21e0c97314cc05c6d0569b6356933ccba816b2c7b1290d341dfb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd6e42530b21e0c97314cc05c6d0569b6356933ccba816b2c7b1290d341dfb3->enter($__internal_5bd6e42530b21e0c97314cc05c6d0569b6356933ccba816b2c7b1290d341dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:index.html.twig"));

        $__internal_389e2417e3245eb3fb9d5932b0abb7751a351a987422b35200ad417ba947660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389e2417e3245eb3fb9d5932b0abb7751a351a987422b35200ad417ba947660d->enter($__internal_389e2417e3245eb3fb9d5932b0abb7751a351a987422b35200ad417ba947660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd6e42530b21e0c97314cc05c6d0569b6356933ccba816b2c7b1290d341dfb3->leave($__internal_5bd6e42530b21e0c97314cc05c6d0569b6356933ccba816b2c7b1290d341dfb3_prof);

        
        $__internal_389e2417e3245eb3fb9d5932b0abb7751a351a987422b35200ad417ba947660d->leave($__internal_389e2417e3245eb3fb9d5932b0abb7751a351a987422b35200ad417ba947660d_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_70b4988e5f7129cbf854447f3ebe0c5a13faa9603976178c201063398e8ef6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b4988e5f7129cbf854447f3ebe0c5a13faa9603976178c201063398e8ef6c5->enter($__internal_70b4988e5f7129cbf854447f3ebe0c5a13faa9603976178c201063398e8ef6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cabe6e574340966c564a20bcebf89e8adb076fad63b31032e48ce6c6f9065588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabe6e574340966c564a20bcebf89e8adb076fad63b31032e48ce6c6f9065588->enter($__internal_cabe6e574340966c564a20bcebf89e8adb076fad63b31032e48ce6c6f9065588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div id=\"wrapper\">

        <section class=\"background-image\" style=\"background-image: url(http://img.youtube.com/vi/bcjA74emEJI/maxresdefault.jpg);\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"http://www.youtube.com/embed/bcjA74emEJI?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class=\"padding-top-15 padding-bottom-10\">

            <div class=\"owl-carousel owl-video\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasts"]) ? $context["lasts"] : $this->getContext($context, "lasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["vid"]) {
            // line 19
            echo "                <div class=\"card card-video\">
                    <div class=\"card-img\">
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute($context["vid"], "idEvenement", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_event_img", array("id" => $this->getAttribute($context["vid"], "idEvenement", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                        <div class=\"time\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["vid"], "dureeevent", array()), "html", null, true);
            echo "</div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>
        </section>

        <section class=\"bg-grey-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"title outline\">
                            <h4><i class=\"fa fa-video-camera\"></i> Recent Events</h4>
                            <p> Check Here Last Events Only available On Game Injection</p>
                        </div>
                    </div>
                </div>
                <div class=\"card-group\">
                    <div class=\"row\">

                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tEvenements"]) ? $context["tEvenements"] : $this->getContext($context, "tEvenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 43
            echo "
                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"card card-video\">
                                    <div class=\"card-img\">
                                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute($context["ev"], "idEvenement", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_event_img", array("id" => $this->getAttribute($context["ev"], "idEvenement", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                                        <div class=\"time\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "dureeevent", array()), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"caption\">
                                        <h3 class=\"card-title\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute($context["ev"], "idEvenement", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "titleevent", array()), "html", null, true);
            echo "</a></h3>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ev"], "dateEvent", array())), "html", null, true);
            echo "</li>
                                        </ul>
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "

                    </div>
                </div>
                ";
        // line 64
        if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > 1)) {
            // line 65
            echo "                <ul class=\"pagination margin-top-20\">

                    <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) - 1))), "html", null, true);
            echo "\"><span>&laquo;</span></a></li>
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                    <li ";
                if (($context["i"] == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                    <li><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1))), "html", null, true);
            echo "\"><span>&raquo;</span></a></li>

                </ul>
                ";
        }
        // line 77
        echo "            </div>
        </section>
    </div>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        (function(\$) {
            \"use strict\";
            \$(\".owl-carousel\").owlCarousel({
                autoPlay: true,
                items : 6, //4 items above 1000px browser width
                itemsDesktop : [1600,3], //3 items between 1000px and 0
                itemsTablet: [940,1], //1 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });
        })(jQuery);
    </script>
";
        
        $__internal_cabe6e574340966c564a20bcebf89e8adb076fad63b31032e48ce6c6f9065588->leave($__internal_cabe6e574340966c564a20bcebf89e8adb076fad63b31032e48ce6c6f9065588_prof);

        
        $__internal_70b4988e5f7129cbf854447f3ebe0c5a13faa9603976178c201063398e8ef6c5->leave($__internal_70b4988e5f7129cbf854447f3ebe0c5a13faa9603976178c201063398e8ef6c5_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tevenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 83,  211 => 82,  207 => 81,  203 => 80,  198 => 77,  191 => 73,  188 => 72,  172 => 69,  168 => 68,  164 => 67,  160 => 65,  158 => 64,  152 => 60,  139 => 53,  132 => 51,  126 => 48,  120 => 47,  114 => 43,  110 => 42,  92 => 26,  82 => 22,  76 => 21,  72 => 19,  68 => 18,  49 => 3,  40 => 2,  11 => 1,);
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
    <link href=\"{{ asset('plugins/owl-carousel/owl.carousel.css') }}\" rel=\"stylesheet\">
    <div id=\"wrapper\">

        <section class=\"background-image\" style=\"background-image: url(http://img.youtube.com/vi/bcjA74emEJI/maxresdefault.jpg);\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"http://www.youtube.com/embed/bcjA74emEJI?rel=0&amp;showinfo=0\" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <section class=\"padding-top-15 padding-bottom-10\">

            <div class=\"owl-carousel owl-video\">
                {% for vid in lasts %}
                <div class=\"card card-video\">
                    <div class=\"card-img\">
                        <a href=\"{{ path('tevenement_show',{ 'id':vid.idEvenement }) }}\"><img src=\"{{ path('get_event_img',{ 'id':vid.idEvenement }) }}\" alt=\"\"></a>
                        <div class=\"time\">{{ vid.dureeevent }}</div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </section>

        <section class=\"bg-grey-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"title outline\">
                            <h4><i class=\"fa fa-video-camera\"></i> Recent Events</h4>
                            <p> Check Here Last Events Only available On Game Injection</p>
                        </div>
                    </div>
                </div>
                <div class=\"card-group\">
                    <div class=\"row\">

                        {% for ev in tEvenements %}

                            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
                                <div class=\"card card-video\">
                                    <div class=\"card-img\">
                                        <a href=\"{{ path('tevenement_show',{ 'id':ev.idEvenement }) }}\"><img src=\"{{ path('get_event_img',{ 'id':ev.idEvenement }) }}\" alt=\"\"></a>
                                        <div class=\"time\">{{ ev.dureeevent }}</div>
                                    </div>
                                    <div class=\"caption\">
                                        <h3 class=\"card-title\"><a href=\"{{ path('tevenement_show',{ 'id':ev.idEvenement }) }}\">{{ ev.titleevent }}</a></h3>
                                        <ul>
                                            <li><i class=\"fa fa-clock-o\"></i> {{ ev.dateEvent|date }}</li>
                                        </ul>
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}


                    </div>
                </div>
                {% if pages > 1 %}
                <ul class=\"pagination margin-top-20\">

                    <li><a href=\"{{ path('tevenement_index_front',{ 'page':p-1 }) }}\"><span>&laquo;</span></a></li>
                    {% for i in 1..pages %}
                    <li {% if i==p %} class=\"active\"{% endif %}><a href=\"{{ path('tevenement_index_front',{ 'page':i }) }}\">{{ i }}</a></li>

                    {% endfor %}

                    <li><a href=\"{{ path('tevenement_index_front',{ 'page':p+1 }) }}\"><span>&raquo;</span></a></li>

                </ul>
                {% endif %}
            </div>
        </section>
    </div>
    <script src=\"{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <script>
        (function(\$) {
            \"use strict\";
            \$(\".owl-carousel\").owlCarousel({
                autoPlay: true,
                items : 6, //4 items above 1000px browser width
                itemsDesktop : [1600,3], //3 items between 1000px and 0
                itemsTablet: [940,1], //1 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });
        })(jQuery);
    </script>
{% endblock %}
", "EloboostedFrontofficeBundle:tevenement:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tevenement/index.html.twig");
    }
}
