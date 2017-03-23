<?php

/* @EloboostedFrontoffice/Post/commentaire.html.twig */
class __TwigTemplate_29594c57a1b6aceef064e7c9f7705abcbcb4d7fcdc000baabc0865582e1f6aa4 extends Twig_Template
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
        $__internal_04e3bd2414972a809e0adc7b2b618b0625dd0a904e944a84055647ef8dd7b6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e3bd2414972a809e0adc7b2b618b0625dd0a904e944a84055647ef8dd7b6e2->enter($__internal_04e3bd2414972a809e0adc7b2b618b0625dd0a904e944a84055647ef8dd7b6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

        $__internal_33cf2a7d61eb8e8056cbf354d7eb669c44a7bc4870978e89d0c78bf12aff6f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cf2a7d61eb8e8056cbf354d7eb669c44a7bc4870978e89d0c78bf12aff6f6e->enter($__internal_33cf2a7d61eb8e8056cbf354d7eb669c44a7bc4870978e89d0c78bf12aff6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/commentaire.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commentaire"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "    <div  name=\"zone1\"class=\"forum-post\">


        <div class=\"forum-panel\">
            <div class=\"forum-user\">
                <a href=\"profile.html\" class=\"avatar\"><img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"><span class=\"label label-warning\"></span></a>
                <div>
                    <a href=\"profile.html\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "pseudo", array()), "html", null, true);
            echo "</a>
                    <span>Birth day</span>
                    <span class=\"date\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["commentaire"], "idCompteCp", array()), "dateDeNaissance", array())), "html", null, true);
            echo "</span>
                </div>
            </div>
            <div class=\"forum-body\">
                <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
        ";
            // line 19
            $context["a"] = 0;
            // line 20
            echo "
        <div class=\"forum-footer\">
            <ul class=\"post-action\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["unlike"]);
            foreach ($context['_seq'] as $context["_key"] => $context["unlike"]) {
                // line 24
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["unlike"], "idCommentaireLj", array()), "idCommentaire", array()) == $this->getAttribute($context["commentaire"], "idCommentaire", array()))) {
                    // line 25
                    echo "                        ";
                    $context["a"] = 1;
                    // line 26
                    echo "                    ";
                }
                // line 27
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unlike'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
            if (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) == 0)) {
                // line 29
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("idCommentaireLj" => $this->getAttribute($context["commentaire"], "idCommentaire", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-heart\"></i> like</a></li>
                ";
            } elseif ((            // line 30
(isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) == 1)) {
                // line 31
                echo "                    <li><a style=\"color: #00AEEF\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("like", array("idCommentaireLj" => $this->getAttribute($context["commentaire"], "idCommentaire", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-heart1\"></i> Unlike</a></li>
                ";
            }
            // line 33
            echo "                <li><a href=\"forum-post.html#\"><i class=\"fa fa-flag\"></i> Report</a></li>
            </ul>
            <ul class=\"post-meta\">
                <li><i class=\"fa fa-calendar-o\"></i>";
            // line 36
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
        
        $__internal_04e3bd2414972a809e0adc7b2b618b0625dd0a904e944a84055647ef8dd7b6e2->leave($__internal_04e3bd2414972a809e0adc7b2b618b0625dd0a904e944a84055647ef8dd7b6e2_prof);

        
        $__internal_33cf2a7d61eb8e8056cbf354d7eb669c44a7bc4870978e89d0c78bf12aff6f6e->leave($__internal_33cf2a7d61eb8e8056cbf354d7eb669c44a7bc4870978e89d0c78bf12aff6f6e_prof);

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
        return array (  109 => 36,  104 => 33,  98 => 31,  96 => 30,  91 => 29,  88 => 28,  82 => 27,  79 => 26,  76 => 25,  73 => 24,  69 => 23,  64 => 20,  62 => 19,  56 => 16,  49 => 12,  44 => 10,  39 => 8,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for commentaire in commentaire %}
    <div  name=\"zone1\"class=\"forum-post\">


        <div class=\"forum-panel\">
            <div class=\"forum-user\">
                <a href=\"profile.html\" class=\"avatar\"><img src=\"{{ commentaire.idCompteCp.image }}\" alt=\"\"><span class=\"label label-warning\"></span></a>
                <div>
                    <a href=\"profile.html\">{{ commentaire.idCompteCp.pseudo }}</a>
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
                {% if a==0 %}
                    <li><a href=\"{{ path('like',{'idCommentaireLj':commentaire.idCommentaire}) }}\"><i class=\"fa fa-heart\"></i> like</a></li>
                {% elseif a==1 %}
                    <li><a style=\"color: #00AEEF\" href=\"{{ path('like',{'idCommentaireLj':commentaire.idCommentaire}) }}\"><i class=\"fa fa-heart1\"></i> Unlike</a></li>
                {% endif %}
                <li><a href=\"forum-post.html#\"><i class=\"fa fa-flag\"></i> Report</a></li>
            </ul>
            <ul class=\"post-meta\">
                <li><i class=\"fa fa-calendar-o\"></i>{{ commentaire.date | date }}</li>

            </ul>
        </div>
    </div>
{% endfor %}", "@EloboostedFrontoffice/Post/commentaire.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\commentaire.html.twig");
    }
}
