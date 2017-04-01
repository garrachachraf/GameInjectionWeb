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
        $__internal_f8c80afbfc213d7f68ef4a64ff2cf5a4e088196a58e6f188c3832b9d2e8ad5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c80afbfc213d7f68ef4a64ff2cf5a4e088196a58e6f188c3832b9d2e8ad5f0->enter($__internal_f8c80afbfc213d7f68ef4a64ff2cf5a4e088196a58e6f188c3832b9d2e8ad5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

        $__internal_b60ac11c5191c56939d2786e7d1e4b916005d5c7ecd8480504715c8d82905ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60ac11c5191c56939d2786e7d1e4b916005d5c7ecd8480504715c8d82905ad9->enter($__internal_b60ac11c5191c56939d2786e7d1e4b916005d5c7ecd8480504715c8d82905ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

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
                echo "


                    ";
                // line 39
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                    // line 40
                    echo "                        <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()), "post" => $this->getAttribute($this->getAttribute($context["commentaire"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-heart\"></i> like (";
                    echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
                    echo ")</a></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><a style=\"color: #0a0a0a\" ><i class=\"fa fa-heart\"></i> like (";
                    echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
                    echo ")</a></li>


                    ";
                }
                // line 46
                echo "                ";
            } elseif (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) == 1)) {
                // line 47
                echo "                    <li><a style=\"color: #00AEEF\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()), "post" => $this->getAttribute($this->getAttribute($context["commentaire"], "idPostCp", array()), "idPost", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-heart1\"></i> Unlike  (";
                echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
                echo ")</a></li>
                ";
            }
            // line 49
            echo "                ";
            $context["y"] = 0;
            // line 50
            echo "                ";
            $context["x"] = $this->getAttribute($context["commentaire"], "idCommentaire", array());
            // line 51
            echo "


                ";
            // line 54
            $context["y1"] = 0;
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["commentreported"]);
            foreach ($context['_seq'] as $context["_key"] => $context["commentreported"]) {
                // line 56
                echo "
                    ";
                // line 57
                if (($this->getAttribute($context["commentreported"], "idCommentaireSng", array()) != null)) {
                    // line 58
                    echo "                    ";
                    if (($this->getAttribute($context["commentaire"], "idCommentaire", array()) == $this->getAttribute($this->getAttribute($context["commentreported"], "idCommentaireSng", array()), "idCommentaire", array()))) {
                        // line 59
                        echo "                        ";
                        $context["y1"] = 1;
                        // line 60
                        echo "                    ";
                    }
                    // line 61
                    echo "                    ";
                }
                // line 62
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentreported'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
            if (((isset($context["y1"]) ? $context["y1"] : $this->getContext($context, "y1")) == 1)) {
                // line 64
                echo "                    <li><a style=\"color: #A00000\"><i class=\"fa fa-flag\"></i> Reported</a></li>

                ";
            } else {
                // line 67
                echo "

                    ";
                // line 69
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
                    // line 70
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reportcomment", array("id" => $this->getAttribute($context["commentaire"], "idCommentaire", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-flag\"></i> Report </a></li>
                    ";
                } else {
                    // line 72
                    echo "                        <li><a style=\"color: #0a0a0a\"><i class=\"fa fa-flag\"></i> Report</a></li>

                    ";
                }
                // line 75
                echo "

                ";
            }
            // line 78
            echo "
            </ul>
            <ul class=\"post-meta\">
                <li><i class=\"fa fa-calendar-o\"></i>";
            // line 81
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
        
        $__internal_f8c80afbfc213d7f68ef4a64ff2cf5a4e088196a58e6f188c3832b9d2e8ad5f0->leave($__internal_f8c80afbfc213d7f68ef4a64ff2cf5a4e088196a58e6f188c3832b9d2e8ad5f0_prof);

        
        $__internal_b60ac11c5191c56939d2786e7d1e4b916005d5c7ecd8480504715c8d82905ad9->leave($__internal_b60ac11c5191c56939d2786e7d1e4b916005d5c7ecd8480504715c8d82905ad9_prof);

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
        return array (  233 => 81,  228 => 78,  223 => 75,  218 => 72,  212 => 70,  210 => 69,  206 => 67,  201 => 64,  198 => 63,  192 => 62,  189 => 61,  186 => 60,  183 => 59,  180 => 58,  178 => 57,  175 => 56,  170 => 55,  168 => 54,  163 => 51,  160 => 50,  157 => 49,  149 => 47,  146 => 46,  138 => 42,  130 => 40,  128 => 39,  123 => 36,  120 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  100 => 30,  98 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  79 => 24,  74 => 21,  72 => 20,  66 => 17,  59 => 13,  52 => 11,  49 => 10,  47 => 9,  41 => 8,  37 => 6,  35 => 5,  31 => 3,  27 => 2,  25 => 1,);
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



                    {% if app.user!= null %}
                        <li><a  href=\"{{ path('like',{id : commentaire.idCommentaire, post : commentaire.idPostCp.idPost  }) }}\"><i class=\"fa fa-heart\"></i> like ({{ y }})</a></li>
                    {% else %}
                        <li><a style=\"color: #0a0a0a\" ><i class=\"fa fa-heart\"></i> like ({{ y }})</a></li>


                    {% endif %}
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


                    {% if app.user!= null %}
                        <li><a href=\"{{ path('reportcomment',{'id':commentaire.idCommentaire }) }}\"><i class=\"fa fa-flag\"></i> Report </a></li>
                    {% else %}
                        <li><a style=\"color: #0a0a0a\"><i class=\"fa fa-flag\"></i> Report</a></li>

                    {% endif %}


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
