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
        $__internal_01b2ad30848d339c9c982875a266743f06238ea388b82443e6c462ccf4914aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b2ad30848d339c9c982875a266743f06238ea388b82443e6c462ccf4914aeb->enter($__internal_01b2ad30848d339c9c982875a266743f06238ea388b82443e6c462ccf4914aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c99bda0158f27a214709812c5be36d25848d1c0bf02731c1b6b0e31744eda800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99bda0158f27a214709812c5be36d25848d1c0bf02731c1b6b0e31744eda800->enter($__internal_c99bda0158f27a214709812c5be36d25848d1c0bf02731c1b6b0e31744eda800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_01b2ad30848d339c9c982875a266743f06238ea388b82443e6c462ccf4914aeb->leave($__internal_01b2ad30848d339c9c982875a266743f06238ea388b82443e6c462ccf4914aeb_prof);

        
        $__internal_c99bda0158f27a214709812c5be36d25848d1c0bf02731c1b6b0e31744eda800->leave($__internal_c99bda0158f27a214709812c5be36d25848d1c0bf02731c1b6b0e31744eda800_prof);

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
