<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3add72b5d93c9d5ccf50277f381abfcc319082ec45028f5627792ac71d4006e7 extends Twig_Template
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
        $__internal_b7ad91b79066c952d9828bce42dbda1275a4a603ed9010742729effe4737f129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ad91b79066c952d9828bce42dbda1275a4a603ed9010742729effe4737f129->enter($__internal_b7ad91b79066c952d9828bce42dbda1275a4a603ed9010742729effe4737f129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_176fe27f2bf25b9cdcd4a4694250ac6476649c0a00ceff281a8bdeb543fcf6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176fe27f2bf25b9cdcd4a4694250ac6476649c0a00ceff281a8bdeb543fcf6cb->enter($__internal_176fe27f2bf25b9cdcd4a4694250ac6476649c0a00ceff281a8bdeb543fcf6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7ad91b79066c952d9828bce42dbda1275a4a603ed9010742729effe4737f129->leave($__internal_b7ad91b79066c952d9828bce42dbda1275a4a603ed9010742729effe4737f129_prof);

        
        $__internal_176fe27f2bf25b9cdcd4a4694250ac6476649c0a00ceff281a8bdeb543fcf6cb->leave($__internal_176fe27f2bf25b9cdcd4a4694250ac6476649c0a00ceff281a8bdeb543fcf6cb_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
