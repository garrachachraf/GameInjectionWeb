<?php

/* EloboostedFrontofficeBundle:tevenement:streamingall.html.twig */
class __TwigTemplate_a783fe99911cd1ce5069e5d26f5e1db0f2a63b0e33ae96cdfcb35a0a48fe5146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig", 1);
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
        $__internal_fde780dd6a324f325316d16ebaaa1e2c9685f1ca138a25ade869bac8531ff57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde780dd6a324f325316d16ebaaa1e2c9685f1ca138a25ade869bac8531ff57a->enter($__internal_fde780dd6a324f325316d16ebaaa1e2c9685f1ca138a25ade869bac8531ff57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig"));

        $__internal_66a9dd6d93729deb15ec7654bd6a21dcf5fd7069b82744038c2f032076da7df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a9dd6d93729deb15ec7654bd6a21dcf5fd7069b82744038c2f032076da7df9->enter($__internal_66a9dd6d93729deb15ec7654bd6a21dcf5fd7069b82744038c2f032076da7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fde780dd6a324f325316d16ebaaa1e2c9685f1ca138a25ade869bac8531ff57a->leave($__internal_fde780dd6a324f325316d16ebaaa1e2c9685f1ca138a25ade869bac8531ff57a_prof);

        
        $__internal_66a9dd6d93729deb15ec7654bd6a21dcf5fd7069b82744038c2f032076da7df9->leave($__internal_66a9dd6d93729deb15ec7654bd6a21dcf5fd7069b82744038c2f032076da7df9_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_abdcbe3fe1d9e86cff8025ef386f195a359e79546a90ff23703a10294db9c97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdcbe3fe1d9e86cff8025ef386f195a359e79546a90ff23703a10294db9c97d->enter($__internal_abdcbe3fe1d9e86cff8025ef386f195a359e79546a90ff23703a10294db9c97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0474ece6d55aaea90c2ebeb16cf7645f2c42b94d66e4c052154d4ef8b6a33eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0474ece6d55aaea90c2ebeb16cf7645f2c42b94d66e4c052154d4ef8b6a33eb6->enter($__internal_0474ece6d55aaea90c2ebeb16cf7645f2c42b94d66e4c052154d4ef8b6a33eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            echo "                        <div class=\"post post-lg\">
                            <div class=\"post-header post-author\">
                                <a href=\"#\" class=\"author\" data-toggle=\"tooltip\" title=\"\"
                                   data-original-title=\"YAKUZI\"><img
                                            src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "logo", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                                <div class=\"post-title\">
                                    <h2><a href=\"blog-post.html\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "status", array()), "html", null, true);
            echo "</a></h2>
                                    <ul class=\"post-meta\">
                                        <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "</a></li>
                                        <li><i class=\"fa fa-eye\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "views", array()), "html", null, true);
            echo "</li>
                                        <li><a href=\"#\"><i class=\"fa fa-comments\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "followers", array()), "html", null, true);
            echo " <span
                                                        class=\"hidden-xs\">followers</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"post-thumbnail\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"398\" width=\"708\"
                                        autoplay=false></iframe>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside\">


                    <div class=\"widget widget-games\">
                        <div class=\"title\">Top Streamers</div>
                        <ul>
                            <li style=\"background-image: url(";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">1</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">2</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">3</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["faker"]) ? $context["faker"] : $this->getContext($context, "faker")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">4</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nl_kripp"]) ? $context["nl_kripp"] : $this->getContext($context, "nl_kripp")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">5</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timthetatman"]) ? $context["timthetatman"] : $this->getContext($context, "timthetatman")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class=\"widget\">
                        <div class=\"title\">Recommended Channels</div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "game", array()), "html", null, true);
        echo "</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "updated_at", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-eye\"></i> ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb3"]) ? $context["nb3"] : $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "name", array()), "html", null, true);
        echo "\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "game", array()), "html", null, true);
        echo "</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> ";
        // line 139
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "updated_at", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-eye\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qt"]) ? $context["qt"] : $this->getContext($context, "qt")), "followers", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>

    </section>
";
        
        $__internal_0474ece6d55aaea90c2ebeb16cf7645f2c42b94d66e4c052154d4ef8b6a33eb6->leave($__internal_0474ece6d55aaea90c2ebeb16cf7645f2c42b94d66e4c052154d4ef8b6a33eb6_prof);

        
        $__internal_abdcbe3fe1d9e86cff8025ef386f195a359e79546a90ff23703a10294db9c97d->leave($__internal_abdcbe3fe1d9e86cff8025ef386f195a359e79546a90ff23703a10294db9c97d_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 152,  282 => 140,  278 => 139,  273 => 137,  265 => 132,  256 => 126,  252 => 125,  247 => 123,  239 => 118,  224 => 106,  220 => 105,  213 => 101,  206 => 97,  202 => 96,  195 => 92,  188 => 88,  184 => 87,  177 => 83,  170 => 79,  166 => 78,  159 => 74,  152 => 70,  148 => 69,  141 => 65,  129 => 55,  117 => 49,  108 => 43,  104 => 42,  100 => 41,  95 => 39,  90 => 37,  84 => 33,  80 => 32,  49 => 3,  40 => 2,  11 => 1,);
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
                                <a href=\"#\" class=\"author\" data-toggle=\"tooltip\" title=\"\"
                                   data-original-title=\"YAKUZI\"><img
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
                                <iframe src=\"https://player.twitch.tv/?channel={{ t.name }}\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"398\" width=\"708\"
                                        autoplay=false></iframe>
                            </div>
                        </div>
                    {% endfor %}


                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside\">


                    <div class=\"widget widget-games\">
                        <div class=\"title\">Top Streamers</div>
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
                        <div class=\"title\">Recommended Channels</div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel={{ nb3.name }}\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">{{ nb3.game }}</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> {{ nb3.updated_at|date }}</li>
                                    <li><i class=\"fa fa-eye\"></i> {{ nb3.followers }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel={{ qt.name }}\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">{{ qt.game }}</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> {{ qt.updated_at|date }}</li>
                                    <li><i class=\"fa fa-eye\"></i> {{ qt.followers }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <script src=\"{{ asset('js/core.min.js') }}\"></script>

    </section>
{% endblock %}", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tevenement/streamingall.html.twig");
    }
}
