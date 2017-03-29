<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd73fd6e7315c51a88286dd640f0e589b10c7c52cae7dc713be9406e064ac837 extends Twig_Template
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
        $__internal_18732195deae945936d4b6ca72f244d5c8675757b894a4bae8361c73b6319b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18732195deae945936d4b6ca72f244d5c8675757b894a4bae8361c73b6319b8d->enter($__internal_18732195deae945936d4b6ca72f244d5c8675757b894a4bae8361c73b6319b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f02a2cd1b44a047b0b84f946a76f392cbf08326ae10d7bbc8e928917c141e830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02a2cd1b44a047b0b84f946a76f392cbf08326ae10d7bbc8e928917c141e830->enter($__internal_f02a2cd1b44a047b0b84f946a76f392cbf08326ae10d7bbc8e928917c141e830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_18732195deae945936d4b6ca72f244d5c8675757b894a4bae8361c73b6319b8d->leave($__internal_18732195deae945936d4b6ca72f244d5c8675757b894a4bae8361c73b6319b8d_prof);

        
        $__internal_f02a2cd1b44a047b0b84f946a76f392cbf08326ae10d7bbc8e928917c141e830->leave($__internal_f02a2cd1b44a047b0b84f946a76f392cbf08326ae10d7bbc8e928917c141e830_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
