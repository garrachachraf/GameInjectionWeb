<?php

/* :games:new.html.twig */
class __TwigTemplate_cc2ecf08d1f13230900c14369f31f77cfb7563320d7c44144d73dd21a56267bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:new.html.twig", 1);
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
        $__internal_793d5d7e5e36607557c55a8076d50fc1e67535030e030baa37f3429240f6ce2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793d5d7e5e36607557c55a8076d50fc1e67535030e030baa37f3429240f6ce2f->enter($__internal_793d5d7e5e36607557c55a8076d50fc1e67535030e030baa37f3429240f6ce2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $__internal_ea25d772c237be69ecd0bb09d9926504a0036b05eba5742561d9de360a3f4d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea25d772c237be69ecd0bb09d9926504a0036b05eba5742561d9de360a3f4d73->enter($__internal_ea25d772c237be69ecd0bb09d9926504a0036b05eba5742561d9de360a3f4d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_793d5d7e5e36607557c55a8076d50fc1e67535030e030baa37f3429240f6ce2f->leave($__internal_793d5d7e5e36607557c55a8076d50fc1e67535030e030baa37f3429240f6ce2f_prof);

        
        $__internal_ea25d772c237be69ecd0bb09d9926504a0036b05eba5742561d9de360a3f4d73->leave($__internal_ea25d772c237be69ecd0bb09d9926504a0036b05eba5742561d9de360a3f4d73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_106ab384aa1bb23b91dd711521030eff40dd13dcb6553407da657230346871a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106ab384aa1bb23b91dd711521030eff40dd13dcb6553407da657230346871a0->enter($__internal_106ab384aa1bb23b91dd711521030eff40dd13dcb6553407da657230346871a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21b5a6005d65e56c24bb9e851909b0cc69478a757493d5dc04c23df8ff8859ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b5a6005d65e56c24bb9e851909b0cc69478a757493d5dc04c23df8ff8859ef->enter($__internal_21b5a6005d65e56c24bb9e851909b0cc69478a757493d5dc04c23df8ff8859ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_21b5a6005d65e56c24bb9e851909b0cc69478a757493d5dc04c23df8ff8859ef->leave($__internal_21b5a6005d65e56c24bb9e851909b0cc69478a757493d5dc04c23df8ff8859ef_prof);

        
        $__internal_106ab384aa1bb23b91dd711521030eff40dd13dcb6553407da657230346871a0->leave($__internal_106ab384aa1bb23b91dd711521030eff40dd13dcb6553407da657230346871a0_prof);

    }

    public function getTemplateName()
    {
        return ":games:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Game creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":games:new.html.twig", "C:\\wamp\\www\\sprintweb\\app/Resources\\views/games/new.html.twig");
    }
}
