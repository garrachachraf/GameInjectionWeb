<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fbec2c376f212600105846c348f93db19590a114bdfb973bf78719d0e66c0fe7 extends Twig_Template
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
        $__internal_6c9bffe5bf0df5348f2ac58ee9a613f530bdf1ce696c6e163ea906e542f00139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9bffe5bf0df5348f2ac58ee9a613f530bdf1ce696c6e163ea906e542f00139->enter($__internal_6c9bffe5bf0df5348f2ac58ee9a613f530bdf1ce696c6e163ea906e542f00139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5fe521d824ef84ff1d03241953f69e40a54111d8cf5abf69e636d420d3cc4305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe521d824ef84ff1d03241953f69e40a54111d8cf5abf69e636d420d3cc4305->enter($__internal_5fe521d824ef84ff1d03241953f69e40a54111d8cf5abf69e636d420d3cc4305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6c9bffe5bf0df5348f2ac58ee9a613f530bdf1ce696c6e163ea906e542f00139->leave($__internal_6c9bffe5bf0df5348f2ac58ee9a613f530bdf1ce696c6e163ea906e542f00139_prof);

        
        $__internal_5fe521d824ef84ff1d03241953f69e40a54111d8cf5abf69e636d420d3cc4305->leave($__internal_5fe521d824ef84ff1d03241953f69e40a54111d8cf5abf69e636d420d3cc4305_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
