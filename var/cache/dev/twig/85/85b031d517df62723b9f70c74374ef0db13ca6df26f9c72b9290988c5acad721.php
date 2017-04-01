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
        $__internal_731212f42cf34befc8d991aa42792e64faacaacce20e0e08fc8d30eb0af63d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731212f42cf34befc8d991aa42792e64faacaacce20e0e08fc8d30eb0af63d2a->enter($__internal_731212f42cf34befc8d991aa42792e64faacaacce20e0e08fc8d30eb0af63d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d16f4a1932fd6afaac36fc3faa1a5d0ff270c77c09ec76419ca02266cb42a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16f4a1932fd6afaac36fc3faa1a5d0ff270c77c09ec76419ca02266cb42a5a9->enter($__internal_d16f4a1932fd6afaac36fc3faa1a5d0ff270c77c09ec76419ca02266cb42a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_731212f42cf34befc8d991aa42792e64faacaacce20e0e08fc8d30eb0af63d2a->leave($__internal_731212f42cf34befc8d991aa42792e64faacaacce20e0e08fc8d30eb0af63d2a_prof);

        
        $__internal_d16f4a1932fd6afaac36fc3faa1a5d0ff270c77c09ec76419ca02266cb42a5a9->leave($__internal_d16f4a1932fd6afaac36fc3faa1a5d0ff270c77c09ec76419ca02266cb42a5a9_prof);

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
