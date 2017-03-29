<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_23c6b6295c3e6eb7af816e6ca3cea2fe2721ee61214a6bad35452d3889925bef extends Twig_Template
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
        $__internal_0a01392c609e46ce12e37fbc7a30d70bd261e78ca75498d16a8fbddb1a452743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a01392c609e46ce12e37fbc7a30d70bd261e78ca75498d16a8fbddb1a452743->enter($__internal_0a01392c609e46ce12e37fbc7a30d70bd261e78ca75498d16a8fbddb1a452743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1279d43100c29d5829a07e2d4cd4b3608c0209db5f54fd03583518b92a9575a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1279d43100c29d5829a07e2d4cd4b3608c0209db5f54fd03583518b92a9575a4->enter($__internal_1279d43100c29d5829a07e2d4cd4b3608c0209db5f54fd03583518b92a9575a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0a01392c609e46ce12e37fbc7a30d70bd261e78ca75498d16a8fbddb1a452743->leave($__internal_0a01392c609e46ce12e37fbc7a30d70bd261e78ca75498d16a8fbddb1a452743_prof);

        
        $__internal_1279d43100c29d5829a07e2d4cd4b3608c0209db5f54fd03583518b92a9575a4->leave($__internal_1279d43100c29d5829a07e2d4cd4b3608c0209db5f54fd03583518b92a9575a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
