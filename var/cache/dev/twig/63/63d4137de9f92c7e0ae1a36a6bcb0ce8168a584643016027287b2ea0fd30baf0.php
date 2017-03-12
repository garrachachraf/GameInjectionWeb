<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_4d8619998eac9da2450c8198afc05c107efc1027d31ed9f0b1a35bb7998373d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8619998eac9da2450c8198afc05c107efc1027d31ed9f0b1a35bb7998373d5->enter($__internal_4d8619998eac9da2450c8198afc05c107efc1027d31ed9f0b1a35bb7998373d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_75b06fa3906eb5b9909b39c83911f3cd694f66e1a859cc862e26d79f316810da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b06fa3906eb5b9909b39c83911f3cd694f66e1a859cc862e26d79f316810da->enter($__internal_75b06fa3906eb5b9909b39c83911f3cd694f66e1a859cc862e26d79f316810da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4d8619998eac9da2450c8198afc05c107efc1027d31ed9f0b1a35bb7998373d5->leave($__internal_4d8619998eac9da2450c8198afc05c107efc1027d31ed9f0b1a35bb7998373d5_prof);

        
        $__internal_75b06fa3906eb5b9909b39c83911f3cd694f66e1a859cc862e26d79f316810da->leave($__internal_75b06fa3906eb5b9909b39c83911f3cd694f66e1a859cc862e26d79f316810da_prof);

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
", "@Framework/Form/form.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
