<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_570146b752851f151a8651c9a1c7b00f1ce5e120bd9df712647804556f81d50c extends Twig_Template
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
        $__internal_b7b63947e5dcd692e9a257a06eb518f6c1469c75394d2d93ae9c8a04172aee6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b63947e5dcd692e9a257a06eb518f6c1469c75394d2d93ae9c8a04172aee6e->enter($__internal_b7b63947e5dcd692e9a257a06eb518f6c1469c75394d2d93ae9c8a04172aee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bd713c2703cc1f13a3f17f206d1dd3454e0f68d803ec64aa192e7c809dd54c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd713c2703cc1f13a3f17f206d1dd3454e0f68d803ec64aa192e7c809dd54c95->enter($__internal_bd713c2703cc1f13a3f17f206d1dd3454e0f68d803ec64aa192e7c809dd54c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b7b63947e5dcd692e9a257a06eb518f6c1469c75394d2d93ae9c8a04172aee6e->leave($__internal_b7b63947e5dcd692e9a257a06eb518f6c1469c75394d2d93ae9c8a04172aee6e_prof);

        
        $__internal_bd713c2703cc1f13a3f17f206d1dd3454e0f68d803ec64aa192e7c809dd54c95->leave($__internal_bd713c2703cc1f13a3f17f206d1dd3454e0f68d803ec64aa192e7c809dd54c95_prof);

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
