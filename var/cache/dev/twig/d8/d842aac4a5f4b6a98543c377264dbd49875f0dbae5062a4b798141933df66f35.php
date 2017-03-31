<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ffcc5bd22b3f2d946c45ce92fd0f2f6bebdbe04e0d4517d8bdaaafb5dfbe2f48 extends Twig_Template
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
        $__internal_564e43d6f23bc1a036a3fbe678baa453616142f3b54661534868ccf95a81c5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564e43d6f23bc1a036a3fbe678baa453616142f3b54661534868ccf95a81c5a8->enter($__internal_564e43d6f23bc1a036a3fbe678baa453616142f3b54661534868ccf95a81c5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_027206f672b5fe9b64362f218118d84fc320d4a2ddfba2bc09255dead07fa2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027206f672b5fe9b64362f218118d84fc320d4a2ddfba2bc09255dead07fa2f3->enter($__internal_027206f672b5fe9b64362f218118d84fc320d4a2ddfba2bc09255dead07fa2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_564e43d6f23bc1a036a3fbe678baa453616142f3b54661534868ccf95a81c5a8->leave($__internal_564e43d6f23bc1a036a3fbe678baa453616142f3b54661534868ccf95a81c5a8_prof);

        
        $__internal_027206f672b5fe9b64362f218118d84fc320d4a2ddfba2bc09255dead07fa2f3->leave($__internal_027206f672b5fe9b64362f218118d84fc320d4a2ddfba2bc09255dead07fa2f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
