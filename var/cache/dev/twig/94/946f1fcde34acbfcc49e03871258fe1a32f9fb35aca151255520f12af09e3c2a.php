<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_368085f390edc98d6e57cb305e91449f07dcc32c141c03c510a2229fd4b35252 extends Twig_Template
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
        $__internal_94044950b1cee518030d54e11f9bce1385a8fb7f1cff6f8466235f383bef531d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94044950b1cee518030d54e11f9bce1385a8fb7f1cff6f8466235f383bef531d->enter($__internal_94044950b1cee518030d54e11f9bce1385a8fb7f1cff6f8466235f383bef531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2676e05c5469650a3d2f2795e3f4383fe50451776715c820a7d0515d4db6ee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2676e05c5469650a3d2f2795e3f4383fe50451776715c820a7d0515d4db6ee8d->enter($__internal_2676e05c5469650a3d2f2795e3f4383fe50451776715c820a7d0515d4db6ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_94044950b1cee518030d54e11f9bce1385a8fb7f1cff6f8466235f383bef531d->leave($__internal_94044950b1cee518030d54e11f9bce1385a8fb7f1cff6f8466235f383bef531d_prof);

        
        $__internal_2676e05c5469650a3d2f2795e3f4383fe50451776715c820a7d0515d4db6ee8d->leave($__internal_2676e05c5469650a3d2f2795e3f4383fe50451776715c820a7d0515d4db6ee8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
