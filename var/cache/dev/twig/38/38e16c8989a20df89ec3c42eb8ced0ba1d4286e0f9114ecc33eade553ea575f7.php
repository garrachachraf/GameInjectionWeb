<?php

/* @EloboostedFrontoffice/Post/showAllPosts.html.twig */
class __TwigTemplate_2bb2a5814ef90e3da2a6ad3f9772b8a58fa57c402efbf0d1fa4aa7e544cc186d extends Twig_Template
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
        $__internal_553e7553086cdf29fe024620693dab9e76e7bc680f6ec8c6bdd8d1e6c4f11358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553e7553086cdf29fe024620693dab9e76e7bc680f6ec8c6bdd8d1e6c4f11358->enter($__internal_553e7553086cdf29fe024620693dab9e76e7bc680f6ec8c6bdd8d1e6c4f11358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $__internal_90cfbb846bd09810d5c1adf57fefa153a8b8aadebbdaad1b7d569cb8252e4616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cfbb846bd09810d5c1adf57fefa153a8b8aadebbdaad1b7d569cb8252e4616->enter($__internal_90cfbb846bd09810d5c1adf57fefa153a8b8aadebbdaad1b7d569cb8252e4616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_553e7553086cdf29fe024620693dab9e76e7bc680f6ec8c6bdd8d1e6c4f11358->leave($__internal_553e7553086cdf29fe024620693dab9e76e7bc680f6ec8c6bdd8d1e6c4f11358_prof);

        
        $__internal_90cfbb846bd09810d5c1adf57fefa153a8b8aadebbdaad1b7d569cb8252e4616->leave($__internal_90cfbb846bd09810d5c1adf57fefa153a8b8aadebbdaad1b7d569cb8252e4616_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_95d8c7dfd0ab5d131e5b74370227f838378f492a901bd59287ac0bc226b891a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d8c7dfd0ab5d131e5b74370227f838378f492a901bd59287ac0bc226b891a0->enter($__internal_95d8c7dfd0ab5d131e5b74370227f838378f492a901bd59287ac0bc226b891a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a480fe6f1390c46ca8af6639dc2154c85b189745bb824cf67484efdc0b56067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a480fe6f1390c46ca8af6639dc2154c85b189745bb824cf67484efdc0b56067a->enter($__internal_a480fe6f1390c46ca8af6639dc2154c85b189745bb824cf67484efdc0b56067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                    ";
        // line 23
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddPost");
            echo "\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>
                    ";
        } elseif (($this->getAttribute(        // line 25
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 26
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_logins");
            echo "\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>

                    ";
        }
        // line 29
        echo "                </div>
            </div>


";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "
            <div class=\"forum forum-thread\">
                <div class=\"forum-group\">
                    <div class=\"forum-icon\"><i class=\"fa fa-comments\"></i></div>
                    <div class=\"forum-title\">
                        <h4><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>

                    </div>
                    <div class=\"forum-activity\">

                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>

                        <div>

                            <h4><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "idCompte", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "pseudo", array()), "html", null, true);
            echo "</a></h4>
                            <span>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array())), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    ";
            // line 52
            $context["x"] = 0;
            // line 53
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["comments"]);
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 54
                echo "                        ";
                if (($this->getAttribute($context["post"], "idPost", array()) == $this->getAttribute($this->getAttribute($context["comments"], "idPostCp", array()), "idPost", array()))) {
                    // line 55
                    echo "                         ";
                    $context["x"] = ((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) + 1);
                    // line 56
                    echo "                        ";
                }
                // line 57
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    <div class=\"forum-meta\">";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), "html", null, true);
            echo " Comments </div>
                    ";
            // line 59
            $context["x"] = 0;
            // line 60
            echo "                </div>
            </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </div>
    </section>
</div>
    <div class=\"navigation\"   >
        ";
        // line 68
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        echo "
    </div>
";
        
        $__internal_a480fe6f1390c46ca8af6639dc2154c85b189745bb824cf67484efdc0b56067a->leave($__internal_a480fe6f1390c46ca8af6639dc2154c85b189745bb824cf67484efdc0b56067a_prof);

        
        $__internal_95d8c7dfd0ab5d131e5b74370227f838378f492a901bd59287ac0bc226b891a0->leave($__internal_95d8c7dfd0ab5d131e5b74370227f838378f492a901bd59287ac0bc226b891a0_prof);

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
        return array (  181 => 68,  174 => 63,  166 => 60,  164 => 59,  159 => 58,  153 => 57,  150 => 56,  147 => 55,  144 => 54,  139 => 53,  137 => 52,  131 => 49,  125 => 48,  116 => 44,  106 => 39,  99 => 34,  95 => 33,  89 => 29,  82 => 26,  80 => 25,  75 => 24,  73 => 23,  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
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
                    {% if app.user!=null %}
                    <a href=\"{{ path('AddPost') }}\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>
                    {% elseif app.user==null %}
                        <a href=\"{{ path('check_logins') }}\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new post</a>

                    {% endif %}
                </div>
            </div>


{% for post in post  %}

            <div class=\"forum forum-thread\">
                <div class=\"forum-group\">
                    <div class=\"forum-icon\"><i class=\"fa fa-comments\"></i></div>
                    <div class=\"forum-title\">
                        <h4><a href=\"{{ path('readPost',{'idPost':post.idPost }) }}\">{{ post.titre }}</a></h4>

                    </div>
                    <div class=\"forum-activity\">

                        <a href=\"{{ path('userProfile',{id : post.idComptePost.idCompte}) }}\"><img src=\"{{post.idComptePost.image}}\" alt=\"\"></a>

                        <div>

                            <h4><a href=\"{{ path('userProfile',{id : post.idComptePost.idCompte}) }}\">{{ post.idComptePost.pseudo }}</a></h4>
                            <span>{{ post.date|date}}</span>
                        </div>
                    </div>
                    {% set x=0  %}
                    {% for comments in comments %}
                        {% if post.idPost == comments.idPostCp.idPost %}
                         {% set x=x+1 %}
                        {% endif %}
                    {% endfor %}
                    <div class=\"forum-meta\">{{ x }} Comments </div>
                    {% set x=0 %}
                </div>
            </div>
     {% endfor %}

        </div>
    </section>
</div>
    <div class=\"navigation\"   >
        {{ knp_pagination_render(post) }}
    </div>
{% endblock %}

", "@EloboostedFrontoffice/Post/showAllPosts.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\showAllPosts.html.twig");
    }
}
