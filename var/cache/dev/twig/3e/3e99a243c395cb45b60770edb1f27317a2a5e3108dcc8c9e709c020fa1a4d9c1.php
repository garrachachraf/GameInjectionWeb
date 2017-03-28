<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9a0f527a1f521930a70e8f3cf4647ddddfa3ecec3857aedfe220c9ce417cdf3c extends Twig_Template
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
        $__internal_ae86e82b23678d06b52a362dd285047cac2b7d662cdee35f3afa2f47fead1c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae86e82b23678d06b52a362dd285047cac2b7d662cdee35f3afa2f47fead1c28->enter($__internal_ae86e82b23678d06b52a362dd285047cac2b7d662cdee35f3afa2f47fead1c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_441152583fa92bc67c48059edfe335e59172d815d79629fceeb68ac4f6726e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441152583fa92bc67c48059edfe335e59172d815d79629fceeb68ac4f6726e58->enter($__internal_441152583fa92bc67c48059edfe335e59172d815d79629fceeb68ac4f6726e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ae86e82b23678d06b52a362dd285047cac2b7d662cdee35f3afa2f47fead1c28->leave($__internal_ae86e82b23678d06b52a362dd285047cac2b7d662cdee35f3afa2f47fead1c28_prof);

        
        $__internal_441152583fa92bc67c48059edfe335e59172d815d79629fceeb68ac4f6726e58->leave($__internal_441152583fa92bc67c48059edfe335e59172d815d79629fceeb68ac4f6726e58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
