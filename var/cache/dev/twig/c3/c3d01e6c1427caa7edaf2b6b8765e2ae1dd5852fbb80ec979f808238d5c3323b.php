<?php

/* EloboostedFrontofficeBundle:tevenement:streamingall.html.twig */
class __TwigTemplate_dc121912ed4d7e1ddb6ae157aa407e9f48f89e63b33cd463322abc4f95f70052 extends Twig_Template
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
        $__internal_292e8b70bcbe2ed25179a071f505d4dceebafcd570ff195ad2ec95463688d01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292e8b70bcbe2ed25179a071f505d4dceebafcd570ff195ad2ec95463688d01a->enter($__internal_292e8b70bcbe2ed25179a071f505d4dceebafcd570ff195ad2ec95463688d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig"));

        $__internal_05dbe9efc78d3dfc0cb4af9575789165eb7acf8c836631f63dacc0973441c9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dbe9efc78d3dfc0cb4af9575789165eb7acf8c836631f63dacc0973441c9d6->enter($__internal_05dbe9efc78d3dfc0cb4af9575789165eb7acf8c836631f63dacc0973441c9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292e8b70bcbe2ed25179a071f505d4dceebafcd570ff195ad2ec95463688d01a->leave($__internal_292e8b70bcbe2ed25179a071f505d4dceebafcd570ff195ad2ec95463688d01a_prof);

        
        $__internal_05dbe9efc78d3dfc0cb4af9575789165eb7acf8c836631f63dacc0973441c9d6->leave($__internal_05dbe9efc78d3dfc0cb4af9575789165eb7acf8c836631f63dacc0973441c9d6_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_bab9221a371562906920e577b5b34653a43133a0a2520789d23e23bb8f8033cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab9221a371562906920e577b5b34653a43133a0a2520789d23e23bb8f8033cf->enter($__internal_bab9221a371562906920e577b5b34653a43133a0a2520789d23e23bb8f8033cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_08c11d81832918d888439b00790b954fc8a06fe3053d38e1bd4f5f0722bbdc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c11d81832918d888439b00790b954fc8a06fe3053d38e1bd4f5f0722bbdc53->enter($__internal_08c11d81832918d888439b00790b954fc8a06fe3053d38e1bd4f5f0722bbdc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
    <script>
        var should = chai.should();
        chai.Assertion.includeStack = true;
        mocha.setup({
            ui: 'bdd',
            globals: ['Twitch'],
            ignoreLeaks: true
        });
    </script>

    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/twitch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/test.integration.api.js"), "html", null, true);
        echo "\"></script>

    <script>
        window.CLIENT_ID = 'wd54hhxdz79qajdijaofha1zb0dk3g';
        window.REDIRECT_URI = 'https://www.twitch.tv/imaqtpie'
        \$(function () {
            Twitch.init({clientId: CLIENT_ID});

            \$('.twitch-connect').click(function () {
                Twitch.login({
                    redirect_uri: REDIRECT_URI,
                    popup: true,
                    scope: ['user_read', 'channel_read', 'channel_commercial']
                });
                \$('.fragment-entry').removeClass('hidden')
            })

            \$('.fragment-entry button').click(function () {
                document.location.hash = \$('#fragment').val()

                Twitch._initSession();
                mocha.run();
            })
        });
    </script>

    <style type=\"text/css\">
        .hidden {
            display: none;
        }

        .test.pass::before {
            content: '✓';
            font-size: 12px;
            display: block;
            float: left;
            margin-right: 5px;
            color: #00c41c;
        }

        .test.fail::before {
            content: '✖';
            font-size: 12px;
            display: block;
            float: left;
            margin-right: 5px;
            color: #c00;
        }
    </style>

    <section>
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12 leftside\">

                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usersoverwatch"] ?? $this->getContext($context, "usersoverwatch")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 93
            echo "                        <div class=\"post post-lg\">
                            <div class=\"post-header post-author\">
                                <a href=\"#\" class=\"author\" data-toggle=\"tooltip\" title=\"\"
                                   data-original-title=\"YAKUZI\"><img
                                            src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "logo", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                                <div class=\"post-title\">
                                    <h2><a href=\"blog-post.html\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "status", array()), "html", null, true);
            echo "</a></h2>
                                    <ul class=\"post-meta\">
                                        <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "</a></li>
                                        <li><i class=\"fa fa-eye\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "views", array()), "html", null, true);
            echo "</li>
                                        <li><a href=\"#\"><i class=\"fa fa-comments\"></i> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "followers", array()), "html", null, true);
            echo " <span
                                                        class=\"hidden-xs\">followers</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"post-thumbnail\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
            // line 109
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
        // line 115
        echo "
                </div>

                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 rightside\">


                    <div class=\"widget widget-games\">
                        <div class=\"title\">Top Streamers</div>
                        <ul>
                            <li style=\"background-image: url(";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">1</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">2</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faker"] ?? $this->getContext($context, "faker")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">3</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faker"] ?? $this->getContext($context, "faker")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faker"] ?? $this->getContext($context, "faker")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nl_kripp"] ?? $this->getContext($context, "nl_kripp")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">4</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nl_kripp"] ?? $this->getContext($context, "nl_kripp")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nl_kripp"] ?? $this->getContext($context, "nl_kripp")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                            <li style=\"background-image: url(";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["timthetatman"] ?? $this->getContext($context, "timthetatman")), "logo", array()), "html", null, true);
        echo ");\">
                                <a href=\"#\" class=\"overlay\">
                                    <span class=\"number\">5</span>
                                    <div class=\"game-meta\">
                                        <h4 class=\"game-title\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["timthetatman"] ?? $this->getContext($context, "timthetatman")), "name", array()), "html", null, true);
        echo "</h4>
                                        <span>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute(($context["timthetatman"] ?? $this->getContext($context, "timthetatman")), "followers", array()), "html", null, true);
        echo "</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <img id=\"image\" src=\"http://ttv-api.s3.amazonaws.com/assets/connect_dark.png\"
                             class=\"twitch-connect\" href=\"#\"/>
                    </div>


                    <div class=\"widget\">
                        <div class=\"title\">Recommended Channels</div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "name", array()), "html", null, true);
        echo "\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "game", array()), "html", null, true);
        echo "</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> ";
        // line 186
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "updated_at", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-eye\"></i> ";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute(($context["nb3"] ?? $this->getContext($context, "nb3")), "followers", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card card-video\">
                            <div class=\"card-img\">
                                <iframe src=\"https://player.twitch.tv/?channel=";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "name", array()), "html", null, true);
        echo "\" frameborder=\"0\"
                                        allowfullscreen=\"true\" scrolling=\"no\" height=\"188.4\" width=\"335\"
                                        autoplay=false></iframe>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\">";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "game", array()), "html", null, true);
        echo "</h3>
                                <ul>
                                    <li><i class=\"fa fa-clock-o\"></i> ";
        // line 200
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "updated_at", array())), "html", null, true);
        echo "</li>
                                    <li><i class=\"fa fa-eye\"></i> ";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute(($context["qt"] ?? $this->getContext($context, "qt")), "followers", array()), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>

    </section>
";
        
        $__internal_08c11d81832918d888439b00790b954fc8a06fe3053d38e1bd4f5f0722bbdc53->leave($__internal_08c11d81832918d888439b00790b954fc8a06fe3053d38e1bd4f5f0722bbdc53_prof);

        
        $__internal_bab9221a371562906920e577b5b34653a43133a0a2520789d23e23bb8f8033cf->leave($__internal_bab9221a371562906920e577b5b34653a43133a0a2520789d23e23bb8f8033cf_prof);

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
        return array (  364 => 213,  349 => 201,  345 => 200,  340 => 198,  332 => 193,  323 => 187,  319 => 186,  314 => 184,  306 => 179,  289 => 165,  285 => 164,  278 => 160,  271 => 156,  267 => 155,  260 => 151,  253 => 147,  249 => 146,  242 => 142,  235 => 138,  231 => 137,  224 => 133,  217 => 129,  213 => 128,  206 => 124,  195 => 115,  183 => 109,  174 => 103,  170 => 102,  166 => 101,  161 => 99,  156 => 97,  150 => 93,  146 => 92,  88 => 37,  84 => 36,  49 => 3,  40 => 2,  11 => 1,);
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
    <script>
        var should = chai.should();
        chai.Assertion.includeStack = true;
        mocha.setup({
            ui: 'bdd',
            globals: ['Twitch'],
            ignoreLeaks: true
        });
    </script>

    <script src=\"{{ asset('js/twitch.js') }}\"></script>
    <script src=\"{{ asset('js/test.integration.api.js') }}\"></script>

    <script>
        window.CLIENT_ID = 'wd54hhxdz79qajdijaofha1zb0dk3g';
        window.REDIRECT_URI = 'https://www.twitch.tv/imaqtpie'
        \$(function () {
            Twitch.init({clientId: CLIENT_ID});

            \$('.twitch-connect').click(function () {
                Twitch.login({
                    redirect_uri: REDIRECT_URI,
                    popup: true,
                    scope: ['user_read', 'channel_read', 'channel_commercial']
                });
                \$('.fragment-entry').removeClass('hidden')
            })

            \$('.fragment-entry button').click(function () {
                document.location.hash = \$('#fragment').val()

                Twitch._initSession();
                mocha.run();
            })
        });
    </script>

    <style type=\"text/css\">
        .hidden {
            display: none;
        }

        .test.pass::before {
            content: '✓';
            font-size: 12px;
            display: block;
            float: left;
            margin-right: 5px;
            color: #00c41c;
        }

        .test.fail::before {
            content: '✖';
            font-size: 12px;
            display: block;
            float: left;
            margin-right: 5px;
            color: #c00;
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
                        <img id=\"image\" src=\"http://ttv-api.s3.amazonaws.com/assets/connect_dark.png\"
                             class=\"twitch-connect\" href=\"#\"/>
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
{% endblock %}", "EloboostedFrontofficeBundle:tevenement:streamingall.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tevenement/streamingall.html.twig");
    }
}
