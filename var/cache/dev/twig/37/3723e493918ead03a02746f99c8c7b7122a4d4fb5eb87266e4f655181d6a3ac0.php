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
        $__internal_a8b8b8f70e6612b822911dc757fefedcef94fb6efa29a589d42b41f365ce7e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b8b8f70e6612b822911dc757fefedcef94fb6efa29a589d42b41f365ce7e69->enter($__internal_a8b8b8f70e6612b822911dc757fefedcef94fb6efa29a589d42b41f365ce7e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b2a4e718cc0d0bdee6b73e2b963bcc1d2b3bb46b37993be42f57fdeadf230c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a4e718cc0d0bdee6b73e2b963bcc1d2b3bb46b37993be42f57fdeadf230c3d->enter($__internal_b2a4e718cc0d0bdee6b73e2b963bcc1d2b3bb46b37993be42f57fdeadf230c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a8b8b8f70e6612b822911dc757fefedcef94fb6efa29a589d42b41f365ce7e69->leave($__internal_a8b8b8f70e6612b822911dc757fefedcef94fb6efa29a589d42b41f365ce7e69_prof);

        
        $__internal_b2a4e718cc0d0bdee6b73e2b963bcc1d2b3bb46b37993be42f57fdeadf230c3d->leave($__internal_b2a4e718cc0d0bdee6b73e2b963bcc1d2b3bb46b37993be42f57fdeadf230c3d_prof);

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
