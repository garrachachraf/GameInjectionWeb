<?php

/* EloboostedFrontofficeBundle:Post:showAllPosts.html.twig */
class __TwigTemplate_2ea143850558b00f7d1547d6ca5937a996d026dcafc2a997631af2b0d68e2748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:Post:showAllPosts.html.twig", 2);
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
        $__internal_9b873cb32e104a858c83c5067055747526ec84cb59bae86535119081ba6cffa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b873cb32e104a858c83c5067055747526ec84cb59bae86535119081ba6cffa7->enter($__internal_9b873cb32e104a858c83c5067055747526ec84cb59bae86535119081ba6cffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Post:showAllPosts.html.twig"));

        $__internal_f63e11a40474cbe17d5405935544a16522d9ccdc888c7c7fb04c3362ba674689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63e11a40474cbe17d5405935544a16522d9ccdc888c7c7fb04c3362ba674689->enter($__internal_f63e11a40474cbe17d5405935544a16522d9ccdc888c7c7fb04c3362ba674689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Post:showAllPosts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b873cb32e104a858c83c5067055747526ec84cb59bae86535119081ba6cffa7->leave($__internal_9b873cb32e104a858c83c5067055747526ec84cb59bae86535119081ba6cffa7_prof);

        
        $__internal_f63e11a40474cbe17d5405935544a16522d9ccdc888c7c7fb04c3362ba674689->leave($__internal_f63e11a40474cbe17d5405935544a16522d9ccdc888c7c7fb04c3362ba674689_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b1f8e760d46b7635ca2f4001e22ac6ed0e6f378d4d9eee53f992cb1498df6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f8e760d46b7635ca2f4001e22ac6ed0e6f378d4d9eee53f992cb1498df6bd3->enter($__internal_b1f8e760d46b7635ca2f4001e22ac6ed0e6f378d4d9eee53f992cb1498df6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b135a578969377f2627448b38ec252559ea492ac731215d63a29c9c396282c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b135a578969377f2627448b38ec252559ea492ac731215d63a29c9c396282c96->enter($__internal_b135a578969377f2627448b38ec252559ea492ac731215d63a29c9c396282c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_b135a578969377f2627448b38ec252559ea492ac731215d63a29c9c396282c96->leave($__internal_b135a578969377f2627448b38ec252559ea492ac731215d63a29c9c396282c96_prof);

        
        $__internal_b1f8e760d46b7635ca2f4001e22ac6ed0e6f378d4d9eee53f992cb1498df6bd3->leave($__internal_b1f8e760d46b7635ca2f4001e22ac6ed0e6f378d4d9eee53f992cb1498df6bd3_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Post:showAllPosts.html.twig";
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
", "EloboostedFrontofficeBundle:Post:showAllPosts.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/Post/showAllPosts.html.twig");
    }
}
