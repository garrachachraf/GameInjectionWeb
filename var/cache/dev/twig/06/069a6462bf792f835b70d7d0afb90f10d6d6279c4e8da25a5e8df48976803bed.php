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
        $__internal_882a6af44ee31b6d42bada803d158209c6fb29ce9c63c3f28501551137bc0c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882a6af44ee31b6d42bada803d158209c6fb29ce9c63c3f28501551137bc0c00->enter($__internal_882a6af44ee31b6d42bada803d158209c6fb29ce9c63c3f28501551137bc0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9231e367fb1ad995ab322228ccb19dc54e592efba191d05cd647ca7eea0bb232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9231e367fb1ad995ab322228ccb19dc54e592efba191d05cd647ca7eea0bb232->enter($__internal_9231e367fb1ad995ab322228ccb19dc54e592efba191d05cd647ca7eea0bb232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_882a6af44ee31b6d42bada803d158209c6fb29ce9c63c3f28501551137bc0c00->leave($__internal_882a6af44ee31b6d42bada803d158209c6fb29ce9c63c3f28501551137bc0c00_prof);

        
        $__internal_9231e367fb1ad995ab322228ccb19dc54e592efba191d05cd647ca7eea0bb232->leave($__internal_9231e367fb1ad995ab322228ccb19dc54e592efba191d05cd647ca7eea0bb232_prof);

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
