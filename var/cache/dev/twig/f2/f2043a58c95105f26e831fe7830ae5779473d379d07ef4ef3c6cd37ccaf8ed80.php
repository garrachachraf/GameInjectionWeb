<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_94c17ed750e6da752c69a1c16927fb991a802512799f9f36f16420b23f04ce28 extends Twig_Template
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
        $__internal_5297e179e3d9138c213c2ecc5304127a54bdb539d291f166624b6f24dcae64e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5297e179e3d9138c213c2ecc5304127a54bdb539d291f166624b6f24dcae64e2->enter($__internal_5297e179e3d9138c213c2ecc5304127a54bdb539d291f166624b6f24dcae64e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c0009fb15267dc126bc46f3a865bca3be3f02d2ea9a1fef77fa2ed47c6616b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0009fb15267dc126bc46f3a865bca3be3f02d2ea9a1fef77fa2ed47c6616b6e->enter($__internal_c0009fb15267dc126bc46f3a865bca3be3f02d2ea9a1fef77fa2ed47c6616b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5297e179e3d9138c213c2ecc5304127a54bdb539d291f166624b6f24dcae64e2->leave($__internal_5297e179e3d9138c213c2ecc5304127a54bdb539d291f166624b6f24dcae64e2_prof);

        
        $__internal_c0009fb15267dc126bc46f3a865bca3be3f02d2ea9a1fef77fa2ed47c6616b6e->leave($__internal_c0009fb15267dc126bc46f3a865bca3be3f02d2ea9a1fef77fa2ed47c6616b6e_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
