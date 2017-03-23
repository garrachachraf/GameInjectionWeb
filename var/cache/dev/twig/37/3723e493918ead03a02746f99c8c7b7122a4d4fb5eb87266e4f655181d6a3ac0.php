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
        $__internal_afb6abfe2a3f4516d3bb0287447e74146fde0afe25f8c86c6b5b0255c61177cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb6abfe2a3f4516d3bb0287447e74146fde0afe25f8c86c6b5b0255c61177cd->enter($__internal_afb6abfe2a3f4516d3bb0287447e74146fde0afe25f8c86c6b5b0255c61177cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d1c139ed38fd4b2fcabc245de644e3ba997c19ff4214eb1be176757f2528b7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c139ed38fd4b2fcabc245de644e3ba997c19ff4214eb1be176757f2528b7ff->enter($__internal_d1c139ed38fd4b2fcabc245de644e3ba997c19ff4214eb1be176757f2528b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_afb6abfe2a3f4516d3bb0287447e74146fde0afe25f8c86c6b5b0255c61177cd->leave($__internal_afb6abfe2a3f4516d3bb0287447e74146fde0afe25f8c86c6b5b0255c61177cd_prof);

        
        $__internal_d1c139ed38fd4b2fcabc245de644e3ba997c19ff4214eb1be176757f2528b7ff->leave($__internal_d1c139ed38fd4b2fcabc245de644e3ba997c19ff4214eb1be176757f2528b7ff_prof);

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
