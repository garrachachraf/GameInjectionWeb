<?php

/* @EloboostedFrontoffice/Post/showAllPosts.html.twig */
class __TwigTemplate_2e5c3800c3927f35709b97bd4cf077cb458192d9846f779bf75f5c03245ddaaf extends Twig_Template
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
        $__internal_5d617c5863a04e5a63c60880f00f818b2b8007cae395c8d600f50c143a6c52ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d617c5863a04e5a63c60880f00f818b2b8007cae395c8d600f50c143a6c52ac->enter($__internal_5d617c5863a04e5a63c60880f00f818b2b8007cae395c8d600f50c143a6c52ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $__internal_8caf792dee825e5b4c7d0a5f8eb42bc5301367c8242cdba9b867047c9b254ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caf792dee825e5b4c7d0a5f8eb42bc5301367c8242cdba9b867047c9b254ad6->enter($__internal_8caf792dee825e5b4c7d0a5f8eb42bc5301367c8242cdba9b867047c9b254ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/showAllPosts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d617c5863a04e5a63c60880f00f818b2b8007cae395c8d600f50c143a6c52ac->leave($__internal_5d617c5863a04e5a63c60880f00f818b2b8007cae395c8d600f50c143a6c52ac_prof);

        
        $__internal_8caf792dee825e5b4c7d0a5f8eb42bc5301367c8242cdba9b867047c9b254ad6->leave($__internal_8caf792dee825e5b4c7d0a5f8eb42bc5301367c8242cdba9b867047c9b254ad6_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_54ca5281f3f874bfc1d695524cab58aba8d4de48232103504282993eeae4a4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ca5281f3f874bfc1d695524cab58aba8d4de48232103504282993eeae4a4aa->enter($__internal_54ca5281f3f874bfc1d695524cab58aba8d4de48232103504282993eeae4a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c40e52bcd6405f017f0e40a2615c4141426514dee630b4645300ed0042198ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40e52bcd6405f017f0e40a2615c4141426514dee630b4645300ed0042198ef8->enter($__internal_c40e52bcd6405f017f0e40a2615c4141426514dee630b4645300ed0042198ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            echo "
                    ";
        }
        // line 28
        echo "                </div>
            </div>


";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 33
            echo "
            <div class=\"forum forum-thread\">
                <div class=\"forum-group\">
                    <div class=\"forum-icon\"><i class=\"fa fa-comments\"></i></div>
                    <div class=\"forum-title\">
                        <h4><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["post"], "idPost", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</a></h4>

                    </div>
                    <div class=\"forum-activity\">

                        <a href=\"profile.html\"><img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\"></a>

                        <div>

                            <h4><a href=\"forum-post.html\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "idComptePost", array()), "pseudo", array()), "html", null, true);
            echo "</a></h4>
                            <span>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array())), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                    ";
            // line 51
            $context["x"] = 0;
            // line 52
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["comments"]);
            foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
                // line 53
                echo "                        ";
                if (($this->getAttribute($context["post"], "idPost", array()) == $this->getAttribute($this->getAttribute($context["comments"], "idPostCp", array()), "idPost", array()))) {
                    // line 54
                    echo "                         ";
                    $context["x"] = ((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")) + 1);
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    <div class=\"forum-meta\">";
            echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), "html", null, true);
            echo " Comments </div>
                    ";
            // line 58
            $context["x"] = 0;
            // line 59
            echo "                </div>
            </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
        </div>
    </section>
</div>
    <div class=\"navigation\"   >
        ";
        // line 67
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        echo "
    </div>
";
        
        $__internal_c40e52bcd6405f017f0e40a2615c4141426514dee630b4645300ed0042198ef8->leave($__internal_c40e52bcd6405f017f0e40a2615c4141426514dee630b4645300ed0042198ef8_prof);

        
        $__internal_54ca5281f3f874bfc1d695524cab58aba8d4de48232103504282993eeae4a4aa->leave($__internal_54ca5281f3f874bfc1d695524cab58aba8d4de48232103504282993eeae4a4aa_prof);

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
        return array (  174 => 67,  167 => 62,  159 => 59,  157 => 58,  152 => 57,  146 => 56,  143 => 55,  140 => 54,  137 => 53,  132 => 52,  130 => 51,  124 => 48,  120 => 47,  113 => 43,  103 => 38,  96 => 33,  92 => 32,  86 => 28,  82 => 26,  80 => 25,  75 => 24,  73 => 23,  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
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

                        <a href=\"profile.html\"><img src=\"{{post.idComptePost.image}}\" alt=\"\"></a>

                        <div>

                            <h4><a href=\"forum-post.html\">{{ post.idComptePost.pseudo }}</a></h4>
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

", "@EloboostedFrontoffice/Post/showAllPosts.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\showAllPosts.html.twig");
    }
}
