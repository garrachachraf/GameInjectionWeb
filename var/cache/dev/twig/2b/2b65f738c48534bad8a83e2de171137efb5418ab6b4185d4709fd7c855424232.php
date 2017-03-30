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
        $__internal_a6a44b429779d779fc25e32c2d11fc3231302d4f4fe9ad4dabd8806a6c5cb9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a44b429779d779fc25e32c2d11fc3231302d4f4fe9ad4dabd8806a6c5cb9df->enter($__internal_a6a44b429779d779fc25e32c2d11fc3231302d4f4fe9ad4dabd8806a6c5cb9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_10c99f83e32c1f7b981dc99cd5524e173770efd0e880d8470b948149f05100cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c99f83e32c1f7b981dc99cd5524e173770efd0e880d8470b948149f05100cc->enter($__internal_10c99f83e32c1f7b981dc99cd5524e173770efd0e880d8470b948149f05100cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a6a44b429779d779fc25e32c2d11fc3231302d4f4fe9ad4dabd8806a6c5cb9df->leave($__internal_a6a44b429779d779fc25e32c2d11fc3231302d4f4fe9ad4dabd8806a6c5cb9df_prof);

        
        $__internal_10c99f83e32c1f7b981dc99cd5524e173770efd0e880d8470b948149f05100cc->leave($__internal_10c99f83e32c1f7b981dc99cd5524e173770efd0e880d8470b948149f05100cc_prof);

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
