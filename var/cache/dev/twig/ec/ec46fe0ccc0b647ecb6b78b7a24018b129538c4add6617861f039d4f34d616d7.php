<?php

/* @EloboostedFrontoffice/participation/index.html.twig */
class __TwigTemplate_cbd4ac040030f541be1dd05eb8110045dfc0fdf766d6a63385634210033ce004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85be40e8d02dffb11ece4d146824d13e35015f37fc31a1289f82535cab2dc827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85be40e8d02dffb11ece4d146824d13e35015f37fc31a1289f82535cab2dc827->enter($__internal_85be40e8d02dffb11ece4d146824d13e35015f37fc31a1289f82535cab2dc827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/index.html.twig"));

        $__internal_994aa6b769c2ae1de354cb662f467eba66fc96092401ff7962507205012dd2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994aa6b769c2ae1de354cb662f467eba66fc96092401ff7962507205012dd2fb->enter($__internal_994aa6b769c2ae1de354cb662f467eba66fc96092401ff7962507205012dd2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85be40e8d02dffb11ece4d146824d13e35015f37fc31a1289f82535cab2dc827->leave($__internal_85be40e8d02dffb11ece4d146824d13e35015f37fc31a1289f82535cab2dc827_prof);

        
        $__internal_994aa6b769c2ae1de354cb662f467eba66fc96092401ff7962507205012dd2fb->leave($__internal_994aa6b769c2ae1de354cb662f467eba66fc96092401ff7962507205012dd2fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4c5360c80e82bbcb84fff0386a594bf1832653a4afef932b71f2d7464386bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c5360c80e82bbcb84fff0386a594bf1832653a4afef932b71f2d7464386bde->enter($__internal_d4c5360c80e82bbcb84fff0386a594bf1832653a4afef932b71f2d7464386bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8844f7b24507aea446a623288900c0af99d42942a8361b783eddb3b8d69237a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8844f7b24507aea446a623288900c0af99d42942a8361b783eddb3b8d69237a->enter($__internal_f8844f7b24507aea446a623288900c0af99d42942a8361b783eddb3b8d69237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idparticipation</th>
                <th>Positionwin</th>
                <th>Rkey</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participations"]) ? $context["participations"] : $this->getContext($context, "participations")));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_show", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "idParticipation", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "positionWin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["participation"], "rkey", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_show", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_edit", array("id" => $this->getAttribute($context["participation"], "idParticipation", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_new");
        echo "\">Create a new participation</a>
        </li>
    </ul>
";
        
        $__internal_f8844f7b24507aea446a623288900c0af99d42942a8361b783eddb3b8d69237a->leave($__internal_f8844f7b24507aea446a623288900c0af99d42942a8361b783eddb3b8d69237a_prof);

        
        $__internal_d4c5360c80e82bbcb84fff0386a594bf1832653a4afef932b71f2d7464386bde->leave($__internal_d4c5360c80e82bbcb84fff0386a594bf1832653a4afef932b71f2d7464386bde_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Participations list</h1>

    <table>
        <thead>
            <tr>
                <th>Idparticipation</th>
                <th>Positionwin</th>
                <th>Rkey</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for participation in participations %}
            <tr>
                <td><a href=\"{{ path('participation_show', { 'id': participation.idParticipation }) }}\">{{ participation.idParticipation }}</a></td>
                <td>{{ participation.positionWin }}</td>
                <td>{{ participation.rkey }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('participation_show', { 'id': participation.idParticipation }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('participation_edit', { 'id': participation.idParticipation }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('participation_new') }}\">Create a new participation</a>
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/participation/index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\index.html.twig");
    }
}
