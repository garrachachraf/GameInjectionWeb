<?php

/* @EloboostedFrontoffice/tevenement/streamingall.html.twig */
class __TwigTemplate_be4a19e4ca235457a47f8b3992d467062dc42f4f191bc69d0308dfbf944cfd30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "@EloboostedFrontoffice/tevenement/streamingall.html.twig", 1);
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
        $__internal_96e826b8a4f52613b9b9bec1cade08a73c6a1da8768dec7a41ab3ada6905a6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e826b8a4f52613b9b9bec1cade08a73c6a1da8768dec7a41ab3ada6905a6d1->enter($__internal_96e826b8a4f52613b9b9bec1cade08a73c6a1da8768dec7a41ab3ada6905a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/streamingall.html.twig"));

        $__internal_9a3f3d9f7ab040114f4214ee2849027949492143b456c281bfed351683f761bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3f3d9f7ab040114f4214ee2849027949492143b456c281bfed351683f761bc->enter($__internal_9a3f3d9f7ab040114f4214ee2849027949492143b456c281bfed351683f761bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tevenement/streamingall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e826b8a4f52613b9b9bec1cade08a73c6a1da8768dec7a41ab3ada6905a6d1->leave($__internal_96e826b8a4f52613b9b9bec1cade08a73c6a1da8768dec7a41ab3ada6905a6d1_prof);

        
        $__internal_9a3f3d9f7ab040114f4214ee2849027949492143b456c281bfed351683f761bc->leave($__internal_9a3f3d9f7ab040114f4214ee2849027949492143b456c281bfed351683f761bc_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_65320263a49fc6dca8d02c8692870861dfb03b94663e051702db8da92fd95655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65320263a49fc6dca8d02c8692870861dfb03b94663e051702db8da92fd95655->enter($__internal_65320263a49fc6dca8d02c8692870861dfb03b94663e051702db8da92fd95655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d66ca50dc3a12ae6911a4de23a5f40b113250a34237ef324aa9736ec1f39a442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66ca50dc3a12ae6911a4de23a5f40b113250a34237ef324aa9736ec1f39a442->enter($__internal_d66ca50dc3a12ae6911a4de23a5f40b113250a34237ef324aa9736ec1f39a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <style>

        .custom {
            background: #ff081b;
            animation: myfirst 5s;
            -webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
        }

        @-webkit-keyframes myfirst /* Firefox */
        {
            0% {
                background: red;
            }
            50% {
                background: #e6023f;
            }
            100% {
                background: #ff0079;
            }
        }


    </style>

    <section>
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside\">

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersoverwatch"]) ? $context["usersoverwatch"] : $this->getContext($context, "usersoverwatch")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 33
            echo "                    <div class=\"post post-lg\">
                        <div class=\"post-header post-author\">
                            <a href=\"#\" class=\"author\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"YAKUZI\"><img
                                        src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "logo", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                            <div class=\"post-title\">
                                <h2><a href=\"blog-post.html\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "status", array()), "html", null, true);
            echo "</a></h2>
                                <ul class=\"post-meta\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "</a></li>
                                    <li><i class=\"fa fa-eye\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "views", array()), "html", null, true);
            echo "</li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "followers", array()), "html", null, true);
            echo " <span
                                                    class=\"hidden-xs\">followers</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"post-thumbnail\">
                            <iframe src=\"https://player.twitch.tv/?channel=";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\" height=\"398\" width=\"708\" autoplay=false></iframe>
                        </div>
                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside\">


                    <div class=\"widget widget-games\">
                        <div class=\"title\">Top Upcoming Games</div>
                        <ul>
                            <li style=\"background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">1</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">2</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">3</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">4</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">5</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class=\"widget\">
                        <div class=\"title\">Recommended Videos</div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\" autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "game", array()), "html", null, true);
        echo "</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> ";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "updated_at", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-eye\"></i> ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>

    </section>
";
        
        $__internal_d66ca50dc3a12ae6911a4de23a5f40b113250a34237ef324aa9736ec1f39a442->leave($__internal_d66ca50dc3a12ae6911a4de23a5f40b113250a34237ef324aa9736ec1f39a442_prof);

        
        $__internal_65320263a49fc6dca8d02c8692870861dfb03b94663e051702db8da92fd95655->leave($__internal_65320263a49fc6dca8d02c8692870861dfb03b94663e051702db8da92fd95655_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tevenement/streamingall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 133,  252 => 122,  248 => 121,  243 => 119,  237 => 116,  221 => 103,  217 => 102,  210 => 98,  203 => 94,  199 => 93,  192 => 89,  185 => 85,  181 => 84,  174 => 80,  167 => 76,  163 => 75,  156 => 71,  149 => 67,  145 => 66,  138 => 62,  126 => 52,  116 => 48,  107 => 42,  103 => 41,  99 => 40,  94 => 38,  89 => 36,  84 => 33,  80 => 32,  49 => 3,  40 => 2,  11 => 1,);
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
    <style>

        .custom {
            background: #ff081b;
            animation: myfirst 5s;
            -webkit-animation: myfirst 1.25s infinite; /* Safari and Chrome */
        }

        @-webkit-keyframes myfirst /* Firefox */
        {
            0% {
                background: red;
            }
            50% {
                background: #e6023f;
            }
            100% {
                background: #ff0079;
            }
        }


    </style>

    <section>
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside\">

{% for t in usersoverwatch %}
                    <div class=\"post post-lg\">
                        <div class=\"post-header post-author\">
                            <a href=\"#\" class=\"author\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"YAKUZI\"><img
                                        src=\"{{ t.logo }}\" alt=\"\"></a>
                            <div class=\"post-title\">
                                <h2><a href=\"blog-post.html\">{{ t.status }}</a></h2>
                                <ul class=\"post-meta\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> {{ t.name }}</a></li>
                                    <li><i class=\"fa fa-eye\"></i> {{ t.views }}</li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i> {{ t.followers }} <span
                                                    class=\"hidden-xs\">followers</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"post-thumbnail\">
                            <iframe src=\"https://player.twitch.tv/?channel={{ t.name }}\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\" height=\"398\" width=\"708\" autoplay=false></iframe>
                        </div>
                    </div>
    {% endfor %}


                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside\">


                    <div class=\"widget widget-games\">
                        <div class=\"title\">Top Upcoming Games</div>
                        <ul>
                            <li style=\"background-image: url({{ qt.logo }});\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">1</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">{{ qt.name }}</h4>
                                        <span>{{ qt.followers }}</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url({{ nb3.logo }});\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">2</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">{{ nb3.name }}</h4>
                                        <span>{{ nb3.followers }}</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url({{ faker.logo }});\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">3</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">{{ faker.name }}</h4>
                                        <span>{{ faker.followers }}</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url({{ nl_kripp.logo }});\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">4</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">{{ nl_kripp.name }}</h4>
                                        <span>{{ nl_kripp.followers }}</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url({{ timthetatman.logo }});\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">5</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">{{ timthetatman.name }}</h4>
                                        <span>{{ timthetatman.followers }}</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class=\"widget\">
                        <div class=\"title\">Recommended Videos</div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel={{ nb3.name }}\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\" autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">{{ nb3.game}}</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> {{ nb3.updated_at|date }}</li>
                                    <li><i class=\"fa fa-eye\"></i> {{ nb3.followers }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <script src=\"{{ asset('js/core.min.js') }}\"></script>

    </section>
{% endblock %}", "@EloboostedFrontoffice/tevenement/streamingall.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tevenement\\streamingall.html.twig");
    }
}