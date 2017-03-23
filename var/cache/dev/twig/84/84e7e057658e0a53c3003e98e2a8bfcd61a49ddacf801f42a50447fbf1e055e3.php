<?php

/* @EloboostedFrontoffice/Post/readPost.html.twig */
class __TwigTemplate_c6b8b64a56eb3a1e5c97d19d437ca4521bf9246900b7df24b2b89a1f36224dda extends Twig_Template
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
        $__internal_2e4916630c66fc4ee4fd7989371ecbec85ba166cf91730d60b719611d8655a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4916630c66fc4ee4fd7989371ecbec85ba166cf91730d60b719611d8655a52->enter($__internal_2e4916630c66fc4ee4fd7989371ecbec85ba166cf91730d60b719611d8655a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/readPost.html.twig"));

        $__internal_750e8f352372121981aea89a511fbb55de24c0479d01eae4674c6efdc722739b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750e8f352372121981aea89a511fbb55de24c0479d01eae4674c6efdc722739b->enter($__internal_750e8f352372121981aea89a511fbb55de24c0479d01eae4674c6efdc722739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Post/readPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4916630c66fc4ee4fd7989371ecbec85ba166cf91730d60b719611d8655a52->leave($__internal_2e4916630c66fc4ee4fd7989371ecbec85ba166cf91730d60b719611d8655a52_prof);

        
        $__internal_750e8f352372121981aea89a511fbb55de24c0479d01eae4674c6efdc722739b->leave($__internal_750e8f352372121981aea89a511fbb55de24c0479d01eae4674c6efdc722739b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4e0423a24e1fc0911867e46ced8f6640d6536316745f3db916dbfe3e522903b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0423a24e1fc0911867e46ced8f6640d6536316745f3db916dbfe3e522903b1->enter($__internal_4e0423a24e1fc0911867e46ced8f6640d6536316745f3db916dbfe3e522903b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4d1672ea801f1055875d8e319dbbe2b45c33893ffc82e49168ad20f577d0f478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1672ea801f1055875d8e319dbbe2b45c33893ffc82e49168ad20f577d0f478->enter($__internal_4d1672ea801f1055875d8e319dbbe2b45c33893ffc82e49168ad20f577d0f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <script src=\"jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(
                function () {
                    \$.post('";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commentaire", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
        echo "', function (data) {
                        \$('#commentaire').html(data);
                    });

                }

                , 500);

        })
    </script>
    <script>
        \$(document).ready(function() {


            \$('#ajoutmessage').on('submit', function (e) {
                e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

                var \$this = \$(this);

                \$.ajax({
                    url: \$this.attr('action'),
                    type: 'post',
                    data: \$this.serialize(),
                    dataType: 'json', // JSON
                    success: function (json) {
                        console.log(json);
                    }
                });
                \$('#textcommentaire').val('');

            })
        })
    </script>
    <div id=\"wrapper\">
        <section class=\"border-bottom-1 border-grey-300 padding-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ol class=\"breadcrumb\">
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 52
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
                        <a href=\"forum-new.html\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new Post</a>
                        ";
        // line 66
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()))) {
            // line 67
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("removePost", array("idPost" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
            echo "\" data-message=\"Are you sure you want to delete this post?\"  class=\"btn btn-default btn-icon-left\"><i class=\"fa fa-edit\"></i>remove Post</a>
                        ";
        }
        // line 69
        echo "
                        <div class=\"dropdown\">
                            <a href=\"forum-post.html#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></a>
                            <ul class=\"dropdown-menu pull-right\">

                                <li><a href=\"forum-post.html#\"><i class=\"fa fa-edit\"></i> Edit thread</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"forum-new.html\"><i class=\"fa fa-plus\"></i> New thread</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"forum-post\">
                    <div class=\"forum-panel\">
                        <div class=\"forum-user\">
                            <a href=\"profile.html\" class=\"avatar\"><img src=";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "image", array()), "html", null, true);
        echo " alt=\"\"></a>
                            <div>
                                <a href=\"profile.html\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "pseudo", array()), "html", null, true);
        echo "</a>
                                <span>Birth day</span>
                                <span class=\"date\">";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idComptePost", array()), "dateDeNaissance", array())), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"forum-body\">
                            <h4>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
        echo ",</h4>
                            <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "sujet", array()), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"forum-footer\">
                        <ul class=\"post-action\">
                           <li><a href=\"forum-post.html#\"><i class=\"fa fa-flag\"></i> Report</a></li>
                        </ul>
                        <ul class=\"post-meta\">
                            <li><i class=\"fa fa-calendar-o\"></i>";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "date", array())), "html", null, true);
        echo "</li>

                        </ul>
                    </div>
                </div>


<div id=\"commentaire\">
    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EloboostedFrontofficeBundle:Post:commentaire", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))));
        echo "
</div>

                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Write a reply</h4>
                </div>
                <div  name=\"zone2\" class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" id =\"ajoutmessage\" action=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Addcommentaire", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "idPost", array()))), "html", null, true);
        echo "\" method=\"post\">

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
        
        $__internal_4d1672ea801f1055875d8e319dbbe2b45c33893ffc82e49168ad20f577d0f478->leave($__internal_4d1672ea801f1055875d8e319dbbe2b45c33893ffc82e49168ad20f577d0f478_prof);

        
        $__internal_4e0423a24e1fc0911867e46ced8f6640d6536316745f3db916dbfe3e522903b1->leave($__internal_4e0423a24e1fc0911867e46ced8f6640d6536316745f3db916dbfe3e522903b1_prof);

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
        return array (  202 => 118,  191 => 110,  180 => 102,  169 => 94,  165 => 93,  158 => 89,  153 => 87,  148 => 85,  130 => 69,  124 => 67,  122 => 66,  105 => 52,  101 => 51,  59 => 12,  49 => 4,  40 => 3,  11 => 2,);
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
    <script src=\"jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {

            // Update notifications section

            window.setInterval(
                function () {
                    \$.post('{{ path('commentaire', {id : post.idPost}) }}', function (data) {
                        \$('#commentaire').html(data);
                    });

                }

                , 500);

        })
    </script>
    <script>
        \$(document).ready(function() {


            \$('#ajoutmessage').on('submit', function (e) {
                e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

                var \$this = \$(this);

                \$.ajax({
                    url: \$this.attr('action'),
                    type: 'post',
                    data: \$this.serialize(),
                    dataType: 'json', // JSON
                    success: function (json) {
                        console.log(json);
                    }
                });
                \$('#textcommentaire').val('');

            })
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
                        <a href=\"forum-new.html\" class=\"btn btn-primary btn-icon-left\"><i class=\"fa fa-comments\"></i> new Post</a>
                        {% if app.user == post.idComptePost %}
                        <a href=\"{{ path('removePost',{'idPost':post.idPost }) }}\" data-message=\"Are you sure you want to delete this post?\"  class=\"btn btn-default btn-icon-left\"><i class=\"fa fa-edit\"></i>remove Post</a>
                        {% endif %}

                        <div class=\"dropdown\">
                            <a href=\"forum-post.html#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></a>
                            <ul class=\"dropdown-menu pull-right\">

                                <li><a href=\"forum-post.html#\"><i class=\"fa fa-edit\"></i> Edit thread</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"forum-new.html\"><i class=\"fa fa-plus\"></i> New thread</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class=\"forum-post\">
                    <div class=\"forum-panel\">
                        <div class=\"forum-user\">
                            <a href=\"profile.html\" class=\"avatar\"><img src={{ post.idComptePost.image }} alt=\"\"></a>
                            <div>
                                <a href=\"profile.html\">{{ post.idComptePost.pseudo }}</a>
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
                           <li><a href=\"forum-post.html#\"><i class=\"fa fa-flag\"></i> Report</a></li>
                        </ul>
                        <ul class=\"post-meta\">
                            <li><i class=\"fa fa-calendar-o\"></i>{{ post.date|date }}</li>

                        </ul>
                    </div>
                </div>


<div id=\"commentaire\">
    {{ render(controller('EloboostedFrontofficeBundle:Post:commentaire',{id : post.idPost})) }}
</div>

                <div class=\"headline\">
                    <h4><i class=\"fa fa-comment\"></i> Write a reply</h4>
                </div>
                <div  name=\"zone2\" class=\"panel panel-default margin-bottom-30\">
                    <div class=\"panel-body\">
                        <form class=\"form-label\" id =\"ajoutmessage\" action=\"{{ path('Addcommentaire',{id : post.idPost}) }}\" method=\"post\">

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
