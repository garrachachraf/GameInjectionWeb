<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_819f39b0ee04869516fd40b60ef3c7a9157d90834fbbb0f6addd9388d8adb7ac extends Twig_Template
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
        $__internal_edbdf34c6a62aafd2c50f5b60760289f511c83b54d713327876d3c199f423473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbdf34c6a62aafd2c50f5b60760289f511c83b54d713327876d3c199f423473->enter($__internal_edbdf34c6a62aafd2c50f5b60760289f511c83b54d713327876d3c199f423473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cfd9923960a4c69b8bff3f25064cda65b25a2c698c51cd8d0d0ea508bcabaad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd9923960a4c69b8bff3f25064cda65b25a2c698c51cd8d0d0ea508bcabaad2->enter($__internal_cfd9923960a4c69b8bff3f25064cda65b25a2c698c51cd8d0d0ea508bcabaad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_edbdf34c6a62aafd2c50f5b60760289f511c83b54d713327876d3c199f423473->leave($__internal_edbdf34c6a62aafd2c50f5b60760289f511c83b54d713327876d3c199f423473_prof);

        
        $__internal_cfd9923960a4c69b8bff3f25064cda65b25a2c698c51cd8d0d0ea508bcabaad2->leave($__internal_cfd9923960a4c69b8bff3f25064cda65b25a2c698c51cd8d0d0ea508bcabaad2_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
