<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_42a6b5cb5e360e2218254bff905a18ee14aecc85ed9850d319cb54457d6beeec extends Twig_Template
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
        $__internal_2667cf44c312098aa0356c01d33a448c37e71f1e91a3c502c0784869064c74e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2667cf44c312098aa0356c01d33a448c37e71f1e91a3c502c0784869064c74e5->enter($__internal_2667cf44c312098aa0356c01d33a448c37e71f1e91a3c502c0784869064c74e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_62439d645029b5b29331d09beab158c159aabe4c36f1f14cfb7b9dc51fef71bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62439d645029b5b29331d09beab158c159aabe4c36f1f14cfb7b9dc51fef71bf->enter($__internal_62439d645029b5b29331d09beab158c159aabe4c36f1f14cfb7b9dc51fef71bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2667cf44c312098aa0356c01d33a448c37e71f1e91a3c502c0784869064c74e5->leave($__internal_2667cf44c312098aa0356c01d33a448c37e71f1e91a3c502c0784869064c74e5_prof);

        
        $__internal_62439d645029b5b29331d09beab158c159aabe4c36f1f14cfb7b9dc51fef71bf->leave($__internal_62439d645029b5b29331d09beab158c159aabe4c36f1f14cfb7b9dc51fef71bf_prof);

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
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
