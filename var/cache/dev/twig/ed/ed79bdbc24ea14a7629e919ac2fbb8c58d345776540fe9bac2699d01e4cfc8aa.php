<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8950311a0a97302ffc2cd978334442161deaa6c691d2e4ae6a776e160789542b extends Twig_Template
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
        $__internal_faf8c9e8329fc2cba4df36475d4ce2aa9c552e74bc38249116eaf17d581ca7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf8c9e8329fc2cba4df36475d4ce2aa9c552e74bc38249116eaf17d581ca7c7->enter($__internal_faf8c9e8329fc2cba4df36475d4ce2aa9c552e74bc38249116eaf17d581ca7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_238a68bdab1fe923ad7145db362a75153c57cf0a1d885c9b5b6e00cbbb8e0829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238a68bdab1fe923ad7145db362a75153c57cf0a1d885c9b5b6e00cbbb8e0829->enter($__internal_238a68bdab1fe923ad7145db362a75153c57cf0a1d885c9b5b6e00cbbb8e0829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_faf8c9e8329fc2cba4df36475d4ce2aa9c552e74bc38249116eaf17d581ca7c7->leave($__internal_faf8c9e8329fc2cba4df36475d4ce2aa9c552e74bc38249116eaf17d581ca7c7_prof);

        
        $__internal_238a68bdab1fe923ad7145db362a75153c57cf0a1d885c9b5b6e00cbbb8e0829->leave($__internal_238a68bdab1fe923ad7145db362a75153c57cf0a1d885c9b5b6e00cbbb8e0829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
