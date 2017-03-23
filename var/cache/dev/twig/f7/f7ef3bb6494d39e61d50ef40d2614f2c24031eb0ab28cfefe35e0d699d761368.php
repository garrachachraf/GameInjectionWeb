<?php

/* @EloboostedFrontoffice/Post/showAllPosts.html.twig */
class __TwigTemplate_60c446d865f4d24fb6e9ea90566c95fc524f32ea7131480522aa450ccaaab626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Post/showAllPosts.html.twig", 2);
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
        $__internal_bd9789be880b3e8c3b5c2ac9085d5f5996123e7c4c13aa0f57f44251e7c75077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9789be880b3e8c3b5c2ac9085d5f5996123e7c4c13aa0f57f44251e7c75077->enter($__internal_bd9789be880b3e8c3b5c2ac9085d5f5996123e7c4c13aa0f57f44251e7c75077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $__internal_5b0b1efd878a57ace4ca431e8f059d7432a2b6100ff8a297c7fd187fa7459b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0b1efd878a57ace4ca431e8f059d7432a2b6100ff8a297c7fd187fa7459b53->enter($__internal_5b0b1efd878a57ace4ca431e8f059d7432a2b6100ff8a297c7fd187fa7459b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd9789be880b3e8c3b5c2ac9085d5f5996123e7c4c13aa0f57f44251e7c75077->leave($__internal_bd9789be880b3e8c3b5c2ac9085d5f5996123e7c4c13aa0f57f44251e7c75077_prof);

        
        $__internal_5b0b1efd878a57ace4ca431e8f059d7432a2b6100ff8a297c7fd187fa7459b53->leave($__internal_5b0b1efd878a57ace4ca431e8f059d7432a2b6100ff8a297c7fd187fa7459b53_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_90f5b5bd147326c9f29fb9491de7a688decac17ffe9f1274dc50ca935323c075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f5b5bd147326c9f29fb9491de7a688decac17ffe9f1274dc50ca935323c075->enter($__internal_90f5b5bd147326c9f29fb9491de7a688decac17ffe9f1274dc50ca935323c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cd4a42d07abdae2b97fde08694ff9bcf1fd274445f9eb77f6d6c25dc415570cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a42d07abdae2b97fde08694ff9bcf1fd274445f9eb77f6d6c25dc415570cb->enter($__internal_cd4a42d07abdae2b97fde08694ff9bcf1fd274445f9eb77f6d6c25dc415570cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div id=\"wrapper\">
    <section class=\"border-bottom-1 border-grey-300 padding-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                        <li class=\"active\">All Posts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-bottom-60\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4 class=\"no-padding-top\">Forum <small>ALL POSTS.</small></h4>
                <div class=\"pull-right\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddPost");
        echo "\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>
                    <div class=\"dropdown\">
                        <a href=\"forum-new.html\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"forum-threads.html#\"><i class=\"fa fa-bar-chart-o\"></i> All forums</a></li>
                            <li><a href=\"forum-threads.html#\"><i class=\"fa fa-sort-alpha-asc\"></i> Sort forums</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"forum-new.html\"><i class=\"fa fa-plus\"></i> New thread</a></li>
                        </ul>
                    </div>
                </div>
            </div>


";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "            ";
            $context["image"] = null;
            // line 39
            echo "            <div class=\"forum forum-thread\">
                <div class=\"forum-group\">
                    <div class=\"forum-icon\"><i class=\"fa fa-comments\"></i></div>
                    <div class=\"forum-title\">
                        <h4><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>

                    </div>
                    <div class=\"forum-activity\">
                        ";
            // line 47
            $context["image"] = $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array());
            // line 48
            echo "                        <a href=\"profile.html\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\" alt=\"\"></a>
                        <div>

                            <h4><a href=\"forum-post.html\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "pseudo", array()), "html", null, true);
            echo "</a></h4>
                            <span>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array())), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    <div class=\"forum-meta\">175 posts</div>
                </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </div>

        </div>
    </section>
</div>

";
        
        $__internal_cd4a42d07abdae2b97fde08694ff9bcf1fd274445f9eb77f6d6c25dc415570cb->leave($__internal_cd4a42d07abdae2b97fde08694ff9bcf1fd274445f9eb77f6d6c25dc415570cb_prof);

        
        $__internal_90f5b5bd147326c9f29fb9491de7a688decac17ffe9f1274dc50ca935323c075->leave($__internal_90f5b5bd147326c9f29fb9491de7a688decac17ffe9f1274dc50ca935323c075_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Post/showAllPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  125 => 52,  121 => 51,  114 => 48,  112 => 47,  103 => 43,  97 => 39,  94 => 38,  90 => 37,  73 => 23,  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/FrontofficeBundle/Resources/views/Products/addProduct.html.twig #}
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}
<div id=\"wrapper\">
    <section class=\"border-bottom-1 border-grey-300 padding-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"{{ path('home') }}\">Home</a></li>
                        <li class=\"active\">All Posts</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-bottom-60\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4 class=\"no-padding-top\">Forum <small>ALL POSTS.</small></h4>
                <div class=\"pull-right\">
                    <a href=\"{{ path('AddPost') }}\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>
                    <div class=\"dropdown\">
                        <a href=\"forum-new.html\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"forum-threads.html#\"><i class=\"fa fa-bar-chart-o\"></i> All forums</a></li>
                            <li><a href=\"forum-threads.html#\"><i class=\"fa fa-sort-alpha-asc\"></i> Sort forums</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"forum-new.html\"><i class=\"fa fa-plus\"></i> New thread</a></li>
                        </ul>
                    </div>
                </div>
            </div>


{% for post in post  %}
            {% set image = null %}
            <div class=\"forum forum-thread\">
                <div class=\"forum-group\">
                    <div class=\"forum-icon\"><i class=\"fa fa-comments\"></i></div>
                    <div class=\"forum-title\">
                        <h4><a href=\"{{ path('readPost',{'idPost':post.idPost }) }}\">{{ post.titre }}</a></h4>

                    </div>
                    <div class=\"forum-activity\">
                        {% set image=post.idComptePost.image  %}
                        <a href=\"profile.html\"><img src=\"{{image}}\" alt=\"\"></a>
                        <div>

                            <h4><a href=\"forum-post.html\">{{ post.idComptePost.pseudo }}</a></h4>
                            <span>{{ post.date|date}}</span>
                        </div>
                    </div>
                    <div class=\"forum-meta\">175 posts</div>
                </div>
{% endfor %}
            </div>

        </div>
    </section>
</div>

{% endblock %}
", "@EloboostedFrontoffice/Post/showAllPosts.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\showAllPosts.html.twig");
    }
}
