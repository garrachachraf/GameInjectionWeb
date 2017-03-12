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
        $__internal_663dcfab4ee7d3824dea7b3c2cc753b843f3133def6d0cf96b09b7953d66b57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663dcfab4ee7d3824dea7b3c2cc753b843f3133def6d0cf96b09b7953d66b57c->enter($__internal_663dcfab4ee7d3824dea7b3c2cc753b843f3133def6d0cf96b09b7953d66b57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_746e4020006f19ca1b4c5bdf029385f7e51913ba62892ae59fdbf03c12742df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746e4020006f19ca1b4c5bdf029385f7e51913ba62892ae59fdbf03c12742df6->enter($__internal_746e4020006f19ca1b4c5bdf029385f7e51913ba62892ae59fdbf03c12742df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_663dcfab4ee7d3824dea7b3c2cc753b843f3133def6d0cf96b09b7953d66b57c->leave($__internal_663dcfab4ee7d3824dea7b3c2cc753b843f3133def6d0cf96b09b7953d66b57c_prof);

        
        $__internal_746e4020006f19ca1b4c5bdf029385f7e51913ba62892ae59fdbf03c12742df6->leave($__internal_746e4020006f19ca1b4c5bdf029385f7e51913ba62892ae59fdbf03c12742df6_prof);

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
