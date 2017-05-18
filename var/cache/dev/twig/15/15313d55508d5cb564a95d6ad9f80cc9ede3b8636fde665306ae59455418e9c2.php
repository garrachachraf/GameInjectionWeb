<?php

/* EloboostedFrontofficeBundle:Notification:listNots.html.twig */
class __TwigTemplate_bdd96b139ebf7804abc9ef420a9443b0068e95bd64d47752331a2f8f10c71f31 extends Twig_Template
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
        $__internal_eff3c56a078f07c944d05ea1dfec48a21fe3a7223010fc9e18c657781b68864d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff3c56a078f07c944d05ea1dfec48a21fe3a7223010fc9e18c657781b68864d->enter($__internal_eff3c56a078f07c944d05ea1dfec48a21fe3a7223010fc9e18c657781b68864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Notification:listNots.html.twig"));

        $__internal_1008754afa98f24f2ae293b21336f33e341413acd0fca9f78c34e6997e969cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1008754afa98f24f2ae293b21336f33e341413acd0fca9f78c34e6997e969cb4->enter($__internal_1008754afa98f24f2ae293b21336f33e341413acd0fca9f78c34e6997e969cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:Notification:listNots.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
";
        // line 3
        echo "    ";
        // line 4
        echo "        ";
        // line 5
        echo "            ";
        // line 6
        echo "
                ";
        // line 8
        echo "                    ";
        // line 9
        echo "                    ";
        // line 10
        echo "                    ";
        // line 11
        echo "                    ";
        // line 12
        echo "                    ";
        // line 13
        echo "
                        ";
        // line 15
        echo "                        ";
        // line 16
        echo "
                    ";
        // line 18
        echo "
                ";
        // line 20
        echo "

            ";
        // line 23
        echo "    ";
        // line 25
        echo "<script>

    function refuse(id) {

        \$(document).ready(function () {



            \$.ajax({
                url: \"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RefuseInvFromNot");
        echo "\",
                method: \"post\",
                data : {idNot : id},
                type : 'json',
                success: function (data) {

                    console.log(data['data']);


                }

            })

        })
    }

    function accept(id) {

        \$(document).ready(function () {



        \$.ajax({
        url: \"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceptInvFromNot");
        echo "\",
        method: \"post\",
        data : {idNot : id},
        type : 'json',
        success: function (data) {

        console.log(data['data']);


        }

        })

        })
    }

</script>
<a href=\"index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\"> ";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["notifications"] ?? $this->getContext($context, "notifications"))), "html", null, true);
        echo " </span></a>

<ul  class=\"dropdown-menu\">
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 78
            echo "        ";
            if (((($this->getAttribute($context["notification"], "invite", array()) != null) && ($this->getAttribute($context["notification"], "message", array()) == null)) && ($this->getAttribute($context["notification"], "forum", array()) == null))) {
                // line 79
                echo "            <li> <a>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a>
                <button type=\"button\" onclick=\"accept(";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "idNotification", array()), "html", null, true);
                echo ")\" class=\"btn btn-success btn-xs\">Accept</button>
                <button type=\"button\" onclick=\"refuse(";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "idNotification", array()), "html", null, true);
                echo ")\"  class=\"btn btn-success btn-xs\">Refuse</button>
            </li>
        ";
            }
            // line 84
            echo "
        ";
            // line 85
            if (((($this->getAttribute($context["notification"], "forum", array()) != null) && ($this->getAttribute($context["notification"], "message", array()) == null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 86
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPostFromNotif", array("idPost" => $this->getAttribute($context["notification"], "forum", array()), "idNot" => $this->getAttribute($context["notification"], "idNotification", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 88
            echo "
        ";
            // line 89
            if (((($this->getAttribute($context["notification"], "forum", array()) == null) && ($this->getAttribute($context["notification"], "message", array()) != null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 90
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myInboxFromNotif", array("idNot" => $this->getAttribute($context["notification"], "idNotification", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 92
            echo "


        ";
            // line 95
            if (((($this->getAttribute($context["notification"], "forum", array()) == null) && ($this->getAttribute($context["notification"], "message", array()) == null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 96
                echo "            <li><div onclick=\"refuse(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "idNotification", array()), "html", null, true);
                echo ")\"><a>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></div></li>
        ";
            }
            // line 98
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eff3c56a078f07c944d05ea1dfec48a21fe3a7223010fc9e18c657781b68864d->leave($__internal_eff3c56a078f07c944d05ea1dfec48a21fe3a7223010fc9e18c657781b68864d_prof);

        
        $__internal_1008754afa98f24f2ae293b21336f33e341413acd0fca9f78c34e6997e969cb4->leave($__internal_1008754afa98f24f2ae293b21336f33e341413acd0fca9f78c34e6997e969cb4_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:Notification:listNots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 98,  184 => 96,  182 => 95,  177 => 92,  169 => 90,  167 => 89,  164 => 88,  156 => 86,  154 => 85,  151 => 84,  145 => 81,  141 => 80,  136 => 79,  133 => 78,  129 => 77,  123 => 74,  103 => 57,  77 => 34,  66 => 25,  64 => 23,  60 => 20,  57 => 18,  54 => 16,  52 => 15,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
{#<script>#}
    {#\$(document).ready(function () {#}
        {#\$('#sendInvite').click(#}
            {#function () {#}

                {#\$.ajax({#}
                    {#url: \"{{ path('SendInvite') }}\",#}
                    {#method: \"post\",#}
                    {#data : {idCompte : {{ .idCompte }}},#}
                    {#type : 'json',#}
                    {#success: function (data) {#}

                        {#console.log(data['data']);#}
                        {#\$('#sendInvite').prop('disabled', true);#}

                    {#}#}

                {#})#}


            {#});#}
    {#})#}
{#</script>#}
<script>

    function refuse(id) {

        \$(document).ready(function () {



            \$.ajax({
                url: \"{{ path('RefuseInvFromNot') }}\",
                method: \"post\",
                data : {idNot : id},
                type : 'json',
                success: function (data) {

                    console.log(data['data']);


                }

            })

        })
    }

    function accept(id) {

        \$(document).ready(function () {



        \$.ajax({
        url: \"{{ path('acceptInvFromNot') }}\",
        method: \"post\",
        data : {idNot : id},
        type : 'json',
        success: function (data) {

        console.log(data['data']);


        }

        })

        })
    }

</script>
<a href=\"index.html#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <span class=\"label label-danger\"> {{ notifications|length }} </span></a>

<ul  class=\"dropdown-menu\">
    {% for notification in notifications %}
        {% if notification.invite != null and notification.message == null and notification.forum == null %}
            <li> <a>{{ notification.contenu }}</a>
                <button type=\"button\" onclick=\"accept({{ notification.idNotification }})\" class=\"btn btn-success btn-xs\">Accept</button>
                <button type=\"button\" onclick=\"refuse({{ notification.idNotification }})\"  class=\"btn btn-success btn-xs\">Refuse</button>
            </li>
        {% endif %}

        {% if notification.forum != null and notification.message == null and notification.invite == null  %}
            <li><a href=\"{{ path('readPostFromNotif',{idPost : notification.forum ,idNot : notification.idNotification }) }}\">{{ notification.contenu }}</a></li>
        {% endif %}

        {% if notification.forum == null and notification.message != null and notification.invite == null  %}
            <li><a href=\"{{ path('myInboxFromNotif',{idNot : notification.idNotification }) }}\">{{ notification.contenu }}</a></li>
        {% endif %}



        {% if (notification.forum == null and notification.message == null and notification.invite == null  )   %}
            <li><div onclick=\"refuse({{ notification.idNotification }})\"><a>{{ notification.contenu }}</a></div></li>
        {% endif %}
    {% endfor %}
", "EloboostedFrontofficeBundle:Notification:listNots.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/Notification/listNots.html.twig");
    }
}
