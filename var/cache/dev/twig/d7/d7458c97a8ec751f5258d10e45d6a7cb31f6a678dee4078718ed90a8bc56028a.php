<?php

/* EloboostedFrontofficeBundle:participation:show.html.twig */
class __TwigTemplate_30d0551917b4b7fb4f966b752c2e4c6c8d7903805ee2f331adeea7f27bf05306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:show.html.twig", 1);
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
        $__internal_8ecbb53050221da3d0cc7b373f56c7d8fc863d19571a04f264b177154f3fbb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecbb53050221da3d0cc7b373f56c7d8fc863d19571a04f264b177154f3fbb6b->enter($__internal_8ecbb53050221da3d0cc7b373f56c7d8fc863d19571a04f264b177154f3fbb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $__internal_41f7e5ff9da93e6fc51c19fee75e2c6e98f3c877f2a2146d982309f7552dee1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f7e5ff9da93e6fc51c19fee75e2c6e98f3c877f2a2146d982309f7552dee1e->enter($__internal_41f7e5ff9da93e6fc51c19fee75e2c6e98f3c877f2a2146d982309f7552dee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ecbb53050221da3d0cc7b373f56c7d8fc863d19571a04f264b177154f3fbb6b->leave($__internal_8ecbb53050221da3d0cc7b373f56c7d8fc863d19571a04f264b177154f3fbb6b_prof);

        
        $__internal_41f7e5ff9da93e6fc51c19fee75e2c6e98f3c877f2a2146d982309f7552dee1e->leave($__internal_41f7e5ff9da93e6fc51c19fee75e2c6e98f3c877f2a2146d982309f7552dee1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b380f0808b4648feb5e87ebc7834157c432c9a250a6c1471bbc51f8855d19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b380f0808b4648feb5e87ebc7834157c432c9a250a6c1471bbc51f8855d19a->enter($__internal_a1b380f0808b4648feb5e87ebc7834157c432c9a250a6c1471bbc51f8855d19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a634f9f3088d0c89d60f41b6a85be6b72e7e263385010b5961514a2f7a2bea97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a634f9f3088d0c89d60f41b6a85be6b72e7e263385010b5961514a2f7a2bea97->enter($__internal_a634f9f3088d0c89d60f41b6a85be6b72e7e263385010b5961514a2f7a2bea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation</h1>

    <table>
        <tbody>
            <tr>
                <th>Idparticipation</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "idParticipation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Positionwin</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "positionWin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rkey</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "rkey", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_edit", array("id" => $this->getAttribute((isset($context["participation"]) ? $context["participation"] : $this->getContext($context, "participation")), "idParticipation", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a634f9f3088d0c89d60f41b6a85be6b72e7e263385010b5961514a2f7a2bea97->leave($__internal_a634f9f3088d0c89d60f41b6a85be6b72e7e263385010b5961514a2f7a2bea97_prof);

        
        $__internal_a1b380f0808b4648feb5e87ebc7834157c432c9a250a6c1471bbc51f8855d19a->leave($__internal_a1b380f0808b4648feb5e87ebc7834157c432c9a250a6c1471bbc51f8855d19a_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participation</h1>

    <table>
        <tbody>
            <tr>
                <th>Idparticipation</th>
                <td>{{ participation.idParticipation }}</td>
            </tr>
            <tr>
                <th>Positionwin</th>
                <td>{{ participation.positionWin }}</td>
            </tr>
            <tr>
                <th>Rkey</th>
                <td>{{ participation.rkey }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('participation_edit', { 'id': participation.idParticipation }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:show.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/show.html.twig");
    }
}
