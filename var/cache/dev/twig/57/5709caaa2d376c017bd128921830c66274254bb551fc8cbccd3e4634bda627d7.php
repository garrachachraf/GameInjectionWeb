<?php

/* @EloboostedFrontoffice/Post/commentaire.html.twig */
class __TwigTemplate_29033af1667f2e2bc4b2580c5ac01a5f7fd67dd4e9464e8267bfda58ec4cce84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_987f835088a8bdcfee7be3181755dab3e4116e76cc9d3aa0a4007cd9229b7aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987f835088a8bdcfee7be3181755dab3e4116e76cc9d3aa0a4007cd9229b7aa9->enter($__internal_987f835088a8bdcfee7be3181755dab3e4116e76cc9d3aa0a4007cd9229b7aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

        $__internal_00f6b14884f88e45e4a43787927f250ee008dfb7422a8762361ca852c2a0ccea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f6b14884f88e45e4a43787927f250ee008dfb7422a8762361ca852c2a0ccea->enter($__internal_00f6b14884f88e45e4a43787927f250ee008dfb7422a8762361ca852c2a0ccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

        // line 1
        $context["img"] = null;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commentaire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "    <div  name=\"zone1\"class=\"forum-post\">

";
            // line 5
            $context["img"] = $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "image", array());
            // line 6
            echo "        <div class=\"forum-panel\">
            <div class=\"forum-user\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "idCompte", array()))), "html", null, true);
            echo "\" class=\"avatar\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" alt=\"\"><span class=\"label label-warning\"></span></a>
                ";
            // line 9
            $context["img"] = null;
            // line 10
            echo "                <div>
                    <a  href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "idCompte", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "pseudo", array()), "html", null, true);
            echo "</a>
                    <span>Birth day</span>
                    <span class=\"date\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "dateDeNaissance", array())), "html", null, true);
            echo "</span>
                </div>
            </div>
            <div class=\"forum-body\">
                <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
        ";
            // line 20
            $context["a"] = 0;
            // line 21
            echo "
        <div class=\"forum-footer\">
            <ul class=\"post-action\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["unlike"]);
            foreach ($context['_seq'] as $context["_key"] => $context["unlike"]) {
                // line 25
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["unlike"], "idCommentaireLj", array()), "idCommentaire", array()) == $this->getAttribute($context["commentaire"], "idCommentaire", array()))) {
                    // line 26
                    echo "                        ";
                    $context["a"] = 1;
                    // line 27
                    echo "                    ";
                }
                // line 28
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unlike'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            $context["y"] = 0;
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["nbrlike"]);
            foreach ($context['_seq'] as $context["_key"] => $context["nbrlike"]) {
                // line 31
                echo "                ";
                if (($this->getAttribute($this->getAttribute($context["nbrlike"], "idCommentaireLj", array()), "idCommentaire", array()) == $this->getAttribute($context["commentaire"], "idCommentaire", array()))) {
                    // line 32
                    echo "                ";
                    $context["y"] = ((isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")) + 1);
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrlike'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
            if (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) == 0)) {
                // line 36
                echo "                    <li><a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()), "post" => $this->getAttribute($this->getAttribute($context["commentaire"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-heart\"></i> like (";
                echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
                echo ")</a></li>
                ";
            } elseif ((            // line 37
(isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) == 1)) {
                // line 38
                echo "                    <li><a style=\"color: #00AEEF\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()), "post" => $this->getAttribute($this->getAttribute($context["commentaire"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-heart1\"></i> Unlike  (";
                echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
                echo ")</a></li>
                ";
            }
            // line 40
            echo "                ";
            $context["y"] = 0;
            // line 41
            echo "                ";
            $context["x"] = $this->getAttribute($context["commentaire"], "idCommentaire", array());
            // line 42
            echo "


                ";
            // line 45
            $context["y1"] = 0;
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["commentreported"]);
            foreach ($context['_seq'] as $context["_key"] => $context["commentreported"]) {
                // line 47
                echo "
                    ";
                // line 48
                if (($this->getAttribute($context["commentreported"], "idCommentaireSng", array()) != null)) {
                    // line 49
                    echo "                    ";
                    if (($this->getAttribute($context["commentaire"], "idCommentaire", array()) == $this->getAttribute($this->getAttribute($context["commentreported"], "idCommentaireSng", array()), "idCommentaire", array()))) {
                        // line 50
                        echo "                        ";
                        $context["y1"] = 1;
                        // line 51
                        echo "                    ";
                    }
                    // line 52
                    echo "                    ";
                }
                // line 53
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentreported'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                ";
            if (((isset($context["y1"]) ? $context["y1"] : $this->getContext($context, "y1")) == 1)) {
                // line 55
                echo "                    <li><a style=\"color: #A00000\"><i class=\"fa fa-flag\"></i> Reported</a></li>

                ";
            } else {
                // line 58
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reportcomment", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-flag\"></i> Report </a></li>
                ";
            }
            // line 60
            echo "
            </ul>
            <ul class=\"post-meta\">
                <li><i class=\"fa fa-calendar-o\"></i>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "date", array())), "html", null, true);
            echo "</li>

            </ul>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_987f835088a8bdcfee7be3181755dab3e4116e76cc9d3aa0a4007cd9229b7aa9->leave($__internal_987f835088a8bdcfee7be3181755dab3e4116e76cc9d3aa0a4007cd9229b7aa9_prof);

        
        $__internal_00f6b14884f88e45e4a43787927f250ee008dfb7422a8762361ca852c2a0ccea->leave($__internal_00f6b14884f88e45e4a43787927f250ee008dfb7422a8762361ca852c2a0ccea_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Post/commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  195 => 60,  189 => 58,  184 => 55,  181 => 54,  175 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  161 => 48,  158 => 47,  153 => 46,  151 => 45,  146 => 42,  143 => 41,  140 => 40,  132 => 38,  130 => 37,  123 => 36,  120 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  100 => 30,  98 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  79 => 24,  74 => 21,  72 => 20,  66 => 17,  59 => 13,  52 => 11,  49 => 10,  47 => 9,  41 => 8,  37 => 6,  35 => 5,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img = null  %}
{% for commentaire in commentaire %}
    <div  name=\"zone1\"class=\"forum-post\">

{% set img=commentaire.idCompteCp.image %}
        <div class=\"forum-panel\">
            <div class=\"forum-user\">
                <a href=\"{{ path('userProfile',{id : commentaire.idCompteCp.idCompte}) }}\" class=\"avatar\"><img src=\"{{ img }}\" alt=\"\"><span class=\"label label-warning\"></span></a>
                {% set img=null %}
                <div>
                    <a  href=\"{{ path('userProfile',{id : commentaire.idCompteCp.idCompte}) }}\">{{ commentaire.idCompteCp.pseudo }}</a>
                    <span>Birth day</span>
                    <span class=\"date\">{{ commentaire.idCompteCp.dateDeNaissance | date }}</span>
                </div>
            </div>
            <div class=\"forum-body\">
                <p>{{ commentaire.contenu }}</p>
            </div>
        </div>
        {% set a=0 %}

        <div class=\"forum-footer\">
            <ul class=\"post-action\">
                {% for unlike in unlike %}
                    {% if unlike.idCommentaireLj.idCommentaire == commentaire.idCommentaire  %}
                        {% set a=1 %}
                    {% endif %}
                {% endfor %}
{%  set y=0 %}
                {% for nbrlike in nbrlike  %}
                {% if nbrlike.idCommentaireLj.idCommentaire == commentaire.idCommentaire  %}
                {% set y=y+1 %}
                {% endif %}
                {% endfor %}
                {% if a==0 %}
                    <li><a  href=\"{{ path('like',{id : commentaire.idCommentaire, post : commentaire.idPostCp.idPost  }) }}\"><i class=\"fa fa-heart\"></i> like ({{ y }})</a></li>
                {% elseif a==1 %}
                    <li><a style=\"color: #00AEEF\" href=\"{{  path('like',{id : commentaire.idCommentaire, post : commentaire.idPostCp.idPost}) }}\"><i class=\"fa fa-heart1\"></i> Unlike  ({{ y }})</a></li>
                {% endif %}
                {% set y=0 %}
                {% set x= commentaire.idCommentaire %}



                {% set y1=0 %}
                {% for commentreported in commentreported %}

                    {% if commentreported.idCommentaireSng != null %}
                    {% if commentaire.idCommentaire==commentreported.idCommentaireSng.idCommentaire %}
                        {% set y1=1 %}
                    {% endif %}
                    {% endif %}
                {% endfor %}
                {% if y1==1 %}
                    <li><a style=\"color: #A00000\"><i class=\"fa fa-flag\"></i> Reported</a></li>

                {% else %}
                    <li><a href=\"{{ path('reportcomment',{'id':commentaire.idCommentaire }) }}\"><i class=\"fa fa-flag\"></i> Report </a></li>
                {% endif %}

            </ul>
            <ul class=\"post-meta\">
                <li><i class=\"fa fa-calendar-o\"></i>{{ commentaire.date | date }}</li>

            </ul>
        </div>
    </div>
{% endfor %}
", "@EloboostedFrontoffice/Post/commentaire.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\commentaire.html.twig");
    }
}
