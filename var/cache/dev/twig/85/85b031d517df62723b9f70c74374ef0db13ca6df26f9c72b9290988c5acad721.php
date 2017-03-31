<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0c53af1c89efe6121b763510619a9dd339e13bb4ebc12c727799a80f96eaebda extends Twig_Template
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
        $__internal_dd9993b969aee0a635b4c61bdf0e9c97c8096a990fb4ede104220f34eb31dcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9993b969aee0a635b4c61bdf0e9c97c8096a990fb4ede104220f34eb31dcba->enter($__internal_dd9993b969aee0a635b4c61bdf0e9c97c8096a990fb4ede104220f34eb31dcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_81f7c105c0c861fb1ef96605c9694fffecee33a957a370970722c88e63eee321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f7c105c0c861fb1ef96605c9694fffecee33a957a370970722c88e63eee321->enter($__internal_81f7c105c0c861fb1ef96605c9694fffecee33a957a370970722c88e63eee321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd9993b969aee0a635b4c61bdf0e9c97c8096a990fb4ede104220f34eb31dcba->leave($__internal_dd9993b969aee0a635b4c61bdf0e9c97c8096a990fb4ede104220f34eb31dcba_prof);

        
        $__internal_81f7c105c0c861fb1ef96605c9694fffecee33a957a370970722c88e63eee321->leave($__internal_81f7c105c0c861fb1ef96605c9694fffecee33a957a370970722c88e63eee321_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
