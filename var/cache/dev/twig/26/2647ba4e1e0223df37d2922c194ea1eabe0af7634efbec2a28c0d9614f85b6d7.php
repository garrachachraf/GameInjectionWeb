<?php

/* EloboostedFrontofficeBundle:participation:edit.html.twig */
class __TwigTemplate_7b5882f1d333c1221456a2e3683d020464b22090450cc5a2625bd08a968b3698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:edit.html.twig", 1);
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
        $__internal_7a88cab266b72169fd04a5d30515c06d079be00869629868ea91d72bbba7e063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a88cab266b72169fd04a5d30515c06d079be00869629868ea91d72bbba7e063->enter($__internal_7a88cab266b72169fd04a5d30515c06d079be00869629868ea91d72bbba7e063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $__internal_4fb16c40dc4b1675572dfed010b416ac36b727c3835ef0b418dad7ee0b1629e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb16c40dc4b1675572dfed010b416ac36b727c3835ef0b418dad7ee0b1629e0->enter($__internal_4fb16c40dc4b1675572dfed010b416ac36b727c3835ef0b418dad7ee0b1629e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a88cab266b72169fd04a5d30515c06d079be00869629868ea91d72bbba7e063->leave($__internal_7a88cab266b72169fd04a5d30515c06d079be00869629868ea91d72bbba7e063_prof);

        
        $__internal_4fb16c40dc4b1675572dfed010b416ac36b727c3835ef0b418dad7ee0b1629e0->leave($__internal_4fb16c40dc4b1675572dfed010b416ac36b727c3835ef0b418dad7ee0b1629e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9581f36bdffb3664d889c151cf0b4d778db68b6ccb10dbd4c804c6f61dd93bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9581f36bdffb3664d889c151cf0b4d778db68b6ccb10dbd4c804c6f61dd93bbb->enter($__internal_9581f36bdffb3664d889c151cf0b4d778db68b6ccb10dbd4c804c6f61dd93bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acfc10f67ba4139080e9e5332cb7c571dbd4eac35cbdf5ce1005a1429d102550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfc10f67ba4139080e9e5332cb7c571dbd4eac35cbdf5ce1005a1429d102550->enter($__internal_acfc10f67ba4139080e9e5332cb7c571dbd4eac35cbdf5ce1005a1429d102550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_acfc10f67ba4139080e9e5332cb7c571dbd4eac35cbdf5ce1005a1429d102550->leave($__internal_acfc10f67ba4139080e9e5332cb7c571dbd4eac35cbdf5ce1005a1429d102550_prof);

        
        $__internal_9581f36bdffb3664d889c151cf0b4d778db68b6ccb10dbd4c804c6f61dd93bbb->leave($__internal_9581f36bdffb3664d889c151cf0b4d778db68b6ccb10dbd4c804c6f61dd93bbb_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/edit.html.twig");
    }
}
