<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_46fd535418ddacb123ec6dd925651bc1ea09c60ceed58ae5593857610523c25c extends Twig_Template
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
        $__internal_eef4a76ccc8a719b02d48d9c7683cd956e342b394ee7a5af9d39e164cb9b2b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef4a76ccc8a719b02d48d9c7683cd956e342b394ee7a5af9d39e164cb9b2b4c->enter($__internal_eef4a76ccc8a719b02d48d9c7683cd956e342b394ee7a5af9d39e164cb9b2b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c0e37399c8a90a4bb10a61821268722d1a281f096377e12ef8b5dcc76a38aec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e37399c8a90a4bb10a61821268722d1a281f096377e12ef8b5dcc76a38aec6->enter($__internal_c0e37399c8a90a4bb10a61821268722d1a281f096377e12ef8b5dcc76a38aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_eef4a76ccc8a719b02d48d9c7683cd956e342b394ee7a5af9d39e164cb9b2b4c->leave($__internal_eef4a76ccc8a719b02d48d9c7683cd956e342b394ee7a5af9d39e164cb9b2b4c_prof);

        
        $__internal_c0e37399c8a90a4bb10a61821268722d1a281f096377e12ef8b5dcc76a38aec6->leave($__internal_c0e37399c8a90a4bb10a61821268722d1a281f096377e12ef8b5dcc76a38aec6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
