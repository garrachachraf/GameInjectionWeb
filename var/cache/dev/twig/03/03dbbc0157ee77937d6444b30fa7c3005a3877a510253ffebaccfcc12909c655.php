<?php

/* @EloboostedFrontoffice/tevenement/show.html.twig */
class __TwigTemplate_cd7b0699a9db4291773f6c0fa36c90dd97a2bbb7775788b7aee9f65fce24b90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "@EloboostedFrontoffice/tevenement/show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EloboostedFrontoffice/Default/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc0eb14758d20a4f8ef68efbb69d0e854c39bee82217c7644085801a8e2be109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0eb14758d20a4f8ef68efbb69d0e854c39bee82217c7644085801a8e2be109->enter($__internal_bc0eb14758d20a4f8ef68efbb69d0e854c39bee82217c7644085801a8e2be109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/show.html.twig"));

        $__internal_48e194b0f5b2a5f61a4906ce1dab6488e50d869a61ee44372020ecc6b50e9248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e194b0f5b2a5f61a4906ce1dab6488e50d869a61ee44372020ecc6b50e9248->enter($__internal_48e194b0f5b2a5f61a4906ce1dab6488e50d869a61ee44372020ecc6b50e9248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0eb14758d20a4f8ef68efbb69d0e854c39bee82217c7644085801a8e2be109->leave($__internal_bc0eb14758d20a4f8ef68efbb69d0e854c39bee82217c7644085801a8e2be109_prof);

        
        $__internal_48e194b0f5b2a5f61a4906ce1dab6488e50d869a61ee44372020ecc6b50e9248->leave($__internal_48e194b0f5b2a5f61a4906ce1dab6488e50d869a61ee44372020ecc6b50e9248_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e8a75a56f294f401ed703a9da4e9ccfb08618413bf992ce9c87649d802930dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a75a56f294f401ed703a9da4e9ccfb08618413bf992ce9c87649d802930dda->enter($__internal_e8a75a56f294f401ed703a9da4e9ccfb08618413bf992ce9c87649d802930dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dca4f199f6064c58b3ba82cc7f8c3f37a6248273198eaf2f326206a16f12d583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca4f199f6064c58b3ba82cc7f8c3f37a6248273198eaf2f326206a16f12d583->enter($__internal_dca4f199f6064c58b3ba82cc7f8c3f37a6248273198eaf2f326206a16f12d583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <section class=\"hero height-350 hero-game\" style=\"background-image: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo "');\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\" class=\"no-padding-left\">Home</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front");
        echo "\">Events</a></li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>
    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-9 leftside\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">

                            <div class=\"post post-single\">
                                <div class=\"post-header\">
                                    <div class=\"post-title\">
                                        <h2><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "titleevent", array()), "html", null, true);
        echo "</a></h2>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "dateEvent", array())), "html", null, true);
        echo "</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <iframe class=\"embed-responsive-item\"  src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "lien", array()), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>

                                </div>
                                <div class=\"row margin-top-40\">

                                </div>
                                <table border=\"0\" width=\"100%\">
                                    <tr>
                                        <td class=\"padding-10\"> Type Of The Event: </td>
                                        <td><span class=\"label label-warning\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "typeEvent", array()), "html", null, true);
        echo "</span>
                                    </tr>

                                </table>
                                <p class=\"padding-10\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "note", array()), "html", null, true);
        echo " </p>
                            </div>

                            <div class=\"comments\">

                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Events </div>
                        <ul>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tevents"]) ? $context["Tevents"] : $this->getContext($context, "Tevents")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 64
            echo "                                <li>
                                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_event_img", array("id" => $this->getAttribute($context["l"], "idEvenement", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "titleevent", array()), "html", null, true);
            echo "</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateEvent", array())), "html", null, true);
            echo "</p>
                                    </div>
                                </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dca4f199f6064c58b3ba82cc7f8c3f37a6248273198eaf2f326206a16f12d583->leave($__internal_dca4f199f6064c58b3ba82cc7f8c3f37a6248273198eaf2f326206a16f12d583_prof);

        
        $__internal_e8a75a56f294f401ed703a9da4e9ccfb08618413bf992ce9c87649d802930dda->leave($__internal_e8a75a56f294f401ed703a9da4e9ccfb08618413bf992ce9c87649d802930dda_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tevenement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 87,  196 => 86,  192 => 85,  188 => 84,  184 => 83,  180 => 82,  176 => 81,  166 => 73,  155 => 68,  149 => 67,  142 => 65,  139 => 64,  135 => 63,  117 => 48,  110 => 44,  98 => 35,  90 => 30,  83 => 28,  64 => 12,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EloboostedFrontoffice/Default/Layout.html.twig' %}

{% block main %}
    <link href=\"{{ asset('css/rating.css') }}\" rel=\"stylesheet\">
    <section class=\"hero height-350 hero-game\" style=\"background-image: url('{{ asset('img/cover/cover-game.jpg') }}');\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"index.html\" class=\"no-padding-left\">Home</a></li>
                    <li><a href=\"{{ path('tevenement_index_front') }}\">Events</a></li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>
    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-9 leftside\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">

                            <div class=\"post post-single\">
                                <div class=\"post-header\">
                                    <div class=\"post-title\">
                                        <h2><a href=\"{{ path('tevenement_show', { 'id': tEvenement.idEvenement }) }}\">{{ tEvenement.titleevent }}</a></h2>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i>{{ tEvenement.dateEvent|date }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <iframe class=\"embed-responsive-item\"  src=\"{{ tEvenement.lien }}\" frameborder=\"0\" allowfullscreen></iframe>

                                </div>
                                <div class=\"row margin-top-40\">

                                </div>
                                <table border=\"0\" width=\"100%\">
                                    <tr>
                                        <td class=\"padding-10\"> Type Of The Event: </td>
                                        <td><span class=\"label label-warning\">{{ tEvenement.typeEvent }}</span>
                                    </tr>

                                </table>
                                <p class=\"padding-10\">{{ tEvenement.note }} </p>
                            </div>

                            <div class=\"comments\">

                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Events </div>
                        <ul>
                            {% for l in Tevents %}
                                <li>
                                    <a href=\"{{ path('tevenement_show', { 'id': tEvenement.idEvenement }) }}\" class=\"thumb\"><img src=\"{{ path('get_event_img',{ 'id':l.idEvenement }) }}\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"{{ path('tevenement_show', { 'id': tEvenement.idEvenement }) }}\">{{ l.titleevent }}</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> {{ l.dateEvent|date }}</p>
                                    </div>
                                </li>

                            {% endfor %}
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src=\"{{ asset('plugins/jquery/jquery-3.1.0.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/easypiechart/jquery.easypiechart.min.js') }}\"></script>
    <script src=\"{{ asset('js/rating.js') }}\"></script>
{% endblock %}

", "@EloboostedFrontoffice/tevenement/show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tevenement\\show.html.twig");
    }
}
