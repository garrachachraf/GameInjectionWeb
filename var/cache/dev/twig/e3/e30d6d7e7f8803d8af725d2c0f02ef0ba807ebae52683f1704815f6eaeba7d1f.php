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
        $__internal_579c9a23e8113c4af39548b26e84705e6d16b0c57e29873c658db916af9bf847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579c9a23e8113c4af39548b26e84705e6d16b0c57e29873c658db916af9bf847->enter($__internal_579c9a23e8113c4af39548b26e84705e6d16b0c57e29873c658db916af9bf847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_670297372e9cb31edaf748d947df3a3b42ce3977917367fb06f234423a3b3c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670297372e9cb31edaf748d947df3a3b42ce3977917367fb06f234423a3b3c4f->enter($__internal_670297372e9cb31edaf748d947df3a3b42ce3977917367fb06f234423a3b3c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_579c9a23e8113c4af39548b26e84705e6d16b0c57e29873c658db916af9bf847->leave($__internal_579c9a23e8113c4af39548b26e84705e6d16b0c57e29873c658db916af9bf847_prof);

        
        $__internal_670297372e9cb31edaf748d947df3a3b42ce3977917367fb06f234423a3b3c4f->leave($__internal_670297372e9cb31edaf748d947df3a3b42ce3977917367fb06f234423a3b3c4f_prof);

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
