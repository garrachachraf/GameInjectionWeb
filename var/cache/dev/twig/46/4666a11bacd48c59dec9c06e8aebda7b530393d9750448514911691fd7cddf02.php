<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4df968d5d5c9aa8e99b4ef73cb4bb06c54e7c0b13bb81160944834a9a527e4ed extends Twig_Template
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
        $__internal_46c69821e5ee0b5f3a41718c2b4c0352611b016762d9ccd6c854a2bda42f6afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c69821e5ee0b5f3a41718c2b4c0352611b016762d9ccd6c854a2bda42f6afa->enter($__internal_46c69821e5ee0b5f3a41718c2b4c0352611b016762d9ccd6c854a2bda42f6afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d35727c0842373dde0763b24041ef4a899534375273c99e41fc3839677377a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35727c0842373dde0763b24041ef4a899534375273c99e41fc3839677377a37->enter($__internal_d35727c0842373dde0763b24041ef4a899534375273c99e41fc3839677377a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_46c69821e5ee0b5f3a41718c2b4c0352611b016762d9ccd6c854a2bda42f6afa->leave($__internal_46c69821e5ee0b5f3a41718c2b4c0352611b016762d9ccd6c854a2bda42f6afa_prof);

        
        $__internal_d35727c0842373dde0763b24041ef4a899534375273c99e41fc3839677377a37->leave($__internal_d35727c0842373dde0763b24041ef4a899534375273c99e41fc3839677377a37_prof);

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
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
