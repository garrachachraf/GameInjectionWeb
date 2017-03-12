<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_de2e5682ac0cdc32da51167a23750c6a7db4977ffd2031b23aef1d9639f54ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2e5682ac0cdc32da51167a23750c6a7db4977ffd2031b23aef1d9639f54ef4->enter($__internal_de2e5682ac0cdc32da51167a23750c6a7db4977ffd2031b23aef1d9639f54ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4d0593f4cd36db0d0adafd0b75a6d5d875cf1a57efbcd2432a1bb5ab53802a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0593f4cd36db0d0adafd0b75a6d5d875cf1a57efbcd2432a1bb5ab53802a46->enter($__internal_4d0593f4cd36db0d0adafd0b75a6d5d875cf1a57efbcd2432a1bb5ab53802a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_de2e5682ac0cdc32da51167a23750c6a7db4977ffd2031b23aef1d9639f54ef4->leave($__internal_de2e5682ac0cdc32da51167a23750c6a7db4977ffd2031b23aef1d9639f54ef4_prof);

        
        $__internal_4d0593f4cd36db0d0adafd0b75a6d5d875cf1a57efbcd2432a1bb5ab53802a46->leave($__internal_4d0593f4cd36db0d0adafd0b75a6d5d875cf1a57efbcd2432a1bb5ab53802a46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
