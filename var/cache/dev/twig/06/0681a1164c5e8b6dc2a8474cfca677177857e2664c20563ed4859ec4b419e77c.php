<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_65999e104256e2705bbee155d4652e853c33e1f4a2b5f3f3e3890e58b250a087 extends Twig_Template
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
        $__internal_e4d832ea336ae6044e5dcace3e427dc43ae39319d43f86d40b6b153c0e827639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d832ea336ae6044e5dcace3e427dc43ae39319d43f86d40b6b153c0e827639->enter($__internal_e4d832ea336ae6044e5dcace3e427dc43ae39319d43f86d40b6b153c0e827639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_096ccab97acf0d34049f67444770295392fb6a4d9a19addae2e99e46e076c3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096ccab97acf0d34049f67444770295392fb6a4d9a19addae2e99e46e076c3d3->enter($__internal_096ccab97acf0d34049f67444770295392fb6a4d9a19addae2e99e46e076c3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e4d832ea336ae6044e5dcace3e427dc43ae39319d43f86d40b6b153c0e827639->leave($__internal_e4d832ea336ae6044e5dcace3e427dc43ae39319d43f86d40b6b153c0e827639_prof);

        
        $__internal_096ccab97acf0d34049f67444770295392fb6a4d9a19addae2e99e46e076c3d3->leave($__internal_096ccab97acf0d34049f67444770295392fb6a4d9a19addae2e99e46e076c3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
