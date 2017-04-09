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
        $__internal_232650b2f3d747c5c5a41e675cf57af173458d86b6344fa41b5feaf63b8b9d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232650b2f3d747c5c5a41e675cf57af173458d86b6344fa41b5feaf63b8b9d01->enter($__internal_232650b2f3d747c5c5a41e675cf57af173458d86b6344fa41b5feaf63b8b9d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c92f4b46f02d7d99263a1b8613e5473d5659d6577e04de2f13295875d08737c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92f4b46f02d7d99263a1b8613e5473d5659d6577e04de2f13295875d08737c8->enter($__internal_c92f4b46f02d7d99263a1b8613e5473d5659d6577e04de2f13295875d08737c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_232650b2f3d747c5c5a41e675cf57af173458d86b6344fa41b5feaf63b8b9d01->leave($__internal_232650b2f3d747c5c5a41e675cf57af173458d86b6344fa41b5feaf63b8b9d01_prof);

        
        $__internal_c92f4b46f02d7d99263a1b8613e5473d5659d6577e04de2f13295875d08737c8->leave($__internal_c92f4b46f02d7d99263a1b8613e5473d5659d6577e04de2f13295875d08737c8_prof);

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
