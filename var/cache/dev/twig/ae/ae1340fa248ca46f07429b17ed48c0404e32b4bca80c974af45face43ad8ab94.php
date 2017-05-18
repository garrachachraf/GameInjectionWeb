<?php

/* EloboostedFrontofficeBundle:games:index.html.twig */
class __TwigTemplate_41e77083a70d9d065383b1834888dd6b32836489e83b57937621b0feddcfb2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:games:index.html.twig", 1);
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
        $__internal_a0d92d5ce56a72b5e840411af1fd444289c76318c325fe4c2b5e465d5c8c5844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d92d5ce56a72b5e840411af1fd444289c76318c325fe4c2b5e465d5c8c5844->enter($__internal_a0d92d5ce56a72b5e840411af1fd444289c76318c325fe4c2b5e465d5c8c5844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:index.html.twig"));

        $__internal_5b724d04a2a83df1e8a2a2b42eddeeaf84647ebf6dc6207079926f72d4e23c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b724d04a2a83df1e8a2a2b42eddeeaf84647ebf6dc6207079926f72d4e23c90->enter($__internal_5b724d04a2a83df1e8a2a2b42eddeeaf84647ebf6dc6207079926f72d4e23c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d92d5ce56a72b5e840411af1fd444289c76318c325fe4c2b5e465d5c8c5844->leave($__internal_a0d92d5ce56a72b5e840411af1fd444289c76318c325fe4c2b5e465d5c8c5844_prof);

        
        $__internal_5b724d04a2a83df1e8a2a2b42eddeeaf84647ebf6dc6207079926f72d4e23c90->leave($__internal_5b724d04a2a83df1e8a2a2b42eddeeaf84647ebf6dc6207079926f72d4e23c90_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_099b9c4a7f00acae8c79d5e5dbe4ef4cc7bf47b7f8ba746314b4851fca3c21cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099b9c4a7f00acae8c79d5e5dbe4ef4cc7bf47b7f8ba746314b4851fca3c21cf->enter($__internal_099b9c4a7f00acae8c79d5e5dbe4ef4cc7bf47b7f8ba746314b4851fca3c21cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c207d488ecd102af5a37f68afa7010b08df640ad69041a5875e74c08246ade08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c207d488ecd102af5a37f68afa7010b08df640ad69041a5875e74c08246ade08->enter($__internal_c207d488ecd102af5a37f68afa7010b08df640ad69041a5875e74c08246ade08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById(\"txtHint\").innerHTML = \"\";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"gameee\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchGames");
        echo "?w=\" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li class=\"active\">Game List</li>
                    </ol>
                </div>
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
                        <li><a href=\"?sort=Cathegorie\">Cathegorie</a></li>
                        <li><a href=\"?sort=Name\">Name</a></li>

                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?Platform=Playstation\">Playstation </a></li>
                        <li><a href=\"?Platform=Steam\">Steam</a></li>
                        <li><a href=\"?Platform=Xbox\">Xbox </a></li>
                        <li><a href=\"?Platform=PC\">PC</a></li>
                    </ul>
                </div>



            </div>
        </div>
    </section>
<section class=\"bg-grey-50\">
    <div class=\"container\">
        <div class=\"row\" id=\"gameee\" name=\"gameee\">

            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 86
            echo "
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"card\">
                    <div class=\"card-img\">

                        <a href= \"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\" >
                            <img src=\"data:image/png;base64,";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "imageGames", array()), "html", null, true);
            echo "\" style=\"height: 365px\" alt=\"\"></a>

                        <div class=\"category\"><span class=\"label label-success\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "supported", array()), "html", null, true);
            echo "</span></div>
                        <div class=\"meta\"><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                    </div>
                    <div class=\"caption\">
                        <h3 class=\"card-title\"><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "nomGames", array()), "html", null, true);
            echo "</a></h3>
                        <ul><li>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "idCathegorieg", array()), "nom", array()), "html", null, true);
            echo "</li></ul>
                        <p>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </div>



    </div>

</section>
    </div>

    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>





    ";
        
        $__internal_c207d488ecd102af5a37f68afa7010b08df640ad69041a5875e74c08246ade08->leave($__internal_c207d488ecd102af5a37f68afa7010b08df640ad69041a5875e74c08246ade08_prof);

        
        $__internal_099b9c4a7f00acae8c79d5e5dbe4ef4cc7bf47b7f8ba746314b4851fca3c21cf->leave($__internal_099b9c4a7f00acae8c79d5e5dbe4ef4cc7bf47b7f8ba746314b4851fca3c21cf_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 116,  201 => 114,  190 => 105,  179 => 100,  175 => 99,  169 => 98,  163 => 95,  159 => 94,  154 => 92,  150 => 91,  143 => 86,  139 => 85,  74 => 23,  64 => 16,  49 => 3,  40 => 2,  11 => 1,);
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

    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById(\"txtHint\").innerHTML = \"\";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"gameee\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"{{ path('searchGames') }}?w=\" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li class=\"active\">Game List</li>
                    </ol>
                </div>
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
                        <li><a href=\"?sort=Cathegorie\">Cathegorie</a></li>
                        <li><a href=\"?sort=Name\">Name</a></li>

                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?Platform=Playstation\">Playstation </a></li>
                        <li><a href=\"?Platform=Steam\">Steam</a></li>
                        <li><a href=\"?Platform=Xbox\">Xbox </a></li>
                        <li><a href=\"?Platform=PC\">PC</a></li>
                    </ul>
                </div>



            </div>
        </div>
    </section>
<section class=\"bg-grey-50\">
    <div class=\"container\">
        <div class=\"row\" id=\"gameee\" name=\"gameee\">

            {% for game in games %}

            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"card\">
                    <div class=\"card-img\">

                        <a href= \"{{ path('yes_show',{ 'id':game.idGames  }) }}\" >
                            <img src=\"data:image/png;base64,{{ game.imageGames  }}\" style=\"height: 365px\" alt=\"\"></a>

                        <div class=\"category\"><span class=\"label label-success\">{{ game.supported }}</span></div>
                        <div class=\"meta\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                    </div>
                    <div class=\"caption\">
                        <h3 class=\"card-title\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\">{{ game.nomGames }}</a></h3>
                        <ul><li>{{ game.idCathegorieg.nom }}</li></ul>
                        <p>{{ game.description }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>



    </div>

</section>
    </div>

    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>





    {% endblock %}
", "EloboostedFrontofficeBundle:games:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/games/index.html.twig");
    }
}
