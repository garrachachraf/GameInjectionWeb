<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_ce67c1c5d06885fe01113c094879844e8b4e93db9274c0963787d0b8f48623ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce67c1c5d06885fe01113c094879844e8b4e93db9274c0963787d0b8f48623ff->enter($__internal_ce67c1c5d06885fe01113c094879844e8b4e93db9274c0963787d0b8f48623ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e2a8fc7c001788b0c693a129a7af326492a2787827c366dcbccf3d5150a263a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a8fc7c001788b0c693a129a7af326492a2787827c366dcbccf3d5150a263a0->enter($__internal_e2a8fc7c001788b0c693a129a7af326492a2787827c366dcbccf3d5150a263a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ce67c1c5d06885fe01113c094879844e8b4e93db9274c0963787d0b8f48623ff->leave($__internal_ce67c1c5d06885fe01113c094879844e8b4e93db9274c0963787d0b8f48623ff_prof);

        
        $__internal_e2a8fc7c001788b0c693a129a7af326492a2787827c366dcbccf3d5150a263a0->leave($__internal_e2a8fc7c001788b0c693a129a7af326492a2787827c366dcbccf3d5150a263a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
