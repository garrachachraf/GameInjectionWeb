<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a3d668d321c94361a08a6b016b000fbb6cf2fe4320aa72ec89c2b42ce29ba02e extends Twig_Template
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
        $__internal_73ea2f3e076c7a3596195c77a89f6c08d2b6609429c5ded90b31aeb9cc4191a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ea2f3e076c7a3596195c77a89f6c08d2b6609429c5ded90b31aeb9cc4191a1->enter($__internal_73ea2f3e076c7a3596195c77a89f6c08d2b6609429c5ded90b31aeb9cc4191a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6aa215f59ab3bfbae08aa599467a7237b316a620e50825a13968a1c82c9de343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa215f59ab3bfbae08aa599467a7237b316a620e50825a13968a1c82c9de343->enter($__internal_6aa215f59ab3bfbae08aa599467a7237b316a620e50825a13968a1c82c9de343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_73ea2f3e076c7a3596195c77a89f6c08d2b6609429c5ded90b31aeb9cc4191a1->leave($__internal_73ea2f3e076c7a3596195c77a89f6c08d2b6609429c5ded90b31aeb9cc4191a1_prof);

        
        $__internal_6aa215f59ab3bfbae08aa599467a7237b316a620e50825a13968a1c82c9de343->leave($__internal_6aa215f59ab3bfbae08aa599467a7237b316a620e50825a13968a1c82c9de343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
