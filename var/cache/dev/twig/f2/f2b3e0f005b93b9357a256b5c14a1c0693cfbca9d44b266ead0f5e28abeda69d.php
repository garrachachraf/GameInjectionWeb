<?php

/* EloboostedFrontofficeBundle:participation:new.html.twig */
class __TwigTemplate_9ab412949aa3c448b6d42bfbc1a374f3fe8345158fc42717827b0be25616e6df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:new.html.twig", 1);
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
        $__internal_8779965a8e8a1760ae7902bf415d949784d778a6a1c5e6e1cf633d7fe725ddd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8779965a8e8a1760ae7902bf415d949784d778a6a1c5e6e1cf633d7fe725ddd7->enter($__internal_8779965a8e8a1760ae7902bf415d949784d778a6a1c5e6e1cf633d7fe725ddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $__internal_7ea0ad7d5b8ef13ddd43acb62796d947d069a24393696483c4e1d7cb2528034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea0ad7d5b8ef13ddd43acb62796d947d069a24393696483c4e1d7cb2528034b->enter($__internal_7ea0ad7d5b8ef13ddd43acb62796d947d069a24393696483c4e1d7cb2528034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8779965a8e8a1760ae7902bf415d949784d778a6a1c5e6e1cf633d7fe725ddd7->leave($__internal_8779965a8e8a1760ae7902bf415d949784d778a6a1c5e6e1cf633d7fe725ddd7_prof);

        
        $__internal_7ea0ad7d5b8ef13ddd43acb62796d947d069a24393696483c4e1d7cb2528034b->leave($__internal_7ea0ad7d5b8ef13ddd43acb62796d947d069a24393696483c4e1d7cb2528034b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35fcc85ad3a808680a5fc83390447e337f9f80eeef5b69244e9cdbfdf0d2506e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fcc85ad3a808680a5fc83390447e337f9f80eeef5b69244e9cdbfdf0d2506e->enter($__internal_35fcc85ad3a808680a5fc83390447e337f9f80eeef5b69244e9cdbfdf0d2506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d84abd234d0d4b2c035eadb1b232b2426851eb6985501943bf7307c2042e1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d84abd234d0d4b2c035eadb1b232b2426851eb6985501943bf7307c2042e1fd->enter($__internal_4d84abd234d0d4b2c035eadb1b232b2426851eb6985501943bf7307c2042e1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4d84abd234d0d4b2c035eadb1b232b2426851eb6985501943bf7307c2042e1fd->leave($__internal_4d84abd234d0d4b2c035eadb1b232b2426851eb6985501943bf7307c2042e1fd_prof);

        
        $__internal_35fcc85ad3a808680a5fc83390447e337f9f80eeef5b69244e9cdbfdf0d2506e->leave($__internal_35fcc85ad3a808680a5fc83390447e337f9f80eeef5b69244e9cdbfdf0d2506e_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:new.html.twig";
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
    <h1>Participation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:new.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/participation/new.html.twig");
    }
}
