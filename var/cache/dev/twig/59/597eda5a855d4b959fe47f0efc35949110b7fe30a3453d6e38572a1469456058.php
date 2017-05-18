<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0cd061a36480159dc9c4c4e5a295fa1b051f4f3515bd39ba30191eaaf0105a75 extends Twig_Template
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
        $__internal_06d027fd182754589c10bddc29e5bea0ab6b3028860f5f927621d37df9e5810a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d027fd182754589c10bddc29e5bea0ab6b3028860f5f927621d37df9e5810a->enter($__internal_06d027fd182754589c10bddc29e5bea0ab6b3028860f5f927621d37df9e5810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f2c43a9d41769fbf285d34e6d86eaeb6af85f76950b1b5ce454a2a2c014f2f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c43a9d41769fbf285d34e6d86eaeb6af85f76950b1b5ce454a2a2c014f2f64->enter($__internal_f2c43a9d41769fbf285d34e6d86eaeb6af85f76950b1b5ce454a2a2c014f2f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_06d027fd182754589c10bddc29e5bea0ab6b3028860f5f927621d37df9e5810a->leave($__internal_06d027fd182754589c10bddc29e5bea0ab6b3028860f5f927621d37df9e5810a_prof);

        
        $__internal_f2c43a9d41769fbf285d34e6d86eaeb6af85f76950b1b5ce454a2a2c014f2f64->leave($__internal_f2c43a9d41769fbf285d34e6d86eaeb6af85f76950b1b5ce454a2a2c014f2f64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
