<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_1c665dbb459ca40ce38bedee2245df5aeee83a208f2a867b9d79ef91b5439304 extends Twig_Template
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
        $__internal_f64771d29005a5031aab7df31cf8c22b2e895e5d3025b1b4b52f3c018ce06b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64771d29005a5031aab7df31cf8c22b2e895e5d3025b1b4b52f3c018ce06b9d->enter($__internal_f64771d29005a5031aab7df31cf8c22b2e895e5d3025b1b4b52f3c018ce06b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4726d6c3cd4b6c94ec1f4735bccd53075a3c42b6a773ed647f7c968ba085e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4726d6c3cd4b6c94ec1f4735bccd53075a3c42b6a773ed647f7c968ba085e58->enter($__internal_d4726d6c3cd4b6c94ec1f4735bccd53075a3c42b6a773ed647f7c968ba085e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f64771d29005a5031aab7df31cf8c22b2e895e5d3025b1b4b52f3c018ce06b9d->leave($__internal_f64771d29005a5031aab7df31cf8c22b2e895e5d3025b1b4b52f3c018ce06b9d_prof);

        
        $__internal_d4726d6c3cd4b6c94ec1f4735bccd53075a3c42b6a773ed647f7c968ba085e58->leave($__internal_d4726d6c3cd4b6c94ec1f4735bccd53075a3c42b6a773ed647f7c968ba085e58_prof);

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
