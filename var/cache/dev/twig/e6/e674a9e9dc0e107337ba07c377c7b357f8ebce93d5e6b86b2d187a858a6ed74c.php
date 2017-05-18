<?php

/* EloboostedFrontofficeBundle:games:show.html.twig */
class __TwigTemplate_65f6e4a53e29fda21d9517d33933b42c9aaf1e2617851c91d35ac0e942703dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:games:show.html.twig", 1);
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
        $__internal_04c6d0620e40b12609607a80582e63dae691396fcbb15ff7603af459d2373e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c6d0620e40b12609607a80582e63dae691396fcbb15ff7603af459d2373e4b->enter($__internal_04c6d0620e40b12609607a80582e63dae691396fcbb15ff7603af459d2373e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:show.html.twig"));

        $__internal_5f69c4e933daf3cd1164d08121c922546e40195957ec0518336b48f88532fc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f69c4e933daf3cd1164d08121c922546e40195957ec0518336b48f88532fc8b->enter($__internal_5f69c4e933daf3cd1164d08121c922546e40195957ec0518336b48f88532fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04c6d0620e40b12609607a80582e63dae691396fcbb15ff7603af459d2373e4b->leave($__internal_04c6d0620e40b12609607a80582e63dae691396fcbb15ff7603af459d2373e4b_prof);

        
        $__internal_5f69c4e933daf3cd1164d08121c922546e40195957ec0518336b48f88532fc8b->leave($__internal_5f69c4e933daf3cd1164d08121c922546e40195957ec0518336b48f88532fc8b_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_1f4353896f5f7a6dac8a0e4865752f8e571b22ffbc99e26c19e403821e915949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4353896f5f7a6dac8a0e4865752f8e571b22ffbc99e26c19e403821e915949->enter($__internal_1f4353896f5f7a6dac8a0e4865752f8e571b22ffbc99e26c19e403821e915949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1eeead83c6d84cda244cf563a558bcf128d2d893d4c7dddb134ffe71c4823b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeead83c6d84cda244cf563a558bcf128d2d893d4c7dddb134ffe71c4823b53->enter($__internal_1eeead83c6d84cda244cf563a558bcf128d2d893d4c7dddb134ffe71c4823b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 5
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
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Games</a></li>

                        <li class=\"active\">Game Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <section class=\"bg-grey-50 padding-top-30 \">


        <div class=\"container col-md-offset-2\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"games-single.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "idCathegorieg", array()), "nom", array()), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "idCathegorieg", array()), "nom", array())) . ".png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a href=\"#\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "nomGames", array()), "html", null, true);
        echo "</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><span class=\"label label-info\">";
        // line 43
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "supported", array())), "html", null, true);
        echo "</span> </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <img src=\"data:image/png;base64,";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "imageGames", array()), "html", null, true);
        echo "\" style=\"height: 500px\" alt=\"\"></a>

                                </div>
                                <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["game"] ?? $this->getContext($context, "game")), "description", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>



    </section>
";
        
        $__internal_1eeead83c6d84cda244cf563a558bcf128d2d893d4c7dddb134ffe71c4823b53->leave($__internal_1eeead83c6d84cda244cf563a558bcf128d2d893d4c7dddb134ffe71c4823b53_prof);

        
        $__internal_1f4353896f5f7a6dac8a0e4865752f8e571b22ffbc99e26c19e403821e915949->leave($__internal_1f4353896f5f7a6dac8a0e4865752f8e571b22ffbc99e26c19e403821e915949_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 52,  117 => 49,  108 => 43,  103 => 41,  96 => 39,  72 => 18,  68 => 17,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                        <li><a href=\"{{ path('home') }}\">Home</a></li>
                        <li><a href=\"{{ path('yes_index') }}\">Games</a></li>

                        <li class=\"active\">Game Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <section class=\"bg-grey-50 padding-top-30 \">


        <div class=\"container col-md-offset-2\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"games-single.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"{{ game.idCathegorieg.nom }}\"><img src=\"{{ asset(\"img/\" ) ~ game.idCathegorieg.nom  ~\".png\"}}\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a href=\"#\">{{ game.nomGames }}</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><span class=\"label label-info\">{{ game.supported | upper }}</span> </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <img src=\"data:image/png;base64,{{ game.imageGames  }}\" style=\"height: 500px\" alt=\"\"></a>

                                </div>
                                <p>{{ game.description }}</p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>



    </section>
{% endblock %}
", "EloboostedFrontofficeBundle:games:show.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/games/show.html.twig");
    }
}
