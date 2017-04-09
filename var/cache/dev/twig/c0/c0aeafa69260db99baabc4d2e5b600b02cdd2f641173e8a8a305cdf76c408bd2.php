<?php

/* @EloboostedFrontoffice/games/edit.html.twig */
class __TwigTemplate_9f6b223896f3091c559b9972c0cd73ce6a9bd4596b8ea2e85b2b904dd9830a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/games/edit.html.twig", 1);
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
        $__internal_fa970c2111b6ba9e1eb43bd1ee90cb355b27e0e9510cfa570d293aa002488b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa970c2111b6ba9e1eb43bd1ee90cb355b27e0e9510cfa570d293aa002488b3e->enter($__internal_fa970c2111b6ba9e1eb43bd1ee90cb355b27e0e9510cfa570d293aa002488b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $__internal_36a2878fa51dd89f6a33df617c5a96b8d10b991509a18ffc1dc894d666e4eb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a2878fa51dd89f6a33df617c5a96b8d10b991509a18ffc1dc894d666e4eb59->enter($__internal_36a2878fa51dd89f6a33df617c5a96b8d10b991509a18ffc1dc894d666e4eb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa970c2111b6ba9e1eb43bd1ee90cb355b27e0e9510cfa570d293aa002488b3e->leave($__internal_fa970c2111b6ba9e1eb43bd1ee90cb355b27e0e9510cfa570d293aa002488b3e_prof);

        
        $__internal_36a2878fa51dd89f6a33df617c5a96b8d10b991509a18ffc1dc894d666e4eb59->leave($__internal_36a2878fa51dd89f6a33df617c5a96b8d10b991509a18ffc1dc894d666e4eb59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1e8ebbd93c9de08eac8ec9c0156ee39c5f63ecadbdb0df24aab9a49465bfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e8ebbd93c9de08eac8ec9c0156ee39c5f63ecadbdb0df24aab9a49465bfcb->enter($__internal_6b1e8ebbd93c9de08eac8ec9c0156ee39c5f63ecadbdb0df24aab9a49465bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_524cad5bceb257bb486985f40bdff8afbfbaaf23640ab675313a1f4e4dfce6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524cad5bceb257bb486985f40bdff8afbfbaaf23640ab675313a1f4e4dfce6f1->enter($__internal_524cad5bceb257bb486985f40bdff8afbfbaaf23640ab675313a1f4e4dfce6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
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
        
        $__internal_524cad5bceb257bb486985f40bdff8afbfbaaf23640ab675313a1f4e4dfce6f1->leave($__internal_524cad5bceb257bb486985f40bdff8afbfbaaf23640ab675313a1f4e4dfce6f1_prof);

        
        $__internal_6b1e8ebbd93c9de08eac8ec9c0156ee39c5f63ecadbdb0df24aab9a49465bfcb->leave($__internal_6b1e8ebbd93c9de08eac8ec9c0156ee39c5f63ecadbdb0df24aab9a49465bfcb_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/games/edit.html.twig";
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
    <h1>Game edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/games/edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\edit.html.twig");
    }
}
