<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d8abcaece1106146ffd3c6ceefbfbf032399b2a0a0bcc7d0ee29c851d13ad835 extends Twig_Template
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
        $__internal_9d07c7d51b62289e4cf9a63d6041e23f2247f7263a08ed0c3ae3dc8385b34f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d07c7d51b62289e4cf9a63d6041e23f2247f7263a08ed0c3ae3dc8385b34f54->enter($__internal_9d07c7d51b62289e4cf9a63d6041e23f2247f7263a08ed0c3ae3dc8385b34f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_245ed441ba534c2b52b07bdb932aeba21c41b34dc7230b469bda912a5c9382a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245ed441ba534c2b52b07bdb932aeba21c41b34dc7230b469bda912a5c9382a6->enter($__internal_245ed441ba534c2b52b07bdb932aeba21c41b34dc7230b469bda912a5c9382a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9d07c7d51b62289e4cf9a63d6041e23f2247f7263a08ed0c3ae3dc8385b34f54->leave($__internal_9d07c7d51b62289e4cf9a63d6041e23f2247f7263a08ed0c3ae3dc8385b34f54_prof);

        
        $__internal_245ed441ba534c2b52b07bdb932aeba21c41b34dc7230b469bda912a5c9382a6->leave($__internal_245ed441ba534c2b52b07bdb932aeba21c41b34dc7230b469bda912a5c9382a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
