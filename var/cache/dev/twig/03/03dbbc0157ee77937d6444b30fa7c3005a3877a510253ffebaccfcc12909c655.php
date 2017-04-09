<?php

/* @EloboostedFrontoffice/tevenement/show.html.twig */
class __TwigTemplate_cd7b0699a9db4291773f6c0fa36c90dd97a2bbb7775788b7aee9f65fce24b90d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/tevenement/show.html.twig", 1);
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
        $__internal_3eaaf78113acc834d507a6fa1eedca17b500be4947d303ab9c4583094a917149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaaf78113acc834d507a6fa1eedca17b500be4947d303ab9c4583094a917149->enter($__internal_3eaaf78113acc834d507a6fa1eedca17b500be4947d303ab9c4583094a917149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/show.html.twig"));

        $__internal_87ca5f36a6e0d6c0f9e28317d379a631495ec16ef9a91a9c38f3a09cae24a5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ca5f36a6e0d6c0f9e28317d379a631495ec16ef9a91a9c38f3a09cae24a5ac->enter($__internal_87ca5f36a6e0d6c0f9e28317d379a631495ec16ef9a91a9c38f3a09cae24a5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eaaf78113acc834d507a6fa1eedca17b500be4947d303ab9c4583094a917149->leave($__internal_3eaaf78113acc834d507a6fa1eedca17b500be4947d303ab9c4583094a917149_prof);

        
        $__internal_87ca5f36a6e0d6c0f9e28317d379a631495ec16ef9a91a9c38f3a09cae24a5ac->leave($__internal_87ca5f36a6e0d6c0f9e28317d379a631495ec16ef9a91a9c38f3a09cae24a5ac_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_492a382f46217453f43ef548ad93db9ff9217e7762383c666094289f9eabf24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492a382f46217453f43ef548ad93db9ff9217e7762383c666094289f9eabf24e->enter($__internal_492a382f46217453f43ef548ad93db9ff9217e7762383c666094289f9eabf24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_55c5bcaa260bcdddb9861368a3caf4ac58a2979cc7bf446482a41a76a5304a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c5bcaa260bcdddb9861368a3caf4ac58a2979cc7bf446482a41a76a5304a4e->enter($__internal_55c5bcaa260bcdddb9861368a3caf4ac58a2979cc7bf446482a41a76a5304a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <section class=\"hero height-350 hero-game\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo ");\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection | Our Events</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\" class=\"no-padding-left\">Events</a>
                    </li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"headline\">
                                <h4>Event :</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <div class=\"post-title\">
                                        <h3>
                                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "titleevent", array()), "html", null, true);
        echo "</a>
                                        </h3>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "dateEvent", array())), "html", null, true);
        echo "</li>
                                            <li><i class=\"fa fa-youtube-play\"> Duration ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "dureeevent", array()), "html", null, true);
        echo "</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <iframe class=\"embed-responsive-item\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "lien", array()), "html", null, true);
        echo "\"
                                            allowfullscreen=\"\"></iframe>
                                </div>
                                <p>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "note", array()), "html", null, true);
        echo "
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class=\"col-md-4 padding-left-20\">
                    <div class=\"widget widget-game\" style=\"background-image: url(";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_event_img", array("id" => $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()))), "html", null, true);
        echo ");\">
                        <div class=\"overlay\">
                            <div class=\"title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "titleevent", array()), "html", null, true);
        echo "</div>

                            <div class=\"bold text-uppercase\">Type</div>
                            <span class=\"label label-warning\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "idEvenement", array()), "html", null, true);
        echo "</span>

                            <div class=\"bold text-uppercase margin-top-35\">Release Date:</div>
                            <span class=\"font-size-13\">";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tEvenement"]) ? $context["tEvenement"] : $this->getContext($context, "tEvenement")), "dateEvent", array())), "html", null, true);
        echo "</span>

                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"tab-select border-bottom-1 border-grey-300\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"\" data-toggle=\"tab\">Recent Events</a></li>
                            </ul>
                        </div>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tevents"]) ? $context["Tevents"] : $this->getContext($context, "Tevents")));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 79
            echo "                        <div class=\"tab-content\">
                            <ul class=\"tab-pane fade in active\" id=\"tabs1\">
                                <li>
                                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_show", array("id" => $this->getAttribute($context["ev"], "idEvenement", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_event_img", array("id" => $this->getAttribute($context["ev"], "idEvenement", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"#\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "titleevent", array()), "html", null, true);
            echo "</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ev"], "dateEvent", array())), "html", null, true);
            echo "</p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    </section>
";
        
        $__internal_55c5bcaa260bcdddb9861368a3caf4ac58a2979cc7bf446482a41a76a5304a4e->leave($__internal_55c5bcaa260bcdddb9861368a3caf4ac58a2979cc7bf446482a41a76a5304a4e_prof);

        
        $__internal_492a382f46217453f43ef548ad93db9ff9217e7762383c666094289f9eabf24e->leave($__internal_492a382f46217453f43ef548ad93db9ff9217e7762383c666094289f9eabf24e_prof);

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
        return array (  199 => 96,  193 => 92,  180 => 85,  176 => 84,  169 => 82,  164 => 79,  160 => 78,  146 => 67,  140 => 64,  134 => 61,  129 => 59,  116 => 49,  109 => 45,  99 => 38,  95 => 37,  87 => 34,  59 => 9,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"hero height-350 hero-game\" style=\"background-image: url({{ asset('img/cover/cover-game.jpg') }});\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection | Our Events</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('tevenement_index_front', {'page': 1}) }}\" class=\"no-padding-left\">Events</a>
                    </li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-30\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"headline\">
                                <h4>Event :</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <div class=\"post-title\">
                                        <h3>
                                            <a href=\"{{ path('tevenement_show', {'id': tEvenement.idEvenement}) }}\">{{ tEvenement.titleevent }}</a>
                                        </h3>
                                        <ul class=\"post-meta\">
                                            <li><i class=\"fa fa-calendar-o\"></i>{{ tEvenement.dateEvent|date }}</li>
                                            <li><i class=\"fa fa-youtube-play\"> Duration {{ tEvenement.dureeevent }}</i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <iframe class=\"embed-responsive-item\" src=\"{{ tEvenement.lien }}\"
                                            allowfullscreen=\"\"></iframe>
                                </div>
                                <p>
                                    {{ tEvenement.note }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class=\"col-md-4 padding-left-20\">
                    <div class=\"widget widget-game\" style=\"background-image: url({{ path('get_event_img',{ 'id':tEvenement.idEvenement }) }});\">
                        <div class=\"overlay\">
                            <div class=\"title\">{{ tEvenement.titleevent }}</div>

                            <div class=\"bold text-uppercase\">Type</div>
                            <span class=\"label label-warning\">{{ tEvenement.idEvenement }}</span>

                            <div class=\"bold text-uppercase margin-top-35\">Release Date:</div>
                            <span class=\"font-size-13\">{{ tEvenement.dateEvent|date }}</span>

                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"tab-select border-bottom-1 border-grey-300\">
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"\" data-toggle=\"tab\">Recent Events</a></li>
                            </ul>
                        </div>
                        {% for ev in Tevents %}
                        <div class=\"tab-content\">
                            <ul class=\"tab-pane fade in active\" id=\"tabs1\">
                                <li>
                                    <a href=\"{{ path('tevenement_show', {'id': ev.idEvenement}) }}\" class=\"thumb\"><img src=\"{{ path('get_event_img',{ 'id':ev.idEvenement }) }}\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"#\">{{ ev.titleevent }}</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> {{ ev.dateEvent|date }}</p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                            {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <script src=\"{{ asset('js/core.min.js') }}\"></script>
    </section>
{% endblock %}", "@EloboostedFrontoffice/tevenement/show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tevenement\\show.html.twig");
    }
}
