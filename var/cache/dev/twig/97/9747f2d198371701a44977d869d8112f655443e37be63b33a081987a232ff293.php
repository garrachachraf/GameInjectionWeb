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
        $__internal_532463515043b37983a9c1040fb6c7efff3b3e8ca94c9cce3020ce85adeab362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532463515043b37983a9c1040fb6c7efff3b3e8ca94c9cce3020ce85adeab362->enter($__internal_532463515043b37983a9c1040fb6c7efff3b3e8ca94c9cce3020ce85adeab362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e5e0afd61ecd059ab16d3c9eba4f5386fc732313213964d3a565c084f503ecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e0afd61ecd059ab16d3c9eba4f5386fc732313213964d3a565c084f503ecb7->enter($__internal_e5e0afd61ecd059ab16d3c9eba4f5386fc732313213964d3a565c084f503ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_532463515043b37983a9c1040fb6c7efff3b3e8ca94c9cce3020ce85adeab362->leave($__internal_532463515043b37983a9c1040fb6c7efff3b3e8ca94c9cce3020ce85adeab362_prof);

        
        $__internal_e5e0afd61ecd059ab16d3c9eba4f5386fc732313213964d3a565c084f503ecb7->leave($__internal_e5e0afd61ecd059ab16d3c9eba4f5386fc732313213964d3a565c084f503ecb7_prof);

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
