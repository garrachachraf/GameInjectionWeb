<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a10387d89c719a6b0fd524790b83bccdd6e88136b9757d47aa80d71fbfc79a96 extends Twig_Template
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
        $__internal_4e66c4c6a41f5aeb4e9c2883ca774bcc5ece7ff02e3d54f4dcbff9fb574901a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e66c4c6a41f5aeb4e9c2883ca774bcc5ece7ff02e3d54f4dcbff9fb574901a1->enter($__internal_4e66c4c6a41f5aeb4e9c2883ca774bcc5ece7ff02e3d54f4dcbff9fb574901a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_834be690ada2b193c68730f13fb1ec2ac01304360b3129c956536e5eaba02cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834be690ada2b193c68730f13fb1ec2ac01304360b3129c956536e5eaba02cd2->enter($__internal_834be690ada2b193c68730f13fb1ec2ac01304360b3129c956536e5eaba02cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4e66c4c6a41f5aeb4e9c2883ca774bcc5ece7ff02e3d54f4dcbff9fb574901a1->leave($__internal_4e66c4c6a41f5aeb4e9c2883ca774bcc5ece7ff02e3d54f4dcbff9fb574901a1_prof);

        
        $__internal_834be690ada2b193c68730f13fb1ec2ac01304360b3129c956536e5eaba02cd2->leave($__internal_834be690ada2b193c68730f13fb1ec2ac01304360b3129c956536e5eaba02cd2_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
