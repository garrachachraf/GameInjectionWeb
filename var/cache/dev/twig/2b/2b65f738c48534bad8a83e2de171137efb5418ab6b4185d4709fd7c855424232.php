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
        $__internal_db53c4d983c000bd6ccc85f38239d4086aca03d909c55f6b17be38edb1320dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db53c4d983c000bd6ccc85f38239d4086aca03d909c55f6b17be38edb1320dcd->enter($__internal_db53c4d983c000bd6ccc85f38239d4086aca03d909c55f6b17be38edb1320dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_68dcfc222e668d700020d8c10af167205b830e969adf7f63daceaac146e6d5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dcfc222e668d700020d8c10af167205b830e969adf7f63daceaac146e6d5ea->enter($__internal_68dcfc222e668d700020d8c10af167205b830e969adf7f63daceaac146e6d5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db53c4d983c000bd6ccc85f38239d4086aca03d909c55f6b17be38edb1320dcd->leave($__internal_db53c4d983c000bd6ccc85f38239d4086aca03d909c55f6b17be38edb1320dcd_prof);

        
        $__internal_68dcfc222e668d700020d8c10af167205b830e969adf7f63daceaac146e6d5ea->leave($__internal_68dcfc222e668d700020d8c10af167205b830e969adf7f63daceaac146e6d5ea_prof);

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
