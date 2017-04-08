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
        $__internal_bb6e1da7892433746d071f457246ef1c87e78eeca886bfa61c760616795dd8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6e1da7892433746d071f457246ef1c87e78eeca886bfa61c760616795dd8c0->enter($__internal_bb6e1da7892433746d071f457246ef1c87e78eeca886bfa61c760616795dd8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5a31d7ed8aad4f35e347919b13dcd1b1d4a5eda8f533f72aadb7676a1bf0a5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a31d7ed8aad4f35e347919b13dcd1b1d4a5eda8f533f72aadb7676a1bf0a5af->enter($__internal_5a31d7ed8aad4f35e347919b13dcd1b1d4a5eda8f533f72aadb7676a1bf0a5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bb6e1da7892433746d071f457246ef1c87e78eeca886bfa61c760616795dd8c0->leave($__internal_bb6e1da7892433746d071f457246ef1c87e78eeca886bfa61c760616795dd8c0_prof);

        
        $__internal_5a31d7ed8aad4f35e347919b13dcd1b1d4a5eda8f533f72aadb7676a1bf0a5af->leave($__internal_5a31d7ed8aad4f35e347919b13dcd1b1d4a5eda8f533f72aadb7676a1bf0a5af_prof);

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
