<?php

/* @EloboostedFrontoffice/tproduit/index.html.twig */
class __TwigTemplate_fd9b3d68788eecb5e710dc5773f3a1393c14eba3743dcaa15ee1ebcf3ced47d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/tproduit/index.html.twig", 1);
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
        $__internal_1c379b0f297f4ecc5159bbd1495a4131b9d1d6f176c24a6b377854a1cd29060e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c379b0f297f4ecc5159bbd1495a4131b9d1d6f176c24a6b377854a1cd29060e->enter($__internal_1c379b0f297f4ecc5159bbd1495a4131b9d1d6f176c24a6b377854a1cd29060e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/index.html.twig"));

        $__internal_541e2bf5c27cbbde11db0ffe90fc0710bfc924db4afd7661c5edf884f16779ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e2bf5c27cbbde11db0ffe90fc0710bfc924db4afd7661c5edf884f16779ef->enter($__internal_541e2bf5c27cbbde11db0ffe90fc0710bfc924db4afd7661c5edf884f16779ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c379b0f297f4ecc5159bbd1495a4131b9d1d6f176c24a6b377854a1cd29060e->leave($__internal_1c379b0f297f4ecc5159bbd1495a4131b9d1d6f176c24a6b377854a1cd29060e_prof);

        
        $__internal_541e2bf5c27cbbde11db0ffe90fc0710bfc924db4afd7661c5edf884f16779ef->leave($__internal_541e2bf5c27cbbde11db0ffe90fc0710bfc924db4afd7661c5edf884f16779ef_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f70c286d075044057f22f44618168d38f1505cf1033f768ed0fd9daba54ec8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70c286d075044057f22f44618168d38f1505cf1033f768ed0fd9daba54ec8d9->enter($__internal_f70c286d075044057f22f44618168d38f1505cf1033f768ed0fd9daba54ec8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a030d1cbffd21c50b5358080a7ce17c26c4352a175279321ad44dd9f5c60112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a030d1cbffd21c50b5358080a7ce17c26c4352a175279321ad44dd9f5c60112a->enter($__internal_a030d1cbffd21c50b5358080a7ce17c26c4352a175279321ad44dd9f5c60112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById(\"txtHint\").innerHTML = \"\";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"productssearch\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_search");
        echo "?p=\" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <section class=\"hero hero-games height-300\" style=\"background-image:url('";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo "')\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></div>
                <p>New battle mechanics, a fantastic storyline, and a gritty setting make The Witcher one of the most engrossing RPGs.</p>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Games</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>
                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\" onkeyup=\"showHint(this.value)\">
                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?a=1\">Date</a></li>
                        <li><a href=\"?a=2\">Score</a></li>
                        <li><a href=\"?a=3\">A-Z</a></li>
                        <li><a href=\"?a=4\">Price</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Status  <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?a=5\">Sell</a></li>
                        <li><a href=\"?a=6\">Exchange</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar-o\"></i> Release Date <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Released</a></li>
                        <li><a href=\"games.html#\">Unreleased</a></li>
                        <li><a href=\"games.html#\">2016</a></li>
                        <li><a href=\"games.html#\">2015</a></li>
                        <li><a href=\"games.html#\">2014</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class=\"bg-grey-50\">
            <div class=\"container\">
                <div class=\"row\" name=\"productssearch\" id=\"productssearch\">
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tproducts"]) ? $context["tproducts"] : $this->getContext($context, "tproducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 76
            echo "                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-img\" style=\"height:257px;width:360px; background-color: white\">
                                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\" height=\"100%\" width=\"100%\" alt=\"\"></a>
                                    <div class=\"category\"><span class=\"label label-success\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idCategorieProd", array()), "html", null, true);
            echo "</span></div>
                                    <div class=\"meta\"><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o\"></i> <span></span></a></div>
                                </div>
                                <div class=\"caption\">
                                    <h3 class=\"card-title\"><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["t"], "idProduit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "libelleProduit", array()), "html", null, true);
            echo "</a></h3>
                                    <ul><li>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["t"], "dateProduit", array())), "html", null, true);
            echo "</li></ul>
                                    <p>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "etat", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </div>
                ";
        // line 93
        if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > 1)) {
            // line 94
            echo "                <ul class=\"pagination margin-top-20\">

                    <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) - 1))), "html", null, true);
            echo "?a=";
            echo twig_escape_filter($this->env, (isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "html", null, true);
            echo "\"><span>&laquo;</span></a></li>
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 98
                echo "                        <li ";
                if (($context["i"] == (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => $context["i"])), "html", null, true);
                echo "?a=";
                echo twig_escape_filter($this->env, (isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "
                    <li><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => ((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) + 1))), "html", null, true);
            echo "?a=";
            echo twig_escape_filter($this->env, (isset($context["tree"]) ? $context["tree"] : $this->getContext($context, "tree")), "html", null, true);
            echo "\"><span>&raquo;</span></a></li>

                </ul>
                ";
        }
        // line 106
        echo "            </div>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
        </section>
    </section>

";
        
        $__internal_a030d1cbffd21c50b5358080a7ce17c26c4352a175279321ad44dd9f5c60112a->leave($__internal_a030d1cbffd21c50b5358080a7ce17c26c4352a175279321ad44dd9f5c60112a_prof);

        
        $__internal_f70c286d075044057f22f44618168d38f1505cf1033f768ed0fd9daba54ec8d9->leave($__internal_f70c286d075044057f22f44618168d38f1505cf1033f768ed0fd9daba54ec8d9_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tproduit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 107,  229 => 106,  220 => 102,  217 => 101,  199 => 98,  195 => 97,  189 => 96,  185 => 94,  183 => 93,  180 => 92,  168 => 86,  164 => 85,  158 => 84,  152 => 81,  148 => 80,  142 => 79,  137 => 76,  133 => 75,  79 => 24,  70 => 18,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <link href=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.css') }}\" rel=\"stylesheet\">
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById(\"txtHint\").innerHTML = \"\";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"productssearch\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"{{ path('tproduit_search') }}?p=\" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <section class=\"hero hero-games height-300\" style=\"background-image:url('{{ asset('img/cover/cover-game.jpg') }}')\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></div>
                <p>New battle mechanics, a fantastic storyline, and a gritty setting make The Witcher one of the most engrossing RPGs.</p>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Games</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>
                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\" onkeyup=\"showHint(this.value)\">
                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?a=1\">Date</a></li>
                        <li><a href=\"?a=2\">Score</a></li>
                        <li><a href=\"?a=3\">A-Z</a></li>
                        <li><a href=\"?a=4\">Price</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Status  <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?a=5\">Sell</a></li>
                        <li><a href=\"?a=6\">Exchange</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar-o\"></i> Release Date <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Released</a></li>
                        <li><a href=\"games.html#\">Unreleased</a></li>
                        <li><a href=\"games.html#\">2016</a></li>
                        <li><a href=\"games.html#\">2015</a></li>
                        <li><a href=\"games.html#\">2014</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class=\"bg-grey-50\">
            <div class=\"container\">
                <div class=\"row\" name=\"productssearch\" id=\"productssearch\">
                    {% for t in tproducts %}
                        <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-img\" style=\"height:257px;width:360px; background-color: white\">
                                    <a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\"><img src=\"{{ path('get_product_img',{ 'id':t.idProduit }) }}\" height=\"100%\" width=\"100%\" alt=\"\"></a>
                                    <div class=\"category\"><span class=\"label label-success\">{{ t.idCategorieProd }}</span></div>
                                    <div class=\"meta\"><a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\"><i class=\"fa fa-heart-o\"></i> <span></span></a></div>
                                </div>
                                <div class=\"caption\">
                                    <h3 class=\"card-title\"><a href=\"{{ path('tproduit_show', { 'id': t.idProduit }) }}\">{{ t.libelleProduit }}</a></h3>
                                    <ul><li>{{ t.dateProduit | date }}</li></ul>
                                    <p>{{ t.etat }}</p>
                                </div>
                            </div>
                        </div>

                    {% endfor %}
                </div>
                {% if pages > 1 %}
                <ul class=\"pagination margin-top-20\">

                    <li><a href=\"{{ path('tproduit_index',{ 'page':p-1 }) }}?a={{ tree }}\"><span>&laquo;</span></a></li>
                    {% for i in 1..pages %}
                        <li {% if i==p %} class=\"active\"{% endif %}><a href=\"{{ path('tproduit_index',{ 'page':i }) }}?a={{ tree }}\">{{ i }}</a></li>

                    {% endfor %}

                    <li><a href=\"{{ path('tproduit_index',{ 'page':p+1 }) }}?a={{ tree }}\"><span>&raquo;</span></a></li>

                </ul>
                {% endif %}
            </div>
            <script src=\"{{ asset('js/core.min.js') }}\"></script>
        </section>
    </section>

{% endblock %}", "@EloboostedFrontoffice/tproduit/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tproduit\\index.html.twig");
    }
}
