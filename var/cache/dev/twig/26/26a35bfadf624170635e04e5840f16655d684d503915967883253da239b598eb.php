<?php

/* EloboostedFrontofficeBundle:games:searchGames.html.twig */
class __TwigTemplate_d3cef898ef1b60e4591b02449d45fd7b92ba758766cfe6b6c2658a3b1b0e07f5 extends Twig_Template
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
        $__internal_96bed3c196f652c2a6a0766295313f9b3f9582f79ce7be776f834d55f0689ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96bed3c196f652c2a6a0766295313f9b3f9582f79ce7be776f834d55f0689ae3->enter($__internal_96bed3c196f652c2a6a0766295313f9b3f9582f79ce7be776f834d55f0689ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:searchGames.html.twig"));

        $__internal_197829acb3797ccf5203b175a3443951a385f4dff719d8eec060594961a60832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197829acb3797ccf5203b175a3443951a385f4dff719d8eec060594961a60832->enter($__internal_197829acb3797ccf5203b175a3443951a385f4dff719d8eec060594961a60832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:searchGames.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 3
            echo "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"card\">
            <div class=\"card-img\">

                <a href= \"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\" >
                    <img src=\"data:image/png;base64,";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "imageGames", array()), "html", null, true);
            echo "\" style=\"height: 365px\" alt=\"\"></a>

                <div class=\"category\"><span class=\"label label-success\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "supported", array()), "html", null, true);
            echo "</span></div>
                <div class=\"meta\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
            </div>
            <div class=\"caption\">
                <h3 class=\"card-title\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "nomGames", array()), "html", null, true);
            echo "</a></h3>
                <ul><li>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "idCathegorieg", array()), "nom", array()), "html", null, true);
            echo "</li></ul>
                <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "description", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_96bed3c196f652c2a6a0766295313f9b3f9582f79ce7be776f834d55f0689ae3->leave($__internal_96bed3c196f652c2a6a0766295313f9b3f9582f79ce7be776f834d55f0689ae3_prof);

        
        $__internal_197829acb3797ccf5203b175a3443951a385f4dff719d8eec060594961a60832->leave($__internal_197829acb3797ccf5203b175a3443951a385f4dff719d8eec060594961a60832_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:searchGames.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 16,  58 => 15,  52 => 12,  48 => 11,  43 => 9,  39 => 8,  32 => 3,  28 => 2,  25 => 1,);
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
{% for game in games %}

    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"card\">
            <div class=\"card-img\">

                <a href= \"{{ path('yes_show',{ 'id':game.idGames  }) }}\" >
                    <img src=\"data:image/png;base64,{{ game.imageGames  }}\" style=\"height: 365px\" alt=\"\"></a>

                <div class=\"category\"><span class=\"label label-success\">{{ game.supported }}</span></div>
                <div class=\"meta\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
            </div>
            <div class=\"caption\">
                <h3 class=\"card-title\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\">{{ game.nomGames }}</a></h3>
                <ul><li>{{ game.idCathegorieg.nom }}</li></ul>
                <p>{{ game.description }}</p>
            </div>
        </div>
    </div>
{% endfor %}
", "EloboostedFrontofficeBundle:games:searchGames.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/games/searchGames.html.twig");
    }
}
