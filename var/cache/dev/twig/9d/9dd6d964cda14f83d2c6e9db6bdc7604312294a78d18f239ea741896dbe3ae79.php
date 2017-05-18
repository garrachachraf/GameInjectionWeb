<?php

/* EloboostedFrontofficeBundle:participation:winners.html.twig */
class __TwigTemplate_ea7be929ab6a021f181eecfdd5576ea0765f47c4acd71d1330544075cfa28402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:participation:winners.html.twig", 1);
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
        $__internal_921dcc6c2d38091e29263928d7483732171a2bc4d02bf7cf158e9a99dd1424cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921dcc6c2d38091e29263928d7483732171a2bc4d02bf7cf158e9a99dd1424cf->enter($__internal_921dcc6c2d38091e29263928d7483732171a2bc4d02bf7cf158e9a99dd1424cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:winners.html.twig"));

        $__internal_7d092d37e83aa7dec5b7b974272b50291b8cfe64584902d97a65e162460d5207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d092d37e83aa7dec5b7b974272b50291b8cfe64584902d97a65e162460d5207->enter($__internal_7d092d37e83aa7dec5b7b974272b50291b8cfe64584902d97a65e162460d5207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:winners.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921dcc6c2d38091e29263928d7483732171a2bc4d02bf7cf158e9a99dd1424cf->leave($__internal_921dcc6c2d38091e29263928d7483732171a2bc4d02bf7cf158e9a99dd1424cf_prof);

        
        $__internal_7d092d37e83aa7dec5b7b974272b50291b8cfe64584902d97a65e162460d5207->leave($__internal_7d092d37e83aa7dec5b7b974272b50291b8cfe64584902d97a65e162460d5207_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_8ef25e90da3db9373f22ff0698588cbd390a047d5e5beb8abc0bf5333db9f31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef25e90da3db9373f22ff0698588cbd390a047d5e5beb8abc0bf5333db9f31c->enter($__internal_8ef25e90da3db9373f22ff0698588cbd390a047d5e5beb8abc0bf5333db9f31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a7bbd32d748afb20a12d27ed77c1aafe1c205f65ecbf8d198fb71b3a8cb93503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bbd32d748afb20a12d27ed77c1aafe1c205f65ecbf8d198fb71b3a8cb93503->enter($__internal_a7bbd32d748afb20a12d27ed77c1aafe1c205f65ecbf8d198fb71b3a8cb93503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">

    <div class=\"container\">
        <script>
            function checkwinners() {
                var win1 = document.getElementById('winner1').value;
                var win2 = document.getElementById('winner2').value;
                var win3 = document.getElementById('winner3').value;

                if (win1 == win2)
                {
                    return false;
                }
                if (win3 == win2)
                {
                    return false;
                }
                if (win1 == win3)
                {
                    return false;
                }

                return true ;

            }
        </script>

    <div class=\"row\">
        <div class=\"col-md-7 col-md-offset-2\">
            <div class=\"title\">
            <h3> Select Winners</h3>
            <p></p>
    </div>
            <div class=\"panel panel-default padding-20\">
                <form method=\"post\" onsubmit=\"return checkwinners()\">
                <div class=\"form-group\">
                    <label for=\"winner1\">winner1</label> <select id=\"winner1\" name=\"winner1\" class=\"select2-dropdown form-control input-md\">
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participations"] ?? $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idParticipation", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idComptePart", array()), "pseudo", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"winner2\">winner2</label> <select id=\"winner2\" name=\"winner2\" class=\"select2-dropdown form-control input-md\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participations"] ?? $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 48
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idParticipation", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idComptePart", array()), "pseudo", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"winner3\">winner3</label> <select id=\"winner3\" name=\"winner3\" class=\"select2-dropdown form-control input-md\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participations"] ?? $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 55
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idParticipation", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "idComptePart", array()), "pseudo", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                    </select>
                </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Set winners\" >
                    </div>
                </form>

     </div>
        </div>
    </div>
    </div>
    </section>
";
        
        $__internal_a7bbd32d748afb20a12d27ed77c1aafe1c205f65ecbf8d198fb71b3a8cb93503->leave($__internal_a7bbd32d748afb20a12d27ed77c1aafe1c205f65ecbf8d198fb71b3a8cb93503_prof);

        
        $__internal_8ef25e90da3db9373f22ff0698588cbd390a047d5e5beb8abc0bf5333db9f31c->leave($__internal_8ef25e90da3db9373f22ff0698588cbd390a047d5e5beb8abc0bf5333db9f31c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:winners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  134 => 55,  130 => 54,  124 => 50,  113 => 48,  109 => 47,  103 => 43,  92 => 41,  88 => 40,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}
    <section class=\"elements bg-white padding-top-10 padding-bottom-50\">

    <div class=\"container\">
        <script>
            function checkwinners() {
                var win1 = document.getElementById('winner1').value;
                var win2 = document.getElementById('winner2').value;
                var win3 = document.getElementById('winner3').value;

                if (win1 == win2)
                {
                    return false;
                }
                if (win3 == win2)
                {
                    return false;
                }
                if (win1 == win3)
                {
                    return false;
                }

                return true ;

            }
        </script>

    <div class=\"row\">
        <div class=\"col-md-7 col-md-offset-2\">
            <div class=\"title\">
            <h3> Select Winners</h3>
            <p></p>
    </div>
            <div class=\"panel panel-default padding-20\">
                <form method=\"post\" onsubmit=\"return checkwinners()\">
                <div class=\"form-group\">
                    <label for=\"winner1\">winner1</label> <select id=\"winner1\" name=\"winner1\" class=\"select2-dropdown form-control input-md\">
                        {% for p in participations %}
                        <option value=\"{{ p.idParticipation }}\">{{ p.idComptePart.pseudo }}</option>
                            {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"winner2\">winner2</label> <select id=\"winner2\" name=\"winner2\" class=\"select2-dropdown form-control input-md\">
                        {% for p in participations %}
                            <option value=\"{{ p.idParticipation }}\">{{ p.idComptePart.pseudo }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"winner3\">winner3</label> <select id=\"winner3\" name=\"winner3\" class=\"select2-dropdown form-control input-md\">
                        {% for p in participations %}
                            <option value=\"{{ p.idParticipation }}\">{{ p.idComptePart.pseudo }}</option>
                        {% endfor %}

                    </select>
                </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Set winners\" >
                    </div>
                </form>

     </div>
        </div>
    </div>
    </div>
    </section>
{% endblock %}", "EloboostedFrontofficeBundle:participation:winners.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/winners.html.twig");
    }
}
