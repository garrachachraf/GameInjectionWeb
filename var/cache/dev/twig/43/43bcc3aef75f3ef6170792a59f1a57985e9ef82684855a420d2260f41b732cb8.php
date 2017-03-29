<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f279a6eb8385e09d43dcdce1dc15533f55427e177d32c41672a889f4a300ddff extends Twig_Template
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
        $__internal_aa6b65574f72be4ce4fa0a4d9b7d8bff61c487de7bbf0ca5ff30d3f7be7dcc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6b65574f72be4ce4fa0a4d9b7d8bff61c487de7bbf0ca5ff30d3f7be7dcc9b->enter($__internal_aa6b65574f72be4ce4fa0a4d9b7d8bff61c487de7bbf0ca5ff30d3f7be7dcc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_6d085feda8bff3e2f53041f8fe48b919bd171aec9ee9bc8f9d14e144b9d26478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d085feda8bff3e2f53041f8fe48b919bd171aec9ee9bc8f9d14e144b9d26478->enter($__internal_6d085feda8bff3e2f53041f8fe48b919bd171aec9ee9bc8f9d14e144b9d26478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_aa6b65574f72be4ce4fa0a4d9b7d8bff61c487de7bbf0ca5ff30d3f7be7dcc9b->leave($__internal_aa6b65574f72be4ce4fa0a4d9b7d8bff61c487de7bbf0ca5ff30d3f7be7dcc9b_prof);

        
        $__internal_6d085feda8bff3e2f53041f8fe48b919bd171aec9ee9bc8f9d14e144b9d26478->leave($__internal_6d085feda8bff3e2f53041f8fe48b919bd171aec9ee9bc8f9d14e144b9d26478_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label <?php foreach (\$label_attr as \$k => \$v) { printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
