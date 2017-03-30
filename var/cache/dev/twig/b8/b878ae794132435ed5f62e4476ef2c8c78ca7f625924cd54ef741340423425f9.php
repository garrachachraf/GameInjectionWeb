<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4cc805bd5ef02c77ba08c640e091a923bb68fd1f73a38e9c3ff2357edd8c8ae0 extends Twig_Template
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
        $__internal_28f3f212c86f72e454262f65069d0add3f7fd0d170fd9f0b1c66e6fe06a217ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f3f212c86f72e454262f65069d0add3f7fd0d170fd9f0b1c66e6fe06a217ba->enter($__internal_28f3f212c86f72e454262f65069d0add3f7fd0d170fd9f0b1c66e6fe06a217ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7cd0e39f54096e63f9c5581b4a23caee28a41f9d199ea777ca286139f98c7e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd0e39f54096e63f9c5581b4a23caee28a41f9d199ea777ca286139f98c7e47->enter($__internal_7cd0e39f54096e63f9c5581b4a23caee28a41f9d199ea777ca286139f98c7e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_28f3f212c86f72e454262f65069d0add3f7fd0d170fd9f0b1c66e6fe06a217ba->leave($__internal_28f3f212c86f72e454262f65069d0add3f7fd0d170fd9f0b1c66e6fe06a217ba_prof);

        
        $__internal_7cd0e39f54096e63f9c5581b4a23caee28a41f9d199ea777ca286139f98c7e47->leave($__internal_7cd0e39f54096e63f9c5581b4a23caee28a41f9d199ea777ca286139f98c7e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
