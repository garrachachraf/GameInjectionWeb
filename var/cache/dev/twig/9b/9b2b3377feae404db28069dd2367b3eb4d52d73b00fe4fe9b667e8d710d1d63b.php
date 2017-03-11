<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_6b9129cdd6b3c5e5fbffcbcbcc186ea57ff84407a9b319bb1a8d2cfd8d78b2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9129cdd6b3c5e5fbffcbcbcc186ea57ff84407a9b319bb1a8d2cfd8d78b2d2->enter($__internal_6b9129cdd6b3c5e5fbffcbcbcc186ea57ff84407a9b319bb1a8d2cfd8d78b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7aff701f2c78d4460cff62435266f5b375361d831e5d088440876a0bfc672be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aff701f2c78d4460cff62435266f5b375361d831e5d088440876a0bfc672be4->enter($__internal_7aff701f2c78d4460cff62435266f5b375361d831e5d088440876a0bfc672be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6b9129cdd6b3c5e5fbffcbcbcc186ea57ff84407a9b319bb1a8d2cfd8d78b2d2->leave($__internal_6b9129cdd6b3c5e5fbffcbcbcc186ea57ff84407a9b319bb1a8d2cfd8d78b2d2_prof);

        
        $__internal_7aff701f2c78d4460cff62435266f5b375361d831e5d088440876a0bfc672be4->leave($__internal_7aff701f2c78d4460cff62435266f5b375361d831e5d088440876a0bfc672be4_prof);

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
", "@Framework/Form/form_errors.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
