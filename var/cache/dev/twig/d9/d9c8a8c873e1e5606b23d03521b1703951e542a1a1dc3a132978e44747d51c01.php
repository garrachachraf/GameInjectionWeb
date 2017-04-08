<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b8ee895adc9c16db756f91ca574e47d69e4cd1d845c44eb2662b822a4c3ad47b extends Twig_Template
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
        $__internal_00ead69bc2ab4345901dd6b732f18ca58e2617b14d80c7bb74a959e328e69475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ead69bc2ab4345901dd6b732f18ca58e2617b14d80c7bb74a959e328e69475->enter($__internal_00ead69bc2ab4345901dd6b732f18ca58e2617b14d80c7bb74a959e328e69475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3b97d779d67d57a0744151b8ea066ac63627e59bcac98328f607e6dab6b12cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b97d779d67d57a0744151b8ea066ac63627e59bcac98328f607e6dab6b12cef->enter($__internal_3b97d779d67d57a0744151b8ea066ac63627e59bcac98328f607e6dab6b12cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_00ead69bc2ab4345901dd6b732f18ca58e2617b14d80c7bb74a959e328e69475->leave($__internal_00ead69bc2ab4345901dd6b732f18ca58e2617b14d80c7bb74a959e328e69475_prof);

        
        $__internal_3b97d779d67d57a0744151b8ea066ac63627e59bcac98328f607e6dab6b12cef->leave($__internal_3b97d779d67d57a0744151b8ea066ac63627e59bcac98328f607e6dab6b12cef_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
