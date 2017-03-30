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
        $__internal_7875c686fce5bf24b4b3d0fdf7e34a954964d64deb7324fcd99e5bf8ffdb5944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7875c686fce5bf24b4b3d0fdf7e34a954964d64deb7324fcd99e5bf8ffdb5944->enter($__internal_7875c686fce5bf24b4b3d0fdf7e34a954964d64deb7324fcd99e5bf8ffdb5944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b1137aaf46fe5ef9306006e7b6a95252f2e5bc1055742a707bd8cf0ff79fe21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1137aaf46fe5ef9306006e7b6a95252f2e5bc1055742a707bd8cf0ff79fe21a->enter($__internal_b1137aaf46fe5ef9306006e7b6a95252f2e5bc1055742a707bd8cf0ff79fe21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7875c686fce5bf24b4b3d0fdf7e34a954964d64deb7324fcd99e5bf8ffdb5944->leave($__internal_7875c686fce5bf24b4b3d0fdf7e34a954964d64deb7324fcd99e5bf8ffdb5944_prof);

        
        $__internal_b1137aaf46fe5ef9306006e7b6a95252f2e5bc1055742a707bd8cf0ff79fe21a->leave($__internal_b1137aaf46fe5ef9306006e7b6a95252f2e5bc1055742a707bd8cf0ff79fe21a_prof);

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
