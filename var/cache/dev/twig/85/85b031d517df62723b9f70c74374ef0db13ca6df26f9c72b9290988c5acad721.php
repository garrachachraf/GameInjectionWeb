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
        $__internal_df32444c303fb7ade0116cb87b2492a62d839dcd791d74eb8954a1a34ed26671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df32444c303fb7ade0116cb87b2492a62d839dcd791d74eb8954a1a34ed26671->enter($__internal_df32444c303fb7ade0116cb87b2492a62d839dcd791d74eb8954a1a34ed26671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2883422234826c36ee37d06ceb6c3698e3845e01c37770438c04f267dac4893c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2883422234826c36ee37d06ceb6c3698e3845e01c37770438c04f267dac4893c->enter($__internal_2883422234826c36ee37d06ceb6c3698e3845e01c37770438c04f267dac4893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df32444c303fb7ade0116cb87b2492a62d839dcd791d74eb8954a1a34ed26671->leave($__internal_df32444c303fb7ade0116cb87b2492a62d839dcd791d74eb8954a1a34ed26671_prof);

        
        $__internal_2883422234826c36ee37d06ceb6c3698e3845e01c37770438c04f267dac4893c->leave($__internal_2883422234826c36ee37d06ceb6c3698e3845e01c37770438c04f267dac4893c_prof);

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
