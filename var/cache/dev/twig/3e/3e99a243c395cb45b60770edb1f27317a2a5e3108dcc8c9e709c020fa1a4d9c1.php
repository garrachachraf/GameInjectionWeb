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
        $__internal_ced8f5732f3d2cc7b135bf1a624384c2eb7debd49940efe41083b0305b8d94a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced8f5732f3d2cc7b135bf1a624384c2eb7debd49940efe41083b0305b8d94a6->enter($__internal_ced8f5732f3d2cc7b135bf1a624384c2eb7debd49940efe41083b0305b8d94a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0d8ccb8d3c94f5c8074d479c510cc9b6f12e9825aa076b73a1d6a89e689eac18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ccb8d3c94f5c8074d479c510cc9b6f12e9825aa076b73a1d6a89e689eac18->enter($__internal_0d8ccb8d3c94f5c8074d479c510cc9b6f12e9825aa076b73a1d6a89e689eac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ced8f5732f3d2cc7b135bf1a624384c2eb7debd49940efe41083b0305b8d94a6->leave($__internal_ced8f5732f3d2cc7b135bf1a624384c2eb7debd49940efe41083b0305b8d94a6_prof);

        
        $__internal_0d8ccb8d3c94f5c8074d479c510cc9b6f12e9825aa076b73a1d6a89e689eac18->leave($__internal_0d8ccb8d3c94f5c8074d479c510cc9b6f12e9825aa076b73a1d6a89e689eac18_prof);

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