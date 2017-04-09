<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_83f974dcf643d213d85e247d14da34abf8100c94b34e6f54e7cbe9b4d46262a0 extends Twig_Template
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
        $__internal_a1a0d1550b7c4a8e201b95d592eeb3e69eb512d868643c669fc27510e65c0771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a0d1550b7c4a8e201b95d592eeb3e69eb512d868643c669fc27510e65c0771->enter($__internal_a1a0d1550b7c4a8e201b95d592eeb3e69eb512d868643c669fc27510e65c0771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1828932a9116b5f584d183ecd79fa6c0afdc8af720c0444079618708e9fe3bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1828932a9116b5f584d183ecd79fa6c0afdc8af720c0444079618708e9fe3bcc->enter($__internal_1828932a9116b5f584d183ecd79fa6c0afdc8af720c0444079618708e9fe3bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a1a0d1550b7c4a8e201b95d592eeb3e69eb512d868643c669fc27510e65c0771->leave($__internal_a1a0d1550b7c4a8e201b95d592eeb3e69eb512d868643c669fc27510e65c0771_prof);

        
        $__internal_1828932a9116b5f584d183ecd79fa6c0afdc8af720c0444079618708e9fe3bcc->leave($__internal_1828932a9116b5f584d183ecd79fa6c0afdc8af720c0444079618708e9fe3bcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
