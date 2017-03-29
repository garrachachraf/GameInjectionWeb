<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_46fd535418ddacb123ec6dd925651bc1ea09c60ceed58ae5593857610523c25c extends Twig_Template
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
        $__internal_692ef0d9046aa99a5d95c526edba319562c47a952a3b780fc95bc013576d0dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692ef0d9046aa99a5d95c526edba319562c47a952a3b780fc95bc013576d0dc2->enter($__internal_692ef0d9046aa99a5d95c526edba319562c47a952a3b780fc95bc013576d0dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_95d5aa2ec8fd7074e5691c7fb056d07fc1cf765dc3c37fba656452f42a35e46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d5aa2ec8fd7074e5691c7fb056d07fc1cf765dc3c37fba656452f42a35e46a->enter($__internal_95d5aa2ec8fd7074e5691c7fb056d07fc1cf765dc3c37fba656452f42a35e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_692ef0d9046aa99a5d95c526edba319562c47a952a3b780fc95bc013576d0dc2->leave($__internal_692ef0d9046aa99a5d95c526edba319562c47a952a3b780fc95bc013576d0dc2_prof);

        
        $__internal_95d5aa2ec8fd7074e5691c7fb056d07fc1cf765dc3c37fba656452f42a35e46a->leave($__internal_95d5aa2ec8fd7074e5691c7fb056d07fc1cf765dc3c37fba656452f42a35e46a_prof);

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
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
