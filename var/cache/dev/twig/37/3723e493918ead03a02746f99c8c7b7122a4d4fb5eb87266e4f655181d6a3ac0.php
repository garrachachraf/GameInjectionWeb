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
        $__internal_6cc8974e10b32fe34ac013ed25df1e7025ef5e8bdbbe470f5c8e55af02e0e244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc8974e10b32fe34ac013ed25df1e7025ef5e8bdbbe470f5c8e55af02e0e244->enter($__internal_6cc8974e10b32fe34ac013ed25df1e7025ef5e8bdbbe470f5c8e55af02e0e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_519d76c863855ea37cad2858e6674857f4a5a2c436a4cf7c2113c8cc8ec539cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519d76c863855ea37cad2858e6674857f4a5a2c436a4cf7c2113c8cc8ec539cc->enter($__internal_519d76c863855ea37cad2858e6674857f4a5a2c436a4cf7c2113c8cc8ec539cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6cc8974e10b32fe34ac013ed25df1e7025ef5e8bdbbe470f5c8e55af02e0e244->leave($__internal_6cc8974e10b32fe34ac013ed25df1e7025ef5e8bdbbe470f5c8e55af02e0e244_prof);

        
        $__internal_519d76c863855ea37cad2858e6674857f4a5a2c436a4cf7c2113c8cc8ec539cc->leave($__internal_519d76c863855ea37cad2858e6674857f4a5a2c436a4cf7c2113c8cc8ec539cc_prof);

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
