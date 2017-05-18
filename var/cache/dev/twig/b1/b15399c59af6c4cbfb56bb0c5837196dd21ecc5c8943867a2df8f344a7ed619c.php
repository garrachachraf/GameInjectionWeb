<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_682acea2027a0c4709a4f404217aec5483009a786bba5d03c42d35946c3b7d15 extends Twig_Template
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
        $__internal_0831d6d0d4a41cbb995d25471bd8ecbba087618a4ea243a1bf04f54590c15038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0831d6d0d4a41cbb995d25471bd8ecbba087618a4ea243a1bf04f54590c15038->enter($__internal_0831d6d0d4a41cbb995d25471bd8ecbba087618a4ea243a1bf04f54590c15038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b4d205da5619d7ab0b2cf957b05ac8381454d820a873102d249cddbce2372ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d205da5619d7ab0b2cf957b05ac8381454d820a873102d249cddbce2372ac8->enter($__internal_b4d205da5619d7ab0b2cf957b05ac8381454d820a873102d249cddbce2372ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0831d6d0d4a41cbb995d25471bd8ecbba087618a4ea243a1bf04f54590c15038->leave($__internal_0831d6d0d4a41cbb995d25471bd8ecbba087618a4ea243a1bf04f54590c15038_prof);

        
        $__internal_b4d205da5619d7ab0b2cf957b05ac8381454d820a873102d249cddbce2372ac8->leave($__internal_b4d205da5619d7ab0b2cf957b05ac8381454d820a873102d249cddbce2372ac8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
