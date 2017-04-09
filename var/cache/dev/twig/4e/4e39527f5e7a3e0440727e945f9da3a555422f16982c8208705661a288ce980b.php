<?php

/* EloboostedFrontofficeBundle:tournoi:show.html.twig */
class __TwigTemplate_9e0272af631fd7da072ca5741634e307ce0ba52b6f41316d92a222fcd4145b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:show.html.twig", 1);
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
        $__internal_520424362a6213bcb0ff23a7a4186808ae9f690d68e6ff1699484a2f66962a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520424362a6213bcb0ff23a7a4186808ae9f690d68e6ff1699484a2f66962a60->enter($__internal_520424362a6213bcb0ff23a7a4186808ae9f690d68e6ff1699484a2f66962a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:show.html.twig"));

        $__internal_1c3b4bd164649ca16b9f5e4285112a27cc1030d4fb63c585616f0cd07bbab223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b4bd164649ca16b9f5e4285112a27cc1030d4fb63c585616f0cd07bbab223->enter($__internal_1c3b4bd164649ca16b9f5e4285112a27cc1030d4fb63c585616f0cd07bbab223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_520424362a6213bcb0ff23a7a4186808ae9f690d68e6ff1699484a2f66962a60->leave($__internal_520424362a6213bcb0ff23a7a4186808ae9f690d68e6ff1699484a2f66962a60_prof);

        
        $__internal_1c3b4bd164649ca16b9f5e4285112a27cc1030d4fb63c585616f0cd07bbab223->leave($__internal_1c3b4bd164649ca16b9f5e4285112a27cc1030d4fb63c585616f0cd07bbab223_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e8fd1ee7815e5beea8780604f014cfdffdcc2e996efe393f6d3ab7a3c9d63510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8fd1ee7815e5beea8780604f014cfdffdcc2e996efe393f6d3ab7a3c9d63510->enter($__internal_e8fd1ee7815e5beea8780604f014cfdffdcc2e996efe393f6d3ab7a3c9d63510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b34c3e3524a7e44238cd357c39c880e34dbf1835f23fe7e62471f4dd669f477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34c3e3524a7e44238cd357c39c880e34dbf1835f23fe7e62471f4dd669f477a->enter($__internal_b34c3e3524a7e44238cd357c39c880e34dbf1835f23fe7e62471f4dd669f477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<input type=\"hidden\" id=\"tournoi\" name=\"tournoi\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()), "html", null, true);
        echo "\">
<!-- wrapper -->
<div id=\"wrapper\">
    <section class=\"hero height-350 hero-game\" style=\"background-image: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-profile.jpg"), "html", null, true);
        echo ");\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array()), "html", null, true);
        echo "</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\" class=\"no-padding-left\">Home</a></li>
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Tournaments</a></li>
                    <li class=\"active\">Details</li>
                </ol>
                <a href=\"#\" class=\"btn btn-success margin-top-30 text-initial\" data-toggle=\"lightbox\" data-width=\"1280\">Participate</a>
            </div>
        </div>
    </section>


    <section class=\"bg-white no-padding hidden-xs border-bottom-1 border-grey-300\" style=\"height: 54px\">
        <div class=\"tab-select sticky text-center\">
            <div class=\"container\">
                <ul class=\"nav nav-tabs\">
                    <li><a href=\"#\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-star\"></i> Review</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_edit", array("id" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil\"></i> Edit</a></li>
                    <li><a href=\"#comments\"><i class=\"fa fa-comments\"></i> Comments</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-video-camera\"></i> Videos</a></li>
                    <li><a href=\"#\"><i class=\"glyphicon glyphicon-floppy-remove\"></i>Delete  ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                             <input name=\"del\" id=\"del\" type=\"submit\" class=\"hidden\" value=\"Delete\">
                            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-8 leftside\">
                    <div class=\"post post-single\">
                        <div class=\"post-header\">
                            <div class=\"post-title\">
                                <h2>

                                        <img src=\"data:image/png;base64,";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "imageTournoi", array()), "html", null, true);
        echo "\" alt=\"\" width=\"48px\" height=\"48px\"/>

                                    <a href=\"#\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array()), "html", null, true);
        echo "</a></h2>
                                <ul class=\"post-meta\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idCompteTrn", array()), "nom", array()), "html", null, true);
        echo "</a></li>
                                    <li><i class=\"fa fa-calendar-o\"></i>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "startDate", array())), "html", null, true);
        echo "</li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i> 0 <span class=\"hidden-xs\">Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\">Prize Pool</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    ";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward1", array()) + $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward3", array())) + $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward2", array())), "html", null, true);
        echo " Points
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Participation</a></div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\">Participants</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    6 / ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array()), "html", null, true);
        echo " <i class=\"fa fa-users\"></i>
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Participation</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading \">
                                    <h3 class=\"panel-title text-center\">Participation Fee</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "prixParJoueur", array()), "html", null, true);
        echo "
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Fees</a></div>

                                </div>
                            </div>
                        </div>
                        </div>

                            <div class=\"panel panel-inverse margin-top-20\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\"><i class=\"fa fa-list-ol\"></i> How it works?</h3>
                                </div>
                                <div class=\"panel-body\">
                                    <p>1. Join the tournament.</p>
                                    <p>2. The tournament starts when the participant slots are full. You will get a notification.</p>
                                    <p>3. Play as many ranked games <span class=\"text-danger\">(solo/duo ranked only!)</span> as you like.</p>
                                    <p>4. Your best 3 games during the tournament duration will be used for calculating your score.</p>
                                    <p>5. After the tournament ends, the winners will be determined by the best scores.
                                    </p><p>6. If you are one of the winners, you'll get rewarded.
                                    </p><p>7. Have fun.</p>
                                </div>
                            </div>
                        <div class=\"panel panel-inverse margin-top-20\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title text-center\"><i class=\"fa fa-list-ol\"></i> Prizes</h3>
                            </div>
                            <div class=\"panel-body\">
                                <table class=\"table table-striped\">
                                    <thead>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style=\"text-align: center;\">1st place</td>
                                        <td style=\"text-align: center;\">";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward1", array()), "html", null, true);
        echo " Points</td>

                                    </tr>
                                    <tr>
                                        <td style=\"text-align: center;\">2nd Place </td>
                                        <td  style=\"text-align: center;\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward2", array()), "html", null, true);
        echo " Points</td>

                                    </tr>
                                    <tr>
                                        <td style=\"text-align: center;\">3rd Place</td>
                                        <td  style=\"text-align: center;\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "reward3", array()), "html", null, true);
        echo " Points</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class=\"row margin-top-40\">
                            <div class=\"col-md-8\">
                                <div class=\"tags\">
                                    <a href=\"#\">";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idCompteTrn", array()), "pseudo", array()), "html", null, true);
        echo "</a>
                                    <a href=\"#\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idGameTrn", array()), "Name", array()), "html", null, true);
        echo "</a>
                                    <a href=\"#\">";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "startDate", array()), "20y"), "html", null, true);
        echo "</a>

                                </div>
                            </div>
                            <div class=\"col-md-4 hidden-xs hidden-sm\">
                                <ul class=\"share\">
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-facebook\" data-toggle=\"tooltip\" title=\"Share on facebook\"><i class=\"fa fa-facebook\"></i></a><span>312</span></li>
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-twitter\" data-toggle=\"tooltip\" title=\"Share on twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-google-plus\" data-toggle=\"tooltip\" title=\"Share on google\"><i class=\"fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"comments\" name=\"comments\" id=\"comments\">
                        <h4 class=\"page-header\"><i class=\"fa fa-comment-o\"></i> Comments (";
        // line 165
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))), "html", null, true);
        echo ")</h4>

                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["cmt"]) {
            // line 168
            echo "                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\">

                                <img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("get_user_img", array("id" => $this->getAttribute($this->getAttribute($context["cmt"], "idCompteCt", array()), "IdCompte", array()))), "html", null, true);
            echo "\" alt=\"\" />
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-content\">
                                    <a href=\"#\" class=\"media-heading\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cmt"], "idCompteCt", array()), "pseudo", array()), "html", null, true);
            echo "</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary pull-right\">reply</a>
                                    <span class=\"date\">";
            // line 177
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cmt"], "date", array())), "html", null, true);
            echo "</span>
                                    <p>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["cmt"], "contenu", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "

                        <div class=\"comment-form\">
                            <h4 class=\"page-header\">Leave a comment</h4>
                            <form method=\"post\" action=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("trournoi_commentaire_new", array("tournoi" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()))), "html", null, true);
        echo "\">
                                <div class=\"form-group\">
                                    <textarea class=\"form-control bg-white\" rows=\"6\" id=\"contentcom\" name=\"contentcom\" placeholder=\"Your Comment\"></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-rounded btn-shadow pull-right\">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-game\" style=\"background-image: url(";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/game/review-widget.jpg"), "html", null, true);
        echo ");\">
                        <div class=\"overlay\">
                            <div class=\"title\">";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array()), "html", null, true);
        echo "</div>

                            <div class=\"chart-align\">
                                <span class=\"chart\" data-percent=\"";
        // line 204
        echo twig_escape_filter($this->env, (((isset($context["nbp"]) ? $context["nbp"] : $this->getContext($context, "nbp")) / $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array())) * 100), "html", null, true);
        echo "\"><span class=\"percent\"></span></span>
                            </div>

                            <p class=\"progress-label\">Players In <span>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array()), "html", null, true);
        echo "</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-success\" aria-valuenow=\"";
        // line 209
        echo twig_escape_filter($this->env, (((isset($context["nbp"]) ? $context["nbp"] : $this->getContext($context, "nbp")) / $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array())) * 100), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Free Places <span>";
        // line 212
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array()) - (isset($context["nbp"]) ? $context["nbp"] : $this->getContext($context, "nbp"))), "html", null, true);
        echo "</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-danger\" aria-valuenow=\"";
        // line 214
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array()) - (isset($context["nbp"]) ? $context["nbp"] : $this->getContext($context, "nbp"))) / $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nbrJoueur", array())) * 100), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Starting <span>";
        // line 217
        $context["diffdate"] = $this->env->getExtension('Twig_Extensions_Extension_Date')->diff($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "startDate", array()));
        echo twig_escape_filter($this->env, (isset($context["diffdate"]) ? $context["diffdate"] : $this->getContext($context, "diffdate")), "html", null, true);
        echo "</span></p>
                            <div class=\"progress progress-animation progress-xs no-margin-bottom\">
                                ";
        // line 219
        if (preg_match("/in (.*) days/", (isset($context["diffdate"]) ? $context["diffdate"] : $this->getContext($context, "diffdate")))) {
            // line 220
            echo "                                    ";
            $context["mazel"] = 50;
            // line 221
            echo "                                ";
        } elseif (preg_match("/in (.*) months/", (isset($context["diffdate"]) ? $context["diffdate"] : $this->getContext($context, "diffdate")))) {
            // line 222
            echo "                                    ";
            $context["mazel"] = 95;
            // line 223
            echo "                                ";
        } elseif (preg_match("/in (.*) seconds/", (isset($context["diffdate"]) ? $context["diffdate"] : $this->getContext($context, "diffdate")))) {
            // line 224
            echo "                                    ";
            $context["mazel"] = 15;
            // line 225
            echo "                                    ";
        } else {
            // line 226
            echo "                                    ";
            $context["mazel"] = 0;
            // line 227
            echo "
                                ";
        }
        // line 229
        echo "                                <div class=\"progress-bar progress-bar-warning\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, (isset($context["mazel"]) ? $context["mazel"] : $this->getContext($context, "mazel")), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <div class=\"bold text-uppercase margin-top-40\">Organizer</div>
                            <span class=\"font-size-13\">";
        // line 233
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idCompteTrn", array()), "pseudo", array())), "html", null, true);
        echo "</span>


                            <div class=\"description\">
                                ";
        // line 237
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "nom", array())), "html", null, true);
        echo ": A Tournament for ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idGameTrn", array()), "Name", array()), "html", null, true);
        echo " players ans lovers . <br> Participation fee : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "prixParJoueur", array()), "html", null, true);
        echo "
                                <a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_new", array("tournament" => $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "idTournoi", array()))), "html", null, true);
        echo "\" class=\"btn btn-block btn-primary margin-top-40 ";
        if ((( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "points", array()) < $this->getAttribute((isset($context["tournoi"]) ? $context["tournoi"] : $this->getContext($context, "tournoi")), "prixParJoueur", array()))) || ((isset($context["isparticipated"]) ? $context["isparticipated"] : $this->getContext($context, "isparticipated")) == 1))) {
            echo " disabled ";
        }
        echo " }\">Participate <i class=\"fa fa-heart-o margin-left-10\"></i></a>
                                ";
        // line 239
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") && ((isset($context["isparticipated"]) ? $context["isparticipated"] : $this->getContext($context, "isparticipated")) == 1))) {
            // line 240
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_tiket", array("participation" => $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "IdParticipation", array()))), "html", null, true);
            echo "\" class=\"btn btn-block btn-primary margin-top-40 \">Get Ticket <i class=\"fa fa-ticket-o margin-left-10\"></i></a>
                                ";
        }
        // line 242
        echo "
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Posts</div>
                        <ul>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/blog/xs/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Overwatch Closed Beta</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 15, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/blog/xs/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Blood and Gore</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 13, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/blog/xs/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Warner Bros. Interactive</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 12, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/blog/xs/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Sharks Don't Sleep</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 10, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/blog/xs/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">GTA 5 Reaches 5 Million</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 10, 2015</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class=\"widget widget-card\">
                        <div class=\"title\">Related Videos</div>
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"videos-single.html\"><img src=\"http://i1.ytimg.com/vi/jhv3Jq6O-nw/mqdefault.jpg\" alt=\"\"></a>
                                <div class=\"time\">04:51</div>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a href=\"videos-single.html\">Call of Duty Black Ops 3</a></h3>
                                <ul>
                                    <li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
                                    <li><i class=\"fa fa-eye\"></i> 1500 views</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"videos-single.html\"><img src=\"http://i1.ytimg.com/vi/ULyb0PlH4EY/mqdefault.jpg\" alt=\"\"></a>
                                <div class=\"time\">11:06</div>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a href=\"videos-single.html\">Fallout 4 Announcement</a></h3>
                                <ul>
                                    <li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
                                    <li><i class=\"fa fa-eye\"></i> 1500 views</li>
                                </ul>
                            </div>
                        </div>

                        <a href=\"#\" class=\"btn btn-inverse btn-block\">More Videos</a>
                    </div>
-->
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary padding-30\">
        <div class=\"container text-center\">
            <div class=\"row slider\">
                <div class=\"owl-carousel\">
                    <blockquote class=\"blockquote-primary no-border no-padding no-margin\">
                        <p class=\"font-size-24 color-white font-weight-300 no-margin\"><em>\"Keep it clean from cheating .\"</em></p>
                        <footer class=\"bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white\">Admin</footer>
                    </blockquote>
                    <blockquote class=\"blockquote-primary no-border no-padding no-margin\">
                        <p class=\"font-size-24 color-white font-weight-300 no-margin\"><em>\"We will privade Streaming links if possible .\"</em></p>
                        <footer class=\"bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white\">Owner</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>


</div>




    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easypiechart/jquery.easypiechart.min.js"), "html", null, true);
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
";
        
        $__internal_b34c3e3524a7e44238cd357c39c880e34dbf1835f23fe7e62471f4dd669f477a->leave($__internal_b34c3e3524a7e44238cd357c39c880e34dbf1835f23fe7e62471f4dd669f477a_prof);

        
        $__internal_e8fd1ee7815e5beea8780604f014cfdffdcc2e996efe393f6d3ab7a3c9d63510->leave($__internal_e8fd1ee7815e5beea8780604f014cfdffdcc2e996efe393f6d3ab7a3c9d63510_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 351,  584 => 350,  580 => 349,  576 => 348,  504 => 279,  494 => 272,  484 => 265,  474 => 258,  464 => 251,  453 => 242,  447 => 240,  445 => 239,  437 => 238,  429 => 237,  422 => 233,  414 => 229,  410 => 227,  407 => 226,  404 => 225,  401 => 224,  398 => 223,  395 => 222,  392 => 221,  389 => 220,  387 => 219,  381 => 217,  375 => 214,  370 => 212,  364 => 209,  359 => 207,  353 => 204,  347 => 201,  342 => 199,  327 => 187,  321 => 183,  310 => 178,  306 => 177,  301 => 175,  294 => 171,  289 => 168,  285 => 167,  280 => 165,  262 => 150,  258 => 149,  254 => 148,  238 => 135,  230 => 130,  222 => 125,  185 => 91,  171 => 80,  156 => 68,  141 => 56,  137 => 55,  132 => 53,  127 => 51,  109 => 36,  104 => 34,  98 => 31,  93 => 29,  77 => 16,  71 => 13,  64 => 9,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<input type=\"hidden\" id=\"tournoi\" name=\"tournoi\" value=\"{{ tournoi.idTournoi }}\">
<!-- wrapper -->
<div id=\"wrapper\">
    <section class=\"hero height-350 hero-game\" style=\"background-image: url({{ asset('img/cover/cover-profile.jpg') }});\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">{{ tournoi.nom }}</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\" class=\"no-padding-left\">Home</a></li>
                    <li><a href=\"{{ path('tournoi_index') }}\">Tournaments</a></li>
                    <li class=\"active\">Details</li>
                </ol>
                <a href=\"#\" class=\"btn btn-success margin-top-30 text-initial\" data-toggle=\"lightbox\" data-width=\"1280\">Participate</a>
            </div>
        </div>
    </section>


    <section class=\"bg-white no-padding hidden-xs border-bottom-1 border-grey-300\" style=\"height: 54px\">
        <div class=\"tab-select sticky text-center\">
            <div class=\"container\">
                <ul class=\"nav nav-tabs\">
                    <li><a href=\"#\">{{ tournoi.nom }}</a></li>
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-star\"></i> Review</a></li>
                    <li><a href=\"{{ path('tournoi_edit', { 'id': tournoi.idTournoi }) }}\"><i class=\"fa fa-pencil\"></i> Edit</a></li>
                    <li><a href=\"#comments\"><i class=\"fa fa-comments\"></i> Comments</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-video-camera\"></i> Videos</a></li>
                    <li><a href=\"#\"><i class=\"glyphicon glyphicon-floppy-remove\"></i>Delete  {{ form_start(delete_form) }}
                             <input name=\"del\" id=\"del\" type=\"submit\" class=\"hidden\" value=\"Delete\">
                            {{ form_end(delete_form) }}</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50\">
        <div class=\"container\">
            <div class=\"row sidebar\">
                <div class=\"col-md-8 leftside\">
                    <div class=\"post post-single\">
                        <div class=\"post-header\">
                            <div class=\"post-title\">
                                <h2>

                                        <img src=\"data:image/png;base64,{{ tournoi.imageTournoi }}\" alt=\"\" width=\"48px\" height=\"48px\"/>

                                    <a href=\"#\">{{ tournoi.nom }}</a></h2>
                                <ul class=\"post-meta\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i> {{ tournoi.idCompteTrn.nom }}</a></li>
                                    <li><i class=\"fa fa-calendar-o\"></i>{{ tournoi.startDate | date() }}</li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i> 0 <span class=\"hidden-xs\">Comments</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\">Prize Pool</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    {{ tournoi.reward1 + tournoi.reward3 + tournoi.reward2 }} Points
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Participation</a></div>

                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\">Participants</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    6 / {{ tournoi.nbrJoueur }} <i class=\"fa fa-users\"></i>
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Participation</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-4 col-sm-4 co-xs-12 margin-bottom-sm-30\">
                            <div class=\"panel panel-inverse\">
                                <div class=\"panel-heading \">
                                    <h3 class=\"panel-title text-center\">Participation Fee</h3>
                                </div>
                                <div class=\"panel-body text-center text-bold\">
                                    {{ tournoi.prixParJoueur }}
                                    <div><a href=\"\" class=\"popover-info-element\" data-toggle=\"popover\" data-title=\"\" data-placement=\"top\" data-container=\"body\" data-content=\"As soon as the displayed number of participants has been reached, Cancellation of the tournament is no longer possible.\" data-trigger=\"hover click\" data-original-title=\"\" title=\"\"><i class=\"fa fa-info-circle text-info\"></i>&nbsp;Fees</a></div>

                                </div>
                            </div>
                        </div>
                        </div>

                            <div class=\"panel panel-inverse margin-top-20\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title text-center\"><i class=\"fa fa-list-ol\"></i> How it works?</h3>
                                </div>
                                <div class=\"panel-body\">
                                    <p>1. Join the tournament.</p>
                                    <p>2. The tournament starts when the participant slots are full. You will get a notification.</p>
                                    <p>3. Play as many ranked games <span class=\"text-danger\">(solo/duo ranked only!)</span> as you like.</p>
                                    <p>4. Your best 3 games during the tournament duration will be used for calculating your score.</p>
                                    <p>5. After the tournament ends, the winners will be determined by the best scores.
                                    </p><p>6. If you are one of the winners, you'll get rewarded.
                                    </p><p>7. Have fun.</p>
                                </div>
                            </div>
                        <div class=\"panel panel-inverse margin-top-20\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title text-center\"><i class=\"fa fa-list-ol\"></i> Prizes</h3>
                            </div>
                            <div class=\"panel-body\">
                                <table class=\"table table-striped\">
                                    <thead>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style=\"text-align: center;\">1st place</td>
                                        <td style=\"text-align: center;\">{{ tournoi.reward1 }} Points</td>

                                    </tr>
                                    <tr>
                                        <td style=\"text-align: center;\">2nd Place </td>
                                        <td  style=\"text-align: center;\">{{ tournoi.reward2 }} Points</td>

                                    </tr>
                                    <tr>
                                        <td style=\"text-align: center;\">3rd Place</td>
                                        <td  style=\"text-align: center;\">{{ tournoi.reward3 }} Points</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class=\"row margin-top-40\">
                            <div class=\"col-md-8\">
                                <div class=\"tags\">
                                    <a href=\"#\">{{ tournoi.idCompteTrn.pseudo }}</a>
                                    <a href=\"#\">{{ tournoi.idGameTrn.Name }}</a>
                                    <a href=\"#\">{{ tournoi.startDate | date('20y') }}</a>

                                </div>
                            </div>
                            <div class=\"col-md-4 hidden-xs hidden-sm\">
                                <ul class=\"share\">
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-facebook\" data-toggle=\"tooltip\" title=\"Share on facebook\"><i class=\"fa fa-facebook\"></i></a><span>312</span></li>
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-twitter\" data-toggle=\"tooltip\" title=\"Share on twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\" class=\"btn btn-sm btn-social-icon btn-google-plus\" data-toggle=\"tooltip\" title=\"Share on google\"><i class=\"fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"comments\" name=\"comments\" id=\"comments\">
                        <h4 class=\"page-header\"><i class=\"fa fa-comment-o\"></i> Comments ({{ comments |length }})</h4>

                        {% for cmt in comments %}
                        <div class=\"media\">
                            <a class=\"media-left\" href=\"#\">

                                <img src=\"{{ path('get_user_img',{'id':cmt.idCompteCt.IdCompte}) }}\" alt=\"\" />
                            </a>
                            <div class=\"media-body\">
                                <div class=\"media-content\">
                                    <a href=\"#\" class=\"media-heading\">{{ cmt.idCompteCt.pseudo }}</a>
                                    <a href=\"#\" class=\"btn btn-sm btn-primary pull-right\">reply</a>
                                    <span class=\"date\">{{ cmt.date | date() }}</span>
                                    <p>{{ cmt.contenu }}</p>
                                </div>
                            </div>
                        </div>
                        {% endfor %}


                        <div class=\"comment-form\">
                            <h4 class=\"page-header\">Leave a comment</h4>
                            <form method=\"post\" action=\"{{ path('trournoi_commentaire_new',{ 'tournoi':tournoi.idTournoi }) }}\">
                                <div class=\"form-group\">
                                    <textarea class=\"form-control bg-white\" rows=\"6\" id=\"contentcom\" name=\"contentcom\" placeholder=\"Your Comment\"></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-rounded btn-shadow pull-right\">Submit Comment</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class=\"col-md-4 rightside\">
                    <div class=\"widget widget-game\" style=\"background-image: url({{ asset('img/game/review-widget.jpg') }});\">
                        <div class=\"overlay\">
                            <div class=\"title\">{{ tournoi.nom }}</div>

                            <div class=\"chart-align\">
                                <span class=\"chart\" data-percent=\"{{ (nbp / tournoi.nbrJoueur) * 100 }}\"><span class=\"percent\"></span></span>
                            </div>

                            <p class=\"progress-label\">Players In <span>{{ tournoi.nbrJoueur }}</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-success\" aria-valuenow=\"{{ (nbp / tournoi.nbrJoueur) * 100 }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Free Places <span>{{ tournoi.nbrJoueur - nbp }}</span></p>
                            <div class=\"progress progress-animation progress-xs\">
                                <div class=\"progress-bar progress-bar-danger\" aria-valuenow=\"{{ ((tournoi.nbrJoueur - nbp ) / tournoi.nbrJoueur) * 100 }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <p class=\"progress-label\">Starting <span>{% set diffdate = (tournoi.startDate|time_diff) %}{{ diffdate }}</span></p>
                            <div class=\"progress progress-animation progress-xs no-margin-bottom\">
                                {% if diffdate matches '/in (.*) days/' %}
                                    {% set mazel = 50 %}
                                {% elseif (diffdate matches '/in (.*) months/') %}
                                    {% set mazel = 95 %}
                                {% elseif (diffdate matches '/in (.*) seconds/') %}
                                    {% set mazel = 15 %}
                                    {% else %}
                                    {% set mazel = 0 %}

                                {% endif %}
                                <div class=\"progress-bar progress-bar-warning\" aria-valuenow=\"{{ mazel }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                            </div>

                            <div class=\"bold text-uppercase margin-top-40\">Organizer</div>
                            <span class=\"font-size-13\">{{ tournoi.idCompteTrn.pseudo | upper  }}</span>


                            <div class=\"description\">
                                {{ tournoi.nom | upper }}: A Tournament for {{ tournoi.idGameTrn.Name }} players ans lovers . <br> Participation fee : {{ tournoi.prixParJoueur }}
                                <a href=\"{{ path('participation_new',{ 'tournament':tournoi.idTournoi }) }}\" class=\"btn btn-block btn-primary margin-top-40 {% if  (not(is_granted('ROLE_USER')) or (app.user.points < tournoi.prixParJoueur) or isparticipated ==1)  %} disabled {% endif %} }\">Participate <i class=\"fa fa-heart-o margin-left-10\"></i></a>
                                {% if  (is_granted('ROLE_USER') and isparticipated ==1)  %}
                                <a href=\"{{ path('participation_tiket',{ 'participation':participation.IdParticipation}) }}\" class=\"btn btn-block btn-primary margin-top-40 \">Get Ticket <i class=\"fa fa-ticket-o margin-left-10\"></i></a>
                                {% endif %}

                            </div>
                        </div>
                    </div>
                    <!--
                    <div class=\"widget widget-list\">
                        <div class=\"title\">Recent Posts</div>
                        <ul>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"{{ asset('img/blog/xs/1.jpg') }}\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Overwatch Closed Beta</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 15, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"{{ asset('img/blog/xs/2.jpg') }}\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Blood and Gore</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 13, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"{{ asset('img/blog/xs/3.jpg') }}\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Warner Bros. Interactive</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 12, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"{{ asset('img/blog/xs/4.jpg') }}\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">Sharks Don't Sleep</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 10, 2015</p>
                                </div>
                            </li>
                            <li>
                                <a href=\"#\" class=\"thumb\"><img src=\"{{ asset('img/blog/xs/5.jpg') }}\" alt=\"\"></a>
                                <div class=\"widget-list-meta\">
                                    <h4 class=\"widget-list-title\"><a href=\"#\">GTA 5 Reaches 5 Million</a></h4>
                                    <p><i class=\"fa fa-clock-o\"></i> September 10, 2015</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class=\"widget widget-card\">
                        <div class=\"title\">Related Videos</div>
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"videos-single.html\"><img src=\"http://i1.ytimg.com/vi/jhv3Jq6O-nw/mqdefault.jpg\" alt=\"\"></a>
                                <div class=\"time\">04:51</div>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a href=\"videos-single.html\">Call of Duty Black Ops 3</a></h3>
                                <ul>
                                    <li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
                                    <li><i class=\"fa fa-eye\"></i> 1500 views</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"videos-single.html\"><img src=\"http://i1.ytimg.com/vi/ULyb0PlH4EY/mqdefault.jpg\" alt=\"\"></a>
                                <div class=\"time\">11:06</div>
                            </div>
                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a href=\"videos-single.html\">Fallout 4 Announcement</a></h3>
                                <ul>
                                    <li><i class=\"fa fa-calendar-o\"></i> April 13, 2016</li>
                                    <li><i class=\"fa fa-eye\"></i> 1500 views</li>
                                </ul>
                            </div>
                        </div>

                        <a href=\"#\" class=\"btn btn-inverse btn-block\">More Videos</a>
                    </div>
-->
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-primary padding-30\">
        <div class=\"container text-center\">
            <div class=\"row slider\">
                <div class=\"owl-carousel\">
                    <blockquote class=\"blockquote-primary no-border no-padding no-margin\">
                        <p class=\"font-size-24 color-white font-weight-300 no-margin\"><em>\"Keep it clean from cheating .\"</em></p>
                        <footer class=\"bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white\">Admin</footer>
                    </blockquote>
                    <blockquote class=\"blockquote-primary no-border no-padding no-margin\">
                        <p class=\"font-size-24 color-white font-weight-300 no-margin\"><em>\"We will privade Streaming links if possible .\"</em></p>
                        <footer class=\"bg-transparent text-center no-padding-top margin-top-10 font-size-14 color-white\">Owner</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>


</div>




    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('plugins/easypiechart/jquery.easypiechart.min.js') }}\"></script>
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
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/show.html.twig");
    }
}
