<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_f2f8276b60908556b0b3e558289f39b890031c9334f67044cfcc6f840093d352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f8276b60908556b0b3e558289f39b890031c9334f67044cfcc6f840093d352->enter($__internal_f2f8276b60908556b0b3e558289f39b890031c9334f67044cfcc6f840093d352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_58e23a8711429b05515c2a8d645fd3ec7b5a46763b1bba1ad1a85f61b54fe574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e23a8711429b05515c2a8d645fd3ec7b5a46763b1bba1ad1a85f61b54fe574->enter($__internal_58e23a8711429b05515c2a8d645fd3ec7b5a46763b1bba1ad1a85f61b54fe574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f2f8276b60908556b0b3e558289f39b890031c9334f67044cfcc6f840093d352->leave($__internal_f2f8276b60908556b0b3e558289f39b890031c9334f67044cfcc6f840093d352_prof);

        
        $__internal_58e23a8711429b05515c2a8d645fd3ec7b5a46763b1bba1ad1a85f61b54fe574->leave($__internal_58e23a8711429b05515c2a8d645fd3ec7b5a46763b1bba1ad1a85f61b54fe574_prof);

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
", "@Framework/Form/money_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
