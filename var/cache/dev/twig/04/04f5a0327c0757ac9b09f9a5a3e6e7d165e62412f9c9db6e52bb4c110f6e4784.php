<?php

/* @EloboostedFrontoffice/Notification/listNots.html.twig */
class __TwigTemplate_ecf3a22cdeea44e255f2bf6e12b4717e639905ebe35958f00212342471220ad0 extends Twig_Template
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
        $__internal_5d7d19288de5ed69c551b0e99ef651a9fcafa9b7801e1af1f6a7bd265657157b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7d19288de5ed69c551b0e99ef651a9fcafa9b7801e1af1f6a7bd265657157b->enter($__internal_5d7d19288de5ed69c551b0e99ef651a9fcafa9b7801e1af1f6a7bd265657157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Notification/listNots.html.twig"));

        $__internal_bec0cf49913f4c7351cc296988527005ea78efe2a7425fd41ac311b022e8dc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec0cf49913f4c7351cc296988527005ea78efe2a7425fd41ac311b022e8dc43->enter($__internal_bec0cf49913f4c7351cc296988527005ea78efe2a7425fd41ac311b022e8dc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/Notification/listNots.html.twig"));

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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))), "html", null, true);
        echo " </span></a>

<ul  class=\"dropdown-menu\">
    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 78
            echo "        ";
            if (((($this->getAttribute($context["notification"], "forum", array()) != null) && ($this->getAttribute($context["notification"], "message", array()) == null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 79
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($context["notification"], "forum", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if (((($this->getAttribute($context["notification"], "forum", array()) == null) && ($this->getAttribute($context["notification"], "message", array()) != null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 83
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myInbox");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 85
            echo "
        ";
            // line 86
            if (($this->getAttribute($context["notification"], "invite", array()) != null)) {
                // line 87
                echo "            <li> <a>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a>
                <button type=\"button\" onclick=\"accept(";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "idNotification", array()), "html", null, true);
                echo ")\" class=\"btn btn-success btn-xs\">Accept</button>
                <button type=\"button\" onclick=\"refuse(";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "idNotification", array()), "html", null, true);
                echo ")\"  class=\"btn btn-success btn-xs\">Refuse</button>
            </li>
        ";
            }
            // line 92
            echo "
        ";
            // line 93
            if (((($this->getAttribute($context["notification"], "forum", array()) == null) && ($this->getAttribute($context["notification"], "message", array()) == null)) && ($this->getAttribute($context["notification"], "invite", array()) == null))) {
                // line 94
                echo "            <li><a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "contenu", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5d7d19288de5ed69c551b0e99ef651a9fcafa9b7801e1af1f6a7bd265657157b->leave($__internal_5d7d19288de5ed69c551b0e99ef651a9fcafa9b7801e1af1f6a7bd265657157b_prof);

        
        $__internal_bec0cf49913f4c7351cc296988527005ea78efe2a7425fd41ac311b022e8dc43->leave($__internal_bec0cf49913f4c7351cc296988527005ea78efe2a7425fd41ac311b022e8dc43_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/Notification/listNots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 96,  182 => 94,  180 => 93,  177 => 92,  171 => 89,  167 => 88,  162 => 87,  160 => 86,  157 => 85,  149 => 83,  147 => 82,  144 => 81,  136 => 79,  133 => 78,  129 => 77,  123 => 74,  103 => 57,  77 => 34,  66 => 25,  64 => 23,  60 => 20,  57 => 18,  54 => 16,  52 => 15,  49 => 13,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  25 => 1,);
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
        {% if notification.forum != null and notification.message == null and notification.invite == null  %}
            <li><a href=\"{{ path('readPost',{idPost : notification.forum}) }}\">{{ notification.contenu }}</a></li>
        {% endif %}

        {% if notification.forum == null and notification.message != null and notification.invite == null  %}
            <li><a href=\"{{ path('myInbox') }}\">{{ notification.contenu }}</a></li>
        {% endif %}

        {% if notification.invite != null %}
            <li> <a>{{ notification.contenu }}</a>
                <button type=\"button\" onclick=\"accept({{ notification.idNotification }})\" class=\"btn btn-success btn-xs\">Accept</button>
                <button type=\"button\" onclick=\"refuse({{ notification.idNotification }})\"  class=\"btn btn-success btn-xs\">Refuse</button>
            </li>
        {% endif %}

        {% if (notification.forum == null and notification.message == null and notification.invite == null  )   %}
            <li><a href=\"#\">{{ notification.contenu }}</a></li>
        {% endif %}
    {% endfor %}
", "@EloboostedFrontoffice/Notification/listNots.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\Notification\\listNots.html.twig");
    }
}
