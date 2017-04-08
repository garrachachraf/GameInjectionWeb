<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_261bdc7354c7c2e61d2f9fc27f47f802b4c50bfcdab6231007763709844bac9c extends Twig_Template
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
        $__internal_7d8a27b692918717d2b45658d7f0ca3846a20cec9f7c7b86e8500ad66f74bf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8a27b692918717d2b45658d7f0ca3846a20cec9f7c7b86e8500ad66f74bf59->enter($__internal_7d8a27b692918717d2b45658d7f0ca3846a20cec9f7c7b86e8500ad66f74bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d1ce9b37d0ee15a3d762385384490dedea194526b5063c9b093af13eb871c04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ce9b37d0ee15a3d762385384490dedea194526b5063c9b093af13eb871c04f->enter($__internal_d1ce9b37d0ee15a3d762385384490dedea194526b5063c9b093af13eb871c04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7d8a27b692918717d2b45658d7f0ca3846a20cec9f7c7b86e8500ad66f74bf59->leave($__internal_7d8a27b692918717d2b45658d7f0ca3846a20cec9f7c7b86e8500ad66f74bf59_prof);

        
        $__internal_d1ce9b37d0ee15a3d762385384490dedea194526b5063c9b093af13eb871c04f->leave($__internal_d1ce9b37d0ee15a3d762385384490dedea194526b5063c9b093af13eb871c04f_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
