<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4da97ee7cdf373f654ff3a3a17e18f2c2ed01f6ef3a8386aa6162767b0452e08 extends Twig_Template
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
        $__internal_26d07ffdc9e8857a6021a02fdd35381ed0bf39336d301ec29428c36c80186ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d07ffdc9e8857a6021a02fdd35381ed0bf39336d301ec29428c36c80186ea7->enter($__internal_26d07ffdc9e8857a6021a02fdd35381ed0bf39336d301ec29428c36c80186ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_88b79e237cad4c357215e992cf7ee2e7ec806573d174e79fdca684aee4e092c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b79e237cad4c357215e992cf7ee2e7ec806573d174e79fdca684aee4e092c0->enter($__internal_88b79e237cad4c357215e992cf7ee2e7ec806573d174e79fdca684aee4e092c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_26d07ffdc9e8857a6021a02fdd35381ed0bf39336d301ec29428c36c80186ea7->leave($__internal_26d07ffdc9e8857a6021a02fdd35381ed0bf39336d301ec29428c36c80186ea7_prof);

        
        $__internal_88b79e237cad4c357215e992cf7ee2e7ec806573d174e79fdca684aee4e092c0->leave($__internal_88b79e237cad4c357215e992cf7ee2e7ec806573d174e79fdca684aee4e092c0_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
