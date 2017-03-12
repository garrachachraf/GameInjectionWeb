<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_50264b5a8f26c02e9b7e160d17e025ca0d83597531c573fbf42de6a95a6db37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50264b5a8f26c02e9b7e160d17e025ca0d83597531c573fbf42de6a95a6db37a->enter($__internal_50264b5a8f26c02e9b7e160d17e025ca0d83597531c573fbf42de6a95a6db37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f15c9cc6eb8126e625db9c25dfd29ea98a831b3e6ed9cfea5bf285474bcdaff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15c9cc6eb8126e625db9c25dfd29ea98a831b3e6ed9cfea5bf285474bcdaff0->enter($__internal_f15c9cc6eb8126e625db9c25dfd29ea98a831b3e6ed9cfea5bf285474bcdaff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50264b5a8f26c02e9b7e160d17e025ca0d83597531c573fbf42de6a95a6db37a->leave($__internal_50264b5a8f26c02e9b7e160d17e025ca0d83597531c573fbf42de6a95a6db37a_prof);

        
        $__internal_f15c9cc6eb8126e625db9c25dfd29ea98a831b3e6ed9cfea5bf285474bcdaff0->leave($__internal_f15c9cc6eb8126e625db9c25dfd29ea98a831b3e6ed9cfea5bf285474bcdaff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
