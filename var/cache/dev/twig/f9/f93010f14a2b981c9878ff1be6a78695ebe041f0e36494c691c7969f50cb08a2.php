<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_3e93fe73f84b0773f1ac780ee5f3a9fdd7bca07355cc18aeecdd5d8b50c4a1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e93fe73f84b0773f1ac780ee5f3a9fdd7bca07355cc18aeecdd5d8b50c4a1cd->enter($__internal_3e93fe73f84b0773f1ac780ee5f3a9fdd7bca07355cc18aeecdd5d8b50c4a1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_76edacb3b8f83f4fb5dabf01165947376727171bcefb6c3e09ba51342a00297b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76edacb3b8f83f4fb5dabf01165947376727171bcefb6c3e09ba51342a00297b->enter($__internal_76edacb3b8f83f4fb5dabf01165947376727171bcefb6c3e09ba51342a00297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e93fe73f84b0773f1ac780ee5f3a9fdd7bca07355cc18aeecdd5d8b50c4a1cd->leave($__internal_3e93fe73f84b0773f1ac780ee5f3a9fdd7bca07355cc18aeecdd5d8b50c4a1cd_prof);

        
        $__internal_76edacb3b8f83f4fb5dabf01165947376727171bcefb6c3e09ba51342a00297b->leave($__internal_76edacb3b8f83f4fb5dabf01165947376727171bcefb6c3e09ba51342a00297b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
