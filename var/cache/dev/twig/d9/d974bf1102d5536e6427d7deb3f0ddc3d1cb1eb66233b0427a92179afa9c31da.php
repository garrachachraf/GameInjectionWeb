<?php

/* EloboostedFrontofficeBundle:tproduit:index.html.twig */
class __TwigTemplate_361c128c8dd8f75a033da056e1790ad86046c2264ba68e71f34b7f81f138479f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tproduit:index.html.twig", 1);
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
        $__internal_8be375a8989791779a064f4f0c6686ea2250eaeaf2923d2611f037e0e3f60b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be375a8989791779a064f4f0c6686ea2250eaeaf2923d2611f037e0e3f60b40->enter($__internal_8be375a8989791779a064f4f0c6686ea2250eaeaf2923d2611f037e0e3f60b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:index.html.twig"));

        $__internal_67485103535ffb93f1be3121ee93bb6c0ad0fdbf1c453a06aa366462f8985707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67485103535ffb93f1be3121ee93bb6c0ad0fdbf1c453a06aa366462f8985707->enter($__internal_67485103535ffb93f1be3121ee93bb6c0ad0fdbf1c453a06aa366462f8985707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be375a8989791779a064f4f0c6686ea2250eaeaf2923d2611f037e0e3f60b40->leave($__internal_8be375a8989791779a064f4f0c6686ea2250eaeaf2923d2611f037e0e3f60b40_prof);

        
        $__internal_67485103535ffb93f1be3121ee93bb6c0ad0fdbf1c453a06aa366462f8985707->leave($__internal_67485103535ffb93f1be3121ee93bb6c0ad0fdbf1c453a06aa366462f8985707_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_29f6d71e50b42a5744fdde88e073ae90ae6f50db4f6f5a348cbc01d204d918ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f6d71e50b42a5744fdde88e073ae90ae6f50db4f6f5a348cbc01d204d918ae->enter($__internal_29f6d71e50b42a5744fdde88e073ae90ae6f50db4f6f5a348cbc01d204d918ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8649853324e8f836dba3ec461a26e2a1dad37baa26a58553b816827f28a936cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8649853324e8f836dba3ec461a26e2a1dad37baa26a58553b816827f28a936cc->enter($__internal_8649853324e8f836dba3ec461a26e2a1dad37baa26a58553b816827f28a936cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
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
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_search");
        echo "?p=\" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <section class=\"hero hero-games height-300\" style=\"background-image:url('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo "')\">
        <div class=\"hero-bg\"></div>

        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index", array("page" => 1));
        echo "\">Gaming Injection Shop</a></div>
                <p>Feel Free To sell or Exchange  Gaming Stuff but Remember no nudity,no Racism and do not harm the others</p>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Store</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Shop</h4>
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
        
        $__internal_8649853324e8f836dba3ec461a26e2a1dad37baa26a58553b816827f28a936cc->leave($__internal_8649853324e8f836dba3ec461a26e2a1dad37baa26a58553b816827f28a936cc_prof);

        
        $__internal_29f6d71e50b42a5744fdde88e073ae90ae6f50db4f6f5a348cbc01d204d918ae->leave($__internal_29f6d71e50b42a5744fdde88e073ae90ae6f50db4f6f5a348cbc01d204d918ae_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 107,  233 => 106,  224 => 102,  221 => 101,  203 => 98,  199 => 97,  193 => 96,  189 => 94,  187 => 93,  184 => 92,  172 => 86,  168 => 85,  162 => 84,  156 => 81,  152 => 80,  146 => 79,  141 => 76,  137 => 75,  89 => 30,  81 => 25,  72 => 19,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                <div class=\"page-title bold\"><a href=\"{{ path('tproduit_index', {'page': 1}) }}\">Gaming Injection Shop</a></div>
                <p>Feel Free To sell or Exchange  Gaming Stuff but Remember no nudity,no Racism and do not harm the others</p>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Store</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Shop</h4>
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

{% endblock %}", "EloboostedFrontofficeBundle:tproduit:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tproduit/index.html.twig");
    }
}
