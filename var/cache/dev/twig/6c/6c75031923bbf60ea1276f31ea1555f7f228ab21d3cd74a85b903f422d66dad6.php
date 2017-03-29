<?php

/* @EloboostedFrontoffice/Post/readPost.html.twig */
class __TwigTemplate_696dbe7ea90c39c4341009c19ec7e49c07567431d816be420460965fc1195cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/Post/readPost.html.twig", 2);
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
        $__internal_6976b2aeab622f7f31571e08558b04040c99e345eb49c09c36aa46a1954cfc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6976b2aeab622f7f31571e08558b04040c99e345eb49c09c36aa46a1954cfc1e->enter($__internal_6976b2aeab622f7f31571e08558b04040c99e345eb49c09c36aa46a1954cfc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/readPost.html.twig"));

        $__internal_65002992fe55d757733aec02f48af8a1308e0b377fe05f831f30b7448967e4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65002992fe55d757733aec02f48af8a1308e0b377fe05f831f30b7448967e4ab->enter($__internal_65002992fe55d757733aec02f48af8a1308e0b377fe05f831f30b7448967e4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/readPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6976b2aeab622f7f31571e08558b04040c99e345eb49c09c36aa46a1954cfc1e->leave($__internal_6976b2aeab622f7f31571e08558b04040c99e345eb49c09c36aa46a1954cfc1e_prof);

        
        $__internal_65002992fe55d757733aec02f48af8a1308e0b377fe05f831f30b7448967e4ab->leave($__internal_65002992fe55d757733aec02f48af8a1308e0b377fe05f831f30b7448967e4ab_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9cf3664196f515593dc0099070047912f6998cea26185146f7fd1e6c34e47ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf3664196f515593dc0099070047912f6998cea26185146f7fd1e6c34e47ca5->enter($__internal_9cf3664196f515593dc0099070047912f6998cea26185146f7fd1e6c34e47ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e618ab63c2975b7f3572f3760898550c5f4bed1691464a93e9586d23d5888429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e618ab63c2975b7f3572f3760898550c5f4bed1691464a93e9586d23d5888429->enter($__internal_e618ab63c2975b7f3572f3760898550c5f4bed1691464a93e9586d23d5888429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {


            \$('#ajoutmessage').on('submit', function (e) {
                e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
                var msg =\$('#textcommentaire').val();
                var \$this = \$(this);

                \$.ajax({
                    url: \$this.attr('action'),
                    type: 'post',
                    data: { msg : msg , id : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()), "html", null, true);
        echo " },
                    dataType: 'json', // JSON
                    success: function (data) {
                        console.log(data['data']);
                    },
                    error: function (data) {
                        console.log('error');
                    }
                });
                \$('#textcommentaire').val('');

            })

            // Update comments section

            window.setInterval(
                function () {
                    \$.post('";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
        echo "', function (data) {
                        \$('#commentaire').html(data);
                    });

                }

                , 2000);

        })
    </script>
    <div id=\"wrapper\">
        <section class=\"border-bottom-1 border-grey-300 padding-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ol class=\"breadcrumb\">
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAllPosts");
        echo "\">All Posts</a></li>
                            <li class=\"active\">Read Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"bg-grey-50 padding-bottom-60\">
            <div class=\"container\">
                <div class=\"headline\">
                    <h4><i class=\"fa fa-comments\"></i> Forum Post Thread</h4>
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AddPost");
        echo "\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new Post</a>
                        ";
        // line 65
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()))) {
            // line 66
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removePost", array("idPost" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
            echo "\" data-message=\"Are you sure you want to delete this post?\"  class=\"btn btn-default btn-icon-left\"><i class=\"fa fa-edit\"></i>remove Post</a>
                        ";
        }
        // line 68
        echo "

                    </div>
                </div>

                <div class=\"forum-post\">
                    <div class=\"forum-panel\">
                        <div class=\"forum-user\">
                            <a  href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "idCompte", array()))), "html", null, true);
        echo "\" class=\"avatar\"><img src=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "image", array()), "html", null, true);
        echo " alt=\"\"></a>
                            <div>
                                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("userProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "idCompte", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "pseudo", array()), "html", null, true);
        echo "</a>
                                <span>Birth day</span>
                                <span class=\"date\">";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "dateDeNaissance", array())), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"forum-body\">
                            <h4>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
        echo ",</h4>
                            <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "sujet", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"forum-footer\">
                        <ul class=\"post-action\">
                            ";
        // line 90
        $context["y1"] = 0;
        // line 91
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["postreported"]);
        foreach ($context['_seq'] as $context["_key"] => $context["postreported"]) {
            // line 92
            echo "                                ";
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()) == $this->getAttribute($this->getAttribute($context["postreported"], "idPostSng", array()), "idPost", array()))) {
                // line 93
                echo "                                    ";
                $context["y1"] = 1;
                // line 94
                echo "                                ";
            }
            // line 95
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postreported'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            ";
        if (((isset($context["y1"]) ? $context["y1"] : $this->getContext($context, "y1")) == 1)) {
            // line 98
            echo "                            <li><a style=\"color: #A00000\"><i class=\"fa fa-flag\"></i> Reported</a></li>

                            ";
        } else {
            // line 101
            echo "                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-flag\"></i> Report</a></li>
                            ";
        }
        // line 103
        echo "
                        </ul>
                        <ul class=\"post-meta\">
                            <li><i class=\"fa fa-calendar-o\"></i>";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "date", array())), "html", null, true);
        echo "</li>

                        </ul>
                    </div>
                </div>
                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Comments</h4>
                </div>

<div id=\"commentaire\">
    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Post:commentaire", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))));
        echo "
</div>

                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Write a reply</h4>
                </div>
                <div  name=\"zone2\" class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" id =\"ajoutmessage\" enctype=\"multipart/form-data\" action=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Addcommentaire");
        echo "\">

                            <div class=\"form-group row\">
                                <label class=\"col-md-2\">Message</label>

                                <div class=\"col-md-10\" >
                                    <input type=\"text\" class=\"form-control\" required  id=\"textcommentaire\" name=\"replay\" placeholder=\"Add Message\" style=\"height:200px;\">
                                </div>
                            </div>

                            <div class=\"text-center\"><input type=\"submit\" name=\"btn\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>

";
        
        $__internal_e618ab63c2975b7f3572f3760898550c5f4bed1691464a93e9586d23d5888429->leave($__internal_e618ab63c2975b7f3572f3760898550c5f4bed1691464a93e9586d23d5888429_prof);

        
        $__internal_9cf3664196f515593dc0099070047912f6998cea26185146f7fd1e6c34e47ca5->leave($__internal_9cf3664196f515593dc0099070047912f6998cea26185146f7fd1e6c34e47ca5_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Post/readPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 124,  235 => 116,  222 => 106,  217 => 103,  211 => 101,  206 => 98,  203 => 97,  196 => 95,  193 => 94,  190 => 93,  187 => 92,  182 => 91,  180 => 90,  172 => 85,  168 => 84,  161 => 80,  154 => 78,  147 => 76,  137 => 68,  131 => 66,  129 => 65,  125 => 64,  109 => 51,  105 => 50,  86 => 34,  66 => 17,  49 => 4,  40 => 3,  11 => 2,);
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
    <script src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <script>
        \$(document).ready(function() {


            \$('#ajoutmessage').on('submit', function (e) {
                e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
                var msg =\$('#textcommentaire').val();
                var \$this = \$(this);

                \$.ajax({
                    url: \$this.attr('action'),
                    type: 'post',
                    data: { msg : msg , id : {{  post.idPost}} },
                    dataType: 'json', // JSON
                    success: function (data) {
                        console.log(data['data']);
                    },
                    error: function (data) {
                        console.log('error');
                    }
                });
                \$('#textcommentaire').val('');

            })

            // Update comments section

            window.setInterval(
                function () {
                    \$.post('{{ path('commentaire', {id : post.idPost}) }}', function (data) {
                        \$('#commentaire').html(data);
                    });

                }

                , 2000);

        })
    </script>
    <div id=\"wrapper\">
        <section class=\"border-bottom-1 border-grey-300 padding-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ol class=\"breadcrumb\">
                            <li><a href=\"{{ path('home') }}\">Home</a></li>
                            <li><a href=\"{{ path('showAllPosts') }}\">All Posts</a></li>
                            <li class=\"active\">Read Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"bg-grey-50 padding-bottom-60\">
            <div class=\"container\">
                <div class=\"headline\">
                    <h4><i class=\"fa fa-comments\"></i> Forum Post Thread</h4>
                    <div class=\"pull-right\">
                        <a href=\"{{ path('AddPost') }}\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new Post</a>
                        {% if app.user == post.idComptePost %}
                        <a href=\"{{ path('removePost',{'idPost':post.idPost }) }}\" data-message=\"Are you sure you want to delete this post?\"  class=\"btn btn-default btn-icon-left\"><i class=\"fa fa-edit\"></i>remove Post</a>
                        {% endif %}


                    </div>
                </div>

                <div class=\"forum-post\">
                    <div class=\"forum-panel\">
                        <div class=\"forum-user\">
                            <a  href=\"{{ path('userProfile',{id : post.idComptePost.idCompte}) }}\" class=\"avatar\"><img src={{ post.idComptePost.image }} alt=\"\"></a>
                            <div>
                                <a href=\"{{ path('userProfile',{id : post.idComptePost.idCompte}) }}\">{{ post.idComptePost.pseudo }}</a>
                                <span>Birth day</span>
                                <span class=\"date\">{{ post.idComptePost.dateDeNaissance|date }}</span>
                            </div>
                        </div>
                        <div class=\"forum-body\">
                            <h4>{{ post.titre }},</h4>
                            <p>{{ post.sujet }}</p>
                        </div>
                    </div>
                    <div class=\"forum-footer\">
                        <ul class=\"post-action\">
                            {% set y1=0 %}
                            {% for postreported in postreported %}
                                {% if post.idPost==postreported.idPostSng.idPost %}
                                    {% set y1=1 %}
                                {% endif %}

                            {% endfor %}
                            {% if y1==1 %}
                            <li><a style=\"color: #A00000\"><i class=\"fa fa-flag\"></i> Reported</a></li>

                            {% else %}
                            <li><a href=\"{{ path('report',{'id':post.idPost }) }}\"><i class=\"fa fa-flag\"></i> Report</a></li>
                            {% endif %}

                        </ul>
                        <ul class=\"post-meta\">
                            <li><i class=\"fa fa-calendar-o\"></i>{{ post.date|date }}</li>

                        </ul>
                    </div>
                </div>
                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Comments</h4>
                </div>

<div id=\"commentaire\">
    {{ render(controller('EloboostedFrontofficeBundle:Post:commentaire',{id : post.idPost})) }}
</div>

                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Write a reply</h4>
                </div>
                <div  name=\"zone2\" class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" id =\"ajoutmessage\" enctype=\"multipart/form-data\" action=\"{{ path('Addcommentaire') }}\">

                            <div class=\"form-group row\">
                                <label class=\"col-md-2\">Message</label>

                                <div class=\"col-md-10\" >
                                    <input type=\"text\" class=\"form-control\" required  id=\"textcommentaire\" name=\"replay\" placeholder=\"Add Message\" style=\"height:200px;\">
                                </div>
                            </div>

                            <div class=\"text-center\"><input type=\"submit\" name=\"btn\" value=\"SUBMIT\" class=\"btn btn-primary btn-lg btn-rounded btn-shadow\"></div>


                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>

{% endblock %}", "@EloboostedFrontoffice/Post/readPost.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Post\\readPost.html.twig");
    }
}
