<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_07d6ca50db1b4c8469dc6487ca3087f0e79ba7249e1ebbcf4153b7de1ba68463 extends Twig_Template
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
        $__internal_ab00f3a111aaff3ca3ff908cfe968c54e8707dd21c828424a3e8190c80902180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab00f3a111aaff3ca3ff908cfe968c54e8707dd21c828424a3e8190c80902180->enter($__internal_ab00f3a111aaff3ca3ff908cfe968c54e8707dd21c828424a3e8190c80902180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_695c717c17985ee617e9f3ac9f44e9a50fd969a6dcc56c990a77bed511781aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695c717c17985ee617e9f3ac9f44e9a50fd969a6dcc56c990a77bed511781aa3->enter($__internal_695c717c17985ee617e9f3ac9f44e9a50fd969a6dcc56c990a77bed511781aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ab00f3a111aaff3ca3ff908cfe968c54e8707dd21c828424a3e8190c80902180->leave($__internal_ab00f3a111aaff3ca3ff908cfe968c54e8707dd21c828424a3e8190c80902180_prof);

        
        $__internal_695c717c17985ee617e9f3ac9f44e9a50fd969a6dcc56c990a77bed511781aa3->leave($__internal_695c717c17985ee617e9f3ac9f44e9a50fd969a6dcc56c990a77bed511781aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
