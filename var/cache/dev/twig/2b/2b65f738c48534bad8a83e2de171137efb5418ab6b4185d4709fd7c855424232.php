<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e9c8a61fc66995300396b5c3421d12e9c82c59cd91c55214379977fe7a7eb383 extends Twig_Template
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
        $__internal_e395ba9e9de8530284cbb37831c5ffb23503de189243c4668175130e69ef8c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e395ba9e9de8530284cbb37831c5ffb23503de189243c4668175130e69ef8c00->enter($__internal_e395ba9e9de8530284cbb37831c5ffb23503de189243c4668175130e69ef8c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_893fa8a25eff6548d1b50c93aac3e0ce28b05bf0bc16303bedf5b316d79f2ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893fa8a25eff6548d1b50c93aac3e0ce28b05bf0bc16303bedf5b316d79f2ce4->enter($__internal_893fa8a25eff6548d1b50c93aac3e0ce28b05bf0bc16303bedf5b316d79f2ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e395ba9e9de8530284cbb37831c5ffb23503de189243c4668175130e69ef8c00->leave($__internal_e395ba9e9de8530284cbb37831c5ffb23503de189243c4668175130e69ef8c00_prof);

        
        $__internal_893fa8a25eff6548d1b50c93aac3e0ce28b05bf0bc16303bedf5b316d79f2ce4->leave($__internal_893fa8a25eff6548d1b50c93aac3e0ce28b05bf0bc16303bedf5b316d79f2ce4_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
