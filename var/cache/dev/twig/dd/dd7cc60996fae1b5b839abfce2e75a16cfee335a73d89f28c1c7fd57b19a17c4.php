<?php

/* @EloboostedFrontoffice/tournoi/edit.html.twig */
class __TwigTemplate_205fa2e8a926da868b8eb8b4784813ad8db27178a1233313dea872e509bd22b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/tournoi/edit.html.twig", 1);
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
        $__internal_1b8708e273d88def01415236295afda7c987a1bffb4c505bf5115daebd99db1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8708e273d88def01415236295afda7c987a1bffb4c505bf5115daebd99db1c->enter($__internal_1b8708e273d88def01415236295afda7c987a1bffb4c505bf5115daebd99db1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $__internal_224d9deec6de4c67bb65188e73b6d326aee7b14b0b07747300385526c4630c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224d9deec6de4c67bb65188e73b6d326aee7b14b0b07747300385526c4630c16->enter($__internal_224d9deec6de4c67bb65188e73b6d326aee7b14b0b07747300385526c4630c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8708e273d88def01415236295afda7c987a1bffb4c505bf5115daebd99db1c->leave($__internal_1b8708e273d88def01415236295afda7c987a1bffb4c505bf5115daebd99db1c_prof);

        
        $__internal_224d9deec6de4c67bb65188e73b6d326aee7b14b0b07747300385526c4630c16->leave($__internal_224d9deec6de4c67bb65188e73b6d326aee7b14b0b07747300385526c4630c16_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_54e56d826b752b22747fe3bcd9024e79eebd56bde5a7c05b0b7502cda695dda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e56d826b752b22747fe3bcd9024e79eebd56bde5a7c05b0b7502cda695dda2->enter($__internal_54e56d826b752b22747fe3bcd9024e79eebd56bde5a7c05b0b7502cda695dda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4bda8660ea5f2fe6ba253e685688d8f6a24207065c5aa35db24f581365247944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bda8660ea5f2fe6ba253e685688d8f6a24207065c5aa35db24f581365247944->enter($__internal_4bda8660ea5f2fe6ba253e685688d8f6a24207065c5aa35db24f581365247944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Tournoi edit</h1>
    ";
        // line 5
        if ( !(null === (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4bda8660ea5f2fe6ba253e685688d8f6a24207065c5aa35db24f581365247944->leave($__internal_4bda8660ea5f2fe6ba253e685688d8f6a24207065c5aa35db24f581365247944_prof);

        
        $__internal_54e56d826b752b22747fe3bcd9024e79eebd56bde5a7c05b0b7502cda695dda2->leave($__internal_54e56d826b752b22747fe3bcd9024e79eebd56bde5a7c05b0b7502cda695dda2_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tournoi/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 20,  79 => 17,  72 => 13,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tournoi edit</h1>
    {% if erreur is not null %}
    {{ erreur }}
    {% endif %}
    {{ form_start(edit_form) }}

        {{ form_widget(edit_form) }}

        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/tournoi/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tournoi\\edit.html.twig");
    }
}
