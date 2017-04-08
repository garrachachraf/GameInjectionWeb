<?php

/* @EloboostedFrontoffice/tproduit/show.html.twig */
class __TwigTemplate_c51b63c1034a24babf717ec0d231be053a3e06936bda04f2487abdf77cc94656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EloboostedFrontoffice/Default/Layout.html.twig", "@EloboostedFrontoffice/tproduit/show.html.twig", 1);
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
        $__internal_bcd0055c7f1c8af278a3d1ca1a3c343bcb71f44db0c14a398b68bd5eb30f016e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd0055c7f1c8af278a3d1ca1a3c343bcb71f44db0c14a398b68bd5eb30f016e->enter($__internal_bcd0055c7f1c8af278a3d1ca1a3c343bcb71f44db0c14a398b68bd5eb30f016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/show.html.twig"));

        $__internal_6c8427789d52416abf2dd6447b9b6a846d765a0872c7f11cd1ff00bb0f5589ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8427789d52416abf2dd6447b9b6a846d765a0872c7f11cd1ff00bb0f5589ff->enter($__internal_6c8427789d52416abf2dd6447b9b6a846d765a0872c7f11cd1ff00bb0f5589ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tproduit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcd0055c7f1c8af278a3d1ca1a3c343bcb71f44db0c14a398b68bd5eb30f016e->leave($__internal_bcd0055c7f1c8af278a3d1ca1a3c343bcb71f44db0c14a398b68bd5eb30f016e_prof);

        
        $__internal_6c8427789d52416abf2dd6447b9b6a846d765a0872c7f11cd1ff00bb0f5589ff->leave($__internal_6c8427789d52416abf2dd6447b9b6a846d765a0872c7f11cd1ff00bb0f5589ff_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_004d2ac5bda35d248c293059f6267289158eb75229647194ef42ab0163be6cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004d2ac5bda35d248c293059f6267289158eb75229647194ef42ab0163be6cb9->enter($__internal_004d2ac5bda35d248c293059f6267289158eb75229647194ef42ab0163be6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e6d8cff10fe6fa6ae1199c9b06035418c294b1e4c6f4b09ae952c4e3fa11ce18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d8cff10fe6fa6ae1199c9b06035418c294b1e4c6f4b09ae952c4e3fa11ce18->enter($__internal_e6d8cff10fe6fa6ae1199c9b06035418c294b1e4c6f4b09ae952c4e3fa11ce18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_index");
        echo "\">Products</a></li>
                    <li class=\"active\">Show Product</li>
                </ol>
            </div>
        </div>
    </section>
    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-8 leftside\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">

                            <div class=\"post post-single\">
                                <div class=\"post-header\">
                                    <div class=\"post-title\">
                                        <h2><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "libelleProduit", array()), "html", null, true);
        echo "</a></h2>
                                        <ul class=\"post-meta\">
                                            <li><a href=\"\"><i class=\"fa fa-user\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idCompteProd", array()), "html", null, true);
        echo "</a></li>
                                            <li><i class=\"fa fa-calendar-o\"></i>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "dateProduit", array())), "html", null, true);
        echo "</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id=\"post-carousel\" class=\"carousel slide post-thumbnail\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#post-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#post-carousel\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#post-carousel\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nb" => 1)), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"post-caption\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "prixProduit", array()), "html", null, true);
        echo "\$</div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nb" => 2)), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"post-caption\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "prixProduit", array()), "html", null, true);
        echo "\$</div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nb" => 3)), "html", null, true);
        echo "\" alt=\"\">
                                            <div class=\"post-caption\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "prixProduit", array()), "html", null, true);
        echo "\$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row margin-top-40\">

                                </div>
                                <table border=\"0\" width=\"100%\">
                                    <tr>
                                        <td class=\"padding-10\">Categorie: </td>
                                        <td><span class=\"label label-warning\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idCategorieProd", array()), "html", null, true);
        echo "</span>
                                    </tr><tr>
                                        <td class=\"padding-10\">Mark: </td>
                                        <td><span class=\"label label-warning\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "marqueProduit", array()), "html", null, true);
        echo "</span>
                                    </tr>

                                </table>
                                <p class=\"padding-10\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "descriptionProduit", array()), "html", null, true);
        echo " </p>
                            </div>

                            <div class=\"comments\">
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            ";
        // line 76
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idCompteProd", array()))) {
            // line 77
            echo "                            <ul class=\"post-action \">
                                <li>";
            // line 78
            if (((isset($context["voted"]) ? $context["voted"] : $this->getContext($context, "voted")) == 0)) {
                // line 79
                echo "                                        ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
                                        ";
                // line 80
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreVote", array()), 'widget');
                echo "
                                        <script>
                                            \$(document).ready(function () {
                                                \$('#rating_star_1').click(function () {
                                                    window.location.replace('";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_prod", array("idprod" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nbrevote" => "1")), "html", null, true);
                echo "');
                                                });
                                                \$('#rating_star_2').click(function () {
                                                    window.location.replace('";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_prod", array("idprod" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nbrevote" => "2")), "html", null, true);
                echo "');
                                                });
                                                \$('#rating_star_3').click(function () {
                                                    window.location.replace('";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_prod", array("idprod" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nbrevote" => "3")), "html", null, true);
                echo "');

                                                });
                                                \$('#rating_star_4').click(function () {
                                                    window.location.replace('";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_prod", array("idprod" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nbrevote" => "4")), "html", null, true);
                echo "');
                                                });
                                                \$('#rating_star_5').click(function () {
                                                    window.location.replace('";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vote_prod", array("idprod" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()), "nbrevote" => "5")), "html", null, true);
                echo "');
                                                });

                                            });

                                        </script>
                                        ";
                // line 103
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
                                    ";
            }
            // line 104
            echo "</li>
                                <li> </li>
                                <li><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_edit", array("id" => $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idProduit", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-warning padding-left-15\" >EDIT</button>
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 111
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("class" => "inline")));
            echo "
                                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                                    ";
            // line 113
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
                                </li>
                            </ul>
                            ";
        }
        // line 117
        echo "                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-game\" >
                        <div class=\"overlay\">
                            <div class=\"title\">";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "libelleProduit", array()), "html", null, true);
        echo "</div>

                            <div class=\"chart-align\">
                                <span class=\"chart\" data-percent=\"";
        // line 128
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "scoreproduit", array()) * 20), "html", null, true);
        echo "\"><span class=\"percent\"></span></span>
                            </div>

                            <p class=\"progress-label\">Rating <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "scoreproduit", array()), "html", null, true);
        echo "</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-success\" aria-valuenow=\"";
        // line 133
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "scoreproduit", array()) * 20), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Total Of votes <span>";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), "html", null, true);
        echo "</span></p>
                            <div class=\"progress progress-animation progress-xs no-margin-bottom\">
                                <div class=\"progress-bar progress-bar-warning\" aria-valuenow=\"";
        // line 138
        echo twig_escape_filter($this->env, ((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) * 10), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <div class=\"bold text-uppercase margin-top-40\">Posted By</div>
                            <span class=\"font-size-13\">";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tProduit"]) ? $context["tProduit"] : $this->getContext($context, "tProduit")), "idCompteProd", array()), "html", null, true);
        echo "</span>


                            <div class=\"description\">
                                GameInjection dosen't garantee Any kind of fraud .
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Products</div>
                        <ul>
                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasts"]) ? $context["lasts"] : $this->getContext($context, "lasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 155
            echo "                                <li>
                                    <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["l"], "idProduit", array()))), "html", null, true);
            echo "\" class=\"thumb\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_product_img", array("id" => $this->getAttribute($context["l"], "idProduit", array()), "nb" => 1)), "html", null, true);
            echo "\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tproduit_show", array("id" => $this->getAttribute($context["l"], "idProduit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "libelleProduit", array()), "html", null, true);
            echo "</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> ";
            // line 159
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["l"], "dateProduit", array())), "html", null, true);
            echo "</p>
                                    </div>
                                </li>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
    <script>
        (function(\$) {
            \"use strict\";
            var owl = \$(\".owl-carousel\");

            owl.owlCarousel({
                autoPlay: 3000,
                items : 1, //4 items above 1000px browser width
                itemsDesktop : [1000,3], //3 items between 1000px and 0
                itemsTablet: [600,1], //1 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });

            \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
                event.preventDefault();
                \$(this).ekkoLightbox();
            });

            \$(window).scroll(function(){
                if (\$(this).scrollTop() > 400) {
                    \$('body').addClass('fixed-tab');
                } else {
                    \$('body').removeClass('fixed-tab');
                }
            });

            \$('.chart').easyPieChart({
                easing: 'easeOutBounce',
                barColor: '#5eb404',
                trackColor: '#e3e3e3',
                onStep: function(from, to, percent) {
                    \$(this.el).find('.percent').text(Math.round(percent));
                }
            });

            setTimeout(function(){
                \$('.progress-animation .progress-bar').each(function() {
                    var me = \$(this);
                    var perc = me.attr(\"aria-valuenow\");
                    var current_perc = 0;
                    var progress = setInterval(function() {
                        if (current_perc>=perc) {
                            clearInterval(progress);
                        } else {
                            current_perc +=1;
                            me.css('width', (current_perc)+'%');
                        }
                    }, 0);
                });
            },0);
        })(jQuery);

    </script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
    <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modal.js\"></script>
    <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal.css\" rel=\"stylesheet\">
    <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css\" rel=\"stylesheet\">
";
        
        $__internal_e6d8cff10fe6fa6ae1199c9b06035418c294b1e4c6f4b09ae952c4e3fa11ce18->leave($__internal_e6d8cff10fe6fa6ae1199c9b06035418c294b1e4c6f4b09ae952c4e3fa11ce18_prof);

        
        $__internal_004d2ac5bda35d248c293059f6267289158eb75229647194ef42ab0163be6cb9->leave($__internal_004d2ac5bda35d248c293059f6267289158eb75229647194ef42ab0163be6cb9_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tproduit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 178,  372 => 177,  368 => 176,  364 => 175,  360 => 174,  356 => 173,  352 => 172,  342 => 164,  331 => 159,  325 => 158,  318 => 156,  315 => 155,  311 => 154,  296 => 142,  289 => 138,  284 => 136,  278 => 133,  273 => 131,  267 => 128,  261 => 125,  251 => 117,  244 => 113,  239 => 111,  231 => 106,  227 => 104,  222 => 103,  213 => 97,  207 => 94,  200 => 90,  194 => 87,  188 => 84,  181 => 80,  176 => 79,  174 => 78,  171 => 77,  169 => 76,  159 => 69,  152 => 65,  146 => 62,  133 => 52,  129 => 51,  123 => 48,  119 => 47,  113 => 44,  109 => 43,  94 => 31,  90 => 30,  83 => 28,  64 => 12,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                    <li><a href=\"{{ path('tproduit_index') }}\">Products</a></li>
                    <li class=\"active\">Show Product</li>
                </ol>
            </div>
        </div>
    </section>
    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-8 leftside\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">

                            <div class=\"post post-single\">
                                <div class=\"post-header\">
                                    <div class=\"post-title\">
                                        <h2><a href=\"{{ path('tproduit_show', { 'id': tProduit.idProduit }) }}\">{{ tProduit.libelleProduit }}</a></h2>
                                        <ul class=\"post-meta\">
                                            <li><a href=\"\"><i class=\"fa fa-user\"></i> {{ tProduit.idCompteProd }}</a></li>
                                            <li><i class=\"fa fa-calendar-o\"></i>{{ tProduit.dateProduit|date }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id=\"post-carousel\" class=\"carousel slide post-thumbnail\" data-ride=\"carousel\">
                                    <ol class=\"carousel-indicators\">
                                        <li data-target=\"#post-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                        <li data-target=\"#post-carousel\" data-slide-to=\"1\"></li>
                                        <li data-target=\"#post-carousel\" data-slide-to=\"2\"></li>
                                    </ol>
                                    <div class=\"carousel-inner\">
                                        <div class=\"item active\">
                                            <img src=\"{{ path('get_product_img',{ 'id':tProduit.idProduit,'nb':1 }) }}\" alt=\"\">
                                            <div class=\"post-caption\">{{ tProduit.prixProduit }}\$</div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"{{ path('get_product_img',{ 'id':tProduit.idProduit,'nb':2 }) }}\" alt=\"\">
                                            <div class=\"post-caption\">{{ tProduit.prixProduit }}\$</div>
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"{{ path('get_product_img',{ 'id':tProduit.idProduit,'nb':3 }) }}\" alt=\"\">
                                            <div class=\"post-caption\">{{ tProduit.prixProduit }}\$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row margin-top-40\">

                                </div>
                                <table border=\"0\" width=\"100%\">
                                    <tr>
                                        <td class=\"padding-10\">Categorie: </td>
                                        <td><span class=\"label label-warning\">{{ tProduit.idCategorieProd }}</span>
                                    </tr><tr>
                                        <td class=\"padding-10\">Mark: </td>
                                        <td><span class=\"label label-warning\">{{ tProduit.marqueProduit }}</span>
                                    </tr>

                                </table>
                                <p class=\"padding-10\">{{ tProduit.descriptionProduit }} </p>
                            </div>

                            <div class=\"comments\">
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            {% if app.user == tProduit.idCompteProd %}
                            <ul class=\"post-action \">
                                <li>{% if voted == 0 %}
                                        {{ form_start(form) }}
                                        {{ form_widget(form.nombreVote) }}
                                        <script>
                                            \$(document).ready(function () {
                                                \$('#rating_star_1').click(function () {
                                                    window.location.replace('{{ path('vote_prod',{'idprod':tProduit.idProduit , 'nbrevote':'1'}) }}');
                                                });
                                                \$('#rating_star_2').click(function () {
                                                    window.location.replace('{{ path('vote_prod',{'idprod':tProduit.idProduit , 'nbrevote':'2'}) }}');
                                                });
                                                \$('#rating_star_3').click(function () {
                                                    window.location.replace('{{ path('vote_prod',{'idprod':tProduit.idProduit , 'nbrevote':'3'})}}');

                                                });
                                                \$('#rating_star_4').click(function () {
                                                    window.location.replace('{{ path('vote_prod',{'idprod':tProduit.idProduit , 'nbrevote':'4'})}}');
                                                });
                                                \$('#rating_star_5').click(function () {
                                                    window.location.replace('{{ path('vote_prod',{'idprod':tProduit.idProduit , 'nbrevote':'5'})}}');
                                                });

                                            });

                                        </script>
                                        {{ form_end(form) }}
                                    {% endif %}</li>
                                <li> </li>
                                <li><a href=\"{{ path('tproduit_edit', { 'id': tProduit.idProduit }) }}\">
                                        <button class=\"btn btn-warning padding-left-15\" >EDIT</button>
                                    </a>
                                </li>
                                <li>
                                    {{ form_start(delete_form,{'attr':{'class':\"inline\"}}) }}
                                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                                    {{ form_end(delete_form) }}
                                </li>
                            </ul>
                            {% endif %}
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-game\" >
                        <div class=\"overlay\">
                            <div class=\"title\">{{ tProduit.libelleProduit }}</div>

                            <div class=\"chart-align\">
                                <span class=\"chart\" data-percent=\"{{ tProduit.scoreproduit * 20 }}\"><span class=\"percent\"></span></span>
                            </div>

                            <p class=\"progress-label\">Rating <span>{{ tProduit.scoreproduit }}</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-success\" aria-valuenow=\"{{ tProduit.scoreproduit * 20 }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Total Of votes <span>{{ score }}</span></p>
                            <div class=\"progress progress-animation progress-xs no-margin-bottom\">
                                <div class=\"progress-bar progress-bar-warning\" aria-valuenow=\"{{ score * 10 }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <div class=\"bold text-uppercase margin-top-40\">Posted By</div>
                            <span class=\"font-size-13\">{{ tProduit.idCompteProd }}</span>


                            <div class=\"description\">
                                GameInjection dosen't garantee Any kind of fraud .
                            </div>
                        </div>
                    </div>

                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Products</div>
                        <ul>
                            {% for l in lasts %}
                                <li>
                                    <a href=\"{{ path('tproduit_show', { 'id': l.idProduit }) }}\" class=\"thumb\"><img src=\"{{ path('get_product_img',{ 'id':l.idProduit,'nb':1 }) }}\" alt=\"\"></a>
                                    <div class=\"widget-list-meta\">
                                        <h4 class=\"widget-list-title\"><a href=\"{{ path('tproduit_show', { 'id': l.idProduit }) }}\">{{ l.libelleProduit }}</a></h4>
                                        <p><i class=\"fa fa-clock-o\"></i> {{ l.dateProduit|date }}</p>
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
    <script>
        (function(\$) {
            \"use strict\";
            var owl = \$(\".owl-carousel\");

            owl.owlCarousel({
                autoPlay: 3000,
                items : 1, //4 items above 1000px browser width
                itemsDesktop : [1000,3], //3 items between 1000px and 0
                itemsTablet: [600,1], //1 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });

            \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
                event.preventDefault();
                \$(this).ekkoLightbox();
            });

            \$(window).scroll(function(){
                if (\$(this).scrollTop() > 400) {
                    \$('body').addClass('fixed-tab');
                } else {
                    \$('body').removeClass('fixed-tab');
                }
            });

            \$('.chart').easyPieChart({
                easing: 'easeOutBounce',
                barColor: '#5eb404',
                trackColor: '#e3e3e3',
                onStep: function(from, to, percent) {
                    \$(this.el).find('.percent').text(Math.round(percent));
                }
            });

            setTimeout(function(){
                \$('.progress-animation .progress-bar').each(function() {
                    var me = \$(this);
                    var perc = me.attr(\"aria-valuenow\");
                    var current_perc = 0;
                    var progress = setInterval(function() {
                        if (current_perc>=perc) {
                            clearInterval(progress);
                        } else {
                            current_perc +=1;
                            me.css('width', (current_perc)+'%');
                        }
                    }, 0);
                });
            },0);
        })(jQuery);

    </script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modalmanager.js\"></script>
    <script src=\"http://jschr.github.io/bootstrap-modal/js/bootstrap-modal.js\"></script>
    <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal.css\" rel=\"stylesheet\">
    <link href=\"http://jschr.github.io/bootstrap-modal/css/bootstrap-modal-bs3patch.css\" rel=\"stylesheet\">
{% endblock %}

", "@EloboostedFrontoffice/tproduit/show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tproduit\\show.html.twig");
    }
}
