<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e6617dfa02c82f86a155124985b05dd0b397f623b6008c13a82f43560c4326a1 extends Twig_Template
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
        $__internal_bf59025f01c1b5998f9f937e95f357709e33f3f64bf9775fb0b8a2734a6fbd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf59025f01c1b5998f9f937e95f357709e33f3f64bf9775fb0b8a2734a6fbd86->enter($__internal_bf59025f01c1b5998f9f937e95f357709e33f3f64bf9775fb0b8a2734a6fbd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_35da901efaae0ee50334bad6d25e61b645b8a25b7b0c499710e0693c69cefdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35da901efaae0ee50334bad6d25e61b645b8a25b7b0c499710e0693c69cefdfe->enter($__internal_35da901efaae0ee50334bad6d25e61b645b8a25b7b0c499710e0693c69cefdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf59025f01c1b5998f9f937e95f357709e33f3f64bf9775fb0b8a2734a6fbd86->leave($__internal_bf59025f01c1b5998f9f937e95f357709e33f3f64bf9775fb0b8a2734a6fbd86_prof);

        
        $__internal_35da901efaae0ee50334bad6d25e61b645b8a25b7b0c499710e0693c69cefdfe->leave($__internal_35da901efaae0ee50334bad6d25e61b645b8a25b7b0c499710e0693c69cefdfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
